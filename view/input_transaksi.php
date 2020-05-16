<?php
    require_once './controller/TransaksiController.php';    
?>

<form action="" method="post">
    <input type="number" name="txt_jml" id="txt_jml" size="25" placeholder="Masukkan jumlah">
    <input type="submit" value="Simpan" name="btn_simpan">
</form>

<?php
    
    if(isset($_POST['btn_simpan'])){        
        $trc = new TransaksiController();
        echo $trc->insert();                            
    }

?>