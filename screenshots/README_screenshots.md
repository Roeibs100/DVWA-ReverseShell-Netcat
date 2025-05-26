# Screenshots and Explanation

This folder contains screenshots documenting the steps of the reverse shell attack and their outcomes. Each image captures a critical phase in the exploitation process, providing visual guidance to complement the written instructions.

## Screenshots Included:

- **01_nc_listener.png** — Shows the Netcat listener running on Kali Linux, waiting for the reverse shell connection from the target.
- **02_upload_php.png** — Demonstrates uploading the `php-reverse-shell.php` file to the DVWA web application through the vulnerable file upload feature.
- **03_shell_connected.png** — Displays the successful reverse shell connection received on Kali Linux via Netcat, with a remote shell prompt.
- **Editing php-reverse-shell.php.png** — Screenshot of editing the PHP reverse shell script to set the Kali IP and port.
- **Listening for Reverse Shell with Netcat.png** — Another capture of the Netcat listener setup.
- **Reverse Shell Attack via DVWA File Upload Vulnerability using PHP & Netcat.png** — Overview image showing the attack flow using PHP and Netcat.

## How to Use

- Follow the instructions provided in the main `README.md` and `setup_instructions.md` files inside the `docs` folder.
- Review each screenshot carefully to understand the progression and execution of the attack.
- Add your own screenshots to this folder as you replicate and practice the steps.

This visual documentation aims to enhance your understanding of the attack flow and help troubleshoot any issues during practice.
