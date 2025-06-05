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

# All Sections
![image](https://github.com/user-attachments/assets/685769a0-578a-4960-8769-bb2ae0740852)

# All Student Details
![image](https://github.com/user-attachments/assets/b8c61d2e-27fd-4ac1-bfde-3e779c5e8190)

# Student Edit Information
![image](https://github.com/user-attachments/assets/b0059432-df50-4300-981a-dfa9d0247d34)
```sh
NOTE: The profile picture can't be changed yet because it is still under development.
```

# All Student QR Code
![image](https://github.com/user-attachments/assets/7870473c-fc5b-45c7-a11d-8dfb2ca438d3)

# DASHBOARD
![image](https://github.com/user-attachments/assets/3955ab16-8b8c-4628-8e89-4e8d79f78626)

# DATABASE Student (information)
![image](https://github.com/user-attachments/assets/004285fb-9e8f-413c-8f88-bb30a4120dd5)

# DATABASE Login (users)
![image](https://github.com/user-attachments/assets/f300f6d4-cff2-4dcf-a62b-489eb633e064)

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
