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
<style>
    .about-hero {
        position: relative;
        height: 60vh;
        min-height: 400px;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
    }
    
    .about-hero__overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(135deg, rgba(74, 155, 155, 0.85) 0%, rgba(44, 95, 95, 0.85) 100%);
    }
    
    .about-hero__content {
        position: relative;
        z-index: 2;
        text-align: center;
        color: white;
        padding: 0 24px;
    }
    
    .about-hero__content h1 {
        font-family: 'Playfair Display', serif;
        font-size: 3.5rem;
        font-weight: 700;
        margin-bottom: 1rem;
        text-shadow: 2px 2px 8px rgba(0,0,0,0.3);
    }
    
    .about-hero__content p {
        font-size: 1.5rem;
        font-weight: 300;
        opacity: 0.95;
    }
    
    .about-story {
        max-width: 1200px;
        margin: 80px auto;
        padding: 0 24px;
    }
    
    .about-story__grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 60px;
        align-items: center;
        margin-bottom: 80px;
    }
    
    .founder__img {
        width: 100%;
        max-width: 400px;
        border-radius: 8px;
        box-shadow: 0 8px 24px rgba(44, 95, 95, 0.2);
    }
    
    .about-story__content h2 {
        font-family: 'Montserrat', sans-serif;
        font-size: 2.5rem;
        color: #2C5F5F;
        margin-bottom: 24px;
    }
    
    .about-story__content p {
        font-size: 1.125rem;
        line-height: 1.8;
        color: #555;
        margin-bottom: 20px;
    }
    
    .values-section {
        background: #F5F1E8;
        padding: 80px 24px;
        margin-bottom: 0;
    }
    
    .values-grid {
        max-width: 1200px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 40px;
    }
    
    .value-card {
        background: white;
        padding: 40px 32px;
        border-radius: 8px;
        text-align: center;
        box-shadow: 0 4px 12px rgba(44, 95, 95, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .value-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 8px 24px rgba(44, 95, 95, 0.15);
    }
    
    .value-card__icon {
        font-size: 3rem;
        margin-bottom: 20px;
    }
    
    .value-card h3 {
        font-family: 'Montserrat', sans-serif;
        font-size: 1.5rem;
        color: #2C5F5F;
        margin-bottom: 16px;
    }
    
    .value-card p {
        color: #666;
        line-height: 1.6;
    }
    
    .cta-about {
        background: linear-gradient(135deg, #4A9B9B 0%, #2C5F5F 100%);
        padding: 80px 24px;
        text-align: center;
        color: white;
    }
    
    .cta-about h2 {
        font-family: 'Playfair Display', serif;
        font-size: 2.5rem;
        margin-bottom: 24px;
    }
    
    .cta-about p {
        font-size: 1.25rem;
        margin-bottom: 40px;
        opacity: 0.95;
    }
    
    .btn-light {
        display: inline-block;
        background: white;
        color: #2C5F5F;
        padding: 16px 40px;
        border-radius: 4px;
        text-decoration: none;
        font-weight: 600;
        font-size: 1.125rem;
        transition: all 0.3s ease;
    }
    
    .btn-light:hover {
        background: #F5F1E8;
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.2);
    }
    
    @media (max-width: 768px) {
        .about-hero__content h1 {
            font-size: 2.5rem;
        }
        
        .about-story__grid {
            grid-template-columns: 1fr;
            gap: 40px;
        }
        
        .founder__img {
            margin: 0 auto;
            display: block;
        }
    }
</style>
</head>

<body>
<section class="about-hero" id="about">
    <?php 
    if (has_post_thumbnail()) :
        the_post_thumbnail('full', array('class' => 'home__img', 'alt' => get_the_title()));
    else :
        echo '<img src="' . get_template_directory_uri() . '/assets/img/about.jpg" alt="' . get_the_title() . '" class="home__img">';
    endif;
    ?>
    <div class="about-hero__overlay"></div>
    <div class="about-hero__content">
        <h1>About Lachelle's Adventures</h1>
        <p>Your Journey, Our Expertise</p>
    </div>
</section>

<section class="about-story">
    <div class="about-story__grid">
        <div>
            <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/founder.jpeg" alt="Lachelle Scales" class="founder__img">
        </div>
        <div class="about-story__content">
            <h2>Meet Lachelle</h2>
            <p><strong>Lachelle's Adventures and Travels</strong> is born from a lifelong passion for travel and the Caribbean. With countless hours exploring stunning beaches, vibrant cultures, and hidden gems, I've dedicated myself to helping others discover their perfect escape.</p>
            
            <p>Whether you're seeking adventure, relaxation, or a combination of both, I'm here to curate the perfect Caribbean cruise or tropical getaway. From the excitement of sailing with premium cruise lines to the tranquility of exploring Central America's pristine resorts, I ensure your trip is unforgettable.</p>
            
            <p>My mission is simple: to create premium travel experiences that match your dreams while respecting your budget. Every journey is personal, and I take pride in crafting adventures that become cherished memories.</p>
        </div>
    </div>
    
    <div class="container">
        <?php if (have_posts()): ?>
            <?php while (have_posts()): the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>

<section class="values-section">
    <div class="container">
        <div class="section-intro" style="text-align: center; margin-bottom: 60px;">
            <h2 style="font-family: 'Montserrat', sans-serif; font-size: 2.5rem; color: #2C5F5F; margin-bottom: 16px;">Why Choose Us</h2>
            <p style="font-size: 1.125rem; color: #666;">Experience the difference of personalized travel planning</p>
        </div>
    </div>
    
    <div class="values-grid">
        <div class="value-card">
            <div class="value-card__icon">🏝️</div>
            <h3>Expert Knowledge</h3>
            <p>Years of hands-on experience exploring the Caribbean and beyond means you get insider tips and authentic recommendations.</p>
        </div>
        
        <div class="value-card">
            <div class="value-card__icon">💎</div>
            <h3>Luxury Within Reach</h3>
            <p>Premium experiences don't have to break the bank. We find the perfect balance of quality and value for your budget.</p>
        </div>
        
        <div class="value-card">
            <div class="value-card__icon">🤝</div>
            <h3>Personal Touch</h3>
            <p>Every traveler is unique. We take time to understand your preferences and craft journeys that reflect your vision.</p>
        </div>
        
        <div class="value-card">
            <div class="value-card__icon">✨</div>
            <h3>Stress-Free Planning</h3>
            <p>From booking to boarding, we handle every detail so you can focus on excitement and anticipation, not logistics.</p>
        </div>
    </div>
</section>

<section class="cta-about">
    <h2>Let's Embark on an Adventure Together</h2>
    <p>Ready to discover your perfect escape? We're here to make it happen.</p>
    <a href="/contact" class="btn-light">Start Planning Your Journey</a>
</section>
</body>

<?php get_footer() ?>
