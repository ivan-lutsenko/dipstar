$("#map").click(function(){
 $(".novsi").css("display","none");
 })
/* AppearWindows */
$(document).ready(function(){
  $(".bubble1").click(function() {
    var HeightDocument = $(document).height();
    var WidthDocument = $(document).width();
    var HeightScreen = $(window).height();
        $(".modal_bg").css({"width":WidthDocument,"height":HeightDocument,"opacity":"0.9"});
        $(".modal_bg").fadeIn(500);
    var Top_modal_window = $(document).scrollTop() + HeightScreen/2-$(".politika_outer").height()/2;
    /* $(".politika_outer").css({"display":"block"}); */
    $(".politika_outer").fadeIn(500);
    return false;
  });
  
   $(".bubble2").click(function() {
    var HeightDocument = $(document).height();
    var WidthDocument = $(document).width();
    var HeightScreen = $(window).height();
        $(".modal_bg").css({"width":WidthDocument,"height":HeightDocument,"opacity":"0.9"});
        $(".modal_bg").fadeIn(500);
    var Top_modal_window = $(document).scrollTop() + HeightScreen/2-$(".deny_outer").height()/2;
    /* $(".deny_outer").css({"display":"block"}); */
    $(".deny_outer").fadeIn(500);
    return false;
  });
  
    
  
  
  $(".bubble3").click(function() {
    var HeightDocument = $(document).height();
    var WidthDocument = $(document).width();
    var HeightScreen = $(window).height();
        $(".modal_bg").css({"width":WidthDocument,"height":HeightDocument,"opacity":"0.9"});
        $(".modal_bg").fadeIn(500);
    var Top_modal_window = $(document).scrollTop() + HeightScreen/2-$(".agree_outer").height()/2;
    $(".agree_outer").fadeIn(500);
    return false;
  });
  
  $(".politika_outer .button,.deny_outer .button,.agree_outer .button").click(function () {
    $(".modal_bg, .politika_outer").fadeOut(500);
    $(".modal_bg, .deny_outer").fadeOut(500);
    $(".modal_bg, .agree_outer").fadeOut(500);
  });

  //При клике вне области модального окна, фон и модальное окно скрываются
  $(".modal_bg").click(function () {
    $(".politika_outer, .deny_outer, .agree_outer").fadeOut(400);
    $(".modal_bg").fadeOut(500);
    
    $("body").css({"overflow":"auto"});
  });
});
     /* ________________________________________________bubble forms_____________________________________________________________ */
    
   function showForm(numform){
        var HeightDocument = $(document).height();
        var WidthDocument = $(document).width();
        var HeightScreen = $(window).height();
        /* $(".modal_bg").css({"width":WidthDocument,"height":HeightDocument,"display":"block","opacity":"0.6"}); */
        $(".modal_bg").css({"width":WidthDocument,"height":HeightDocument,"opacity":"0.7"});
        $(".modal_bg").fadeIn(500);
        var Top_modal_window = $(document).scrollTop() + HeightScreen/2-$(".appear"+numform).height()/2;
        $(".appear"+numform).fadeIn(500);
    
   }
   function hideForm(numform){
        $(".modal_bg, .appear"+numform).fadeOut(500);
        $("body").css({"overflow":"auto"});
   }
      
       $(".modal_bg").click(function () {
        /* $(".modal_bg,.appear1, .appear2,.appear3,.appear4,.appear5,.appear6,.appear7,.appear8,.appear9,.appear10,.appear11,.appear12").hide(); */
        $(".modal_bg,.appear1, .appear2,.appear3,.appear4,.appear5,.appear6,.appear7,.appear8,.appear9,.appear10,.appear11,.appear12").fadeOut(500);
        $("body").css({"overflow":"auto"});
      }); 
    /* ________________________________________________endbubble forms_____________________________________________________________ */
    
      function focusSubjSelect(){
        if($("#form_select_type option:selected").val()==''){
        $("#form_select_type").css("background","url(images/subject.png)");
        }else{
        $("#form_select_type").css("background","url(images/back_inp.png)");
        }
    }
    function blurSubjSelect(){
        if($("#form_select_subject option:selected").val()==''){
        $("#form_select_subject").css("background","url(images/subject.png)");
        }else{
        $("#form_select_subject").css("background","url(images/back_inp.png)");
        }
    }
    function changeSubjVal(){
       $("#form_select_subject option:selected").val($("#form_select_subject option:selected").text());
       $("#form_select_subject").css("background","url(images/back_inp.png)");
    }   
    function focusTypeSelect(){
        if($("#form_select_type option:selected").val()==''){
        $("#form_select_type").css("background","url(images/work_type.png)");
        }else{
        $("#form_select_type").css("background","url(images/back_inp.png)");
        }
    }
    function blurTypeSelect(){
        if($("#form_select_type option:selected").val()==''){
        $("#form_select_type").css("background","url(images/work_type.png)");
        }else{
        $("#form_select_type").css("background","url(images/back_inp.png)");
        }
    }
    function changeTypeVal(){
       $("#form_select_type option:selected").val($("#form_select_type option:selected").text());
       $("#form_select_type").css("background","url(images/back_inp.png)");
    }   
    function focusDopSelect(){
        if($("#dopmat option:selected").val()==''){
        $("#dopmat").css("background","url(images/dopmat.png)");
        }else{
        $("#dopmat").css("background","url(images/back_inp.png)");
        }
    }
    function blurDopSelect(){
        if($("#dopmat option:selected").val()==''){
        $("#dopmat").css("background","url(images/dopmat.png)");
        }else{
        $("#dopmat").css("background","url(images/back_inp.png)");
        }
    }
    function changeDopVal(){
       $("#dopmat option:selected").val($("#dopmat option:selected").text());
       $("#dopmat").css("background","url(images/back_inp.png)");
    }
    function checkDatepicker(){
        setTimeout(function(){
            if($("#datepicker").val()==''){
                $("#datepicker").css('background','url(images/srok.png)');
            }
        }, 500);
    }
    /* _____________________________________________________________Datepicker_____________________________________________________________________ */
     $.datepicker.regional['ru'] = {
                closeText: 'Закрыть',
                prevText: '&#x3c;Пред',
                nextText: 'След&#x3e;',
                currentText: 'Сегодня',
                monthNames: ['Январь','Февраль','Март','Апрель','Май','Июнь',
                'Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь'],
                monthNamesShort: ['Янв','Фев','Мар','Апр','Май','Июн',
                'Июл','Авг','Сен','Окт','Ноя','Дек'],
                dayNames: ['воскресенье','понедельник','вторник','среда','четверг','пятница','суббота'],
                dayNamesShort: ['вск','пнд','втр','срд','чтв','птн','сбт'],
                dayNamesMin: ['Вс','Пн','Вт','Ср','Чт','Пт','Сб'],
                weekHeader: 'Не',
                dateFormat: 'dd.mm.yy',
                firstDay: 1,
                isRTL: false,
                showMonthAfterYear: false,
                yearSuffix: ''};
        $.datepicker.setDefaults($.datepicker.regional['ru']);
        
        /* $(function(){$( "#datepicker" ).datepicker();}); */
        $("#datepicker").datepicker({minDate: "0"});
    /* _____________________________________________________________End Datepicker_____________________________________________________________________ */
    /* _________________________________________LoadFile__________________________________ */
    i=1;
    flagFree = 1;
    		function addFileField(namefield, parent){
            /* alert(flagFree) */
            if(!flagFree){ 
				i++;
				var div = document.createElement("div");
			/* 	div.innerHTML = '<div class="div_file"><p id="file'+i+'" style="height:40px;cursor:pointer;width: 233px !important;padding-right: 121px;    padding-left:15px;overflow:hidden;" onclick="loadFile('+i+')" onblur="checkBackText11()"></p></div>&nbsp;<br /><input  id="fileload'+i+'" onchange="setFile('+i+')"  style="display:none" name="ofile['+i+']" type="file" /> <img  src="images/ico_cross.png" onclick="return deleteField(this)" style="margin-left: 380px;	margin-top: -46px;margin-bottom: 20px;display: block;cursor:pointer" alt="" />'; */
				div.innerHTML = '<div style="margin-bottom: 6px;height:35px;cursor:pointer;"><input id="file'+i+'" onchange="setFile(1)" style="margin-top: 1px;" class="loadFile" name="file[]" type="file" /><img  src="images/ico_cross.png" onclick="return deleteField(this)" style="margin-left: 407px;	margin-top: -30px;margin-bottom: 20px;display: block;cursor:pointer" alt="" />  <div>';
				/* */
				document.getElementById(parent).appendChild(div);
                flagFree=1;
			 }	 
			}

			function deleteField(a) {
				var contDiv = a.parentNode;
				contDiv.parentNode.removeChild(contDiv);
                flagFree = 0;
                /* alert(flagFree) */
				
			}
                function loadFile(param){if(param=="1"){$("#fileload").click()} else {$("#fileload"+param).click()} }
                
                function setFile(param) {if(param=="1" && $("#fileload").val()) {$("#file").html($("#fileload").val());flagFree=0;} else {if($("#fileload"+param).val())$("#file"+param).html($("#fileload"+param).val());flagFree=0;} } 
                 
                 
         function CheckOrderForm1(name_inp,mail_inp) {
         var result = true; 
                  //name
         var name = $("#"+name_inp).val();
		 	if (name == ''|| name == 'Имя') {
				$("#"+name_inp).css({"border":"2px solid red"});
				result = false;
                alert()
            } 
 			else 
            {
                $("#"+name_inp).css("border","1px solid #d1d1d1");
            } 	 
		
        //email
           var mail = $("#"+mail_inp).val();
			if (mail == ''||mail == 'Email') {
				$("#"+mail_inp).css({"border":"2px solid red"});
				result = false;
            }
			else 
            {
                $("#"+mail_inp).css("border","1px solid #d1d1d1");
            }   

                
				 return result; 
                 }    
         function CheckZvonokForm(name_inp,phone_inp) {
         var result = true; 
                  //name
         var name = $("#"+name_inp).val();
		 	if (name == ''|| name == 'Имя') {
				$("#"+name_inp).css({"border":"2px solid red"});
				result = false;
                alert()
            } 
 			else 
            {
                $("#"+name_inp).css("border","1px solid #d1d1d1");
            } 	 
		
        //email
           var phone = $("#"+phone_inp).val();
			if (phone == ''||phone == 'Телефон') {
				$("#"+phone_inp).css({"border":"2px solid red"});
				result = false;
            }
			else 
            {
                $("#"+phone_inp).css("border","1px solid #d1d1d1");
            }   

                
				 return result; 
                 }
                 
/* ____________________________________________________CHECK MAIN FORM___________________________________________- */

function CheckOrderForm(theme_inp,form_select_subject,form_select_type,datepicker,dopmat,name_inp,mail_inp,phone_inp) {
		var result = true;
        //theme
            var theme = $("#"+theme_inp).val();
		 	if (theme == '') {
            
                result = false;
				$("#"+theme_inp).css({"border":"2px solid red"});				
                $("#"+theme_inp).css('background','url(images/theme.png)');
            } 
            else 
            {
                $("#"+theme_inp).css("border","none");
                $("#"+theme_inp).css('background','url(images/back_inp.png)');
            } 
        //subject
            var subject = $("#"+form_select_subject+" option:selected").val();
		 	if (subject == '') {
                result = false;
				$("#"+form_select_subject).css({"border":"2px solid red"});				
                $("#"+form_select_subject).css('background','url(images/subject.png)');
				
            } 
 			else 
            {
				$("#"+form_select_subject).css("border","none");
                $("#"+form_select_subject).css('background','url(images/back_inp.png)');
                
            } 
        
        //type
             var work_type = $("#"+form_select_type+" option:selected").val();
		 	if (work_type == '') {
                result = false;
				$("#"+form_select_type).css({"border":"2px solid red"});				
                $("#"+form_select_type).css('background','url(images/work_type.png)');
				
				} 
 			else
            { 
				$("#"+form_select_type).css("border","none");
                $("#"+form_select_type).css('background','url(images/back_inp.png)');
            }  
        
        //srok
            var srok = $("#"+datepicker).val();
		 	if (srok == '') {
                result = false;
				$("#"+datepicker).css({"border":"2px solid red"});				
                $("#"+datepicker).css('background','url(images/srok.png)');
				
				} 
 			else
            { 
				$("#"+datepicker).css("border","none");
                $("#"+datepicker).css('background','url(images/back_inp.png)');
            }  
            
        //dopmat
            var srok = $("#"+dopmat+" option:selected").val();
		 	if (srok == '') {
                result = false;
				$("#"+dopmat).css({"border":"2px solid red"});				
                $("#"+dopmat).css('background','url(images/dopmat.png)');
				
				} 
 			else
            { 
				$("#"+dopmat).css("border","none");
                $("#"+dopmat).css('background','url(images/back_inp.png)');
            }  
        
        //name
         var name = $("#"+name_inp).val();
		 	if (name == '') {
				$("#"+name_inp).css({"border":"2px solid red"});
                $("#"+name_inp).css('background','url(images/back_name.png)');
				result = false;
            } 
 			else 
            {
                $("#"+name_inp).css("border","none");
                $("#"+name_inp).css('background','url(images/back_inp.png)');
            } 	 
		
        //email
           var mail = $("#"+mail_inp).val();
			if (mail == '') {
				$("#"+mail_inp).css({"border":"2px solid red"});
                $("#"+mail_inp).css('background','url(images/back_email.png)');
				result = false;
            }
			else 
            {
                $("#"+mail_inp).css("border","none");
                $("#"+mail_inp).css('background','url(images/back_inp.png)');
            }   

        //phone
            var phone = $("#"+phone_inp).val();
			if (phone == '') {
				$("#"+phone_inp).css({"border":"2px solid red"});
                $("#"+phone_inp).css('background','url(images/back_phone.png)');
				result = false;
            }
			else 
            {
                $("#"+phone_inp).css("border","none");
                $("#"+phone_inp).css('background','url(images/back_inp.png)');
            }	 
                
                
				 return result; 
                 
               /*   if(result){
                    $(".top,.bottom").css("display","none");
                    $(".page2").css("display","block");
                    $("#name_inp").val(name);
                    $("#name_inp").css("background","url(images/back_inp.png)");
                    $("#phone_inp").val(phone);
                    $("#phone_inp").css("background","url(images/back_inp.png)");
                }  */
	}
/* ____________________________________________________CHECK MAIN FORM___________________________________________- */


