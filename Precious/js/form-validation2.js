$(document).ready(function(){

	// hide messages 
	$("#error").hide();
	$("#success").hide();
	
	// on submit...
	$("#send").click(function() {
		$("#error").hide();
		
		//required:
		
		//nama
		var nama = $("input#nama").val();
		if(nama == ""){
			$("#error").fadeIn().text("Nama harus diisi.");
			$("input#nama").focus();
			return false;
		}
		
		var alamat = $("input#alamat").val();
		if(alamat == ""){
			$("#error").fadeIn().text("Alamat harus diisi.");
			$("input#alamat").focus();
			return false;
		}
		
		var kontak = $("input#kontak").val();
		if(kontak == ""){
			$("#error").fadeIn().text("Kontak harus diisi.");
			$("input#kontak").focus();
			return false;
		}
			var jenis = $("input#jenis").val();
		if(jenis == ""){
			$("#error").fadeIn().text("Jenis pesanan harus diisi.");
			$("input#jenis").focus();
			return false;
		}
		
	
		
		
		var detail = $("textarea#detail").val();
		if(detail == ""){
			$("#error").fadeIn().text("Detail harus diisi");
			$("textarea#detail").focus();
			return false;
		}
		
		
		// data string
		var dataString = 'nama='+ nama
						+ '&alamat=' + alamat
						+ '&kontak=' + kontak
						+ '&jenis=' + jenis
						+ '&detail=' + detail;
						         
		// ajax
		$.ajax({
			type:"POST",
			url: "send-mail.php",
			data: dataString,
			success: success()
		});
	});  
		
		
	// on success...
	 function success(){
	 	$("#success").fadeIn();
	 	$("#formMail").fadeOut();
	 }
	
    return false;
});

