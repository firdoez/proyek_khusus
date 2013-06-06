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
			
			<p class="section-title"><span class="title custom">Pemesanan</span><span class="desc">Pesan paket foto video yang Anda inginkan sekarang</span></p>	
	
	<!-- left-content -->
	<div class="contact-left">
		<h5 class="custom">ISI FORM DI BAWAH UNTUK MEMESAN PAKET ANDA</h5>
        <?php

//kondisi jika post benar
if($_REQUEST['ngepost']=='1'){
	//kondisi jika kode benar
		include "konek.php";
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$kontak = $_POST['kontak'];
		$jenis = $_POST['jenis'];
		$detail = $_POST['detail'];
		
		
		$hasil=mysql_query("INSERT into pesan (nama, alamat, kontak, jenis, detail) values ('$nama','$alamat','$kontak','$jenis','$detail')");
		//kondisi jika insert data sukses dan gagal
		if ($hasil){
			echo "<script>
			alert('Pesanan Anda akan segera kami proses.');
			window.location='index.php?p=order';
			</script>";
		}else{
			echo "<script>
			alert('Pemesanan gagal, coba lagi.');
			window.location='index.php?p=order';
								</script>";		
		}
	
	}
	
else {

?>
		<!-- form -->
		<form id="formorder" action="?p=order" method="post">
			<fieldset>
				<p>
					<label>NAMA:</label>
					<input name="nama"  id="nama" type="text" />
				</p>
				<p>
					<label>ALAMAT:</label>
					<input name="alamat"  id="alamat" type="text" />
				</p>
			<p>
				<label>EMAIL / NO. HP / TELEPON:</label>
					<input name="kontak"  id="kontak" type="text" />
			</p>
                <p>
					<label>JENIS PESANAN:</label>
                </p>
                <p><div align="center">
                  <label>
                  <label>Photo</label>
                    <input type="radio" name="jenis" value="Photo" id="jenis" />
                  
                  </label>
                  <br />
                  <label>
                  Video
                    <input type="radio" name="jenis" value="Video" id="jenis" />
                  
                  </label>
                  <br />
                  <label>
                Photo & Video
                    <input type="radio" name="jenis" value="PhotoVideo" id="jenis" />
                  
                  </label>
                  <br /></div>
                </p>
                <p>
                  <label></label>
</p>
                <p>
					<label>DETAIL ACARA:</label>
					<textarea  name="detail"  id="detail" rows="5" cols="20" ></textarea>
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
<!-- ENDS right-content -->
	
</div>
<!-- ENDS MAIN -->
</body>
</html>
