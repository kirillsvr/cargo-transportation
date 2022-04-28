"use strict";

function height_equal(el) {
  var height_icon3 = 0;
  el.each(function (i) {
    if ($(this).height() > height_icon3) {
      height_icon3 = $(this).height();
    }
  });
  el.height(height_icon3);
}
function lia(e) {
  e.find("ul").slideToggle(200);
}
function list_a_click(el) {
  el.parents("ul").prev().val(el.text());
}
$(document).ready(function () {

  $(document).pjax('.gruz', '#pjax-container', {
         fragment: '#pjax-container',
         scrollTo : false
     });

  $(".calback .calback_form .input_wrap input[type='radio']").click(function () {
    if ($(this).hasClass("clock_other")) {
      $("#clock_other").val("");
    } else {
      $("#clock_other").val($(this).next().text());
    }
  });
  $('#fast_search_form').each(function () {
    var i = $(this);
    $(i).validate({
      rules: {

      },
      messages: {

      },
      //errorPlacement: function(error, element){},
      submitHandler: function submitHandler(form) {
        var thisForm = $(i);
        var new1 = $("#pjax-container").html();
        $.ajax({
          type: 'POST',
          url: '',
          data: thisForm.serialize(),
          success: function success(html) {
            $(thisForm).addClass('success');
            $(thisForm).trigger("reset");
                $("body").html(html);
          }
        });
      },
      success: function success(label) {
        label.text('').addClass('valid');
      },
      highlight: function highlight(element, errorClass) {
        $(element).addClass('err');
      },
      unhighlight: function unhighlight(element, errorClass, validClass) {
        $(element).removeClass('err');
      }
    });
  });
  $('#calback_form_car').each(function () {
    var i = $(this);
    $(i).validate({
      rules: {
        fio1: {
          required: true
        },
        phone_1: {
          required: true
        },
        adress_: {
          required: true
        }
      },
      messages: {
        fio1: {
          required: "Поле обязательно"
        },
        phone_1: {
          required: "Поле обязательно"
        },
        adress_: {
          required: "Поле обязательно"
        }
      },
      //errorPlacement: function(error, element){},
      submitHandler: function submitHandler(form) {
        var thisForm = $(i);
        $.ajax({
          type: 'POST',
          url: 'mail.php',
          data: thisForm.serialize(),
          success: function success(data) {
            $(thisForm).addClass('success');
            $(thisForm).trigger("reset");
            $.magnificPopup.open({
              items: {
                src: '#thanks'
              },
              type: 'inline'
            });
          }
        });
      },
      success: function success(label) {
        label.text('').addClass('valid');
      },
      highlight: function highlight(element, errorClass) {
        $(element).addClass('err');
      },
      unhighlight: function unhighlight(element, errorClass, validClass) {
        $(element).removeClass('err');
      }
    });
  });
  $('#calback_form').each(function () {
    var i = $(this);
    $(i).validate({
      rules: {
        fio_order: {
          required: true
        },
        phone_order: {
          required: true
        }
      },
      messages: {
        fio_order: {
          required: "Поле обязательно"
        },
        phone_order: {
          required: "Поле обязательно"
        }
      },
      //errorPlacement: function(error, element){},
      submitHandler: function submitHandler(form) {
        var thisForm = $(i);
        $.ajax({
          type: 'POST',
          url: 'mail_order.php',
          data: thisForm.serialize(),
          success: function success(data) {
            $(thisForm).addClass('success');
            $(thisForm).trigger("reset");
            $.magnificPopup.open({
              items: {
                src: '#thanks'
              },
              type: 'inline'
            });
          }
        });
      },
      success: function success(label) {
        label.text('').addClass('valid');
      },
      highlight: function highlight(element, errorClass) {
        $(element).addClass('err');
      },
      unhighlight: function unhighlight(element, errorClass, validClass) {
        $(element).removeClass('err');
      }
    });
  });
  $('#calback_form_index').each(function () {
    var i = $(this);
    $(i).validate({
      rules: {
        fio: {
          required: true
        },
        phone_: {
          required: true
        },
        calback_time: {
          required: true
        }
      },
      messages: {
        fio: {
          required: "Поле обязательно"
        },
        phone_: {
          required: "Поле обязательно"
        },
        calback_time: {
          required: "Поле обязательно"
        }
      },
      //errorPlacement: function(error, element){},
      submitHandler: function submitHandler(form) {
        var thisForm = $(i);
        $.ajax({
          type: 'POST',
          url: 'mail_calback.php',
          data: thisForm.serialize(),
          success: function success(data) {
            $(thisForm).addClass('success');
            $(thisForm).trigger("reset");
            $.magnificPopup.open({
              items: {
                src: '#thanks'
              },
              type: 'inline'
            });
          }
        });
      },
      success: function success(label) {
        label.text('').addClass('valid');
      },
      highlight: function highlight(element, errorClass) {
        $(element).addClass('err');
      },
      unhighlight: function unhighlight(element, errorClass, validClass) {
        $(element).removeClass('err');
      }
    });
  });
  $('#calback_form_tenancy').each(function () {
    var i = $(this);
    $(i).validate({
      rules: {
        fio_tenancy: {
          required: true
        },
        phone_tenancy: {
          required: true
        },
        time_tenancy: {
          required: true
        }
      },
      messages: {
        fio_tenancy: {
          required: "Поле обязательно"
        },
        phone_tenancy: {
          required: "Поле обязательно"
        },
        time_tenancy: {
          required: "Поле обязательно"
        }
      },
      //errorPlacement: function(error, element){},
      submitHandler: function submitHandler(form) {
        var thisForm = $(i);
        $.ajax({
          type: 'POST',
          url: 'img/mail_tenancy.php',
          data: thisForm.serialize(),
          success: function success(data) {
            $(thisForm).addClass('success');
            $(thisForm).trigger("reset");
            $.magnificPopup.open({
              items: {
                src: '#thanks'
              },
              type: 'inline'
            });
          }
        });
      },
      success: function success(label) {
        label.text('').addClass('valid');
      },
      highlight: function highlight(element, errorClass) {
        $(element).addClass('err');
      },
      unhighlight: function unhighlight(element, errorClass, validClass) {
        $(element).removeClass('err');
      }
    });
  });
  $(".popup_btn_tenancy").click(function () {
    if ($("#other_clock").val() !== "") {
      $("#time_tenancy").val($("#other_clock").val());
    } else {}
    if ($("input[name='clock']").is(":checked")) {
      $("#time_tenancy").val($("input[name='clock']:checked").next().text());
    } else {}
  });
  $("#other_clock").focus(function () {
    if ($("input[name='clock']").is(":checked")) {
      $("input[name='clock']").prop("checked", false);
    }
  });
  $(".calback .calback_form .input_wrap input[type='radio']").click(function () {
    if ($(this).hasClass("clock_other")) {
      $(".hidden_input").fadeIn();
      $(".hidden_input").val();
    } else {
      $(".hidden_input").hide();
    }
  });
  $(".replace_title").click(function () {
    $(".calback_form_title").text("Заказать:" + $(this).parents(".crushed_stone_page_content_block").find(".crushed_stone_page_content_block_title").find("span").text() + "(" + $(this).parents("tr").find("td").eq(1).text() + ")");
    $("#name_hidden").val("Заказать:" + $(this).parents(".crushed_stone_page_content_block").find(".crushed_stone_page_content_block_title").find("span").text() + "(" + $(this).parents("tr").find("td").eq(1).text() + ")");
  });
  $(".title_popup").click(function () {
    $(".calback_form_title").text($(this).parents(".list_building_item_content").find(".name_popup").text());
    $("#name_hidden").val($(this).parents(".list_building_item_content").find(".name_popup").text());
  });
  $(".cranes_page_btn").click(function () {
    $(".calback_form_title").text('Заказать «'+$(this).parents(".filter_content_item").find(".filter_content_item_info").find(".filter_content_item_info-title").find("a").text()+'»');
    $("#name_hidden").val($(this).parents(".filter_content_item").find(".filter_content_item_info").find(".filter_content_item_info-title").find("a").text());
  });
  $(".cranes_page_btn_2").click(function () {
    $(".calback_form_title").text($(this).parents(".Similar_mobile_item").find(".Similar_mobile_item_title").find("a").text());
    $("#name_hidden").val($(this).parents(".Similar_mobile_item").find(".Similar_mobile_item_title").find("a").text());
  });
  $(".price_btn").click(function () {
    $(".calback_form_title").text("Заказать: " + $(this).parents("tr").find("td").eq(0).text());
    $("#name_hidden").val("Заказать: " + $(this).parents("tr").find("td").eq(0).text());
  });
  $(".sale_btn_popup").click(function () {
    $(".calback_form_title").text("Заказать: " + $(this).parents(".sale_item").find(".sale_item_content_title").text());
    $("#name_hidden").val("Заказать: " + $(this).parents(".sale_item").find(".sale_item_content_title").text());
  });
  $(".car_park_popup").click(function () {
    $(".calback_form_title").text("Заказать: " + $(this).prev().prev().text());
    $("#name_hidden").val("Заказать: " + $(this).prev().prev().text());
  });
  $(".car_park_btn").click(function () {
    $(".calback_form_title").text("Заказать: " + $(this).parents(".our_car_park_item").find("p").text());
    $("#name_hidden").val("Заказать: " + $(this).parents(".our_car_park_item").find("p").text());
  });
  $(".special_popup").click(function () {
    $(".calback_form_title").text("Заказать: " + $(this).parents(".car_park_special_equipment_item").find("p").text());
    $("#name_hidden").val("Заказать: " + $(this).parents(".car_park_special_equipment_item").find("p").text());
  });

  if ($(window).width() < 767) {
    $(document).click(function () {
      $(".header .header_content .header_content_menu_wrap .header_content_menu ul").slideUp();
      $(".toggle_mnu .sandwich").removeClass("active");
    });
  };
  // мобильное меню
  $(".toggle_mnu .sandwich").bind("click", function (event) {
    event.stopPropagation();
    $(this).toggleClass("active");
    $(this).parent(".toggle_mnu").next().slideToggle();
  });
  // инициализация слайдера
  $(".slider_centr").slick({
    centerMode: true,
    centerPadding: '0px',
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: false,
    dots: false,
    responsive: [{
      breakpoint: 767,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true
      }
    }, {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true
      }
    }]
  });

  $('.slider_one').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.slider_two'
  });

  $('.slider_two').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.slider_one',
    dots: false,
    focusOnSelect: true
  });
  // откритие попапа
  $(".popup_btn").magnificPopup({
    type: 'inline'
  });
  // закритие попапа
  $(".calback .calback_form i,#thanks i").click(function () {
    $.magnificPopup.close();
    $(".calback .calback_form .input_wrap table tr").remove();
  });
  $(".cranes_page .cranes_content .cranes_content_wrap .filter_controls a").click(function(){
    $(this).addClass("active");
  });
  // виравнивание по висоте
  height_equal($(".crushed_stone_page .servise_crushed_stone_page .servise_crushed_stone_page_content_wrap .servise_crushed_stone_page_item_wrap .servise_crushed_stone_page_item p"));
  // запрет на ввод цифр
  jQuery("#fio,#fio1,#fio_tenancy,#fio_order").keypress(function (e) {
    if (e.which < 58 && e.which > 47) {
      return false;
    }
  });

  // маскана телефон
  $("input[type='tel']").mask("+7(999)999-99-99");

  // виравнивание по висоте
  var height_icon2 = 0;
  $(".car_park_special_equipment .car_park_special_equipment_item p").each(function (i) {
    if ($(this).height() > height_icon2) {
      height_icon2 = $(this).height();
    }
  });
  $(".car_park_special_equipment .car_park_special_equipment_item p").height(height_icon2);

  $(".slider_our_clients").slick({
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [{
      breakpoint: 767,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true
      }
    }, {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true
      }
    }, {
      breakpoint: 580,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true
      }
    }]
  });

  $(".slider_review").slick({
    infinite: true,
    slidesToShow: 2,
    slidesToScroll: 1,
    responsive: [{
      breakpoint: 767,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true
      }
    }]
  });

  $(".slider_trucking").slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1
  });

  $(".car_park_slider").slick({
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [{
      breakpoint: 991,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true
      }
    }, {
      breakpoint: 767,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true
      }
    }, {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true
      }
    }]
  });
  $('.car_park .prev_btn').click(function () {
    $(".car_park_slider").slick('slickPrev');
  });
  $('.car_park .next_btn').click(function () {
    $(".car_park_slider").slick('slickNext');
  });
  $('.history_company .prev_slider_centr').click(function () {
    $(".slider_centr").slick('slickPrev');
  });
  $('.history_company .next_slider_centr').click(function () {
    $(".slider_centr").slick('slickNext');
  });
  $('.our_clients .prev_btn').click(function () {
    $(".slider_our_clients").slick('slickPrev');
  });
  $('.review .prev_btn').click(function () {
    $(".slider_review").slick('slickPrev');
  });
  $('.our_clients .next_btn').click(function () {
    $(".slider_our_clients").slick('slickNext');
  });
  $('.review .next_btn').click(function () {
    $(".slider_review").slick('slickNext');
  });
  $(".slider_trucking_wrap .prev_btn").click(function () {
    $(".slider_trucking").slick('slickPrev');
  });
  $(".slider_trucking_wrap .next_btn").click(function () {
    $(".slider_trucking").slick('slickNext');
  });

  if ($(window).width() > 767) {
    var height_icon = 0;
    $(".order_reasons .order_reasons_item").each(function () {
      if ($(this).height() > height_icon) {
        height_icon = $(this).height();
      }
    });
    $(".order_reasons .order_reasons_item").height(height_icon);
    var height_news_title_excerpt = 0;
    $('.index_page .news_and_event .news_item span').each(function () {
      if ($(this).height() > height_news_title_excerpt) {
        height_news_title_excerpt = $(this).height();
      }
    });
    $('.index_page .news_and_event .news_item span').height(height_news_title_excerpt);
    var height_news_title = 0;
    $('.index_page .news_and_event .news_item p').each(function () {
      if ($(this).height() > height_news_title) {
        height_news_title = $(this).height();
      }
    });
    $('.index_page .news_and_event .news_item p').height(height_news_title);
  }
  // акордион
  $('.answer_page .answer_page_tab .answer_page_tab_list').click(function () {
    if ($(this).hasClass('active')) {
      $('.answer_page .answer_page_tab .answer_page_tab_list').removeClass('active');
      $('.answer_page .answer_page_tab .answer_page_tab_list i').removeClass('curent');
      $('.answer_page .answer_page_tab .answer_page_tab_list .answer_page_tab_list_sub').slideUp(400);
    } else {
      $('.answer_page .answer_page_tab .answer_page_tab_list .answer_page_tab_list_sub').slideUp(400);
      $(this).find(".answer_page_tab_list_sub").slideToggle(400);
      $('.answer_page .answer_page_tab .answer_page_tab_list').removeClass('active');
      $(this).addClass('active');
      $('.answer_page .answer_page_tab .answer_page_tab_list i').removeClass('curent');
      $(this).find("i").addClass('curent');
    }
  });
  // акордион
  $('.price_page .price_page_wrap .price_page_list .price_page_list_item > a').click(function () {
    if ($(this).hasClass('active')) {
      $('.price_page .price_page_wrap .price_page_list .price_page_list_item > a').removeClass('active');
      $('.price_page .price_page_wrap .price_page_list .price_page_list_item .price_page_list_item_sub').slideUp(400);
    } else {
      $('.price_page .price_page_wrap .price_page_list .price_page_list_item .price_page_list_item_sub').slideUp(400);
      $(this).next().slideToggle(400);
      $('.price_page .price_page_wrap .price_page_list .price_page_list_item > a').removeClass('active');
      $(this).addClass('active');
    }
  });
  // табы
  $('.list_tab li a').click(function (e) {
    e.preventDefault();
    $(".price_page h1 span").hide();
    $(".price_page h1 span").eq($(this).attr("data-title")).fadeIn();
    $('.list_tab li a.active').removeClass('active');
    $(this).addClass('active');
    var tab = $(this).attr('href');
    $('.answer_page_tab').not(tab).css({ 'display': 'none' });
    $(tab).fadeIn(400);
  });
});
