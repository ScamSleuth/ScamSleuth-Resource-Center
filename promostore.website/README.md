# Scam Report: Fake Backpack Giveaway (Impersonating Pack Hacker)

**Scam Date**: July, 2025

**Status**: Resolved

---

## Scam Summary

This scam mimics a *Decathlon* giveaway and questionnaire and impersonates *Pack Hacker*. Victims are presented with a professional-looking page promoting a free backpack offer (e.g., The North Face Borealis), which they can "win" after completing a brief survey. When visiting `promostore.website`, users are presented with a clone of the *Pack Hacker* website, used to create legitimacy. After submitting their personal information, users are redirected to `paymen-pay.pro` to pay a small handling fee (€1.95) by credit card. Payment data is harvested through a hidden API call.

> "Win a free backpack! Just pay a small handling fee to claim your prize."

---

## Source Analysis

* **Impersonated Entity**: Pack Hacker ([https://packhacker.com](https://packhacker.com)), Decathlon
* **Scammer's Contact Method**: Social Media Advertisements
* **Website/Phone Number Used**:

  * `https://promostore.website/travel-gear/the-north-face/borealis-backpack/?utm_campaign=6JsRyj3Ky7`
  * `https://paymen-pay.pro`
  * API endpoint: `https://api.paymen-pay.pro/api/v1/create-transaction/cps`
  * Final redirection: `https://pay.cps.lv`
* **Carrier / Hosting Provider**:

  * `promostore.website`: Registered via Namecheap; hosted behind Cloudflare
  * `paymen-pay.pro`: Registered via Porkbun; hosted with Porkbun nameservers
  * `cps.lv`: Registered to Complete Payment Systems SIA in Latvia; also hosted behind Cloudflare — unusual for a payment processor or legitimate banking domain

  * `promostore.website`'s DNS A-record shows 96.9.124.233, that IP-address belongs to [BL Networks](https://blnwx.com)
  * 
---

## Scam Tactics

### 1. Mimicking Trusted Brands

The scam replicates the design and structure of both Pack Hacker and Decathlon branding to lend credibility to the offer, deceiving visitors with professional aesthetics.

### 2. Psychological Manipulation

By offering a high-value item for "free" and asking for a low payment amount (€1.95), the scam reduces suspicion and encourages impulsive action.

### 3. Credit Card Harvesting via Proxy

On `paymen-pay.pro`, victims are instructed to input their full credit card details. The site uses JavaScript to collect this data along with IP, geolocation, and personal info, and sends it via an API request to the scammers. The victim is then forwarded to `cps.lv` — a site that appears to act as a mock payment gateway, also hosted behind Cloudflare, which is atypical for financial institutions and raises red flags.

---

## Actions Taken

### 1. Carrier / Hosting Provider Reports

* **2025-07-04**: Reported promostore.website to Namecheap (abuse@namecheap.com) with link to full investigation.

* **2025-07-04**: Reported paymen-pay.pro to Porkbun (abuse@porkbun.com).

* **2025-07-04**: Reported cps.lv to NIC.lv and CERT.lv regarding suspicious activity.

### 2. Notifications to Affected Parties

* **2025-07-04**: Informed Pack Hacker regarding misuse of their branding and website content.

* **2025-07-04**: Informed Decathlon of the impersonation and use of their brand in the social media campaign.

### 3. National Fraud Reporting

* **2025-07-04**: Scam submitted to Fraudehelpdesk.nl.

---

## Lessons & Takeaways

### 1. Red Flags & Prevention

* Domain names registered very recently (e.g., within 3 weeks of discovery)
* Requests for credit card info in exchange for "free" products
* Presence of third-party payment domains not used by real e-commerce brands
* **Use of Cloudflare protection on a supposed payment gateway (cps.lv)** — legitimate banks and payment processors rarely mask their infrastructure in this way
* The final payment page lacks verifiable banking identifiers (no license, no secure authentication)

### 2. How to Stay Safe

* Verify domain names carefully — slight alterations are often used for phishing
* Be cautious with promotions that request sensitive data for a free prize
* Avoid entering payment data on unknown or redirected domains
* Use virtual or disposable credit cards when testing questionable offers

---

## Ongoing Scam Awareness

For more related topics and scam breakdowns, visit:

* [**Social Media Scams**](../General/SocialMediaScam.md)
* [**Phishing Website Tactics**](../General/PhishingWebsiteTactics.md)

---

## Get Involved

If you've seen similar scams, please report them to the proper authorities.
See: [**How to Report Scams**](../General/GetInvolved.md)

**Stay alert. Stay informed. Stay safe.**
