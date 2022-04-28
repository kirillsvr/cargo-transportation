<!doctype html>
<html lang="ru">
<head>
	<meta charset="utf-8">
  <title><?php if(wp_title('', false)) { echo ''; } ?> <?php bloginfo('name'); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone=no">
	<meta name="theme-color" content="#fff">
  <meta name="description" content="<?php the_field("meta_description",$post->ID); ?>">
  <meta name="Keywords" content="<?php the_field("meta_keywords",$post->ID); ?>">
	<link rel="stylesheet" media="all" href="<?php echo get_template_directory_uri(); ?>/css/slick.css" >
	<link rel="stylesheet" media="all" href="<?php echo get_template_directory_uri(); ?>/css/magnific-popup.css" >
	<link rel="stylesheet" media="all" href="<?php echo get_template_directory_uri(); ?>/css/style.css" >
	<link rel="stylesheet" media="all" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" >
	<link rel="stylesheet" media="all" href="<?php echo get_template_directory_uri(); ?>/css/jquery.formstyler.css" >
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<?php   wp_head(); ?>
	<style media="screen">
		.footer .footer_content .footer_content_item .footer_content_item_title a{
			color: white;
		}
		.price_page .price_page_wrap .price_page_list .price_page_list_item .price_page_list_item_sub table tbody tr td a.no_style{
			background-color: transparent;
			font: 16px "Open Sans", sans-serif;
			font-weight: 300;
			text-transform: none;
			padding: 0;
		}
		.price_page .price_page_wrap .price_page_list .price_page_list_item .price_page_list_item_sub table tbody tr td a.no_style:hover{
			text-decoration: underline;
		}
      	@media screen and (max-width: 768px){
		.main_mnu .current_page_item a{
        	text-decoration: underline;
		}
      	}
      	.main_mnu a{
        	position:relative;
		}
      	@media screen and (min-width: 768px){
        .main_mnu .current_page_item:after{
        	content: "";
    		background: #4599c8;
    		width: 101%;
    		display: block;
    		position: absolute;
    		height: 45px;
    		left: -0.5%;
    		bottom: -11px;
    		z-index: 0;
    		border-radius: 5px 5px 0 0;
		}
      	}
		.car_park_special_equipment .car_park_special_equipment_item p a{
			color: black;
		}
		.first_block_item span{
			color: #232323;
			font: 12px "Open Sans", sans-serif;
			text-decoration: none;
			position: relative;
			text-decoration: none;
		}
		.cranes_page .cranes_content .cranes_content_description .cranes_content_description_characters .table_new tr td:first-of-type{
			border-bottom: none;
		}
		.cranes_page .Similar_mobile{
			margin-top: 40px;
		}
		.answer_page_tab{
			display: none;
		}
		#tab1{
			display: block;
		}
		.aligncenter {
			display: block;
			margin-left: auto;
			margin-right: auto;
		}

		.alignleft {
			float: left;
			margin: 0.5em 1em 0.5em 0;
		}
		.cranes_page .cranes_content .filter_content .filter_content_item  table{
			width: 100%;
			margin-bottom: 20px;
			border: 1px solid #d7d7d7;
		}
		.cranes_page .cranes_content .filter_content .filter_content_item  table thead th{
			text-align: center;
			border: 1px solid #d7d7d7;
			padding: 8px;
			background: #F2F2DC;
		}
		.filter_content_item_info_list .yelow_btn{
			margin-top: 15px;
		}
		.filter_content_item_info_list .grey_btn{
			display: inline-block;
			width: auto;
			padding:18px 20px;
		}
		.cranes_page .cranes_content .filter_content .filter_content_item  table tr td{
			padding: 10px;
			border: 1px solid #d7d7d7;
			text-align: center;
		}
		.alignright {
			float: right;
			margin: 0.5em 0 0.5em 1em;
		}
		.cranes_page .cranes_content .cranes_content_wrap .filter_controls a{
			display: inline-block;
			font: 16px "Open Sans", sans-serif;
			font-weight: 300;
			color: #232323;
			-webkit-border-radius: 2px;
			border-radius: 2px;
			background-color: #ffffff;
			cursor: pointer;
			margin-bottom: 0;
			padding: 4px 14px;
			transition: all .2s ease;
			text-decoration: none;
		}
		.cranes_page .cranes_content .cranes_content_wrap .filter_controls a:hover,.cranes_page .cranes_content .cranes_content_wrap .filter_controls a.active{
			color: white;
			background-color: #3387b8;
		}
		.info_error{
			padding: 100px 0;
			text-align: center;
		}
		.info_error h1{
			font: 40px "Open Sans", sans-serif;
			margin-bottom: 30px;
		}
		.info_error p{
			font: 18px/24px "Open Sans", sans-serif;
			margin-bottom: 5px;
		}
		.cranes_page .cranes_content .left_block ul li a.active{
			-webkit-box-shadow: 0 7px 8px rgba(52, 52, 52, 0.14);
			box-shadow: 0 7px 8px rgba(52, 52, 52, 0.14);
		}
		.cranes_page .cranes_content .left_block ul li a.active:before {
		  opacity: 1;
		}
		.list_building .list_building_item_wrap .list_building_item .list_building_item_content p a{
			color: black;
		}
		.header .header_content .header_content_menu_wrap .header_content_menu .header_2 li a{
			padding: 27px 33.5px 25px 33.5px;
		}
      	.header .header_content .header_content_menu_wrap .header_content_menu .header_2.smpa li a{
			padding: 27px 30.5px 25px 30.5px;
		}
		.no_style{
			font: 16px "FedraSansPro-Medium";
			color: #232323;
		}
		@media screen and (max-width: 1199px){
			.header .header_content .header_content_menu_wrap .header_content_menu .header_2 li a {
    		padding: 27px 18px 25px 18px;
			}
		}
			@media screen and (max-width: 1199px){
				.header .header_content .header_content_menu_wrap .header_content_menu .header_2 li a {
					padding: 27px 4px 25px 4px;
				}
		}
	</style>
</head>
<body>
<!-- BEGIN  out-->
<div class="out">
	<header class="header">
		<div class="top_line">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<nav class="main_mnu">
							<ul>
								<?php if (is_page(1908) || is_page(1900) || is_page(1902) || is_page(1906)  || is_page(1904)){?>

							<?php  $_SESSION['xxx']=''.get_the_ID().''; } ?>
							<?php  $locations = get_nav_menu_locations();
							$menu = wp_get_nav_menu_object($locations['primary']);
							$menu_items = wp_get_nav_menu_items($menu->term_id);
								foreach ( (array) $menu_items as $key => $menu_item ) {   ?>
										<li class="<?php if (!is_front_page() && get_the_ID() == $menu_item->object_id){ echo "current_page_item ";} else {echo "";} if (!is_front_page() && $_SESSION['xxx']==$menu_item->object_id) {echo "current_page_item";} else{echo "";} ?>"><a href="<?php echo $menu_item->url ?>"><?php  _e($menu_item->title) ?></a></li>
											<?php } ?>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
		<div class="header_content">
			<div class="container">
				<div class="row header_content_top">
					<div class="col-md-3 col-sm-2 col-xs-12">
						<div class="row">
              <a href="<?php if (!is_page(617)){ echo home_url(); } else { echo "javascript:void(0)"; } ?>" class="logo_wrap clearfix">
								<img src="<?php echo get_field("logo",617); ?>" alt="logo"/>
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
                              <a href="tel:<?php echo preg_replace("/[( )]/","",get_field("phone",2033)); ?>" class="phone" style="display:inline-block;"><?php echo get_field("phone",2033); ?></a>,
                          		<a href="tel:<?php echo preg_replace("/[( )]/","",get_field("phone2",2033)); ?>" class="phone" style="display:inline-block;"><?php echo get_field("phone2",2033); ?></a>
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
				<div class="row header_content_menu_wrap">
					<nav class="header_content_menu col-md-12">
						<div class="toggle_mnu visible-xs-block">
						  <span class="sandwich">
						    <span class="sw-topper"></span>
						    <span class="sw-bottom"></span>
						    <span class="sw-footer"></span>
						  </span>
						</div>
						<?php if (is_tax('category_specialequipment') || is_singular("specialequipment")){ ?>
							<ul class="header_2">

							<li><a href="<?php the_permalink(1906);?>">Аренда спецтехники</a></li>
							<li><a href="<?php the_permalink(2095);?>"><?php echo get_the_title(2095); ?></a></li>
							<li><a href="<?php the_permalink(2082);?>"><?php echo get_the_title(2082); ?></a></li>
							<li><a href="<?php the_permalink(2080);?>"><?php echo get_the_title(2080); ?></a></li>
                              <li><a href="<?php the_permalink(2050);?>"><?php echo get_the_title(2050); ?></a></li>
							<li><a href="<?php the_permalink(2033);?>"><?php echo get_the_title(2033); ?></a></li>
								<li><a href="#calback_car" class="popup_btn header_2_btn">Заказать машину</a></li>
									</ul>
						<?php 	 }  ?>

						<?php if (is_page(2082) && ($_SESSION['xxx']==1908 || $_SESSION['xxx']==1906 || $_SESSION['xxx']==1904 || $_SESSION['xxx']==1902 || $_SESSION['xxx']==1900)){?>
							<?php if ($_SESSION['xxx']==1902){?>
								<ul class="header_2 smpa">
                      		<?php } else { ?>
								<ul class="header_2">
                            <?php }?>

								<li><a href="<?php the_permalink($_SESSION['xxx']);?>"><?php echo get_the_title($_SESSION['xxx']); ?></a></li>
								<li><a href="<?php the_permalink(2095);?>"><?php echo get_the_title(2095); ?></a></li>
								<li><a href="<?php the_permalink(2082);?>"><?php echo get_the_title(2082); ?></a></li>
                                <li><a href="<?php the_permalink(2080);?>"><?php echo get_the_title(2080); ?></a></li>
								<li><a href="<?php the_permalink(2050);?>"><?php echo get_the_title(2050); ?></a></li>
								<li><a href="<?php the_permalink(2033);?>"><?php echo get_the_title(2033); ?></a></li>
									<li><a href="#calback_car" class="popup_btn header_2_btn">Заказать машину</a></li>
										</ul>
							<?php 	 }  ?>
							<?php if (is_page(1908) || is_page(1900) || is_page(1902) || is_page(1906)  || is_page(1904)){?>

<?php  $_SESSION['xxx']=''.get_the_ID().''; ?>
                      		<?php if (is_page(1902)){?>
								<ul class="header_2 smpa">
                      		<?php } else { ?>
								<ul class="header_2">
                            <?php }?>

								<li><a href="javascript:void(0);"><?php the_title(); ?></a></li>
								<li><a href="<?php the_permalink(2095);?>"><?php echo get_the_title(2095); ?></a></li>
								<li><a href="<?php the_permalink(2082);?>"><?php echo get_the_title(2082); ?></a></li>
                                <li><a href="<?php the_permalink(2080);?>"><?php echo get_the_title(2080); ?></a></li>
								<li><a href="<?php the_permalink(2050);?>"><?php echo get_the_title(2050); ?></a></li>
								<li><a href="<?php the_permalink(2033);?>"><?php echo get_the_title(2033); ?></a></li>
									<li><a href="#calback_car" class="popup_btn header_2_btn">Заказать машину</a></li>
										</ul>
								<?php } else if(!is_singular("specialequipment") && !is_tax('category_specialequipment') && !is_page(2082) && ($_SESSION['xxx']!==1908 || $_SESSION['xxx']!==1906 || $_SESSION['xxx']!==1904 || $_SESSION['xxx']!==1902 || $_SESSION['xxx']!==1900)){?>
									<ul>
							<?php  $arg2 = array(  'echo' => false,
							'container'  => false ,
							'theme_location' => 'primary4',
							'menu_class'=>false,
							'items_wrap' => '%3$s')   ?>
						<?php
						echo preg_replace(array(
							'#^<ul[^>]*>#',
							'#</ul>$#'
						), '', wp_nav_menu( $arg2));  ?>
						</ul>
						<?php }?>
					</nav>
				</div>
			</div>
		</div>
	</header>
