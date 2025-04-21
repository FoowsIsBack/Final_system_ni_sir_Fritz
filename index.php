<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="icon/person.png" type="icon">
    <title>Login Account</title>
</head>
<body>

    <div class="main">
        <div class="person">
            <img src="icon/person.png" alt="person">
        </div>
    
        <div class="ui">
            <form action="index.php" method="post">
                <h1>Login Account</h1>
                <h3>Username</h3>
                <input type="text" name="username" id="" placeholder="Enter username">
                <h3>Password</h3>
                <input type="password" name="password" id="" placeholder="Enter password">
                <div class="clickers">
                    <input type="submit" value="LOG IN">
                </div>            
            </form>
        </div>
    </div>

    <?php

    $user = "root";
    $pass = "root";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $password = $_POST["password"] ?? '';
        $username = $_POST["username"] ?? '';

        if(empty($username) && empty($password)){
            echo"<script>alert('Fill up the Username and Password!');</script>";
        } else if ($username != $user && $password != $pass){
            echo"<script>alert('Username and Password is wrong!');</script>";
        } elseif ($username != $user){
            echo"<script>alert('Username is wrong!');</script>";
        } else if ($password != $pass){
            echo"<script>alert('Password is wrong!');</script>";
        } else {
            header("Location: main.php");
        }
    }
    ?>

</body>
</html>
