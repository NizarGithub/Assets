<?php
error_reporting(0);
session_start();
if(empty($_SESSION['id_user'])) die ();

require_once ('../../../../../../../config.php');
require_once ('../../../../../../../system/class/Active_record_class.php');

$dbconn = new ConnectDB();
$ARSql = New Active_record();

//If directory doesnot exists create it.
$output_dir = "../../../../../../../uploaded/pink_book/";

if(isset($_FILES["myfile"]))
{
	$ret = array();

	$error =$_FILES["myfile"]["error"];
   {

    	if(!is_array($_FILES["myfile"]['name'])) //single file
    	{
            $RandomNum   = time();

            $ImageName      = $_FILES['myfile']['name'];
            $ImageType      = $_FILES['myfile']['type']; //"image/png", image/jpeg etc.

            $ImageExt = substr($ImageName, strrpos($ImageName, '.'));
            $ImageExt       = str_replace('.','',$ImageExt);
            $ImageName      = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
            $NewImageName = $ImageName.'.'.$ImageExt;
            $data    = array(
            'filename' => $NewImageName
            );

            move_uploaded_file($_FILES["myfile"]["tmp_name"],$output_dir. $NewImageName);
            $insert = $ARSql->insert('pink_book', $data);
             //echo "<br> Error: ".$_FILES["myfile"]["error"];

	       	 	 $ret[$fileName]= $output_dir.$NewImageName;
    	}
    	else
    	{
            $fileCount = count($_FILES["myfile"]['name']);
    		for($i=0; $i < $fileCount; $i++)
    		{
                $RandomNum   = time();

                $ImageName      = $_FILES['myfile']['name'][$i];
                $ImageType      = $_FILES['myfile']['type'][$i]; //"image/png", image/jpeg etc.

                $ImageExt = substr($ImageName, strrpos($ImageName, '.'));
                $ImageExt       = str_replace('.','',$ImageExt);
                $ImageName      = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
                $NewImageName = $ImageName.'.'.$ImageExt;

                $ret[$NewImageName]= $output_dir.$NewImageName;
                $data    = array(
                'filename' => $NewImageName
                );

       	 	$insert = $ARSql->insert('pink_book', $data);
    		move_uploaded_file($_FILES["myfile"]["tmp_name"][$i],$output_dir.$NewImageName );
    		}
    	}
    }
    echo json_encode($ret);

}

?>