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

	
<style type="text/css">
<!--
.style4 {color: #CCCCCC}
-->
</style>
</head>

<body>
<?php
if(!$_SESSION['login']){

?>
<div align="center">
<form id="form1" name="form1" method="post" action="?do=login">
 <table align="center" style="height:inherit" border="0">
    <tr>
      <td  colspan="2" align="right"><label>
        <input size="14" style="height:20px" type="text" name="username" id="text1" onfocus="this.value=''" onblur="if(this.value == '')this.value ='username'" value="username"/></label>
        <label> <input size="14" style="height:20px" type="password" name="password" id="text2" onfocus="this.value=''" onblur="if(this.value == '')this.value ='password'" value="password" />
        <br />
        </label></td>
      <tr><td align="center"><input  height="13" type="submit" name="button" id="button" value="Sign In" /></td>
    </tr>
  </table>
  <label></label>
</form></div>
<?php }else{
?>
<div align="center">
<table  border="0">
  
  <tr>
    <td align="center">
    <form id="form2" name="form2" method="get" action="">
      <label>
        <span class="style4">You are logged in        </span></label>
         <span class="style4">
         <label> | <a href="?p=admin">Admin Page</a> |         </label>
         </span>
         <label>
         <input type="submit" name="button2" id="button2" value="Sign Out" />
        </label>
    </form>
    </td>
  </tr>
</table>
</div>

<?php } ?>
</body>
</html>
