$(document).ready(function () {

  "use strict";

  $("[name=phone]").mask("+375(99) 999-99-99");

  $("body").scrollspy({
    target: '.navbar-default'
  });


  var marginTopMain = parseInt($(".main").css("margin-top"));
  var windowWidth = $(window).width() + 17;

  var reviewSlideWidth = 236;
  var reviewMaxSlides = 4;
  var teamSlideWidth = 300;
  var teamMaxSlides = 3;
  if (windowWidth < 1000 && windowWidth > 767) {
    reviewSlideWidth = 210;
    reviewMaxSlides = 3;
    teamSlideWidth = 350;
    teamMaxSlides = 2;
  }
  var maxReviewSlides = 3;
  if (windowWidth < 768) {
    reviewMaxSlides = 1;
    teamMaxSlides = 1;
  }

  $(".review_slider").bxSlider({
    slideWidth: reviewSlideWidth,
    minSlides: 1,
    maxSlides: reviewMaxSlides,
    moveSlides: 1,
    slideMargin: 30,
    pager: false
  });

  $(".team_slider").bxSlider({
    slideWidth: teamSlideWidth,
    minSlides: 1,
    maxSlides: teamMaxSlides,
    moveSlides: 1,
    slideMargin: 10,
    pager: false
  });

  var topoffset = 80;
  //Use smooth scrolling when clicking on navigation
  $('.navbar a[href*=#]:not([href=#])').click(function () {
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


  $('.modal').on('show.bs.modal', function (target) {
    var button = target.relatedTarget;
    $('.modal .valToSend').val($(button).attr("data-send"));
    $('.modal h3').text($(button).attr("data-title"));
    $('.modal button[type=submit]').text($(button).attr("data-submit"));
    var metrikaVal = $(button).attr("data-metrika");
    $("#email-group input").removeAttr("required");
    $("#email-group").css("display", "none");

    $('.modal .targetVal').val(metrikaVal);

  });

  $("button[type=submit]").click(function () {
    var form_id = $(this).attr("data-id");
    $("#" + form_id).submit(function () {
      return CheckOrderForm(form_id);
    })
  });
  $(".modal-open,.modal-backdrop").click(function () {
    $(".modal-header .close").click();
  });


  function CheckOrderForm(form_id) {
    var result = true;
    var inputName = $("#" + form_id + " input[name=name]");
    if ($(inputName)) {
      var name = inputName.val();
      if (name == 'Имя' || name == '') {
        $(inputName).css("border", "1px solid red");
        $(inputName).val('Имя');
        result = false;
      } else {
        $("#" + form_id + " input[name=name]").css("border-color", "#f8bb3c");
      }
    }
    var inputPhone = $("#" + form_id + " input[name=phone]");
    if ($(inputPhone)) {
      var phone = $(inputPhone).val();
      if (phone == 'Телефон' || phone == '') {
        $(inputPhone).css("border", "1px solid red");
        phone = $(inputPhone).val('Телефон');
        result = false;
      } else {
        $("#" + form_id + " input[name=phone]").css("border-color", "#f8bb3c");
      }
    }


    return result;
  }
});