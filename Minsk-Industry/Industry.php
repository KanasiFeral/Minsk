<!DOCTYPE html>  
	<HTML> 
	<HEAD>
		<META charset="utf-8">
		<TITLE>Минск Промышленный</TITLE>
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
            #atlant_atlant
            {
                background-image: url(../Buttons/mzhOff.png);
            }
            #atlant_atlant:hover
            {
                background-image: url(../Buttons/mzhOn.png);   
            }
            #bel_bel
            {
                background-image: url(../Buttons/BelOmoOff.png);
            }
            #bel_bel:hover
            {
                background-image: url(../Buttons/BelOmoOn.png);
            }
            #traktor_traktor
            {
                background-image: url(../Buttons/MtzOff.png); 
            }
            #traktor_traktor:hover
            {
                background-image: url(../Buttons/MtzOn.png); 
            }
            #podsh_podsh
            {
                background-image: url(../Buttons/MpzOff.png); 
            }
            #podsh_podsh:hover
            {
                background-image: url(../Buttons/MpzOn.png); 
            }
            #komm_komm
            {
                background-image: url(../Buttons/KommunarkaOff.png); 
            }
            #komm_komm:hover
            {
                background-image: url(../Buttons/KommunarkaOn.png); 
            }
            #slod_slod
            {
                background-image: url(../Buttons/SlodOff.png); 
            }
            #slod_slod:hover
            {
                background-image: url(../Buttons/SlodOn.png); 
            }
            #lush_lush
            {
                background-image: url(../Buttons/LuchOff.png); 
            }
            #lush_lush:hover
            {
                background-image: url(../Buttons/LuchOn.png); 
            }
            #tag_tag
            {
                background-image: url(../Buttons/MzktOff.png); 
            }
            #tag_tag:hover
            {
                background-image: url(../Buttons/MzktOn.png); 
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
                    <a href="#atlant">
                        <div class="menu_s" id="atlant_atlant"></div>
                    </a>
                    <a href="#bel">
                        <div class="menu_s" id="bel_bel"></div>
                    </a>
                    <a href="#traktor">
                        <div class="menu_s" id="traktor_traktor"></div>
                    </a>
                    <a href="#podsh">
                        <div class="menu_s" id="podsh_podsh"></div>
                    </a>
                    <a href="#komm">
                        <div class="menu_s" id="komm_komm"></div>
                    </a>
                    <a href="#slod">
                        <div class="menu_s" id="slod_slod"></div>
                    </a>
                    <a href="#luch">
                        <div class="menu_s" id="lush_lush"></div>
                    </a>
                    <a href="#tag">
                        <div class="menu_s" id="tag_tag"></div>
                    </a>
                </div>
                <div align="center" class="main_m">
                    <a name="Arens">Заводы города минска</a>                    
                </div>        
                <!-- Минский завод холодильников -->
                    <div class="left_inf" align="center">
                        <img src="../Images/Industry/Atlant.jpg" class="img_s">
                        <a name="atlant"><b>Минский завод холодильников</b></a>
                        <p class="text_m">
                            <?php
								$queryIndustry = mysql_query("SELECT * FROM Industry WHERE id_Industry = 1");
								while($Industry = mysql_fetch_array($queryIndustry))
								{
									print $Industry['Opisanie'] .'<br>';
								}
							?>
                        </p>
                        <div id="gallery1" align="center">
						    <!-- Первый ряд картинок -->
							<a><img src="../Images/Industry/Atlant(1).JPG" tabindex="1" title="Большой оперный театр" alt="Большой оперный театр">
							<a><img src="../Images/Industry/Atlant(2).jpg" tabindex="1"  title="Вид изнутри" alt="Вид изнутри"></a>
							<a><img src="../Images/Industry/Atlant(3).jpg" tabindex="1"  title="Ночной вид театра" alt="Ночной вид театра"></a> 
						</div>
                    </div>
                    <div class="right_inf" align="center">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d587.3689182355536!2d27.524180602948412!3d53.92329262339726!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dbc56507955465%3A0xe641c300a81e98e!2z0L_RgNC-0YHQvy4g0J_QvtCx0LXQtNC40YLQtdC70LXQuSA2MSwg0J7QkNCeINCQ0YLQu9Cw0L3Rgiwg0JzQuNC90YHQuiwg0JHQtdC70LDRgNGD0YHRjA!5e0!3m2!1sru!2sru!4v1415950951540" width="100%" height="300px" frameborder="0" style="border:0">Ваш браузер не поддерживает плавающие фреймы!Или отсутствует соединение интернет!</iframe>
                    </div>
                <!-- БелОМО -->
                     <div class="left_inf" align="center">
                        <img src="../Images/Industry/Belomo.jpg" class="img_s">
                        <a name="bel"><b>БелОМО</b></a>
                        <p class="text_m">  
                            <?php
								$queryIndustry = mysql_query("SELECT * FROM Industry WHERE id_Industry = 2");
								while($Industry = mysql_fetch_array($queryIndustry))
								{
									print $Industry['Opisanie'] .'<br>';
								}
							?>
                        </p>
                        <div id="gallery1" align="center">
						    <!-- Первый ряд картинок -->
							<a><img src="../Images/Industry/Belomo(1).JPG" tabindex="1" title="Военная оптика" alt="Военная оптика">
							<a><img src="../Images/Industry/Belomo(2).jpg" tabindex="1"  title="Оптика для сьемки" alt="Оптика для сьемки"></a>
							<a><img src="../Images/Industry/Belomo(3).jpg" tabindex="1"  title="Хозяйственные товары" alt="Хозяйственные товары"></a> 
                            <!-- Второй ряд картинок -->
                            <a><img src="../Images/Industry/Belomo(4).JPG" tabindex="1" title="Парник" alt="Парник">
							<a><img src="../Images/Industry/Belomo(5).jpg" tabindex="1"  title="Душевая кабинка" alt="Душевая кабинка"></a>
							<a><img src="../Images/Industry/Belomo(6).jpg" tabindex="1"  title="Петли для дверей" alt="Петли для дверей"></a> 
						</div>
                    </div>
                    <div class="right_inf" align="center">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9399.67493297321!2d27.623491!3d53.91542!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6960d17f648d41f!2z0JHQtdC70J7QnNCe!5e0!3m2!1sru!2s!4v1415953444579" width="100%" height="300px" frameborder="0" style="border:0">Ваш браузер не поддерживает плавающие фреймы!Или отсутствует соединение интернет!</iframe>
                    </div>
                <!-- Минский тракторный завод -->
                    <div class="left_inf" align="center">
                        <img src="../Images/Industry/Tractor.jpg" class="img_s">
                        <a name="traktor"><b>Минский Тракторный Завод</b></a><br>
                        <p class="text_m">
                            <?php
								$queryIndustry = mysql_query("SELECT * FROM Industry WHERE id_Industry = 3");
								while($Industry = mysql_fetch_array($queryIndustry))
								{
									print $Industry['Opisanie'] .'<br>';
								}
							?>
                        </p>
                        <div id="gallery1" align="center">
						    <!-- Первый ряд картинок -->
							<a><img src="../Images/Industry/Traktor(1).jpg" tabindex="1" title="Внутри завода" alt="Внутри завода">
							<a><img src="../Images/Industry/Traktor(2).jpg" tabindex="1"  title="Продукция" alt="Продукция"></a>
							<a><img src="../Images/Industry/Tractor(3).jpg" tabindex="1"  title="Фассад здания" alt="Фассад здания"></a> 
                            <!-- Второй ряд картинок -->
                            <a><img src="../Images/Industry/Tractor(4).JPG" tabindex="1" title="Продукция" alt="Продукция">
							<a><img src="../Images/Industry/Tractor(5).jpg" tabindex="1"  title="Производство" alt="Производство"></a>
							<a><img src="../Images/Industry/Traktor(6).jpg" tabindex="1"  title="Белаз" alt="Белаз"></a> 
						</div>
                    </div>
                    <div class="right_inf" align="center">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1175.6924240136755!2d27.615240949743587!3d53.8893633639681!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dbce38d39145c7%3A0x9b7a3a7c226f6beb!2z0KLRgNCw0LrRgtC-0YDQvdGL0Lkg0LfQsNCy0L7QtA!5e0!3m2!1sru!2sru!4v1415956067300" width="100%" height="300px" frameborder="0" style="border:0">Ваш браузер не поддерживает плавающие фреймы!Или отсутствует соединение интернет!</iframe>
                    </div>
                <!-- Минский подшипниковый завод -->
                    <div class="left_inf" align="center">
                        <img src="../Images/Industry/Podshipnikovyiy-zavod.jpg" class="img_s">
                        <a name="podsh"><b>Минский подшипниковый завод</b></a>
                        <p class="text_m">
                            <?php
								$queryIndustry = mysql_query("SELECT * FROM Industry WHERE id_Industry = 4");
								while($Industry = mysql_fetch_array($queryIndustry))
								{
									print $Industry['Opisanie'] .'<br>';
								}
							?>
                        </p>
                        <div id="gallery1" align="center">
						    <!-- Первый ряд картинок -->
							<a><img src="../Images/Industry/Podshipnikovyiy-zavod(1).jpg" tabindex="1" title="Производимая продукция" alt="Производимая продукция">
							<a><img src="../Images/Industry/Podshipnikovyiy-zavod(2).jpg" tabindex="1"  title="Фассад здания" alt="Фассад здания"></a>
							<a><img src="../Images/Industry/Podshipnikovyiy-zavod(3).jpg" tabindex="1"  title="Вид внутри" alt="Вид внутри"></a> 
						</div>
                    </div>
                    <div class="right_inf" align="center">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d8571.51524463745!2d42.082118!3d57.514455!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x33a7638b77843e36!2z0J7QkNCeICLQnNCY0J3QodCa0JjQmSDQn9Ce0JTQqNCY0J_QndCY0JrQntCS0KvQmSDQl9CQ0JLQntCUIiAo0J7QkNCeICLQnNCf0JciKQ!5e0!3m2!1sru!2s!4v1415958266883" width="100%" height="300px" frameborder="0" style="border:0">Ваш браузер не поддерживает плавающие фреймы!Или отсутствует соединение интернет!</iframe>
                    </div>
                <!-- Фабрика Коммунарка -->
                       <div class="left_inf" align="center">
                        <img src="../Images/Industry/Kommunarka.jpg" class="img_s">
                        <a name="komm"><b>Фабрика Коммунарка</b></a>
                        <p class="text_m">
                            <?php
								$queryIndustry = mysql_query("SELECT * FROM Industry WHERE id_Industry = 5");
								while($Industry = mysql_fetch_array($queryIndustry))
								{
									print $Industry['Opisanie'] .'<br>';
								}
							?>
                        </p>
                        <div id="gallery1" align="center">
						    <!-- Первый ряд картинок -->
							<a><img src="../Images/Industry/Kommunarka(1).jpg" tabindex="1" title="Производимая продукция" alt="Производимая продукция">
							<a><img src="../Images/Industry/Kommunarka(2).jpg" tabindex="1"  title="Производство продукции" alt="Производство продукции"></a>
							<a><img src="../Images/Industry/Kommunarka(3).jpg" tabindex="1"  title="Вид внутри" alt="Вид внутри"></a> 
                            <!-- Второй ряд картинок -->
                            <a><img src="../Images/Industry/Kommunarka(4).jpg" tabindex="1" title="Коммунарка" alt="Коммунарка">
							<a><img src="../Images/Industry/Kommunarka(5).jpg" tabindex="1"  title="Транспортировка" alt="Транспортировка"></a>
							<a><img src="../Images/Industry/Kommunarka(6).jpg" tabindex="1"  title="Продукция фабрики" alt="Продукция фабрики"></a> 
						</div>
                    </div>
                    <div class="right_inf" align="center">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9406.172242930925!2d27.580833!3d53.886551!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1be1e2a63ed3af19!2z0KTQsNCx0YDQuNC60LAgItCa0L7QvNC80YPQvdCw0YDQutCwIg!5e0!3m2!1sru!2s!4v1415959957689" width="100%" height="300px" frameborder="0" style="border:0">Ваш браузер не поддерживает плавающие фреймы!Или отсутствует соединение интернет!</iframe>
                    </div>
                <!-- Фабрика Слодыч -->
                        <div class="left_inf" align="center">
                        <img src="../Images/Industry/Slodich.jpg" class="img_s">
                        <a name="slod"><b>Фабрика Слодыч</b></a>
                        <p class="text_m">
                            <?php
								$queryIndustry = mysql_query("SELECT * FROM Industry WHERE id_Industry = 6");
								while($Industry = mysql_fetch_array($queryIndustry))
								{
									print $Industry['Opisanie'] .'<br>';
								}
							?>
                        </p>
                        <div id="gallery1" align="center">
						    <!-- Первый ряд картинок -->
							<a><img src="../Images/Industry/Slodich(1).jpg" tabindex="1" title="Производимая продукция" alt="Производимая продукция">
							<a><img src="../Images/Industry/Slodich(2).jpg" tabindex="1"  title="Производимая продукция" alt="Производимая продукция"></a>
							<a><img src="../Images/Industry/Slodich(3).jpg" tabindex="1"  title="Производимая продукция" alt="Производимая продукция"></a> 
                            <!-- Второй ряд картинок -->
                            <a><img src="../Images/Industry/Slodich(4).jpg" tabindex="1" title="Производство продукции" alt="Производство продукции">
							<a><img src="../Images/Industry/Slodich(5).jpg" tabindex="1"  title="Магазин Слодыч" alt="Магазин Слодыч"></a>
							<a><img src="../Images/Industry/Slodich(6).jpg" tabindex="1"  title="Магазин Слодыч" alt="Магазин Слодыч"></a> 
						</div>
                    </div>
                    <div class="right_inf" align="center">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2350.74673797536!2d27.640707390217553!3d53.90070528515171!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3d6258df99aab26f!2z0KHQu9C-0LTRi9GH!5e0!3m2!1sru!2s!4v1415974617980" width="100%" height="300px" frameborder="0" style="border:0">Ваш браузер не поддерживает плавающие фреймы!Или отсутствует соединение интернет!</iframe>
                    </div>
                <!-- Завод Луч -->
                    <div class="left_inf" align="center">
                        <img src="../Images/Industry/Luch.jpg" class="img_s">
                        <a name="luch"><b>Завод Луч</b></a>
                        <p class="text_m">
                            <?php
								$queryIndustry = mysql_query("SELECT * FROM Industry WHERE id_Industry = 7");
								while($Industry = mysql_fetch_array($queryIndustry))
								{
									print $Industry['Opisanie'] .'<br>';
								}
							?>
                        </p>
                        <div id="gallery1" align="center">
						    <!-- Первый ряд картинок -->
							<a><img src="../Images/Industry/Luch(1).jpg" tabindex="1" title="Производимая продукция" alt="Производимая продукция">
							<a><img src="../Images/Industry/Luch(2).jpg" tabindex="1"  title="Производимая продукция" alt="Производимая продукция"></a>
							<a><img src="../Images/Industry/Luch(3).jpg" tabindex="1"  title="Вывеска магазина Луч" alt="Вывеска магазина Луч"></a> 
                            <!-- Второй ряд картинок -->
                            <a><img src="../Images/Industry/Luch(4).jpg" tabindex="1" title="Рекламный плакат Луч" alt="Рекламный плакат Луч">
							<a><img src="../Images/Industry/Luch(5).jpg" tabindex="1"  title="Магазин Луч" alt="Магазин Луч"></a>
							<a><img src="../Images/Industry/Luch(6).jpg" tabindex="1"  title="Магазин Луч" alt="Магазин Луч"></a> 
						</div>
                    </div>
                    <div class="right_inf" align="center">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4698.655258233859!2d27.615834!3d53.92592300000002!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xff0e02e69c4a030a!2z0JvRg9GH!5e0!3m2!1sru!2s!4v1415975172482" width="100%" height="300px" frameborder="0" style="border:0">Ваш браузер не поддерживает плавающие фреймы!Или отсутствует соединение интернет!</iframe>
                    </div>
                <!-- Минский завод колесных тягачей -->
                    <div class="left_inf" align="center">
                        <img src="../Images/Industry/Tagachi.jpg" class="img_s">
                        <a name="tag"><b>Минский завод колесных тягачей</b></a>
                        <p class="text_m">
                            <?php
								$queryIndustry = mysql_query("SELECT * FROM Industry WHERE id_Industry = 8");
								while($Industry = mysql_fetch_array($queryIndustry))
								{
									print $Industry['Opisanie'] .'<br>';
								}
							?>
                        </p>
                        <div id="gallery1" align="center">
						    <!-- Первый ряд картинок -->
							<a><img src="../Images/Industry/Tagachi(1).jpg" tabindex="1" title="Производство продукции" alt="Производство продукции">
							<a><img src="../Images/Industry/Tagachi(2).jpg" tabindex="1"  title="Производство продукции" alt="Производство продукции"></a>
							<a><img src="../Images/Industry/Tagachi(3).jpg" tabindex="1"  title="Производимая продукция" alt="Производимая продукция"></a> 
                            <!-- Второй ряд картинок -->
                            <a><img src="../Images/Industry/Tagachi(4).jpg" tabindex="1" title="Минский завод колесных тягачей" alt="Минский завод колесных тягачей">
							<a><img src="../Images/Industry/Tagachi(5).jpg" tabindex="1"  title="Производство продукции" alt="Производство продукции"></a>
							<a><img src="../Images/Industry/Tagachi(6).jpg" tabindex="1"  title="Производство продукции" alt="Производство продукции"></a> 
						</div>
                    </div>
                    <div class="right_inf" align="center">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2353.157823928404!2d27.671427512689203!3d53.85784146260109!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0xc4e041dcf066aa9f!2z0JzQuNC90YHQutC40Lkg0LfQsNCy0L7QtCDQutC-0LvQtdGB0L3Ri9GFINGC0Y_Qs9Cw0YfQtdC5!5e0!3m2!1sru!2sru!4v1415975985719" width="100%" height="300px" frameborder="0" style="border:0">Ваш браузер не поддерживает плавающие фреймы!Или отсутствует соединение интернет!</iframe>
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