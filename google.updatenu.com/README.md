# Scam Report: Google Account Access Phishing via updatenu.com

**Scam Date**: May, 2025

**Status**: Ongoing

---

## Scam Summary

This scam impersonates Google to steal login credentials and two-factor authentication (2FA) codes. Dutch victims receive a **fraudulent SMS**, claiming that their email access will be blocked unless they take immediate action. The message **uses SMS sender spoofing** to appear as though it's from "Google", which often places it in the same message thread as legitimate Google notifications on mobile devices.

**Scam Message (Example from Victim)**:

> Actie vereist: zonder update kunt u binnenkort geen e-mails meer verzenden of ontvangen : [https://google.updatenu.com](https://google.updatenu.com)

**Translation**:

> Action required: without an update, you will soon no longer be able to send or receive emails: [https://google.updatenu.com](https://google.updatenu.com)

When the victim clicks the link (`https://google.updatenu.com`), they are redirected to a fake login page hosted on a rotating phishing domain. These fake pages closely mimic Google's login flow and are designed to capture:

* Email and password
* 2FA/SMS verification codes
* Recovery contact information
* Security question answers

**Mobile-targeting behavior**:
If the site detects a **mobile device**, it serves the fake Google login page. If the site is opened on a **desktop**, it redirects to Google's legitimate login page — a technique used to evade detection by researchers and automated scanners.

![Website Example](https://github.com/ScamSleuth/ScamSleuth-Resource-Center/blob/main/google.updatenu.com/website/iPhone_website.png)
---

## Source Analysis

* **Impersonated Entity**: Google
* **Scammer's Contact Method**: SMS (with sender spoofing)
* **Registrar**:

  * `updatenu.com`: Tucows Domains Inc.
  * `fotocvix.com`: InterNetX GmbH
  * `csisaszomac.com`: Hostinger Operations, UAB
* **Website/Phone Number Used**:

  * Redirector Domain: `https://google.updatenu.com`
  * Phishing Landing Pages:

    * `https://gmail.fotocvix.com/gmail/.af13c05edc892de289d6ba4364104c46/login/?bd8ce11c5ab4bc903950d77c17587f5f`
    * `https://gmail.csisaszomac.com/gmail/.83dfd223b6c92ae41a6ce92222db9c48/login/?201b6405ce0c272d5bddab2f44772003`
    * `https://gmail.pyshippingllcsa.com/gmail/.a7d5c2d2def98d48b47617ab1346e4cd/login/?1178012a2fc2960d649a083dc3af1ded`
* **Carrier / Hosting Provider**:

  * `updatenu.com`: Registered with **Tucows**, proxied via **Cloudflare**
  * `fotocvix.com`: Hosted by **mCloud doo** (Serbia), DNS via **Webtasy d.o.o.**
  * `csisaszomac.com`: Hosted on **Akamai Connected Cloud**, DNS by **wnkserver37.com** (potential bulletproof hosting)

---

## Scam Tactics

### 1. SMS Sender Spoofing & Urgency

The message uses spoofed SMS headers to appear as if sent by "Google". On many phones, this causes it to be grouped with legitimate Google messages, lending false credibility. The urgency tactic warns of lost email access if the user doesn't comply immediately.

### 2. Brand Impersonation & UI Cloning

Phishing pages use Google branding — including favicon, layout, and styling — to simulate a real login experience. Animations and form elements are visually identical to Google's.

### 3. Multi-Stage Credential Harvesting

The phishing kit includes dedicated modules to steal:

* Login credentials (email + password)
* 2FA or SMS verification codes (via `ask_2fa`, `ask_sms`)
* Recovery emails and phone numbers
* Backup codes or answers to security questions

Captured data is exfiltrated via AJAX and JSONP requests to attacker-controlled PHP endpoints such as:

```
/send.php
?pl=token&link=<id>&bid=<tracker>
```

---

## Actions Taken

### 1. Carrier / Hosting Provider Reports

* **May 18, 2025**: Reported `fotocvix.com` to mCloud doo — [support@mcloud.rs](mailto:support@mcloud.rs)
* **May 18, 2025**: Reported `csisaszomac.com` to Akamai — [https://www.akamai.com/legal/compliance/report-abuse](https://www.akamai.com/legal/compliance/report-abuse)
* **May 18, 2025**: Reported `updatenu.com` to Tucows Domains — [domainabuse@tucows.com](mailto:domainabuse@tucows.com)
* **May 18, 2025**: Reported `fotocvix.com` to InterNetX GmbH — [domain-abuse@internetx.com](mailto:domain-abuse@internetx.com)
* **May 18, 2025**: Reported `csisaszomac.com` to Hostinger — [abuse-tracker@hostinger.com](mailto:abuse-tracker@hostinger.com)
* **May 18, 2025**: Reported proxy abuse of `google.updatenu.com` to Cloudflare — [https://abuse.cloudflare.com/](https://abuse.cloudflare.com/)
* **May 19, 2025**: Reported `pyshippingllcsa.com` to Arsys Internet S.L — [abuse@nicline.com](mailto:abuse@nicline.com)
* **May 19, 2025**: Reported `pyshippingllcsa.com` to Maxdominios — [Maxdominios](https://www.maxdominios.com/contactenos)

### 2. Notifications to Affected Parties

* Reported the phishing site to Google via: [https://safebrowsing.google.com/safebrowsing/report\_phish/](https://safebrowsing.google.com/safebrowsing/report_phish/)
* Reported the phishing site to Microsoft — domains are now flagged as dangerous in **Microsoft Edge**.

### 3. National Fraud Reporting

* Submitted to [https://www.fraudehelpdesk.nl/](https://www.fraudehelpdesk.nl/) — national Dutch anti-fraud agency

---

## Lessons & Takeaways

### 1. Red Flags & Prevention

* SMS messages using third-party domains like `updatenu.com` or `fotocvix.com` are not legitimate
* Google will never send login or verification prompts from anything other than `*.google.com`
* Real login issues are handled *after* login, not via SMS threats

### 2. How to Stay Safe

* Carefully inspect URLs — phishing domains often include misleading terms like `gmail.` or `google.` under unrelated TLDs
* Use **hardware-based 2FA** like a YubiKey instead of SMS
* Report suspicious activity directly to service providers

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
