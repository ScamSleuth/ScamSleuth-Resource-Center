# Website - Phishing Kit Sample (For Research Purposes Only)

This folder contains a captured and archived copy of a credential phishing kit used in a scam impersonating Google. It was collected in May 2025 during an active phishing campaign targeting Dutch-speaking users via SMS sender spoofing.

⚠️ **Warning: This code is malicious and is provided strictly for research, education, and cybersecurity awareness. Do NOT deploy, host, or reuse any of these files.**

## Contents

- `index.html`  
  The fake Google login page served to mobile users.

- `core_form.js`  
  Handles form behavior, input validation, and data packaging for credential harvesting.

- `core_token.js`  
  Orchestrates transitions between phishing stages (e.g., login → 2FA → SMS).

- `form.js`  
  Supplemental logic for form control and behavior.

- `ng.js`  
  AngularJS configuration file that sets localized language options and text content.

- `token.js`  
  Initializes and coordinates phishing flow, handles bid polling and view management.

## Purpose

This code is part of a forensic analysis documented in the parent report:  
[../README.md](../README.md)

The inclusion of this directory helps security researchers, investigators, and public-interest developers better understand modern phishing techniques and infrastructure.

**Use responsibly. Never interact with or deploy phishing kits outside of isolated analysis environments.**
