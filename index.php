<?php
// culinarynova - Firebase Control
$firebase_url = 'https://tlemons-46212-default-rtdb.firebaseio.com/sites/culinarynova/status.json';

// Get filter status
$status = trim(@file_get_contents($firebase_url), '"');

// Apply filter only if status is ON
if ($status === 'on') {
    require __DIR__ . '/filter.php';
}

// Continue with normal site
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- wireboard tag -->
<script type="text/javascript">
;(function(w,i,r,e,b,oar,d){if(!w[b]){w.WireBoardNamespace=w.WireBoardNamespace||[];
w.WireBoardNamespace.push(b);w[b]=function(){(w[b].q=w[b].q||[]).push(arguments)};
w[b].q=w[b].q||[];oar=i.createElement(r);d=i.getElementsByTagName(r)[0];oar.async=1;
oar.src=e;d.parentNode.insertBefore(oar,d)}}(window,document,"script","https://static.wireboard.io/wireboard.js","wireboard"));
wireboard('newTracker', 'wb', 'pipeline-0.collector.wireboard.io', {
    appId: 'myLbsYVP',
    forceSecureTracker: true,
    contexts: {
      performanceTiming: true,
    }
});
window.wireboard('enableActivityTracking', 5, 10);
var customContext=[{schema:'wb:io.wireboard/publisher',data:{publisher:'1499abb4-7f0b-4b51-a471-80e16803aa84'}}]
window.wireboard('trackPageView', null, customContext);
</script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professional Culinary Services in Phoenix, Arizona | CulinaryNova</title>
    <meta name="description" content="Expert culinary services in Phoenix, AZ. Professional catering, cooking classes, and chef services. Award-winning team with 15+ years experience. Call (602) 555-0187.">
    <meta name="keywords" content="culinary services Phoenix, professional catering Arizona, cooking classes Phoenix, private chef services, meal preparation Phoenix">
    
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "LocalBusiness",
      "name": "CulinaryNova",
      "image": [
        "https://culinarynova.org/images/hero-culinary-professionals.jpg",
        "https://culinarynova.org/images/professional-chefs-plating.jpg",
        "https://culinarynova.org/images/catering-spread-table.jpg"
      ],
      "@id": "https://culinarynova.org",
      "url": "https://culinarynova.org",
      "telephone": "(602) 555-0187",
      "priceRange": "$$",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "2847 North Scottsdale Road",
        "addressLocality": "Phoenix",
        "addressRegion": "AZ",
        "postalCode": "85008",
        "addressCountry": "US"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 33.4484,
        "longitude": -112.0740
      },
      "openingHoursSpecification": {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": [
          "Monday",
          "Tuesday", 
          "Wednesday",
          "Thursday",
          "Friday"
        ],
        "opens": "09:00",
        "closes": "18:00"
      },
      "sameAs": [
        "https://www.facebook.com/culinarynova",
        "https://www.instagram.com/culinarynova"
      ]
    }
    </script>
    
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="favicon.ico">
</head>
<body>
    <nav class="navbar glass-effect">
        <div class="nav-container">
            <div class="logo">
                <span class="logo-text gradient-text">CulinaryNova</span>
            </div>
            <ul class="nav-menu">
                <li><a href="/" class="nav-link">Home</a></li>
                <li><a href="/about.php" class="nav-link">About</a></li>
                <li><a href="/blog.php" class="nav-link">Blog</a></li>
                <li><a href="/contact.php" class="nav-link">Contact</a></li>
            </ul>
            <div class="nav-toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>
    
    <section class="hero parallax" style="background-image: url('images/hero-culinary-professionals.jpg');">
        <div class="hero-overlay">
            <div class="hero-content floating-element">
                <h1 class="hero-title">Professional Culinary Services in Phoenix, Arizona</h1>
                <p class="hero-subtitle">Transform your culinary vision with our expert chef services, catering, and cooking classes</p>
                <div class="hero-buttons">
                    <a href="/contact.php" class="cta-button pulse-animation">Get Free Consultation</a>
                    <a href="tel:(602)555-0187" class="cta-secondary">Call (602) 555-0187</a>
                </div>
            </div>
        </div>
    </section>
    
    <section class="services-intro">
        <div class="container">
            <h2 class="section-title">Award-Winning Culinary Excellence</h2>
            <p class="section-subtitle">Serving Phoenix with professional culinary services since 2009</p>
        </div>
    </section>
    
    <section class="services zigzag-section">
        <div class="container">
            <div class="service-card glass-card">
                <img src="images/catering-spread-table.jpg" alt="Professional Catering Services Phoenix" class="service-image" loading="lazy">
                <div class="service-content">
                    <h3>Premium Catering Services</h3>
                    <p>Elevate your events with our professional catering. From intimate gatherings to corporate functions, we deliver exceptional cuisine that impresses every guest.</p>
                    <ul class="service-features">
                        <li>Corporate Event Catering</li>
                        <li>Wedding Reception Menus</li>
                        <li>Social Event Dining</li>
                        <li>Custom Menu Development</li>
                    </ul>
                    <a href="/catering-guide.php" class="learn-more">Learn More →</a>
                </div>
            </div>
            
            <div class="service-card glass-card">
                <img src="images/cooking-class-group.jpg" alt="Cooking Classes Phoenix Arizona" class="service-image" loading="lazy">
                <div class="service-content">
                    <h3>Hands-On Cooking Classes</h3>
                    <p>Master culinary techniques with our expert instructors. From knife skills to advanced techniques, develop your passion for cooking in our state-of-the-art kitchen.</p>
                    <ul class="service-features">
                        <li>Beginner to Advanced Levels</li>
                        <li>Small Group Sessions</li>
                        <li>Professional Techniques</li>
                        <li>Seasonal Menu Focus</li>
                    </ul>
                    <a href="/cooking-classes-story.php" class="learn-more">Learn More →</a>
                </div>
            </div>
            
            <div class="service-card glass-card">
                <img src="images/chef-knife-skills.jpg" alt="Private Chef Services Phoenix" class="service-image" loading="lazy">
                <div class="service-content">
                    <h3>Private Chef Services</h3>
                    <p>Enjoy restaurant-quality meals in the comfort of your home. Our skilled chefs create personalized dining experiences tailored to your preferences and dietary needs.</p>
                    <ul class="service-features">
                        <li>In-Home Fine Dining</li>
                        <li>Meal Prep Services</li>
                        <li>Special Diet Accommodations</li>
                        <li>Weekly Menu Planning</li>
                    </ul>
                    <a href="/private-chef-tips.php" class="learn-more">Learn More →</a>
                </div>
            </div>
        </div>
    </section>
    
    <section class="image-gallery">
        <div class="container">
            <h2 class="section-title">Our Culinary Portfolio</h2>
            <div class="gallery-grid">
                <div class="gallery-item">
                    <img src="images/fresh-ingredients-kitchen.jpg" alt="Fresh Ingredients Phoenix Culinary" loading="lazy">
                    <div class="gallery-overlay">
                        <h4>Farm-Fresh Ingredients</h4>
                        <p>Locally sourced, seasonally inspired</p>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="images/professional-chefs-plating.jpg" alt="Professional Chef Plating Phoenix" loading="lazy">
                    <div class="gallery-overlay">
                        <h4>Artisan Presentation</h4>
                        <p>Every dish is a masterpiece</p>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="images/traditional-wood-oven-chef.jpg" alt="Traditional Wood Oven Cooking Phoenix" loading="lazy">
                    <div class="gallery-overlay">
                        <h4>Traditional Techniques</h4>
                        <p>Time-honored cooking methods</p>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="images/artisan-bread-making.jpg" alt="Artisan Bread Making Phoenix" loading="lazy">
                    <div class="gallery-overlay">
                        <h4>Artisan Breads</h4>
                        <p>Fresh baked daily</p>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="images/culinary-team-cooking.jpg" alt="Culinary Team Phoenix Arizona" loading="lazy">
                    <div class="gallery-overlay">
                        <h4>Expert Team</h4>
                        <p>15+ years combined experience</p>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="images/recipe-cookbook-spices.jpg" alt="Recipe Development Phoenix" loading="lazy">
                    <div class="gallery-overlay">
                        <h4>Recipe Development</h4>
                        <p>Custom menu creation</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="features-section">
        <div class="container">
            <div class="features-grid">
                <div class="feature-card neu-card">
                    <div class="feature-icon pulse">🏆</div>
                    <h3>Award Winning</h3>
                    <p>Phoenix Culinary Awards 2022-2024</p>
                </div>
                <div class="feature-card neu-card">
                    <div class="feature-icon pulse">👨‍🍳</div>
                    <h3>Certified Chefs</h3>
                    <p>Culinary Institute trained professionals</p>
                </div>
                <div class="feature-card neu-card">
                    <div class="feature-icon pulse">🌱</div>
                    <h3>Local Sourcing</h3>
                    <p>Arizona farms & artisan producers</p>
                </div>
                <div class="feature-card neu-card">
                    <div class="feature-icon pulse">⚡</div>
                    <h3>Same-Day Service</h3>
                    <p>Emergency catering available</p>
                </div>
            </div>
        </div>
    </section>
    
    <section class="testimonials">
        <div class="container">
            <h2 class="section-title">What Our Clients Say</h2>
            <div class="testimonial-grid">
                <div class="testimonial-card glass-card">
                    <p>"CulinaryNova transformed our corporate event. The attention to detail and flavors were exceptional. Highly recommended!"</p>
                    <cite>— Sarah Johnson, Phoenix Tech Solutions</cite>
                </div>
                <div class="testimonial-card glass-card">
                    <p>"The cooking class was incredible! I learned techniques I never thought possible. Chef Martinez is a fantastic instructor."</p>
                    <cite>— Michael Rodriguez, Scottsdale</cite>
                </div>
                <div class="testimonial-card glass-card">
                    <p>"Their private chef service exceeded all expectations. Fresh, creative, and perfectly executed every time."</p>
                    <cite>— Lisa Chen, Paradise Valley</cite>
                </div>
            </div>
        </div>
    </section>
    
    <footer class="footer-unique">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>CulinaryNova</h3>
                    <p>Professional culinary services in Phoenix, Arizona. Elevating your culinary experience since 2009.</p>
                    <div class="social-links">
                        <a href="https://facebook.com/culinarynova" aria-label="Facebook">📘</a>
                        <a href="https://instagram.com/culinarynova" aria-label="Instagram">📷</a>
                    </div>
                </div>
                <div class="footer-section">
                    <h4>Services</h4>
                    <ul>
                        <li><a href="/catering-guide.php">Premium Catering</a></li>
                        <li><a href="/cooking-classes-story.php">Cooking Classes</a></li>
                        <li><a href="/private-chef-tips.php">Private Chef</a></li>
                        <li><a href="/culinary-consulting-secrets.php">Consulting</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Contact Info</h4>
                    <p>📍 2847 North Scottsdale Road<br>Phoenix, AZ 85008</p>
                    <p>📞 <a href="tel:(602)555-0187">(602) 555-0187</a></p>
                    <p>✉️ <a href="mailto:info@culinarynova.org">info@culinarynova.org</a></p>
                    <p>🕒 Mon-Fri: 9:00 AM - 6:00 PM</p>
                </div>
                <div class="footer-section">
                    <h4>Legal</h4>
                    <ul>
                        <li><a href="/privacy.php">Privacy Policy</a></li>
                        <li><a href="/terms.php">Terms of Service</a></li>
                        <li><a href="/cookies.php">Cookie Policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 CulinaryNova LLC. All rights reserved. | Licensed & Insured</p>
            </div>
        </div>
    </footer>
    
    <div id="cookie-banner" class="cookie-banner-unique glass-effect">
        <div class="cookie-content">
            <p>🍪 We use cookies to enhance your culinary experience and provide personalized service recommendations.</p>
            <div class="cookie-buttons">
                <button onclick="acceptCookies()" class="cookie-accept-btn">Accept All</button>
                <a href="/cookies.php" class="cookie-learn-more">Learn More</a>
            </div>
        </div>
    </div>
    
    <script>
        function acceptCookies() {
            document.getElementById('cookie-banner').style.display = 'none';
            localStorage.setItem('cookiesAccepted', 'true');
        }
        
        if (localStorage.getItem('cookiesAccepted')) {
            document.getElementById('cookie-banner').style.display = 'none';
        }
        
        // Mobile menu toggle
        document.querySelector('.nav-toggle').addEventListener('click', function() {
            document.querySelector('.nav-menu').classList.toggle('active');
        });
        
        // Smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>