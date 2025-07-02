# Scam Report: Fake Belastingdienst SMS – iDEAL Payment Fraud

**Scam Date**: July 2025 

**Status**: Ongoing

---

## Scam Summary  
A fraudulent SMS, pretending to come from the Dutch Tax Authority ("Belastingdienst"), pressures the recipient into paying a fabricated tax debt of €148 under the threat of debt collection measures. The message includes a link to a phishing website mimicking official government pages, followed by a fake iDEAL payment flow.

> **Original message:**  
> *"Belastingdienst: Laatste herinnering. Betaal €148,00 via: bd-nl.info om invorderingsmaatregelen te voorkomen."*  

> **English translation:**  
> *"Tax Authority: Final reminder. Pay €148.00 via: bd-nl.info to avoid collection measures."*

---

## Source Analysis  
- **Impersonated Entity**: Belastingdienst (Netherlands Tax Authority)  
- **Scammer's Contact Method**: SMS  
- **Website Used**: `bd-nl.info`  
- **Hosting Provider**: GHOSTnet GmbH / AceRDP.io  
- **IP Address**: `5.175.234.71`  
- **Registrar**: OwnRegistrar, Inc. (IANA 1250)  
- **Domain Registered**: 2025-06-30  
- **Domain Status**: Live (responds to ping)

---

## Scam Tactics  
### 1. Authority Impersonation & Urgency  
The scam uses government authority and legal threat language to create a sense of fear and urgency, prompting immediate action without verification.

### 2. Domain and Hosting Obfuscation
The phishing site includes logic that filters out invalid or suspicious inputs. For example, entering multiple false phone numbers triggers a "nag screen" instead of advancing to the payment capture phase. This suggests:

- Input validation is used to detect fake/test data
- The scam is designed to prevent researchers or automated tools from reaching the credential capture stage
- Only users entering plausibly valid Dutch mobile numbers (e.g., starting with `06`) are allowed to continue

This behavior highlights that the scam kit contains conditional logic, likely implemented in JavaScript or Angular components such as `core_form.js` or `core_token.js`.

### 3. Domain and Hosting Obfuscation  
- Uses a `.info` domain to appear official but avoid detection  
- Hosted on VPS infrastructure often used for disposable phishing sites  
- Registrar and DNS services are linked to infrastructure frequently abused in scams

---

## Actions Taken  
### 1. Carrier / Hosting Provider Reports  
- **2025-07-02**: Reported IP `5.175.234.71` to `abuse@ghostnet.de` (GHOSTnet GmbH – Hosting Provider)  
- **2025-07-02**: Reported domain `bd-nl.info` to `abuse@ownregistrar.com` (OwnRegistrar – Domain Registrar)

### 2. Notifications to Affected Parties  
- Informed Belastingdienst via official [FraudeHelpdesk.nl](https://www.fraudehelpdesk.nl/contact/)

### 3. National Fraud Reporting  
- Submitted scam details to:
  - [FraudeHelpdesk.nl](https://www.fraudehelpdesk.nl/)
  - [Google Safe Browsing](https://safebrowsing.google.com/safebrowsing/report_phish/)
  - [Netcraft Phishing Report](https://report.netcraft.com/)

---

## Lessons & Takeaways  
### 1. Red Flags & Prevention  
- The **Belastingdienst never contacts** citizens via SMS with payment links  
- Legitimate Dutch government sites use `.nl` or `.gov.nl` — not `.info`  
- Urgent payment demands through SMS are a major red flag  

### 2. How to Stay Safe  
- Always verify payment requests through official portals  
- Do not click on payment links in SMS messages claiming to be from government agencies  
- Report suspicious messages to your bank and national fraud center  

---

## Ongoing Scam Awareness  
For more related topics and scam breakdowns, visit:  
- [**Government Impersonation Scams**](../General/GovernmentImpersonation.md)  
- [**Fake Payment Requests**](../General/FakePayments.md)

---

## Get Involved  
If you've seen similar scams, please report them to the proper authorities.  
See: [**How to Report Scams**](../General/GetInvolved.md)

**Stay alert. Stay informed. Stay safe.**
