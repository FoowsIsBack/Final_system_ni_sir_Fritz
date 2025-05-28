<?php
include 'db.php';

$result = $conn->query("SELECT * FROM information");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="icon/qr.png" type="image/x-icon">
    <title>QR Result</title>
</head>

<body>

    <div class="bg">
        <video autoplay muted loop>
            <source src="video/bg.mp4" type="video/mp4">
        </video>
    </div>

    <h1 class="title_qr">ALL STUDENTS QR CODE</h1>

    <div class="listing_qr">
        <table>
            <tr class="classTH">
                <th>ID</th>
                <th>PROFILE PICTURE</th>
                <th>QR</th>
                <th>SETTING</th>
            </tr>

            <?php while ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><img src="uploads/<?= htmlspecialchars($row['profile_pic']) ?>" class="pic"></td>
                    <td>
                        <?php if (!empty($row['qr_code'])): ?>
                            <img src="<?= htmlspecialchars($row['qr_code']) ?>" alt="QR Code">
                        <?php else: ?>
                            No QR
                        <?php endif; ?>
                    </td>
                    <td>
                        <a class="setting" id="del" href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Delete this student?')">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
        <div class="dashboard">
            <button class="back_qr" onclick="window.location.href='list.php'">Back</button>
            <button class="total" onclick="window.location.href='dashboard.php'">Dashboard</button>
        </div>
    </div>

</body>
</html>
