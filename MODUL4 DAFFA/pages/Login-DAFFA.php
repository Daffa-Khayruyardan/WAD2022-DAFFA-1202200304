<html>
    <head>
        <link rel="stylesheet" href="asset/style/index.css" />
        <link rel="stylesheet" href="../bootstrap-5.2.2-dist/css/bootstrap.min.css" />
    </head>
    <body>
        <!-- Login Page Container -->
        <div class="row">
            <div class="col">
                <img src="../asset/images/LoginCar.png" alt="" class="w-75 h-100 login-image">
            </div>

            <!-- Login Form -->
            <form action="../config/Login.php" method="post" class="col">
                <!-- Login Title -->
                <h1>Login</h1>

                <!-- Email Input -->
                <label>Email</label></br>
                <input type="text" name="email"></br>

                <!-- Password Input -->
                <label>Password</label></br>
                <input type="text" name="password"></br>

                <!-- Remember Me -->
                <input type="checkbox">
                <label>Remember me</label></br>

                <!-- Submit Button -->
                <input type="submit" value="Login" class="btn btn-primary"></br>

                <!-- Create Account -->
                <label>
                    Anda belum punya akun?
                    <a href="./Register-DAFFA.php">Daftar</a>
                </label>
            </form>
        </div>
    </body>
</html>