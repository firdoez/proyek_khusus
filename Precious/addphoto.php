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
			
			<p class="section-title"><span class="title custom">Harga Photo</span><span class="desc">Tambahkan data paket foto yang baru</span></p>	
	
<!-- left-content -->
	<div class="contact-left">
		<h5 class="custom">TAMBAHKAN HARGA PHOTO BARU</h5>
        <?php

//kondisi jika post benar
if($_REQUEST['ngepost']=='1'){
	//kondisi jika kode benar
		include "konek.php";
		$judul = $_POST['judul'];
		$isi = $_POST['isi'];
		$harga = $_POST['harga'];
		$komentar = $_POST['komentar'];
		$hasil=mysql_query("INSERT into photo (judul, isi, harga) values ('$judul','$isi','$harga')");
		//kondisi jika insert data sukses dan gagal
		if ($hasil){
			echo "<script>
			alert('Anda telah menambahkan harga photo.');
			window.location='index.php?p=addphoto';
			</script>";
		}else{
			echo "<script>
			alert('Maaf, data gagal dimasukkan.');
			window.location='index.php?p=addphoto';
								</script>";		
		}
	
	}
	
else {

?>
		<!-- form -->
		<form id="formMail" action="?p=addphoto" method="post">
			<fieldset>
				<p>
					<label>JUDUL PAKET:</label>
					<input name="judul"  id="judul" type="text" />
				</p>
				<p>
					<label>ISI PAKET :</label>
					<textarea  name="isi"  id="isi" rows="5" cols="20" ></textarea>
				</p>
				<p>
					<label>HARGA PAKET:</label>
					<input name="harga"  id="harga" type="text" />
				</p>
				
					
				<p><input type="submit" value=" " name="send" id="send" /></p>
			</fieldset>
			<p id="error">Message</p>
            <input type="hidden" name="ngepost" value="1" />

		</form>
		<p id="success">Thanks for your comments.</p>
		<!-- ENDS form --><br /><?php } include "photo.php"; ?>
	</div>
	<!-- ENDS left-content -->
	
	
	
		
	
	
	
	
		
		
			
	</div>
	<!-- ENDS MAIN -->
</body>
</html>
