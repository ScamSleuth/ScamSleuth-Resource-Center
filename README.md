# Scam Report: updatewallet-ledger.com  

**Scam Date**: February 2025  
**Status**: Resolved  

---

## Scam Summary  

This scam targeted cryptocurrency users by impersonating **LEDGER**, a well-known hardware wallet provider. Victims received fraudulent text messages urging them to **validate their wallets immediately** to avoid restrictions. The messages directed users to a **phishing website (updatewallet-ledger.com)** that mimicked LEDGER’s official site.

Once on the fake website, victims were instructed to select their wallet type and **enter their recovery phrase**, which was then **sent to a Telegram group controlled by scammers**. A fake **loading spinner** was displayed to make the process appear legitimate.  

The phishing domain was hosted by **Cloudflare**, registered through **Ultahost, Inc.**, and lacked proper email authentication (SPF/DMARC), making it a clear red flag. Despite reports, the domain remained active for several days before being flagged across cybersecurity platforms.  

---

## Scam Message (Example from Victim)  

**Message 1:**  
> "[LEDGER] To protect your funds, please validate your wallet now: updatewallet-ledger.com. Failure to do so may result in restrictions."  

**Message 2:**  
> "[LEDGER] The validation of your wallet has not been completed. Please validate your wallet now to keep using your account: https://updatewallet-ledger.com"

---

## Source Analysis  
- **Impersonated Entity**: LEDGER  
- **Scammer's Contact Method**: SMS  
- **Website/Phone Number Used**: updatewallet-ledger.com  
- **Hosting Provider/Registrar**: CLOUDFLARENET / Ultahost, Inc.  

---

## Scam Tactics  

### 1. Impersonation & Fear Tactics  
The scammers impersonated **LEDGER** by sending fake security alerts, using urgency to create panic. Victims were tricked into believing their accounts were at risk.  

### 2. Fraudulent Website & Data Collection  
Clicking the link led users to a **fake LEDGER website** where they were prompted to **select their wallet type**:  
![updatewallet-ledger.com_index.png](./updatewallet-ledger.com_index.png)  

Next, they were asked to **enter their recovery phrase**, which would grant scammers full access to their funds:  
![updatewallet-ledger.com_recovery.png](./updatewallet-ledger.com_recovery.png)  

### 3. Fake Processing Animation  
To appear legitimate, a **loading spinner** was displayed while sending the stolen recovery phrase to a Telegram group using the [secureScript.js](./secureScript.js) and `sendToTelegram.php`.  

---

## Actions Taken  

### 1. Domain & Hosting Reports  
- Reported the domain **updatewallet-ledger.com** to **Ultahost, Inc.**  
- Notified **Cloudflare** of the fraudulent activity.  

### 2. Third-Party Reports  
- Shared domain name with online security platforms to flag it as malicious.  

---

## Follow-Up & Status Updates  
- **2025-02-16**: Domain reported to Ultahost and Cloudflare. No immediate action taken.  
- **2025-02-18**: Scam flagged by multiple cybersecurity forums.  
- **2025-02-22**: Domain still active despite multiple reports.  

---

## Lessons & Takeaways  

### 1. Red Flags & Prevention  
- **Unexpected messages demanding urgent action** → Always verify directly with the company.  
- **Suspicious domains** → LEDGER’s official site uses `ledger.com`, not variations like `updatewallet-ledger.com`.  
- **Never share your recovery phrase** → LEDGER will never ask for it.  

### 2. How to Stay Safe  
- Never trust links in unsolicited messages.  
- Verify the contact details through **official websites**.  
- Report scams to relevant authorities as soon as possible.  

### 3. Ongoing Scam Awareness  
For further insights on how scams operate, check out:  
- [**Social Media Scams**](../General/SocialMediaScam.md)  
- [**Telephone Fraud**](../General/Telefonische_fraude.md)  
- [**Deep Dive into Scamming**](../General/Dive_into_scamming.md)  

---

## Get Involved  
If you've encountered similar scams, report them to the appropriate authorities.  
For a full list of fraud reporting platforms, visit:  

🔹 [**How to Report Scams**](../General/GetInvolved.md)  

By reporting scams, you help authorities track down criminals, prevent further victims, and contribute to shutting down fraudulent networks.  

**Stay alert. Stay informed. Stay safe.**
