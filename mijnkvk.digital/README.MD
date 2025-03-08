# Scam Report: MijnKVK.digital  

**Scam Date**: November 2024  
**Status**: Resolved  

---

## Scam Summary  
Victims received text messages from a Dutch mobile number (likely spoofed) impersonating the Dutch Chamber of Commerce (KVK). The message urged recipients to update their details by following a fraudulent link.  

> The phishing attempt involved a fake domain, **mijnkvk.digital**, designed to mimic official KVK communications. This domain was registered through **NameSilo** and protected by **CloudFlare** services.

---

## Scam Message (Example from Victim)  
**"[MijnKVK] U heeft tot 1 december 2024 om uw gegevens bij te werken. Nieuwe privacybeleid 2025. Ga verder via: https://mijnkvk.digital"**  

**Translation:**  
**"[MijnKVK] You have until December 1, 2024, to update your details. New privacy policy 2025. Proceed via: https://mijnkvk.digital"**  

---

## Source Analysis  
- **Impersonated Entity**: Dutch Chamber of Commerce (KVK)  
- **Scammer's Contact Method**: SMS (via spoofed Dutch mobile number)  
- **Website Used**: [mijnkvk.digital](https://mijnkvk.digital)  
- **Hosting Provider/Registrar**: NameSilo  
- **Protection Services**: CloudFlare  
- **Data Collection Method**: Telegram bot  

---

## Scam Tactics  

### 1. Impersonation & Fear Tactics  
- The message mimicked an official notification from KVK, creating a sense of urgency.  
- It pressured recipients to update their details before a given deadline.  

### 2. Fraudulent Website  
- **mijnkvk.digital** was designed to resemble KVK’s official platform.  
- The site collected:  
  - Personal details  
  - Chamber of Commerce data  
  - Banking credentials  
  - IP addresses  

### 3. Telegram for Data Collection  
- A **Telegram bot** was used to collect stolen data, taking advantage of Telegram’s anonymity features.  

---

## Actions Taken  

### 1. Domain & Hosting Reports  
- **mijnkvk.digital**: Reported as fraudulent to NameSilo.  
- **CloudFlare**: Reported as a phishing site.  
- **Telegram**: The bot used for data collection was reported and blocked.  

### 2. Third-Party Reports  
- **KVK.nl**: Informed the Dutch Chamber of Commerce.  
- **Fraudehelpdesk**: Reported to the Dutch fraud prevention team.  
- A script was deployed to flood the Telegram bot with random data, disrupting the scam operation.  

---

## Follow-Up & Status Updates  

### Update #1:  
After reports and flooding efforts, the Telegram bot was initially blocked, hindering data collection.  

### Update #2:  
Ongoing discussions with NameSilo and CloudFlare to ensure the **complete takedown** of mijnkvk.digital.  

### Update #3:  
Despite Telegram error messages confirming the bot was suspended, it was later **reactivated** and able to receive data again using:  
$bottoken = "6375100748:AAF7Jq7te1P0o8pDWEKgwtX87eSKp8uj0J4"; $chatid = "-4676497752";

---

## Lessons & Takeaways  

### 1. Red Flags & Prevention  
- **Unexpected messages demanding urgent action** → Verify through official KVK channels.  
- **Unrecognized domains** → "mijnkvk.digital" is not an official KVK website. Always double-check URLs.  
- **Use of Telegram for data theft** → Be cautious of platforms that allow anonymous data collection.  

### 2. How to Stay Safe  
- Never trust links in unsolicited messages.  
- Verify website legitimacy before entering sensitive information.  
- Report phishing attempts to prevent further victimization.  

---

## Get Involved  
If you’ve encountered similar scams, report them to the appropriate authorities.  

🔹 [**How to Report Scams**](../General/GetInvolved.md)  

By reporting scams, you help authorities track down criminals, prevent further victims, and contribute to shutting down fraudulent networks.  

---

**Stay alert. Stay informed. Stay safe.**
