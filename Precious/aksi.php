<?php

	$nama=$_POST['nama'];
	
		
			switch($nama){

			case 'muhammad' : $a='muhammad'; echo "<script>
			window.location='nabi.php&inset=$a';
								</script>";	 break;	
			case 'ismail' : $b='ismail'; break;
			case 'idris' : $c='idris'; break;
			case 'adam' : $d='adam'; break;
			case 'yusuf' : $e='yusuf'; break;
			case 'isa' : $f='isa'; break;
			case 'musa' : $g='musa'; break;
			case 'ayub' : $h='ayub'; break;
			case 'harun' : $i='harun'; break;
			case 'yahya' : $j='yahya'; break;
			default : echo "anda salah"; $salah++; echo $salah; break;}
			?>
