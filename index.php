<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="icon/qr.png" type="image/x-icon">
    <title>Welcome to Qr Generator</title>
</head>
<body>

    <video autoplay muted loop>
        <source src="video/bg.mp4" type="video/mp4">
    </video>

    <div class="title1">
        <h1>STUDENTS QR MANAGEMENT SYSTEM</h1>
    </div>

    <div class="logo">
        <img class="logo_dex" src="icon/person.png" alt="icon">
    </div>

    <div class="choice">
        <div class="circle1">
            <img class="circle" src="icon/circle.png" alt="circle">
        </div>
        <h1>ARE YOU?</h1>   
        <div class="child">
            <button class="tolist" type="button" onclick="window.location.href='main.php'">STUDENT</button>
            <p>OR</p>
            <button class="admin" type="button" onclick="window.location.href='login.php'">TEACHER</button>
        </div>
    </div>
    
</body>
</html>
