# Scam Report: bd-incasso.in  
**Scam Date**: September 11, 2024  

**Scam Summary**:  
Victims receive a message advising to quickly pay a non-existing debt in order to prevent legal actions. The message reads:

> "Uw openstaande schuld is nog niet voldaan. Gerechtsdeurwaarder legt op 12-09-2024 conservatoir beslag. Betaal nu via http://bd-incasso.in"

**Translation**:  
> "Your outstanding debt has not yet been paid. A bailiff will seize your assets on 12-09-2024. Pay now via http://bd-incasso.in."

---

### Source Analysis:
The message claims to be from a Dutch debt collection service and attempts to mimic the **Belastingdienst** (Dutch Tax Office). The sender advises the victim to pay their (non-existing) debt in order to prevent legal actions.

**Scam Tactics**:  
- **Mimicked Invoice**: The website displays a fake invoice, imitating the Dutch Tax Office, demanding immediate payment.  
- **Chatbot**: Victims are instructed to provide personal details in the form of a chatbot, likely for data harvesting.  
- **Fake iDeal Payment**: After entering their details in the chat, victims are provided an iDeal link:

    ```
    https://pay.ideal.nl/transactions/https%3A%2F%2Ftx.ideal.nl%2F2%2FAW5CCNYJGWAO3UVNGZMIOHAB6XE?sig=AGBDAEIIA26LPEODCRLWVJJNMYSI2EK43FPM5GNQEGDJG3YTGOIVXERKWVHCAEIIAYIH5ZK6RL7F5M37R6V3CKCHHSKDDRVGY2XGQ74WK77WBEIK465CQ
    ```

    The payment is labeled under the name **Klein**.
![bd-incasso.in](https://github.com/ScamSleuth/ScamSleuth-Resource-Center/blob/e812169e7d9cdcafcdf174a168f5ba3c0266e7b1/bd-incasso.in/bd-incasso.png)


There is also a "Betaal nu" button that opens a link (https://bunq.me/o/cfd54161-9497-470c-8ade-578df2b5ac4b/ideal) to the Bunq-bank and allows you to pay directly to Granit Hoxha using account number NL39 BUNQ 2042 7049 03.
![NL39BUNQ2042704903.png](https://github.com/ScamSleuth/ScamSleuth-Resource-Center/blob/72391b9fa7384d8776cb304fb4321e41a00a0dc1/bd-incasso.in/NL39BUNQ2042704903.png)

---

### Actions Taken:
1. **Domain and Hosting Reports**:  
   - **bd-incasso.in**: Registered via **Tucows/OpenSRS**. Reported to the domain registrar.  
   - **Cloudflare**: The website is protected by Cloudflare, making it harder to take attack and find it's hoster. Cloudflare has been notified about the scam.  

2. **Third-Party Service Reports**:  
   - **Tawk.to**: Reported to **Tawk.to**, the service responsible for the chatbot used to gather victim information. Tawk.to has been notified about the misuse of their services.  
   - **iDeal**: The payment provider iDeal has been notified about the fraudulent use of their platform, with the details of the specific transaction being shared.  
   - **Belastingdienst**: The organisation the scammers are impersonating have been notified.
   - **Bunq**: The payment provider you'll be t.ransfered to when you press the "Betaal nu"-button. The transaction has been reported as abuse.

---

### Follow-Up:

The website has been taken down, although I got an email from OpenSRS that I had to report it to Tuwcows.
Of the payment-links the iDeal-link has stopped functioning; the Bunq-link is being worked on :-)

---

### Lessons & Takeaways:

1. **Source Red Flags**: Any unsolicited messages threatening immediate legal action or financial penalties should be treated with extreme caution.
2. **Domain Name Red Flags**: The domain **bd-incasso.in** is clearly suspicious. Official Dutch services would use **.nl** domain extensions, not **.in**.
3. **Immediate Threats**: Scammers often use fear tactics (e.g., seizure of assets) to manipulate victims into immediate action without verifying the legitimacy of the claim.
4. **Verify Payment Links**: Always check the origin of payment links, especially if directed to iDeal or other payment gateways via suspicious means.
5. **Stay Informed**: Regularly check with official agencies (like the Dutch Tax Office) regarding any real outstanding debts. Scams often use urgency to force victims into compliance.
6. **Report Phishing**: If you receive such scams, report them to relevant authorities like domain registrars, hosting providers, and payment services to minimize the damage done.
