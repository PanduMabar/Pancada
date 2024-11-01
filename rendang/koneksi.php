<?php 
$koneksi = mysqli_connect("localhost","root","","padang");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>
<?php 
$database = "padang";
$host = "localhost";
$username = "root"; // ganti dengan username database km
$password = ""; // ganti dengan password database km

$mysqli = new mysqli($host,$username,$password,$database);

// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>