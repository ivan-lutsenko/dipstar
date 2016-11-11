$(document).ready(function () {
    $('select').styler();
    //Use smooth scrolling when clicking on navigation
    $('.one a[href*=#]:not([href=#])').click(function () {
        if (location.pathname.replace(/^\//, '') ===
            this.pathname.replace(/^\//, '') &&
            location.hostname === this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top
                }, 500);
                return false;
            } //target.length
        } //click function
    }); //smooth scrolling

     $(function(){
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
             dateFormat: 'dd.mm.yy',
             firstDay: 1,
             isRTL: false
         };
    $("#datepicker").datepicker();
         $.datepicker.setDefaults($.datepicker.regional['ru']);
 });

    $(".one li").on("click", function () {
        $(this).parent().parent().children().children().removeClass("active");
        $(this).addClass("active");
    });
    //Аякс отправка форм
    //Документация: http://api.jquery.com/jquery.ajax/
  /*  $("form").submit(function () {
        $.ajax({
            type: "GET",
            url: "mail.php",
            data: $("form").serialize()
        }).done(function () {
            alert("Спасибо за заявку!");
            setTimeout(function () {
                $.fancybox.close();
            }, 1000);
        });
        return false;
    });*/

});

// Адаптивные скрипты, которые срабатывают только при определенном разрешении экрана
// Документация: https://github.com/maciej-gurban/responsive-bootstrap-toolkit
(function ($, document, window, viewport) {
    function resizeWindow() {
        // $("a").click(function() {
        // 	if (viewport.is("lg")) {
        // 		return false;
        // 	};
        // });
    };
    $(document).ready(function () {
        resizeWindow();
    });
    $(window).bind("resize", function () {
        viewport.changed(function () {
            resizeWindow();
        });
    });
})(jQuery, document, window, ResponsiveBootstrapToolkit);

$('input[name=name]').keypress(function (key) {
    if (key.charCode < 58 && key.charCode > 47) return false;
});
$('input[name=phone]').keypress(function (key) {
    if (key.charCode < 48 || key.charCode > 57) return false;
});
$('input[type=file]').change(function () {
    var val = $("#upload-file").val();
    if (val.length) {
        var slashPos = val.lastIndexOf("\\");
        // console.log(slashPos);
        var result = val.slice(slashPos + 1);
        $('label[for=upload-file] span').text(result);
        $('input[name=filename]').val(result);
    }
});

$('.jq-selectbox__select-text').on('bind',"contentchanged",function(){
    alert('changed');
});

$('.modal').on('show.bs.modal', function (target) {
    var button = target.relatedTarget;
    $('.modal .valToSend').val($(button).attr("data-send"));
    var dataDropdown = $(button).attr("data-dropdown");
    if(dataDropdown == "9")
    {
        $(".modal .jq-selectbox").css({"height":"34px","visibility":"visible"});
    }
    else{
        $(".modal .jq-selectbox").css({"height":"0","visibility":"hidden"});
    }
    $('.modal h3').text($(button).attr("data-title"));
    $('.modal button[type=submit]').text($(button).attr("data-submit"));
    var metrikaVal = $(button).attr("data-metrika");
    $("#email-group input").removeAttr("required");
    $("#email-group").css("display","none");
 /*   if(metrikaVal == 10){
        $("#email-group").css("display","block");
        $("#email-group input").attr("required","required");
    }*/
    $('.modal .metrika').val(metrikaVal);

});

function checkOrderForm(formid) {
    var selectedVal = $('#'+formid+' .jq-selectbox__select-text').text();
    if(selectedVal != "Ваш предмет"){
        $("#"+formid+" input[name=subject]").val(selectedVal);
    }
    return true;
}