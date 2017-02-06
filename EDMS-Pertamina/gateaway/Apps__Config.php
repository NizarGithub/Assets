<?php
/* 
 * Dedicated to PERTAMINA
 * Web Application
 * Creator by IBeESNay
 * Copyright © 2015 IBeES; Licensed
 * IBeES (Information Based Electronic System)
 */

class ConnectDB {
    var $hostname           = "localhost";
    var $database           = "apps_gateaway";
    protected $username     = "agis";
    protected $password     = "laksamana4615";
    
    public function   __construct() {
        $conn_mysql = mysql_connect($this->hostname,$this->username,$this->password);
        if($conn_mysql) {
            $conn_db = mysql_select_db($this->database);
            if(!$conn_db) {
                $db_status = "error_database";
                echo "<style>body{font-family:'Arial';}h3{color:red;}</style>";
                echo "<br><center><h1>Error Connected :: Gagal terhubung ke database";
                echo "</h1><hr><h3>".mysql_error()."</h3></center><br>";
                die();
            }
        }
        else {
            $mysql_status = "error_mysql";
            echo "<style>body{font-family:'Arial';}h3{color:red;}</style>";
            echo "<br><center><h1>Error Connected :: Gagal terhubung ke server MySQL";
            echo "</h1><hr><h3>".mysql_error()."</h3></center><br>";
            die();
        }
    }
    
    public function define_connect() {
        # Mendefinisikan database
        define('DB_HOSTNAME', $this->hostname);
        define('DB_USERNAME', $this->username);
        define('DB_PASSWORD', $this->password);
        define('DB_DATABASE', $this->database);
    }
}
