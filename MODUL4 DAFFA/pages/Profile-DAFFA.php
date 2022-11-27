<html>
    <head>
        <link rel="stylesheet" href="asset/style/index.css" />
        <link rel="stylesheet" href="../bootstrap-5.2.2-dist/css/bootstrap.min.css" />
    </head>
    <body>
        <!-- Navbar -->
        <nav class="navbar navbar-expand bg-primary">
            <div class="container-fluid">
                <ul class="navbar-nav">
                    <!-- Navigation Link -->
                    <li class="nav-item pt-3 pb-3 text-xl">
                        <a href="pages/Login-DAFFA.php" style="text-decoration: none;" class="link-light">Home</a>
                    </li>
                    <li class="nav-item pt-3 pb-3 text-xl">
                        <a href="pages/Login-DAFFA.php" style="text-decoration: none;" class="link-light">Login</a>
                    </li>

                    <!--  -->
                </ul>
            </div>
        </nav>

        <!-- Update Profile Form -->
        <form action="" method="post">
            <!-- Page Title -->
            <h3 class="mx-auto">Profile</h3>
    
            <!-- Email -->
            <label>Email</label>
            <input type="text" name="email_update"></br>
    
            <!-- Nama -->
            <label>Nama</label>
            <input type="text" name="name_update"></br>
    
            <!-- No. HP -->
            <label>Nomor Handphone</label>
            <input type="text" name="no_hp_update"></br>
    
            <!-- Break Line -->
            <hr>
    
            <!-- Kata Sandi -->
            <label>Kata Sandi</label>
            <input type="text" name="passwd_update"></br>
    
            <!-- Konfirmasi Kata Sandi -->
            <label>Konfirmasi Kata Sandi</label>
            <input type="text" name="confirm_passwd_update"></br>
    
            <!-- Warna Navbar -->
            <label>Warna Navbar</label>
            <input type="text" name="navbar_color"></br>
    
            <!-- Update -->
            <input type="submit" name="profile_update" class="btn btn-primary" value="update">
        </form>

    </body>
</html>