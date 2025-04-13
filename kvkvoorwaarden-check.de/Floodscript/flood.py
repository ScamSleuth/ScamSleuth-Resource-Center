import time
import requests
import random
from faker import Faker

# Create a Faker instance with Dutch locale
fake = Faker('nl_NL')

# Telegram bot details
bottoken = "7540549509:AAF2sa9oNEH57k4y_D5TxkXyJT_g6XVLnK8"
chatid = "-1002643349602"

email_domains = [
    # Common active domains
    "gmail.com", "hotmail.com", "outlook.com", "live.nl", "ziggo.nl",
    "kpnmail.nl", "yahoo.com", "protonmail.com", "icloud.com", "me.com",
    "xs4all.nl", "planet.nl", "casema.nl", "hetnet.nl", "zonnet.nl",
    "upcmail.nl", "telfort.nl", "tele2.nl", "kpnplanet.nl", "wxs.nl",
    
    # Extinct/acquired ISPs and old Dutch email providers
    "telekabel.nl", "worldonline.nl", "chello.nl", "quicknet.nl", 
    "onsnet.nu", "home.nl", "tiscali.nl", "wanadoo.nl", "orange.nl",
    "freeler.nl", "versatel.nl", "raketnet.nl", "demon.nl", "solcon.nl",
    "filternet.nl", "kabelfoon.nl", "introweb.nl", "netvisit.nl",
    "euronet.nl", "compuserve.nl", "compuserve.com", "zeelandnet.nl",
    "multiweb.nl", "cistron.nl", "bart.nl", "hccnet.nl", "12move.nl",
    "surfnet.nl", "daxis.nl", "tip.nl", "knoware.nl", "interbox.nl",
    "luna.nl", "nlnet.nl", "hsvest.nl", "wirehub.nl", "dataweb.nl",
    
    # Cloudflare domains included as a special shout-out to the company whose glacial 
    # abuse response times make them the unofficial sponsors of phishing campaigns worldwide.
    # Maybe seeing their own domains in scam logs will finally get their attention?
    "cloudflare.com", "workers.dev", "pages.dev", "email.cloudflare.com",
    "cloudflareaccess.com", "cloudflaressl.com", "cloudflareclient.com",
    "cloudflare-dns.com", "cf-ipfs.com", "trycloudflare.com"
]

def main():
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
        
        # Generate random IP address
        ip_address = f"{random.randint(1, 255)}.{random.randint(1, 255)}.{random.randint(1, 255)}.{random.randint(1, 255)}"

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
        url = f"https://api.telegram.org/bot{bottoken}/sendMessage"
        
        # Use requests to send the POST request
        payload = {
            'chat_id': chatid,
            'text': message
        }
        
        response = requests.post(url, data=payload)
        
        # Output the response for debugging purposes
        print(f"Response: {response.text}")
        
        # Generate a random wait time
        wait_time = random.randint(1, 120)
        print(f"Waiting {wait_time} seconds before sending next message...")
        time.sleep(wait_time)

if __name__ == "__main__":
    main()
