
<?php
session_start();
if (!empty($_SESSION['nama']) and !empty($_SESSION['password']))
{
        include 'Koneksi.php';
    $nama = $_SESSION['nama'];
     $query1=mysqli_query($con,"SELECT * FROM pemain where nama='$nama'");  
 $pemain=mysqli_fetch_row($query1);
?>
<link href="css/style2.css" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Menang</title>
    </head>
    <body style="background-image:url(image/bg.jpg);background-position:center; background-size:100% 1024px; background-position-y: -150px;">        
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <h1 style="font-size: 36px;">Selamat, Anda telah menyelesaikan seluruh puzzle</h1>
        <h1 style="font-size: 64px;">Poin Anda : <%=p.getPoin()%></h1>
        <br>
        
        <form action="puzzle.php">
        <input type="submit" style="font-size: 30px;" class="btn btn-success btn-sm" value="Main Lagi"/>
        </form>
    </body>
</html>
<?php
}
else
{
    header('location:index.html');
}
?>