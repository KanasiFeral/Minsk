<!DOCTYPE html>  
	<HTML> 
	<HEAD>
		<META charset="utf-8">
		<TITLE>Минск Студенческий</TITLE>
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
                /*margin: 1px;
                margin-left: 2px;
                margin-left: 2px;*/
                position: relative;
                display: inline-block; 
                width: 11.9%;
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
            #secondMenu a
            {
                color: #DAD4CD;
            }
            #belgu
            {
                background-image: url(../Buttons/BguOff.png);
            }
            #belgu:hover
            {
                background-image: url(../Buttons/BguOn.png);                
            }
            #belntu
            {
                background-image: url(../Buttons/BntuOff.png);
            }
            #belntu:hover
            {
                background-image: url(../Buttons/BntuOn.png);                
            }
            #belsuir
            {
                background-image: url(../Buttons/BsuirOff.png); 
            }
            #belsuir:hover
            {
                background-image: url(../Buttons/BsuirOn.png); 
            }
            #belgeu
            {
                background-image: url(../Buttons/BgeuOff.png); 
            }
            #belgeu:hover
            {
                background-image: url(../Buttons/BgeuOn.png); 
            }
            #akademka
            {
                background-image: url(../Buttons/AkadUprOff.png); 
            }
            #akademka:hover
            {
                background-image: url(../Buttons/AkadUprOn.png); 
            }
            #marb_marb
            {
                background-image: url(../Buttons/VarbOff.png); 
            }
            #marb_marb:hover
            {
                background-image: url(../Buttons/VarbOn.png); 
            }
            #vishgks
            {
                background-image: url(../Buttons/VgksOff.png); 
            }
            #vishgks:hover
            {
                background-image: url(../Buttons/VgksOn.png); 
            }
            #belguki
            {
                background-image: url(../Buttons/BgukiOff.png); 
            }
            #belguki:hover
            {
                background-image: url(../Buttons/BgukiOn.png); 
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
                    <a href="#BGU">
                        <div class="menu_s" id="belgu"></div>
                    </a>
                    <a href="#BNTU">
                        <div class="menu_s" id="belntu"></div>
                    </a>
                    <a href="#BSUIR">
                        <div class="menu_s" id="belsuir"></div>
                    </a>
                    <a href="#BGEU">
                        <div class="menu_s" id="belgeu"></div>
                    </a>
                    <a href="#AkUpr">
                        <div class="menu_s" id="akademka"></div>
                    </a>
                    <a href="#MARB">
                        <div class="menu_s" id="marb_marb"></div>
                    </a>
                    <a href="#VGKS">
                        <div class="menu_s" id="vishgks"></div>
                    </a>
                    <a href="#BGUKI">
                        <div class="menu_s" id="belguki"></div>
                    </a>
                </div>
                <div align="center" class="main_m">
                    <a name="Arens">Учебные заведения Минска</a>                  
                </div>        
                <!-- БГУ -->
                    <div class="left_inf" align="center">                        
                        <img src="../Images/Education/BGU.JPG" class="img_s">
                        <a name="BGU"><b>Белорусский государственный университет</b></a>
                        <p class="text_m">
                            <?php
								$queryEducation = mysql_query("SELECT * FROM Education WHERE id_Education = 1");
								while($Education = mysql_fetch_array($queryEducation))
								{
									print $Education['Opisanie'] .'<br>';
								}
							?>
                        </p>
                        <div id="gallery1" align="center">
						    <!-- Первый ряд картинок -->
							<a><img src="../Images/Education/BGU(1).JPG" tabindex="1" title="Фассад здания" alt="Фассад здания">
							<a><img src="../Images/Education/BGU(2).jpg" tabindex="1"  title="Белорусский государственный университет" alt="Белорусский государственный университет"></a>
							<a><img src="../Images/Education/BGU(3).jpg" tabindex="1"  title="Белорусский государственный университет" alt="Белорусский государственный университет"></a>
                            <!-- Второй ряд картинок -->
							<a><img src="../Images/Education/BGU(4).jpg" tabindex="1"  title="Вид сбоку" alt="Вид сбоку"></a>					
							<a><img src="../Images/Education/BGU(5).jpg" tabindex="1"  title="Спортивный комплекс" alt="Спортивный комплекс"></a>
							<a><img src="../Images/Education/BGU(6).jpg" tabindex="1"  title="Вид сбоку" alt="Вид сбоку"></a>
						</div>
                    </div>
                    <div class="right_inf" align="center">
                       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2351.1363512500384!2d27.54643149999999!3d53.89378039999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x61bdf8323afbfd08!2z0JHQldCb0J7QoNCj0KHQodCa0JjQmSDQk9Ce0KHQo9CU0JDQoNCh0KLQktCV0J3QndCr0Jkg0KPQndCY0JLQldCg0KHQmNCi0JXQog!5e0!3m2!1sru!2s!4v1416035733056" width="100%" height="300px" frameborder="0" style="border:0">Ваш браузер не поддерживает плавающие фреймы!Или отсутствует соединение интернет!</iframe>
                    </div>    
                <!-- БНТУ -->
                    <div class="left_inf" align="center">                        
                        <img src="../Images/Education/BNTU.jpg" class="img_s">
                        <a name="BNTU"><b>Белорусский национальный технический университет</b></a>
                        <p class="text_m">
                            <?php
								$queryEducation = mysql_query("SELECT * FROM Education WHERE id_Education = 2");
								while($Education = mysql_fetch_array($queryEducation))
								{
									print $Education['Opisanie'] .'<br>';
								}
							?>
                        </p>
                        <div id="gallery1" align="center">
						    <!-- Первый ряд картинок -->
							<a><img src="../Images/Education/BNTU(1).JPG" tabindex="1" title="Белорусский национальный технический университет" alt="Белорусский национальный технический университет">
							<a><img src="../Images/Education/BNTU(2).jpg" tabindex="1"  title="Фассад здания" alt="Фассад здания"></a>
							<a><img src="../Images/Education/BNTU(3).jpg" tabindex="1"  title="БНТУ" alt="БНТУ"></a>
                            <!-- Второй ряд картинок -->
							<a><img src="../Images/Education/BNTU(4).jpg" tabindex="1"  title="Вид сбоку" alt="Вид сбоку"></a>					
							<a><img src="../Images/Education/BNTU(5).jpg" tabindex="1"  title="Прыжки с заброшенного корпуса БНТУ" alt="Прыжки с заброшенного корпуса БНТУ"></a>
							<a><img src="../Images/Education/BNTU(6).jpg" tabindex="1"  title="БНТУ" alt="БНТУ"></a>
						</div>
                    </div>
                    <div class="right_inf" align="center">
                       <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9398.376940502492!2d27.592835!3d53.921186!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2ffffa160d78c41f!2z0JHQtdC70L7RgNGD0YHRgdC60LjQuSDQvdCw0YbQuNC-0L3QsNC70YzQvdGL0Lkg0YLQtdGF0L3QuNGH0LXRgdC60LjQuSDRg9C90LjQstC10YDRgdC40YLQtdGC!5e0!3m2!1sru!2s!4v1416036906319" width="100%" height="300px" frameborder="0" style="border:0">Ваш браузер не поддерживает плавающие фреймы!Или отсутствует соединение интернет!</iframe>
                    </div>
                <!-- БГУИР -->
                       <div class="left_inf" align="center">                        
                        <img src="../Images/Education/BSUIR.jpg" class="img_s">
                        <a name="BSUIR"><b>Белорусский государственный университет информатики и радиоэлектроники</b></a>
                        <p class="text_m">
                            <?php
								$queryEducation = mysql_query("SELECT * FROM Education WHERE id_Education = 3");
								while($Education = mysql_fetch_array($queryEducation))
								{
									print $Education['Opisanie'] .'<br>';
								}
							?>
                        </p>
                        <div id="gallery1" align="center">
						    <!-- Первый ряд картинок -->
							<a><img src="../Images/Education/BSUIR(1).JPG" tabindex="1" title="Белорусский государственный университет информатики и радиоэлектроники" alt="Белорусский государственный университет информатики и радиоэлектроники">
							<a><img src="../Images/Education/BSUIR(2).jpg" tabindex="1"  title="Фассад здания" alt="Фассад здания"></a>
							<a><img src="../Images/Education/BSUIR(3).jpg" tabindex="1"  title="БГУИР" alt="БГУИР"></a>
                            <!-- Второй ряд картинок -->
							<a><img src="../Images/Education/BSUIR(4).jpg" tabindex="1"  title="КСиС" alt="КСиС"></a>					
							<a><img src="../Images/Education/BSUIR(5).jpg" tabindex="1"  title="БГУИР" alt="БГУИР"></a>
							<a><img src="../Images/Education/BSUIR(6).jpg" tabindex="1"  title="Студенты БГУИР" alt="БНТУ"></a>
						</div>
                    </div>
                    <div class="right_inf" align="center">
                       <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9399.16641760769!2d27.594835!3d53.917679!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbf9eab7e6e9a7d89!2z0JHQk9Cj0JjQoCwg0JrQvtGA0L_Rg9GBIOKEljE!5e0!3m2!1sru!2s!4v1416038257570" width="100%" height="300px" frameborder="0" style="border:0">Ваш браузер не поддерживает плавающие фреймы!Или отсутствует соединение интернет!</iframe>
                    </div> 
                <!-- БГЭУ -->
                       <div class="left_inf" align="center">                        
                        <img src="../Images/Education/BGEU.jpg" class="img_s">
                        <a name="BGEU"><b>Белорусский государственный экономический университет</b></a>
                        <p class="text_m">
                            <?php
								$queryEducation = mysql_query("SELECT * FROM Education WHERE id_Education = 4");
								while($Education = mysql_fetch_array($queryEducation))
								{
									print $Education['Opisanie'] .'<br>';
								}
							?>
                        </p>
                        <div id="gallery1" align="center">
						    <!-- Первый ряд картинок -->
							<a><img src="../Images/Education/BGEU(1).JPG" tabindex="1" title="БГЭУ" alt="БГЭУ">
							<a><img src="../Images/Education/BGEU(2).jpg" tabindex="1"  title="Памятник студенту возле главного корпуса БГЭУ" alt="Памятник студенту возле главного корпуса БГЭУ"></a>
							<a><img src="../Images/Education/BGEU(3).jpg" tabindex="1"  title="Фассад здания" alt="Фассад здания"></a>                            
						</div>
                    </div>
                    <div class="right_inf" align="center">
                       <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4704.191352925686!2d27.604977!3d53.876727000000024!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa2b64d930c2e49f2!2z0JHQtdC70L7RgNGD0YHRgdC60LjQuSDQs9C-0YHRg9C00LDRgNGB0YLQstC10L3QvdGL0Lkg0Y3QutC-0L3QvtC80LjRh9C10YHQutC40Lkg0YPQvdC40LLQtdGA0YHQuNGC0LXRgg!5e0!3m2!1sru!2s!4v1416039185148" width="100%" height="300px" frameborder="0" style="border:0">Ваш браузер не поддерживает плавающие фреймы!Или отсутствует соединение интернет!</iframe>
                    </div>
                <!-- Академия управления при Президенте РБ -->
                    <div class="left_inf" align="center">                        
                        <img src="../Images/Education/AkUpr.jpg" class="img_s">
                        <a name="AkUpr"><b>Академия управления при Президенте Республики Беларусь</b></a>
                        <p class="text_m">
                            <?php
								$queryEducation = mysql_query("SELECT * FROM Education WHERE id_Education = 5");
								while($Education = mysql_fetch_array($queryEducation))
								{
									print $Education['Opisanie'] .'<br>';
								}
							?>
                        </p>
                        <div id="gallery1" align="center">
						    <!-- Первый ряд картинок -->
							<a><img src="../Images/Education/AkUpr(1).JPG" tabindex="1" title="БГЭУ" alt="БГЭУ">
							<a><img src="../Images/Education/AkUpr(2).jpg" tabindex="1"  title="Памятник студенту возле главного корпуса БГЭУ" alt="Памятник студенту возле главного корпуса БГЭУ"></a>
							<a><img src="../Images/Education/AkUpr(3).jpg" tabindex="1"  title="Фассад здания" alt="Фассад здания"></a>
                            <!-- Второй ряд картинок -->
                            <a><img src="../Images/Education/AkUpr(4).JPG" tabindex="1" title="БГЭУ" alt="БГЭУ">
							<a><img src="../Images/Education/AkUpr(5).jpg" tabindex="1"  title="Памятник студенту возле главного корпуса БГЭУ" alt="Памятник студенту возле главного корпуса БГЭУ"></a>
							<a><img src="../Images/Education/AkUpr(6).jpg" tabindex="1"  title="Фассад здания" alt="Фассад здания"></a>
						</div>
                    </div>
                    <div class="right_inf" align="center">
                       <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9406.144565390194!2d27.538977!3d53.886674!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4b24833dbd5c0604!2z0JDQutCw0LTQtdC80LjRjyDQo9C_0YDQsNCy0LvQtdC90LjRjyDQn9GA0Lgg0J_RgNC10LfQuNC00LXQvdGC0LUg0KDQtdGB0L_Rg9Cx0LvQuNC60Lgg0JHQtdC70LDRgNGD0YHRjA!5e0!3m2!1sru!2s!4v1416040261975" width="100%" height="300px" frameborder="0" style="border:0">Ваш браузер не поддерживает плавающие фреймы!Или отсутствует соединение интернет!</iframe>
                    </div>
                <!-- ВАРБ -->
                    <div class="left_inf" align="center">                        
                        <img src="../Images/Education/MARB.jpg" class="img_s">
                        <a name="MARB"><b>Военная академия Республики Беларусь</b></a>
                        <p class="text_m">
                            <?php
								$queryEducation = mysql_query("SELECT * FROM Education WHERE id_Education = 6");
								while($Education = mysql_fetch_array($queryEducation))
								{
									print $Education['Opisanie'] .'<br>';
								}
							?>
                        </p>
                        <div id="gallery1" align="center">
						    <!-- Первый ряд картинок -->
							<a><img src="../Images/Education/MARB(1).JPG" tabindex="1" title="ВАРБ" alt="ВАРБ">
							<a><img src="../Images/Education/MARB(2).jpg" tabindex="1"  title="Солдаты на плацу" alt="Солдаты на плацу"></a>
							<a><img src="../Images/Education/MARB(3).jpg" tabindex="1"  title="Солдаты заняты делом" alt="Солдаты заняты делом"></a>
                            <!-- Второй ряд картинок -->
                            <a><img src="../Images/Education/MARB(4).JPG" tabindex="1" title="Выпускники" alt="Выпускники">
							<a><img src="../Images/Education/MARB(5).jpg" tabindex="1"  title="Важное мерроприятие" alt="Важное мерроприятие"></a>
							<a><img src="../Images/Education/MARB(6).jpg" tabindex="1"  title="Важное мерроприятие" alt="Важное мерроприятие"></a>
						</div>
                    </div>
                    <div class="right_inf" align="center">
                       <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4694.93369950857!2d27.732604!3d53.958977000000004!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6951ee410af9795a!2z0JLQkNCg0JE!5e0!3m2!1sru!2s!4v1416052221666" width="100%" height="300px" frameborder="0" style="border:0">Ваш браузер не поддерживает плавающие фреймы!Или отсутствует соединение интернет!</iframe>
                    </div>
                <!-- ВГКС -->
                     <div class="left_inf" align="center">                        
                        <img src="../Images/Education/VGKS.jpg" class="img_s">
                        <a name="VGKS"><b>Высший государственный колледж связи</b></a>
                        <p class="text_m">
                            <?php
								$queryEducation = mysql_query("SELECT * FROM Education WHERE id_Education = 7");
								while($Education = mysql_fetch_array($queryEducation))
								{
									print $Education['Opisanie'] .'<br>';
								}
							?>
                        </p>
                        <div id="gallery1" align="center">
						    <!-- Первый ряд картинок -->
							<a><img src="../Images/Education/VGKS(1).JPG" tabindex="1" title="ВГКС" alt="ВГКС">
							<a><img src="../Images/Education/VGKS(2).jpg" tabindex="1"  title="ВГКС" alt="ВГКС"></a>
							<a><img src="../Images/Education/VGKS(3).jpg" tabindex="1"  title="Фассад здания" alt="Фассад здания"></a> 
						</div>
                    </div>
                    <div class="right_inf" align="center">
                       <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2349.431656335908!2d27.6667942!3d53.92407470000002!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dbce95167a3af1%3A0x93f544bbf2df4bb!2z0JLQk9Ca0KEsINGD0LsuINCk0YDQsNC90YbRi9GB0LrQsCDQodC60L7RgNC40L3RiyA4LzIsINCc0LjQvdGB0LosINCR0LXQu9Cw0YDRg9GB0Yw!5e0!3m2!1sru!2s!4v1416053742154" width="100%" height="300px" frameborder="0" style="border:0">Ваш браузер не поддерживает плавающие фреймы!Или отсутствует соединение интернет!</iframe>
                    </div>  
                <!-- Белорусский государственный университет культуры и искусств -->
                         <div class="left_inf" align="center">                        
                        <img src="../Images/Education/BGUKI.jpg" class="img_s">
                        <a name="BGUKI"><b>Белорусский государственный университет культуры и искусств</b></a>
                        <p class="text_m">
                            <?php
								$queryEducation = mysql_query("SELECT * FROM Education WHERE id_Education = 8");
								while($Education = mysql_fetch_array($queryEducation))
								{
									print $Education['Opisanie'] .'<br>';
								}
							?>
                        </p>
                        <div id="gallery1" align="center">
						    <!-- Первый ряд картинок -->
							<a><img src="../Images/Education/BGUKI(1).JPG" tabindex="1" title="БГУКИ" alt="БГУКИ">
							<a><img src="../Images/Education/BGUKI(2).jpg" tabindex="1"  title="Вид изнутри" alt="Вид изнутри"></a>
							<a><img src="../Images/Education/BGUKI(3).jpeg" tabindex="1"  title="Фассад здания" alt="Фассад здания"></a> 
						</div>
                    </div>
                    <div class="right_inf" align="center">
                       <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9406.04083048191!2d27.54196!3d53.887135!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa3ef379013296d31!2z0JHQtdC70L7RgNGD0YHRgdC60LjQuSDQs9C-0YHRg9C00LDRgNGB0YLQstC10L3QvdGL0Lkg0YPQvdC40LLQtdGA0YHQuNGC0LXRgiDQutGD0LvRjNGC0YPRgNGLINC4INC40YHQutGD0YHRgdGC0LI!5e0!3m2!1sru!2s!4v1416054378516" width="100%" height="300px" frameborder="0" style="border:0">Ваш браузер не поддерживает плавающие фреймы!Или отсутствует соединение интернет!</iframe>
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