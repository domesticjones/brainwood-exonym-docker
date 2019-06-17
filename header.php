<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title><?php wp_title(); ?></title>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
		<div id="container">
			<header id="header-tagline">
				<h1><?php echo get_bloginfo('description'); ?></h1>
			</header>
      <header id="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">
          <a href="<?php echo get_home_url(); ?>" id="logo">
						<img src="<?php ex_logo(); ?>" alt="Logo for <?php ex_brand(); ?>" />
					</a>
          <nav class="nav-header" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
						<ul>
							<?php
								function ex_current($look) {
									$navActive = '';
									if($look == 'home' && is_front_page()) {
										$navActive = 'is-active';
									} elseif($look == 'work' && is_archive('work')) {
		 								$navActive = 'is-active';
									}
									return $navActive;
								}
							?>
							<li class="<?php echo ex_current('home'); ?>">
								<a href="<?php echo get_home_url(); ?>"><span>About</span></a>
								<ul class="nav-child">
									<li><a href="<?php echo '#' . exmod_esc(get_field('services_module_meta')['short_name']); ?>"><?php echo get_field('services_module_meta')['short_name']; ?></a></li>
									<li><a href="#recent">Recent</a></li>
									<li><a href="<?php echo '#' . exmod_esc(get_field('about_module_meta')['short_name']); ?>"><?php echo get_field('about_module_meta')['short_name']; ?></a></li>
								</ul>
							</li>
							<li class="<?php echo ex_current('work'); ?>">
								<a href="<?php echo get_post_type_archive_link('work'); ?>">Work</a>
							</li>
							<li>
								<a href="#contact">Get In Touch</a>
							</li>
						</ul>
          </nav>
					<div class="nav-contact">
          	<?php ex_contact('phone', true, 'global'); ex_contact('email', true, 'global'); ex_social(); ?>
					</div>
      </header>
