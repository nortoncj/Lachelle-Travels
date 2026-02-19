<?php
/**
 * Template Name: Services Page 
 * Description: Custom Page
 * 
 */
get_header();
?>
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&family=Open+Sans:wght@400;600&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
<style>
    :root {
        --ocean-teal: #4A9B9B;
        --deep-sea: #2C5F5F;
        --aqua-blue: #7BC4C4;
        --crisp-white: #FFFFFF;
        --warm-sand: #F5F1E8;
        --coral-accent: #FF7F7F;
    }
    
    .services-hero {
        position: relative;
        height: 70vh;
        min-height: 500px;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        margin-top: 0;
    }
    
    .services-hero-bg {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(135deg, #7BC4C4 0%, #4A9B9B 50%, #2C5F5F 100%);
        opacity: 0.9;
    }
    
    .services-hero-pattern {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-image: radial-gradient(circle at 20% 50%, rgba(255,255,255,0.1) 0%, transparent 50%), 
                          radial-gradient(circle at 80% 80%, rgba(255,255,255,0.1) 0%, transparent 50%);
        animation: wave 20s ease-in-out infinite;
    }
    
    @keyframes wave {
        0%, 100% { transform: translateY(0) scale(1); }
        50% { transform: translateY(-20px) scale(1.05); }
    }
    
    .services-hero-content {
        position: relative;
        z-index: 2;
        text-align: center;
        color: var(--crisp-white);
        max-width: 800px;
        padding: 0 24px;
    }
    
    .services-hero h1 {
        font-family: 'Playfair Display', serif;
        font-size: 4rem;
        font-weight: 700;
        margin-bottom: 24px;
        line-height: 1.2;
        text-shadow: 0 2px 20px rgba(0,0,0,0.2);
    }
    
    .services-hero-subtitle {
        font-size: 1.25rem;
        font-weight: 300;
        opacity: 0.95;
    }
    
    .services-section {
        padding: 80px 24px;
        max-width: 1200px;
        margin: 0 auto;
    }
    
    .section-intro {
        text-align: center;
        max-width: 700px;
        margin: 0 auto 60px;
    }
    
    .section-intro h2 {
        font-family: 'Montserrat', sans-serif;
        font-size: 2.625rem;
        font-weight: 700;
        color: var(--deep-sea);
        margin-bottom: 16px;
    }
    
    .section-intro p {
        font-size: 1.125rem;
        color: #666;
        line-height: 1.6;
    }
    
    .services-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
        gap: 32px;
        margin-bottom: 80px;
    }
    
    .service-card {
        background: var(--crisp-white);
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 4px 12px rgba(44,95,95,0.1);
        transition: all 0.4s cubic-bezier(0.4,0,0.2,1);
        position: relative;
    }
    
    .service-card::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, var(--aqua-blue), var(--ocean-teal));
        transform: scaleX(0);
        transform-origin: left;
        transition: transform 0.4s ease;
    }
    
    .service-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 8px 24px rgba(44,95,95,0.15);
    }
    
    .service-card:hover::before {
        transform: scaleX(1);
    }
    
    .service-icon {
        padding: 40px 32px 24px;
        text-align: center;
        background: linear-gradient(135deg, rgba(123,196,196,0.1) 0%, rgba(74,155,155,0.05) 100%);
    }
    
    .service-icon-emoji {
        font-size: 4rem;
        display: inline-block;
        animation: float 3s ease-in-out infinite;
    }
    
    @keyframes float {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-10px); }
    }
    
    .service-card:nth-child(1) .service-icon-emoji { animation-delay: 0s; }
    .service-card:nth-child(2) .service-icon-emoji { animation-delay: 0.3s; }
    .service-card:nth-child(3) .service-icon-emoji { animation-delay: 0.6s; }
    .service-card:nth-child(4) .service-icon-emoji { animation-delay: 0.9s; }
    
    .service-content {
        padding: 24px 32px 40px;
    }
    
    .service-content h3 {
        font-family: 'Montserrat', sans-serif;
        font-size: 1.5rem;
        font-weight: 700;
        color: var(--deep-sea);
        margin-bottom: 16px;
    }
    
    .service-content p {
        font-size: 1rem;
        line-height: 1.7;
        color: #666;
        margin-bottom: 24px;
    }
    
    .service-features {
        list-style: none;
        margin-bottom: 24px;
    }
    
    .service-features li {
        padding: 8px 0;
        color: #555;
        position: relative;
        padding-left: 28px;
    }
    
    .service-features li::before {
        content: "✓";
        position: absolute;
        left: 0;
        color: var(--ocean-teal);
        font-weight: bold;
        font-size: 18px;
    }
    
    .service-btn {
        display: inline-block;
        background: var(--ocean-teal);
        color: var(--crisp-white);
        text-decoration: none;
        padding: 12px 24px;
        border-radius: 4px;
        font-weight: 600;
        transition: all 0.3s ease;
        border: 2px solid var(--ocean-teal);
    }
    
    .service-btn:hover {
        background: var(--deep-sea);
        border-color: var(--deep-sea);
        transform: translateX(4px);
    }
    
    .premium-section {
        background: linear-gradient(135deg, #2C5F5F 0%, #4A9B9B 100%);
        padding: 80px 24px;
        position: relative;
        overflow: hidden;
    }
    
    .premium-pattern {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-image: repeating-linear-gradient(45deg, transparent, transparent 35px, rgba(255,255,255,0.05) 35px, rgba(255,255,255,0.05) 70px);
    }
    
    .premium-content {
        position: relative;
        z-index: 2;
        max-width: 1200px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 40px;
        color: var(--crisp-white);
    }
    
    .premium-item {
        text-align: center;
        padding: 32px;
        background: rgba(255,255,255,0.1);
        backdrop-filter: blur(10px);
        border-radius: 8px;
        border: 1px solid rgba(255,255,255,0.2);
        transition: all 0.3s ease;
    }
    
    .premium-item:hover {
        background: rgba(255,255,255,0.15);
        transform: scale(1.05);
    }
    
    .premium-icon {
        font-size: 3rem;
        margin-bottom: 16px;
    }
    
    .premium-item h3 {
        font-family: 'Montserrat', sans-serif;
        font-size: 1.375rem;
        font-weight: 600;
        margin-bottom: 12px;
    }
    
    .premium-item p {
        font-size: 1rem;
        opacity: 0.9;
        line-height: 1.6;
    }
    
    .cta-services {
        background: var(--warm-sand);
        padding: 80px 24px;
        text-align: center;
    }
    
    .cta-services h2 {
        font-family: 'Playfair Display', serif;
        font-size: 3rem;
        font-weight: 700;
        color: var(--deep-sea);
        margin-bottom: 24px;
    }
    
    .cta-services p {
        font-size: 1.25rem;
        color: #666;
        margin-bottom: 40px;
        line-height: 1.6;
    }
    
    .cta-buttons {
        display: flex;
        gap: 20px;
        justify-content: center;
        flex-wrap: wrap;
    }
    
    .btn-primary {
        background: var(--ocean-teal);
        color: var(--crisp-white);
        padding: 16px 40px;
        border-radius: 4px;
        text-decoration: none;
        font-weight: 600;
        font-size: 1.125rem;
        transition: all 0.3s ease;
        display: inline-block;
        border: 2px solid var(--ocean-teal);
    }
    
    .btn-primary:hover {
        background: var(--deep-sea);
        border-color: var(--deep-sea);
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(44,95,95,0.3);
    }
    
    .btn-secondary {
        background: transparent;
        color: var(--deep-sea);
        padding: 16px 40px;
        border-radius: 4px;
        text-decoration: none;
        font-weight: 600;
        font-size: 1.125rem;
        border: 2px solid var(--ocean-teal);
        transition: all 0.3s ease;
        display: inline-block;
    }
    
    .btn-secondary:hover {
        background: var(--ocean-teal);
        color: var(--crisp-white);
        transform: translateY(-2px);
    }
    
    @media (max-width: 768px) {
        .services-hero h1 { font-size: 2.5rem; }
        .services-hero-subtitle { font-size: 1.125rem; }
        .section-intro h2 { font-size: 2rem; }
        .services-grid { grid-template-columns: 1fr; }
        .cta-services h2 { font-size: 2.25rem; }
        .cta-buttons { flex-direction: column; align-items: center; }
        .btn-primary, .btn-secondary { width: 100%; max-width: 300px; }
    }
</style>
</head>

<body>
<section class="services-hero">
    <?php 
    if (has_post_thumbnail()) :
        the_post_thumbnail('full', array('class' => 'home__img', 'alt' => get_the_title()));
    else :
        echo '<img src="' . get_template_directory_uri() . '/assets/img/about.jpg" alt="' . get_the_title() . '" class="home__img">';
    endif;
    ?>
    <div class="services-hero-bg"></div>
    <div class="services-hero-pattern"></div>
    <div class="services-hero-content">
        <h1>Your Journey, Our Expertise</h1>
        <p class="services-hero-subtitle">From crystal-clear waters to unforgettable adventures, we craft experiences that become lifelong memories</p>
    </div>
</section>

<section class="services-section">
    <div class="section-intro">
        <h2>Discover Your Perfect Escape</h2>
        <p>Whether you're seeking the ultimate cruise experience or a luxury resort getaway, we handle every detail so you can focus on what matters: making memories.</p>
    </div>
    
    <div class="services-grid">
        <div class="service-card">
            <div class="service-icon">
                <span class="service-icon-emoji">🚢</span>
            </div>
            <div class="service-content">
                <h3>Luxury Cruise Experiences</h3>
                <p>Set sail on the world's most prestigious cruise lines. From Caribbean sunsets to Mediterranean adventures, we curate voyages that redefine relaxation.</p>
                <ul class="service-features">
                    <li>Exclusive cabin selections and upgrades</li>
                    <li>Customized shore excursions</li>
                    <li>Specialty dining reservations</li>
                    <li>Onboard credit packages</li>
                    <li>Pre and post-cruise arrangements</li>
                </ul>
                <a href="/contact" class="service-btn">Explore Cruises</a>
            </div>
        </div>
        
        <div class="service-card">
            <div class="service-icon">
                <span class="service-icon-emoji">🏝️</span>
            </div>
            <div class="service-content">
                <h3>Premium Resort Getaways</h3>
                <p>Immerse yourself in paradise at hand-picked resorts where luxury meets authentic local culture. Every stay is tailored to your vision of perfection.</p>
                <ul class="service-features">
                    <li>Curated resort selections worldwide</li>
                    <li>Room upgrades and special amenities</li>
                    <li>Spa and wellness packages</li>
                    <li>Private beach and pool access</li>
                    <li>Concierge-level trip planning</li>
                </ul>
                <a href="/contact" class="service-btn">Find Your Resort</a>
            </div>
        </div>
        
        <div class="service-card">
            <div class="service-icon">
                <span class="service-icon-emoji">🗺️</span>
            </div>
            <div class="service-content">
                <h3>Authentic Excursions</h3>
                <p>Go beyond the tourist traps. Our authentic excursions connect you with local culture, hidden gems, and experiences you'll never forget.</p>
                <ul class="service-features">
                    <li>Local expert-guided tours</li>
                    <li>Off-the-beaten-path adventures</li>
                    <li>Cultural immersion experiences</li>
                    <li>Private group arrangements</li>
                    <li>Photography and memory packages</li>
                </ul>
                <a href="/contact" class="service-btn">Plan Adventures</a>
            </div>
        </div>
        
        <div class="service-card">
            <div class="service-icon">
                <span class="service-icon-emoji">✨</span>
            </div>
            <div class="service-content">
                <h3>Concierge Travel Planning</h3>
                <p>From concept to reality, we handle everything. Sit back while we orchestrate every detail of your dream vacation with precision and care.</p>
                <ul class="service-features">
                    <li>Personalized itinerary creation</li>
                    <li>Flight and transfer coordination</li>
                    <li>Travel insurance consultation</li>
                    <li>24/7 support during your trip</li>
                    <li>Special occasion planning</li>
                </ul>
                <a href="/contact" class="service-btn">Start Planning</a>
            </div>
        </div>
    </div>
</section>

<section class="premium-section">
    <div class="premium-pattern"></div>
    <div class="premium-content">
        <div class="premium-item">
            <div class="premium-icon">🏆</div>
            <h3>Premium Service</h3>
            <p>Recognized for excellence in personalized travel planning and customer satisfaction</p>
        </div>
        <div class="premium-item">
            <div class="premium-icon">💎</div>
            <h3>Exclusive Access</h3>
            <p>VIP rates, room upgrades, and perks you won't find anywhere else</p>
        </div>
        <div class="premium-item">
            <div class="premium-icon">🌍</div>
            <h3>Global Network</h3>
            <p>Partnerships with top-tier resorts and cruise lines worldwide</p>
        </div>
        <div class="premium-item">
            <div class="premium-icon">🤝</div>
            <h3>Personal Touch</h3>
            <p>Dedicated service that knows your preferences and anticipates your needs</p>
        </div>
    </div>
</section>

<section class="cta-services">
    <h2>Ready to Discover Your Paradise?</h2>
    <p>Let's turn your travel dreams into reality. Whether it's your first cruise or your fiftieth resort stay, we're here to make it unforgettable.</p>
    <div class="cta-buttons">
        <a href="/contact" class="btn-primary">Book Your Adventure</a>
        <a href="/about" class="btn-secondary">Learn More About Us</a>
    </div>
</section>

<?php if (have_posts()): ?>
    <div class="container" style="padding: 40px 24px;">
        <?php while (have_posts()): the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; ?>
    </div>
<?php endif; ?>

</body>

<?php get_footer(); ?>
