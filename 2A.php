<?php
include 'db.php';

$result = $conn->query("SELECT * FROM information WHERE section = 'BSIT - 2A'");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="section_icon/A.png" type="image/x-icon">
    <title>BSIT - 2A</title>
</head>
<body>

    <div class="bg">
        <video autoplay muted loop>
            <source src="video/bg.mp4" type="video/mp4">
        </video>
    </div>

    <h1 class="title">ALL STUDENTS BSIT - 2A</h1>

    <div class="listing">
        <table>
            <tr class="classTH">
                <th>ID</th>
                <th>PROFILE PICTURE</th>
                <th>FULL NAME</th>
                <th>AGE</th>
                <th>GENDER</th>
                <th>SECTION</th>
                <th>SETTING</th>
            </tr>

            <?php while ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><img src="uploads/<?= htmlspecialchars($row['profile_pic']) ?>" class="pic"></td>
                    <td><?= htmlspecialchars($row['user_info']) ?></td>
                    <td><?= (int)$row['age'] ?></td>
                    <td><?= htmlspecialchars($row['gender']) ?></td>
                    <td><?= htmlspecialchars($row['section']) ?></td>
                    <td>
                        <a class="edit" id="upd" href="update.php?id=<?= $row['id'] ?>">Edit</a>
                        |
                        <a class="setting" id="del" href="delete_a.php?id=<?= $row['id'] ?>" onclick="return confirm('Delete this student?')">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
        <div class="dashboard">
            <button class="logout" onclick="window.location.href='section.php'">Back</button>
            <button class="total" onclick="window.location.href='dashboard.php'">Dashboard</button>
        </div>
    </div>
    
</body>
</html>
