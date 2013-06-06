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
		
		// email
		var email = $("input#email").val();
		if(email == ""){
			$("#error").fadeIn().text("Email harus diisi");
			$("input#email").focus();
			return false;
		}
		
		// web
		var web = $("input#web").val();
		if(web == ""){
			$("#error").fadeIn().text("Web harus diisi");
			$("input#web").focus();
			return false;
		}
		
		// komentar
		var komentar = $("textarea#komentar").val();
		if(komentar == ""){
			$("#error").fadeIn().text("Komentar harus diisi");
			$("textarea#komentar").focus();
			return false;
		}
		
		// data string
		var dataString = 'nama='+ nama
						+ '&email=' + email        
						+ '&web=' + web
						+ '&komentar=' + komentar;
						         
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

