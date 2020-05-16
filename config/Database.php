<?php    

    class Database {        

        private static $conn;        

        static function getConnection(){
            if (self::$conn == null) {
                try {
                    self::$conn = new PDO("mysql:host=localhost;dbname=test", "root", "");
                    self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    return self::$conn;
                } catch (PDOException $e) {
                    echo "Koneksi gagal: " . $e->getMessage();
                }
            }
        }
        
    }

?>