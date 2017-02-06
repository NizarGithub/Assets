<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Content</title>
</head>

<body>
<?php
if ($_GET['module']=='dashboard')
{ 
include "dashboard.php";
}


else
if ($_GET['module']=='box_account')
{ 
include "module/box_account/list_box_account.php";
}
else
if ($_GET['module']=='add_box_account')
{ 
include "module/box_account/add_box_account.php";
}
else
if ($_GET['module']=='edit_box_account')
{ 
include "module/box_account/edit_box_account.php";
}



else
if ($_GET['module']=='kategori_account')
{ 
include "module/kategori_account/list_kategori_account.php";
}
else
if ($_GET['module']=='aksi_kategori_account')
{ 
include "module/kategori_account/aksi_kategori_account.php";
}



else
if ($_GET['module']=='puisi')
{ 
include "module/puisi/list_puisi.php";
}
else
if ($_GET['module']=='add_puisi')
{ 
include "module/puisi/add_puisi.php";
}
else
if ($_GET['module']=='edit_puisi')
{ 
include "module/puisi/edit_puisi.php";
}
else
if ($_GET['module']=='view_puisi')
{ 
include "module/puisi/view_puisi.php";
}



else
if ($_GET['module']=='kategori_puisi')
{ 
include "module/kategori_puisi/list_kategori_puisi.php";
}
else
if ($_GET['module']=='aksi_kategori_puisi')
{ 
include "module/kategori_puisi/aksi_kategori_puisi.php";
}



else
if ($_GET['module']=='kamut')
{ 
include "module/kata_mutiara/list_kamut.php";
}
else
if ($_GET['module']=='add_kamut')
{ 
include "module/kata_mutiara/add_kamut.php";
}
else
if ($_GET['module']=='edit_kamut')
{ 
include "module/kata_mutiara/edit_kamut.php";
}



else
if ($_GET['module']=='kamut_english')
{ 
include "module/kata_mutiara_en/list_kamut_en.php";
}
else
if ($_GET['module']=='add_kamut_english')
{ 
include "module/kata_mutiara_en/add_kamut_en.php";
}
else
if ($_GET['module']=='edit_kamut_english')
{ 
include "module/kata_mutiara_en/edit_kamut_en.php";
}



else
if ($_GET['module']=='kategori_kamut')
{ 
include "module/kategori_kamut/list_kategori_kamut.php";
}
else
if ($_GET['module']=='aksi_kategori_kamut')
{ 
include "module/kategori_kamut/aksi_kategori_kamut.php";
}



else
if ($_GET['module']=='persatuan')
{ 
include "module/persatuan/list_persatuan.php";
}
else
if ($_GET['module']=='add_persatuan')
{ 
include "module/persatuan/add_persatuan.php";
}
else
if ($_GET['module']=='edit_persatuan')
{ 
include "module/persatuan/edit_persatuan.php";
}



else    
if ($_GET['module']=='wizard_security')
{ 
include "module/wizard_security/sample.php";
}


else    
if ($_GET['module']=='log_aktifitas')
{ 
include "module/log_aktifitas/log_aktifitas.php";
}


else    
if ($_GET['module']=='lengkapi_profil')
{ 
include "module/profil/add_profil.php";
}
else    
if ($_GET['module']=='user_profil')
{ 
include "module/profil/user_profil.php";
}
else    
if ($_GET['module']=='edit_profil')
{ 
include "module/profil/edit_profil.php";
}

else
{
include "not_found.php";	
}
?>
</body>
</html>