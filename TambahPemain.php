<?php
include "Koneksi.php";
$nama = $_POST['nama'];
$pass = $_POST['pass'];
$_SESSION['nama']=$nama;
$_SESSION['password']=$pass;
if(!empty ($nama))
{
	echo "masuk";
	mysqli_query($con, "INSERT into pemain values ('$nama',0,false,true,'$pass')");
	header('location: puzzle.php');
}
else{
	header('location: daftar.html');
}
?>
