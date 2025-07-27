# Scam Report: Ledger Wallet Phishing (ledg-verizo.online)

**Scam Date**: July 2025
**Status**: Ongoing

---

## Scam Summary

This phishing scam impersonates Ledger, a well-known cryptocurrency wallet provider. Victims receive an SMS with a link that mimics the Ledger website design, prompting urgent action due to a supposed login attempt. The fake site leads the user through a staged diagnostic process, eventually requesting the recovery seed phrase under the pretense of repairing a corrupted wallet.

> "\[LEDGER] Beste gebruiker, er is een verdachte inlogpoging detecteerd. Beveilig uw account: [https://ledg-verizo.online/leg](https://ledg-verizo.online/leg)"

> "\[LEDGER] Dear user, a suspicious login attempt was detected. Secure your account: [https://ledg-verizo.online/leg](https://ledg-verizo.online/leg)"

---

## Source Analysis

* **Impersonated Entity**: Ledger (cryptocurrency hardware wallet)
* **Scammer's Contact Method**: SMS and cloned website
* **Website Used**: [https://ledg-verizo.online](https://ledg-verizo.online)
* **Registrar**: Namecheap (WHOIS confirms recent registration)
* **Host/CDN**: Cloudflare

---

## Scam Tactics

### 1. Visual Cloning

The fake site is a nearly pixel-perfect clone of Ledger's legitimate website, likely to prevent suspicion.

### 2. Fake Device Connection Flow

After clicking "Verify here," users are taken to a mock hardware connection screen. Regardless of interaction, a message appears claiming the device's memory is corrupted.

### 3. Seed Phrase Harvesting

Victims are guided to a final screen asking them to input their 12/18/24-word recovery phrase and optional passphrase. Data is posted to `/leg/mNaS7HWk.php`.

---

## Actions Taken

### 1. Registrar & CDN Provider

* Will report domain to Namecheap via **[abuse@namecheap.com](mailto:abuse@namecheap.com)**
* Will report abuse to Cloudflare for hosting phishing infrastructure

### 2. Notifications to Affected Parties

* Ledger (impersonated brand)
* Ledger users in relevant communities

### 3. National Fraud Reporting

* To be reported to Dutch **Fraudehelpdesk.nl**

---

## Lessons & Takeaways

### 1. Red Flags & Prevention

* URLs that differ slightly from the legitimate domain ("ledg-verizo.online" vs "ledger.com")
* Unsolicited SMS urging immediate action
* Request for a recovery phrase is a red flag; Ledger never asks for this

### 2. How to Stay Safe

* Always verify URLs by typing them manually
* Never enter your recovery phrase online
* Enable phishing warnings in your browser and use a DNS filter

---

## Ongoing Scam Awareness

For more related topics and scam breakdowns, visit:

* [SMS-Based Phishing Scams](../General/SmishingScams.md)
* [Crypto Wallet Impersonation](../General/CryptoWalletScams.md)

---

## Get Involved

If you've seen similar scams, please report them to relevant authorities.
See: [**How to Report Scams**](../General/GetInvolved.md)

**Stay alert. Stay informed. Stay safe.**
