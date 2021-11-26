    <!-- 
        Nama : Mukhlizardy al fauzan
        Nim  : 123180041 
    -->
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="styleawal.css">
</head>
<body>
    <div class="konten">
        <div class="kepala">
            <div class="lock"></div>
            <h2 class="judul">Login</h2>
        </div>
        <div class="artikel">
            <form action="proseslogin.php" method="post">
                <div class="grup">
                    <input type="text" name="username" placeholder="Username">
                </div>
                <div class="grup">
                    <input type="password" name="password" placeholder="Password">
                </div>
                <div class="grup">
                    <label style="font-size: 11pt; color: black;">Don't have an account ? <a href="daftar.php" style="color: red; text-decoration: none;">Sign Up</a></label><br>
                    <input type="submit" name="submit" value="Login">
                </div>
            </form>
        </div>
    </div>
</body>
</html>