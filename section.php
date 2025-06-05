<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="icon/dashboard.png" type="image/x-icon">
    <title>All Sections</title>
</head>
<body>

    <video autoplay muted loop>
        <source src="video/bg.mp4" type="video/mp4">
    </video>

    <div class="dash_icon">
        <img src="icon/dashboard.png" alt="icon">
    </div>

    <div class="dash_title">
        <h1>ALL SECTIONS</h1>
    </div>

    <?php
    $conn = new mysqli("localhost", "root", "", "qr_code");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $total_2a = $conn->query("SELECT COUNT(*) AS total FROM information WHERE section = '2a'")->fetch_assoc()['total'];
    $total_2b = $conn->query("SELECT COUNT(*) AS total FROM information WHERE section = '2b'")->fetch_assoc()['total'];
    $total_2c = $conn->query("SELECT COUNT(*) AS total FROM information WHERE section = '2c'")->fetch_assoc()['total'];
    ?>

    <div class="section_info">
        <div class="box1">
            <h2 class="h22">BSIT - 2A</h2>
            <p class="pp">Total Students = <span class="total_number"><?= ($total_2a) ?></span></p>
        </div>
        <br>

        <div class="student_sec">
            <button class="all_student_sec" onclick="window.location.href='2A.php'">All Student</button>
            <button class="all_student_sec2" onclick="window.location.href='2B.php'">All Student</button>
            <button class="all_student_sec3" onclick="window.location.href='2C.php'">All Student</button>
        </div>

        <div class="box2">
            <h2 class="h22">BSIT - 2B</h2>
            <p class="pp">Total  Students = <span class="total_number"><?= ($total_2b) ?></span></p>
        </div>
        <br>

        <div class="box3">
            <h2 class="h22">BSIT - 2C</h2>
            <p class="pp">Total  Students = <span class="total_number"><?= ($total_2c) ?></span></p>
        </div>
    </div>

    <div class="out2">
        <a href="login.php">
            <img src="icon/signout.png" alt="logout">
        </a>
    </div>

    <div class="resultqrqr1">
        <button class="r_qr" onclick="window.location.href='dashboard.php'">Dashboard</button>
    </div>
    
</body>
</html>
