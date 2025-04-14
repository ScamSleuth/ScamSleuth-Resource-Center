# Telegram Phishing Investigation

This repository documents an investigation into a phishing operation targeting Dutch entities, specifically the Chamber of Commerce (KVK) and potentially the Royal Dutch Touring Club (ANWB). The scam used fake websites to collect victim data and relayed it to Telegram groups via bots.

## Investigation Overview

The phishing operation used the following components:
- Fraudulent websites impersonating Dutch institutions
- Telegram groups to receive and process victim data
- Multiple Telegram bots to relay information

## Key Findings

- **Operator**: A Telegram Premium user with username `eropxyz` (ID: 7344764711)
- **Infrastructure**: 
  - Two identified Telegram groups: "logs" and "anwb log"
  - Two separate bots: "eropbot" and "jugbot"
  - Phishing domain: `kvkvoorwaarden-check.de`
- **Methodology**: 
  - Text messages with urgent requests sent to victims
  - Victims directed to fraudulent websites
  - Collected data transmitted to Telegram groups
  - Groups managed by a small team (3 members)

## Technical Details

The investigation used the Telegram Bot API to analyze the groups and bots involved:

```
bottoken = "7093117111:AAEbFu4cFcrrEeFjhdjuy-pl5h0LgKokG4g"
bottoken = "7540549509:AAF2sa9oNEH57k4y_D5TxkXyJT_g6XVLnK8"
chatid = "-1002643349602"
```

These credentials allowed visibility into the operation, including:
- Group membership and administration
- Bot configuration and permissions
- Messages related to the phishing setup

## Repository Contents

- [Scammer Profile](scammer-profile.md): Detailed analysis of the operator account
- [Telegram API Responses](telegram-api-responses.md): Raw data collected during the investigation
- [Investigation Timeline](investigation-timeline.md): Chronological sequence of events

## Investigative Techniques

The investigation employed the following techniques:
1. Website analysis to discover hardcoded API tokens
2. Telegram Bot API queries to gather intelligence
3. Timeline reconstruction of phishing operation setup
4. Profile analysis of the primary operator

---

*This investigation documentation was created to assist in combating online fraud targeting Dutch citizens and organizations.*
