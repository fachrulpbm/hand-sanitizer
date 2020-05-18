<?php

    require ("../config/Database.php");

    class Transaksi{

        function beli($jml){
            try {
                $sql = "INSERT INTO transaksi(jml) VALUES($jml)";
                $query = Database::getConnection()->prepare($sql);
                $query->bindParam(':jml', $jml);
                $query->execute();
                return "<p id='msg'>Pembelian berhasil!</p>";
            } catch (\Throwable $th) {
                return "<p id='msg'>Pembelian gagal: " . $th->getMessage() . "</p>";
            }

        }

        function tampilkanSemuaTransaksi(){
            try {
                $sql = "SELECT * FROM transaksi ORDER BY id ASC";
                $result = Database::getConnection()->query($sql);
                return $result;
            } catch (\Throwable $th) {
                return "<p id='msg'>Gagal menampilkan semua transaksi: " . $th->getMessage() . "</p>";
            }
        }

    }

?>
