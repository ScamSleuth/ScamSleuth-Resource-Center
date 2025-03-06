# Bitvavo-info.site 
## Phishing - August 2024

**Status**: Resolved

---

### Scam Summary:
Victims received alarming text messages claiming: 

*"Het 2FA-telefoonnummer is aangepast. Dit nummer is niet langer in gebruik voor beveiligde toegang. Weet u hier niets van? Annuleer via https://bitvavo-info.site".* 

Translation: "Your 2FA phone number has been changed. This number is no longer in use for secure access. If you're unaware of this change, cancel via https://bitvavo-info.site."

- **Number Spoofing**: The scammers [spoofed](https://en.wikipedia.org/wiki/Caller_ID_spoofing) the sender’s phone number, making it appear as though the message originated from Bitvavo itself. This added to the message's credibility and increased the likelihood of victims falling for the scam.

### What Happened:
- **Phishing Tactics**: The link in the text message directed mobile users to a fake site ([bitvavo-info.site](https://bitvavo-info.site)), which then redirected them to another fraudulent domain, [bitvavosecurise.com](https://bitvavosecurise.com). Here, users were prompted to enter their Bitvavo login credentials, unknowingly handing them over to the scammers.
  
- **Misdirection**: On desktop devices, both domains instead presented a copy with altered (erroneous) links of the Oslo University Hospital (Oslo Universitetssykehus) website, further disguising the scam.

### Actions Taken:
- After discovering the scam, I conducted a [WHOIS](https://who.is) lookup for both domains and filed abuse reports with the respective registrars. 
  - **bitvavo-info.site** was registered with [Dynadot](https://www.dynadot.com/report-abuse), which responded quickly and took the necessary actions to address the abuse.
  - **bitvavosecurise.com** was registered with [OwnRegistrar](https://ownregistrar.com/abuse/), and they also took swift action to shut down the fraudulent domain.

- **Missed Step**: In this case, we forgot to investigate where the phishing websites were actually hosted. This could have been different from where the domains were registered. Ideally, I should have traced the IP address to identify the hosting provider for a more complete takedown process.

### Lessons & Takeaways:
- **Stay Alert**: Be cautious of unsolicited messages, especially those urging immediate action or sharing suspicious links. 
- **Verify URLs**: Always check the legitimacy of URLs before clicking, particularly if you receive unexpected security alerts.
- **Be Aware of Spoofing**: Scammers can spoof phone numbers to make their messages seem more legitimate, so be cautious even when the sender appears to be trusted.
- **Report Scams**: If you come across phishing attempts, report them to the appropriate registrars, trace the IP address to identify the hosting provider, and inform the affected service provider.
