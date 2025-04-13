import time
import requests
import random
import logging
import os
from datetime import datetime
from faker import Faker

# Create a Faker instance with Dutch locale
fake = Faker('nl_NL')

# Telegram bot tokens
bot_tokens = [
    "7093117111:AAEbFu4cFcrrEeFjhdjuy-pl5h0LgKokG4g",
    "7540549509:AAF2sa9oNEH57k4y_D5TxkXyJT_g6XVLnK8"
]
current_token_index = 1  # Start with the second token as it's the one currently uncommented
chatid = "-1002643349602"

# Message frequency configuration (in seconds)
MIN_WAIT_TIME = 1  # Minimum wait time between messages
MAX_WAIT_TIME = 10  # Maximum wait time between messages

# Email domains list
email_domains = [
    # Common active domains
    "gmail.com", "hotmail.com", "outlook.com", "live.nl", "ziggo.nl",
    "kpnmail.nl", "yahoo.com", "protonmail.com", "icloud.com", "me.com",
    "xs4all.nl", "planet.nl", "casema.nl", "hetnet.nl", "zonnet.nl",
    "upcmail.nl", "telfort.nl", "tele2.nl", "kpnplanet.nl", "wxs.nl",
    "online.nl", "solcon.nl", "caiway.nl", "tweak.nl", "freedom.nl", 
    "stipte.nl", "kliksafe.nl", "trined.nl", "bbned.nl", "weepee.nl",
    
    # Extinct/acquired ISPs and old Dutch email providers
    "telekabel.nl", "worldonline.nl", "chello.nl", "quicknet.nl", 
    "onsnet.nu", "home.nl", "tiscali.nl", "wanadoo.nl", "orange.nl",
    "freeler.nl", "versatel.nl", "raketnet.nl", "demon.nl", "solcon.nl",
    "filternet.nl", "kabelfoon.nl", "introweb.nl", "netvisit.nl",
    "euronet.nl", "compuserve.nl", "compuserve.com", "zeelandnet.nl",
    "multiweb.nl", "cistron.nl", "bart.nl", "hccnet.nl", "12move.nl",
    "surfnet.nl", "daxis.nl", "tip.nl", "knoware.nl", "interbox.nl",
    "luna.nl", "nlnet.nl", "hsvest.nl", "wirehub.nl", "dataweb.nl",
    
    # Political domains featured here in recognition of their impressive ability 
    # to debate anti-scam regulations for years while citizens keep getting fleeced. 
    # Nothing says "we'll get to it eventually" like Dutch political efficiency!
    "vvd.nl", "cda.nl", "pvda.nl", "d66.nl", "groenlinks.nl", "sp.nl",
    "christenunie.nl", "sgp.nl", "denk.nl", "fvd.nl", "partijvoordedieren.nl",
    "bvnl.nl", "volt.nl", "nsc.nl", "ja21.nl", "pvv.nl", "bbb.nl",
    
    # Dutch Telcos added as honorary members of the "we could stop number spoofing 
    # with STIR/SHAKEN but why rush?" club. Perhaps seeing their domains in 
    # scam logs will motivate faster implementation?
    "kpn.com", "vodafone.nl", "t-mobile.nl", "odido.nl", "ben.nl", "simyo.nl",
    "lebara.nl", "youfone.nl", "delta.nl", "tele2.nl", "budget-phone.nl", 
    "hollandsnieuwe.nl", "belsimpel.nl",
    
    # Cloudflare domains included as a special shout-out to the company whose glacial 
    # abuse response times make them the unofficial sponsors of phishing campaigns worldwide.
    # Maybe seeing their own domains in scam logs will finally get their attention?
    "cloudflare.com", "workers.dev", "pages.dev", "email.cloudflare.com",
    "cloudflareaccess.com", "cloudflaressl.com", "cloudflareclient.com",
    "cloudflare-dns.com", "cf-ipfs.com", "trycloudflare.com"
]

# Dutch IP address ranges
# These are common IP ranges allocated to Dutch ISPs
dutch_ip_ranges = [
    # KPN ranges
    ("77.160.0.0", "77.175.255.255"),   # KPN/XS4ALL
    ("83.84.0.0", "83.87.255.255"),     # KPN
    ("84.104.0.0", "84.107.255.255"),   # KPN
    ("86.80.0.0", "86.91.255.255"),     # KPN
    
    # Ziggo/UPC ranges
    ("62.194.0.0", "62.195.255.255"),   # Ziggo
    ("62.251.0.0", "62.251.255.255"),   # UPC/Ziggo
    ("77.248.0.0", "77.249.255.255"),   # Ziggo
    ("212.142.0.0", "212.143.255.255"), # Ziggo
    
    # Vodafone/Ziggo
    ("80.56.0.0", "80.63.255.255"),     # Vodafone/Ziggo
    ("217.120.0.0", "217.123.255.255"), # Ziggo
    
    # T-Mobile/Odido
    ("31.149.0.0", "31.149.255.255"),   # T-Mobile NL
    ("213.75.0.0", "213.75.255.255"),   # T-Mobile/Odido
    
    # Smaller ISPs
    ("82.93.0.0", "82.93.255.255"),     # BIT BV
    ("178.21.0.0", "178.21.255.255"),   # Solcon
    ("94.240.0.0", "94.240.255.255"),   # Online NL
    ("195.169.0.0", "195.169.255.255"), # SURFnet
    
    # Mobile ranges
    ("145.53.0.0", "145.53.255.255"),   # Vodafone Mobile
    ("185.96.0.0", "185.96.255.255"),   # KPN Mobile
    ("37.77.0.0", "37.77.255.255")      # T-Mobile Mobile
]

def generate_dutch_ip():
    """Generate a random IP address from Dutch ranges"""
    # Pick a random range
    ip_range = random.choice(dutch_ip_ranges)
    start_ip, end_ip = ip_range
    
    # Convert IP strings to integers
    start_parts = [int(part) for part in start_ip.split('.')]
    end_parts = [int(part) for part in end_ip.split('.')]
    
    start_int = (start_parts[0] << 24) + (start_parts[1] << 16) + (start_parts[2] << 8) + start_parts[3]
    end_int = (end_parts[0] << 24) + (end_parts[1] << 16) + (end_parts[2] << 8) + end_parts[3]
    
    # Generate a random integer in range
    random_ip_int = random.randint(start_int, end_int)
    
    # Convert back to IP format
    octet1 = (random_ip_int >> 24) & 255
    octet2 = (random_ip_int >> 16) & 255
    octet3 = (random_ip_int >> 8) & 255
    octet4 = random_ip_int & 255
    
    return f"{octet1}.{octet2}.{octet3}.{octet4}"

def send_message_to_telegram(message):
    """
    Send a message to Telegram and handle potential errors.
    Returns True if message was sent successfully, False otherwise.
    """
    global current_token_index
    
    current_token = bot_tokens[current_token_index]
    url = f"https://api.telegram.org/bot{current_token}/sendMessage"
    
    try:
        payload = {
            'chat_id': chatid,
            'text': message
        }
        
        logging.info(f"Sending message using token index {current_token_index}")
        response = requests.post(url, data=payload)
        
        # Check for 403 error or other status codes
        if response.status_code == 403:
            logging.warning(f"Received 403 error with token {current_token[:8]}... Switching tokens...")
            # Switch to the other token
            current_token_index = (current_token_index + 1) % len(bot_tokens)
            logging.info(f"Switched to token index: {current_token_index} (token starts with {bot_tokens[current_token_index][:8]}...)")
            
            # Try again with the new token
            new_token = bot_tokens[current_token_index]
            new_url = f"https://api.telegram.org/bot{new_token}/sendMessage"
            new_response = requests.post(new_url, data=payload)
            
            logging.info(f"New response status: {new_response.status_code}")
            
            # Log a truncated version of the response for security
            response_preview = new_response.text[:100] + "..." if len(new_response.text) > 100 else new_response.text
            logging.info(f"New response preview: {response_preview}")
            
            return new_response.status_code == 200
        else:
            logging.info(f"Response status: {response.status_code}")
            
            # Log a truncated version of the response for security
            response_preview = response.text[:100] + "..." if len(response.text) > 100 else response.text
            logging.info(f"Response preview: {response_preview}")
            
            return response.status_code == 200
            
    except Exception as e:
        logging.error(f"Error sending message: {e}")
        return False

# Set up logging
def setup_logging():
    # Create logs directory if it doesn't exist
    log_dir = "logs"
    if not os.path.exists(log_dir):
        os.makedirs(log_dir)
    
    # Create a log file with timestamp in the filename
    timestamp = datetime.now().strftime("%Y%m%d_%H%M%S")
    log_file = os.path.join(log_dir, f"anti_scam_bot_{timestamp}.log")
    
    # Configure logging
    logging.basicConfig(
        level=logging.INFO,
        format='%(asctime)s - %(levelname)s - %(message)s',
        handlers=[
            logging.FileHandler(log_file),
            logging.StreamHandler()  # Also output to console
        ]
    )
    
    logging.info("Anti-scam bot started")
    logging.info(f"Log file created at: {log_file}")
    return log_file

def main():
    log_file = setup_logging()
    logging.info(f"Using chat ID: {chatid}")
    logging.info(f"Initial bot token index: {current_token_index}")
    logging.info(f"Message frequency configured between {MIN_WAIT_TIME}-{MAX_WAIT_TIME} seconds")
    
    consecutive_failures = 0
    max_consecutive_failures = 5
    
    while True:
        # Generate random data
        first_name = fake.first_name()
        last_name = fake.last_name()
        dob = fake.date_of_birth(minimum_age=18, maximum_age=65).strftime('%d/%m/%Y')
        address = fake.address().replace('\n', ', ')
        gsm_number = '06-' + ''.join([str(random.randint(0, 9)) for _ in range(8)])
        iban = fake.iban()
        
        # Generate more realistic email address
        email_domain = random.choice(email_domains)
        email_username = f"{first_name.lower()}.{last_name.lower()}".replace(" ", "")
        if random.random() < 0.3:  # Sometimes add numbers
            email_username += str(random.randint(1, 99))
        email = f"{email_username}@{email_domain}"
        
        # Generate random IP address from Dutch ranges
        ip_address = generate_dutch_ip()

        # Construct the message exactly as the website does
        message = "======kvk log======\n\n"
        message += f"[Message-Id: {random.randint(1, 1000000)}] \n\n "
        message += "[Information] \n\n "
        message += f"|First Name: {first_name} \n "
        message += f"|Last Name: {last_name} \n "
        message += f"|Date of Birth: {dob} \n "
        message += f"|Address: {address} \n "
        message += f"|GSM Number: {gsm_number} \n "
        message += f"|I-Ban: {iban} \n "
        message += f"|E-mail: {email} \n\n "
        message += f"|Ip Address: {ip_address} \n "
        message += "======kvk log======\n"

        # Send message to Telegram
        success = send_message_to_telegram(message)
        
        if success:
            consecutive_failures = 0
            logging.info("Message sent successfully")
        else:
            consecutive_failures += 1
            logging.warning(f"Failed to send message. Consecutive failures: {consecutive_failures}")
            
            # If both tokens are likely blocked
            if consecutive_failures >= max_consecutive_failures:
                logging.error("Too many consecutive failures. Both tokens may be blocked.")
                logging.info("Waiting 15 minutes before trying again...")
                time.sleep(15 * 60)  # Wait 15 minutes
                consecutive_failures = 0
                logging.info("Resuming after cooldown period")
        
        # Generate a random wait time using the configured values
        wait_time = random.randint(MIN_WAIT_TIME, MAX_WAIT_TIME)
        logging.info(f"Waiting {wait_time} seconds before sending next message...")
        time.sleep(wait_time)

if __name__ == "__main__":
    try:
        main()
    except KeyboardInterrupt:
        logging.info("Bot stopped by user")
    except Exception as e:
        logging.critical(f"Unhandled exception: {e}", exc_info=True)
    finally:
        logging.info("Bot shutting down")
