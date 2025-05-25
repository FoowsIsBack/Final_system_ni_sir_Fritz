# MAIN
![image](https://github.com/user-attachments/assets/fbc5c850-965d-4520-bf4e-5e12abd8c164)

# Start
![image](https://github.com/user-attachments/assets/e9a2c22e-338f-41de-b46e-8f65d6a2eeb6)

# LOGIN
![image](https://github.com/user-attachments/assets/ea4dc852-aee2-4da0-9322-049bfe1900ea)

# SIGN UP
![image](https://github.com/user-attachments/assets/9ead96b2-7ab0-488e-b014-0034c316a634)

# All Student details
![image](https://github.com/user-attachments/assets/e5038361-3378-483a-ad09-a7e08832f407)

# DEv
![image](https://github.com/user-attachments/assets/17a29cbd-1ea0-41f4-91d2-ce6c5c2c7d2d)

# Register SQL table
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
    gender VARCHAR(10)
);

```
