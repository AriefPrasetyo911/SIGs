
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <title>Register New Administrator</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- CSS -->
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=PT+Sans:400,700'>
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Oleo+Script:400,700'>
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

    </head>

    <body>

        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="logo span4">
                        <h1><a href="">Register Administrator<span class="red">.</span></a></h1>
                    </div>
                   
                </div>
            </div>
        </div>

        <div class="register-container container">
            <div class="row">
               
                <div class="register span6">
                    <form action="../process/create_new_admin.php" method="post">
                        <h2>REGISTER <span class="red"><strong>NEW ADMINISTRATOR</strong></span></h2>
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" placeholder="Masukkan Username Anda">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="Masukkan Password Anda">
                        <label for="firstname">Nama Lengkap</label>
                        <input type="text" id="firstname" name="completename" placeholder="Masukkan Nama Lengkap Anda">
                        <label for="lastname">Jenis Kelamin</label>
                        <select name="jk" id="jk" required>
                        <option selected>- Silakan Pilih -</option>
                        <option value="Laki - Laki">Laki - Laki</option>
                        <option value="Perempuan">Perempuan</option>
                        </select>
                        <label for="lastname">Alamat</label>
                        <textarea id="lastname" name="addr" placeholder="Masukkan Alamat Anda" required></textarea> 
                        <button type="submit">REGISTER</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Javascript -->
        <script src="assets/js/jquery-1.8.2.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>

    </body>

</html>

