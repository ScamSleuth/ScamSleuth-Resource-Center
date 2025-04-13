import time
import requests
import random
import logging
import os
import json
import colorama
from datetime import datetime
from faker import Faker

# Initialize colorama for colored terminal output
colorama.init()

# Terminal colors
class Colors:
    HEADER = '\033[95m'
    BLUE = '\033[94m'
    CYAN = '\033[96m'
    GREEN = '\033[92m'
    YELLOW = '\033[93m'
    RED = '\033[91m'
    ENDC = '\033[0m'
    BOLD = '\033[1m'
    UNDERLINE = '\033[4m'

# Create a Faker instance with Dutch locale
fake = Faker('nl_NL')

# Telegram bot tokens
bot_tokens = [
    "7093117111:AAEbFu4cFcrrEeFjhdjuy-pl5h0LgKokG4g",
    "7540549509:AAF2sa9oNEH57k4y_D5TxkXyJT_g6XVLnK8",
    "7995773919:AAFab9J6ejAPE8f8kxH7tM4_GteRnphiQ-Q"
]
current_token_index = 1  # Start with the second token as it's the one currently uncommented
chatid = "-1002643349602"  # Fixed the stray 'd' character

# Message frequency configuration (in seconds)
MIN_WAIT_TIME = 1  # Minimum wait time between messages
MAX_WAIT_TIME = 10  # Maximum wait time between messages

# Stats file configuration
STATS_FILE = "stats.json"  # File to store submission statistics

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

def load_stats():
    """Load stats data from file or create new if doesn't exist"""
    if os.path.exists(STATS_FILE):
        try:
            with open(STATS_FILE, 'r') as f:
                return json.load(f)
        except (json.JSONDecodeError, IOError) as e:
            logging.error(f"Error loading stats file: {e}")
            # Return default stats if file is corrupted
            return create_default_stats()
    else:
        # Return default stats if file doesn't exist
        return create_default_stats()

def create_default_stats():
    """Create a default stats object with all required fields"""
    return {
        "total_submissions": 0,
        "tokens": {},
        "start_time": datetime.now().strftime("%Y-%m-%d %H:%M:%S"),
        "last_submission_time": None,
        "sessions": {
            "count": 0,
            "current_session_start": datetime.now().strftime("%Y-%m-%d %H:%M:%S"),
            "current_session_submissions": 0
        },
        "errors": {
            "total": 0,
            "by_type": {}
        },
        "performance": {
            "fastest_submission": None,
            "slowest_submission": None,
            "average_submission_time": 0
        }
    }

def update_stats(token, submission_time=None):
    """Update the stats with a successful submission"""
    try:
        # Calculate submission time if not provided
        if submission_time is None:
            submission_time = time.time() - update_stats.last_attempt_time if hasattr(update_stats, 'last_attempt_time') else 0
        
        # Store current time for next calculation
        update_stats.last_attempt_time = time.time()
        
        # Load current stats data
        stats_data = load_stats()
        
        # Increment total count
        stats_data["total_submissions"] += 1
        
        # Update session information
        stats_data["sessions"]["current_session_submissions"] += 1
        
        # Initialize token stats if this is a new token
        token_key = token[:8]  # Use first 8 chars of token as key for privacy
        if token_key not in stats_data["tokens"]:
            stats_data["tokens"][token_key] = {
                "submissions": 0,
                "first_used": datetime.now().strftime("%Y-%m-%d %H:%M:%S"),
                "last_used": None,
                "errors": 0
            }
            
        # Increment token-specific counter
        stats_data["tokens"][token_key]["submissions"] += 1
        stats_data["tokens"][token_key]["last_used"] = datetime.now().strftime("%Y-%m-%d %H:%M:%S")
        
        # Update timestamps
        stats_data["last_submission_time"] = datetime.now().strftime("%Y-%m-%d %H:%M:%S")
        
        # Update performance metrics if we have a valid submission time
        if submission_time > 0:
            # Calculate average (handle first submission case)
            current_avg = stats_data["performance"]["average_submission_time"]
            current_total = stats_data["total_submissions"]
            
            if current_avg == 0:
                stats_data["performance"]["average_submission_time"] = submission_time
            else:
                # Calculate new average excluding the current submission
                existing_sum = current_avg * (current_total - 1)
                # Add current submission and calculate new average
                stats_data["performance"]["average_submission_time"] = (existing_sum + submission_time) / current_total
            
            # Update fastest/slowest submission times
            if stats_data["performance"]["fastest_submission"] is None or submission_time < stats_data["performance"]["fastest_submission"]:
                stats_data["performance"]["fastest_submission"] = submission_time
                
            if stats_data["performance"]["slowest_submission"] is None or submission_time > stats_data["performance"]["slowest_submission"]:
                stats_data["performance"]["slowest_submission"] = submission_time
        
        # Write updated stats back to file
        with open(STATS_FILE, 'w') as f:
            json.dump(stats_data, f, indent=2)
            
    except Exception as e:
        logging.error(f"Error updating stats: {e}")

def record_error(error_type):
    """Record an error in the stats file"""
    try:
        # Load current stats
        stats_data = load_stats()
        
        # Increment total errors
        stats_data["errors"]["total"] += 1
        
        # Initialize error type counter if new
        if error_type not in stats_data["errors"]["by_type"]:
            stats_data["errors"]["by_type"][error_type] = 0
            
        # Increment error type counter
        stats_data["errors"]["by_type"][error_type] += 1
        
        # Write updated stats back to file
        with open(STATS_FILE, 'w') as f:
            json.dump(stats_data, f, indent=2)
            
    except Exception as e:
        logging.error(f"Error recording error stat: {e}")

def clear_screen():
    """Clear the terminal screen"""
    os.system('cls' if os.name == 'nt' else 'clear')

def print_header(stats_data):
    """Print dashboard header with key statistics"""
    total = stats_data.get("total_submissions", 0)
    session_submissions = stats_data.get("sessions", {}).get("current_session_submissions", 0)
    
    print(f"{Colors.BOLD}{Colors.HEADER}{'=' * 60}{Colors.ENDC}")
    print(f"{Colors.BOLD}{Colors.HEADER}               ANTI-SCAM BOT LIVE DASHBOARD{Colors.ENDC}")
    print(f"{Colors.BOLD}{Colors.HEADER}{'=' * 60}{Colors.ENDC}")
    print(f"{Colors.BOLD}Total submissions:{Colors.ENDC} {Colors.GREEN}{total}{Colors.ENDC}")
    print(f"{Colors.BOLD}Current session:{Colors.ENDC} {Colors.GREEN}{session_submissions}{Colors.ENDC}")
    print(f"{Colors.BOLD}Current time:{Colors.ENDC} {Colors.YELLOW}{datetime.now().strftime('%Y-%m-%d %H:%M:%S')}{Colors.ENDC}")
    print(f"{Colors.BOLD}Current token:{Colors.ENDC} {Colors.CYAN}{bot_tokens[current_token_index][:8]}...{Colors.ENDC}")
    print(f"{Colors.BOLD}{Colors.HEADER}{'=' * 60}{Colors.ENDC}")
    print()

def display_submission(person_data, success=True):
    """Display the submitted fake person data with color formatting"""
    # Display basic info
    print(f"{Colors.BOLD}{Colors.BLUE}➤ Submitted data{Colors.ENDC} ({Colors.GREEN}success{Colors.ENDC if success else Colors.RED + 'failed' + Colors.ENDC}):")
    
    # Name and Identity
    print(f"  {Colors.BOLD}Name:{Colors.ENDC} {Colors.CYAN}{person_data['first_name']} {person_data['last_name']}{Colors.ENDC}")
    print(f"  {Colors.BOLD}DoB:{Colors.ENDC} {person_data['dob']}")
    
    # Contact info
    print(f"  {Colors.BOLD}Email:{Colors.ENDC} {Colors.YELLOW}{person_data['email']}{Colors.ENDC}")
    print(f"  {Colors.BOLD}Phone:{Colors.ENDC} {person_data['gsm_number']}")
    
    # Location
    print(f"  {Colors.BOLD}Address:{Colors.ENDC} {person_data['address']}")
    print(f"  {Colors.BOLD}IP:{Colors.ENDC} {Colors.GREEN}{person_data['ip_address']}{Colors.ENDC}")
    
    # Financial
    print(f"  {Colors.BOLD}IBAN:{Colors.ENDC} {Colors.YELLOW}{person_data['iban']}{Colors.ENDC}")
    
    print()

def send_message_to_telegram(message, person_data):
    """
    Send a message to Telegram and handle potential errors.
    Returns True if message was sent successfully, False otherwise.
    """
    global current_token_index
    
    start_time = time.time()
    current_token = bot_tokens[current_token_index]
    url = f"https://api.telegram.org/bot{current_token}/sendMessage"
    
    try:
        payload = {
            'chat_id': chatid,
            'text': message
        }
        
        print(f"{Colors.BOLD}Sending with token {current_token[:8]}...{Colors.ENDC}", end="", flush=True)
        response = requests.post(url, data=payload)
        
        # Check for 403 error or other status codes
        if response.status_code == 403:
            print(f" {Colors.RED}ERROR 403{Colors.ENDC}")
            record_error("403_forbidden")
            
            # Switch to the other token
            current_token_index = (current_token_index + 1) % len(bot_tokens)
            print(f"{Colors.YELLOW}Switching to token {bot_tokens[current_token_index][:8]}...{Colors.ENDC}", end="", flush=True)
            
            # Try again with the new token
            new_token = bot_tokens[current_token_index]
            new_url = f"https://api.telegram.org/bot{new_token}/sendMessage"
            new_response = requests.post(new_url, data=payload)
            
            if new_response.status_code == 200:
                print(f" {Colors.GREEN}SUCCESS{Colors.ENDC}")
                submission_time = time.time() - start_time
                update_stats(new_token, submission_time)
                display_submission(person_data, success=True)
                return True
            else:
                print(f" {Colors.RED}ERROR {new_response.status_code}{Colors.ENDC}")
                record_error(f"second_attempt_{new_response.status_code}")
                display_submission(person_data, success=False)
                return False
        else:
            if response.status_code == 200:
                print(f" {Colors.GREEN}SUCCESS{Colors.ENDC}")
                submission_time = time.time() - start_time
                update_stats(current_token, submission_time)
                display_submission(person_data, success=True)
                return True
            else:
                print(f" {Colors.RED}ERROR {response.status_code}{Colors.ENDC}")
                record_error(f"first_attempt_{response.status_code}")
                display_submission(person_data, success=False)
                return False
            
    except Exception as e:
        print(f" {Colors.RED}EXCEPTION: {str(e)[:50]}{Colors.ENDC}")
        record_error(f"exception_{str(e)[:30]}")
        display_submission(person_data, success=False)
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
    
    # Configure logging - only for errors and critical issues
    logging.basicConfig(
        level=logging.WARNING,  # Only log warnings and above to file
        format='%(asctime)s - %(levelname)s - %(message)s',
        handlers=[
            logging.FileHandler(log_file)
            # No StreamHandler to avoid duplicating on console
        ]
    )
    
    return log_file

def main():
    log_file = setup_logging()
    print(f"{Colors.CYAN}Anti-scam bot started{Colors.ENDC}")
    print(f"{Colors.BOLD}Using chat ID:{Colors.ENDC} {chatid}")
    print(f"{Colors.BOLD}Message frequency:{Colors.ENDC} {MIN_WAIT_TIME}-{MAX_WAIT_TIME} seconds")
    print(f"{Colors.BOLD}Available tokens:{Colors.ENDC} {len(bot_tokens)}")
    print()
    
    # Load stats data at startup
    stats_data = load_stats()
    
    # Increment session count
    stats_data["sessions"]["count"] += 1
    stats_data["sessions"]["current_session_start"] = datetime.now().strftime("%Y-%m-%d %H:%M:%S")
    stats_data["sessions"]["current_session_submissions"] = 0
    
    # Save updated stats
    with open(STATS_FILE, 'w') as f:
        json.dump(stats_data, f, indent=2)
    
    consecutive_failures = 0
    max_consecutive_failures = 5
    submission_count = 0
    clear_frequency = 10  # Clear screen every 10 submissions
    
    while True:
        # Clear screen occasionally to keep it clean
        if submission_count % clear_frequency == 0:
            clear_screen()
            print_header(load_stats())
        
        submission_count += 1
        
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
        
        # Store person data for display
        person_data = {
            'first_name': first_name,
            'last_name': last_name,
            'dob': dob,
            'address': address,
            'gsm_number': gsm_number,
            'iban': iban,
            'email': email,
            'ip_address': ip_address
        }

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
        success = send_message_to_telegram(message, person_data)
        
        if success:
            consecutive_failures = 0
        else:
            consecutive_failures += 1
            print(f"{Colors.YELLOW}Failed to send message. Consecutive failures: {consecutive_failures}{Colors.ENDC}")
            
            # If all tokens are likely blocked
            if consecutive_failures >= max_consecutive_failures:
                print(f"{Colors.RED}Too many consecutive failures. All tokens may be blocked.{Colors.ENDC}")
                print(f"{Colors.YELLOW}Waiting 15 minutes before trying again...{Colors.ENDC}")
                time.sleep(15 * 60)  # Wait 15 minutes
                consecutive_failures = 0
                print(f"{Colors.GREEN}Resuming after cooldown period{Colors.ENDC}")
        
        # Generate a random wait time using the configured values
        wait_time = random.randint(MIN_WAIT_TIME, MAX_WAIT_TIME)
        print(f"{Colors.BOLD}Waiting {wait_time} seconds before next message...{Colors.ENDC}")
        time.sleep(wait_time)

if __name__ == "__main__":
    try:
        main()
    except KeyboardInterrupt:
        print(f"\n{Colors.YELLOW}Bot stopped by user{Colors.ENDC}")
    except Exception as e:
        logging.critical(f"Unhandled exception: {e}", exc_info=True)
        print(f"\n{Colors.RED}Critical error: {str(e)}{Colors.ENDC}")
        record_error(f"unhandled_{str(e)[:30]}")
    finally:
        print(f"{Colors.CYAN}Bot shutting down{Colors.ENDC}")
        
        # Record session end statistics
        try:
            stats_data = load_stats()
            session_submissions = stats_data["sessions"]["current_session_submissions"]
            print(f"Session complete. Sent {session_submissions} submissions in this session.")
            
            # Calculate and log rate
            start_time = datetime.strptime(stats_data["sessions"]["current_session_start"], "%Y-%m-%d %H:%M:%S")
            end_time = datetime.now()
            duration_seconds = (end_time - start_time).total_seconds()
            
            if duration_seconds > 0 and session_submissions > 0:
                rate = session_submissions / (duration_seconds / 60)  # submissions per minute
                print(f"Average submission rate: {rate:.2f} submissions per minute")
        except Exception as ex:
            print(f"{Colors.RED}Error recording final session stats: {ex}{Colors.ENDC}")
