<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<!-- CSS -->
		<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="css/spring.css" type="text/css" media="screen" />
		<!--[if IE 6]>
			<link rel="stylesheet" type="text/css" media="screen" href="css/ie-hacks.css" />
			<script type="text/javascript" src="js/DD_belatedPNG.js"></script>
			<script>
          		/* EXAMPLE */
          		DD_belatedPNG.fix('*');
        	</script>
		<![endif]-->
		<!-- ENDS CSS -->
		
		
		
		<!-- JS -->
		<script type="text/javascript" src="js/jquery_1.3.2.js"></script>
		<script type="text/javascript" src="js/jqueryui.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript" src="js/jquery.cycle.all.js"></script>
		<script type="text/javascript" src="js/form-validation.js"></script>
		<script type="text/javascript" src="js/custom.js"></script>
		<!-- ENDS JS -->
		
		
		<!-- superfish -->
		<link rel="stylesheet" type="text/css" media="screen" href="css/superfish-custom.css" /> 
		<script type="text/javascript" src="js/superfish-1.4.8/js/hoverIntent.js"></script> 
		<script type="text/javascript" src="js/superfish-1.4.8/js/superfish.js"></script> 
		<!-- ENDS superfish -->
		
		
		<!-- Cufon -->
		<script src="js/cufon-yui.js" type="text/javascript"></script>
		<script src="js/bebas_400.font.js" type="text/javascript"></script>
		<script type="text/javascript">
			Cufon.replace('.custom', { fontFamily: 'bebas', hover: true });
		</script>
        <!-- /Cufon -->

	
</head>

<body>
    <p class="section-title"><span class="title custom">Pesanan Masuk</span><span class="desc">Beberapa pemesanan photo video yang perlu ditindaklanjuti</span></p>
			<div class="col">
 
  <p class="custom">&nbsp;</p>
  <p class="custom">&nbsp;</p>
  <p class="custom">&nbsp;</p>
</div>

<?php include "konek.php"; ?>
<table width="800px"  border="0">
<?php
$hasil = mysql_query("SELECT * FROM pesan order by id desc");
while ($ambil=mysql_fetch_array($hasil)){
	$id=$ambil['id'];
	$nama=$ambil['nama'];
	$kontak=$ambil['kontak'];
	$alamat=$ambil['alamat'];
	$jenis=$ambil['jenis'];
	

?>

  <tr>
    <td ><h5 class="custom"><?php echo $nama; ?><?php if($_SESSION['login']){ ?>

    <a href="?p=seeorder&do=delete&id=<?php echo $id; ?>">| delete</a> <?php } ?> </h5>   </td>
  </tr>
  <tr>
  <td><p>Alamat pemesan : </p>
    <p><?php echo $alamat; ?></p>
    <p>&nbsp;</p>
 	</td>
  </tr>
  <tr>
  <td><p>Kontak pemesan : </p>
    <p><?php echo $kontak; ?></p>
    <p>&nbsp;</p></td></tr>
   <tr><td><p>Jenis pesanan : </p>
     <p><?php echo $jenis; ?></p>
     <p>&nbsp;</p></td> </tr>
   <tr><td><p>Detail acara : </p><?php echo $detail; ?></td> </tr>
  <tr><td><br /><br /><hr><BR /></td></tr>
 
  
  <?php }?>
  <?php


if($_GET['do'] == "delete"){
include "konek.php";
	$sql = mysql_query("DELETE FROM pesan WHERE id='$_GET[id]'") ;

		
//kondisi jika delete data sukses dan gagal
if ($sql){
echo "<script>
alert('DELETE pemesanan sukses');
window.location='index.php?p=seeorder';
</script>";
}else{
echo "<script>
alert('DELETE pemesanan gagal');
window.location='index.php?p=seeorder';
</script>"; 
	}
	}
	?>
</table>
</body>
</html>
