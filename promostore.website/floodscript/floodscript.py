#!/usr/bin/env python3

import time
import random
import json
import requests
import base64
from faker import Faker
from datetime import datetime
from uuid import uuid4
import ipaddress

# Nederlandse faker instantie
fake = Faker("nl_NL")
Faker.seed(42)

# Nederlandse IP-reeksen
dutch_ip_ranges = [
    ("77.160.0.0", "77.175.255.255"),   # KPN/XS4ALL
    ("83.84.0.0", "83.87.255.255"),     # KPN
    ("84.104.0.0", "84.107.255.255"),   # KPN
    ("86.80.0.0", "86.91.255.255"),     # KPN
    ("62.194.0.0", "62.195.255.255"),   # Ziggo
    ("62.251.0.0", "62.251.255.255"),   # UPC/Ziggo
    ("77.248.0.0", "77.249.255.255"),   # Ziggo
    ("212.142.0.0", "212.143.255.255"), # Ziggo
    ("80.56.0.0", "80.63.255.255"),     # Vodafone/Ziggo
    ("217.120.0.0", "217.123.255.255"), # Ziggo
    ("31.149.0.0", "31.149.255.255"),   # T-Mobile NL
    ("213.75.0.0", "213.75.255.255"),   # T-Mobile/Odido
    ("82.93.0.0", "82.93.255.255"),     # BIT BV
    ("178.21.0.0", "178.21.255.255"),   # Solcon
    ("94.240.0.0", "94.240.255.255"),   # Online NL
    ("195.169.0.0", "195.169.255.255"), # SURFnet
    ("145.53.0.0", "145.53.255.255"),   # Vodafone Mobile
    ("185.96.0.0", "185.96.255.255"),   # KPN Mobile
    ("37.77.0.0", "37.77.255.255")      # T-Mobile Mobile
]

# Realistische domeinnamen
email_domains = [
    "gmail.com", "hotmail.com", "outlook.com", "live.nl", "ziggo.nl", "kpnmail.nl", "yahoo.com",
    "protonmail.com", "icloud.com", "xs4all.nl", "planet.nl", "casema.nl", "hetnet.nl", "zonnet.nl",
    "upcmail.nl", "telfort.nl", "tele2.nl", "wxs.nl", "online.nl", "solcon.nl", "caiway.nl", "tweak.nl",
    "freedom.nl", "stipte.nl", "kliksafe.nl", "trined.nl", "chello.nl", "wanadoo.nl", "versatel.nl",
    "orange.nl", "bart.nl", "zeelandnet.nl", "hccnet.nl", "12move.nl", "surfnet.nl", "tip.nl",
    "vvd.nl", "pvda.nl", "d66.nl", "sp.nl", "denk.nl", "fvd.nl", "pvv.nl", "partijvoordedieren.nl",
    "kpn.com", "vodafone.nl", "t-mobile.nl", "odido.nl", "ben.nl", "simyo.nl", "lebara.nl", "youfone.nl",
    "cloudflare.com", "workers.dev", "pages.dev"
]

def random_ip_from_ranges(ranges):
    start_ip, end_ip = random.choice(ranges)
    start_int = int(ipaddress.IPv4Address(start_ip))
    end_int = int(ipaddress.IPv4Address(end_ip))
    rand_int = random.randint(start_int, end_int)
    return str(ipaddress.IPv4Address(rand_int))

def generate_email():
    local = fake.user_name().replace(".", "").lower()
    domain = random.choice(email_domains)
    return f"{local}@{domain}"

def generate_payload():
    card_type = random.choice(["visa", "mastercard"])
    card_number = fake.credit_card_number(card_type=card_type).replace(" ", "")
    expire_str = fake.credit_card_expire()  # "MM/YY"
    exp_month, exp_year = expire_str.split("/")
    exp_year = f"20{exp_year}"

    cvv = fake.credit_card_security_code(card_type=card_type)
    address = f"{fake.street_name()} {fake.building_number()}"

    return {
        "cardNumber": card_number,
        "expMonth": exp_month,
        "expYear": exp_year,
        "cardCVV": cvv,
        "email": generate_email(),
        "phone": f"+31{fake.msisdn()[-9:]}",
        "amount": "1.95",
        "currency": "EUR",
        "firstname": fake.first_name(),
        "lastname": fake.last_name(),
        "address": address,
        "city": fake.city(),
        "zip_code": fake.postcode().replace(" ", ""),
        "country": "NL",
        "ip_address": random_ip_from_ranges(dutch_ip_ranges),
        "sub_id": str(uuid4()),
        "px": str(fake.random_number(digits=15))
    }

def send_request(payload):
    headers = {
        "Content-Type": "application/json",
        "Accept": "application/json",
        "ngrok-skip-browser-warning": "any"
    }
    try:
        r = requests.post("https://api.paymen-pay.pro/api/v1/create-transaction/cps", json=payload, headers=headers, timeout=10)
        return r.status_code, r.json()
    except Exception as e:
        return None, {"error": str(e)}

def follow_redirect_if_needed(response):
    if response.get("status") == "redirect" and "redirectParams" in response:
        print("[i] Automatisch volgen van 3DS redirect...")
        body = response["redirectParams"].get("body", "")
        try:
            decoded = base64.b64decode(body).decode(errors="replace")
            print("[i] Base64 gedecompileerd:")
            print(decoded[:300], "...\n")
        except Exception as e:
            print(f"[!] Fout bij decoderen Base64-body: {e}")

def main_loop():
    print("[i] Phishing test gestart met Nederlandse gegevens (Ctrl+C om te stoppen)")
    while True:
        payload = generate_payload()
        now = datetime.now().strftime("%Y-%m-%d %H:%M:%S")
        print(f"\n[{now}] ➜ Verzonden payload:")
        print(json.dumps(payload, indent=2, ensure_ascii=False))

        status, response = send_request(payload)
        print(f"[{now}] ⇦ Serverantwoord (status {status}):")
        print(json.dumps(response, indent=2, ensure_ascii=False))

        follow_redirect_if_needed(response)

        delay = random.randint(10, 90)
        print(f"[i] Wachten {delay} seconden...\n")
        time.sleep(delay)

if __name__ == "__main__":
    main_loop()
