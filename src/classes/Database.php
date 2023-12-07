<?php

    define("DB_HOST","localhost");
    define("DB_USER","root");
    define("DB_PASS","");
    define("DB_NAME","walkies");

    class Database {

        public $conn;

        public function connect() {
            try 
            {
                $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
                return $conn;
            } 
            catch (mysqli_sql_exception $e) 
            {
                echo "Connection failed: " . $e->getMessage();
                return null;
            }
        }
    }

?>