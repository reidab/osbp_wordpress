<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?>>
<head profile="http://gmpg.org/xfn/11">
	<title><?php wp_title( '-', true, 'right' ); echo wp_specialchars( get_bloginfo('name'), 1 ) ?></title>
	<meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
	<link rel="stylesheet" type="text/css" href="http://opensourcebridge.org/common/osbp_common_v3.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url') ?>" />
<?php wp_head() // For plugins ?>
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url') ?>" title="<?php printf( __( '%s latest posts', 'sandbox' ), wp_specialchars( get_bloginfo('name'), 1 ) ) ?>" />
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php printf( __( '%s latest comments', 'sandbox' ), wp_specialchars( get_bloginfo('name'), 1 ) ) ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url') ?>" />
</head>

<body class="<?php sandbox_body_class() ?>">

<div id="wrapper" class="hfeed">

	<div id="header">
	   <div class='inner_container'>
   		<h1 id="site-title"><span><a href="<?php bloginfo('home') ?>/" title="<?php echo wp_specialchars( get_bloginfo('name'), 1 ) ?>" rel="home"><?php bloginfo('name') ?></a></span></h1>
   		<div id="site-description">
   		   <h2>The conference for open source citizens</h2>
   		   <p id='conference-date-location'>June 17&ndash;19, 2009 <span class='separator'>|</span> Portland, Oregon</p>
		   </div>
		   <a href='/attend' title='Early bird discount ends March 31st. Register today!' id="header-reg-now">Register now and save!</a>
		</div>
	</div><!--  #header -->

	<div id="access">
		<div class="skip-link"><a href="#content" title="<?php _e( 'Skip to content', 'sandbox' ) ?>"><?php _e( 'Skip to content', 'sandbox' ) ?></a></div>

		<div id="menu">
			<ul>
			   <li id="menu_first_item" <?php print (is_page('about') ? 'class="current_page_item"' : ''); ?>><a href='/about/' title='About' class=''>About</a></li>
				<li <?php print (is_page('attend') ? 'class="current_page_item"' : ''); ?>><a href='/attend/' title='Attend' class=''>Attend</a></li>
				<li class="page_item"><a href='/proposals/' title='Proposals' class=''>Proposals</a></li>
				<li <?php print (is_page('volunteer') ? 'class="current_page_item"' : ''); ?>><a href="/volunteer/" title="Volunteer">Get Involved</a></li>
				<li <?php print (is_page('sponsors') ? 'class="current_page_item"' : ''); ?>><a href="/sponsors/" title="Sponsors">Sponsors</a></li>
				<li <?php print (!is_page(array('about','attend','volunteer','sponsors','front-page')) ? 'class="current_page_item"' : ''); ?>><a href="/blog">Blog</a></li>
			</ul>
      </div>
      
      <?php
      if (!is_front_page()) {
		global $wp_query;

      if( empty($wp_query->post->post_parent) ) {
         $parent = $wp_query->post->ID;
      } else {
         $parent = $wp_query->post->post_parent;
      } 
      
      if(is_page()) {
         $section_title = get_the_title($parent);
      } else {
         $section_title = "Blog";
      }
      
      ?>
      
      
      <div id="subnav" class='navbar'>
         <div class='inner_container'>
         <h2><?php echo $section_title ?></h2>
      
      <?php if(wp_list_pages("title_li=&child_of=$parent&echo=0" )): ?>
         <ul>
            <?php wp_list_pages("title_li=&child_of=$parent" ); ?>
         </ul>
      <?php endif; ?>
         </div>
      </div>
      <?php } ?>
	</div><!-- #access -->
