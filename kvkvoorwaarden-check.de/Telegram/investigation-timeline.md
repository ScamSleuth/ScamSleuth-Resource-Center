# Investigation Timeline

This document presents a chronological timeline of the investigation into the Telegram groups associated with a phishing operation impersonating the Dutch Chamber of Commerce (KVK).

## Initial Discovery

* A scam website impersonating the Dutch Chamber of Commerce was identified
* The website was sending victims' data to a Telegram group via a bot
* Bot token and chat ID were found hardcoded in the website:
  * `bottoken = "7540549509:AAF2sa9oNEH57k4y_D5TxkXyJT_g6XVLnK8"`
  * `chatid = "-1002643349602"`

## Investigation Phase 1: eropbot Analysis

### April 10, 2025 (Unix timestamp: 1744408197)
* User "eropxyz" created a group named "logs"
* Added bot "eropbot" (ID: 7093117111) to the group
* Group chat created event recorded

### April 10, 2025 (Unix timestamp: 1744408224)
* Group was migrated to a supergroup (ID: -1002643349602)
* Bot "eropbot" was promoted to administrator with specific permissions:
  * Custom title: "logs"
  * Can manage chat, change info, pin messages, manage topics
  * Cannot delete messages, invite users, or restrict members

### April 10, 2025 (Unix timestamp: 1744408719-1744408914)
* GetMyChatID_Bot was temporarily added to determine the chat ID
* Chat ID "-1002643349602" was confirmed and posted in the group
* GetMyChatID_Bot was removed from the group

### April 10, 2025 (Unix timestamp: 1744409135-1744409143)
* Phishing URL "https://kvkvoorwaarden-check.de" was shared in the group
* Dutch messages indicating setup instructions were exchanged:
  * "duw um met https ervoor" ("push it with https in front")
  * "anders werkt die niet" ("otherwise it doesn't work")

### April 10, 2025 (Unix timestamp: 1744450965)
* Bot "eropbot" was removed from the supergroup
* Attempted commands to the bot returned "403 Forbidden: bot was kicked from the supergroup chat"

## Investigation Phase 2: jugbot Analysis

### April 11, 2025 (Unix timestamp: 1744455050)
* Bot "jugbot" (ID: 7540549509) was added to a group named "anwb log"
* Group was created by the same user "eropxyz"

### April 11, 2025 (Unix timestamp: 1744455058)
* Group "anwb log" was migrated to a supergroup (ID: -1002616887061)
* Bot "jugbot" was promoted to administrator with similar permissions to the previous bot
* Custom title was set to "l"

### April 11, 2025 (Unix timestamp: 1744455072-1744455105)
* GetMyChatID_Bot was temporarily added and then removed

### April 13, 2025 (Unix timestamp: 1744529079)
* Test message (".") was successfully sent to the group using the jugbot token
* Confirmed bot was still active and had access to the group

### Investigation Revealed
* Member count: 3 members in the supergroup
* Group administrators:
  * User "eropxyz" (ID: 7344764711) - Creator
  * Bot "jugbot" (ID: 7540549509) - Administrator

## Connection to Phishing Operation
* The group "anwb log" name suggests targeting of both KVK and ANWB (Royal Dutch Touring Club)
* Both bots were configured to relay victim data from phishing sites to the Telegram groups
* The operation appears to use a pattern of:
  1. Create a new group
  2. Add a bot with specific permissions
  3. Migrate to supergroup for enhanced features
  4. Connect phishing site to relay data via the bot

## Profile Analysis
* Account "eropxyz" (ID: 7344764711) had:
  * Premium Telegram status
  * Profile disclaimer attempting to disclaim responsibility for illegal activities
  * 162,999 profile views at time of investigation
  * References to domain "erop.xyz" in the username
