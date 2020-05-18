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
    <form action="" method="post">
        <input type="number" name="txt_jml" id="txt_jml" size="25" placeholder="Masukkan jumlah">
        <input type="submit" value="Simpan" name="btn_simpan">
    </form>
    <?php
        require("../controller/TransaksiController.php");

        if (isset($_POST['btn_simpan'])) {
            $trc = new TransaksiController();
            echo $trc->insert();
        }    
    ?>
</body>

</html>