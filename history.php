<?php
include "conn.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="app.css">
</head>

<body>
    <?php include "header.php" ?>

    <table class="container">
        <tr>
            <th>Sender</th>
            <th>Reciever</th>
            <th>Amount</th>
            <th>Date</th>
        </tr>

        <?php

        $sql = "SELECT * FROM transactions";
        $stmt = $conn->query($sql);

        $rows = $stmt->fetchAll();

        foreach ($rows as $row) {
            echo "
    <tr>
    <td> $row[sender] </td>
    <td> $row[reciever] </td>
    <td> $row[amount] </td>
    <td> $row[date] </td>
    </tr>
    ";
        }

        ?>
    </table>

</body>

</html>