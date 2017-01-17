<!DOCTYPE html>  
	<HTML> 
	<HEAD>
		<META charset="utf-8">
		<TITLE>Минск Спортивный</TITLE>
		<LINK REL="stylesheet" HREF="style_main.css" TYPE="text/css">
        <link rel="stylesheet" media="screen,projection" href="../Scripts/css/ui.totop.css" />
        <script type="text/javascript">
            var lastResFind=""; // последний удачный результат
            var copy_page=""; // копия страницы в ихсодном виде
            function TrimStr(s) {
                 s = s.replace( /^\s+/g, '');
              return s.replace( /\s+$/g, '');
            }
            function FindOnPage(inputId) {//ищет текст на странице, в параметр передается ID поля для ввода
              var obj = window.document.getElementById(inputId);
              var textToFind;

              if (obj) {
                textToFind = TrimStr(obj.value);//обрезаем пробелы
              } else {
                alert("Введенная фраза не найдена");
                return;
              }
              if (textToFind == "") {
                alert("Вы ничего не ввели");
                return;
              }

              if(document.body.innerHTML.indexOf(textToFind)=="-1")
              alert("Ничего не найдено, проверьте правильность ввода!");

              if(copy_page.length>0)
                    document.body.innerHTML=copy_page;
              else copy_page=document.body.innerHTML;


              document.body.innerHTML = document.body.innerHTML.replace(eval("/name="+lastResFind+"/gi")," ");//стираем предыдущие якори для скрола
              document.body.innerHTML = document.body.innerHTML.replace(eval("/"+textToFind+"/gi"),"<a name="+textToFind+" style='background:turquoise'>"+textToFind+"</a>"); //Заменяем найденный текст ссылками с якорем;
              lastResFind=textToFind; // сохраняем фразу для поиска, чтобы в дальнейшем по ней стереть все ссылки
              window.location = '#'+textToFind;//перемещаем скрол к последнему найденному совпадению
             } 
        </script>
	    <style type="text/css">
            html 
            {
                background: url(../Images/Backgrounds/WYXBr_7u2_c.jpg) no-repeat center center fixed;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
                height: auto;
                width: auto;
                cursor: url(../Cursors/cb_arrow.cur), pointer;
            }
            #main /*Блок с основным контентом*/
			{   
                position: relative;
                margin: 0 auto;
                width: 80%;
                background-color: #EEEBE8; 
                min-width: 800px;
                max-width: 1200px;                
			}
            #header /*Шапка сайта*/
            {
                position: relative;                
                /*margin-bottom: 20px;*/
                margin-top: 0px;                
                height: 250px;
                /*background: grey;*/
                background-image: url(../Images/Backgrounds/minsk-svisloch-panorama.jpg);
                background-repeat: no-repeat;
                background-size: 100% 100%;
            }
            #searchPage
            {
                position: absolute; /* Абсолютное позиционирование */
                bottom: 15px; /* Положение от нижнего края */
                right: 15px; /* Положение от правого края */
                line-height: 1px;                
            }
            
            .form-search 
            {
                  display: inline-block;
                  background: -moz-linear-gradient(#D3D3D3, #CACACA 50%, #A9A9A9 50%, #9B9B9B);
                  background: -ms-linear-gradient(#D3D3D3, #CACACA 50%, #A9A9A9 50%, #9B9B9B);
                  background: -o-linear-gradient(#D3D3D3, #CACACA 50%, #A9A9A9 50%, #9B9B9B);
                  background: -webkit-linear-gradient(#D3D3D3, #CACACA 50%, #A9A9A9 50%, #9B9B9B);
                  border-radius: 5px;
                  padding: 4px;
            }
            .form-search input 
            {
                  width: 60px;
                  height: 32px;
                  line-height: 32px;
                  font: 13px Helvetica, Arial, sans-serif; 
                  color:#6E7074;
                  text-shadow: 0 1px 0 #FFF;
                  -moz-transition: all .2s ease-out;
                  -webkit-transition: all .2s ease-out;
                  -o-transition: all .2s ease-out;
                  transition: all .2s ease-out;  
                  padding: 0 30px 0 6px; 
                  background-image: url(../Images/FormSearch/search.png), -moz-linear-gradient(#BCBCBC, #EBEBEB);
                  background-image: url(../Images/FormSearch/search.png), -ms-linear-gradient(#BCBCBC, #EBEBEB);
                  background-image: url(../Images/FormSearch/search.png), -o-linear-gradient(#BCBCBC, #EBEBEB);
                  background-image: url(../Images/FormSearch/search.png), -webkit-linear-gradient(#BCBCBC, #EBEBEB); 
                  background-repeat: no-repeat; 
                  background-position: 100% 50%, 100% 100%;
                  border: 1px solid #747474;
                  border-radius: 3px;
                  box-shadow: inset 0 1px 1px #575555, 0 1px 0 #FFF; 
            }
            .form-search input:focus 
            {
                  width: 160px;
                  box-shadow: inset 0 1px 1px #46575b, 0 1px 0 #FFF;
                  color: #25464D;
                  background-image: url(../Images/FormSearch/search.png), -moz-linear-gradient(#9CC2CA, #DFECEF);
                  background-image: url(../Images/FormSearch/search.png), -ms-linear-gradient(#9CC2CA, #DFECEF);
                  background-image: url(../Images/FormSearch/search.png), -o-linear-gradient(#9CC2CA, #DFECEF);
                  background-image: url(../Images/FormSearch/search.png), -webkit-linear-gradient(#9CC2CA, #DFECEF);
            }
            .formS
            {
                  display: inline-block;
                  background: -moz-linear-gradient(#D3D3D3, #CACACA 50%, #A9A9A9 50%, #9B9B9B);
                  background: -ms-linear-gradient(#D3D3D3, #CACACA 50%, #A9A9A9 50%, #9B9B9B);
                  background: -o-linear-gradient(#D3D3D3, #CACACA 50%, #A9A9A9 50%, #9B9B9B);
                  background: -webkit-linear-gradient(#D3D3D3, #CACACA 50%, #A9A9A9 50%, #9B9B9B);
                  border-radius: 5px;
                  padding: 4px; 
            }
            .formS input
            {
                 width: 60px;
                  height: 32px;
                  line-height: 32px;
                  font: 13px Helvetica, Arial, sans-serif; 
                  color:#6E7074;
                  text-shadow: 0 1px 0 #FFF;
                  -moz-transition: all .2s ease-out;
                  -webkit-transition: all .2s ease-out;
                  -o-transition: all .2s ease-out;
                  transition: all .2s ease-out;  
                  padding: 0 30px 0 6px;                    
                  background-repeat: no-repeat; 
                  background-position: 100% 50%, 100% 100%;
                  border: 1px solid #747474;
                  border-radius: 3px;
                  box-shadow: inset 0 1px 1px #575555, 0 1px 0 #FFF;
            }
            #footer /*Подвал сайта*/
            {
                position: relative;
                margin-top: 20px;
                margin-bottom: 0px;                
                height: 200px;
                /*background: #4A4E54;*/
                background-image: url(../Images/Backgrounds/Footer_Finish.jpg);
                background-repeat: repeat-y;
                background-size: 100% 100%;  
            }
            #menu
            {
                padding: 2px;
                position: relative;
                height:50px;
                background-color: #DAD4CD;
            }
            .menu_m
            {
                /*text-align: top;*/
                margin: 1px;
                position: relative;
                display: inline-block; 
                width: 24%;
                height: 90%; 
                background-repeat: no-repeat;
                background-size: 100% 100%;
            }
            .menu_m:hover
            {
                background-size: 100% 100%;
                background-repeat: no-repeat;                
                cursor: url(../Cursors/bf3_linkselect2.cur), pointer;
                /*transition: box-shadow 0.5s;
		        box-shadow: 0 0 15px #0E2A9A;*/                
            }
            #maps
            {
                background-image: url(../Buttons/KartsOff.png);
            }
            #maps:hover
            {
                background-image: url(../Buttons/KartsOn.png);                
            }
            #geog
            {
                background-image: url(../Buttons/GeogOff.png);
            }
            #geog:hover
            {
                background-image: url(../Buttons/GeogOn.png);                
            }
            #glav
            {
                background-image: url(../Buttons/GlavOff.png);
            }
            #glav:hover
            {
                background-image: url(../Buttons/GlavOn.png);                
            }
            #obrat
            {
                background-image: url(../Buttons/ObratOff.png);
            }
            #obrat:hover
            {
                background-image: url(../Buttons/ObratOn.png);                
            }
            .main_m /*Блок с названием*/
            {
                width: 100%;
                height: 50px;
                /*background-color: grey;*/
                text-align: left;
                margin-bottom: 20px;
                background-image: url(../Images/Backgrounds/Footer_8.jpg);
                background-repeat: repeat-y;
                background-size: 100% 100%;
                color: white;
                text-align: center;
                font-family: Buxton Sketch;
                font-size: 30px;
                padding-top: 10px;
            }
            .text_m /*Оформление всего сайта*/
            {
                padding-left: 2%;
                padding-right: 2%;
                font-size: 18px;
                text-align: justify;
            }
            .left_inf /*Блок с информацией*/
            {        
                margin: 1px;
                margin-left: 2%;                
                position: relative;
                display: inline-block;
                width: 65%;
                height: 100%;
                background-color:white; 
                -moz-box-shadow: 1px 1px 1px 1px #444;
                -webkit-box-shadow: 1px 1px 1px 1px #444;
                -o-box-shadow: 1px 1px 1px 1px #444;
                box-shadow: 1px 1px 1px 1px #444;
            }
            .right_inf /*Блок с дополнительной информацией*/
            {      
                /*background-color: green;*/
                vertical-align: top;
                width: 30%;
                position: relative;
                display: inline-block;                
                height: 100%;                
            }            
            .img_s
            {
                margin: 2%;
                width: 90%;   
                height: 300px;
            }
            #content #gallery1 
            {
                position: absolute;
                -moz-user-select: none;
                user-select: none;
                margin: 100px auto 0;
                text-align: center;	/*width: 800px;*/
            }
            #gallery1 a 
            {
                display: inline-block;
                height: 135px;
                position: relative;
                width: 180px;
                margin: 5px;
                /* CSS3 Prevent selections 
                -moz-user-select: none;
                -webkit-user-select: none;
                -khtml-user-select: none;
                user-select: none;*/
            }
            #gallery1 a img 
            {
                border: 8px solid #fff;
                border-bottom: 20px solid #fff;
                cursor: default;
                display: block;
                height: 100%;
                left: 0px;
                position: absolute;

                top: 0px;
                width: 100%;
                z-index: 1;

                /* -moz-transform: rotate(-20deg);
                -webkit-transform: rotate(-20deg);
                transform: rotate(-20deg);*/

                /* CSS3 Box sizing property - оформление боксами, пустое пространство между картинками*/
                -moz-box-sizing: border-box;
                -webkit-box-sizing: border-box;
                -o-box-sizing: border-box;
                box-sizing: border-box;

                /* CSS3 transition rules - возрват в изначалтьное состояние*/
                -webkit-transition: all 1.0s ease;
                -moz-transition: all 1.0s ease;
                -o-transition: all 1.0s ease;
                transition: all 1.0s ease;

                /* CSS3 Box Shadow - Тень от боксов*/
                -moz-box-shadow: 2px 2px 4px #444;
                -webkit-box-shadow: 2px 2px 4px #444;
                -o-box-shadow: 2px 2px 4px #444;
                box-shadow: 2px 2px 4px #444;
                cursor: zoom-in;
            }

            #gallery1 img:nth-child(4n-2) {left: 37.5%;}
            #gallery1 img:nth-child(4n-1) {left: 62.5%;}
            #gallery1 img:nth-child(4n) {left: 87.5%;}
            #gallery1 img:nth-child(n+5) {top: 75%;}

            #gallery1 a img:focus 
            {
                cursor: default;
                height: 250%;
                left: -150px;
                top: -100px;
                position: absolute;
                width: 250%;
                z-index: 25;
                pointer-events: none;	
                 -moz-transform: rotate(0deg);
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);

                /* CSS3 Box sizing property */
                -moz-box-sizing: border-box;
                -webkit-box-sizing: border-box;
                -o-box-sizing: border-box;
                box-sizing: border-box;

                /* CSS3 transition rules */
                -webkit-transition: all 2.0s ease;
                -moz-transition: all 2.0s ease;
                -o-transition: all 2.0s ease;
                transition: all 2.0s ease;

                /* CSS3 Box Shadow */
                -moz-box-shadow: 2px 2px 4px #444;
                -webkit-box-shadow: 2px 2px 4px #444;
                -o-box-shadow: 2px 2px 4px #444;
                box-shadow: 2px 2px 4px #444;
            }
            #clock
            {
              margin-top: 8px;
              position: fixed;
              top:0;
              right:0;
              z-index: 101;
            }
            #secondMenu
            {
                padding: 2px;
                position: relative;
                height:40px;
                background-color: #DAD4CD;
                margin-bottom: 5px;
            }
            .menu_s
            {
                margin: 1px;
                margin-left: 3px;
                margin-left: 3px;
                position: relative;
                display: inline-block; 
                width: 20%;
                height: 90%; 
                background-repeat: no-repeat;
                background-size: 100% 100%;
            }
            .menu_s:hover
            {
                background-size: 100% 100%;
                background-repeat: no-repeat;                
                cursor: url(../Cursors/bf3_linkselect2.cur), pointer;
            }
            a
            {
                color: #DAD4CD;
            }
            #ar
            {
                background-image: url(../Buttons/ArensOff.png);
            }
            #ar:hover
            {
                background-image: url(../Buttons/ArensOn.png);                
            }
            #dvor
            {
                background-image: url(../Buttons/DvorOff.png);
            }
            #dvor:hover
            {
                background-image: url(../Buttons/DvorOn.png);                
            }
            #kom
            {
                background-image: url(../Buttons/KomplOff.png); 
            }
            #kom:hover
            {
                background-image: url(../Buttons/KomplOn.png); 
            }
            #stad
            {
                background-image: url(../Buttons/StadOff.png); 
            }
            #stad:hover
            {
                background-image: url(../Buttons/StadOn.png); 
            }
            
        </style>
	</HEAD>  
		<BODY>
				<?php
					$MySQLConnection = mysql_connect('127.0.0.1', 'root', '');
					$MySQLSelectedDB = mysql_select_db('minsk', $MySQLConnection);
					mysql_query('SET NAMES utf8');
				?>
            <div id="main">
                <div id="header">
                    <div id="searchPage" align="center">                        
                        <form class="form-search" method="get">
                            <input type="text" id="text-to-find" value="">
                        </form>
                        <form class="formS" method="get">
                           <input type="button" onclick="javascript: FindOnPage('text-to-find'); return false;" value="Искать"/> 
                        </form>
                    </div>
                </div> 
                    <div id="menu" align="center">
                        <div class="menu_m" id="glav" onClick="window.open('../Index.html', '_self','')">
                            <!-- <p class="menu_text">Главная</p> -->
                        </div>
                        <div class="menu_m" id="maps" onClick="window.open('../MapMinsk.html', '_self','')">
                            <!-- <p class="menu_text">Карта Минска</p> -->
                        </div>
                        <div class="menu_m" id="geog" onClick="window.open('../MapBelarus.html', '_self','')">
                            <!-- <p class="menu_text">Географическое расположение</p> -->               
                        </div>
                        <div class="menu_m" id="obrat" onClick="window.open('../Feedback.php', '_self','')">
                            <!-- <p class="menu_text">Обратная связь</p> --> 
                        </div>            
                    </div>
                    <div id="secondMenu" align="center">                          
                        <a href="#Arens">
                            <div class="menu_s" id="ar"></div>
                        </a>
                        <a href="#Dvortsi">
                            <div class="menu_s" id="dvor"></div>
                        </a>
                        <a href="#Kompleks">
                            <div class="menu_s" id="kom"></div>
                        </a>
                        <a href="#Stadions">
                            <div class="menu_s" id="stad"></div>
                        </a>
                    </div>                    
                <div align="center" class="main_m">
                    <a name="Arens">Арены города минска</a>                    
                </div>        
                <!-- Минск арена -->
                    <div class="left_inf" align="center">
                        <img src="../Images/Sport/MinskArena.JPG" class="img_s">
                        <p class="text_m">
                            <?php
								$querySport = mysql_query("SELECT * FROM Sport WHERE id_Sport = 1");
								while($Sport = mysql_fetch_array($querySport))
								{
									print $Sport['Opisanie'] .'<br>';
								}
							?>
                        </p>
                        <div id="gallery1" align="center">
						    <!-- Первый ряд картинок -->
							<a><img src="../Images/Sport/MinskArena(1).JPG" tabindex="1" title="Схема арены" alt="Схема арены">
							<a><img src="../Images/Sport/MinskArena(2).jpg" tabindex="1"  title="Вид изнутри" alt="Вид изнутри"></a>
							<a><img src="../Images/Sport/MinskArena(3).jpg" tabindex="1"  title="Минск-Арена" alt="Минск-Арена"></a>
                            <!-- Второй ряд картинок -->
							<a><img src="../Images/Sport/MinskArena(4).jpg" tabindex="1"  title="Пустые трибуны" alt="Пустые трибуны"></a>						
							<a><img src="../Images/Sport/MinskArena(5).jpg" tabindex="1"  title="Мерроприятие на льду" alt="Мерроприятие на льду"></a>
							<a><img src="../Images/Sport/MinskArena(6).jpg" tabindex="1"  title="Заполненный зал" alt="Заполненный зал"></a>
						</div>
                    </div>
                    <div class="right_inf" align="center">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1174.3788982464043!2d27.482109371830237!3d53.936046710858236!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0xc4237da460429540!2z0JzQuNC90YHQui3QkNGA0LXQvdCw!5e0!3m2!1sru!2sru!4v1415813208770" width="100%" height="300px" frameborder="0" style="border:0">Ваш браузер не поддерживает плавающие фреймы!Или отсутствует соединение интернет!</iframe>
                    </div>
                <!-- Чижовка арена -->
                    <div class="left_inf" align="center">
                        <img src="../Images/Sport/ChijovkaArena.JPG" class="img_s">
                        <p class="text_m">
                            <?php
								$querySport = mysql_query("SELECT * FROM Sport WHERE id_Sport = 2");
								while($Sport = mysql_fetch_array($querySport))
								{
									print $Sport['Opisanie'] .'<br>';
								}
							?>
                        </p>
                        <div id="gallery1" align="center">
						    <!-- Первый ряд картинок -->
							<a><img src="../Images/Sport/ChijovkaArena(2).JPG" tabindex="1" title="Схема арены" alt="Схема арены">
							<a><img src="../Images/Sport/ChijovkaArena(1).jpg" tabindex="1"  title="Вид изнутри" alt="Вид изнутри"></a>
							<a><img src="../Images/Sport/ChijovkaArena(3).jpg" tabindex="1"  title="Минск-Арена" alt="Минск-Арена"></a>
                            <!-- Второй ряд картинок -->
							<a><img src="../Images/Sport/ChijovkaArena(4).jpg" tabindex="1"  title="Пустые трибуны" alt="Пустые трибуны"></a>				
							<a><img src="../Images/Sport/ChijovkaArena(5).jpg" tabindex="1"  title="Мерроприятие на льду" alt="Мерроприятие на льду"></a>
							<a><img src="../Images/Sport/ChijovkaArena(6).jpg" tabindex="1"  title="Тренировка команды по хоккею" alt="Тренировка команды по хоккею"></a>			
						</div>
                    </div>
                    <div class="right_inf" align="center">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2353.9198564370267!2d27.629535078804086!3d53.84428932478623!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x03c1b23077d22414!2z0KfQuNC20L7QstC60LAt0JDRgNC10L3QsA!5e0!3m2!1sru!2sru!4v1415813039967" frameborder="0" style="border:0" width="100%" height="300px">Ваш браузер не поддерживает плавающие фреймы!Или отсутствует соединение интернет!</iframe>
                    </div>
                <div align="center" class="main_m">
                    <a name="Dvortsi">Дворцы города минска</a>                   
                </div> 
                <!-- Ледовый дворец -->
                    <div class="left_inf" align="center">
                        <img src="../Images/Sport/LedoviDvorets.JPG" class="img_s">
                        <p class="text_m">
                             <?php
								$querySport = mysql_query("SELECT * FROM Sport WHERE id_Sport = 3");
								while($Sport = mysql_fetch_array($querySport))
								{
									print $Sport['Opisanie'] .'<br>';
								}
							?>
                        </p>
                        <div id="gallery1" align="center">
						    <!-- Первый ряд картинок -->
							<a><img src="../Images/Sport/LedoviDvorets(1).jpg" tabindex="1" title="Схема дворца" alt="Схема дворца">
							<a><img src="../Images/Sport/LedoviDvorets(2).jpg" tabindex="1"  title="Ледовый дворец" alt="Ледовый дворец"></a>
							<a><img src="../Images/Sport/LedoviDvorets(3).jpg" tabindex="1"  title="Ледовый дворец фасад здания" alt="Ледовый дворец фасад здания"></a>
                            <!-- Второй ряд картинок -->
							<a><img src="../Images/Sport/LedoviDvorets(4).jpg" tabindex="1"  title="Пустые трибуны" alt="Пустые трибуны"></a>				
							<a><img src="../Images/Sport/LedoviDvorets(5).jpg" tabindex="1"  title="Мерроприятие на льду" alt="Мерроприятие на льду"></a>
							<a><img src="../Images/Sport/LedoviDvorets(6).jpg" tabindex="1"  title="Подготовка льда" alt="Подготовка льда"></a>
						</div>                        
                    </div> 
                    <div class="right_inf" align="center">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9401.43695285007!2d27.486343!3d53.907592!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa44c83427123667a!2z0JvQtdC00L7QstGL0Lkg0LTQstC-0YDQtdGG!5e0!3m2!1sru!2s!4v1415817318467" width="100%" height="300px" frameborder="0" style="border:0">Ваш браузер не поддерживает плавающие фреймы!Или отсутствует соединение интернет!</iframe> 
                    </div>
                <!-- Дворец спорта -->
                        <div class="left_inf" align="center">
                        <img src="../Images/Sport/DvoretsSporta.jpg" class="img_s">
                        <p class="text_m">
                            <?php
								$querySport = mysql_query("SELECT * FROM Sport WHERE id_Sport = 4");
								while($Sport = mysql_fetch_array($querySport))
								{
									print $Sport['Opisanie'] .'<br>';
								}
							?>
                        </p>
                        <div id="gallery1" align="center">
						    <!-- Первый ряд картинок -->
							<a><img src="../Images/Sport/DvoretsSporta(1).jpg" tabindex="1" title="Схема арены" alt="Схема арены">
							<a><img src="../Images/Sport/DvoretsSporta(2).jpg" tabindex="1"  title="Вид изнутри" alt="Вид изнутри"></a>
							<a><img src="../Images/Sport/DvoretsSporta(3).jpg" tabindex="1"  title="Минск-Арена" alt="Минск-Арена"></a>
                            <!-- Второй ряд картинок -->
							<a><img src="../Images/Sport/DvoretsSporta(4).jpg" tabindex="1"  title="Спортивные мерроприятия" alt="Спортивные мерроприятия"></a>	
							<a><img src="../Images/Sport/DvoretsSporta(5).jpg" tabindex="1"  title="Мерроприятие на льду" alt="Мерроприятие на льду"></a>
							<a><img src="../Images/Sport/DvoretsSporta(6).jpg" tabindex="1"  title="Трибуны дворца спорта" alt="Трибуны дворца спорта"></a>
						</div>
                    </div>
                    <div class="right_inf" align="center">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1175.0856576196181!2d27.54989774966811!3d53.91093158329271!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x82cd21064959ac9e!2z0JTQstC-0YDQtdGGINGB0L_QvtGA0YLQsA!5e0!3m2!1sru!2s!4v1415865672235" width="100%" height="300px" frameborder="0" style="border:0">Ваш браузер не поддерживает плавающие фреймы!Или отсутствует соединение интернет!</iframe>
                    </div>
                    <div align="center" class="main_m">
                        <a name="Kompleks">Коплексы города минска</a>                   
                    </div>
                <!-- Силичи -->
                    <div class="left_inf" align="center">
                        <img src="../Images/Sport/Silichi.jpg" class="img_s">
                        <p class="text_m">
                            <?php
								$querySport = mysql_query("SELECT * FROM Sport WHERE id_Sport = 5");
								while($Sport = mysql_fetch_array($querySport))
								{
									print $Sport['Opisanie'] .'<br>';
								}
							?>
                        </p>
                        <div id="gallery1" align="center">
						    <!-- Первый ряд картинок -->
							<a><img src="../Images/Sport/Silichi(1).jpg" tabindex="1" title="Схема центра" alt="Схема центра">
							<a><img src="../Images/Sport/Silichi(2).jpg" tabindex="1"  title="Сноубордисты" alt="Сноубордисты"></a>
							<a><img src="../Images/Sport/Silichi(3).jpg" tabindex="1"  title="Силичи" alt="Силичи"></a>
                            <!-- Второй ряд картинок -->
							<a><img src="../Images/Sport/Silichi(4).jpg" tabindex="1"  title="Силичи фасад здания" alt="Силичи фасад здания"></a>	
							<a><img src="../Images/Sport/Silichi(5).jpg" tabindex="1"  title="Надпись на снегу" alt="Надпись на снегу"></a>
							<a><img src="../Images/Sport/Silichi(6).jpg" tabindex="1"  title="Люлька" alt="Люлька"></a>
						</div>
                    </div>
                    <div class="right_inf" align="center">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d18688.77777141848!2d27.836368121716216!3d54.160641449784535!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x57249f2974665a7f!2z0JPQvtGA0L3QvtC70YvQttC90YvQuSDRhtC10L3RgtGAINCh0LjQu9C40YfQuA!5e0!3m2!1sru!2s!4v1415866188181" width="100%" height="300px" frameborder="0" style="border:0">Ваш браузер не поддерживает плавающие фреймы!Или отсутствует соединение интернет!</iframe>
                    </div>
                <!-- Раубичи -->
                        <div class="left_inf" align="center">
                        <img src="../Images/Sport/Raubichi.jpg" class="img_s">
                        <p class="text_m">
                            <?php
								$querySport = mysql_query("SELECT * FROM Sport WHERE id_Sport = 6");
								while($Sport = mysql_fetch_array($querySport))
								{
									print $Sport['Opisanie'] .'<br>';
								}
							?>
                        </p>
                        <div id="gallery1" align="center">
						    <!-- Первый ряд картинок -->
							<a><img src="../Images/Sport/Raubichi(1).jpg" tabindex="1" title="Схема центра" alt="Схема центра">
							<a><img src="../Images/Sport/Raubichi(2).jpg" tabindex="1"  title="Вид изнутри" alt="Вид изнутри"></a>
							<a><img src="../Images/Sport/Raubichi(3).jpg" tabindex="1"  title="Раубичи" alt="Раубичи"></a>
                            <!-- Второй ряд картинок -->
							<a><img src="../Images/Sport/Raubichi(4).jpg" tabindex="1"  title="Траплин Раубичи" alt="Траплин Раубичи"></a>	
							<a><img src="../Images/Sport/Raubichi(5).jpg" tabindex="1"  title="Надпись на снегу" alt="Надпись на снегу"></a>
							<a><img src="../Images/Sport/Raubichi(6).jpg" tabindex="1"  title="Трамплины" alt="Трамплины"></a>
						</div>
                    </div>
                    <div class="right_inf" align="center">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4682.838536228109!2d27.699441014299577!3d54.066307725376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x7541c9406fc26e6a!2z0KDQsNGD0LHQuNGH0Lgg0KDQtdGB0L_Rg9Cx0LvQuNC60LDQvdGB0LrQuNC5INCm0LXQvdGC0YAg0J7Qu9C40LzQv9C40LnRgdC60L7QuSDQn9C-0LTQs9C-0YLQvtCy0LrQuCDQn9C-INCX0LjQvNC90LjQvCDQktC40LTQsNC8INCh0L_QvtGA0YLQsA!5e0!3m2!1sru!2sru!4v1415869126012" width="100%" height="300px" frameborder="0" style="border:0">Ваш браузер не поддерживает плавающие фреймы!Или отсутствует соединение интернет!</iframe>
                    </div>
                <div align="center" class="main_m">
                    <a name="Stadions">Стадионы города минска</a>                   
                </div> 
                <!-- Динамо стадион -->
                    <div class="left_inf" align="center">
                        <img src="../Images/Sport/StadionDinamo.jpg" class="img_s">
                        <p class="text_m">
                            <?php
								$querySport = mysql_query("SELECT * FROM Sport WHERE id_Sport = 7");
								while($Sport = mysql_fetch_array($querySport))
								{
									print $Sport['Opisanie'] .'<br>';
								}
							?>
                        </p>
                        <div id="gallery1" align="center">
						    <!-- Первый ряд картинок -->
							<a><img src="../Images/Sport/Dinamo(1).jpg" tabindex="1" title="Схема стадиона" alt="Схема стадиона">
							<a><img src="../Images/Sport/Dinamo(2).jpg" tabindex="1"  title="Вид изнутри" alt="Вид изнутри"></a>
							<a><img src="../Images/Sport/Dinamo(3).jpg" tabindex="1"  title="Динамо" alt="Динамо"></a>
                            <!-- Второй ряд картинок -->
							<a><img src="../Images/Sport/Dinamo(4).jpg" tabindex="1"  title="Трибуны Динамо" alt="Трибуны Динамо"></a>	
							<a><img src="../Images/Sport/Dinamo(5).jpg" tabindex="1"  title="Старое Динамо" alt="Старое Динамо"></a>
							<a><img src="../Images/Sport/Dinamo(6).jpg" tabindex="1"  title="Стадион вид сбоку" alt="Стадион вид сбоку"></a>
						</div>
                    </div>
                    <div class="right_inf" align="center">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1175.5216028594327!2d27.560163!3d53.895436!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4df6335f5dae8264!2z0KHRgtCw0LTQuNC-0L0g0JTQuNC90LDQvNC-!5e0!3m2!1sru!2s!4v1415914883998" width="100%" height="300px" frameborder="0" style="border:0">Ваш браузер не поддерживает плавающие фреймы!Или отсутствует соединение интернет!</iframe>
                    </div>
                <!-- Трактор стадион -->
                        <div class="left_inf" align="center">
                        <img src="../Images/Sport/Traktor.jpg" class="img_s">
                        <p class="text_m">
                            <?php
								$querySport = mysql_query("SELECT * FROM Sport WHERE id_Sport = 8");
								while($Sport = mysql_fetch_array($querySport))
								{
									print $Sport['Opisanie'] .'<br>';
								}
							?>
                        </p>
                        <div id="gallery1" align="center">
						    <!-- Первый ряд картинок -->
							<a><img src="../Images/Sport/Traktor(1).jpg" tabindex="1" title="Схема стадиона" alt="Схема стадиона">
							<a><img src="../Images/Sport/Traktor(2).jpg" tabindex="1"  title="Вид изнутри" alt="Вид изнутри"></a>
							<a><img src="../Images/Sport/Traktor(3).jpg" tabindex="1"  title="Трактор" alt="Трактор"></a>
						</div>
                    </div>
                    <div class="right_inf" align="center">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2351.8300394367666!2d27.617414542353263!3d53.881449455009474!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xcf5912ae76133ca8!2z0KHRgtCw0LTQuNC-0L0g0KLRgNCw0LrRgtC-0YA!5e0!3m2!1sru!2s!4v1415875067302" width="100%" height="300px" frameborder="0" style="border:0">Ваш браузер не поддерживает плавающие фреймы!Или отсутствует соединение интернет!</iframe>
                    </div>
                <div id="footer"></div>
            </div>
            <div id="clock">
                <script src="http://101widgets.com/25040001/140/50">
                    Ваш браузер не поддерживает плавающие фреймы!Или отсутствует соединение интернет!
                </script>
            </div>
            
        <!-- jquery -->
        <script src="../Scripts/js/jquery-1.7.2.min.js" type="text/javascript"></script>
            <!-- easing plugin ( optional ) -->
            <script src="../Scripts/js/easing.js" type="text/javascript"></script>
            <!-- UItoTop plugin -->
            <script src="../Scripts/js/jquery.ui.totop.js" type="text/javascript"></script>
            <!-- Starting the plugin -->
            <script type="text/javascript">
            $(document).ready(function() {
            /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
            */

            $().UItoTop({ easingType: 'easeOutQuart' });

            });
        </script>
                        
		</BODY>  <!-- Конец тела -->
</HTML> 