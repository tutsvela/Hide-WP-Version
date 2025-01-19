# Hide WordPress Theme and Plugin Information for Enhanced Security

This snippet provides a robust solution to hide your WordPress theme and plugin information from scanners and tools that attempt to identify them. It adds an extra layer of security by obscuring critical data, making it significantly harder for attackers or automated bots to gather information about your site.

## Features
- **Hide WordPress Theme Information:**
  - Removes theme name and version from asset URLs (scripts and styles).
  - Blocks direct access to the `/wp-content/themes/` directory.
  
- **Hide WordPress Plugin Information:**
  - Removes plugin name and version from asset URLs.
  - Blocks direct access to the `/wp-content/plugins/` directory.
  
- **Prevent REST API Information Leak:**
  - Restricts REST API endpoints from exposing theme and plugin data.

- **Clean Up Debug Information:**
  - Removes theme and plugin details from WordPress debug data (Tools > Site Health).

- **Custom `.htaccess` Rules:**
  - Adds rules to block directory listing for themes and plugins.

## Installation
1. Copy the PHP snippet from [this file](#).
2. Paste the code into your WordPress theme's `functions.php` file or use a custom plugin for added portability.

## Usage
- Once implemented, this snippet will automatically:
  - Obscure theme and plugin information in frontend asset URLs.
  - Block directory access to theme and plugin folders.
  - Restrict sensitive data from being exposed through REST API or debug tools.

### Note:
For complete protection, ensure your server has **directory listing disabled** (e.g., set `Options -Indexes` in `.htaccess`).

---

## Video Tutorial

For a detailed walkthrough of WordPress security in 2025, including how to use this code, watch my **Ultimate WordPress Security Class 2025** on YouTube:

🎥 [Watch the Full Video on TutsVela](https://youtube.com/@tutsvela)

---

## Disclaimer
This snippet enhances security but does not guarantee complete invulnerability. Always combine such techniques with:
- Regular updates to WordPress core, themes, and plugins.
- A robust security plugin like Wordfence or iThemes Security.
- Strong passwords and secure hosting environments.

## License
This snippet is open-source and distributed under the [MIT License](LICENSE).
