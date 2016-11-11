<?php
ob_start();
session_start();
error_reporting(E_ALL);
$startTime = 1412169477;
$curTime = time();
$period = 8;
$passedHours = ($curTime - $startTime) / 3600;
$realPassedHours = substr($passedHours,0,strpos($passedHours,"."));
$realPassedHours = (int)$realPassedHours;
$neededPeriod = $realPassedHours/$period;

$posCrop = strpos($neededPeriod, '.'); // поиск позиции точки с конца строки
if(!$posCrop){
    $realNeededPeriod = (int)$neededPeriod;
}else{
    $realNeededPeriod = substr((int)$neededPeriod,0,strpos($neededPeriod,"."));
}
$remainTickets = 96 - ($realNeededPeriod *10);
$showRemainTickets = (int)$remainTickets;
?>
<!DOCTYPE html>
<html>
<head>
    <script src="//cdn.abtest.ru/js/31487.js"></script>
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />
    <title>PROdiplom.by</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
    <meta content="telephone=no" name="format-detection">
    <link rel="stylesheet" type="text/css" href="css/style2.css"/>
    <link rel="stylesheet" type="text/css" href="css/slider_new.css"/>
    <link rel="stylesheet" type="text/css" href="css/datePicker.css" /> <!--for datepicker -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script> 
    <script type="text/javascript" src="js/jquery.localscroll.js"></script><!-- scroll page --> 
	<script type="text/javascript" src="js/jquery.scrollto.js"></script> <!-- scroll page --> 
	<script type="text/javascript" src="js/slides.min.jquery.js"></script> <!-- for slider --> 
	<script type="text/javascript" src="js/date.js"></script> <!-- for datepicker --> 
	<script type="text/javascript" src="js/jquery.datePicker-2.1.2.js"></script><!-- for datepicker --> 
    <!--COUNTDOWN-->
     <script type="text/javascript" src="js/jquery.lwtCountdown-0.9.5.js"></script>  
     <link rel="stylesheet" type="text/css" href="css/coundown.css" />  

    <!-- Yandex map -->
    <script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=vgP8c9LDsH5OgkVtO2IYkWoHCiPUPYJc&id=map"></script>
    <!-- Yandex map -->

    
	<script>
		$(function(){
        $("#map").click(function(){ $(".novsi").css("display","none");})
  $.localScroll({<!-- scroll -->
                  duration: 1000,
                  hash: false });	
                  
   $('#inputDate1').datePicker(); <!-- datepicker -->
            
                $(".nameWork").css("background-image", "url(images/theme.png)")
                $(".nameSubj").css("background-image", "url(images/subject.png)")
                
                  
            	$('#countdown_dashboard').countDown({<!--  countDown  -->
					targetDate: {
						'day': 		31,
						'month': 	12,
						'year': 	2020,
						'hour': 	22,
						'min': 		0,
						'sec': 		0					}
				});                  
});

flag2=1;
function openDiv(){
    if(flag==1){
        document.getElementById("open").style.display="block";
        $(".botImg1").css("display","block");
         flag=0;
    }else{
        document.getElementById("open").style.display="none";
        flag=1;
        $(".botImg1").css("display","none");
    }
}
   
function openDiv2(){
    if(flag2==1){
        document.getElementById("open2").style.display="block";
          $(".botImg2").css("display","block");
    flag2=0;
    }else{
        document.getElementById("open2").style.display="none";
		flag2=1;
          $(".botImg2").css("display","block");
        
    }
}
function openLi(txt){
     $(".nameWork").html(txt);
    $(".nameWork").css("background-image", "url(images/back_inp_text_arr.png)");
}
function openLiSubj(txt){
     $(".nameSubj").html(txt);
    $(".nameSubj").css("background-image", "url(images/back_inp_text_arr.png)")
     
}
$(document).mouseup(function (e) {
    var container = $("#open");
    var container2 = $("#open2");
    if (container.has(e.target).length === 0){
        container.css("display","none");
        flag=1;
    }
       if (container2.has(e.target).length === 0){
        container2.css("display","none");
        flag2=1;
    }
});

flagFree =1;
</script> 
<!--[if lt IE 9]>
<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
<style rel="stylesheet" type="text/css" >
   #inputDate1,#name_inp,#mail_inp,#phone_inp,#file{
    
    padding-left:10px; 
    line-height:40px;
}
.help h1 {
font: 30px Tahoma, Arial,sans-serif;
}
.help .right_form_order_inner h1 {
    margin-top:40px;
}
.help .action_timer_inner h2 {
    margin-top:30px;
}
.help .action_timer_inner {
font-family:tahoma !important;
}

    
#name_inp,#mail_inp,#phone_inp,#inputDate1 {
background: url(images/back_inp_text.png) center center no-repeat
}
</style>
<script>
$(function(){$('#name_inp').val("Ваше имя");
             $('#mail_inp').val("E-mail");
             $('#phone_inp').val("Телефон");
             $('#inputDate1').val("Выбрать срок выполнения");
});

</script>
<![endif]-->

<script type="text/javascript">
$(document).ready(function(){
  var currentPosition = 0;
  var slideWidth = 900;
  var slides = $('.slide');
  var numberOfSlides = slides.length;

  // Remove scrollbar in JS
  $('#slidesContainer').css('overflow', 'hidden');

  // Wrap all .slides with #slideInner div
  slides
    .wrapAll('<div id="slideInner"></div>')
    // Float left to display horizontally, readjust .slides width
	.css({
      'float' : 'left',
      'width' : slideWidth
    });

  // Set #slideInner width equal to total width of all slides
  $('#slideInner').css('width', slideWidth * numberOfSlides);

  // Insert controls in the DOM
  $('#slideshow')
    .prepend('<span class="control" id="leftControl">Clicking moves left</span>')
    .append('<span class="control" id="rightControl">Clicking moves right</span>');

  // Hide left arrow control on first load
  manageControls(currentPosition);

  // Create event listeners for .controls clicks
  $('.control')
    .bind('click', function(){
    // Determine new position
	currentPosition = ($(this).attr('id')=='rightControl') ? currentPosition+1 : currentPosition-1;
    
	// Hide / show controls
    manageControls(currentPosition);
    // Move slideInner using margin-left
    $('#slideInner').animate({
      'marginLeft' : slideWidth*(-currentPosition)
    });
  });

  // manageControls: Hides and Shows controls depending on currentPosition
  function manageControls(position){
    // Hide left arrow if position is first slide
	if(position==0){ $('#leftControl').hide() } else{ $('#leftControl').show() }
	// Hide right arrow if position is last slide
    if(position==numberOfSlides-1){ $('#rightControl').hide() } else{ $('#rightControl').show() }
  }	
});
</script>

<script type="text/javascript">
$(document).ready(function(){
  $(".bubble").click(function() {
    //Ширина и высота всего документа
    var HeightDocument = $(document).height();
    var WidthDocument = $(document).width();
    //Ширина и высота окна браузера
    var HeightScreen = $(window).height();
    //Плавное анимационное наложение на страницу серого фона
    <!-- $(".modal_bg").css({"width":"100%","height":"100%"}); -->
    /* $(".modal_bg").css({"width":WidthDocument,"height":HeightDocument}); */
        $(".modal_bg").css({"width":WidthDocument,"height":HeightDocument,"display":"block","opacity":"0.9"});
    <!-- $(".modal_bg").fadeIn(1000); -->
    /* $(".modal_bg").fadeTo("slow",0.8); */
    //Расположение модального окна с содержимым по высоте учитывая скроллинг документа
    var Top_modal_window = $(document).scrollTop() + HeightScreen/2-$(".politika_outer").height()/2;
    $(".politika_outer").css({"display":"block"});
    //Запрет на сколлинг страницы
    <!-- $("body").css({"overflow":"hidden"}); -->
    return false;
  });
  
  $(".politika_outer .button").click(function () {
    $(".modal_bg, .politika_outer").hide();
    <!-- $("body").css({"overflow":"auto"}); -->
  });

  //При клике вне области модального окна, фон и модальное окно скрываются
  $(".modal_bg").click(function () {
    $(".modal_bg, .politika_outer").hide();
    $("body").css({"overflow":"auto"});
  });
});
</script>
  </head>
<body>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter24995690 = new Ya.Metrika({id:24995690,
                    webvisor:true,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/24995690" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
     <div class="modal_bg"></div>
                    <!-- Header -->
<div class="header">
    <div class="box">
        <div class="links">
            <a href="/">Главная</a>
            <a href="#price">Услуги</a>
            <a href="#about">О нас</a>
            <a href="#price">Прайс</a>
            <a href="#action">Скидки и акции</a>
            <a href="#map">Контакты</a>
			<a href="" class="userblock">Вход для клиентов</a>
			<a href="/work">Вход для авторов</a>
        </div>
		<? include(dirname(__FILE__)."/uchet/userblock.php"); echo $uchetResult;?>
        <div class="logo"><a href="/"><img src="images/logo.png" alt="logo" /></a></div>
        <div class="contacts">
            <img src="images/gold_phone.png" alt="" />
            <span>+375 (29) 1-583-583<br />
           +375 (29) 2-583-583</span>
            <p>г. Минск, ул.Октябрьская, 5, офис 218</p>
            <!-- <a href="#"><img src="images/btn_back_call.png" alt="" /></a> -->
        </div>
    </div>

                                                        <!-- Help -->
<div class="help">
    <div class="box">
        <h1 class="ie_help_h1">Помощь и консультация в написании Дипломных<br /> работ по всей беларуси</h1>
        <div class="left">
            <div class="action_timer_inner"><a name="action" style="height:4px"></a>
            <img class="img_action" src="images/action.png" alt="" />
                <h2>Закажи и оплати <br />дипломную СЕЙЧАС!</h2>
                <p>Получи <span><span style="font-size:22px;text-transform: uppercase;font-weight: bold;color: #f6930b;">два билета</span> в кино</span><br />  <span>на любимый сеанс</span></p>
                <img src="images/pic_free.png" alt="" />
                <p style="text-transform: uppercase;color: #EC122C;font-weight: bold;font-size:24px">до 31 октября</p>
                <img src="images/tickets.png" width="100" alt="" />
           <!--     <p class="last_time">До окончания осталось:</p>-->
                <div id="countdown_dashboard" style="dipslay:none !important;overflow: hidden;height: 0;">
                    <div class="dash days_dash">
                        <div class="digit"><div class="top" style="display: none;">0</div><div class="bottom" style="display: block;">0</div></div>
                        <div class="digit"><div class="top" style="display: none;">1</div><div class="bottom" style="display: block;">1</div></div>
                    </div>

                    <div class="dash hours_dash">
                        <div class="digit"><div class="top" style="display: none;">2</div><div class="bottom" style="display: block;">2</div></div>
                        <div class="digit"><div class="top" style="display: none;">2</div><div class="bottom" style="display: block;">2</div></div>
                    </div>

                    <div class="dash minutes_dash">
                        <div class="digit"><div class="top" style="display: none;">2</div><div class="bottom" style="display: block;">2</div></div>
                        <div class="digit"><div class="top" style="display: none;">9</div><div class="bottom" style="display: block;">9</div></div>
                    </div>

                    <div class="dash seconds_dash">
                        <div class="digit"><div class="top" style="display: none;">4</div><div class="bottom" style="display: block;">4</div></div>
                        <div class="digit"><div class="top" style="display: block; overflow: hidden; height: 50.313255406106606px; margin-top: 0px; margin-bottom: 0px; padding-top: 0px; padding-bottom: 0px;">3</div><div class="bottom" style="display: block; overflow: hidden; height: 37.610670956734914px;">4</div></div>
                    </div>
                </div>
                <p style="margin-top:10px;"><img src="images/big_arrow.png" width="130" alt="" /></p>
                <p>Осталось <span style="color: #f6930b;">
                <?php if($showRemainTickets > 0){echo $showRemainTickets;}else{ echo 0;} ?>
                </span> билетов из 100</p>
                
                
            </div>
        </div>
        <a name="checkout"></a> 
        <div class="right_form_order_inner" >
			
			
			<?php 
				if (empty($_REQUEST['page'])) {
					include 'uchet/order.php';
				} else {
					include 'uchet/'.$_REQUEST['page'].'.php';
				}
				/*
				if (!empty($_REQUEST['page']) && $_REQUEST['page'] == 'ordercreated') {
					include 'uchet/ordercreated.php';
				} else {
					include 'uchet/order.php'; 
				}
				*/
				echo $uchetResult;
			?>
            <div class="bubble">Политика конфиденциальности</div>
        </div>
      

 <div class="politika_outer">
 <div class="politika">
        <h1>Политика конфиденциальности</h1>

<p>Данное положение поясняет, как может использоваться информация, которую Вы оставляете на нашем сайте и как обратиться к специалистам, которые могут Вам ответить на любые вопросы.</p>

<p class="punkt">1.	Зачем нам необходимы контактные данные?</p>

<p>Если Вы подписываетесь на нашем сайте на получение бонусов, или соглашаетесь на участие в акции, Вы должны оставить свои контактные данные, а именно имя, номер телефона,  e-mail. Это объясняется тем, что в нашей компании регулярно проходят акции и специальные предложения. Ваш интерес к нашим услугам, предполагает, что участие в розыгрышах и акциях от нашей компании, будут Вам интересны. Мы заботимся о своих клиентах и для того, чтобы Вы могли вовремя получить всю необходимую информацию, нам необходимо отправлять Вам информационные письма. Помимо этого для повышения уровня обслуживания мы можем проводить опросы, с целью получения Вашего мнения и пожеланий касательно наших предложений и оказываемых услуг. Перед тем, как вводить на сайте чужие данные, убедитесь, что соответствующие лица не против. Данные должны быть достоверными и точными.</p>

<p class="punkt">2.	Что мы делаем с Вашей персональной информацией? </p>



 Ваше имя и Ваш e-mail используются в следующих целях: 
 <ul>
    <li>для рассылки Вам полезной информации, информации  о текущих акциях и скидках</li>
    <li>для информирования Вас о новинках</li>
    <li>для проведения опросов с целью повышения уровня работы с Вами</li>
    <li>для обработки запросов, поступающих в службу поддержки</li>
    <li>для рассылки служебной информации, например, если Вы не помните свой пароль</li>
</ul>


<p class="punkt">3.	Кто еще имеет право получить доступ к Вашей личной информации? </p>

<p>После того, как Вы заполнили форму на нашем сайте, вся информация отправляется в систему, которая хранит все данные и имеет  функцию рассылки сообщений. С помощью нашей системы и сервиса рассылок Вы и будете получать полезную информацию и информацию о новинках и акциях в компании. Только в исключительных случаях мы можем раскрыть информацию о Вас, если это потребует закон.</p>

<p class="punkt">4.	Идентификационные файлы</p>

<p>На нашем сайте имеются идентификационные файлы  или т.н. cookies, это так называемые текстовые файлы, которые отправляются на компьютер посетителя для сбора информации о его действиях. Эти файлы используются на сайте для учета персональной информации о посетителях, с целью изучения поведения и повышения юзабилити сайта. Если Вы хотите отключить cookies, Вы это можете сделать в настройках браузера. </p>

<p class="punkt">5.	Безопасность </p>

<p>Наша компания предпринимает меры для минимизации возможности потерь, ненадлежащего использования персональной информации. Мы гарантируем добросовестное использование Вашей контактной информации. И просим Вам быть бдительными и внимательными с использованием конфиденциальной информации (пароль, логин).  Если возникнут непонятные ситуации, срочно свяжитесь с нами.</p>

<p class="punkt">6.	Отказ от подписки </p>

<p>Если Вам больше не интересна наши сообщения, Вы можете отказаться от рассылки, перейдя по соответствующей ссылке.</p>

<p class="punkt">7.	Контакты </p>

<p>Если у Вас будут вопросы, связанные с политикой конфиденциальности, обращайтесь, пожалуйста, на адрес: <a href="mailto:Dipstar.by@mail.ru" style="color:#898989">Dipstar.by@mail.ru</a> </p>

<p class="stas">С уважением, Станислав Рыбаков</p>


</div>
<img class="button" src="images/ico_cross.png" alt=""/>
</div>
    </div>
    </div>
</div>
<div class="clear"></div>
                                                                <!-- representation -->
    <div class="representation">
        <div class="box">
            <div class="border"></div>
            <div class="block">
                <img src="images/pic1.jpg" alt="" />
                <p><span>Более 4 лет </span><br /> пишем дипломные работы</p>
            </div>
            <div class="block">
                <img src="images/pic2.jpg" alt="" />
                <p>Свыше <span>8000 работ</span><br />   выполнено на данный момент</p>
            </div>
            <div class="block">
                <img src="images/pic3.jpg" alt="" />
                <p><span>7,8 средний бал</span><br />   по выполненым работам</p>
            </div>
            <div class="block">
                <img src="images/pic4.jpg" alt="" />
                <p>помогли <span>5100 студентам</span><br />  обратившихся к нам</p>
            </div>            
        </div>
    </div>
    <div class="clear"></div>
                                                                        <!-- profit -->
    <div class="profit headline">
        <div class="box">
            <h1><span>Какая <span  class="span_inner">Ваша выгода</span> от работы с нами:</span></h1>
            <img src="images/pic5.png" alt="" />
        </div>
    </div>
    <div class="profit_inner">
        <div class="box">
            <ul>
            <li><strong>Качество.</strong> Более 4 лет опыта за плечами. За это время мы помогли 5100 студентам, а написали более 16000 работ, ср. балл которых 7,8.</li>          
            <li><strong>Без плагиата.</strong> Вам не придется волноваться, что Ваш преподаватель уличит Вас в плагиате, ведь Ваша работа будет уникальной.  Ср. уникальность наших работ 74%.</li>           
            <li><strong>Доработки бесплатно.</strong> Если с первого раза Ваш преподаватель найдет к чему придраться в работе, мы все переделаем по Вашим требованиям совершенно бесплатно.</li>           
            <li><strong>Точно в срок.</strong> Благодаря адаптированной системе учета заказов, шанс не сдать работу в срок равен нулю. </li>
            <li><strong>Конфиденциальность.</strong> Вам не придется волноваться, что о том, что кто-то узнает, что работу писали не Вы. Мы умеем хранить тайны.</li>           
            <li><strong>Постоянно на связи.</strong> Вы никогда не почувствуете беспокойство, работая с нами. Ведь в любое время Вы поможете написать нам, приехать к нам в офис или позвонить. </li>
            <li><strong>Выгодно.</strong> Оформите заявку прямо сейчас и получите презентацию и речь к защите в подарок!</li>
            </ul>
        </div>
    </div>
    <div class="ready">
        <div class="box">
            <h2>Готовы с нами работать?</h2>
            <a href="#checkout"><img src="images/btn_order_work.png" alt="" /></a>
        </div>
    </div>
                                                                            <!-- review -->
    <div class="review headline">
        <div class="box">
            <h1><span><span class="span_inner">О</span>тзывы</span></h1>
            <img src="images/ico3.png" alt="" />
        </div>
    </div>
	
												<!-- SLIDER REVIEW-->
<div id="pageContainer">
  <div id="slideshow">
    <div id="slidesContainer">
      <div class="slide">
        <div class="one_review">
                <img src="images/ico_review1.png" alt="" />
                <span>Первый раз решил обратиться в компанию с просьбой написать дипломную. Времени совсем не хватало, думал уже, завалю, но друзья вовремя посоветовали обратиться в ПРОдиплом. Сделали все быстро, качество, а самое главное сняли мою головную боль в подготовке к защите, - сделали за меня презентацию, еще и речь написали. Такого  я точно не ожидал! Если акция еще действует, не раздумывая, звоните!</span>
                <p>Андрей</p>
                <p><a href="http://vk.com/alevonyuk">http://vk.com/alevonyuk</a></p>
            </div>
            <div class="one_review">
                <img src="images/ico_review2.png" alt="" />
                <span>Честно скажу, сразу боялась заказывать работу в подобных компаниях. Не раз при мне на защите ловите одногруппников на том, что якобы работу эту работу уже где-то видели. Но времени из-за загруженности на работе не хватало совсем, поэтому пришлось обратиться за помощью. Не представляете, какое удовольствие я получила от работы, мало того, что в любое время я могла незамедлительно связаться с сотрудниками компании, т.к. постоянно волновалась, что что-то будет не так, так мне еще и отчет об уникальности предоставили, чтобы все мои сомнения развеять. Защитилась с первого раза на 8. Так что можете не бояться заказывать! Сэкономьте лучше время и силы!</span>
                <p>Ольга</p>
                <p><a href="http://vk.com/id47859619">http://vk.com/id47859619</a></p>
            </div>
            <div class="one_review">
                <img src="images/ico_review3.png" alt="" />
                <span>В шоке от оперативности компании. Получил работу на 3 дня раньше, чем договаривались. Качество работы тоже порадовало. Советую всем заказывать на prodiplom.by</span>
                <p>Артём</p>
                <p><a href="http://vk.com/id20041876">http://vk.com/id20041876</a></p>
            </div>
      </div>
      <div class="slide">
       <div class="one_review">
                <img src="images/ico_review4.png" alt="" />
                <span>Заказывала диплом на prodiplom.by, не ожидала, что компания способна с таким профессионализмом подойти к работе. Работа была выполнена на достойном уровне, получила оценку на защите выше. Еще раз спасибо!</span>
                <p>Нина</p>
                <p><a href="http://vk.com/id154693255">http://vk.com/id154693255</a></p>
            </div>
            <div class="one_review">
                <img src="images/ico_review5.png" alt="" />
                <span>Рискнула и заказала работу на prodiplom.by. Самой диплом писать совсем не получалось,  вот сокурсники и посоветовали обратиться в компанию. Больше всего боялась, что куратор будет не доволен работой, т.к. любил он попридираться к мелочам, боялась, что если закажу, а ему не понравится, переделывать придется уже самой. Опасения оправдались, после первой проверки всех отправил на доработку, сразу была паника, потом позвонила в компанию, ребята за 2 дня исправили все по новым требованиям. Признаться честно, не ожидала! Спасибо за работу! Всем советую!  </span>
                <p>Ольга</p>
                <p><a href="http://vk.com/id178281558">http://vk.com/id178281558</a></p>
            </div>
                 <div class="one_review">
                <img src="images/ico_review6.png" alt="" />
                <span>Всем знакомым советую заказывать на ПРОдиплом! Помимо того, что работу сделали на достойном уровне (на 8 защитила), так еще заказала по акции, получила готовую презентацию к защите и речь совершенно бесплатно. Вот это сервис!</span>
                <p>Юлия</p>
                <p><a href="http://vk.com/id131509966">http://vk.com/id131509966</a></p>
            </div>      
      </div>
     
    </div>
  </div>
  </div>
<div class="work headline">
    <div class="box">
        <h1><span>Как мы <span class="span_inner">Работаем?</span></span></h1>
        <img src="images/ico2.png" alt="" />
    </div>
</div>
<div class="chain"> <div class="box"><img src="images/chain.jpg" alt="" /></div></div>
 <a name="price"></a>
<div class="packages headline">
    <div class="box">
        <h1><span><span class="span_inner">Пакеты услуг </span></span></h1>
        <img src="images/ico.png" alt="" />
    </div>
</div>
   
<div class="left_table">
    <div class="box">
    <div class="right_table">
    <div class="inner_table">
    <table>
        <tr class="first_tr">
            <td><p>Описание</p></td>
            <td class="standart"><p>Стандарт</p></td>
            <td class="premium"><p>Премиум</p></td>
            <td class="vip"><p>Vip</p></td>
        </tr>
        <tr class="second_tr">
            <td><br /> Исполнитель</td>
            <td class="standart"> <br />Специалист по написанию работ. Опыт в написании работ от 1-2 лет.</td>
            <td class="premium"><br /> Опыт в написании работот 2 до 5 лет, преподаватели ВУЗов, кандидаты наук.</td>
            <td class="vip"><br /> Канд. и доктора наук (доценты, профессоры), квалифицированные специалисты в своей области. Опыт написания работ более 5 лет</td>
        </tr>
        <tr>
            <td>Уникальность, %:</td>
            <td class="standart">30-40</td>
            <td class="premium">50-60</td>
            <td class="vip">70-90</td>
        </tr>
        <tr>
            <td>Сдача работы по разделам</td>
            <td class="standart"><img src="images/pic_plus.png" alt="" /></td>
            <td class="premium"><img src="images/pic_plus.png" alt="" /></td>
            <td class="vip"><img src="images/pic_plus.png" alt="" /></td>
        </tr>
        <tr>
            <td>Графический материал:</td>
            <td class="standart"><img src="images/pic_plus.png" alt="" /></td>
            <td class="premium"><img src="images/pic_plus.png" alt="" /></td>
            <td class="vip"><img src="images/pic_plus.png" alt="" /></td>
        </tr>
        <tr>
            <td>Приложения:</td>
            <td class="standart"><img src="images/pic_plus.png" alt="" /></td>
            <td class="premium"><img src="images/pic_plus.png" alt="" /></td>
            <td class="vip"><img src="images/pic_plus.png" alt="" /></td>
        </tr>
        <tr>
            <td>Презентация:</td>
            <td class="standart"><img src="images/pic_minus.png" alt="" /></td>
            <td class="premium"><img src="images/pic_plus.png" alt="" /></td>
            <td class="vip"><img src="images/pic_plus.png" alt="" /></td>
        </tr>
        <tr>
            <td>Доклад к защите: </td>
            <td class="standart"><img src="images/pic_minus.png" alt="" /></td>
            <td class="premium"><img src="images/pic_plus.png" alt="" /></td>
            <td class="vip"><img src="images/pic_plus.png" alt="" /></td>
        </tr>
        <tr>
            <td>Рецензия:</td>
            <td class="standart"><img src="images/pic_minus.png" alt="" /></td>
            <td class="premium"><img src="images/pic_plus.png" alt="" /></td>
            <td class="vip"><img src="images/pic_plus.png" alt="" /></td>
        </tr>
        <tr>
            <td>Аннотация:</td>
            <td class="standart"><img src="images/pic_minus.png" alt="" /></td>
            <td class="premium"><img src="images/pic_plus.png" alt="" /></td>
            <td class="vip"><img src="images/pic_plus.png" alt="" /></td>
        </tr>
        <tr>
            <td>Современные и  уникальные источники</td>
            <td class="standart"><img src="images/pic_minus.png" alt="" /></td>
            <td class="premium"><img src="images/pic_plus.png" alt="" /></td>
            <td class="vip"><img src="images/pic_plus.png" alt="" /></td>
        </tr>      
        <tr>
            <td>Дополнительная  проверка корректорами</td>
            <td class="standart"><img src="images/pic_minus.png" alt="" /></td>
            <td class="premium"><img src="images/pic_minus.png" alt="" /></td>
            <td class="vip"><img src="images/pic_plus.png" alt="" /></td>
        </tr>      
        <tr>
            <td>План-помощник на защиту</td>
            <td class="standart"><img src="images/pic_minus.png" alt="" /></td>
            <td class="premium"><img src="images/pic_minus.png" alt="" /></td>
            <td class="vip"><img src="images/pic_plus.png" alt="" /></td>
        </tr>    
        <tr>
            <td>Персональный менеджер</td>
            <td class="standart"><img src="images/pic_minus.png" alt="" /></td>
            <td class="premium"><img src="images/pic_plus.png" alt="" /></td>
            <td class="vip"><img src="images/pic_plus.png" alt="" /></td>
        </tr>     
        <tr>
            <td>Возможность выезда сотрудника компании в офис клиента для получения необходимой информации для работы (документы, методические указания, первоисточники и т.д.)</td>
            <td class="standart"><img src="images/pic_minus.png" alt="" /></td>
            <td class="premium"><img src="images/pic_minus.png" alt="" /></td>
            <td class="vip"><img src="images/pic_plus.png" alt="" /></td>
        </tr>     
        <tr>
            <td>Возможность доставки работы в готовом виде (распечатанном, подшитом, с подписанными чертежами, приложениями и т.д.) </td>
            <td class="standart"><img src="images/pic_minus.png" alt="" /></td>
            <td class="premium"><img src="images/pic_minus.png" alt="" /></td>
            <td class="vip"><img src="images/pic_plus.png" alt="" /></td>
        </tr>     
        <tr>
            <td>Бесплатная доработка, мес.</td>
            <td class="standart">1</td>
            <td class="premium">2</td>
            <td class="vip">Без ограничений</td>
        </tr>     
        <tr>
            <td>Возможность бесплатной доработки вне плана или задания</td>
            <td class="standart"><img src="images/pic_minus.png" alt="" /></td>
            <td class="premium"><img src="images/pic_minus.png" alt="" /></td>
            <td class="vip"><img src="images/pic_plus.png" alt="" /></td>
        </tr>    
        <tr>
            <td>Возможность доставки работы на кафедру учебного заведения (курьер или эксресс-почта)</td>
            <td class="standart"><img src="images/pic_minus.png" alt="" /></td>
            <td class="premium"><img src="images/pic_minus.png" alt="" /></td>
            <td class="vip"><img src="images/pic_plus.png" alt="" /></td>
        </tr>    
        <tr>
            <td>Возможность выполнения  работы в сжатые сроки</td>
            <td class="standart"><img src="images/pic_minus.png" alt="" /></td>
            <td class="premium"><img src="images/pic_plus.png" alt="" /></td>
            <td class="vip"><img src="images/pic_plus.png" alt="" /></td>
        </tr>    
        <tr>
            <td>Возможность консультирования по теме исследования</td>
            <td class="standart"><img src="images/pic_minus.png" alt="" /></td>
            <td class="premium"><img src="images/pic_minus.png" alt="" /></td>
            <td class="vip"><img src="images/pic_plus.png" alt="" /></td>
        </tr>    
       <!-- <tr>
            <td>Стоимость:</td>
            <td class="standart">1600000-1900000</td>
            <td class="premium">2500000-2900000</td>
            <td class="vip">3800000-4500000</td>
        </tr> -->   
        <tr>
            <td>Гарантии:</td>
            <td class="standart">Чек, договор</td>
            <td class="premium">Чек, договор</td>
            <td class="vip">Чек, договор</td>
        </tr>     
        <tr class="last_td">
            <td>&nbsp;</td>
            <td class="standart"><a href="#checkout"><img src="images/btn_order.png" alt="" /></a></td>
            <td class="premium"><a href="#checkout"><img src="images/btn_order.png" alt="" /></a></td>
            <td class="vip"><a href="#checkout"><img src="images/btn_order.png" alt="" /></a></td>
        </tr>

    </table>
    </div>
    </div>
    </div>
</div>
<div class="ready">
    <div class="box">
        <h2>Готовы с нами работать?</h2>
        <a href="#checkout"><img src="images/btn_order_work.png" alt="" /></a>
    </div>
</div>
<a name="about"></a>
<div class="headline">
    <div class="box">
        <h1><span><span class="span_inner">Наша </span>команда</span></h1>
    </div>
</div>
    <div class="team">
        <div class="box">
            <div class="team_inner">
                <img src="images/face1.png" alt="" />
                <p class="fio">Станислав Рыбаков </p>
                <p class="post">Директор</p>
            </div>       
            <div class="team_inner">
                <img src="images/face2.png" alt="" />
                <p class="fio">Анастасия Котова</p>
                <p class="post">Директор по маркетингу</p>
            </div>       
            <div class="team_inner">
                <img src="images/face3.png" alt="" />
                <p class="fio">Алена Даткаева </p>
                <p class="post">Менеджер по работе с авторами</p>
            </div>         
            <div class="team_inner">
                <img src="images/face4.png" alt="" />
                <p class="fio">Марина  Жуковская </p>
                <p class="post">Менеджер по работе с авторами</p>
            </div>     
            <div class="team_inner"  style="margin-left: 130px;">
                <img src="images/face7.png" alt="" />
                <p class="fio">Ангелина Озолова</p>
                <p class="post">Менеджер по работе с авторами</p>
            </div>   
            <div class="team_inner">
                <img src="images/face5.png" alt="" />
                <p class="fio">Снитко Ольга</p>
                <p class="post"> Менеджер по работе с клиентами</p>
            </div>         

            <div class="team_inner">
                <img src="images/face8.png" alt="" />
                <p class="fio">Алена Кучинская</p>
                <p class="post">Менеджер по работе с клиентами</p>
            </div>       
           
        </div>
    </div>
<a name="map"></a>
<div id="map" class="map"><div class="novsi">Октябрьская улица, 5, Минск, Беларусь<img src="images/cross_map.png" alt="" /></div></div>

    <div class="questions headline">
        <div class="box">
            <h1><span>Остались вопросы?<span class="span_inner"> Здесь вы найдете ответы </span></span></h1>
            <img src="images/ico4.png" alt="" />
        </div>
    </div>
    <div class="questions_inner">
        <div class="box">
        <div class="block_question">
            <h2><img src="images/small_ok.png" alt="" />КАК УЗНАТЬ СТОИМОСТЬ РАБОТЫ?</h2>
            <p>Для того, чтобы оценить работу, необходимо заполнить форму заявки либо связаться с менеджерами компании доступными средствами связи. Поле оценки работы авторами, мы свяжемся с Вами для выбора наиболее подходящей цены за работу у одного из авторов.</p>
        </div>
        <div class="block_question">
            <h2><img src="images/small_ok.png" alt="" />СКОЛЬКО ВРЕМЕНИ ЗАЙМЁТ ВЫПОЛНЕНИЕ РАБОТЫ?</h2>
            <p>Срок выполнения работы зависит от сложности выполнения задания, темы работы и сроков выполнения работы. В среднем для выполнения дипломной работы потребуется от 7 дней, курсовой и отчетов по практике – от 3 дней, контрольной – от 1 дня</p>
        </div>
        <div class="block_question">
            <h2><img src="images/small_ok.png" alt="" />КАК СДЕЛАТЬ ЗАКАЗ РАБОТЫ?</h2>
            <p>Для того, чтобы заказать работу, необходимо заполнить форму заказана сайте либо связаться с менеджерами компании, указать требования к работе и прислать всю сопутствующую информацию по работе, которая у Вас имеется.</p>
        </div>
        
        <div class="block_question">
            <h2><img src="images/small_ok.png" alt="" />КАК ОПЛАТИТЬ РАБОТУ?</h2>
            <p>Оплатить работу можно любым удобным для вас способом: наличные в офисе, банковский перевод, WebMoney, Яндекс Деньги, Easy Pay, система WEB PAY (в личном кабинете с платежной карточки)</p>
        </div>
        
        <div class="block_question">
            <h2><img src="images/small_ok.png" alt="" />НУЖНА ЛИ ПРЕДОПЛАТА?</h2>
            <p>Для того, чтобы автор приступил к выполнению работы, необходима предоплата в размере не менее 30% стоимости работы. При выполнении дипломной работы предоплата вносится по каждой части.</p>
        </div>
        <div class="block_question">
            <h2><img src="images/small_ok.png" alt="" />ЧТО ДЕЛАТЬ, ЕСЛИ НЕОБХОДИМА ДОРАБОТКА РАБОТЫ?</h2>
            <p>Если в работе требуется  что-то исправить, то в течение 30 дней с момента выполнения работу можно отправить автору для решения проблем и доработок. Доработка оформляется в письменном виде на почту компании.</p>
        </div>
        <div class="block_question">
            <h2><img src="images/small_ok.png" alt="" />ЕСТЬ ЛИ ГАРАНТИИ СОХРАННОСТИ ДЕНЕГ?</h2>
            <p>Гарантией сохранности денег является публичный договор, гарантийный талон, кассовый чек </p>
        </div>
        <div class="block_question">
            <h2><img src="images/small_ok.png" alt="" />ЧТО ДЕЛАТЬ, ЕСЛИ В ПРОЦЕССЕ ВЫПОЛНЕНИЯ РАБОТЫ ПОЯВЯТСЯ ВОПРОСЫ?</h2>
            <p><strong>По всем возникающим вопросам можно связываться с менеджерами компании по телефонам: </strong><br />+375 (29) 1-583-583<br/> +375 (29) 2-583-583 <br />Мы работаем ежедневно: с 9.00 до 19.00 без обеда, суббота:  с 10 до  15, выходной – воскресенье. 
 </p>
        </div>
         <a href="#checkout"><img src="images/btn_order_work.png" alt="" /></a>
        </div>
    </div>
    <div class="again_questions headline">
        <div class="box">
            <h1><span>Принимаем к оплате</span></h1>
            <img src="images/pile.png" alt="" />
        </div>
    </div>
    <div class="pay_tipes">
        <div class="box">
            <img src="images/pay_tipes.png" alt="" />
        </div>
    </div>
    <div class="footer">
        <div class="box">
            <div class="left_bl">
                <div class="logo_bot_one"><a href="#"><img src="images/logo_bot1.png" alt="" /></a></div>
                <div class="sec_bl">
                    <div class="logo_bot_two"><a href=""><img src="images/logo_bot2.png" alt="" /></a></div>
                    <p>Помощь и консультация в написании дипломных работ<br /> в Минске и по всей Беларуси</p>
                </div>
                
            </div>
            <div class="right_bl">
                <div class="contacts">
                <img src="images/gray_phone.png" alt="">
                <span>+375 (29) 1-583-583</span>
                <p>г. Минск, ул.Октябрьская, 5, офис 218</p>
                <a href="#"><img src="images/btn_back_call.png" alt=""></a>
            </div>
            </div>
            <div class="clear"></div>
        </div>        
    </div>
	<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
(function(){ var widget_id = '155642';
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);})();</script>
<!-- {/literal} END JIVOSITE CODE -->
</body>
</html>
<?
ob_end_flush();