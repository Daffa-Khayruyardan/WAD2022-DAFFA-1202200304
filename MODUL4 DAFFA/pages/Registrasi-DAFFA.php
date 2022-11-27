<html>
    <head>
        <link rel="stylesheet" href="../asset/style/index.css" />
        <link rel="stylesheet" href="../bootstrap-5.2.2-dist/css/bootstrap.min.css" />
    </head>
    <body>
        <!-- Login Page Container -->
        <div class="">
            <div>
                <img src="" alt="">
            </div>

            <!-- Login Form -->
            <form action="./Registrasi-DAFFA.php" method="post">
                <!-- Login Title -->
                <h1>Registrasi</h1>

                <!-- Email Input -->
                <label>Email</label></br>
                <input type="text" name="email"></br>

                <!-- Nama Input -->
                <label>Nama</label></br>
                <input type="text" name="nama_user"></br>

                <!-- Nomor Handphone Input -->
                <label>Nomor Handphone</label></br>
                <input type="text" name="no_hp"></br>

                <!-- Kata Sandi Input -->
                <label>Kata Sandi</label></br>
                <input type="text" value="passwd"></br>

                <!-- Konfirmasi Kata Sandi Input -->
                <label>Konfirmasi Kata Sandi</label></br>
                <input type="text" value="confirm_passwd"></br>

                <!-- Submit Button -->
                <input type="submit" name="daftar" value="Daftar" class="btn btn-primary"></br>

                <!-- Create Account -->
                <label>
                    Anda sudah punya akun?
                    <a href="">Login</a>
                </label>
            </form>
        </div>
    </body>
</html>