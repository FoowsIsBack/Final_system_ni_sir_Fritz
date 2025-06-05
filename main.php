<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <link rel="shortcut icon" href="icon/qr.png" type="image/x-icon">
    <title>STUDENT GENERATE QR CODE</title>
</head>
<body>

    <video autoplay muted loop>
        <source src="video/bg.mp4" type="video/mp4">
    </video>

<h1>STUDENT GENERATE QR CODE</h1>

<div class="ui_1">
    <img src="icon/qr.png">
    <form action="main.php" method="post" enctype="multipart/form-data">
        <div class="main">
            <h2>FULL NAME:</h2>
            <input type="text" name="user_info" placeholder="Ex. Dave Bangcoyo" required>

            <h2>AGE:</h2>
            <input type="number" name="age" placeholder="Ex. 20" required>

            <h2>GENDER:</h2>
            <input type="radio" name="gender" id="male" value="male" required>
            <label for="male">Male</label><br>
            <input type="radio" name="gender" id="female" value="female">
            <label for="female">Female</label>

            <h2>SECTION:</h2>
            <input type="radio" name="section" id="2a" value="2A" required>
            <label for="2a">2A</label><br>
            <input type="radio" name="section" id="2b" value="2B">
            <label for="2b">2B</label><br>
            <input type="radio" name="section" id="2c" value="2C">
            <label for="2c">2C</label>

            <h2>PROFILE PIC:</h2>
            <input class="fileuplders" type="file" name="profile_pic" id="file" accept="image/*" required>
            <hr>
            <div class="clickers">
                <button type="submit">Add Record</button>
            </div>
            <div class="dev">
                <a class="setting" href="developer.php">Developer?</a>
                <a href="index.php">
                    <img src="icon/logout.png" alt="logout">
                </a>
            </div>
        </div>
    </form>
</div>

<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $info = ucwords(trim($_POST['user_info'] ?? ''));
    $age = intval($_POST['age'] ?? 0);
    $gender = ucwords(trim($_POST['gender'] ?? ''));
    $section = strtoupper(trim($_POST['section'] ?? ''));
    $profile = '';

    if (isset($_FILES['profile_pic']) && $_FILES['profile_pic']['error'] === 0) {
        $allowed_types = ['image/jpeg', 'image/png', 'image/gif'];
        $file_type = mime_content_type($_FILES['profile_pic']['tmp_name']);

        if (!in_array($file_type, $allowed_types)) {
            die('Invalid file type.');
        }

        $profile = time() . '_' . basename($_FILES['profile_pic']['name']);
        $upload_path = 'uploads/' . $profile;

        if (!is_dir('uploads')) {
            mkdir('uploads', 0777, true);
        }

        if (move_uploaded_file($_FILES['profile_pic']['tmp_name'], $upload_path)) {
            $stmt = $conn->prepare("INSERT INTO information (user_info, profile_pic, age, gender, section) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("ssiss", $info, $profile, $age, $gender, $section);

            if ($stmt->execute()) {
                $last_id = $conn->insert_id;

                include 'phpqrcode/qrlib.php';

                $qr_data = "ID: $last_id\nName: $info\nAge: $age\nGender: $gender\nSection: $section";
                $qr_filename = "uploads/qr_$last_id.png";
                QRcode::png($qr_data, $qr_filename, QR_ECLEVEL_L, 4);

                $update = $conn->prepare("UPDATE information SET qr_code = ? WHERE id = ?");
                $update->bind_param("si", $qr_filename, $last_id);
                $update->execute();
                sleep(3);
                echo "<script>
                    alert('Record added successfully!');
                    window.location.href = 'main.php';
                </script>";
                exit();
            } else {
                echo "Database insert failed: " . $stmt->error;
            }
        } else {
            echo "Failed to upload image.";
        }
    } else {
        echo "Image upload error.";
    }
}
?>

</body>
</html>
