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

	<link href="css/hangman2.css" rel="stylesheet" type="text/css" />
<html>
 <body style="background-image:url(image/bg1.jpg);background-position:center; background-size:100% 1024px;">
     <table><tr><td><h1 style="margin-left: 50px; margin-right: 80px">Nama : <?php print $nama;?></h1></td><td><h1 style=" margin-left: 80px;margin-right: 80px; color:white;">Waktu:<span id="countdown"></span><h1></td><td><h1 style="margin-left: 80px;">Poin : <?php print $pemain[1];?></h1></td></tr></table>
<div class="wrapper">
</div>
<div class="wrapper">
    <span id="nama" hidden="true"><?php print $nama;?></span>
        <span id="idgam" hidden="true"><?php print $pz[0]+1;?></span>
   
	<img src='image/<?php print $pz[1];?>' width='50%'  height='300px'>
        <span id="jawaban" hidden="true"><?php print $pz[3];?></span>
	 <p><?php print $pz[2];?></p>
    <div id="hold">
    </div>
    <p id="mylives"></p>

	     
</div>
</body><div id="buttons">
    </div>
    <footer>Made by : Arif Fadly Siregar</footer>
</html>
<script type="text/javascript">
var waktu = 25;
var nama=document.getElementById("nama").innerHTML;
setInterval(function() {
waktu--;
if(waktu == 0) {
window.location.href = "gameover.php?nama="+nama;
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