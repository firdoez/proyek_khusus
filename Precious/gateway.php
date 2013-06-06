<?php
/*
if(empty($_REQUEST['p'])) { include "home.php"; }
if($_REQUEST['p']=='home'){ include "home.php"; }
if($_REQUEST['p']=='bukutamu'){ include "bukutamu.php";  }
if($_REQUEST['p']=='about'){ include "about.php";  }
*/

switch($_REQUEST['p']){
case '' : include "home.php"; break;
case 'home' : include "home.php"; break;
case 'admin' : include "admin.php"; break;
case 'gallery' : include "gallery.php"; break;
case 'contact' : include "contact.php"; break;
case 'order' : include "order.php"; break;
case 'about' : include "about.php"; break;
case 'photo' : include "photo.php"; break;
case 'video' : include "video.php"; break;
case 'seecontact' : include "seecontact.php"; break;
case 'seeorder' : include "seeorder.php"; break;
case 'addphoto' : include "addphoto.php"; break;
case 'addvideo' : include "addvideo.php"; break;
case 'editphoto' : include "editphoto.php"; break;
case 'editvideo' : include "editvideo.php"; break;

}

?>