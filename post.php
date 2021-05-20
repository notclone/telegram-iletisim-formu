<?php
	
	$isimsoy = $_POST['isimsoy'];
	$mail = $_POST['mail'];
	$telefon = $_POST['telefon'];
	$konu = $_POST['konu'];
	$mesaj = $_POST['mesaj'];
	$site = $_POST['site'];
	$tarih = $_POST['tarih'];
	$ip = $_POST['ip'];



$token = "TOKEN-KODU";
 
$parametre= array(
'chat_id' => "CHAT-ID",
	'text' => "Merhaba, yeni gelen bir form var!
		Ad Soyad: $isimsoy 
		E-Posta: $mail 
		Telefon: $telefon 
		Konu: $konu 
		Mesaj: $mesaj 
		Site: $site 
		Tarih: $tarih 
		Ip Adresi: $ip ",
	);
$ch = curl_init();
$url = "https://api.telegram.org/bot".$token."/sendmessage";
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $parametre);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($ch);
header("Location:tesekkurler.php");
		
	


?>