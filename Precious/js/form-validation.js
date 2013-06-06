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
			var judul = $("input#judul").val();
		if(judul == ""){
			$("#error").fadeIn().text("Judul paket harus diisi.");
			$("input#judul").focus();
			return false;
		}
		var isi = $("textarea#isi").val();
		if(isi == ""){
			$("#error").fadeIn().text("Isi paket harus diisi.");
			$("textarea#isi").focus();
			return false;
		}
		var harga = $("input#harga").val();
		if(harga == ""){
			$("#error").fadeIn().text("Harga paket harus diisi.");
			$("input#harga").focus();
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
						+ '&email=' + email        
						+ '&web=' + web
						+ '&komentar=' + komentar
						+ '&alamat=' + alamat
						+ '&kontak=' + kontak
						+ '&jenis=' + jenis
						+ '&detail=' + detail
						+ '&judul=' + judul
						+ '&isi=' + isi
						+ '&harga=' + harga;
						         
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

