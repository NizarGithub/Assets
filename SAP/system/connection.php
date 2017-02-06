<?php
/**********************************
 * connection
 **********************************
 */

class koneksi {
    var $host       =   "localhost";
    var $username   =   "agis";
    var $password   =   "laksamana4615";
    var $database   =   "apps_penilaian";

  public function __construct(){
       $connect = mysql_connect($this->host, $this->username, $this->password);
       if($connect){
       $select_db = mysql_select_db($this->database);
       if(!$select_db){

           echo "Database tidak terhubung !";
       }

       }else{
           echo "Server tidak terhubung !";
       }
        
   }

}

