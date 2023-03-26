<!DOCTYPE html>
<!-- looks at the language of your site and the language setting you chose in wp and outputs the appropriate attribute -->
<html <?php language_attributes(); ?>> 
<head>
    <!-- Tells the web browser what type of characters you'll be using on the page -->
    <meta charset="<?php bloginfo('charset'); ?>"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- allows wordpress to be in control of loading different files and assets -->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>> <!-- Let's wp add a class attribute and provide values which change depending on which page a user is on -->
<header class="site-header">
    <div class="container">
        <h1 class="school-logo-text float-left">
            <a href="<?php echo site_url() ?>"><strong>Fictional</strong> University</a> <!-- Without an argument the function just gives us the root (home) url -->
        </h1>
        <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
        <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
        <div class="site-header__menu group">
            <nav class="main-navigation">
                <ul>
                    <li <?php if(is_page('about-us') or wp_get_post_parent_id(0) == 11) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url('/about-us') ?>">About Us</a></li> <!-- this function automatically gets the root url of the current wp site; the argument passed gets added onto it -->
                    <li><a href="#">Programs</a></li>
                    <li <?php if(get_post_type() == 'event') echo 'class="current-menu-item"' ?>><a href="<?php echo get_post_type_archive_link('event'); ?>">Events</a></li>
                    <li><a href="#">Campuses</a></li>
                    <li <?php if(get_post_type() == 'post') echo 'class="current-menu-item"' ?>><a href="<?php echo site_url('/blog'); ?>">Blog</a></li>
                </ul>
            </nav>
            <div class="site-header__util">
                <a href="#" class="btn btn--small btn--orange float-left push-right">Login</a>
                <a href="#" class="btn btn--small btn--dark-orange float-left">Sign Up</a>
                <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
            </div>
        </div>
    </div>
</header>
