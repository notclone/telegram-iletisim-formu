<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
<title>Telegram İletişim Formu</title>
  
  
<style>
@import url(https://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600);
* {
	margin:0;
	padding:0;
	box-sizing:border-box;
	-webkit-box-sizing:border-box;
	-moz-box-sizing:border-box;
	-webkit-font-smoothing:antialiased;
	-moz-font-smoothing:antialiased;
	-o-font-smoothing:antialiased;
	font-smoothing:antialiased;
	text-rendering:optimizeLegibility;
}
body {
	font-family:"Open Sans", Helvetica, Arial, sans-serif;
	font-weight:300;
	font-size: 12px;
	line-height:30px;
	color:#777;
	background:#0CF;
}
.container {
	max-width:400px;
	width:100%;
	margin:0 auto;
	position:relative;
}
#contact input[type="text"], #contact input[type="email"], #contact input[type="tel"], #contact input[type="url"], #contact textarea, #contact button[type="submit"] { font:400 12px/16px "Open Sans", Helvetica, Arial, sans-serif; }
#contact {
	background:#F9F9F9;
	padding:25px;
	margin:50px 0;
}
#contact h3 {
	color: #F96;
	display: block;
	font-size: 30px;
	font-weight: 400;
}
#contact h4 {
	margin:5px 0 15px;
	display:block;
	font-size:13px;
}
fieldset {
	border: medium none !important;
	margin: 0 0 10px;
	min-width: 100%;
	padding: 0;
	width: 100%;
}
#contact input[type="text"], #contact input[type="email"], #contact input[type="tel"], #contact input[type="url"], #contact textarea {
	width:100%;
	border:1px solid #CCC;
	background:#FFF;
	margin:0 0 5px;
	padding:10px;
}
#contact input[type="text"]:hover, #contact input[type="email"]:hover, #contact input[type="tel"]:hover, #contact input[type="url"]:hover, #contact textarea:hover {
	-webkit-transition:border-color 0.3s ease-in-out;
	-moz-transition:border-color 0.3s ease-in-out;
	transition:border-color 0.3s ease-in-out;
	border:1px solid #AAA;
}
#contact textarea {
	height:100px;
	max-width:100%;
  resize:none;
}
#contact button[type="submit"] {
	cursor:pointer;
	width:100%;
	border:none;
	background:#0CF;
	color:#FFF;
	margin:0 0 5px;
	padding:10px;
	font-size:15px;
}
#contact button[type="submit"]:hover {
	background:#09C;
	-webkit-transition:background 0.3s ease-in-out;
	-moz-transition:background 0.3s ease-in-out;
	transition:background-color 0.3s ease-in-out;
}
#contact button[type="submit"]:active { box-shadow:inset 0 1px 3px rgba(0, 0, 0, 0.5); }
#contact input:focus, #contact textarea:focus {
	outline:0;
	border:1px solid #999;
}
::-webkit-input-placeholder {
 color:#888;
}
:-moz-placeholder {
 color:#888;
}
::-moz-placeholder {
 color:#888;
}
:-ms-input-placeholder {
 color:#888;
}
</style>
  <script>
  window.console = window.console || function(t) {};
</script>
  
  
  <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>
</head>
<body translate="no">
  <div class="container">  
  <form id="contact" action="post.php" method="post">
  	<input name="tarih" hidden value="<?=date('d.m.Y H:i:s');?>">
	<input name="ip" hidden value="<?=$_SERVER['REMOTE_ADDR']?>">
	<input name="site" hidden value="<?=$_SERVER['SERVER_NAME']?>">
    <h3>İletişim Formu</h3>
    <h4>Hemen iletişime geçin</h4>
    <fieldset>
      <input placeholder="Ad Soyad" name="isimsoy" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="E-Posta Adresi" name="mail" type="email" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="Telefon" name="telefon" type="tel" tabindex="3" required>
    </fieldset>
    <fieldset>
      <input placeholder="Konu" name="konu" type="text" tabindex="4" required>
    </fieldset>
    <fieldset>
      <textarea placeholder="Mesaj" name="mesaj" tabindex="5" required></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Gönderiliyor">Gönder</button>
    </fieldset>
  </form>
 
  
</div>
  
  
  
  
</body>
</html>
 