<?php
include "conn.php";

if (isset($_POST['submit'])) {
    $from = $_POST['from'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    $sql = "SELECT * FROM users WHERE name= ? ";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$from]);
    $row1 = $stmt->fetch();
    $stmt->execute([$to]);
    $row2 = $stmt->fetch();
    if ($amount == 0 || $amount == null) {
        echo "<script>alert('please enter valid amount');</script>";
    } else if ($amount > $row1['amount']) {
        echo "<script>alert('Insufficient balance');</script>";
    } else {
        $row1['amount'] -= $amount;
        $row2['amount'] += $amount;

        $sql = "UPDATE users SET amount = ? WHERE name = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$row1['amount'], $from]);
        $stmt->execute([$row2['amount'], $to]);

        $sql = "INSERT INTO transactions (sender, reciever, amount) VALUES('$from', '$to', '$amount')";
        $conn->exec($sql);
        echo "<script>
        alert('Transaction Successfull');
        location.replace('./view.php');
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="app.css">
</head>

<body>
    <?php include "header.php" ?>
    <div class="container">
        <form action="" method="post">
            <label for="from">Transfer from:</label>
            <select name="from" id="from">
                <?php

                $sql = "SELECT name FROM users";
                $stmt = $conn->query($sql);

                $rows = $stmt->fetchAll();

                foreach ($rows as $row) {
                    $name = strtolower($row['name']);
                    echo "<option value='$name'>$name</option>";
                }

                ?>
            </select>
            <label for="to">Transfer to:</label>
            <select name="to" id="to">
                <?php

                foreach ($rows as $row) {
                    $name = strtolower($row['name']);
                    echo "<option value='$name' id='$name'>$name</option>";
                }

                ?>
            </select>
            <label for="amount">Amount:</label>
            <input type="number" name="amount" id="amount" required>
            <input type="submit" name="submit" value="Transfer">
        </form>
    </div>
</body>

</html>

<script type=text/javascript> // $("select").change(function() { $("select option").attr("disabled",""); DisableOptions(); }); function DisableOptions() { var arr=[]; $("select option:selected").each(function() { arr.push($(this).val()); }); $("select option").filter(function() { return $.inArray($(this).val(),arr)>-1;
//         }).attr("disabled","disabled");   

// }

window.onload = function() {
    const params = new URLSearchParams(window.location.search);
    if(params.has('name')){
        var name = params.get('name');
        var select = document.getElementById('from');
        select.value = name;

        var select1 = document.getElementById('to');
        document.getElementById(name).disabled = true;
    }
}
</script>