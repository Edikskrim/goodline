<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>...</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="js/phaser.min.js" type="text/javascript"></script>
 	<script src="js/game.js" type="text/javascript"></script>
 	<script src="js/gameButtonPlay.js" type="text/javascript"></script>
</head>
<body>
    <div class ="header">
    	<div class="mid">
    		<header>
    			<img src="img/panal.png">
    		</header>
   		</div>
    </div>
	<div class ="content">
		<div class="mid">
		    <div  align="center">
		    <br>
		    <b>
		    На сайт напали инопланетные пришельцы, он не работает :(<br> 
    		Как только исправим это - лампочка справа загорится.<br>
    		А вы можете скоротать время за игрой :)<br>
    		</b>
    		<br>
    		</div>
	
			<img src="img/не работает.png">
			<p align="center"><b>Сайт сломался, но мы целы и уже чиним доступ! Вы можете воспользоватся мобильным приложением "Техподдержка Good Line", чтобы:</b></p>
			<div id="content2">
			<div class="info">
				
				<div class="list">
					<ol>
					  <li>Проверить состояние счета.</li>
					  <li>Оплатить услуги.</li>
					  <li>Включить отсрочку платежа.</li>
					  <li>Посмотреть свой тариф.</li>
					  <li>Включить/отключить блокировку интернета.</li>
					  <li>Написать оператору в чат.</li>
					</ol>
				</div>
				<div class="download">
					<a href="https://play.google.com/store/apps/details?id=info.goodline.mobile"><img src="img/download-google_play.png"></a>
					<a href="https://itunes.apple.com/ru/app/tehpodderzka-good-line/id1004945874?l=en&mt=8"><img src="img/download-appstore.png"></a>
				</div>
			</div>
			<p align="center"><b>Можно пообщатся с нами по телефону, обратившись в контакт-центр:</b></p>
			<div class="contact">
				<ul>
				  <li>
				  <p>Кемерово, Кедровка, Промышленновский, Лесная поляна: </p>
				  <p>Новокузнецк:</p>
				  <p>Белово, Бачатский, Инской, Грамотеино, Краснобродский:</p>
				  <p>Гурьевск:</p>
				  <p>Зеленогорский:</p>
				  <p>Киселевск:</p>
				  <p>Ленинск-Кузнецк, Полысаево:</p>
				  <p>Прокопьевск:</p>
				  <p>Юрга:</p>

				  </li>
				  <li>
				  <p>45-25-25</p>
				  <p>20-00-00</p>
				  <p>9-55-55</p>
				  <p>5-21-20</p>
				  <p>2-51-71</p>
				  <p>2-22-00</p>
				  <p>4-92-92</p>
				  <p>64-35-35</p>
				  <p>2-03-03</p>
				  </li>
				</ul> 
			</div>
		</div>
			
		</div>
	</div>
	<div class ="game">
		<div class="gameButton"> 
			<input type="button" value="Играть" id="playGame" onmousedown="viewDiv(), restart()">
		</div>
	       
			<div id="phaser-demo"></div>
	</div>
</body>
</html>