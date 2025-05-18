# LOGIN
![image](https://github.com/user-attachments/assets/ea4dc852-aee2-4da0-9322-049bfe1900ea)

# SIGN UP
![image](https://github.com/user-attachments/assets/9ead96b2-7ab0-488e-b014-0034c316a634)

# Register SQL table
```sql
CREATE DATABASE qr_code;

USE qr_code;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(100) NOT NULL
);

CREATE TABLE infomation (
    id INT AUTO_INCREMENT PRIMARY KEY,
    profile_pic VARCHAR(255),
    age INT,
    user_info VARCHAR(255),
    gender VARCHAR(10)
);

```
