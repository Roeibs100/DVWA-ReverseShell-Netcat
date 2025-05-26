# DVWA Reverse Shell with Netcat and PHP Reverse Shell

This project demonstrates how to perform a reverse shell attack on the DVWA (Damn Vulnerable Web Application) using Netcat and a PHP reverse shell script.

## Requirements

- Kali Linux with Netcat installed
- A DVWA server accessible on your network
- Your Kali Linux IP address
- A port to listen on (e.g., 4444)

## How It Works

1. You set up a Netcat listener on your Kali machine.
2. Upload the PHP reverse shell script (`reverse.php`) to DVWA using the file upload functionality.
3. Execute the script via a web browser to get a reverse shell connection back to your Kali machine.
4. Use the shell to execute commands on the DVWA server.

## Usage Instructions

1. Start the Netcat listener on Kali:

   ```
   nc -lvnp 4444
   ```

2. Edit the `reverse.php` file and replace `YOUR_KALI_IP` with your Kali Linux IP address, and adjust the port if necessary.

3. Upload the `reverse.php` file to DVWA through the file upload feature.

4. Access the uploaded script via your web browser:

   ```
   http://[DVWA_IP]/dvwa/hackable/uploads/reverse.php
   ```

5. You should now see a shell prompt on your Kali terminal where you started Netcat.

## Privilege Escalation

- The shell runs as the webserver user (usually `www-data`), which has limited privileges.
- To gain root privileges, check sudo permissions with:

  ```
  sudo -l
  ```

- Look for local privilege escalation exploits appropriate for the kernel version of the target.

## Notes

- Only use this in environments where you have explicit permission.
- Practice safe and ethical hacking.

## Useful Links

- [php-reverse-shell by pentestmonkey](https://github.com/pentestmonkey/php-reverse-shell)
- [DVWA - Damn Vulnerable Web Application](http://www.dvwa.co.uk/)
