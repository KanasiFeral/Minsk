<!DOCTYPE html>  
	<HTML> 
	<HEAD>
		<META charset="utf-8">
		<TITLE>Минск в иллюстрациях</TITLE> <!-- Загаловок страницы -->
		<LINK REL="stylesheet" HREF="Main-Style.css" TYPE="text/css">
        <link rel="stylesheet" media="screen,projection" href="Scripts/css/ui.totop.css" />
		<script type="text/javascript" src="script.js"></script>		
		<style type="text/css">
            html 
            {
                background: url(Images/Backgrounds/WYXBr_7u2_c.jpg) no-repeat center center fixed;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
                height: auto;
                width: auto;       
                cursor: url(Cursors/cb_arrow.cur), pointer;
            }        
			#main
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
                background-image: url(Images/Backgrounds/minsk-svisloch-panorama.jpg);
                background-repeat: no-repeat;
                background-size: 100% 100%;
            }
            #footer /*Подвал сайта*/
            {
                position: relative;
                margin-top: 20px;
                margin-bottom: 0px;                
                height: 200px;
                /*background: #4A4E54;*/
                background-image: url(Images/Backgrounds/Footer_Finish.jpg);
                background-repeat: repeat-y;
                background-size: 100% 100%;          
            }
            .menu_text
            {
                font-size: 16px;
                font-style: italic;
                text-align: center
            }
            #menu
            {
                padding: 2px;
                position: relative;
                height:50px;
                background-color: #DAD4CD;
                margin-bottom: 20px;
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
                cursor: url(Cursors/bf3_linkselect2.cur), pointer;
                /*transition: box-shadow 0.5s;
		        box-shadow: 0 0 15px #0E2A9A;*/                
            }
            #maps
            {
                background-image: url(Buttons/KartsOff.png);
            }
            #maps:hover
            {
                background-image: url(Buttons/KartsOn.png);                
            }
            #geog
            {
                background-image: url(Buttons/GeogOff.png);
            }
            #geog:hover
            {
                background-image: url(Buttons/GeogOn.png);                
            }
            #glav
            {
                background-image: url(Buttons/GlavOff.png);
            }
            #glav:hover
            {
                background-image: url(Buttons/GlavOn.png);                
            }
            #obrat
            {
                background-image: url(Buttons/ObratOff.png);
            }
            #obrat:hover
            {
                background-image: url(Buttons/ObratOn.png);                
            }
            #main_content
            {
                font-family: Buxton Sketch;
            }
            #clock
            {
              margin-top: 8px;
              position: fixed;
              top:0;
              right:0;
              z-index: 101;
            }            
            </style>
	</HEAD>  
		<BODY> <!-- Тело документа -->
		
		<div id="main">
            <div id="header"></div>            
            <div id="menu" align="center">
                <div class="menu_m" id="glav" onClick="window.open('Index.html', '_self','')">
                    <!-- <p class="menu_text">Главная</p> -->
                </div>
                <div class="menu_m" id="maps" onClick="window.open('MapMinsk.html', '_self','')">
                    <!-- <p class="menu_text">Карта Минска</p> -->
                </div>
                <div class="menu_m" id="geog" onClick="window.open('MapBelarus.html', '_self','')">
                    <!-- <p class="menu_text">Географическое расположение</p> -->               
                </div>
                <div class="menu_m" id="obrat" onClick="window.open('Feedback.html', '_self','')">
                    <!-- <p class="menu_text">Обратная связь</p> --> 
                </div>
            </div>
                <p class="menu_text">
                    Все ваши пожелания, недовольства и предложения можете выразить в данной форме!!!
                </p>
                <form action="Feedback.php" method="post"> 
						<div align="center"> 
                        От кого(e-mail)<br>
                        <input type="text" name="mail_to" size="40"><br>
						Teма<br> 
                        <input type="text" name="title" size="40"><br> 
                        Сообщение<br> 
                        <textarea name="mess" rows="10" cols="40"></textarea> 
                        <br> 
                        <input type="submit" value="Отправить" name="submit"></div><br>
       			</form> 

                <?php
					if(isset($_POST['submit'])) 
					{
						$title = substr(htmlspecialchars(trim($_POST['title'])), 0, 1000); 
						$mess =  substr(htmlspecialchars(trim($_POST['mess'])), 0, 1000000); 
						// $to - кому отправляем 
						$to = 'zicise@mail.ru'; 
						// $from - от кого 
						$from = $_POST['mail_to'];
						// функция, которая отправляет наше письмо
						mail($to, $title, $mess, 'From:'.$from); 
						echo '<center>Спасибо! Ваше письмо отправлено.</center>'; 
					} 

				?>
            <div id="footer" align="center"></div>
		</div>
            <div id="clock">
                <script src="http://101widgets.com/25040001/140/50"></script>
                <noscript>
                	Ваш браузер не поддерживает плавающие фреймы!Или отсутствует соединение интернет!
                </noscript>
            </div>
		
            <script src="Scripts/js/jquery-1.7.2.min.js" type="text/javascript"></script>
            <!-- easing plugin ( optional ) -->
            <script src="Scripts/js/easing.js" type="text/javascript"></script>
            <!-- UItoTop plugin -->
            <script src="Scripts/js/jquery.ui.totop.js" type="text/javascript"></script>
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