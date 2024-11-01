<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kota Randang</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    
    <div class="container">
        <div class="login">
            <!-- cek pesan notifikasi -->
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>
            <form method="post" action="cek_login.php">
                <h1>Login</h1>
                <hr>
                <p>JEMRUK</p>
                <label for="username">username</label>
                <input type="text" id="username" name="username"  placeholder="username">
                <label for="Password">Password</label>
                <input type="password" id="password" name="password" placeholder="Password">
                <button>Login</button>
                <p>
                    <a href="#">Forgot Password?</a>
                    <br>
                    <a href="register.php">Registrasi</a>
                </p>
            </form>
        </div>
        <div class="right">
            <img src="gambar.png" alt="">
        </div>
    </div>
</body>

</html>