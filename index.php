<?php require 'conn.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelajar</title>
    <style>
        * {
            font-family: Arial, Helvetica, sans-serif;
        }

        table {
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid;
            padding: 5px;
        }
    </style>
</head>

<body>
    <h3>Senarai Pelajar</h3>
    <table>
        <tr>
            <th>Bil</th>
            <th>Nama Pelajar</th>
            <th>No. Matrik</th>
            <th>Kelas</th>
        </tr>
        <?php
        $bil = 1;
        $sql = "SELECT * FROM pelajar";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();
        while ($row = $result->fetch_object()) {
        ?>
            <tr>
                <td><?php echo $bil++; ?></td>
                <td><?php echo $row->namapelajar; ?></td>
                <td><?php echo $row->nomatrik; ?></td>
                <td><?php echo $row->kelas; ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>