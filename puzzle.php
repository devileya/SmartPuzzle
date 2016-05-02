<?php
    session_start();
 if (!empty($_SESSION['nama']) and !empty($_SESSION['password']))
{   
    include "Koneksi.php";  
        $nama= $_SESSION['nama'];
        
    if(empty($_GET['poin'])){
       $idg=1;
       $poin=0;
   }
   else{
    $idg= $_GET['idg'];
        $poin= $_GET['poin'];
   }
 $query1=mysqli_query($con,"SELECT * FROM pemain where nama='$nama'");  
 $query2=mysqli_query($con,"SELECT * FROM puzzle where id_puzzle='$idg'");   
 $pemain=mysqli_fetch_row($query1);
 $pz=mysqli_fetch_row($query2);

 
 if($pemain[2]==true && !empty($nama)){       
    mysqli_query($con,"UPDATE pemain SET poin=poin+$poin,puzzle=false,tebakkata=true WHERE nama='$nama'");
 }

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Jigsaw Puzzle</title>
    <link rel="stylesheet" href="css/pure-min.css" type="text/css">
    <link rel="stylesheet" href="css/grid-responsive-min.css" type="text/css">
	<link href="css/style.css" rel="stylesheet" type="text/css" />
	
</head>
<header style="height: 90px;">
<body style="background-image:url(image/background1.jpg);background-position:center; background-size: 100% 1200px ">
    <table><tr><td><h1  align="center" >Nama : <?php print $nama;?></h1></td><td><h1 align="center" style="background-color: black">Waktu:<span id="countdown"></span><h1></td><td><h1 align="right">Poin : <?php print $pemain[1];?></h1></td></tr></table></header>
    
    <span id="idgam" hidden="true"><?php print $pz[0];?></span>
    <span id="nama" hidden="true"><?php print $nama;?></span>
    
    <div id="puzzle-containment" style="background:#f2f2f2 ;margin:10px 0;padding:10px;text-align:center">
        <div class="pure-g" style="max-width:1280px; height: 500px;margin:auto">
            <div class="pure-u-1 pure-u-md-1-2"><div style="margin:10px; ">
                <img id="source_image" class="pure-img" src="image/<?php print $pz[1]; ?>" width="800px" height="600px">
            </div></div>
            <div class="pure-u-1 pure-u-md-1-2">
                <div id="pile" style="margin:10px">
                    <div id="puzzle_solved" style="display:none;text-align:center;position:relative;top:25%">


                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <script src="js/jquery-1.7.2.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.snap-puzzle.js"></script>
    <script type="text/javascript">
var idgam = document.getElementById("idgam").innerHTML;
if(idgam<6)  var waktu = 50;
else var waktu = 100;
setInterval(function() {
waktu--;
if(waktu == 0) {
window.location.href = "gameover.php";
}else{
document.getElementById("countdown").innerHTML = waktu;
}
}, 1000);
</script>
    <script>
        // jQuery UI Touch Punch 0.2.3 - must load after jQuery UI
        // enables touch support for jQuery UI
        !function(a){
			function f(a,b){
				if(!(a.originalEvent.touches.length>1)){
					a.preventDefault();var c=a.originalEvent.changedTouches[0],
					d=document.createEvent("MouseEvents");
					d.initMouseEvent(b,!0,!0,window,1,c.screenX,c.screenY,c.clientX,c.clientY,!1,!1,!1,!1,0,null),
					a.target.dispatchEvent(d)}
					}
				if(a.support.touch="ontouchend"in document,a.support.touch){
					var e,b=a.ui.mouse.prototype,c=b._mouseInit,d=b._mouseDestroy;b._touchStart=function(a){
						var b=this;!e&&b._mouseCapture(a.originalEvent.changedTouches[0])&&(e=!0,b._touchMoved=!1,f(a,"mouseover"),f(a,"mousemove"),f(a,"mousedown"))},
						b._touchMove=function(a){e&&(this._touchMoved=!0,f(a,"mousemove"))},
						b._touchEnd=function(a){e&&(f(a,"mouseup"),f(a,"mouseout"),this._touchMoved||f(a,"click"),e=!1)},
						b._mouseInit=function(){var b=this;b.element.bind({touchstart:a.proxy(b,"_touchStart"),
						touchmove:a.proxy(b,"_touchMove"),touchend:a.proxy(b,"_touchEnd")}),c.call(b)},
						b._mouseDestroy=function(){var b=this;b.element.unbind({touchstart:a.proxy(b,"_touchStart"),touchmove:a.proxy(b,"_touchMove"),
						touchend:a.proxy(b,"_touchEnd")}),d.call(b)}}}(jQuery);

        var idgam = document.getElementById("idgam").innerHTML;
        function start_puzzle(x){
            $('#puzzle_solved').hide();
            $('#source_image').snapPuzzle({
                rows: x, columns: x,
                pile: '#pile',
                containment: '#puzzle-containment',
                onComplete: function(){
                    window.location.href="hangman.php?poin=50&idg="+idgam;
                    $('#source_image').fadeOut(150).fadeIn();
                    $('#puzzle_solved').show();
                }
            });
        }

        $(function(){
            $('#pile').height($('#source_image').height());
            if(idgam<6)
            start_puzzle(3);
            else start_puzzle(4);

            $('.restart-puzzle').click(function(){
                $('#source_image').snapPuzzle('destroy');
                start_puzzle($(this).data('grid'));
            });

            $(window).resize(function(){
                $('#pile').height($('#source_image').height());
                $('#source_image').snapPuzzle('refresh');
            });
        });
</script>
</body>

<footer align='center' style="color:black;">Made by : Arif Fadly Siregar</footer>
</html>
<?php
}
else
{
    header('location:index.html');
}
?>

