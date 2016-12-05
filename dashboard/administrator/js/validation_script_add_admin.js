
jQuery(document).ready(function() {


    /*
        Form validation
    */
    $('.box .box-body form').submit(function(){
		$(this).find("label[for='username']").html('Username');
		$(this).find("label[for='password']").html('Password');
        $(this).find("label[for='nama']").html('Nama Lengkap');
        $(this).find("label[for='jk']").html('Jenis Kelamin');
		$(this).find("label[for='alamat']").html('Alamat');
		$(this).find("label[for='akses']").html('Hak Akses');
        ////
		var username = $(this).find('input#username').val();
		var password 		= $(this).find('input#password').val();
		var nama	 		= $(this).find('input#nama').val();
		var optionsRadios1 	= $(this).find('input#optionsRadios1').val();
		var alamat	 		= $(this).find('input#alamat').val();
		var hk_Aakses	 	= $(this).find('input#hk_Aakses').val();
        
		if(username == '') {
            $(this).find("label[for='username']").append("<span style='display:none' class='red'> - Silakan Masukkan Username.</span>");
            $(this).find("label[for='username'] span").fadeIn('medium');
            return false;
        }
		if(password == '') {
            $(this).find("label[for='password']").append("<span style='display:none' class='red'> - Silakan Masukkan Password.</span>");
            $(this).find("label[for='password'] span").fadeIn('medium');
            return false;
        }
        if(nama == '') {
            $(this).find("label[for='nama']").append("<span style='display:none' class='red'> - Silakan Masukkan Nama Lengkap.</span>");
            $(this).find("label[for='nama'] span").fadeIn('medium');
            return false;
        }
        if(optionsRadios1 == '') {
            $(this).find("label[for='jk']").append("<span style='display:none' class='red'> - Silakan Pilih Jenis Kelamin.</span>");
            $(this).find("label[for='jk'] span").fadeIn('medium');
            return false;
        }
		if(alamat == '') {
            $(this).find("label[for='alamat']").append("<span style='display:none' class='red'> - Silakan Masukkan Alamat Anda.</span>");
            $(this).find("label[for='alamat'] span").fadeIn('medium');
            return false;
        }
		if(hk_akses == '') {
            $(this).find("label[for='akses']").append("<span style='display:none' class='red'> - Silakan Masukkan Alamat Anda.</span>");
            $(this).find("label[for='akses'] span").fadeIn('medium');
            return false;
        }
    });


});


// JavaScript Document