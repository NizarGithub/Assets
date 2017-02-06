<?php
/* 
 * *****************************************************************************
 * Filename  : connection.php
 * Creator   : IBeESNay                                   
 * © Copyright and Powered by IBeESNay                         
 * *****************************************************************************
 */
error_reporting(E_NOTICE || E_WARNING);
class Connection {
    var $hostname = "localhost";
    var $username = "agis";
    var $password = "laksamana4615";      
    var $database = "e_learning";
    public function __construct() {
        $connectdb = mysql_connect($this->hostname, $this->username,$this->password);
        if($connectdb) {
            $selectdb  = mysql_select_db($this->database);
            if(!$selectdb) {
                header("Location: error/error_select_db.php");
            }
        }
        else {
            header("Location: error/error_connect.php");
        }
    }
}
    
                        
