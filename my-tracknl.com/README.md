# Scam Report: DHL Address Verification Phishing (pakket-tracknl.com)

**Scam Date**: July 2025

**Status**: Resolved

---

## Scam Summary

This phishing scam targets Dutch-speaking individuals with a fake DHL delivery issue message. Victims are told that their address could not be located and are urged to update it via a fraudulent website. The goal is to steal personal and financial information, including credit card credentials and 2FA codes.

> "**Uw adres kan niet worden gevonden door de bezorger. Gelieve het adres bij te werken op [https://my-tracknl.com](https://my-tracknl.com)**"
> *(Translation: “Your address could not be found by the delivery driver. Please update the address at [https://my-tracknl.com”](https://my-tracknl.com”))*

The link redirects to `pakket-tracknl.com`, where users are guided through a multi-step phishing process disguised as DHL's tracking and delivery portal.

---

## Source Analysis

* **Impersonated Entity**: DHL
* **Scammer's Contact Method**: SMS
* **Website/Phone Number Used**:

  * `https://my-tracknl.com` → redirects to `https://pakket-tracknl.com`
  * SMS from: `+33610421736` (likely spoofed to resemble Dutch `+316` numbers)
* **Carrier / Hosting Provider**:

  * **Registrar**: Hosting Concepts B.V. / Registrar.eu (Openprovider)
  * **Host IP**: `45.139.104.115`
  * **Network**: 493 Networking – [abuse@493networking.cc](mailto:abuse@493networking.cc)
  * **TLS Issuer**: Let’s Encrypt (Valid cert for pakket-tracknl.com)

---

## Scam Tactics

### 1. Fake Delivery Alert

Uses urgency and fear by claiming an issue with package delivery. Victims are pushed to act quickly and follow a suspicious link.

### 2. Branded Phishing Flow

A step-by-step phishing page branded like DHL:

* hCaptcha challenge to feign legitimacy
* Personal information form
* Credit card number entry (with format check/lambda validation)
* 2FA prompt
* Fake final confirmation screen to signal success

The page requests a small payment of **EUR 1,29** — an amount low enough to lower suspicion. It suggests the cost is related to the delivery, adding legitimacy to the request for credit card details.

### 3. Technical Obfuscation & Hosting

* Sites registered recently:

  * `pakket-tracknl.com`: Registered June 13, 2025
  * `my-tracknl.com`: Registered June 25, 2025
* Fully redacted WHOIS
* TLS certificates issued by Let's Encrypt
* VPS hosted in the Netherlands (45.139.104.115), running on:

  * nginx
  * PHP 8.2.28
  * Plesk Obsidian on port 8443
* Open ports indicate a reused or unmanaged server

---

## Actions Taken

### 1. Carrier / Hosting Provider Reports

* **July 1st, 2025**: Abuse report to registrar (Registrar.eu / Openprovider)
* **July 1st, 2025**: Abuse report to hosting provider (493 Networking)
* **July 1st, 2025**: Sites reported to Google Safesearch

---

## Lessons & Takeaways

### 1. Red Flags & Prevention

* Unexpected SMS with delivery failure notice
* Link points to a suspicious domain (`pakket-tracknl.com`) not associated with DHL
* Requests for credit card info and 2FA — never standard practice for delivery firms
* Uses real CAPTCHA and HTTPS to build false trust
* Small payment amount (EUR 1,29) to make the scam more convincing

### 2. How to Stay Safe

* **Always check delivery notices via official apps or websites**
* **Do not click on links in unsolicited texts or emails**
* **Never submit personal or payment data unless you're 100% certain of the source**

---

## Ongoing Scam Awareness

For more related topics and scam breakdowns, visit:

* [**Email Spoofing & Phishing**](../General/EmailSpoofing.md)
* [**Two-Factor Authentication Exploits**](../General/2FAFraud.md)

---

## Get Involved

If you've seen similar scams, please report them to the proper authorities.
See: [**How to Report Scams**](../General/GetInvolved.md)

**Stay alert. Stay informed. Stay safe.**


---

## Get Involved

If you've seen similar scams, please report them to the proper authorities.
See: [**How to Report Scams**](../General/GetInvolved.md)

**Stay alert. Stay informed. Stay safe.**
