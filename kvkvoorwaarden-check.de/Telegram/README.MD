# Telegram Bot Investigation: Disrupting Scammer Operations

This document contains the results of commands used to investigate and disrupt scammer operations on Telegram. The information is presented as a series of API commands and their corresponding responses to show the investigation process.

## Initial Reconnaissance

### Command
```
https://api.telegram.org/bot7093117111:AAEbFu4cFcrrEeFjhdjuy-pl5h0LgKokG4g/getUpdates
```

### Result
```json
{
  "ok": true,
  "result": [
    {
      "update_id": 428577998,
      "my_chat_member": {
        "chat": {
          "id": -4657278873,
          "title": "logs",
          "type": "group",
          "all_members_are_administrators": true,
          "accepted_gift_types": {
            "unlimited_gifts": false,
            "limited_gifts": false,
            "unique_gifts": false,
            "premium_subscription": false
          }
        },
        "from": {
          "id": 7344764711,
          "is_bot": false,
          "first_name": "erop.xyz🎧🏀",
          "username": "eropxyz",
          "is_premium": true
        },
        "date": 1744408197,
        "old_chat_member": {
          "user": {
            "id": 7093117111,
            "is_bot": true,
            "first_name": "eropbot",
            "username": "Eropxbot"
          },
          "status": "left"
        },
        "new_chat_member": {
          "user": {
            "id": 7093117111,
            "is_bot": true,
            "first_name": "eropbot",
            "username": "Eropxbot"
          },
          "status": "member"
        }
      }
    },
    {
      "update_id": 428577999,
      "message": {
        "message_id": 3,
        "from": {
          "id": 7344764711,
          "is_bot": false,
          "first_name": "erop.xyz🎧🏀",
          "username": "eropxyz",
          "is_premium": true
        },
        "chat": {
          "id": -4657278873,
          "title": "logs",
          "type": "group",
          "all_members_are_administrators": true,
          "accepted_gift_types": {
            "unlimited_gifts": false,
            "limited_gifts": false,
            "unique_gifts": false,
            "premium_subscription": false
          }
        },
        "date": 1744408197,
        "group_chat_created": true
      }
    },
    {
      "update_id": 428578000,
      "my_chat_member": {
        "chat": {
          "id": -1002643349602,
          "title": "logs",
          "type": "supergroup"
        },
        "from": {
          "id": 7344764711,
          "is_bot": false,
          "first_name": "erop.xyz🎧🏀",
          "username": "eropxyz",
          "is_premium": true
        },
        "date": 1744408224,
        "old_chat_member": {
          "user": {
            "id": 7093117111,
            "is_bot": true,
            "first_name": "eropbot",
            "username": "Eropxbot"
          },
          "status": "left"
        },
        "new_chat_member": {
          "user": {
            "id": 7093117111,
            "is_bot": true,
            "first_name": "eropbot",
            "username": "Eropxbot"
          },
          "status": "member"
        }
      }
    },
    {
      "update_id": 428578001,
      "message": {
        "message_id": 1,
        "from": {
          "id": 1087968824,
          "is_bot": true,
          "first_name": "Group",
          "username": "GroupAnonymousBot"
        },
        "sender_chat": {
          "id": -1002643349602,
          "title": "logs",
          "type": "supergroup"
        },
        "chat": {
          "id": -1002643349602,
          "title": "logs",
          "type": "supergroup"
        },
        "date": 1744408224,
        "migrate_from_chat_id": -4657278873
      }
    },
    {
      "update_id": 428578002,
      "message": {
        "message_id": 4,
        "from": {
          "id": 7344764711,
          "is_bot": false,
          "first_name": "erop.xyz🎧🏀",
          "username": "eropxyz",
          "is_premium": true
        },
        "chat": {
          "id": -4657278873,
          "title": "logs",
          "type": "group",
          "all_members_are_administrators": false,
          "accepted_gift_types": {
            "unlimited_gifts": false,
            "limited_gifts": false,
            "unique_gifts": false,
            "premium_subscription": false
          }
        },
        "date": 1744408224,
        "migrate_to_chat_id": -1002643349602
      }
    },
    {
      "update_id": 428578003,
      "my_chat_member": {
        "chat": {
          "id": -1002643349602,
          "title": "logs",
          "type": "supergroup"
        },
        "from": {
          "id": 7344764711,
          "is_bot": false,
          "first_name": "erop.xyz🎧🏀",
          "username": "eropxyz",
          "is_premium": true
        },
        "date": 1744408224,
        "old_chat_member": {
          "user": {
            "id": 7093117111,
            "is_bot": true,
            "first_name": "eropbot",
            "username": "Eropxbot"
          },
          "status": "member"
        },
        "new_chat_member": {
          "user": {
            "id": 7093117111,
            "is_bot": true,
            "first_name": "eropbot",
            "username": "Eropxbot"
          },
          "status": "administrator",
          "can_be_edited": false,
          "can_manage_chat": true,
          "can_change_info": true,
          "can_delete_messages": false,
          "can_invite_users": false,
          "can_restrict_members": false,
          "can_pin_messages": true,
          "can_manage_topics": true,
          "can_promote_members": false,
          "can_manage_video_chats": false,
          "can_post_stories": true,
          "can_edit_stories": true,
          "can_delete_stories": true,
          "is_anonymous": false,
          "can_manage_voice_chats": false,
          "custom_title": "logs"
        }
      }
    },
    {
      "update_id": 428578004,
      "message": {
        "message_id": 2,
        "from": {
          "id": 7344764711,
          "is_bot": false,
          "first_name": "erop.xyz🎧🏀",
          "username": "eropxyz",
          "is_premium": true
        },
        "chat": {
          "id": -1002643349602,
          "title": "logs",
          "type": "supergroup"
        },
        "date": 1744408719,
        "new_chat_participant": {
          "id": 596630125,
          "is_bot": true,
          "first_name": "Get My ChatID",
          "username": "GetMyChatID_Bot"
        },
        "new_chat_member": {
          "id": 596630125,
          "is_bot": true,
          "first_name": "Get My ChatID",
          "username": "GetMyChatID_Bot"
        },
        "new_chat_members": [
          {
            "id": 596630125,
            "is_bot": true,
            "first_name": "Get My ChatID",
            "username": "GetMyChatID_Bot"
          }
        ]
      }
    },
    {
      "update_id": 428578005,
      "message": {
        "message_id": 5,
        "from": {
          "id": 7344764711,
          "is_bot": false,
          "first_name": "erop.xyz🎧🏀",
          "username": "eropxyz",
          "is_premium": true
        },
        "chat": {
          "id": -1002643349602,
          "title": "logs",
          "type": "supergroup"
        },
        "date": 1744408742,
        "left_chat_participant": {
          "id": 596630125,
          "is_bot": true,
          "first_name": "Get My ChatID",
          "username": "GetMyChatID_Bot"
        },
        "left_chat_member": {
          "id": 596630125,
          "is_bot": true,
          "first_name": "Get My ChatID",
          "username": "GetMyChatID_Bot"
        }
      }
    },
    {
      "update_id": 428578006,
      "message": {
        "message_id": 6,
        "from": {
          "id": 7344764711,
          "is_bot": false,
          "first_name": "erop.xyz🎧🏀",
          "username": "eropxyz",
          "is_premium": true
        },
        "chat": {
          "id": -1002643349602,
          "title": "logs",
          "type": "supergroup"
        },
        "date": 1744408772,
        "new_chat_participant": {
          "id": 596630125,
          "is_bot": true,
          "first_name": "Get My ChatID",
          "username": "GetMyChatID_Bot"
        },
        "new_chat_member": {
          "id": 596630125,
          "is_bot": true,
          "first_name": "Get My ChatID",
          "username": "GetMyChatID_Bot"
        },
        "new_chat_members": [
          {
            "id": 596630125,
            "is_bot": true,
            "first_name": "Get My ChatID",
            "username": "GetMyChatID_Bot"
          }
        ]
      }
    },
    {
      "update_id": 428578007,
      "message": {
        "message_id": 9,
        "from": {
          "id": 7344764711,
          "is_bot": false,
          "first_name": "erop.xyz🎧🏀",
          "username": "eropxyz",
          "is_premium": true
        },
        "chat": {
          "id": -1002643349602,
          "title": "logs",
          "type": "supergroup"
        },
        "date": 1744408911,
        "text": "-1002643349602"
      }
    },
    {
      "update_id": 428578008,
      "message": {
        "message_id": 10,
        "from": {
          "id": 7344764711,
          "is_bot": false,
          "first_name": "erop.xyz🎧🏀",
          "username": "eropxyz",
          "is_premium": true
        },
        "chat": {
          "id": -1002643349602,
          "title": "logs",
          "type": "supergroup"
        },
        "date": 1744408914,
        "left_chat_participant": {
          "id": 596630125,
          "is_bot": true,
          "first_name": "Get My ChatID",
          "username": "GetMyChatID_Bot"
        },
        "left_chat_member": {
          "id": 596630125,
          "is_bot": true,
          "first_name": "Get My ChatID",
          "username": "GetMyChatID_Bot"
        }
      }
    },
    {
      "update_id": 428578009,
      "message": {
        "message_id": 12,
        "from": {
          "id": 7344764711,
          "is_bot": false,
          "first_name": "erop.xyz🎧🏀",
          "username": "eropxyz",
          "is_premium": true
        },
        "chat": {
          "id": -1002643349602,
          "title": "logs",
          "type": "supergroup"
        },
        "date": 1744409135,
        "text": "https://kvkvoorwaarden-check.de",
        "entities": [
          {
            "offset": 0,
            "length": 31,
            "type": "url"
          }
        ],
        "link_preview_options": {
          "is_disabled": true
        }
      }
    },
    {
      "update_id": 428578010,
      "message": {
        "message_id": 13,
        "from": {
          "id": 7344764711,
          "is_bot": false,
          "first_name": "erop.xyz🎧🏀",
          "username": "eropxyz",
          "is_premium": true
        },
        "chat": {
          "id": -1002643349602,
          "title": "logs",
          "type": "supergroup"
        },
        "date": 1744409139,
        "text": "duw um met https ervoor"
      }
    },
    {
      "update_id": 428578011,
      "message": {
        "message_id": 14,
        "from": {
          "id": 7344764711,
          "is_bot": false,
          "first_name": "erop.xyz🎧🏀",
          "username": "eropxyz",
          "is_premium": true
        },
        "chat": {
          "id": -1002643349602,
          "title": "logs",
          "type": "supergroup"
        },
        "date": 1744409143,
        "text": "anders werkt die niet"
      }
    }
  ]
}
```

## Gathering Group Information

### Command
```
https://api.telegram.org/bot7093117111:AAEbFu4cFcrrEeFjhdjuy-pl5h0LgKokG4g/getChatAdministrators?chat_id=-1002643349602
```

### Result
```json
{
  "ok": true,
  "result": [
    {
      "user": {
        "id": 7344764711,
        "is_bot": false,
        "first_name": "erop.xyz🎧🏀",
        "username": "eropxyz",
        "is_premium": true
      },
      "status": "creator",
      "is_anonymous": false
    },
    {
      "user": {
        "id": 7093117111,
        "is_bot": true,
        "first_name": "eropbot",
        "username": "Eropxbot"
      },
      "status": "administrator",
      "can_be_edited": false,
      "can_manage_chat": true,
      "can_change_info": true,
      "can_delete_messages": false,
      "can_invite_users": false,
      "can_restrict_members": false,
      "can_pin_messages": true,
      "can_manage_topics": true,
      "can_promote_members": false,
      "can_manage_video_chats": false,
      "can_post_stories": true,
      "can_edit_stories": true,
      "can_delete_stories": true,
      "is_anonymous": false,
      "can_manage_voice_chats": false,
      "custom_title": "logs"
    }
  ]
}
```

### Command
```
https://api.telegram.org/bot7093117111:AAEbFu4cFcrrEeFjhdjuy-pl5h0LgKokG4g/getChatMember?chat_id=-1002643349602&user_id=7344764711
```

### Result
```json
{
  "ok": true,
  "result": {
    "user": {
      "id": 7344764711,
      "is_bot": false,
      "first_name": "erop.xyz🎧🏀",
      "username": "eropxyz",
      "is_premium": true
    },
    "status": "creator",
    "is_anonymous": false
  }
}
```

### Command
```
https://api.telegram.org/bot7093117111:AAEbFu4cFcrrEeFjhdjuy-pl5h0LgKokG4g/getChatMemberCount?chat_id=-1002643349602
```

### Result
```json
{
  "ok": true,
  "result": 3
}
```

## Bot Information

### Command
```
https://api.telegram.org/bot7093117111:AAEbFu4cFcrrEeFjhdjuy-pl5h0LgKokG4g/getMe
```

### Result
```json
{
  "ok": true,
  "result": {
    "id": 7093117111,
    "is_bot": true,
    "first_name": "eropbot",
    "username": "Eropxbot",
    "can_join_groups": true,
    "can_read_all_group_messages": true,
    "supports_inline_queries": false,
    "can_connect_to_business": false,
    "has_main_web_app": false
  }
}
```

## After Blocking the Bot

### Command
```
https://api.telegram.org/bot7093117111:AAEbFu4cFcrrEeFjhdjuy-pl5h0LgKokG4g/getUpdates
```

### Result
```json
{
  "ok": true,
  "result": [
    {
      "update_id": 428578012,
      "my_chat_member": {
        "chat": {
          "id": -1002643349602,
          "title": "logs",
          "type": "supergroup"
        },
        "from": {
          "id": 7344764711,
          "is_bot": false,
          "first_name": "erop.xyz🎧🏀",
          "username": "eropxyz",
          "is_premium": true
        },
        "date": 1744450965,
        "old_chat_member": {
          "user": {
            "id": 7093117111,
            "is_bot": true,
            "first_name": "eropbot",
            "username": "Eropxbot"
          },
          "status": "administrator",
          "can_be_edited": false,
          "can_manage_chat": true,
          "can_change_info": true,
          "can_delete_messages": false,
          "can_invite_users": false,
          "can_restrict_members": false,
          "can_pin_messages": true,
          "can_manage_topics": true,
          "can_promote_members": false,
          "can_manage_video_chats": false,
          "can_post_stories": true,
          "can_edit_stories": true,
          "can_delete_stories": true,
          "is_anonymous": false,
          "can_manage_voice_chats": false,
          "custom_title": "logs"
        },
        "new_chat_member": {
          "user": {
            "id": 7093117111,
            "is_bot": true,
            "first_name": "eropbot",
            "username": "Eropxbot"
          },
          "status": "left"
        }
      }
    },
    {
      "update_id": 428578013,
      "message": {
        "message_id": 1800,
        "from": {
          "id": 7344764711,
          "is_bot": false,
          "first_name": "erop.xyz🎧🏀",
          "username": "eropxyz",
          "is_premium": true
        },
        "chat": {
          "id": -1002643349602,
          "title": "logs",
          "type": "supergroup"
        },
        "date": 1744450965,
        "left_chat_participant": {
          "id": 7093117111,
          "is_bot": true,
          "first_name": "eropbot",
          "username": "Eropxbot"
        },
        "left_chat_member": {
          "id": 7093117111,
          "is_bot": true,
          "first_name": "eropbot",
          "username": "Eropxbot"
        }
      }
    }
  ]
}
```

### Command
```
https://api.telegram.org/bot7093117111:AAEbFu4cFcrrEeFjhdjuy-pl5h0LgKokG4g/getChatAdministrators?chat_id=-1002643349602
```

### Result
```json
{
  "ok": false,
  "error_code": 403,
  "description": "Forbidden: bot was kicked from the supergroup chat"
}
```

### Command
```
https://api.telegram.org/bot7093117111:AAEbFu4cFcrrEeFjhdjuy-pl5h0LgKokG4g/getMe
```

### Result
```json
{
  "ok": true,
  "result": {
    "id": 7093117111,
    "is_bot": true,
    "first_name": "eropbot",
    "username": "Eropxbot",
    "can_join_groups": true,
    "can_read_all_group_messages": true,
    "supports_inline_queries": false,
    "can_connect_to_business": false,
    "has_main_web_app": false
  }
}
```

### Command
```
https://api.telegram.org/bot7093117111:AAEbFu4cFcrrEeFjhdjuy-pl5h0LgKokG4g/getUpdates
```

### Result
```json
{
  "ok": true,
  "result": [
    {
      "update_id": 428578012,
      "my_chat_member": {
        "chat": {
          "id": -1002643349602,
          "title": "logs",
          "type": "supergroup"
        },
        "from": {
          "id": 7344764711,
          "is_bot": false,
          "first_name": "erop.xyz🎧🏀",
          "username": "eropxyz",
          "is_premium": true
        },
        "date": 1744450965,
        "old_chat_member": {
          "user": {
            "id": 7093117111,
            "is_bot": true,
            "first_name": "eropbot",
            "username": "Eropxbot"
          },
          "status": "administrator",
          "can_be_edited": false,
          "can_manage_chat": true,
          "can_change_info": true,
          "can_delete_messages": false,
          "can_invite_users": false,
          "can_restrict_members": false,
          "can_pin_messages": true,
          "can_manage_topics": true,
          "can_promote_members": false,
          "can_manage_video_chats": false,
          "can_post_stories": true,
          "can_edit_stories": true,
          "can_delete_stories": true,
          "is_anonymous": false,
          "can_manage_voice_chats": false,
          "custom_title": "logs"
        },
        "new_chat_member": {
          "user": {
            "id": 7093117111,
            "is_bot": true,
            "first_name": "eropbot",
            "username": "Eropxbot"
          },
          "status": "left"
        }
      }
    },
    {
      "update_id": 428578013,
      "message": {
        "message_id": 1800,
        "from": {
          "id": 7344764711,
          "is_bot": false,
          "first_name": "erop.xyz🎧🏀",
          "username": "eropxyz",
          "is_premium": true
        },
        "chat": {
          "id": -1002643349602,
          "title": "logs",
          "type": "supergroup"
        },
        "date": 1744450965,
        "left_chat_participant": {
          "id": 7093117111,
          "is_bot": true,
          "first_name": "eropbot",
          "username": "Eropxbot"
        },
        "left_chat_member": {
          "id": 7093117111,
          "is_bot": true,
          "first_name": "eropbot",
          "username": "Eropxbot"
        }
      }
    }
  ]
}
```
