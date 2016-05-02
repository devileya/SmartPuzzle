<?php

$username = $_POST['nama'];
$password = $_POST['pass'];

if (!empty($username) and !empty($password))
{
	include "Koneksi.php";
	$sql = "SELECT * FROM pemain WHERE nama = '$username' AND password = '$password'";
	$data = mysqli_query($con, $sql);

	while($u = mysqli_fetch_array($data))
	{
		$username= $u['nama'];
		$password= $u['password'];
	}

	$cek = mysqli_num_rows($data);
	if ($cek>0)
	{
		echo "masuk";
		session_start();
		$_SESSION['password'] = $password;
		$_SESSION['nama'] = $username;
		header('location: puzzle.php');
	}
	else{
		header('location:index.html');
	}
}
else
{
	header('location:index.html');
}

?>