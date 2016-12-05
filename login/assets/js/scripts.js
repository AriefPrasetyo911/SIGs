
jQuery(document).ready(function() {

    /*
        Background slideshow
    */
    $.backstretch([
      "assets/img/backgrounds/1.jpg"
    , "assets/img/backgrounds/2.jpg"
    , "assets/img/backgrounds/3.jpg"
    ], {duration: 3000, fade: 750});

    /*
        Tooltips
    */
    $('.links a.home').tooltip();
    $('.links a.blog').tooltip();

    /*
        Form validation
    */
    $('.register form').submit(function(){
		$(this).find("label[for='username']").html('Username');
		$(this).find("label[for='password']").html('Password');
        $(this).find("label[for='firstname']").html('First Name');
        $(this).find("label[for='lastname']").html('Last Name');
       
        ////
		var username = $(this).find('input#username').val();
		var password = $(this).find('input#password').val();
        var firstname = $(this).find('input#firstname').val();
        var lastname = $(this).find('input#lastname').val();
        
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
        if(firstname == '') {
            $(this).find("label[for='firstname']").append("<span style='display:none' class='red'> - Silakan Masukkan Nama Lengkap.</span>");
            $(this).find("label[for='firstname'] span").fadeIn('medium');
            return false;
        }
        if(lastname == '') {
            $(this).find("label[for='lastname']").append("<span style='display:none' class='red'> - Silakan Masukkan Alamat.</span>");
            $(this).find("label[for='lastname'] span").fadeIn('medium');
            return false;
        }

    });


});


