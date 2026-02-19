<?php get_header(); ?>

<style>
    .nav__logo:hover{
  color:white !important;
}
    </style>
<body>
     
 <!--==================== HOME ====================-->
 <section class="about" id="about">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/home1.jpg" alt="" class="home__img">

                <div class="home__container container grid">
                    <div class="home__data">
                        <span class="home__data-subtitle">Discover your place</span>
                        <h1 class="home__data-title">Explore The <br> Best <b>Beautiful <br> Beaches and Resorts</b></h1>
                        <a href="https://docs.google.com/forms/d/1w9HZqbpkCg_vaecdt5hmqQkeBLMgZH_1izPG1OfxcM8/prefill" class="button2">Explore Now</a>

                    </div>

                    <div class="home__social">
                        <!-- <a href="https://www.facebook.com/" target="_blank" class="home__social-link">
                            <i class="fa-brands fa-facebook-square"></i>
                        </a>
                        <a href="https://www.instagram.com/" target="_blank" class="home__social-link">
                            <i class="fa-brands fa-instagram"></i>
                        </a> -->
                        <!-- <a href="https://twitter.com/" target="_blank" class="home__social-link">
                            <i class="fa-brands fa-x-twitter"></i>
                        </a> -->
                    </div>

                    <div class="home__info">
                    <div>
    <?php
    $args = array(
        'posts_per_page' => 1,
        'orderby' => 'date',
        'order' => 'DESC'
    );
    $latest_post = new WP_Query($args);
    if ($latest_post->have_posts()) :
        while ($latest_post->have_posts()) : $latest_post->the_post();
    ?>
        <span class="home__info-title"><?php the_title(); ?></span>
        <a href="<?php the_permalink(); ?>" class="button button--flex button--link home__info-button">
            Read More <i class="ri-arrow-right-line"></i>
        </a>
    <?php
        endwhile;
        wp_reset_postdata();
    else :
    ?>
        <span class="home__info-title">No posts found</span>
    <?php endif; ?>
</div>

                        <div class="home__info-overlay">
                            <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/home2.jpg" alt="" class="home__info-img">
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== ABOUT ====================-->
            <section class="about section" id="about">
                <div class="about__container container grid">
                    <div class="about__data">
                        <h2 class="section__title about__title">More Information <br> About The Best Beaches</h2>
                        <p class="about__description">You can find the most beautiful and pleasant places at the best 
                            prices with special discounts, you choose the place we will guide you all the way to wait, get your 
                            place now.
                        </p>
                        <a href="https://docs.google.com/forms/d/1w9HZqbpkCg_vaecdt5hmqQkeBLMgZH_1izPG1OfxcM8/prefill" class="button">Reserve a place</a>
                    </div>

                    <div class="about__img">
                        <div class="about__img-overlay">
                            <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/about1.jpg" alt="" class="about__img-one">
                        </div>

                        <div class="about__img-overlay">
                            <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/about2.jpg" alt="" class="about__img-two">
                        </div>
                    </div>
                </div>
            </section>
            
            <!--==================== DISCOVER ====================-->
            <section class="discover section" id="discover">
                <h2 class="section__title">Discover the most <br> attractive places</h2>
                
                <div class="discover__container container swiper-container">
                    <div class="swiper-wrapper">
                        <!--==================== DISCOVER 1 ====================-->
                        <div class="discover__card swiper-slide">
                            <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/discover1.jpg" alt="" class="discover__img">
                            <div class="discover__data">
                                <h2 class="discover__title">Bahamas</h2>
                                <span class="discover__description">tours available</span>
                            </div>
                        </div>

                        <!--==================== DISCOVER 2 ====================-->
                        <div class="discover__card swiper-slide">
                            <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/discover2.jpg" alt="" class="discover__img">
                            <div class="discover__data">
                                <h2 class="discover__title">Hawaii</h2>
                                <span class="discover__description">tours available</span>
                            </div>
                        </div>

                        <!--==================== DISCOVER 3 ====================-->
                        <div class="discover__card swiper-slide">
                            <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/discover3.jpg" alt="" class="discover__img">
                            <div class="discover__data">
                                <h2 class="discover__title">Jamaica</h2>
                                <span class="discover__description">tours available</span>
                            </div>
                        </div>

                        <!--==================== DISCOVER 4 ====================-->
                        <div class="discover__card swiper-slide">
                            <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/discover4.jpg" alt="" class="discover__img">
                            <div class="discover__data">
                                <h2 class="discover__title">Mexico</h2>
                                <span class="discover__description"> tours available</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== EXPERIENCE ====================-->
            <section class="experience section">
                <h2 class="section__title">With Our Experience <br> We Will Serve You</h2>

                <div class="experience__container container grid">
                    <div align="center" class="">
                        <h3>
                            We can help you fit your stay and experience within your allotted budget.
                        </h3>
                    </div>
                    <div class="experience__content grid">
                        
                        <!-- <div class="experience__data">
                            <h2 class="experience__number">20</h2>
                            <span class="experience__description">Year <br> Experience</span>
                        </div>

                        <div class="experience__data">
                            <h2 class="experience__number">75</h2>
                            <span class="experience__description">Complete <br> tours</span>
                        </div>

                        <div class="experience__data">
                            <h2 class="experience__number">650+</h2>
                            <span class="experience__description">Tourist <br> Destination</span>
                        </div> -->
                    </div>

                    <div class="experience__img grid">
                        <div class="experience__overlay">
                            <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/experience1.jpg" alt="" class="experience__img-one">
                        </div>
                        
                        <div class="experience__overlay">
                            <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/experience2.jpg" alt="" class="experience__img-two">
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== VIDEO ====================-->
            <section class="video section">
                <h2 class="section__title">Video Tour</h2>

                <div class="video__container container">
                    <p class="video__description">Find out more with our video of the most beautiful and 
                        pleasant places for you and your family.
                    </p>

                    <div class="video__content">
                        <video id="video-file">
                            <source src="<?php echo get_bloginfo('template_directory'); ?>/assets/video/spin.mp4" type="video/mp4">
                        </video>

                        <button class="button button--flex video__button" id="video-button">
                            <i class="ri-play-line video__button-icon" id="video-icon"></i>
                        </button>
                    </div>
                </div>
            </section>

            <!--==================== PLACES ====================-->
            <section class="place section" id="place">
                <h2 class="section__title">Choose Your Place</h2>

                <div class="place__container container grid">
                    <!--==================== PLACES CARD 1 ====================-->
                    <div class="place__card">
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/place1.jpg" alt="" class="place__img">
                        
                        <div class="place__content">
                            <span class="place__rating">
                                <i class="ri-star-line place__rating-icon"></i>
                                <span class="place__rating-number">4.8</span>
                            </span>

                            <div class="place__data">
                                <h3 class="place__title">Puerto Vallarta</h3>
                                <span class="place__subtitle">Mexico</span>
                                <!-- <span class="place__price">$2499</span> -->
                            </div>
                        </div>

                        <!-- <button class="button button--flex place__button">
                            <i class="ri-arrow-right-line"></i>
                        </button> -->
                    </div>

                    <!--==================== PLACES CARD 2 ====================-->
                    <div class="place__card">
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/place2.jpg" alt="" class="place__img">
                        
                        <div class="place__content">
                            <span class="place__rating">
                                <i class="ri-star-line place__rating-icon"></i>
                                <span class="place__rating-number">5.0</span>
                            </span>

                            <div class="place__data">
                                <h3 class="place__title">Tiko Tiko</h3>
                                <span class="place__subtitle">St Maarten</span>
                                <!-- <span class="place__price">$1599</span> -->
                            </div>
                        </div>

                        <!-- <button class="button button--flex place__button">
                            <i class="ri-arrow-right-line"></i>
                        </button> -->
                    </div>

                    <!--==================== PLACES CARD 3 ====================-->
                    <div class="place__card">
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/place3.jpg" alt="" class="place__img">
                        
                        <div class="place__content">
                            <span class="place__rating">
                                <i class="ri-star-line place__rating-icon"></i>
                                <span class="place__rating-number">4,9</span>
                            </span>

                            <div class="place__data">
                                <h3 class="place__title">Hawaii</h3>
                                <span class="place__subtitle">US</span>
                                <!-- <span class="place__price">$3499</span> -->
                            </div>
                        </div>

                        <!-- <button class="button button--flex place__button">
                            <i class="ri-arrow-right-line"></i>
                        </button> -->
                    </div>

                    <!--==================== PLACES CARD 4 ====================-->
                    <div class="place__card">
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/place4.jpg" alt="" class="place__img">
                        
                        <div class="place__content">
                            <span class="place__rating">
                                <i class="ri-star-line place__rating-icon"></i>
                                <span class="place__rating-number">4.8</span>
                            </span>

                            <div class="place__data">
                                <h3 class="place__title">Cancun</h3>
                                <span class="place__subtitle">Mexico</span>
                                <!-- <span class="place__price">$2499</span> -->
                            </div>
                        </div>

                        <!-- <button class="button button--flex place__button">
                            <i class="ri-arrow-right-line"></i>
                        </button> -->
                    </div>

                    <!--==================== PLACES CARD 5 ====================-->
                    <div class="place__card">
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/place5.jpg" alt="" class="place__img">
                        
                        <div class="place__content">
                            <span class="place__rating">
                                <i class="ri-star-line place__rating-icon"></i>
                                <span class="place__rating-number">4.8</span>
                            </span>

                            <div class="place__data">
                                <h3 class="place__title">Montego Bay</h3>
                                <span class="place__subtitle">Jamaica</span>
                                <!-- <span class="place__price">$1999</span> -->
                            </div>
                        </div>

                        <!-- <button class="button button--flex place__button">
                            <i class="ri-arrow-right-line"></i>
                        </button> -->
                    </div>

                    <!--==================== PLACES CARD 1 ====================-->
                    <div class="place__card">
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/place1.jpg" alt="" class="place__img">
                        
                        <div class="place__content">
                            <span class="place__rating">
                                <i class="ri-star-line place__rating-icon"></i>
                                <span class="place__rating-number">4.8</span>
                            </span>

                            <div class="place__data">
                                <h3 class="place__title">Nassau</h3>
                                <span class="place__subtitle">Bahamas</span>
                                <!-- <span class="place__price">$499</span> -->
                            </div>
                        </div>

                        <!-- <button class="button button--flex place__button">
                            <i class="ri-arrow-right-line"></i>
                        </button> -->
                    </div>
                </div>
            </section>
<!--==================== SPONSORS ====================-->
     <section class="sponsor section">
                <div class="sponsor__container container grid table"
                style="position: relative;" >
                    <div class="sponsor__content">
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/Disney_Cruise_Logo.png" alt="" class="sponsor__img column">
                    </div>
                    <div class="sponsor__content">
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/carnival.png" alt="" class="sponsor__img sponsor__size column">
                    </div>
                    <div class="sponsor__content ">
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/evolution.png"  alt="" class="sponsor__img column archer">
                    </div>
                    <div class="sponsor__content" ">
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/princess.png" alt="" class="sponsor__img sponsor__size column">
                    </div>
                    <div class="sponsor__content">
                        <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/sponsors1.png" alt="" class="sponsor__img sponsor__size column">
                    </div>
                </div>
            </section>
            <!--==================== TESTIMONIALS ====================-->
            <?php 
$params = array(
    'limit' => -1, // fetches all pods
    'orderby' => 'RAND()'
);
$mypod = pods('testimonial', $params);
$totalItems = $mypod->total(); 

function truncateText($text, $maxLength = 140) {
    if (strlen($text) > $maxLength) {
        return substr($text, 0, $maxLength) . '...';
    } else {
        return $text;
    }
}
?>
<section class="testimonials section">
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="d-none hide section-title bg-white text-center text-primary px-3">Testimonial</h6>
                <h1 class="mb-5">What Our Clients Say</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <?php 
                if ($totalItems > 0) {
                    while ($mypod->fetch()):
                        $client_name = $mypod->field('client_name');
                        $location = $mypod->field('location');
                        $content = strip_tags(truncateText($mypod->field('post_content')));
                        $post_id = $mypod->id();
                        $image_url = get_the_post_thumbnail_url($post_id, 'thumbnail');
                        if (!$image_url) {
                            $image_url = get_bloginfo('template_directory') . '/assets/img/testimonial-1.jpg';
                        }
                ?>
                <div class="testimonial-item bg-white text-center border p-4">
                    <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="<?php echo esc_url($image_url); ?>" style="width: 80px; height: 80px;">
                    <h5 class="mb-0"><?php echo esc_html($client_name); ?></h5>
                    <p><?php echo esc_html($location); ?></p>
                    <p class="mb-0"><?php echo esc_html($content); ?></p>
                </div>
                <?php 
                    endwhile; 
                } else {
                    echo "<p>No testimonials found.</p>";
                }
                ?>
            </div>
        </div>
    </div>
</section>
            </section>
</body>
</html>
<?php get_footer(); ?>
