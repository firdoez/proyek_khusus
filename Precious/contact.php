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
			
			<p class="section-title"><span class="title custom">Buku Tamu</span><span class="desc">Kirimkan komentar Anda</span></p>	
	
	<!-- left-content -->
	<div class="contact-left">
		<h5 class="custom">ISI FORM DI BAWAH UNTUK MENGIRIM KOMENTAR ANDA</h5>
        <?php

//kondisi jika post benar
if($_REQUEST['ngepost']=='1'){
	//kondisi jika kode benar
		include "konek.php";
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$web = $_POST['web'];
		$komentar = $_POST['komentar'];
		$hasil=mysql_query("INSERT into contact (nama, email, web, komentar) values ('$nama','$email','$web', '$komentar')");
		//kondisi jika insert data sukses dan gagal
		if ($hasil){
			echo "<script>
			alert('Terima kasih Anda telah mengisi Buku Tamu.');
			window.location='index.php?p=contact';
			</script>";
		}else{
			echo "<script>
			alert('Maaf, data gagal dimasukkan.');
			window.location='index.php?p=contact';
								</script>";		
		}
	
	}
	
else {

?>
		<!-- form -->
		<form id="formMail" action="?p=contact" method="post">
			<fieldset>
				<p>
					<label>NAMA:</label>
					<input name="nama"  id="nama" type="text" />
				</p>
				<p>
					<label>EMAIL:</label>
					<input name="email"  id="email" type="text" />
				</p>
				<p>
					<label>WEB:</label>
					<input name="web"  id="web" type="text" />
				</p>
				<p>
					<label>KOMENTAR:</label>
					<textarea  name="komentar"  id="komentar" rows="5" cols="20" ></textarea>
				</p>
					
				<p><input type="submit" value=" " name="send" id="send" /></p>
			</fieldset>
			<p id="error">Message</p>
            <input type="hidden" name="ngepost" value="1" />

		</form>
		<p id="success">Thanks for your comments.</p>
		<!-- ENDS form -->
	</div>
	<!-- ENDS left-content -->
	
	<?php } ?>
	
		
	
	
	<!-- right-content -->
	<div class="contact-right">
		<h4 class="custom">Peta lokasi</h4>
		<div class="taped-image"><span></span><em></em><img src="img/map.png" alt="map"/></div>
		<p>Telepon: (0274) 6699 848 / 085643505458<br/>
		 Email: <a href="#">preciousphotovideojogja@yahoo.com</a><br/>
		 Jl. Suryowijayan no. 18 Yogyakarta 55142</p>
</div>
	<!-- ENDS right-content -->
	
		
		
			
	</div>
	<!-- ENDS MAIN -->
</body>
</html>
