# mijnkvk.digital
# Phishing - November 2024

## Scam Summary:
Victims received text messages from a Dutch mobile number (probably spoofed) impersonating the Dutch Chamber of Commerce (KVK) with the following message:
**"[MijnKVK] U heeft tot 1 december 2024 om uw gegevens bij te werken. Nieuwe privacybeleid 2025. Ga verder via: https://mijnkvk.digital"**

Translation: "[MijnKVK] You have until December 1, 2024, to update your details. New privacy policy 2025. Proceed via: https://mijnkvk.digital"

- **Source Analysis**: The phishing attempt involved a fake domain, mijnkvk.digital, designed to mimic the official KVK communications. This domain was registered through NameSilo, and the phishing site was protected by CloudFlare services.

### What Happened:
- **Phishing Tactics**: The link in the message directed users to a fraudulent website that collected personal data, chamber of commerce data, banking information, and IP addresses. The site mimicked official KVK communications to appear legitimate and prompt users to enter sensitive information.

- **Data Collection**: The attackers used a Telegram bot to gather the collected data, exploiting the platform's anonymity features for data exfiltration.

### Actions Taken:
- **Domain and Hosting Reports**:
  - **mijnkvk.digital**: Reported to NameSilo as a fraudulent domain.
  - **CloudFlare**: Reported the site as a phishing site to CloudFlare, which provides CDN services that may inadvertently protect malicious sites.
  - **Telegram**: The bot used for data collection was reported and subsequently blocked on Telegram.
  - **KVK.nl**: The fraud was shared with the Dutch Camber of Commerce.
  - **Fraudehelpdesk**: The site has been reported to a Dutch Fraud team.
- **Countermeasures**: A script was employed to flood the Telegram group with random data, disrupting the attackers' operations.

### Follow up
#### Update #1: 
Following reports and the flood, the Telegram bot was blocked, hindering further data collection efforts by the attackers.

#### Update #2: 
Efforts are ongoing with NameSilo and CloudFlare to ensure the complete takedown of mijnkvk.digital and prevent similar future incidents.

### Lessons & Takeaways:
- **Source Red Flags**: The message originated from a Dutch mobile number, claiming urgent updates from KVK should be scrutinized for authenticity. Official KVK communications do not request updates through unsolicited messages.
- **Domain Name Red Flags**: The domain "mijnkvk.digital" is not associated with KVK. Users should verify URLs independently before proceeding.
- **Platform Misuse**: The use of Telegram for data collection highlights the need for vigilance against platforms that can be exploited for anonymity.
- **Stay Alert**: Be cautious of messages urging immediate action or containing suspicious links. Verify any requests for personal information through official channels.
- **Report Scams**: Promptly report phishing attempts to relevant authorities and service providers to facilitate swift action against malicious sites.


