<!DOCTYPE html>  
	<HTML> 
	<HEAD>
		<META charset="utf-8">
		<TITLE>Минск Театральный</TITLE>
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
            #secondMenu a
            {
                color: #DAD4CD;
            }
            #operka_operka
            {
                background-image: url(../Buttons/OperkaOff.png);
            }
            #operka_operka:hover
            {
                background-image: url(../Buttons/OperkaOn.png);                
            }
            #gor_gor
            {
                background-image: url(../Buttons/GorkogoOff.png);
            }
            #gor_gor:hover
            {
                background-image: url(../Buttons/GorkogoOn.png);                
            }
            #molod_molod
            {
                background-image: url(../Buttons/MolodOff.png); 
            }
            #molod_molod:hover
            {
                background-image: url(../Buttons/MolodOn.png); 
            }
            #lal_lal
            {
                background-image: url(../Buttons/LalkiOff.png); 
            }
            #lal_lal:hover
            {
                background-image: url(../Buttons/LalkiOn.png); 
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
                    <a href="#operka">
                        <div class="menu_s" id="operka_operka"></div>
                    </a>
                    <a href="#gorkogo">
                        <div class="menu_s" id="gor_gor"></div>
                    </a>    
                    <a href="#molod">
                        <div class="menu_s" id="molod_molod"></div>
                    </a>
                    <a href="#Lalki">
                        <div class="menu_s" id="lal_lal"></div>
                    </a>
                </div>
                <div align="center" class="main_m">
                    <a name="Arens">Театры города минска</a>                 
                </div>        
                <!-- Театр оперы и балета минск -->
                    <div class="left_inf" align="center">                        
                        <img src="../Images/Theatre/Operka.JPG" class="img_s">
                        <a name="operka"><b>Театр оперы и балета минск</b></a>
                        <p class="text_m">
                            <?php
								$queryTheatre = mysql_query("SELECT * FROM Theatre WHERE id_Theatre = 1");
								while($Theatre = mysql_fetch_array($queryTheatre))
								{
									print $Theatre['Opisanie'] .'<br>';
								}
							?>
                        </p>
                        <div id="gallery1" align="center">
						    <!-- Первый ряд картинок -->
							<a><img src="../Images/Theatre/Operka(1).JPG" tabindex="1" title="Большой оперный театр" alt="Большой оперный театр">
							<a><img src="../Images/Theatre/Operka(2).jpg" tabindex="1"  title="Вид изнутри" alt="Вид изнутри"></a>
							<a><img src="../Images/Theatre/Operka(3).jpg" tabindex="1"  title="Ночной вид театра" alt="Ночной вид театра"></a>
                            <!-- Второй ряд картинок -->
							<a><img src="../Images/Theatre/Operka(4).jpg" tabindex="1"  title="Вид сбогу" alt="Вид сбогу"></a>					
							<a><img src="../Images/Theatre/Operka(5).jpg" tabindex="1"  title="Строительство театра" alt="Строительство театра"></a>
							<a><img src="../Images/Theatre/Operka(6).jpg" tabindex="1"  title="Вид изнутри" alt="Вид изнутри"></a>
						</div>
                    </div>
                    <div class="right_inf" align="center">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1175.1013451471933!2d27.561803220903723!3d53.91037402636469!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x68dcff0ab63167c0!2z0JHQvtC70YzRiNC-0Lkg0YLQtdCw0YLRgA!5e0!3m2!1sru!2s!4v1415909853748" width="100%" height="300px" frameborder="0" style="border:0">Ваш браузер не поддерживает плавающие фреймы!Или отсутствует соединение интернет!</iframe>
                    </div>
                <!-- Театр имени Горького -->
                    <div class="left_inf" align="center">                       
                        <img src="../Images/Theatre/Gorkogo.JPG" class="img_s">
                        <a name="gorkogo"><b>Театр имени Горького</b></a>
                        <p class="text_m">
                           <?php
								$queryTheatre = mysql_query("SELECT * FROM Theatre WHERE id_Theatre = 2");
								while($Theatre = mysql_fetch_array($queryTheatre))
								{
									print $Theatre['Opisanie'] .'<br>';
								}
							?>
                        </p>
                        <div id="gallery1" align="center">
						    <!-- Первый ряд картинок -->
							<a><img src="../Images/Theatre/Gorkogo(1).JPG" tabindex="1" title="Театр имени Горького" alt="Театр имени Горького">
							<a><img src="../Images/Theatre/Gorkogo(2).jpg" tabindex="1"  title="Вид изнутри" alt="Вид изнутри"></a>
							<a><img src="../Images/Theatre/Gorkogo(3).jpg" tabindex="1"  title="Репертуар театра" alt="Репертуар театра"></a>
                            <!-- Второй ряд картинок -->
							<a><img src="../Images/Theatre/Gorkogo(4).jpg" tabindex="1"  title="Репертуар театра" alt="Репертуар театра"></a>				
							<a><img src="../Images/Theatre/Gorkogo(5).jpg" tabindex="1"  title="Вид с улицы" alt="Вид с улицы"></a>
							<a><img src="../Images/Theatre/Gorkogo(6).jpg" tabindex="1"  title="Фассад здания" alt="Фассад здания"></a>			
						</div>
                    </div>
                    <div class="right_inf" align="center">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2350.935548058375!2d27.55102199999999!3d53.897349500000026!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0xd352a9a2081042d8!2z0KLQtdCw0YLRgCDQuNC80LXQvdC4INCT0L7RgNGM0LrQvtCz0L4!5e0!3m2!1sru!2s!4v1415913539299" width="100%" height="300px" frameborder="0" style="border:0">Ваш браузер не поддерживает плавающие фреймы!Или отсутствует соединение интернет!</iframe>
                    </div>
                <!-- Молодежный театр -->
                    <div class="left_inf" align="center">                       
                        <img src="../Images/Theatre/Molod.JPG" class="img_s">
                        <a name="molod"><b>Молодежный театр</b></a>
                        <p class="text_m">
                            <?php
								$queryTheatre = mysql_query("SELECT * FROM Theatre WHERE id_Theatre = 3");
								while($Theatre = mysql_fetch_array($queryTheatre))
								{
									print $Theatre['Opisanie'] .'<br>';
								}
							?>
                        </p>
                        <div id="gallery1" align="center">
						    <!-- Первый ряд картинок -->
							<a><img src="../Images/Theatre/Molod(1).JPG" tabindex="1" title="Театр кукол" alt="Театр кукол">
							<a><img src="../Images/Theatre/Molod(2).jpg" tabindex="1"  title="Куклы" alt="Куклы"></a>
							<a><img src="../Images/Theatre/Molod(3).jpg" tabindex="1"  title="Куклы" alt="Куклы"></a>	
						</div>
                    </div>
                    <div class="right_inf" align="center">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2349.83015425941!2d27.554788999999996!3d53.916993999999995!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dbcf9018bb58df%3A0xad6c117604aa7ec3!2z0JzQvtC70L7QtNC10LbQvdGL0Lkg0YLQtdCw0YLRgA!5e0!3m2!1sru!2sru!4v1421054081633" width="100%" height="300" frameborder="0" style="border:0">Ваш браузер не поддерживает плавающие фреймы!Или отсутствует соединение интернет!</iframe>
                    </div>
                    <!-- Театр кукол -->
                    <div class="left_inf" align="center">                       
                        <img src="../Images/Theatre/Lalki.JPG" class="img_s">
                        <a name="Lalki"><b>Театр кукол</b></a>
                        <p class="text_m">
                            <?php
								$queryTheatre = mysql_query("SELECT * FROM Theatre WHERE id_Theatre = 4");
								while($Theatre = mysql_fetch_array($queryTheatre))
								{
									print $Theatre['Opisanie'] .'<br>';
								}
							?>
                        </p>
                        <div id="gallery1" align="center">
						    <!-- Первый ряд картинок -->
							<a><img src="../Images/Theatre/Lalki(1).JPG" tabindex="1" title="Молодежный театр" alt="Молодежный театр">
							<a><img src="../Images/Theatre/Lalki(2).jpg" tabindex="1"  title="Молодежный театр" alt="Молодежный театр"></a>
							<a><img src="../Images/Theatre/Lalki(3).jpg" tabindex="1"  title="Молодежный театр" alt="Молодежный театр"></a>	
						</div>
                    </div>
                    <div class="right_inf" align="center">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2350.822317614032!2d27.563464!3d53.899361999999996!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dbcfc15b2933b1%3A0x2cf36e3c32469f29!2z0KLQtdCw0YLRgCDQutGD0LrQvtC7!5e0!3m2!1sru!2sru!4v1421053883342" width="100%" height="300" frameborder="0" style="border:0">Ваш браузер не поддерживает плавающие фреймы!Или отсутствует соединение интернет!</iframe>
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