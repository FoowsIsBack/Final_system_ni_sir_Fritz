<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="icon/userAdd.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>Register Account</title>
</head>
<body>

    <video autoplay muted loop>
        <source src="video/bg.mp4" type="video/mp4">
    </video>

    <div class="main">
        <div class="person1">
            <img src="icon/userAdd.png" alt="person">
        </div>
    
        <div class="ui">
            <form action="index.php" method="post">
                <h1>Register Account</h1>
                <h3>Username</h3>
                <input type="text" name="username" placeholder="Enter username">
                <h3>Password</h3>
                <input type="password" name="password" id="password" placeholder="Enter password">
                <div class="showP">
                    <input type="checkbox" name="show" id="showPass">
                    <label for="showPass">Show Password</label>
                </div>
                <div class="clickers">
                    <input class="reg" type="submit" value="Sign Up">
                </div>
                <div class="alreadyAcc">
                    <a href="index.php">Already have an account?</a>
                </div>
            </form>
        </div>
    </div>
    
</body>
</html>