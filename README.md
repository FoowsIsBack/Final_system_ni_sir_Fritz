# SETUP
```sh
PHP QR Code Generator Setup Instructions
========================================

Step 1: Download the QR Code Library
---------------------------------------
- Download the PHP QR Code library from:
  https://sourceforge.net/projects/phpqrcode/

- Extract it and place the folder into your project directory.
  Example folder name: phpqrcode

Step 2: Enable GD Extension in XAMPP
---------------------------------------
1. Open the php.ini file located in your XAMPP directory:
   C:\xampp\php\php.ini

2. Search for the line:
   ;extension=gd

3. Remove the semicolon to enable it:
   extension=gd

4. Save the php.ini file.

Step 3: Restart Apache
--------------------------
- Go to your XAMPP Control Panel.
- Stop Apache.
- Start Apache again.

Step 4: Confirm GD Library is Working
----------------------------------------
1. Create a file named "info.php" inside your htdocs folder.

2. Add the following code:

   <?php phpinfo(); ?>

3. Open your browser and visit:
   http://localhost/info.php

4. Look for a section titled gd. If it appears, it means it's enabled

You're now ready to generate QR codes using PHP!
```

# MAIN
![image](https://github.com/user-attachments/assets/bb5c4679-1983-4989-ae98-7a7fd4ec0887)

# START
![image](https://github.com/user-attachments/assets/fc37e67d-a673-40e6-b024-343d36314ec4)

# LOGIN
![image](https://github.com/user-attachments/assets/b8816f65-8e5d-4090-91b5-0296f34a321a)

# SIGN UP
![image](https://github.com/user-attachments/assets/9ead96b2-7ab0-488e-b014-0034c316a634)

# All Student Details
![image](https://github.com/user-attachments/assets/c2cac03a-9dcd-46f7-b1d1-00dceaabcc62)

# Student Edit Information
![image](https://github.com/user-attachments/assets/aa982d69-862e-49aa-8435-7a49ab3af79c)
```sh
NOTE: The profile picture can't be changed yet because it is still under development.
```

# All Student QR Code
![image](https://github.com/user-attachments/assets/4a7f718c-5f53-42bd-94ff-0380507e6150)

# DASHBOARD
![image](https://github.com/user-attachments/assets/3aaf993f-f0a2-45e3-b26e-3e2f2f24f0cd)

# DATABASE Student (information)
![image](https://github.com/user-attachments/assets/21cc7495-87ea-4808-91d4-a4c6c2601273)

# DATABASE Login (users)
![image](https://github.com/user-attachments/assets/493bb2f5-1c47-4282-8b9d-ae32b819a779)

# DEv
![image](https://github.com/user-attachments/assets/6ec94d2c-bcf6-48d2-ad2f-467cdf6b78ca)

# COMMAND CREATE TABLES
```sql
CREATE DATABASE qr_code;

USE qr_code;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(100) NOT NULL
);

CREATE TABLE information (
    id INT AUTO_INCREMENT PRIMARY KEY,
    profile_pic VARCHAR(255),
    age INT,
    user_info VARCHAR(255),
    gender VARCHAR(10),
    qr_code VARCHAR(255),
    section VARCHAR(10)
);

```
