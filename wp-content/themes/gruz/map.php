<section class="map_wrap">
  <div class="map_title">
    <p>Телефон</p>
    <a href="tel:<?php echo preg_replace("/[( )]/","",get_field("phone",2033)); ?>" class="phone"><?php echo get_field("phone",2033); ?></a>
    <a href="tel:<?php echo preg_replace("/[( )]/","",get_field("phone2",2033)); ?>" class="phone bot"><?php echo get_field("phone2",2033); ?></a>
    <p>адрес</p>
    <span><?php echo get_field("adress",2033); ?></span>
  </div>
  <div id="map" class="map"></div>
</section>
