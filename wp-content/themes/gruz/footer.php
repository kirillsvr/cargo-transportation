<footer class="footer">
  <div class="footer_content">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-3 col-xs-6 footer_content_item">
          <div class="footer_content_item_title">
            <a href="<?php the_permalink(2102); ?>"><?php echo get_the_title(2102); ?></a>
          </div>
          <ul class="grey_mnu">
            <?php  $arg2 = array(  'echo' => false,
            'container'  => false ,
            'theme_location' => 'primary',
            'menu_class'=>false,
            'items_wrap' => '%3$s',
            // 'depth'           => 1,
            // 'fallback_cb'=> 'fallbackmenu'
          )   ?>
          <?php
          echo preg_replace(array(
            '#^<ul[^>]*>#',
            '#</ul>$#'
          ), '', wp_nav_menu( $arg2));  ?>
          </ul>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 footer_content_item">
          <div class="footer_content_item_title">
            <a href="<?php the_permalink(2050); ?>"><?php echo get_the_title(2050); ?></a>
          </div>
          <ul class="grey_mnu">
              <?php  $arg2 = array(  'echo' => false,
              'container'  => false ,
              'theme_location' => 'primary3',
              'menu_class'=>false,
              'items_wrap' => '%3$s')   ?>
            <?php
            echo preg_replace(array(
              '#^<ul[^>]*>#',
              '#</ul>$#'
            ), '', wp_nav_menu( $arg2));  ?>
          </ul>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 footer_content_item">
          <div class="footer_content_item_title">
            <a href="<?php the_permalink(2080); ?>"><?php echo get_the_title(2080); ?></a>
          </div>
          <ul class="white_mnu">
            <li>
              <a href="<?php the_permalink(2082); ?>"><?php echo get_the_excerpt(2082); ?></a>
            </li>
          </ul>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 footer_content_item">
          <div class="footer_content_item_title">
              <a href="<?php the_permalink(2078); ?>"><?php echo get_the_excerpt(2078); ?></a>
          </div>
          <!--ul class="white_mnu">
            <li>
              <a href="<?php the_permalink(2194); ?>"><?php echo get_the_title(2194); ?></a>
            </li>
            <li>
              <a href="<?php the_permalink(2196); ?>"><?php echo get_the_title(2196); ?></a>
            </li>
          </ul-->
        </div>
        <div class="col-md-3 col-xs-12 social_wrap">
          <p>Мы в социальных сетях:</p>
          <ul>
            <?php $link_social =get_field("link_social",617); ?>
            <?php foreach ($link_social as $value) { ?>
            <li><a href="<?php echo $value['link']; ?>" target="_blank"><i class="icon-<?php echo $value['class_icon']; ?>"></i></a></li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="footer_bottom">
    <div class="container">
      <div class="row footer_bottom_wrap">
        <div class="col-md-3 col-sm-2 col-xs-12">
          <div class="row">
            <a href="<?php if (!is_page(617)){ echo home_url(); } else { echo "javascript:void(0)"; } ?>" class="logo_wrap clearfix">
              <img src="<?php echo get_field("logo_footer",617);?>" alt="logo"/>
              <span class="logo_text">
                <span><?php bloginfo("name"); ?></span>
                <?php bloginfo("description"); ?>
              </span>
            </a>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-6 adress_wrap">
          <div class="adress">
            <i class="icon-shape-1"></i>
            <p><?php echo get_field("adress",2033); ?></p>
            <a href="<?php the_permalink(2033);?>">Показать на карте</a>
          </div>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6 contact_info_wrap">
          <div class="contact_info">
            <i class="icon-shape-2"></i>
            <div class="telp">
              <a href="tel:<?php echo preg_replace("/[( )]/","",get_field("phone",2033)); ?>" class="phone" style="display:inline-block"><?php echo get_field("phone",2033); ?></a>,
 				<a href="tel:<?php echo preg_replace("/[( )]/","",get_field("phone2",2033)); ?>" class="phone" style="display:inline-block"><?php echo get_field("phone2",2033); ?></a>
            </div>
            <a href="mailto:<?php bloginfo('admin_email'); ?>" class="mail"><?php bloginfo('admin_email'); ?></a>
          </div>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-12">
          <div class="row btn_wrap">
            <a href="#calback" class="btn_opacity popup_btn">Заказать звонок</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
  <div class="calback mfp-hide" id="calback_index">
    <form action="#" id="calback_form_index" class="calback_form">
      <i class="icon-close"></i>
      <div class="calback_form_title">
        Обратный звонок
      </div>
      <div class="input_wrap">
        <label for="fio">Имя</label>
        <input type="text" required name="fio" id="fio" placeholder="Имя"/>
      </div>
      <div class="input_wrap">
        <label for="phone_">Телефон</label>
        <input type="tel" name="phone_" id="phone_" required placeholder="+7 (___) ___-__-__"/>
      </div>
      <div class="input_wrap">
        <label >Время звонка</label>
        <input type="radio" checked name="calback_time" id="calback_time1"/>
        <label for="calback_time1"><span></span>Сейчас - 18:01</label>
        <input type="radio" name="calback_time" id="calback_time2"/>
        <label for="calback_time2"><span></span>Через 15 минут - 18:16</label>
        <input type="radio" name="calback_time" id="calback_time3"/>
        <label for="calback_time3"><span></span>Через 30 минут - 18:31</label>
        <input type="radio" name="calback_time" id="calback_time4"/>
        <label for="calback_time4"><span></span>Через 45 минут - 18:46</label>
        <input type="radio" name="calback_time" class="clock_other" id="calback_time5"/>
        <label for="calback_time5"><span></span>Другое время</label>
        <input type="text" class="hidden_input" name="clock_other" id="clock_other" value="Сейчас - 18:01" placeholder="Другое время"/>
      </div>
      <input type="submit" value="Перезвоните мне"/>
    </form>
  </div>
  <div class="calback mfp-hide" id="calback_car">
    <form action="#" id="calback_form_car" class="calback_form">
      <i class="icon-close"></i>
      <div class="calback_form_title">Заказать машину</div>
      <div class="input_wrap">
        <label for="fio1">Имя</label>
        <input type="text" required name="fio1" id="fio1" placeholder="Имя"/>
      </div>
      <div class="input_wrap">
        <label for="phone_1">Телефон</label>
        <input type="tel" name="phone_1" id="phone_1" required placeholder="+7 (___) ___-__-__"/>
      </div>
      <div class="input_wrap">
        <label for="adress_">Адрес</label>
        <input type="text" name="adress_" id="adress_" required placeholder="Адрес"/>
      </div>
      <input type="submit" value="заказать"/>
    </form>
  </div>
  <div class="calback mfp-hide" id="calback">
    <form action="#" id="calback_form" class="calback_form">
      <i class="icon-close"></i>
      <div class="calback_form_title">Заказать звонок</div>
      <input type="hidden" name="name_hidden" id="name_hidden" value="">
      <div class="input_wrap">
        <label for="fio_order">Имя</label>
        <input type="text" required name="fio_order" id="fio_order" placeholder="Имя"/>
      </div>
      <div class="input_wrap">
        <label for="phone_order">Телефон</label>
        <input type="tel" name="phone_order" id="phone_order" required placeholder="+7 (___) ___-__-__"/>
      </div>
      <input type="submit" value="заказать"/>
    </form>
  </div>
  <div class="calback mfp-hide" id="calback_tenancy">
    <form action="#" id="calback_form_tenancy" class="calback_form">
      <i class="icon-close"></i>
      <div class="calback_form_title">Аренда</div>
      <div class="input_wrap">
        <label for="fio_tenancy">Имя</label>
        <input type="text" required name="fio_tenancy" id="fio_tenancy" placeholder="Имя"/>
      </div>
      <div class="input_wrap">
        <label for="phone_tenancy">Телефон</label>
        <input type="tel" name="phone_tenancy" id="phone_tenancy" required placeholder="+7 (___) ___-__-__"/>
      </div>
      <div class="input_wrap">
        <label for="phone_tenancy">Время аренды</label>
        <input type="text" name="time_tenancy" id="time_tenancy"  />
      </div>
      <div class="input_wrap">
        <table>
        </table>
      </div>
      <input type="submit" value="заказать"/>
    </form>
  </div>
  <div class="thanks mfp-hide" id="thanks">
    <i class="icon-close"></i>
    <div class="thanks_ok">
      <i class="icon-ok_3"></i>
    </div>
    <div class="thanks_title">Ваша заявка принята!</div>
    <p>Наши менеджеры свяжутся с вами в ближайшее время</p>

  </div>

</div>
<!-- END out-->
<script src="<?php echo get_template_directory_uri(); ?>/js/app.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.pjax.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>

  <script>
  $(".popup_btn_tenancy").click(function(){
    $(".special_equipment_banner_block .form_sale .group_item input").each(function(){
      $(".calback .calback_form .input_wrap table").append("<tr><input type='hidden' name='tehnic[]' value='"+$(this).val()+"'></tr>");
    });

  });
  // добавление выпадашки
  var id_select = 0;
  $(".special_equipment_banner_block .form_sale .add_elements").click(function (event) {
    event.preventDefault();
    id_select++;
    $(".group_item").append("<div class='input_select_wrap' onclick='lia($(this))'><input type='text' name='select_input" + id_select + "' readonly value='Автовышки' id='select_input" + id_select + "'><ul><?php $categories = get_categories(array('type'=> 'specialequipment','child_of'=> 0, 'parent'=> 0, 'orderby' => 'id', 'order'  => 'ASC',   'hide_empty'   => 0,  'hierarchical' => 0,'exclude'  => '', 'include'  => '', 'number' => -1,'taxonomy'  => 'category_specialequipment', 'pad_counts' => false  ));  ?> <?php  foreach ($categories as $key=>$value) {$cat_id = $value->cat_ID ?><li><a href='javascript:void(0);' onclick='list_a_click($(this))'><?php echo $value->name; ?></a></li><?php } ?><ul></div>");
  });
    var map;

    function initMap() {
      map = new google.maps.Map(document.getElementById(
        'map'), {
        center: {
          lat: 57.998875,
          lng: 56.267758
        },
        zoom: 16,
        scrollwheel: false,
        styles: [{
            "featureType": "water",
            "elementType": "geometry",
            "stylers": [{
                "color": "#e9e9e9"
              },
              {
                "lightness": 17
              }
            ]
          },
          {
            "featureType": "landscape",
            "elementType": "geometry",
            "stylers": [{
                "color": "#f5f5f5"
              },
              {
                "lightness": 20
              }
            ]
          },
          {
            "featureType": "road.highway",
            "elementType": "geometry.fill",
            "stylers": [{
                "color": "#ffffff"
              },
              {
                "lightness": 17
              }
            ]
          },
          {
            "featureType": "road.highway",
            "elementType": "geometry.stroke",
            "stylers": [{
                "color": "#ffffff"
              },
              {
                "lightness": 29
              },
              {
                "weight": 0.2
              }
            ]
          },
          {
            "featureType": "road.arterial",
            "elementType": "geometry",
            "stylers": [{
                "color": "#ffffff"
              },
              {
                "lightness": 18
              }
            ]
          },
          {
            "featureType": "road.local",
            "elementType": "geometry",
            "stylers": [{
                "color": "#ffffff"
              },
              {
                "lightness": 16
              }
            ]
          },
          {
            "featureType": "poi",
            "elementType": "geometry",
            "stylers": [{
                "color": "#f5f5f5"
              },
              {
                "lightness": 21
              }
            ]
          },
          {
            "featureType": "poi.park",
            "elementType": "geometry",
            "stylers": [{
                "color": "#dedede"
              },
              {
                "lightness": 21
              }
            ]
          },
          {
            "elementType": "labels.text.stroke",
            "stylers": [{
                "visibility": "on"
              },
              {
                "color": "#ffffff"
              },
              {
                "lightness": 16
              }
            ]
          },
          {
            "elementType": "labels.text.fill",
            "stylers": [{
                "saturation": 36
              },
              {
                "color": "#333333"
              },
              {
                "lightness": 40
              }
            ]
          },
          {
            "elementType": "labels.icon",
            "stylers": [{
              "visibility": "off"
            }]
          },
          {
            "featureType": "transit",
            "elementType": "geometry",
            "stylers": [{
                "color": "#f2f2f2"
              },
              {
                "lightness": 19
              }
            ]
          },
          {
            "featureType": "administrative",
            "elementType": "geometry.fill",
            "stylers": [{
                "color": "#fefefe"
              },
              {
                "lightness": 20
              }
            ]
          },
          {
            "featureType": "administrative",
            "elementType": "geometry.stroke",
            "stylers": [{
                "color": "#fefefe"
              },
              {
                "lightness": 17
              },
              {
                "weight": 1.2
              }
            ]
          }
        ]
      });

      var customMarker = new google.maps.Marker({
        position: {
          lat: 57.997725,
          lng: 56.267758
        },
        map: map,
        icon: '<?php echo get_template_directory_uri(); ?>//img/map.png'
      });

    }

  </script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBbMsDYzMn3NOGKGNWjC6XSKylrqjG0kJw&callback=initMap"
    async defer></script>
<?php   wp_footer(); ?>
</body>
</html>
