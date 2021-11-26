<!DOCTYPE html>
<html>
<head>
    <title>Register Accounts</title>
    <link rel="stylesheet" href="styled.css">
</head>
<body>
    <div class="konten">
        <div class="kepala">
            <h2 class="judul">Sign Up</h2>
        </div>
        <div class="artikel">
            <form action="prosesdaftar.php" method="post">
                <div class="grup">
                	<input type="text" name="id_ktp" placeholder="ID">
                </div>
                <div class="grup">
                	<input type="text" name="nama" placeholder="FULL NAME">
                </div>
                <div class="grup">
                	<input type="text" name="no_telp" placeholder="PHONE">
                </div>
                <div class="grup">
                	<input type="text" name="alamat" placeholder="ADDRESS">
                </div>
                <div class="grup">
                    <input type="text" name="username" placeholder="USERNAME">
                </div>
                <div class="grup">
                	<input type="password" name="password" placeholder="PASSWORD">
                </div>
                <div class="grup">
                	<input type="password" name="repeat_pass" placeholder="RE-PASSWORD">
                </div>
                <div class="grup">
                	<input type="text" name="tgl" placeholder="DATE OF BIRTH :" readonly="readonly" style="width: 143px; margin-right: 10px;">
                	<input type="date" name="tgl_lhr" max="2000-12-31" placeholder="yyyy/mm/dd">
                </div>
                <div class="grup">
                    <input type="radio" name="jk" value="LAKI-LAKI">Male <label style="margin-right: 10px;"></label>
					<input type="radio" name="jk" value="PEREMPUAN">Female
		        </div>
                <div class="grup">
                	<input type="submit" name="submit" value="Get Started">
                </div>
            </form>
        </div>
    </div>
</body>
</html>