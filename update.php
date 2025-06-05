<?php
include 'db.php';

if (!isset($_GET['id'])) {
    header("Location: section.php");
    exit;
}

$id = intval($_GET['id']);

$result = $conn->query("SELECT * FROM information WHERE id=$id");
if ($result->num_rows === 0) {
    header("Location: section.php");
    exit;
}
$row = $result->fetch_assoc();

if (isset($_POST['update'])) {
    $user_info = $conn->real_escape_string($_POST['user_info']);
    $age = intval($_POST['age']);
    $gender = $conn->real_escape_string($_POST['gender']);
    $section = $conn->real_escape_string($_POST['section']);

    $conn->query("UPDATE information SET user_info='$user_info', age='$age', gender='$gender', section='$section' WHERE id=$id");
    echo "<script>
            alert('Student updated successfully!');
            window.location.href = 'section.php';
          </script>";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="update.css" />
    <link rel="shortcut icon" href="icon/userUpdate.png" type="image/x-icon" />
    <title>Update Student Information</title>
</head>
<body>

    <video autoplay muted loop>
        <source src="video/bg.mp4" type="video/mp4" />
    </video>

    <h1>UPDATE STUDENT INFORMATION</h1>

    <div class="info_editors">
        <img src="icon/userUpdate.png" alt="Update Icon" />
        <form method="post">
            <div class="main">
                <label>FULL NAME:</label>
                <br>
                <br>
                <input type="text" name="user_info" value="<?= htmlspecialchars($row['user_info']) ?>" required />
                <br>
                <br>
                <label>AGE:</label>
                <br /><br />
                <input type="number" name="age" value="<?= (int)$row['age'] ?>" required />
                <br>
                <br>
                <label>SECTION:</label>
                <br>
                <br>
                <select name="section" required>
                    <option value="BSIT - 2A" <?= $row['section'] == 'BSIT - 2A' ? 'selected' : '' ?>>BSIT - 2A</option>
                    <option value="BSIT - 2B" <?= $row['section'] == 'BSIT - 2B' ? 'selected' : '' ?>>BSIT - 2B</option>
                    <option value="BSIT - 2C" <?= $row['section'] == 'BSIT - 2C' ? 'selected' : '' ?>>BSIT - 2C</option>
                </select>
                <label>GENDER:</label>
                <select name="gender" required>
                    <option value="Male" <?= $row['gender'] == 'Male' ? 'selected' : '' ?>>Male</option>
                    <option value="Female" <?= $row['gender'] == 'Female' ? 'selected' : '' ?>>Female</option>
                </select>
                <hr>
                <div class="clickers">
                    <button type="submit" name="update">Update Student</button>
                </div>
                <br>
                <div class="cancel">
                    <a class="cancel_edit" href="section.php">Cancel edit?</a>
                </div>
            </div>
        </form>
    </div>

</body>
</html>
