# Security-legder.live
# Phishing - August 2024

## Scam Summary:
Victims received alarming text messages claiming:

**"[LEDGER] Beveiligingsproblemen ontdekt in Ledger Live. Voer snel een controle uit om te zien of uw apparaat risico loopt: [www.security-legder.live](http://www.security-legder.live)"**

Translation: "[LEDGER] Security issues detected in Ledger Live. Quickly perform a check to see if your device is at risk: [www.security-legder.live](http://www.security-legder.live)."

- **Source Analysis**: The origin of this text message is from CLICKSMS. The name might be spoofed or could be either a South African Text service (clicksms.co.za) or the "shady" service clicksms.net. The last one is a rabbit hole in itself that we're not going to delve into.

### What Happened:
- **Phishing Tactics**: Clicking the link [www.security-legder.live](http://www.security-legder.live) on a mobile device redirects users to [https://boom1973.youcan.store](https://boom1973.youcan.store), which then redirects to [https://rocketpool-rpl-shares-net-17598549.codeanyapp.com/atest/LG/connect.html](https://rocketpool-rpl-shares-net-17598549.codeanyapp.com/atest/LG/connect.html). The fraudulent website prompts users to enter their 12 or 24-word seed phrase to "Import & Download Your Wallet App." The entered data is stored on the server as a JSON file before redirecting users to [https://www.ledger.com](https://www.ledger.com). The website has been [downloaded and stored](security-legder.live/rocketpool-rpl-shares-net-17598549.codeanyapp.com.zip) for future reference. The website is being flagged as malicious by most desktop browsers; however, mobile browsers may not have any issue accessing the site(s).

### Actions Taken:
- **Domain and Hosting Reports**:
  - **codeanyapp.com**:
    - Registered by DomainsByProxy.com (GoDaddy). Reported to [GoDaddy](https://supportcenter.godaddy.com/abusereport).
    - IP Address: 198.199.109.95, hosted by DigitalOcean LLC. Reported to [DigitalOcean LLC](https://www.digitalocean.com/company/contact/abuse).
  - **youcan.store**:
    - Registered by Namecheap. Reported to [Namecheap](https://www.namecheap.com/support/knowledgebase/article.aspx/9196/5/how-and-where-can-i-file-abuse-complaints/)
    - Hosting is behind CloudFlare. Reported to [CloudFlare](https://www.cloudflare.com/trust-hub/reporting-abuse/).
    - The Nameservers it uses are at Amazon. Reported to [Amazon](https://aws.amazon.com/forms/report-abuse).
  - **security-legder.live**:
    - Registered by Namecheap. Reported to [Namecheap](https://www.namecheap.com/support/knowledgebase/article.aspx/9196/5/how-and-where-can-i-file-abuse-complaints/).
  - **ledger.com**:
    - [Ledger.com](https://www.ledger.com/phishing-campaigns-status#help-us) has been informed.
  - **Google Safebrowsing**:
    - [Google Safebrowsing](https://safebrowsing.google.com/safebrowsing/report_phish/?hl=en) has been informed.

### Follow up 
### Update #1:
After Cloudflare took appropriate action by putting up a warning informing users that they were being redirected to a phishing site, the scammers removed https://boom1973.youcan.store from their redirects. Victims that visit [http://www.security-legder.live](http://www.security-legder.live) are now forwarded directly to [https://rocketpool-rpl-shares-net-17598549.codeanyapp.com/atest/LG/connect.html](https://rocketpool-rpl-shares-net-17598549.codeanyapp.com/atest/LG/connect.html). Unlike GoDaddy, Namecheap, and DigitalOcean LLC (who allow people to be victimized) the scammers swiftly acted within a day to continue their scam operation.

### Update #2:
[www.security-legder.live](http://www.security-legder.live) is offline. [https://boom1973.youcan.store](https://boom1973.youcan.store) remains online but with a warning from CloudFlare. [https://rocketpool-rpl-shares-net-17598549.codeanyapp.com/atest/LG/connect.html](https://rocketpool-rpl-shares-net-17598549.codeanyapp.com/atest/LG/connect.html) is still active.

### Update #3:
[https://boom1973.youcan.store](https://boom1973.youcan.store) The store has been suspended.
[https://rocketpool-rpl-shares-net-17598549.codeanyapp.com/atest/LG/connect.html](https://rocketpool-rpl-shares-net-17598549.codeanyapp.com/atest/LG/connect.html) Has been taken down.
This phishing site has effectively been halted.

### Lessons & Takeaways:
- **Source Red Flags**: A text with an origin other than Ledger should have been an indicator that the information was untrustworthy.
- **Domain Name Red Flags**: The domain name "security-legder.live" itself should have been a giveaway. The correct spelling is "Ledger," not "Legder," indicating a possible malicious site.
- **Redirects and URL Analysis**: The multiple redirects and the final endpoint https://rocketpool-rpl-shares-net-17598549.codeanyapp.com/atest/LG/connect.html should have signaled that this is not a legitimate Ledger site.
- **Stay Alert**: Be cautious of unsolicited messages, especially those urging immediate action or containing suspicious links.
- **Verify URLs**: Always check the legitimacy of URLs before entering sensitive information, particularly when receiving unexpected security alerts.
- **Be Aware of Redirects**: Scammers may use multiple redirects to obscure the final destination and increase the likelihood of capturing your credentials.
- **Report Scams**: If you encounter phishing attempts, report them to the domain registrars and hosting providers. Trace IP addresses to identify and address hosting sources for a thorough takedown process.
