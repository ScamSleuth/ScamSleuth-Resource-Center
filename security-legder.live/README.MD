# Scam Report: Security-legder.live

**Scam Date**: August 2024  
**Status**: Resolved  

---

## Scam Summary  
Victims received alarming text messages claiming security issues with Ledger Live, urging them to take immediate action by clicking a fraudulent link. The scammers used phishing tactics to steal users' 12 or 24-word seed phrases under the pretense of "Import & Download Your Wallet App."

---

## Scam Message (Example from Victim)  
**"[LEDGER] Beveiligingsproblemen ontdekt in Ledger Live. Voer snel een controle uit om te zien of uw apparaat risico loopt: [www.security-legder.live](http://www.security-legder.live)"**  

**Translation:**  
"[LEDGER] Security issues detected in Ledger Live. Quickly perform a check to see if your device is at risk: [www.security-legder.live](http://www.security-legder.live)."

---

## Source Analysis  
- **Impersonated Entity**: Ledger (cryptocurrency hardware wallet company)  
- **Scammer's Contact Method**: SMS  
- **Website Used**: [www.security-legder.live](http://www.security-legder.live)  
- **Hosting Provider/Registrar**:  
  - **security-legder.live** → Registered by Namecheap  
  - **youcan.store** → Registered by Namecheap, behind Cloudflare  
  - **codeanyapp.com** → Hosted by DigitalOcean, registered via GoDaddy  

---

## Scam Tactics  

### 1. Impersonation & Fear Tactics  
Scammers pretended to be Ledger, a trusted cryptocurrency security company, to induce fear and urgency in victims. The message implied immediate action was required to prevent security risks.

### 2. Fraudulent Website or Payment Link  
Clicking on [www.security-legder.live](http://www.security-legder.live) redirected users through multiple fraudulent websites before reaching a phishing page:  
- **[https://boom1973.youcan.store](https://boom1973.youcan.store)**
- **[https://rocketpool-rpl-shares-net-17598549.codeanyapp.com/atest/LG/connect.html](https://rocketpool-rpl-shares-net-17598549.codeanyapp.com/atest/LG/connect.html)**  

The final site prompted users to enter their **12 or 24-word seed phrase**, which was then stored on a scammer-controlled server before redirecting victims to Ledger's real website.  

### 3. Fake Customer Support or Chatbot  
No chatbot or customer support was used. The scam relied entirely on automated SMS phishing (smishing).

---

## Actions Taken  

### 1. Domain & Hosting Reports  
- **[security-legder.live](http://www.security-legder.live)** → Reported to [Namecheap](https://www.namecheap.com/support/knowledgebase/article.aspx/9196/5/how-and-where-can-i-file-abuse-complaints/)  
- **[youcan.store](https://boom1973.youcan.store)** → Reported to [Cloudflare](https://www.cloudflare.com/trust-hub/reporting-abuse/) and [Amazon (Nameservers)](https://aws.amazon.com/forms/report-abuse)  
- **[codeanyapp.com](https://rocketpool-rpl-shares-net-17598549.codeanyapp.com/atest/LG/connect.html)** → Reported to [GoDaddy](https://supportcenter.godaddy.com/abusereport) and [DigitalOcean](https://www.digitalocean.com/company/contact/abuse)  
- **Ledger.com** → Alerted through their phishing report page: [Ledger Phishing Campaigns Status](https://www.ledger.com/phishing-campaigns-status#help-us)  
- **Google Safe Browsing** → Reported via [Google Safe Browsing](https://safebrowsing.google.com/safebrowsing/report_phish/?hl=en)  

---

## Follow-Up & Status Updates  
- **Update #1**:  
  - Cloudflare put up a warning on **boom1973.youcan.store**, forcing scammers to remove it from their redirect chain.  
  - Visitors to **security-legder.live** were now sent **directly** to the final phishing site.  

- **Update #2**:  
  - **security-legder.live** went offline.  
  - **boom1973.youcan.store** remained online but displayed a Cloudflare warning.  
  - **rocketpool-rpl-shares-net-17598549.codeanyapp.com/atest/LG/connect.html** was still active.  

- **Update #3**:  
  - **boom1973.youcan.store** was suspended.  
  - **rocketpool-rpl-shares-net-17598549.codeanyapp.com/atest/LG/connect.html** was taken down.  
  - The phishing operation was effectively halted.  

---

## Lessons & Takeaways  

### 1. Red Flags & Prevention  
- **Unexpected security warnings via SMS** → Always verify through official sources.  
- **Misspelled domain names** → "Legder" instead of "Ledger" was a clear indicator of fraud.  
- **Multiple redirects** → Scammers use layered redirects to avoid immediate detection.  

### 2. How to Stay Safe  
- Never enter sensitive information on sites linked from unexpected messages.  
- Use **official support channels** to verify any security alerts.  
- Regularly **monitor and report** phishing scams to help protect the community.  

---

## Ongoing Scam Awareness  
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

---

**Stay alert. Stay informed. Stay safe.**
