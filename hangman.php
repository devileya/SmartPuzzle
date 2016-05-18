<?php
session_start();
if (!empty($_SESSION['nama']) and !empty($_SESSION['password']))
{
     include "Koneksi.php";  
        $nama= $_SESSION['nama'];        
        $idg= $_GET['idg'];
        $poin= $_GET['poin'];

 $query1=mysqli_query($con,"SELECT * FROM pemain where nama='$nama'");  
 $query2=mysqli_query($con,"SELECT * FROM puzzle where id_puzzle='$idg'");   
 $pemain=mysqli_fetch_row($query1);
 $pz=mysqli_fetch_row($query2);

 
 if($pemain[3]==true && !empty($nama)){       
    mysqli_query($con,"UPDATE pemain SET poin=poin+$poin,puzzle=true,tebakkata=false WHERE nama='$nama'");
 }
?>
<!DOCTYPE html>
    <script src="js/jquery-1.7.2.min.js"></script>
<script src="js/hangman2.js"></script>
        <link rel="stylesheet" href="css/grid-responsive-min.css" type="text/css">
        <link href="css/style.css" rel="stylesheet" type="text/css" />
	<link href="css/hangman2.css" rel="stylesheet" type="text/css" />
<html>

 <body style="background-image:url(image/bghangman.png);background-position:center; background-size:100% 1024px;">

<div class="wrapper">
	<table><tr><td><h1>&nbsp&nbspNama : <?php print $nama;?></h1></td><td><h1 align="center" style="background-color:#728eff;opacity:0.90;border-radius:10px">Waktu:<span id="countdown"></span><h1></td><td><h1>Poin : <?php print $pemain[1];?></h1></td></tr></table>
</div>
<div class="wrapper">
    <span id="nama" hidden="true"><?php print $nama;?></span>
        <span id="idgam" hidden="true"><?php print $pz[0]+1;?></span>
   
	<img src='image/<?php print $pz[1];?>' width='50%'  height='300px'>
        <span id="jawaban" hidden="true"><?php print $pz[3];?></span>
	 <p style="color:black;"><?php print $pz[2];?></p>
    <div id="hold" style="color:black;">
    </div>
    <p id="mylives" style="color:black;"></p>

	     
</div>
</body><div id="buttons">
    </div>
    <footer style="color:black;">Made by : Arif Fadly Siregar</footer>
</html>
<script type="text/javascript">
var waktu = 25;
var nama=document.getElementById("nama").innerHTML;
setInterval(function() {
waktu--;
if(waktu == 0) {
window.location.href = "gameover.php";
}else{
document.getElementById("countdown").innerHTML = waktu;
}
}, 1000);
</script>

<?php
}
else
{
    header('location:index.html');
}
?>
