# Project Setup

## 1. Create the `.env` File

In the project's **root folder**, create a `.env` file by copying the provided `.env.example`.

Replace the placeholder credentials with the correct email credentials.

> **Important:** Do not commit the `.env` file to GitHub, as it may contain sensitive credentials.

---

## 2. Install PHP

PHP is required for SMTP email handling.

Open **PowerShell as Administrator** and run:

```powershell
winget install --id PHP.PHP -e
```

After the installation is complete, **close PowerShell** and open a new PowerShell window **as Administrator**.

Verify the PHP installation:

```powershell
php -v
php --ini
```

Check where PHP is installed:

```powershell
Get-Command php
```

The PHP executable should be located somewhere similar to:

```text
C:\PHP\php-8.5.9-nts-Win32-vs17-x64\php.exe
```

---

## 3. Configure PHP

Navigate to the PHP installation directory:

```powershell
cd C:\PHP\php-8.5.9-nts-Win32-vs17-x64
```

Check the available PHP configuration files:

```powershell
Get-ChildItem php.ini*
```

Create the `php.ini` configuration file from the development template:

```powershell
Copy-Item php.ini-development php.ini
```

Open the configuration file:

```powershell
notepad php.ini
```

### Enable OpenSSL

In `php.ini`, find the following lines:

```ini
;extension_dir = "ext"
;extension=openssl
```

Remove the `;` at the beginning of each line:

```ini
extension_dir = "ext"
extension=openssl
```

Save the file and close Notepad.

---

## 4. Verify the PHP Configuration

Check which `php.ini` PHP is using:

```powershell
php --ini
```

Verify that OpenSSL is enabled:

```powershell
php -m | Select-String openssl
```

You can also verify it directly:

```powershell
php -r "echo extension_loaded('openssl') ? 'OpenSSL enabled' : 'OpenSSL disabled';"
```

If everything is configured correctly, the output should be:

```text
OpenSSL enabled
```

---

## Setup Checklist

Before running the application, make sure:

- [ ] `.env` has been created in the project root.
- [ ] `.env` contains the correct email credentials.
- [ ] PHP has been installed.
- [ ] `php -v` successfully returns the PHP version.
- [ ] `php.ini` has been created.
- [ ] `extension_dir = "ext"` is enabled.
- [ ] `extension=openssl` is enabled.
- [ ] OpenSSL verification returns `OpenSSL enabled`.
