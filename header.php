<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?>>
<head profile="http://gmpg.org/xfn/11">
	<title><?php wp_title( '-', true, 'right' ); echo wp_specialchars( get_bloginfo('name'), 1 ) ?></title>
	<meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
	<link rel="stylesheet" type="text/css" href="http://opensourcebridge.org/common/osbp_common.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url') ?>" />
<?php wp_head() // For plugins ?>
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url') ?>" title="<?php printf( __( '%s latest posts', 'sandbox' ), wp_specialchars( get_bloginfo('name'), 1 ) ) ?>" />
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php printf( __( '%s latest comments', 'sandbox' ), wp_specialchars( get_bloginfo('name'), 1 ) ) ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url') ?>" />
</head>

<body class="<?php sandbox_body_class() ?>">

<div id="wrapper" class="hfeed">

	<div id="header">
		<h1 id="site-title"><span><a href="<?php bloginfo('home') ?>/" title="<?php echo wp_specialchars( get_bloginfo('name'), 1 ) ?>" rel="home"><?php bloginfo('name') ?></a></span></h1>
		<div id="site-description"><?php bloginfo('description') ?></div>
		<div id='conference-date-location'><p>June 17&ndash;19, 2009 - Portland, OR</p></div>
	</div><!--  #header -->

	<div id="access">
		<div class="skip-link"><a href="#content" title="<?php _e( 'Skip to content', 'sandbox' ) ?>"><?php _e( 'Skip to content', 'sandbox' ) ?></a></div>

		<div id="menu">
			<ul>
				<li <?php print (is_page('attend') ? 'class="current_page_item"' : ''); ?>><a href='/attend/' title='Attend' class=''>Attend</a></li>
				<li class="page_item"><a href='/proposals/' title='Proposals' class=''>Proposals</a></li>
				<li <?php print (is_page('volunteer') ? 'class="current_page_item"' : ''); ?>><a href="/volunteer/" title="Volunteer">Get Involved</a></li>
				<li <?php print (is_page('sponsors') ? 'class="current_page_item"' : ''); ?>><a href="/sponsors/" title="Sponsors">Sponsors</a></li>
				<li <?php print (!is_page(array('attend','volunteer','sponsors')) ? 'class="current_page_item"' : ''); ?>><a href="/">Blog</a></li>
			</ul>
		</div>

		<div id='menu-sidebar-background'></div>
		<div id='menu-sidebar-nav'>
			<a href='/attend' title='Register Now' class='register-now-button'>Register Now</a>
			<a href='/proposals' title='Submit a Proposal' class='submit-a-proposal-button'>Submit a Proposal</a>
		</div>
	</div><!-- #access -->
