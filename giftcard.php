<!DOCTYPE html>
<html>
<head>
	<title>King's Room: IT</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-language" content="bg" />
	<meta name="description" content="King's Room: IT">
	<meta name="keywords" content="">
	<meta name="author" content="Ivan Vladimirov">
	<meta name="viewport" content="width=device-width">
	<meta property="og:image" content="images/logo.png">
	<link type="text/css" rel="stylesheet" href="css/stylesheet.css" />
	<link type="text/css" rel="stylesheet" href="css/font-awesome.min.css" />
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
	<script src="//code.jquery.com/jquery-3.1.1.min.js"></script>
	<script src="js/jquery.fancybox.min.js"></script>
	<script src="js/faq.js"></script>
	<script src="js/scrolltoid.js"></script>
	<script src="js/scrolltoidsettings.js"></script>
	
    <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.min.css">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="favicon.png" type="image/png"/>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->
</head>
<body class="other-pages" style="background-image: none">
	<?php include 'header.php'; ?>
	
	<main>
		<span style="text-indent: -9999px;" id="top">.</span>
		<div class="container">
			<div class="giftcard-hand">
				<h3>Ваучер подарък</h3>
				<div style="font-size: 14px; margin-top: 30px;">Ако искате да подарите уникално изживяване, <br>което изтръгва от нормите на ежедневието, показвайки увереност в способностите на отсрещния човек - ние Ви даваме тази възможност. С нашия ваучер подарък, ще дарите неповторими спомени и емоции.
				</div>
			</div>
			<div id="giftcard">
				<h3>Отправете запитване</h3>
				<form style="margin-top: 20px;" class="form" action="#contact" method="post">
						Име:
						<input name="name" placeholder="" type="text" tabindex="6" required oninvalid="setCustomValidity('Моля въведете име')" onchange="try{setCustomValidity('')}catch(e){}">
						Имейл:
						<input name="email" placeholder="" type="email" tabindex="7" required oninvalid="setCustomValidity('Моля въведете валиден email')" onchange="try{setCustomValidity('')}catch(e){}">
						Тема на съобщение:
						<input name="message" value="Поръчване на подаръчен ваучер" type="tel" tabindex="8" required oninvalid="setCustomValidity('Моля въведете тема на съобщението')" onchange="try{setCustomValidity('')}catch(e){}">
						Съобщение:
						<textarea required oninvalid="setCustomValidity('Моля въведете съобщение')" onchange="try{setCustomValidity('')}catch(e){}" tabindex="9"></textarea>
						<br style="clear: both">
						<br style="clear: both">
						<div style="text-align: center;"><button class="book-button" name="submit" type="submit" id="contact-submit" data-submit="Изпраща се...">Изпрати</button></div>
				</form>
			</div>
		</div>
	</main>
	
	<?php include 'footer.php'; ?>
</body>
</html>