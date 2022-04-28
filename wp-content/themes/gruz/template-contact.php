<?php
/**
 * Template Name: Contacts
 */
get_header(); ?>
<main class="index_page">
  <div class="container">
    <div class="breadcrumbs">
      <ul>
        <li><a href="<?php echo home_url(); ?>">Главная</a></li>
        <li><?php the_title(); ?></li>
      </ul>
    </div>
  </div>
  <section class="sale_page contacts_page">
    <div class="container contacts_page_wrap">
      <h1><?php the_title(); ?></h1>
      <div class="row">
        <div class="col-md-12 contacts_phone_wrap">
          <div class="row">
            <?php $contacts = get_field("contacts",$post->ID); ?>
            <?php foreach ($contacts as $key => $value) { ?>
            <div class="col-md-4 col-sm-6 col-xs-6 contacts_phone_item_wrap">
              <div class="contacts_phone_item">
                 <i class="icon-phone"></i>
                <p class="contacts_phone_item_title"><?php echo $value["title"]; ?></p>
                <p class="title_list_phone">Телефоны:</p>
                <ul>
                  <?php $phones =$value["phones"];
                   foreach ($phones as $key => $phone) { ?>
                  <li><a href="tel:<?php echo preg_replace("/[( )]/","",str_replace("-","",$phone["phone"])); ?>"><?php echo $phone["phone"]; ?></a><span> <?php echo $phone["name_consult"]; ?></span></li>
                  <?php } ?>
                </ul>
              </div>
            </div>
            <?php } ?>
          </div>
        </div>
      </div>
      <div class="row questions_block_wrap">
        <div class="col-md-7 col-sm-8 col-md-offset-1">
          <div class="questions_block clearfix">
            <img src="<?php echo get_template_directory_uri(); ?>/img/girl.jpg" alt="image"/>
            <p>Возникли вопросы?</p>
            <span>Оставьте заявку,  наши специалисты проконсультируют вас!</span>
          </div>
        </div>
        <div class="col-md-3 col-sm-4 btn_wrap_questions_block">
          <a href="#calback" class="yelow_btn popup_btn">Оставить заявку</a>
        </div>
      </div>
      <div class="map2" id="map2">

      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
<script>
	var map;

	function initMap() {
		map = new google.maps.Map(document.getElementById(
			'map2'), {
			center: {
				lat: 57.997725,
				lng: 56.267758
			},
			zoom: 16,
			scrollwheel: false
		});

		var customMarker = new google.maps.Marker({
			position: {
				lat: 57.997725,
				lng: 56.267758
			},
			map: map,
			icon: '<?php echo get_template_directory_uri(); ?>/img/map_icons.png'
		});

	}

</script>
