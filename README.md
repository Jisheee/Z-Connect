Create .env on root folder and copy/paste the .env.example onto it. Don't forget to replace credentials into the correct emails.

Download and install php SMTP for email handling. Refer to the following:

To be run at powershell (run as admin)
  winget install --id PHP.PHP -e

Close powershell and rerun as admin
  php -v
  php --ini  

  Get-Command php

  C:\PHP\php-8.5.9-nts-Win32-vs17-x64\php.exe

  cd C:\PHP\php-8.5.9-nts-Win32-vs17-x64

  Get-ChildItem php.ini*

  Copy-Item php.ini-development php.ini

  notepad php.ini

Find these lines in Notepad:
  ;extension_dir = "ext"
  ;extension=openssl

Change them to:
  extension_dir = "ext"
  extension=openssl

  php --ini

  php -m | Select-String openssl
  php -r "echo extension_loaded('openssl') ? 'OpenSSL enabled' : 'OpenSSL disabled';"
