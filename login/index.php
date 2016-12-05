<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <title>Login Administrator</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Arief Budi P">

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
                        <h1 align="center"><a href=""><span class="red"></span></a></h1>
                    </div>
                   
                </div>
            </div>
        </div>

        <div class="register-container container" align="center">
            <div class="row">
               
                <div class="register span6">
                    <form action="../process/login_auth.php" method="post">
                        <h2>Login Form <span class="red"></span></h2>
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" placeholder="Masukkan Username">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="Masukkan Password">
                        <button type="submit">LOG IN</button>
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

