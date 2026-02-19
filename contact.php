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
<style>
    :root {
        --ocean-teal: #4A9B9B;
        --deep-sea: #2C5F5F;
        --aqua-blue: #7BC4C4;
        --crisp-white: #FFFFFF;
        --warm-sand: #F5F1E8;
    }
    
    .contact-hero {
        position: relative;
        height: 50vh;
        min-height: 400px;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
    }
    
    .contact-hero__overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(135deg, rgba(74, 155, 155, 0.9) 0%, rgba(44, 95, 95, 0.9) 100%);
    }
    
    .contact-hero__content {
        position: relative;
        z-index: 2;
        text-align: center;
        color: white;
        padding: 0 24px;
    }
    
    .contact-hero__content h1 {
        font-family: 'Playfair Display', serif;
        font-size: 3.5rem;
        font-weight: 700;
        margin-bottom: 1rem;
        text-shadow: 2px 2px 8px rgba(0,0,0,0.3);
    }
    
    .contact-hero__content p {
        font-size: 1.375rem;
        font-weight: 300;
        opacity: 0.95;
    }
    
    .contact-main {
        max-width: 1200px;
        margin: 80px auto;
        padding: 0 24px;
    }
    
    .contact-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 60px;
        margin-bottom: 60px;
    }
    
    .contact-info-section h2 {
        font-family: 'Montserrat', sans-serif;
        font-size: 2.25rem;
        color: var(--deep-sea);
        margin-bottom: 24px;
    }
    
    .contact-info-section p {
        font-size: 1.125rem;
        line-height: 1.8;
        color: #555;
        margin-bottom: 32px;
    }
    
    .contact-methods {
        display: flex;
        flex-direction: column;
        gap: 24px;
    }
    
    .contact-method {
        display: flex;
        align-items: center;
        gap: 20px;
        padding: 24px;
        background: var(--warm-sand);
        border-radius: 8px;
        transition: all 0.3s ease;
    }
    
    .contact-method:hover {
        background: var(--aqua-blue);
        transform: translateX(8px);
        box-shadow: 0 4px 12px rgba(44, 95, 95, 0.2);
    }
    
    .contact-method:hover .contact-method__icon {
        color: white;
    }
    
    .contact-method:hover .contact-method__info h3,
    .contact-method:hover .contact-method__info p,
    .contact-method:hover .contact-method__info a {
        color: white;
    }
    
    .contact-method__icon {
        font-size: 2.5rem;
        color: var(--ocean-teal);
        transition: color 0.3s ease;
    }
    
    .contact-method__info h3 {
        font-family: 'Montserrat', sans-serif;
        font-size: 1.25rem;
        color: var(--deep-sea);
        margin-bottom: 8px;
        font-weight: 600;
    }
    
    .contact-method__info p,
    .contact-method__info a {
        font-size: 1rem;
        color: #666;
        text-decoration: none;
        transition: color 0.3s ease;
    }
    
    .contact-method__info a:hover {
        text-decoration: underline;
    }
    
    .contact-form-section {
        background: white;
        padding: 40px;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(44, 95, 95, 0.1);
    }
    
    .contact-form-section h2 {
        font-family: 'Montserrat', sans-serif;
        font-size: 2rem;
        color: var(--deep-sea);
        margin-bottom: 24px;
    }
    
    .form-group {
        margin-bottom: 24px;
    }
    
    .form-group label {
        display: block;
        font-weight: 600;
        color: var(--deep-sea);
        margin-bottom: 8px;
        font-size: 1rem;
    }
    
    .form-group input,
    .form-group textarea,
    .form-group select {
        width: 100%;
        padding: 14px 16px;
        border: 2px solid var(--aqua-blue);
        border-radius: 4px;
        font-size: 1rem;
        font-family: 'Open Sans', sans-serif;
        transition: all 0.3s ease;
    }
    
    .form-group input:focus,
    .form-group textarea:focus,
    .form-group select:focus {
        outline: none;
        border-color: var(--ocean-teal);
        box-shadow: 0 0 0 3px rgba(74, 155, 155, 0.1);
    }
    
    .form-group textarea {
        resize: vertical;
        min-height: 150px;
    }
    
    .submit-btn {
        background: var(--ocean-teal);
        color: white;
        padding: 16px 40px;
        border: 2px solid var(--ocean-teal);
        border-radius: 4px;
        font-size: 1.125rem;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        width: 100%;
    }
    
    .submit-btn:hover {
        background: var(--deep-sea);
        border-color: var(--deep-sea);
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(44, 95, 95, 0.3);
    }
    
    .hours-section {
        background: var(--warm-sand);
        padding: 40px;
        border-radius: 8px;
        text-align: center;
    }
    
    .hours-section h3 {
        font-family: 'Montserrat', sans-serif;
        font-size: 1.75rem;
        color: var(--deep-sea);
        margin-bottom: 16px;
    }
    
    .hours-section p {
        font-size: 1.125rem;
        color: #666;
        line-height: 1.8;
    }
    
    .cta-contact {
        background: linear-gradient(135deg, #4A9B9B 0%, #2C5F5F 100%);
        padding: 80px 24px;
        text-align: center;
        color: white;
        margin-top: 60px;
    }
    
    .cta-contact h2 {
        font-family: 'Playfair Display', serif;
        font-size: 2.5rem;
        margin-bottom: 16px;
    }
    
    .cta-contact p {
        font-size: 1.25rem;
        opacity: 0.95;
    }
    
    @media (max-width: 768px) {
        .contact-hero__content h1 {
            font-size: 2.5rem;
        }
        
        .contact-grid {
            grid-template-columns: 1fr;
            gap: 40px;
        }
        
        .contact-form-section {
            padding: 32px 24px;
        }
    }
</style>
</head>

<body>
<section class="contact-hero" id="contact">
    <?php 
    if (has_post_thumbnail()) :
        the_post_thumbnail('full', array('class' => 'home__img', 'alt' => get_the_title()));
    else :
        echo '<img src="' . get_template_directory_uri() . '/assets/img/about.jpg" alt="' . get_the_title() . '" class="home__img">';
    endif;
    ?>
    <div class="contact-hero__overlay"></div>
    <div class="contact-hero__content">
        <h1>Let's Start Planning</h1>
        <p>Your dream vacation is just a conversation away</p>
    </div>
</section>

<section class="contact-main">
    <div class="contact-grid">
        <div class="contact-info-section">
            <h2>Get In Touch</h2>
            <p>Ready to embark on your next adventure? Whether you have questions about our services, need help planning your perfect getaway, or want to discuss special arrangements, we're here to help.</p>
            
            <div class="contact-methods">
                <div class="contact-method">
                    <div class="contact-method__icon">📧</div>
                    <div class="contact-method__info">
                        <h3>Email Us</h3>
                        <a href="mailto:lachelleat@gmail.com">lachelleat@gmail.com</a>
                    </div>
                </div>
                
                <div class="contact-method">
                    <div class="contact-method__icon">📱</div>
                    <div class="contact-method__info">
                        <h3>Call or Text</h3>
                        <a href="tel:731-313-7782">731-313-7782</a>
                    </div>
                </div>
                
                <div class="contact-method">
                    <div class="contact-method__icon">📍</div>
                    <div class="contact-method__info">
                        <h3>Social Media</h3>
                        <p>Follow us on Instagram and Facebook for travel inspiration and exclusive offers</p>
                    </div>
                </div>
            </div>
            
            <div class="hours-section" style="margin-top: 32px;">
                <h3>Office Hours</h3>
                <p><strong>Monday - Friday:</strong> 9:00 AM - 6:00 PM EST<br>
                <strong>Saturday:</strong> 10:00 AM - 4:00 PM EST<br>
                <strong>Sunday:</strong> By Appointment</p>
            </div>
        </div>
        
        <div class="contact-form-section">
            <h2>Send Us a Message</h2>
            <p style="color: #666; margin-bottom: 24px;">Fill out the form below and we'll get back to you within 24 hours.</p>
            
            <form action="https://docs.google.com/forms/d/1w9HZqbpkCg_vaecdt5hmqQkeBLMgZH_1izPG1OfxcM8/formResponse" method="POST" target="_blank">
                <div class="form-group">
                    <label for="name">Full Name *</label>
                    <input type="text" id="name" name="entry.name" required placeholder="Your full name">
                </div>
                
                <div class="form-group">
                    <label for="email">Email Address *</label>
                    <input type="email" id="email" name="entry.email" required placeholder="your.email@example.com">
                </div>
                
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" name="entry.phone" placeholder="(555) 123-4567">
                </div>
                
                <div class="form-group">
                    <label for="interest">I'm Interested In *</label>
                    <select id="interest" name="entry.interest" required>
                        <option value="">Select an option</option>
                        <option value="cruise">Luxury Cruise Experience</option>
                        <option value="resort">Premium Resort Getaway</option>
                        <option value="excursion">Authentic Excursions</option>
                        <option value="planning">Full Concierge Planning</option>
                        <option value="other">General Inquiry</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="message">Tell Us About Your Dream Vacation *</label>
                    <textarea id="message" name="entry.message" required placeholder="Share your travel dreams, preferred destinations, travel dates, group size, or any special requests..."></textarea>
                </div>
                
                <button type="submit" class="submit-btn">Send Message</button>
            </form>
        </div>
    </div>
    
    <?php if (have_posts()): ?>
        <div class="container" style="padding: 40px 0;">
            <?php while (have_posts()): the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>
</section>

<section class="cta-contact">
    <h2>Prefer to Talk Directly?</h2>
    <p>Give us a call at <strong><a href="tel:731-313-7782" style="color: white; text-decoration: underline;">731-313-7782</a></strong> and let's start planning your adventure today!</p>
</section>
</body>

<?php get_footer() ?>
