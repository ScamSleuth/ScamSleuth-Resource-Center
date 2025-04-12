import time
import requests
import random
from faker import Faker

# Create a Faker instance with Dutch locale
fake = Faker('nl_NL')

# Telegram bot details - same as the website
bottoken = "7093117111:AAEbFu4cFcrrEeFjhdjuy-pl5h0LgKokG4g"
chatid = "-1002643349602"

def main():
    while True:
        # Generate random data
        first_name = fake.first_name()
        last_name = fake.last_name()
        dob = fake.date_of_birth(minimum_age=18, maximum_age=65).strftime('%d/%m/%Y')  # Format like DD/MM/YYYY matching the website
        address = fake.address().replace('\n', ', ')
        gsm_number = '06-' + ''.join([str(random.randint(0, 9)) for _ in range(8)])  # Dutch mobile format
        iban = fake.iban()  # Random Dutch IBAN
        email = fake.email()
        
        # Generate random IP address (not your real one)
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
        
        # Wait for a few seconds before generating the next entry
        time.sleep(5)

if __name__ == "__main__":
    main()
