<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="icon/dashboard.png" type="image/x-icon">
    <title>Dashboard</title>
</head>
<body>

    <video autoplay muted loop>
        <source src="video/bg.mp4" type="video/mp4">
    </video>

    <div class="dash_icon">
        <img src="icon/dashboard.png" alt="icon">
    </div>

    <div class="dash_title">
        <h1>STUDENT DASHBOARD</h1>
    </div>

    <?php
    $conn = new mysqli("localhost", "root", "", "qr_code");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $total = $conn->query("SELECT COUNT(*) AS total FROM information")->fetch_assoc()['total'];
    $male = $conn->query("SELECT COUNT(*) AS male FROM information WHERE gender = 'male'")->fetch_assoc()['male'];
    $female = $conn->query("SELECT COUNT(*) AS female FROM information WHERE gender = 'female'")->fetch_assoc()['female'];
    ?>

    <div class="dashboard_info">
        <div class="box1">
            <h2 class="h22">Total Students</h2>
            <p class="pp">Total: <?= ($total) ?></p>
        </div>
        <br>    
        <div class="box2">
            <h2 class="h22">Male Students</h2>
            <p class="pp">Total: <?= ($male) ?></p>
        </div>
        <br>
        <div class="box3">
            <h2 class="h22">Female Students</h2>
            <p class="pp">Total: <?= ($female) ?></p>
        </div>
    </div>

    <div class="out1">
        <a href="list.php">
            <img src="icon/signout.png" alt="logout">
        </a>
    </div>
    
</body>
</html>