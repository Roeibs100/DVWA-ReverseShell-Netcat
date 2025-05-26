# Setup and Usage Instructions

1. Ensure Kali Linux and DVWA are on the same network and that you know both IP addresses.

2. Download or edit the `reverse.php` file with your Kali IP and chosen port.

3. Start the Netcat listener on Kali:

   ```
   nc -lvnp 4444
   ```

4. Upload the `reverse.php` file to the DVWA application using the file upload function.

5. Open your browser and navigate to the uploaded script URL:

   ```
   http://[DVWA_IP]/dvwa/hackable/uploads/reverse.php
   ```

6. You will get a reverse shell connection in your Kali terminal.

# Tips

- If the shell disconnects, try refreshing the URL in the browser.
- Check sudo permissions using `sudo -l` to explore privilege escalation possibilities.
- Use `searchsploit` on Kali to find relevant exploits for the target's kernel version.
