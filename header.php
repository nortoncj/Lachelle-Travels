<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- <link rel="shortcut icon" href="<?php echo get_bloginfo('template_directory'); ?>/assets/img/favicon.png" type="image/png"> -->

        <!--=============== REMIXICONS ===============-->
        <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/assets/icons/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
        
        <!--=============== OWL CAROUSEL CSS ===============-->
        <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/assets/lib/owlcarousel/assets/owl.carousel.min.css">
        <link href="<?php echo get_bloginfo('template_directory'); ?>/assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/style.css">
        
        <!-- <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/assets/lib/animate/animate.min.css">
        <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/assets/lib/tempusdominus-bootstrap-4.min.css"> -->

        <!--=============== SWIPER CSS ===============-->
        <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/assets/css/swiper-bundle.min.css">
        

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/assets/css/styles.css">
        
        
        
        

        <title><?php
    if ($_SERVER['REQUEST_URI'] !== '/') {
            echo get_bloginfo('name') . ' | ' . wp_title('', false);
    } 
     ?> </title>
    </head>
    <body>
        
        <header class="header" id="header">
        <?php 
      function acronym($str, $as_space = array('-')) {
      $str = str_replace($as_space, ' ', trim($str));
      $ret = '';
      foreach(explode(' ', $str) as $word) {
      $ret .= strtoupper($word[0]);
      }
      return $ret;
    }

    $site_name = get_bloginfo('name');
      ?>
            <div class="header-info">
                <div class="">
                    <a href="tel:731-313-7782"><i class="fa-solid fa-phone"></i> 731-313-7782</a> 
                </div>
                
                <div class="header-end">
                    <a href="https://www.instagram.com/lachelletravels/" class="social-link"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://www.facebook.com/share/g/19d7QrkYyj/"><i class="fa-brands fa-facebook"></i></a>
                    <a href="mailto:lachelleat@gmail.com"><i class="fa-solid fa-envelope"></i> lachelleat@gmail.com</a> 
                </div>
                
            </div>
           
            <nav class="nav container">
                
                <a href="/" class="nav__logo">
                    <!-- <?php echo acronym($site_name) ?>  -->
                <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/lachelle_badge_2026.png" alt="" class="logo_image"></a>

                

                <div class="nav__menu" id="nav-menu">
                    
                <ul class="nav__list">
                    <?php
                    $menu_items = array(
                        '/' => 'Home',
                        '/about' => 'About',
                        '/services' => 'Services',
                        '/contact' => 'Contact'
                    );
                    
                    $current_url = $_SERVER['REQUEST_URI'];
                    
                    foreach ($menu_items as $url => $title) :
                        $is_active = ($current_url == $url) ? 'active-link' : '';
                    ?>
                    
                    <li class="nav__item">
                        <a href="<?php echo esc_url(home_url($url)); ?>" class="nav__link <?php echo $is_active; ?>"><?php echo $title; ?></a>
                    </li>
                <?php endforeach; ?>
                <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/logo.png" alt="" class="logo_image_mobile">
            </ul>
            
        
                        

                    <!-- <div class="nav__dark"> -->
                    
                        <!-- Theme change button -->
                        <!-- <span class="change-theme-name">Dark mode</span>
                        <i class="ri-moon-line change-theme" id="theme-button"></i>
                    </div> -->

                    <i class="ri-close-line nav__close" id="nav-close"></i>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class="fa-solid fa-bars"></i>
                </div>
            </nav>
            
        </header>

        <main class="main">