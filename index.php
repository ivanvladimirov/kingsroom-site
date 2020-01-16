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
	<script src="js/menu.js"></script>
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
<body>
	<?php include 'header.php'; ?>
	
	<main>
		<span style="text-indent: -9999px;" id="top">.</span>
		<div class="container">
			<!--<div id="about">
				<h3>За нас</h3>
				<br><br>
				Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
			</div>-->
			
			<div id="book">
				<h3>Запази</h3>
				<div id="book-it">
					<a class="back" onclick="switchVisible();">Назад</a>
					<div style="margin-top: -43px;"><div class="time-range"><span id="date">22.08.2017</span> <span style="color: white;">|</span> <span id="hour">11:00</span></div></div>
					
					<form class="form" id="reserve" action="#book" method="post">
						<div id="left1">
							Име:
							<input placeholder="" type="text" tabindex="1" required oninvalid="setCustomValidity('Моля въведете име')" onchange="try{setCustomValidity('')}catch(e){}">
							Телефон:
							<input placeholder="" type="tel" tabindex="3" required oninvalid="setCustomValidity('Моля въведете телефонния си номер')" onchange="try{setCustomValidity('')}catch(e){}">
							Име на отбор:
							<input placeholder="" type="text" tabindex="5" required oninvalid="setCustomValidity('Моля въведете име на отбор')" onchange="try{setCustomValidity('')}catch(e){}">
						</div>
						<div id="right">
							Имейл:
							<input name="email" placeholder="" type="email" tabindex="2" required oninvalid="setCustomValidity('Моля въведете валиден email')" onchange="try{setCustomValidity('')}catch(e){}">
							Брой участници:
								<select name="persons" id="persons" required  oninvalid="setCustomValidity('Моля изберете брой играчи')" onchange="try{setCustomValidity('')}catch(e){}" tabindex="4">
									<option selected value="">-- Избери --</option>
									<option value="1">3</option>
									<option value="2">4</option>
									<option value="3">5</option>
									<option value="4">6</option>
									<option value="5">7</option>
								</select> 
								<div class="price">
									Цена: <span id="total_price_print"></span>
								</div>
						</div>
							<br style="clear: both">
						
						<br style="clear: both">
						<br style="clear: both">
						<div style="text-align: center;"><button class="book-button" name="submit" type="submit" id="contact-submit" data-submit="Запазва се...">Запази</button></div>
						
					</form>
				</div>
				
				<script>
				$('#persons').on('change', function() {
					persons = $("#persons").val();
					if (persons == "1") {
						price_print = "90";
					}
					if (persons == "2") {
						price_print = "120";
					}
					if (persons == "3") {
						price_print = "125";
					}
					if (persons == "4") {
						price_print = "150";
					}
					if (persons == "5") {
						price_print = "160";
					}
					
					$("#total_price").val(price_print);
					$("#total_price_print").html(price_print + " лв.");
				});
				</script>
				<script>
				function switchVisible() {
							if (document.getElementById('table')) {

								if (document.getElementById('table').style.display == 'none') {
									document.getElementById('table').style.display = 'block';
									document.getElementById('book-it').style.display = 'none';
								}
								else {
									document.getElementById('table').style.display = 'none';
									document.getElementById('book-it').style.display = 'block';
								}
							}
				}
				</script>
				<div id="table">
				<div style="margin-top: -20px;">
					<a href="#" class="prev"></a>
					<div class="time-range">22.08.2017 - 28.08.2017</div>
					<a href="#" class="next"></a>
				</div>
					<div class="column">
						<div class="day">Вторник</div>
						<div class="date">(22.08.2017)</div>
						<div class="hours">
							<a class="free" onclick="switchVisible();">11:00</a>
							<a class="free" onclick="switchVisible();">13:00</a>
							<a class="free" onclick="switchVisible();">15:00</a>
							<a class="free" onclick="switchVisible();">17:00</a>
							<a class="free" onclick="switchVisible();">19:00</a>
							<a class="free" onclick="switchVisible();">21:00</a>
						</div>
					</div><div class="column">
						<div class="day">Сряда</div>
						<div class="date">(23.08.2017)</div>
						<div class="hours">
							<a class="free" onclick="switchVisible();">11:00</a>
							<a class="free" onclick="switchVisible();">13:00</a>
							<a class="free" onclick="switchVisible();">15:00</a>
							<a class="free" onclick="switchVisible();">17:00</a>
							<a class="free" onclick="switchVisible();">19:00</a>
							<a class="free" onclick="switchVisible();">21:00</a>
						</div>
					</div><div class="column">
						<div class="day">Четвъртък</div>
						<div class="date">(24.08.2017)</div>
						<div class="hours">
							<a class="free" onclick="switchVisible();">11:00</a>
							<a class="free" onclick="switchVisible();">13:00</a>
							<a class="free" onclick="switchVisible();">15:00</a>
							<a class="free" onclick="switchVisible();">17:00</a>
							<a class="free" onclick="switchVisible();">19:00</a>
							<a href="#" class="booked tooltip"><span class="tooltiptext">Запазено</span>21:00</a>
						</div>
					</div><div class="column">
						<div class="day">Петък</div>
						<div class="date">(25.08.2017)</div>
						<div class="hours">
							<a class="free" onclick="switchVisible();">11:00</a>
							<a href="#" class="booked tooltip"><span class="tooltiptext">Запазено</span>13:00</a>
							<a class="free" onclick="switchVisible();">15:00</a>
							<a class="free" onclick="switchVisible();">17:00</a>
							<a class="free" onclick="switchVisible();">19:00</a>
							<a class="free" onclick="switchVisible();">21:00</a>
						</div>
					</div><div class="column">
						<div class="day">Събота</div>
						<div class="date">(26.08.2017)</div>
						<div class="hours">
							<a class="free" onclick="switchVisible();">11:00</a>
							<a class="free" onclick="switchVisible();">13:00</a>
							<a class="free" onclick="switchVisible();">15:00</a>
							<a class="free" onclick="switchVisible();">17:00</a>
							<a class="free" onclick="switchVisible();">19:00</a>
							<a class="free" onclick="switchVisible();">21:00</a>
						</div>
					</div><div class="column">
						<div class="day">Неделя</div>
						<div class="date">(27.08.2017)</div>
						<div class="hours">
							<a class="free" onclick="switchVisible();">11:00</a>
							<a class="free" onclick="switchVisible();">13:00</a>
							<a class="free" onclick="switchVisible();">15:00</a>
							<a href="#" class="booked tooltip"><span class="tooltiptext">Запазено</span>17:00</a>
							<a class="free" onclick="switchVisible();">19:00</a>
							<a class="free" onclick="switchVisible();">21:00</a>
						</div>
					</div><div class="column">
						<div class="day">Понеделник</div>
						<div class="date">(28.08.2017)</div>
						<div class="hours">
							<a class="free" onclick="switchVisible();">11:00</a>
							<a class="free" onclick="switchVisible();">13:00</a>
							<a class="free" onclick="switchVisible();">15:00</a>
							<a class="free" onclick="switchVisible();">17:00</a>
							<a class="free" onclick="switchVisible();">19:00</a>
							<a class="free" onclick="switchVisible();">21:00</a>
						</div>
					</div>
				</div>
				<div style="margin-right: 20px;text-align:right;color:white;font-size: 15px;">Всички цени са с включено ДДС</div>
			</div>
			
			<div id="about">
				<div>Escape room е най-добрият избор за тези, които искат да бъдат изправени пред истинско предизвикателство, примесено с точната доза адреналин. Нашата цел е да ви предоставим точно тази възможност, давайки шанса да станете част от един от най-емблематичните сюжети. И да избягате от него, разбира се...</div>
			</div>
			
			<div id="gallery">
				<h3>Галерия</h3>
				<div class="photos">
					<a data-fancybox="gallery" href="gallery/team.jpg"><img src="gallery/team-s.jpg"><span>ОТБОР<div>60:00</div></span></a><!--
					--><a data-fancybox="gallery" href="gallery/team.jpg"><img src="gallery/team-s.jpg"><span>ОТБОР<div>60:00</div></span></a><!--
					--><a data-fancybox="gallery" href="gallery/team.jpg"><img src="gallery/team-s.jpg"><span>ОТБОР<div>60:00</div></span></a><!--
					
					--><a data-fancybox="gallery" href="gallery/team.jpg"><img src="gallery/team-s.jpg"><span>ОТБОР<div>60:00</div></span></a><!--
					--><a data-fancybox="gallery" href="gallery/team.jpg"><img src="gallery/team-s.jpg"><span>ОТБОР<div>60:00</div></span></a><!--
					--><a data-fancybox="gallery" href="gallery/team.jpg"><img src="gallery/team-s.jpg"><span>ОТБОР<div>60:00</div></span></a>
				</div>
			</div>
			
			<div id="faq">
				<h3>Въпроси</h3>
				<div style="margin-top: 60px;">
				<div id="left">
					<h1><span style="color: #db2121;">В:</span> Каква е минималната възраст за участие в стаята?</h1>
					<div>
						<p><span style="color: #db2121;">О:</span> Мислейки за Вашето физическо и психическо здраве, установихме че изпитанията не са подходящи за лица под 17 години. Пък и те не са толкова вкусни. </p>
					</div>
					
					<h1><span style="color: #db2121;">В:</span> С каква продължителност е играта?</h1>
					<div>
						<p><span style="color: #db2121;">О:</span> Играта продължава 75 минути, след изтичането им, оставате в играта завинаги.</p>
					</div>
					
					<h1><span style="color: #db2121;">В:</span> Възможно ли е да изляза ако поискам?</h1>
					<div>
						<p><span style="color: #db2121;">О:</span> При необходимост от всякакъв вид, играта ще се паузира и член на екипа ни ще Ви изведе. Останалите участници могат да продължат играта си. След приключване на играта, ще Ви предоставим останките им, за да ги вземете с Вас, за спомен.</p>
					</div>
					
					<h1><span style="color: #db2121;">В:</span> Кога трябва да дойдем?</h1>
					<div>
						<p><span style="color: #db2121;">О:</span> Препоръчително е отбора Ви да дойде поне 15 минути по-рано преди запазеният час. Екипът на Кингс руумс си запазва правото да не проведе играта след закъснение по-голямо от 15 минути.</p>
					</div>
				</div>
				<div id="right">
					<h1><span style="color: #db2121;">В:</span> Къде се намира стаята?</h1>
					<div>
						<p><span style="color: #db2121;">О:</span> Стаята ни се намира на ул. Иван Рилски 15, в близост до 5те кьошета. </p>
					</div>
					
					<h1><span style="color: #db2121;">В:</span> Какво ще се случи, ако не успеем да решим дадена загадка?</h1>
					<div>
						<p><span style="color: #db2121;">О:</span> За разрешаване на загадките са нужни само наблюдателност, ловкост и логика. Екипът ни Ви слуша и наблюдава през цялото време, с готовност да даде насоки по всяко време, и по желание. Забавите ли се прекалено, единствено може да Ви коства някой крайник.. или участник.</p>
					</div>
					
					<h1><span style="color: #db2121;">В:</span> Страшно ли е?</h1>
					<div>
						<p><span style="color: #db2121;">О:</span> Ужасяващо яко е. Целта ни не е да Ви докараме инфаркт, а да Ви заредим с адреналин, да се забавлявате максимално и да Ви дадем възможност да помислите. Надяваме се поне един от групата Ви да оцелее, за да разкаже уникалното изживяване.</p>
					</div>
					
					<h1><span style="color: #db2121;">В:</span> Мога ли да влезна в стаята с телефон в мен?</h1>
					<div>
						<p><span style="color: #db2121;">О:</span> Не. Всякакви телефони, камери, микрофони, записваща и друга подобно техника е забранена. Преди началото на играта ги оставяте при нас и ги получавате след като излезете.</p>
					</div>
				</div>
				</div>
					<br style="clear: both">
			</div>
			
			<div id="contact">
				<h3>Контакти</h3>
				<div class="contacts">
					<span style="background: url('images/phone.png') left bottom no-repeat; display: inline-block; background-size: 20px 20px; width: 20px; height: 20px;margin-right: 15px;"></span> 0897 779 332<br>
					<span style="background: url('images/mail.png') left bottom no-repeat; display: inline-block; background-size: 20px 20px; width: 20px; height: 20px;margin-right: 15px;"></span> contact@kingsroom.bg<br>
					<span style="background: url('images/location.png') left bottom no-repeat; display: inline-block; background-size: 20px 20px; width: 20px; height: 20px;margin-right: 15px;"></span> София, ул. Иван Рилски 15<br>
					<span style="background: url('images/fb.png') left bottom no-repeat; display: inline-block; background-size: 20px 20px; width: 20px; height: 20px;margin-right: 15px;"></span> <a target="_blank" style="color: white;" href="https://www.facebook.com/kingsroomit/">King's Room: It - Real Life Escape Room</a><br>
				</div>
				<div id="map"></div>
				<script>
				  function initMap() {
					var uluru = {lat: 42.689111, lng: 23.311588};
					var map = new google.maps.Map(document.getElementById('map'), {
					  zoom: 15,
					  center: uluru,
					  styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]
					});
					var marker = new google.maps.Marker({
					  position: uluru,
					  map: map,
					  icon: "images/marker.png"
					});
				  }
				</script>
				
				<script async defer
				src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCV8MAsqr6C4Dir4g7HsyvSzpsQks6e6NA&callback=initMap">
				</script>
			</div>
			
			<div id="about">
				<h3>Пишете ни</h3>
				<form style="margin-top: 20px;" class="form" action="#contact" method="post">
						Име:
						<input name="name" placeholder="" type="text" tabindex="6" required oninvalid="setCustomValidity('Моля въведете име')" onchange="try{setCustomValidity('')}catch(e){}">
						Имейл:
						<input name="email" placeholder="" type="email" tabindex="7" required oninvalid="setCustomValidity('Моля въведете валиден email')" onchange="try{setCustomValidity('')}catch(e){}">
						Телефон:
						<input name="phone" placeholder="" type="tel" tabindex="8" required oninvalid="setCustomValidity('Моля въведете валиден телефонен номер')" onchange="try{setCustomValidity('')}catch(e){}">
						Съобщение
						<textarea required oninvalid="setCustomValidity('Моля въведете съобщение')" onchange="try{setCustomValidity('')}catch(e){}" tabindex="9"></textarea>
						<br style="clear: both">
						<br style="clear: both">
						<div style="text-align: center;"><button class="book-button" name="submit" type="submit" id="contact-submit" data-submit="Изпраща се...">Изпрати</button></div>
						
					</form>
			</div>
			
			<div id="about">
				<h3>Партньори</h3>
				<div class="partners">
				<a href="http://vsichkistai.bg/" target="_blank"><img src="images/vsichkistai.png" /></a>
				</div>
			</div>
		</div>
	</main>
	
	<?php include 'footer.php'; ?>
</body>
</html>