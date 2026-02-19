<?php
/**
 * Template Name: Contact Page 
 * Description: Custom Page
 * 
 */
get_header();
?>
<head>
<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/assets/css/contact.css">
</head>

<body>
<section class="contact" id="contact">
<?php 
    if (has_post_thumbnail()) :
        the_post_thumbnail('full', array('class' => 'contact__img', 'alt' => get_the_title()));
    else :
        // Fallback image if no featured image is set
        echo '<img src="' . get_template_directory_uri() . '/assets/img/about.jpg" alt="' . get_the_title() . '" class="contact__img">';
    endif;
    ?>
</section>
<section id="contact-page-template">
    

    <div class="container">
        
       <div class="contact__message">
        <h2>Booking</h2>
        <p>Do you want to enquire about our pricing, current offers and arrangements we can help you with? Give us a call or send in your concerns through the form below.</p>
       </div>
        <?php if (have_posts()): ?>
    <?php while (have_posts()): the_post(); ?>
        <!-- Your post content here -->
    <?php the_content(); ?>
    <?php endwhile; ?>
<?php else: ?>
    <!-- Display a message when no posts are found -->
    <p>No posts found.</p>
<?php endif; ?>
<div class="contact-info">
    <p>lachelleat@gmail.com </p>
    <p>737-313-7782</p>
</div>

    </div>
</section>
</body>

<?php get_footer() ?>