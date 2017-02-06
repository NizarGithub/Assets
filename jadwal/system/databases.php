<?php
/* 
 * *****************************************************************************
 * Filename  : databases.php                                                    
 * Creator   : IBeESNay                                    
 * © Copyright and Powered by IBeESNay                         
 * *****************************************************************************
 */
class Databases {
    // Properti class
    var $hostname   = "localhost";        // Nama host atau server
    var $username   = "agis";     // Username database
    var $password   = "laksamana4615";         // Password database
    var $database   = "created_jadwal";      // Nama database
    
    public function __construct() {
        mysql_connect($this->hostname, $this->username, $this->password);
        mysql_select_db($this->database);
    }
    /* end of class Databases */
}

