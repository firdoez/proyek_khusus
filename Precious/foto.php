<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {font-size: 12px}
.contentHead {padding-bottom:1em;border-bottom:solid 2px #333}
.contentTitle {font-size:1.5em;font-family:Georgia, "Times New Roman", Times, serif;;color:#c00;}
-->
</style>
</head>

<body>

<div class="contentHead">
  <h1 class="contentTitle">Panduan Desa Kasongan</h1>
</div>
<h2>&nbsp;</h2>
<?php include "konek.php"; ?>
<table  border="0">
<?php
$hasil = mysql_query("SELECT * FROM panduan order by id_panduan desc");
while ($ambil=mysql_fetch_array($hasil)){
	$id=$ambil['id_panduan'];
	$judul=$ambil['judul_panduan'];
	$isi=$ambil['isi_panduan'];
	$tanggal=$ambil['tanggal_panduan'];
	

?>

  <tr>
    <td ><h3><?php echo $judul; ?><?php if($_SESSION['login']){ ?>

    <a href="?p=editpanduan&do=update&id=<?php echo $id; ?>"> | edit</a><a href="?p=panduan&do=delete&id=<?php echo $id; ?>"> | delete</a> <?php } ?> </h3>   </td>
  </tr>
  <tr>
  <td class="style1"><?php echo $tanggal; ?></td>
  </tr>
  <tr>
  <td><?php echo $isi; ?>
  <br /><br /><hr><BR /></td>
  </tr>
  
  <?php }?>
  <?php


if($_GET['do'] == "delete"){
include "konek.php";
	$sql = mysql_query("DELETE FROM panduan WHERE id_panduan='$_GET[id]'") ;

		
//kondisi jika delete data sukses dan gagal
if ($sql){
echo "<script>
alert('DELETE panduan sukses');
window.location='index.php?p=panduan';
</script>";
}else{
echo "<script>
alert('DELETE panduan gagal');
window.location='index.php?p=panduan';
</script>"; 
	}
	}
	?>
</table>
</body>
</html>
