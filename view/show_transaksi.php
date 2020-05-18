<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi</title>
</head>

<body>
    <a href='../index.php'>Kembali</a>
    <br>
    <br>
    <table border="1" cellpadding="5" cellspacing="0" width="12%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Jumlah</th>
            </tr>
        </thead>
        <tbody>
            <?php
                require("../controller/TransaksiController.php");
                $trc = new TransaksiController();
                $trc->showAll();
            ?>
        </tbody>
    </table>
</body>

</html>