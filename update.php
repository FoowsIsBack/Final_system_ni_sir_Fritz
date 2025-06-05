<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = $conn->query("SELECT * FROM information WHERE id=$id");
    $row = $result->fetch_assoc();
}

if (isset($_POST['update'])) {
    $user_info = $_POST['user_info'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];

    $conn->query("UPDATE information SET user_info='$user_info', age='$age', gender='$gender' WHERE id=$id");
    sleep(3);
    echo "<script>alert('Student update successfully!');window.location.href = 'section.php';
    </script>";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="update.css">
    <link rel="shortcut icon" href="icon/userUpdate.png" type="image/x-icon">
    <title>Update Student Information</title>
</head>
<body>

    <video autoplay muted loop>
        <source src="video/bg.mp4" type="video/mp4">
    </video>

    <h1>UPDATE STUDENT INFORMATION</h1>

    <div class="info_editors">
        <img src="icon/userUpdate.png">
        <form method="post">
            <div class="main">
                <label>FULL NAME:</label>
                <br>
                <br>
                <input type="text" name="user_info" value="<?= htmlspecialchars($row['user_info']) ?>" required>
                <br>
                <br>
                <label>AGE:</label>
                <br>
                <br>
                <input type="number" name="age" value="<?= (int)$row['age'] ?>" required>
                <br>
                <br>
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
