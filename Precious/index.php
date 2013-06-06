<?php 
session_start();
include "konek.php";
if ($_GET['do']=='login'){
	$masuk = mysql_query("SELECT * FROM admin where username='".$_POST['username']."' AND password='".$_POST['password']."'")
		 or die(mysql_error());
		 $bisa = mysql_num_rows($masuk);
	if (!empty($bisa)){
		$_SESSION['login']=true ;
		echo "<script>window.location='index.php?p=admin'</script>";
	} else{
	echo "<script>alert('maaf username / password salah');</script>";
	}
}
if ($_GET['button2']=='Sign Out'){
	$_SESSION['login']=false ;	
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">  
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="Content-Language" content="en" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
	
		<title>Precious Photography</title>
		
		
		
		
		
		<!-- JS -->
		<script type="text/javascript" src="js/jquery_1.3.2.js"></script>
		<script type="text/javascript" src="js/jqueryui.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript" src="js/jquery.cycle.all.js"></script>
		<script type="text/javascript" src="js/custom.js"></script>
		<!-- ENDS JS -->
		
		
		
		<!-- superfish -->
		<link rel="stylesheet" type="text/css" media="screen" href="css/superfish-custom.css" /> 
		<script type="text/javascript" src="js/superfish-1.4.8/js/hoverIntent.js"></script> 
		<script type="text/javascript" src="js/superfish-1.4.8/js/superfish.js"></script> 
		<!-- ENDS superfish -->
		
		
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

		
		<!-- Cufon -->
		<script src="js/cufon-yui.js" type="text/javascript"></script>
		<script src="js/bebas_400.font.js" type="text/javascript"></script>
		<script type="text/javascript">
			Cufon.replace('.custom', { fontFamily: 'bebas', hover: true });
		</script>
        <!-- /Cufon -->
        
        
        
		
		
		
		
	<style type="text/css">
<!--
a:link {
	color: #0099FF;
}
a:visited {
	color: #333333;
}
-->
</style></head>
	<body>
	<!-- WRAPPER -->
	<div id="wrapper">
	
	
	
	<!-- navigation -->
	<ul id="nav" class="sf-menu">
		
		<li class="custom"><a href="index.php?p=contact">BUKU TAMU</a></li>
		<li class="custom"><a href="index.php?p=order">PEMESANAN</a></li>
		<li class="custom"><a href="index.php?p=gallery">GALERI</a></li>
		<li class="custom"><a href="index.php?p=about" >INFORMASI</a>
			<ul>
				<li><a href="index.php?p=photo">Fotografi</a></li>
				<li><a href="index.php?p=video">Video Shooting</a></li>
			</ul>
		</li>
	</ul>
	<!-- ENDS navigation -->
	
	

	
	
	<!-- HEADER -->
	<div id="header">
		<a href="index.php?p=home"><img src="img/logo3.png" alt="Logo" name="logo" id="logo" /></a>
		<form action="" method="post" id="search">
			<p><input type="text" onfocus="defaultInput(this)" onblur="clearInput(this)" name="keyword" id="keyword" title="Search..." value="Search..."/></p>
			<p><input type="submit" id="go" value="" /></p>
			<div class="clear"></div>
	  </form>
	</div>
	<!-- ENDS HEADER -->
	
	
	
	
	
	

		
	<!-- MAIN -->
	<div id="main">
			
			<?php include "gateway.php" ; ?>
								
			</div>
			<!-- ENDS blocks -->
			
			
	</div>
	<!-- ENDS MAIN -->
	
	
	</div>
	<!-- ENDS WRAPPER -->
	
	
	
	<!-- FOOTER -->
	<div id="footer">
		<div id="footer-wrapper">
			
			<ul id="follow">
				<li><p>Follow us: </p></li>
				<li><a href="http://www.twitter.com"><img src="img/twitter.png" alt="Twitter" /></a></li>
				<li><a href="http://www.facebook.com"><img src="img/facebook.png" alt="Facebook" /></a></li>
				<li><a href="http://www.linkedin.com"><img src="img/linkedln.png" alt="Facebook" /></a></li>
				<li><a href="http://www.rss.com"><img src="img/rss.png" alt="Facebook" /></a></li>
			</ul>
		
			
			
			<div class="footer-bottom">
				<p class="legal">Precious Photography <a href="http://www.facebook.com/firdoez" >design by me</a></p>
				</p>
				<p class="legal" align="center">ADMINISTRATOR </p>
                <p align="center"><?php include "login.php" ; ?> </p>
			
</div>

		</div>
	</div>
	<!-- ENDS FOOTER -->
	
	
	<!-- start cufon -->
	<script type="text/javascript"> Cufon.now(); </script>
	<!-- ENDS start cufon -->
	
	
	</body>
</html>
