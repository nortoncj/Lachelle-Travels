<?php
/**
 * Template Name: About Page 
 * Description: Custom Page
 * 
 */
get_header();
?>
<head>
<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/assets/css/about.css">
</head>

<body>
<section class="about" id="about">
    <?php 
    if (has_post_thumbnail()) :
        the_post_thumbnail('full', array('class' => 'about__img', 'alt' => get_the_title()));
    else :
        // Fallback image if no featured image is set
        echo '<img src="' . get_template_directory_uri() . '/assets/img/about.jpg" alt="' . get_the_title() . '" class="about__img">';
    endif;
    ?>
</section>
<section id="about-page-template">
    

    <div class="container">
    <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/founder.jpeg" alt="Lachelle Scales" class="founder__img">

    <p class="about__text"><b>Lachelle’s Adventures and Travels</b> is my passion project, born from a lifelong love of travel and the Caribbean. I’ve spent countless hours exploring the stunning beaches, vibrant cultures, and hidden gems of this region. Whether you’re seeking adventure, relaxation, or a combination of both, I’m here to help you curate the perfect Caribbean cruise or tropical getaway. From the excitement of sailing with Carnival or Disney to the tranquility of exploring Central America, I’ll ensure your trip is unforgettable. Let’s embark on an adventure together!</p>
        <?php if (have_posts()): ?>
    <?php while (have_posts()): the_post(); ?>
        <!-- Your post content here -->
    <?php the_content(); ?>
    <?php endwhile; ?>
<?php else: ?>
    <!-- Display a message when no posts are found -->
    <p>No posts found.</p>
<?php endif; ?>
    </div>
</section>
</body>

<?php get_footer() ?>