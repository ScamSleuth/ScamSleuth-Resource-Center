# Scam Report: Ledger Wallet Recovery Phrase Phishing

**Scam Date**: April, 2025

**Status**: Resolved

**Geographic Origin**: Potentially Ede/Wageningen area, Netherlands

## Potential Connections & Attribution

This scam shares significant similarities with previously documented Ledger phishing campaigns:
- **security-ledger.live**: Documented at https://github.com/ScamSleuth/ScamSleuth-Resource-Center/security-legder.live
- **updatewallet-ledger.com**: Documented at https://github.com/ScamSleuth/ScamSleuth-Resource-Center/updatewallet-ledger.com

These similarities suggest potential connections to the same scam group or operation.

### Geographic Information
- The physical mail was sent via postservice.nl, a service located in Wageningen, Netherlands
- Based on this distribution method, the scammers may potentially be operating from the Ede/Wageningen area in the Netherlands
- This geographic information could be valuable for law enforcement investigations

---

## Scam Summary  
This is a sophisticated phishing operation targeting Ledger hardware wallet users. The scammers are impersonating Ledger's security team, sending physical mail to victims requesting they "validate" their wallets by providing their recovery phrase, which would give attackers complete access to cryptocurrency assets.

---

## Scam Message (Original Documents)  
The original phishing materials consist of professionally designed documents mimicking official Ledger communications. Full scans of these documents are available at:
- [Image 1 - Main Letter](./Snailmail/page_1.JPG)
- [Image 2 - FAQ Document](./Snailmail/page_2.JPG)

These documents use official-looking branding and formatting to appear legitimate while requesting users to scan a QR code and enter their recovery phrase.

---

## Source Analysis  
- **Impersonated Entity**: Ledger (Cryptocurrency Hardware Wallet Company)  
- **Scammer's Contact Method**: Physical Mail  
- **Website Used**: qrco.de/LedgerCompliance, ledger-compliance.com, ltd-update.com  
- **Hosting Provider/Registrar**: Ultahost, Inc.

---

## Scam Tactics  

### 1. Impersonation & Fear Tactics  
The scammers have created a highly convincing physical letter that mimics official Ledger branding and communication style. The letter establishes urgency by claiming that failure to complete the "mandatory validation" may result in restricted access to the victim's wallet and funds. This creates pressure on victims to act quickly without proper verification.

### 2. Fraudulent Website and Phishing Page  
The QR code in the letter directs victims through a redirect chain to a phishing website:
- Initial scan leads to qrco.de/LedgerCompliance
- This redirects to ltd-update.com
- All domains in the chain were created very recently (within the last 15 days)
- The site uses Cloudflare's IP access rules, targetting the Dutch audience
- The site uses Wordpress

The fraudulent websites appear professionally designed to mimic Ledger's branding and security messaging. The sites ask users to "validate" their wallet by entering their recovery phrase, which would give the scammers complete access to all cryptocurrency stored in the wallet. Technical analysis reveals that entered data is transmitted in real-time to the attackers via Telegram using custom scripts on the server.

### 3. Fake Customer Support
The letter mentions contacting "customer support" for assistance, likely leading to additional social engineering or further attempts to extract sensitive information from users who might be hesitant.

---

## Actions Taken  

### 1. Domain & Hosting Reports  
- Planning to report ledger-compliance.com to Ultahost, Inc. (Registrar)
- Planning to report ltd-update.com to Ultahost, Inc. (Registrar)
- Planning to report to Cloudflare (hosting/proxy service)
- Note: ledger-compliance.com has already been flagged by Microsoft as dangerous

### 2. Third-Party Reports  
- Informed the security community about the scam to help identify the connected Telegram group
- Planning to inform Ledger about the scam
- [Additional reports pending]

---

## Follow-Up & Status Updates  
- **April 14, 2025**: Initial discovery and analysis of phishing materials
- **April 14, 2025**: Domain analysis conducted via ScamTrail
- **April 14, 2025**: ledger-compliance.com has been flagged by Microsoft as dangerous
- **April 14, 2025**: reported the scam to postservice.nl
- **April 15, 2025**: reported the sites qrco.de/LedgerCompliance, ltd-update.com, ledger-compliance.com to Google.
- **April 15, 2025**: reported the sites ltd-update.com, ledger-compliance.com to Cloudflare
- **April 15, 2025**: reported qrco.de/LedgerCompliance to qr-code-generator.com as fraudulent
- **April 15, 2025**: reported the domains to Ultahost.com
- **April 15, 2025**: the service used to host the domains is Routerhosting, US (Cloudzy.com) and it has been informed about the scam
- **April 20, 2025**: the issue has been reported to bit.ly (owner of Qrco.de) and they have marked the link as fraudulent.
- **[Ongoing]**: Continue to monitor for website takedown and additional indicators

---

## Lessons & Takeaways

### 1. **Red Flags & Prevention**
   * **Suspicious Domain Names** → Official Ledger communications only come from ledger.com domains
   * **Requests for Recovery Phrase** → Legitimate crypto companies will NEVER ask for your recovery phrase or seed words
   * **Physical Mail for Crypto Security** → Ledger primarily communicates through their app and email, not postal mail
   * **Recently Created Domains** → The fraudulent domains were created very recently (March 30 and April 11, 2025)
   * **Urgent Security Updates** → Actual security updates don't require sharing your recovery phrase

### 2. **How to Stay Safe**
   * Never share your wallet recovery phrase with anyone under any circumstances - this is the master key to your crypto
   * Verify all communications directly through official Ledger channels (ledger.com website or Ledger Live app)
   * Contact Ledger support directly if you receive suspicious communications
   * Remember that legitimate companies will never ask for your recovery phrase, even during "security updates"
   * Use hardware wallets as intended - the recovery phrase should only be written down physically and stored securely offline

### 3. **Ongoing Scam Awareness**  
For further insights on how scams operate, check out:  
- [**Social Media Scams**](../General/SocialMediaScam.md)  
- [**Telephone Fraud**](../General/TelephoneFraud.md)  
- [**Deep Dive into Scamming**](../General/DiveIntoScamming.md)

---

## Technical Details

### Domain Information:
1. **ledger-compliance.com**
   - Registrar: Ultahost, Inc.
   - Creation Date: March 30, 2025 (0 years, 0 months, 15 days old)
   - Hosting Provider: CLOUDFLARENET
   - IP Address: 172.67.204.150
   - Uses CloudFlare: Yes
   - SSL Certificate: Google Trust Services, Valid from April 1 to June 30, 2025
   - Microsoft has flagged this domain as dangerous

2. **ltd-update.com**
   - Registrar: Ultahost, Inc.
   - Creation Date: April 11, 2025 (0 years, 0 months, 3 days old)
   - Final destination of QR code redirect chain

### Data Exfiltration Method:
- The website includes a JavaScript file (js/secureScript.js) which facilitates data theft
- The script connects to a server-based PHP script (sendToTelegram.php)
- When users enter their recovery phrase, the data is transmitted directly to the scammers via a Telegram group
- This method allows scammers to receive stolen credentials in real-time and act on them immediately

### Document Analysis:
The physical mail contains professional formatting, Ledger's logo, and security-related language designed to appear legitimate. The document specifically requests the user's recovery phrase, which is the primary goal of the scam.

---

## Get Involved  
If you've encountered similar scams, report them to the appropriate authorities.  
For a full list of fraud reporting platforms, visit:  

- [**How to Report Scams**](../General/GetInvolved.md)  

By reporting scams, you help authorities track down criminals, prevent further victims, and contribute to shutting down fraudulent networks.

**Stay alert. Stay informed. Stay safe.**
