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
            <th>name</th>
            <th>email</th>
            <th>balance</th>
            <th>Transfer:</th>
        </tr>

        <?php

        $sql = "SELECT * FROM users";
        $stmt = $conn->query($sql);

        $rows = $stmt->fetchAll();

        foreach ($rows as $row) {
            $row['name'] = strtolower($row['name']);
            echo "
            <tr>
                <td> $row[name] </td>
                <td> $row[email] </td>
                <td> $row[amount] </td>
                <td> <a href='./transfer.php?name=$row[name]'>Transfer</a> </td>
            </tr>
            ";
        }

        ?>

    </table>
</body>

</html>