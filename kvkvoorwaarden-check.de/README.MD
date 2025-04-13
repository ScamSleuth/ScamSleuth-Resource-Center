# Scam Report: kvkvoorwaarden-check.de
**Scam Date**: April, 2025

**Status**: ACTIVE

## Scam Summary
This scam operation impersonates the Dutch Chamber of Commerce (Kamer van Koophandel or KVK) to trick business owners into visiting a fraudulent website. Scammers use SMS messages claiming recipients must update their business information by a specific deadline, likely to harvest sensitive business or personal data.

## Scam Message (Example from Victim)
"[KAMER VAN KOOPHANDEL] U heeft tot 13 april 2025 om uw gegevens bij te werken. Ga naar https://kvkvoorwaarden-check.de"

**Translation:**
"[CHAMBER OF COMMERCE] You have until April 13, 2025 to update your information. Go to https://kvkvoorwaarden-check.de"

## Source Analysis
* **Impersonated Entity**: Kamer van Koophandel (Dutch Chamber of Commerce)
* **Scammer's Contact Method**: SMS
* **Website Used**: https://kvkvoorwaarden-check.de
* **Hosting Provider/Registrar**: CLOUDFLARENET-EU

## Scam Tactics
1. **Impersonation & Fear Tactics**
   The scammer impersonates the official Dutch Chamber of Commerce (KVK) by using its name in the message. They create a sense of urgency by setting a specific deadline (April 13, 2025), implying negative consequences if the recipient doesn't comply.

2. **Fraudulent Website & Data Theft**
   The scam utilizes a fraudulent domain (kvkvoorwaarden-check.de) with a German (.de) TLD instead of the expected Dutch (.nl) domain that would be used by the legitimate KVK. The website was recently created, as evidenced by its SSL certificate only being valid from April 11, 2025. The fraudulent website collects extensive personal and financial information through a form, including full name, date of birth, address, phone number, bank account details (IBAN), and email address. This information is then automatically sent to the scammers via Telegram messaging.

## Technical Analysis
1. **Domain Analysis**
   * Domain: kvkvoorwaarden-check.de
   * Uses German (.de) TLD instead of Dutch (.nl)
   * SSL Certificate issued by Google Trust Services, valid from April 11, 2025 to July 10, 2025
   * "Hosted" on CloudFlare servers (IP: 188.114.96.0, 188.114.97.0)
   * WHOIS information is incomplete (no registrar, creation date, or expiration date)

2. **Security Indicators**
   * No DNSSEC enabled
   * No SPF records found
   * No DMARC records found
   * No DKIM records found
   * Not currently blacklisted by OpenPhish

3. **Website Code Analysis**
   * The website is designed to mimic the official KVK website, including the official KVK logo
   * Uses Bootstrap for styling and responsive design
   * Contains a data collection form that requests highly sensitive personal and financial information:
     - First name and last name
     - Date of birth
     - Home address and postal code
     - Mobile phone number
     - Bank account number (IBAN)
     - Email address
   
4. **Data Exfiltration Method**
   * The website uses a Telegram bot API to exfiltrate victim data
   * When a user submits the form, all personal information is formatted into a message
   * The data is sent via AJAX to the Telegram API using bot token: "7093117111:AAEbFu4cFcrrEeFjhdjuy-pl5h0LgKokG4g"
   * Information is delivered to Telegram chat ID: "-1002643349602"
   * After successful data exfiltration, the victim is redirected to the legitimate KVK privacy policy page (https://www.kvk.nl/over-kvk/kvk-privacyverklaring-pdf/) to avoid suspicion
   * The script appears to capture the victim's IP address and includes it in the data sent to Telegram, making it even more dangerous for identity theft purposes

5. **Connection to Previous KVK Scams**
   * This scam shows strong resemblance to a previously documented scam at ["mijnkvk.digital"](https://github.com/ScamSleuth/ScamSleuth-Resource-Center/tree/main/mijnkvk.digital).

## Countermeasures
To disrupt the scammers' operation, a Python script has been developed to flood their Telegram channel with fake but realistic-looking Dutch personal data. This approach has several advantages:

1. **Data Pollution**: By flooding the channel with thousands of fake entries, legitimate stolen data becomes difficult to identify among the noise.

2. **Resource Exhaustion**: The constant stream of messages can overwhelm the scammers' ability to process incoming data effectively.

3. **Operational Disruption**: Scammers may waste time attempting to use fake information, reducing their overall efficiency.

The countermeasure script:
- Uses the Python `faker` library with Dutch locale to generate realistic Dutch personal information
- Mimics the exact format of data sent by the actual phishing site
- Sends data directly to the same Telegram bot and channel used by the scammers
- Generates random:
  * Names and addresses
  * Dutch-format mobile numbers
  * Valid-looking IBAN numbers
  * Date of birth values
  * IP addresses
  * Message IDs

This technique effectively poisons the scammers' data collection and introduces significant doubt about which data entries might be legitimate, potentially rendering their entire operation less effective.

## Actions Taken
1. **Domain & Hosting Reports**
   * Report generated using ScamTrail on April 12, 2025 at 02:52:42 UTC
   * Next steps: Report the domain to CloudFlare as a phishing site
   * Report to DENIC (the German domain registry) via abuse@denic.de

2. **Third-Party Reports**
   * Inform the legitimate KVK (kvk.nl) about the impersonation
   * Report to Dutch cybercrime authorities (Fraudehelpdesk.nl)

3. **Telegram Bot Reporting**
   * Report the Telegram bot (token: 7093117111:AAEbFu4cFcrrEeFjhdjuy-pl5h0LgKokG4g) for abuse
   * Report the Telegram chat/channel (ID: -1002643349602) where stolen data is being sent

## Follow-Up & Status Updates
* **April 12, 2025**: Initial scam detection and analysis
* **April 12, 2025**: Deployed countermeasure script to flood scammer's Telegram channel with fake data
* **April 12, 2025**: After around 2000 fake entries the bot has been kicked from the group, this could just be temporarily.
* **April 12, 2025**: Reported the scam at [Meld Misdaad Anoniem.nl](https://meldmisdaadanoniem.nl)
* **April 13, 2025**: The bottokken has changed from 7093117111:AAEbFu4cFcrrEeFjhdjuy-pl5h0LgKokG4g to 7540549509:AAF2sa9oNEH57k4y_D5TxkXyJT_g6XVLnK8
* **Current Status**: Active scam

## Lessons & Takeaways

### 1. **Red Flags & Prevention**
   * **Suspicious Domain** → Official KVK communications use .nl domains, not .de domains
   * **Urgency in Messages** → Official organizations rarely set urgent deadlines via SMS
   * **Grammatical Errors** → While not present in this example, many scam messages contain errors

### 2. **How to Stay Safe**
   * Verify all requests from government agencies through official channels
   * Never click on links in unexpected SMS messages claiming to be from official organizations
   * Go directly to the official KVK website (kvk.nl) by typing it in your browser
   * When in doubt, call the KVK's official phone number to verify any communication

### 3. Ongoing Scam Awareness  
For further insights on how scams operate, check out:  
- [**Social Media Scams**](../General/SocialMediaScam.md)  
- [**Telephone Fraud**](../General/Telefonische_fraude.md)  
- [**Deep Dive into Scamming**](../General/Dive_into_scamming.md)  

---

## Get Involved  
If you’ve encountered similar scams, report them to the appropriate authorities.  

🔹 [**How to Report Scams**](../General/GetInvolved.md)  

By reporting scams, you help authorities track down criminals, prevent further victims, and contribute to shutting down fraudulent networks.  

---

**Stay alert. Stay informed. Stay safe.**
