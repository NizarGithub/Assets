<?php

/* 
 * Web Application
 * Creator by Agis Laksamana
 * Copyright © 2015; Licensed
 * Software Engineer
 */
  
if ($_GET['page']=='dashboard')
{ 
	echo " <div class='breadcrumb-button'>
                   <span class='breadcrumb-label'> Panel Admin</span>
                   <span class='breadcrumb-arrow'><span></span></span>
            </div>";
	echo " <div class='breadcrumb-button blue'>
                   <span class='breadcrumb-label'> Dashboard</span>
                   <span class='breadcrumb-arrow'><span></span></span>
            </div>";
}
else
   if ($_GET['page']=='artikel')
{ 
	echo " <div class='breadcrumb-button'>
                   <span class='breadcrumb-label'> Master</span>
                   <span class='breadcrumb-arrow'><span></span></span>
            </div>";

	echo " <div class='breadcrumb-button blue'>
                <span class='breadcrumb-label'> Artikel </span>
                <span class='breadcrumb-arrow'><span></span></span>
            </div>";
}
else
   if ($_GET['page']=='tambah_artikel')
{ 
	echo " <div class='breadcrumb-button'>
                   <span class='breadcrumb-label'> Master</span>
                   <span class='breadcrumb-arrow'><span></span></span>
            </div>";

	echo " <div class='breadcrumb-button'>
                <span class='breadcrumb-label'> Artikel</span>
                <span class='breadcrumb-arrow'><span></span></span>
           </div>";

    echo " <div class='breadcrumb-button blue'>
                <span class='breadcrumb-label'> Tambah Artikel</span>
                <span class='breadcrumb-arrow'><span></span></span>
           </div>";
} 
else
   if ($_GET['page']=='edit_artikel')
{ 
	echo " <div class='breadcrumb-button'>
                   <span class='breadcrumb-label'> Master</span>
                   <span class='breadcrumb-arrow'><span></span></span>
            </div>";

	echo " <div class='breadcrumb-button'>
                <span class='breadcrumb-label'> Artikel</span>
                <span class='breadcrumb-arrow'><span></span></span>
           </div>";

    echo " <div class='breadcrumb-button blue'>
                <span class='breadcrumb-label'> Edit Artikel</span>
                <span class='breadcrumb-arrow'><span></span></span>
           </div>";
} 

else
   if ($_GET['page']=='kategori')
{ 
	echo " <div class='breadcrumb-button'>
                   <span class='breadcrumb-label'> Master</span>
                   <span class='breadcrumb-arrow'><span></span></span>
            </div>";

	echo " <div class='breadcrumb-button blue'>
                <span class='breadcrumb-label'> Kategori </span>
                <span class='breadcrumb-arrow'><span></span></span>
            </div>";
}
else
   if ($_GET['page']=='tags')
{ 
	echo " <div class='breadcrumb-button'>
                   <span class='breadcrumb-label'> Master</span>
                   <span class='breadcrumb-arrow'><span></span></span>
            </div>";

	echo " <div class='breadcrumb-button blue'>
                <span class='breadcrumb-label'> Tags </span>
                <span class='breadcrumb-arrow'><span></span></span>
            </div>";
}
else
   if ($_GET['page']=='sensor')
{ 
	echo " <div class='breadcrumb-button'>
                   <span class='breadcrumb-label'> Master</span>
                   <span class='breadcrumb-arrow'><span></span></span>
            </div>";

	echo " <div class='breadcrumb-button blue'>
                <span class='breadcrumb-label'> Sensor Kata </span>
                <span class='breadcrumb-arrow'><span></span></span>
            </div>";
}
else
   if ($_GET['page']=='tambah_sensor')
{ 
	echo " <div class='breadcrumb-button'>
                   <span class='breadcrumb-label'> Master</span>
                   <span class='breadcrumb-arrow'><span></span></span>
            </div>";

	echo " <div class='breadcrumb-button'>
                <span class='breadcrumb-label'> Sensor Kata</span>
                <span class='breadcrumb-arrow'><span></span></span>
           </div>";

    echo " <div class='breadcrumb-button blue'>
                <span class='breadcrumb-label'> Tambah Sensor Kata</span>
                <span class='breadcrumb-arrow'><span></span></span>
           </div>";
} 
else
   if ($_GET['page']=='edit_sensor')
{ 
	echo " <div class='breadcrumb-button'>
                   <span class='breadcrumb-label'> Master</span>
                   <span class='breadcrumb-arrow'><span></span></span>
            </div>";

	echo " <div class='breadcrumb-button'>
                <span class='breadcrumb-label'> Sensor Kata</span>
                <span class='breadcrumb-arrow'><span></span></span>
           </div>";

    echo " <div class='breadcrumb-button blue'>
                <span class='breadcrumb-label'> Edit Sensor Kata</span>
                <span class='breadcrumb-arrow'><span></span></span>
           </div>";
} 
else
   if ($_GET['page']=='halamanstatis')
{ 
	echo " <div class='breadcrumb-button'>
                   <span class='breadcrumb-label'> Master</span>
                   <span class='breadcrumb-arrow'><span></span></span>
            </div>";

	echo " <div class='breadcrumb-button blue'>
                <span class='breadcrumb-label'> Halaman Statis </span>
                <span class='breadcrumb-arrow'><span></span></span>
            </div>";
}
else
   if ($_GET['page']=='tambah_halamanstatis')
{ 
	echo " <div class='breadcrumb-button'>
                   <span class='breadcrumb-label'> Master</span>
                   <span class='breadcrumb-arrow'><span></span></span>
            </div>";

	echo " <div class='breadcrumb-button'>
                <span class='breadcrumb-label'> Halaman Statis</span>
                <span class='breadcrumb-arrow'><span></span></span>
           </div>";

    echo " <div class='breadcrumb-button blue'>
                <span class='breadcrumb-label'> Tambah Halaman Statis</span>
                <span class='breadcrumb-arrow'><span></span></span>
           </div>";
} 
else
   if ($_GET['page']=='edit_halamanstatis')
{ 
	echo " <div class='breadcrumb-button'>
                   <span class='breadcrumb-label'> Master</span>
                   <span class='breadcrumb-arrow'><span></span></span>
            </div>";

	echo " <div class='breadcrumb-button'>
                <span class='breadcrumb-label'> Halaman Statis</span>
                <span class='breadcrumb-arrow'><span></span></span>
           </div>";

    echo " <div class='breadcrumb-button blue'>
                <span class='breadcrumb-label'> Edit Halaman Statis</span>
                <span class='breadcrumb-arrow'><span></span></span>
           </div>";
} 
else
   if ($_GET['page']=='event')
{ 
	echo " <div class='breadcrumb-button'>
                   <span class='breadcrumb-label'> Media</span>
                   <span class='breadcrumb-arrow'><span></span></span>
            </div>";

	echo " <div class='breadcrumb-button blue'>
                <span class='breadcrumb-label'> Event </span>
                <span class='breadcrumb-arrow'><span></span></span>
            </div>";
}
else
   if ($_GET['page']=='advertisement')
{ 
	echo " <div class='breadcrumb-button'>
                   <span class='breadcrumb-label'> Media</span>
                   <span class='breadcrumb-arrow'><span></span></span>
            </div>";

	echo " <div class='breadcrumb-button blue'>
                <span class='breadcrumb-label'> Advertisement </span>
                <span class='breadcrumb-arrow'><span></span></span>
            </div>";
}
else
   if ($_GET['page']=='tambah_advertisement')
{ 
	echo " <div class='breadcrumb-button'>
                   <span class='breadcrumb-label'> Media</span>
                   <span class='breadcrumb-arrow'><span></span></span>
            </div>";

	echo " <div class='breadcrumb-button'>
                <span class='breadcrumb-label'> Advertisement</span>
                <span class='breadcrumb-arrow'><span></span></span>
           </div>";

    echo " <div class='breadcrumb-button blue'>
                <span class='breadcrumb-label'> Tambah Advertisement</span>
                <span class='breadcrumb-arrow'><span></span></span>
           </div>";
} 
else
   if ($_GET['page']=='edit_advertisement')
{ 
	echo " <div class='breadcrumb-button'>
                   <span class='breadcrumb-label'> Media</span>
                   <span class='breadcrumb-arrow'><span></span></span>
            </div>";

	echo " <div class='breadcrumb-button'>
                <span class='breadcrumb-label'> Advertisement</span>
                <span class='breadcrumb-arrow'><span></span></span>
           </div>";

    echo " <div class='breadcrumb-button blue'>
                <span class='breadcrumb-label'> Edit Advertisement</span>
                <span class='breadcrumb-arrow'><span></span></span>
           </div>";
} 
else
   if ($_GET['page']=='role')
{ 
	echo " <div class='breadcrumb-button'>
                   <span class='breadcrumb-label'> User</span>
                   <span class='breadcrumb-arrow'><span></span></span>
            </div>";

	echo " <div class='breadcrumb-button blue'>
                <span class='breadcrumb-label'> User Role </span>
                <span class='breadcrumb-arrow'><span></span></span>
            </div>";
}
else
   if ($_GET['page']=='edit_role')
{ 
	echo " <div class='breadcrumb-button'>
                   <span class='breadcrumb-label'> User</span>
                   <span class='breadcrumb-arrow'><span></span></span>
            </div>";

	echo " <div class='breadcrumb-button'>
                <span class='breadcrumb-label'> User Role</span>
                <span class='breadcrumb-arrow'><span></span></span>
           </div>";

    echo " <div class='breadcrumb-button blue'>
                <span class='breadcrumb-label'> Kelola Role</span>
                <span class='breadcrumb-arrow'><span></span></span>
           </div>";
} 
else
   if ($_GET['page']=='mainmenu')
{ 
	echo " <div class='breadcrumb-button'>
                   <span class='breadcrumb-label'> Setting</span>
                   <span class='breadcrumb-arrow'><span></span></span>
            </div>";

	echo " <div class='breadcrumb-button blue'>
                <span class='breadcrumb-label'> Main Menu </span>
                <span class='breadcrumb-arrow'><span></span></span>
            </div>";
}
else
   if ($_GET['page']=='tambah_mainmenu')
{ 
	echo " <div class='breadcrumb-button'>
                   <span class='breadcrumb-label'> Setting</span>
                   <span class='breadcrumb-arrow'><span></span></span>
            </div>";

	echo " <div class='breadcrumb-button'>
                <span class='breadcrumb-label'> Main Menu</span>
                <span class='breadcrumb-arrow'><span></span></span>
           </div>";

    echo " <div class='breadcrumb-button blue'>
                <span class='breadcrumb-label'> Tambah Main Menu</span>
                <span class='breadcrumb-arrow'><span></span></span>
           </div>";
} 
else
   if ($_GET['page']=='edit_mainmenu')
{ 
	echo " <div class='breadcrumb-button'>
                   <span class='breadcrumb-label'> Setting</span>
                   <span class='breadcrumb-arrow'><span></span></span>
            </div>";

	echo " <div class='breadcrumb-button'>
                <span class='breadcrumb-label'> Main Menu</span>
                <span class='breadcrumb-arrow'><span></span></span>
           </div>";

    echo " <div class='breadcrumb-button blue'>
                <span class='breadcrumb-label'> Edit Main Menu</span>
                <span class='breadcrumb-arrow'><span></span></span>
           </div>";
} 
else
   if ($_GET['page']=='submenu')
{ 
	echo " <div class='breadcrumb-button'>
                   <span class='breadcrumb-label'> Setting</span>
                   <span class='breadcrumb-arrow'><span></span></span>
            </div>";

	echo " <div class='breadcrumb-button blue'>
                <span class='breadcrumb-label'> Sub Menu </span>
                <span class='breadcrumb-arrow'><span></span></span>
            </div>";
}
else
   if ($_GET['page']=='tambah_submenu')
{ 
	echo " <div class='breadcrumb-button'>
                   <span class='breadcrumb-label'> Setting</span>
                   <span class='breadcrumb-arrow'><span></span></span>
            </div>";

	echo " <div class='breadcrumb-button'>
                <span class='breadcrumb-label'> Sub Menu</span>
                <span class='breadcrumb-arrow'><span></span></span>
           </div>";

    echo " <div class='breadcrumb-button blue'>
                <span class='breadcrumb-label'> Tambah Sub Menu</span>
                <span class='breadcrumb-arrow'><span></span></span>
           </div>";
} 
else
   if ($_GET['page']=='edit_submenu')
{ 
	echo " <div class='breadcrumb-button'>
                   <span class='breadcrumb-label'> Setting</span>
                   <span class='breadcrumb-arrow'><span></span></span>
            </div>";

	echo " <div class='breadcrumb-button'>
                <span class='breadcrumb-label'> Sub Menu</span>
                <span class='breadcrumb-arrow'><span></span></span>
           </div>";

    echo " <div class='breadcrumb-button blue'>
                <span class='breadcrumb-label'> Edit Sub Menu</span>
                <span class='breadcrumb-arrow'><span></span></span>
           </div>";
} 
else
   if ($_GET['page']=='module')
{ 
	echo " <div class='breadcrumb-button'>
                   <span class='breadcrumb-label'> Setting</span>
                   <span class='breadcrumb-arrow'><span></span></span>
            </div>";

	echo " <div class='breadcrumb-button blue'>
                <span class='breadcrumb-label'> Module </span>
                <span class='breadcrumb-arrow'><span></span></span>
            </div>";
}
else
   if ($_GET['page']=='tambah_module')
{ 
	echo " <div class='breadcrumb-button'>
                   <span class='breadcrumb-label'> Setting</span>
                   <span class='breadcrumb-arrow'><span></span></span>
            </div>";

	echo " <div class='breadcrumb-button'>
                <span class='breadcrumb-label'> Module</span>
                <span class='breadcrumb-arrow'><span></span></span>
           </div>";

    echo " <div class='breadcrumb-button blue'>
                <span class='breadcrumb-label'> Tambah Module</span>
                <span class='breadcrumb-arrow'><span></span></span>
           </div>";
} 
else
   if ($_GET['page']=='edit_module')
{ 
	echo " <div class='breadcrumb-button'>
                   <span class='breadcrumb-label'> Setting</span>
                   <span class='breadcrumb-arrow'><span></span></span>
            </div>";

	echo " <div class='breadcrumb-button'>
                <span class='breadcrumb-label'> Module</span>
                <span class='breadcrumb-arrow'><span></span></span>
           </div>";

    echo " <div class='breadcrumb-button blue'>
                <span class='breadcrumb-label'> Edit Module</span>
                <span class='breadcrumb-arrow'><span></span></span>
           </div>";
} 
else
   if ($_GET['page']=='parent')
{ 
	echo " <div class='breadcrumb-button'>
                   <span class='breadcrumb-label'> Setting</span>
                   <span class='breadcrumb-arrow'><span></span></span>
            </div>";

	echo " <div class='breadcrumb-button'>
                <span class='breadcrumb-label'> Parent Module </span>
                <span class='breadcrumb-arrow'><span></span></span>
            </div>";

    echo " <div class='breadcrumb-button blue'>
                <span class='breadcrumb-label'> Tambah Parent Module </span>
                <span class='breadcrumb-arrow'><span></span></span>
            </div>";
}
else
   if ($_GET['page']=='edit_parent')
{ 
	echo " <div class='breadcrumb-button'>
                   <span class='breadcrumb-label'> Setting</span>
                   <span class='breadcrumb-arrow'><span></span></span>
            </div>";

	echo " <div class='breadcrumb-button'>
                <span class='breadcrumb-label'> Parent Module</span>
                <span class='breadcrumb-arrow'><span></span></span>
           </div>";

    echo " <div class='breadcrumb-button blue'>
                <span class='breadcrumb-label'> Edit Parent Module</span>
                <span class='breadcrumb-arrow'><span></span></span>
           </div>";
} 
else
   if ($_GET['page']=='templates')
{ 
	echo " <div class='breadcrumb-button'>
                   <span class='breadcrumb-label'> Setting</span>
                   <span class='breadcrumb-arrow'><span></span></span>
            </div>";

	echo " <div class='breadcrumb-button blue'>
                <span class='breadcrumb-label'> Templates </span>
                <span class='breadcrumb-arrow'><span></span></span>
            </div>";
}
else
   if ($_GET['page']=='tambah_templates')
{ 
	echo " <div class='breadcrumb-button'>
                   <span class='breadcrumb-label'> Setting</span>
                   <span class='breadcrumb-arrow'><span></span></span>
            </div>";

	echo " <div class='breadcrumb-button'>
                <span class='breadcrumb-label'> Templates</span>
                <span class='breadcrumb-arrow'><span></span></span>
           </div>";

    echo " <div class='breadcrumb-button blue'>
                <span class='breadcrumb-label'> Tambah Templates</span>
                <span class='breadcrumb-arrow'><span></span></span>
           </div>";
} 
else
   if ($_GET['page']=='edit_templates')
{ 
	echo " <div class='breadcrumb-button'>
                   <span class='breadcrumb-label'> Setting</span>
                   <span class='breadcrumb-arrow'><span></span></span>
            </div>";

	echo " <div class='breadcrumb-button'>
                <span class='breadcrumb-label'> Templates</span>
                <span class='breadcrumb-arrow'><span></span></span>
           </div>";

    echo " <div class='breadcrumb-button blue'>
                <span class='breadcrumb-label'> Edit Templates</span>
                <span class='breadcrumb-arrow'><span></span></span>
           </div>";
}
else
   if ($_GET['page']=='setting')
{ 
	echo " <div class='breadcrumb-button'>
                   <span class='breadcrumb-label'> Setting</span>
                   <span class='breadcrumb-arrow'><span></span></span>
            </div>";
    echo " <div class='breadcrumb-button blue'>
                   <span class='breadcrumb-label'> Pengaturan Website</span>
                   <span class='breadcrumb-arrow'><span></span></span>
            </div>";
}
else
   if ($_GET['page']=='partners')
{ 
	echo " <div class='breadcrumb-button'>
                   <span class='breadcrumb-label'> Media</span>
                   <span class='breadcrumb-arrow'><span></span></span>
            </div>";

	echo " <div class='breadcrumb-button blue'>
                <span class='breadcrumb-label'> Partners </span>
                <span class='breadcrumb-arrow'><span></span></span>
            </div>";
}
else
   if ($_GET['page']=='tambah_partners')
{ 
	echo " <div class='breadcrumb-button'>
                   <span class='breadcrumb-label'> Media</span>
                   <span class='breadcrumb-arrow'><span></span></span>
            </div>";

	echo " <div class='breadcrumb-button'>
                <span class='breadcrumb-label'> Partners</span>
                <span class='breadcrumb-arrow'><span></span></span>
           </div>";

    echo " <div class='breadcrumb-button blue'>
                <span class='breadcrumb-label'> Tambah Partners</span>
                <span class='breadcrumb-arrow'><span></span></span>
           </div>";
} 
else
   if ($_GET['page']=='edit_partners')
{ 
	echo " <div class='breadcrumb-button'>
                   <span class='breadcrumb-label'> Media</span>
                   <span class='breadcrumb-arrow'><span></span></span>
            </div>";

	echo " <div class='breadcrumb-button'>
                <span class='breadcrumb-label'> Partners</span>
                <span class='breadcrumb-arrow'><span></span></span>
           </div>";

    echo " <div class='breadcrumb-button blue'>
                <span class='breadcrumb-label'> Edit Partners</span>
                <span class='breadcrumb-arrow'><span></span></span>
           </div>";
} 
else
   if ($_GET['page']=='profile')
{ 
  echo " <div class='breadcrumb-button'>
                   <span class='breadcrumb-label'> User</span>
                   <span class='breadcrumb-arrow'><span></span></span>
            </div>";

    echo " <div class='breadcrumb-button blue'>
                <span class='breadcrumb-label'> Profile</span>
                <span class='breadcrumb-arrow'><span></span></span>
           </div>";
} 
else
   if ($_GET['page']=='edit_profile')
{ 
  echo " <div class='breadcrumb-button'>
                   <span class='breadcrumb-label'> User</span>
                   <span class='breadcrumb-arrow'><span></span></span>
            </div>";

  echo " <div class='breadcrumb-button'>
                <span class='breadcrumb-label'> Profile</span>
                <span class='breadcrumb-arrow'><span></span></span>
           </div>";

    echo " <div class='breadcrumb-button blue'>
                <span class='breadcrumb-label'> Edit Profile</span>
                <span class='breadcrumb-arrow'><span></span></span>
           </div>";
} 
else
   if ($_GET['page']=='list_user')
{ 
  echo " <div class='breadcrumb-button'>
                   <span class='breadcrumb-label'> User</span>
                   <span class='breadcrumb-arrow'><span></span></span>
            </div>";

  echo " <div class='breadcrumb-button blue'>
                <span class='breadcrumb-label blue'> Daftar User</span>
                <span class='breadcrumb-arrow'><span></span></span>
           </div>";

}
else
   if ($_GET['page']=='tambah_user')
{ 
  echo " <div class='breadcrumb-button'>
                   <span class='breadcrumb-label'> User</span>
                   <span class='breadcrumb-arrow'><span></span></span>
            </div>";


    echo " <div class='breadcrumb-button blue'>
                <span class='breadcrumb-label'> Tambah User</span>
                <span class='breadcrumb-arrow'><span></span></span>
           </div>";
}  
else
   if ($_GET['page']=='detail_user')
{ 
  echo " <div class='breadcrumb-button'>
                   <span class='breadcrumb-label'> User</span>
                   <span class='breadcrumb-arrow'><span></span></span>
            </div>";


    echo " <div class='breadcrumb-button blue'>
                <span class='breadcrumb-label'> Detail User</span>
                <span class='breadcrumb-arrow'><span></span></span>
           </div>";
}  
else
{
 echo " <div class='breadcrumb-button blue'>
                <span class='breadcrumb-label'> Selamat Datang...</span>
                <span class='breadcrumb-arrow'><span></span></span>
           </div>";
            }

                                

