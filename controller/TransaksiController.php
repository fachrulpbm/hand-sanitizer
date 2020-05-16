<?php    
    require_once './model/Transaksi.php';

    class TransaksiController{
        
        private $tr;        
        
        function __construct(){
            // if(self::$tr == null){
                $this->tr = new Transaksi();
            // }            
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
                return $this->tr->beli($jml);
            }                                    
        }

        function showAll(){

            $row = $this->tr->tampilkanSemuaTransaksi()->fetchAll(PDO::FETCH_ASSOC);
            //echo var_dump($row);

            foreach ($row as $key) {
                echo "<tr align='center'>";
                echo "<td>" . $key['id'] . "</td>";
                echo "<td>" . $key['jml'] . "</td>";
                echo "</tr>";                  
            }
            

            // while( $row = self::$tr->tampilkanSemuaTransaksi()->fetchAll(PDO::FETCH_ASSOC) ){
            //     echo "<tr>";
            //     echo "<td>" . $row[0] . "</td>";
            //     echo "<td>" . $row[1] . "</td>";
            //     echo "</tr>";
            // }
            // $row = self::$tr->tampilkanSemuaTransaksi()->fetch(PDO::FETCH_ASSOC);
            // //echo var_dump($row);
            // if($row==0){
            //     echo "<td colspan=3 align=center>Data kosong</td>";
            // }else{    
            //     // return var_dump($row);
            //     while($row){
            //         echo "<tr>";
            //         echo "<td>" . $row['id'] . "</td>";
            //         echo "<td>" . $row['jml'] . "</td>";
            //         echo "</tr>";
            //         // $table = "<tr>";
            //         // $table .= "<td>" . $row['id'] . "</td>";
            //         // $table .= "<td>" . $row['jml'] . "</td>";
            //         // $table .= "</>";
            //         // return $table;
            //     }                                
            // }            
        }

    }
?>