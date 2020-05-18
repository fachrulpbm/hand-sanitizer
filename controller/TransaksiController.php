<?php
    require ("../model/Transaksi.php");

    class TransaksiController{

        private static $tr;

        function __construct(){            
                self::$tr = new Transaksi();            
        }

        function insert(){
            $jml = $_POST['txt_jml'];
            if ($jml > 5) {
                return "<p id='msg'>Pembelian hand-sanitizer tidak boleh lebih dari 5!</p>";
            } elseif ($jml == 0) {
                return "<p id='msg'>Jumlah masih kosong, harap input dengan benar!</p>";
            } elseif ($jml < 0) {
                return "<p id='msg'>Periksa kembali input Anda! Tidak boleh minus!</p>";
            } else {
                return self::$tr->beli($jml);
            }            

        }

        function showAll(){

            $row = self::$tr->tampilkanSemuaTransaksi()->fetchAll(PDO::FETCH_ASSOC);

            // echo var_dump($row);

            if( count($row) == 0 ){
                echo "<tr align='center'>";
                echo "<td colspan=3>Tidak ada data</td>";                
                echo "</tr>";
            }else{
                foreach ($row as $key) {
                    echo "<tr align='center'>";
                    echo "<td>" . $key['id'] . "</td>";
                    echo "<td>" . $key['jml'] . "</td>";
                    echo "</tr>";
                }
            }

            
            
        }

    }
?>
