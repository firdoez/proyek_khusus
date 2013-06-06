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
			
			<p class="section-title"><span class="title custom">Edit Harga video</span><span class="desc">Edit data paket foto</span></p>	
	
<!-- left-content -->
	<div class="contact-left">
		<h5 class="custom">EDIT HARGA video</h5>
       <?php
if($_SESSION['login']){

if($_REQUEST['edit']=='1'){
include "konek.php";
$id=$_POST['id'];
$judul = $_POST['judul'];
$isi = $_POST['isi'];
$harga = $_POST['harga'];



		$edit=mysql_query("UPDATE video SET judul = '$judul',
	isi = '$isi', harga = '$harga' WHERE id ='$id'");
//kondisi jika edit data sukses dan gagal
if ($edit){
echo "<script>
alert('EDIT harga video sukses');
window.location='index.php?p=video';
</script>";
}else{
echo "<script>
alert('EDIT harga video gagal');
window.location='index.php?p=video';
</script>"; 
	}
		}else{ 
		
		
		if($_GET['do'] == "update"){
			include "konek.php";
	$sql = mysql_query("SELECT * FROM video WHERE id='$_GET[id]'") ;
	$ambil = mysql_fetch_array($sql);
	
	?>
		<!-- form -->
		<form id="formMail" action="?p=editvideo" method="post">
			<fieldset>
				<p>
					<label>JUDUL PAKET:</label>
					<input name="judul"  id="judul" type="text" value="<?php echo $ambil['judul']; ?>" />
				</p>
				<p>
					<label>ISI PAKET :</label>
					<textarea  name="isi"  id="isi" rows="5" cols="20"  ><?php echo $ambil['isi']; ?></textarea>
				</p>
				<p>
					<label>HARGA PAKET:</label>
					<input name="harga"  id="harga" type="text" value="<?php echo $ambil['harga']; ?>" />
				</p>
				
					
				<p><input type="submit" value=" " name="send" id="send" /></p>
			</fieldset>
			<p id="error">Message</p>
            <input type="hidden" name="edit" value="1" />
            <input name="id" type="hidden" value="<?php echo $ambil['id']; ?>" />


		</form>
		<p id="success">Thanks for your comments.</p>
		<!-- ENDS form --><br />
	</div>
	<!-- ENDS left-content -->
	
	
	
		
	
	
	
	
		
		
			
	</div>
    <?php } else {

//notifikasi halaman langsung
echo "<script>alert('maaf, halaman ini hanya untuk administrasi');</script>";
}
}}
?> 
	<!-- ENDS MAIN -->
</body>
</html>
