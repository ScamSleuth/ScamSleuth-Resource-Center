# Scam Report: **Fake PostNL Customs Fee Phishing**

**Scam Date**: June, 2025

**Status**: Ongoing

---

## Scam Summary

This scam involves a fraudulent website impersonating the Dutch postal service, PostNL, to deceive recipients. Victims receive an email claiming their package cannot be delivered due to unpaid customs duties and are urged to pay a small fee (€1.99) to release the package. The email contains a link to a fake PostNL website, which is a near-perfect clone of the legitimate site, designed to harvest sensitive personal and payment information.

**Original Scam Email Message (Dutch):**
> Probleem met levering van je pakket  
>  
> Beste klant,  
>  
> Uw pakketnummer NL9876543210 kan niet worden afgeleverd op 06-06-2026 vanwege onbetaalde douanerechten  
> Een nieuwe levering is gepland tussen 06-06-2026 en 06-10-2026.  
>  
> Resterend te betalen bedrag: 1,99 EUR  
>  
> [Betaal uw verzendkosten]  
>  
> U ontvangt een e-mail en een sms-bericht na bevestiging van uw betaling.  
>  
> **BELANGRIJK:** Bij het uitblijven van betaling binnen 24 uur, blijft uw pakket geblokkeerd en wordt het door de douane teruggestuurd naar de leverancier.  
>  
> PostNL Klantenservice  


**English Translation:**
> Problem with the delivery of your package  
>  
> Dear customer,  
>  
> Your package number NL9876543210 cannot be delivered on 06-06-2026 due to unpaid customs duties.  
> A new delivery is scheduled between 06-06-2026 and 06-10-2026.  
>  
> Amount remaining to be paid: 1.99 EUR  
>  
> [Pay your shipping costs]  
>  
> You will receive an email and an SMS after confirmation of your payment.  
>  
> **IMPORTANT:** If payment is not made within 24 hours, your package will remain blocked and will be returned to the supplier by customs.  
>  
> PostNL Customer Service  


[The e-mail recieved](https://github.com/ScamSleuth/ScamSleuth-Resource-Center/blob/main/rndmz23.de/email.png)
[The landingpage of the site](https://github.com/ScamSleuth/ScamSleuth-Resource-Center/blob/main/rndmz23.de/1-landingpage.jpeg)
[The personal entry form](https://github.com/ScamSleuth/ScamSleuth-Resource-Center/blob/main/rndmz23.de/2-personaldata_entry_form.jpeg)
[The creditcard entry form](https://github.com/ScamSleuth/ScamSleuth-Resource-Center/blob/main/rndmz23.de/3-creditcard_entry_form.jpeg)
[The submission page](https://github.com/ScamSleuth/ScamSleuth-Resource-Center/blob/main/rndmz23.de/4-submission_page.jpeg)

---

## Source Analysis

* **Impersonated Entity**: PostNL (Dutch postal service)
* **Scammer's Contact Method**: Email (and possibly SMS)
* **Website Used**: `https://rndmz23.de/NL/first.php`
* **Carrier / Hosting Provider**:
  * **Protected by**: Cloudflare (true host obscured)
  * **Registrar**: .de domain, registrant details hidden by DENIC
  * **Domain Last Changed**: 2025-06-02

---

## Scam Tactics

### 1. **Brand Impersonation**

The scam uses cloned PostNL branding, colors, and layout, including official logos and app store links, to appear legitimate. The website is a direct rip of the real PostNL site, increasing the credibility of the attack[1].

### 2. **Urgency and Threats**

Victims are pressured to pay within 24 hours or risk having their package returned to the sender. This urgency is a classic social engineering tactic to reduce critical thinking and increase compliance.

### 3. **Low Payment Barrier**

A small fee (€1.99) is requested, making the scam less suspicious and more likely to succeed, while still enabling the theft of valuable payment credentials.

### 4. **Technical Sophistication**

- The phishing site is hosted behind Cloudflare, hiding the true hosting provider and server IP, complicating takedown and investigation.
- The site uses scripts such as `spy.php` to alert scammers in real time when a victim lands on the page and enters data, and `send.php` to exfiltrate all submitted information instantly.

---

## Actions Taken

### 1. Registrar and Host Abuse Reports

* **June 6th, 2025**: Reported the domain `rndmz23.de` to Cloudflare abuse.
* **June 6th, 2025**: Reported the domain via DENIC's web-based WHOIS for further investigation.
* **June 6th, 2025**: Notified gmx.de of the scam and urged them to take appropriate action.

### 2. Notifications to Affected Parties

* **June 6, 2025**: Details shared with Fraude Helpdesk.

---

## Lessons & Takeaways

### 1. Red Flags & Prevention

* Unsolicited delivery messages requesting payment for customs or shipping fees.
* Recently registered or obscure domains, often protected by services like Cloudflare.
* Emails that use urgency, threats, and official branding to push for immediate action.

### 2. How to Stay Safe

* Always check the sender's email address and the URL of any payment page.
* Never click on links in unsolicited emails or SMS messages about deliveries.
* Go directly to the official PostNL website or app to check the status of shipments.
* Report suspicious domains and emails to your provider and national fraud agencies.

---

## Ongoing Scam Awareness

For more related topics and scam breakdowns, visit:

* [**Example: Social Media Scams**](../General/SocialMediaScam.md)
* [**Example: Investment Fraud**](../General/InvestmentFraud.md)

---

## Get Involved

If you've seen similar scams, please report them to the proper authorities.
See: [**How to Report Scams**](../General/GetInvolved.md)

**Stay alert. Stay informed. Stay safe.**

---

*Technical Note: The scam site is a direct copy of the PostNL environment, as evidenced by the ripped CSS and HTML[1]. Backend scripts such as `spy.php` and `send.php` are used for real-time victim tracking and data exfiltration. The site is protected by Cloudflare and registered via DENIC, making attribution and takedown more difficult.*
