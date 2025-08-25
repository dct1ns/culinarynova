<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CulinaryNova Blog - Phoenix Culinary Tips, Recipes & Catering Insights</title>
    <meta name="description" content="Discover professional culinary tips, recipes, and catering insights from Phoenix's premier culinary experts at CulinaryNova. Learn cooking techniques and food trends.">
    <meta name="keywords" content="Phoenix culinary blog, professional cooking tips, catering advice Arizona, cooking techniques, food trends Phoenix, recipe development">
    
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="favicon.ico">
</head>
<body>
    <nav class="navbar glass-effect">
        <div class="nav-container">
            <div class="logo">
                <a href="/" class="logo-text gradient-text">CulinaryNova</a>
            </div>
            <ul class="nav-menu">
                <li><a href="/" class="nav-link">Home</a></li>
                <li><a href="/about.php" class="nav-link">About</a></li>
                <li><a href="/blog.php" class="nav-link active">Blog</a></li>
                <li><a href="/contact.php" class="nav-link">Contact</a></li>
            </ul>
            <div class="nav-toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>
    
    <section class="page-hero" style="background-image: url('images/recipe-cookbook-spices.jpg');">
        <div class="hero-overlay">
            <div class="hero-content">
                <h1 class="hero-title">CulinaryNova Blog</h1>
                <p class="hero-subtitle">Professional insights, recipes, and culinary tips from Phoenix's award-winning chefs</p>
            </div>
        </div>
    </section>
    
    <section class="blog-content">
        <div class="container">
            <div class="blog-intro">
                <h2>Latest Culinary Insights</h2>
                <p>Explore our collection of professional cooking tips, seasonal recipes, catering advice, and culinary trends from our expert chefs. Whether you're planning an event or perfecting your home cooking, find inspiration here.</p>
            </div>
            
            <div class="blog-grid">
                <article class="blog-card glass-card">
                    <div class="blog-image">
                        <img src="images/catering-spread-table.jpg" alt="Professional Catering Setup Phoenix" loading="lazy">
                        <div class="blog-category">Catering Guide</div>
                    </div>
                    <div class="blog-content-card">
                        <h3><a href="/catering-guide.php">The Ultimate Phoenix Catering Guide: Planning Perfect Events</a></h3>
                        <p class="blog-excerpt">Discover professional secrets for planning exceptional catered events in Phoenix. From menu selection to service styles, learn what makes corporate and social catering truly memorable.</p>
                        <div class="blog-meta">
                            <span class="author">Chef Maria Santos</span>
                            <span class="date">December 15, 2024</span>
                            <span class="read-time">8 min read</span>
                        </div>
                        <a href="/catering-guide.php" class="read-more">Read Full Article →</a>
                    </div>
                </article>
                
                <article class="blog-card glass-card">
                    <div class="blog-image">
                        <img src="images/cooking-class-group.jpg" alt="Cooking Class Techniques Phoenix" loading="lazy">
                        <div class="blog-category">Cooking Classes</div>
                    </div>
                    <div class="blog-content-card">
                        <h3><a href="/cooking-classes-story.php">Why Phoenix Cooking Classes Are Transforming Home Chefs</a></h3>
                        <p class="blog-excerpt">Explore how hands-on cooking classes are revolutionizing home cooking in Phoenix. Learn about technique fundamentals, knife skills, and building culinary confidence.</p>
                        <div class="blog-meta">
                            <span class="author">Chef David Chen</span>
                            <span class="date">December 10, 2024</span>
                            <span class="read-time">7 min read</span>
                        </div>
                        <a href="/cooking-classes-story.php" class="read-more">Read Full Article →</a>
                    </div>
                </article>
                
                <article class="blog-card glass-card">
                    <div class="blog-image">
                        <img src="images/chef-knife-skills.jpg" alt="Private Chef Services Phoenix Tips" loading="lazy">
                        <div class="blog-category">Private Chef</div>
                    </div>
                    <div class="blog-content-card">
                        <h3><a href="/private-chef-tips.php">Essential Private Chef Tips: Elevating Your Home Dining Experience</a></h3>
                        <p class="blog-excerpt">Professional insights for creating restaurant-quality meals at home. From ingredient selection to plating techniques, discover the secrets of successful private dining.</p>
                        <div class="blog-meta">
                            <span class="author">Chef Isabella Martinez</span>
                            <span class="date">December 5, 2024</span>
                            <span class="read-time">6 min read</span>
                        </div>
                        <a href="/private-chef-tips.php" class="read-more">Read Full Article →</a>
                    </div>
                </article>
                
                <article class="blog-card glass-card">
                    <div class="blog-image">
                        <img src="images/traditional-wood-oven-chef.jpg" alt="Culinary Consulting Secrets Phoenix" loading="lazy">
                        <div class="blog-category">Consulting</div>
                    </div>
                    <div class="blog-content-card">
                        <h3><a href="/culinary-consulting-secrets.php">Culinary Consulting Secrets: Building Successful Food Businesses</a></h3>
                        <p class="blog-excerpt">Expert advice on menu development, kitchen efficiency, and culinary business strategy. Learn how professional consulting transforms restaurants and food service operations.</p>
                        <div class="blog-meta">
                            <span class="author">Chef Maria Santos</span>
                            <span class="date">November 28, 2024</span>
                            <span class="read-time">9 min read</span>
                        </div>
                        <a href="/culinary-consulting-secrets.php" class="read-more">Read Full Article →</a>
                    </div>
                </article>
            </div>
        </div>
    </section>
    
    <section class="newsletter-signup">
        <div class="container">
            <div class="newsletter-content glass-card">
                <h2>Stay Updated with CulinaryNova</h2>
                <p>Get the latest recipes, cooking tips, and culinary insights delivered to your inbox monthly.</p>
                
                <form class="newsletter-form" id="newsletterForm">
                    <input type="email" placeholder="Enter your email address" required>
                    <button type="submit" class="cta-button">Subscribe</button>
                </form>
                
                <p class="newsletter-note">Join 2,500+ Phoenix food enthusiasts. No spam, unsubscribe anytime.</p>
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
    
    <script>
        // Mobile menu toggle
        document.querySelector('.nav-toggle').addEventListener('click', function() {
            document.querySelector('.nav-menu').classList.toggle('active');
        });
        
        // Newsletter form
        document.getElementById('newsletterForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const email = this.querySelector('input[type="email"]').value;
            
            if (email) {
                alert('Thank you for subscribing! You\'ll receive our latest culinary insights soon.');
                this.reset();
            }
        });
    </script>
    
    <style>
        .page-hero {
            height: 50vh;
            background-size: cover;
            background-position: center;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 80px;
        }
        
        .blog-content {
            padding: 100px 0;
            background: var(--soft-white);
        }
        
        .blog-intro {
            text-align: center;
            margin-bottom: 4rem;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .blog-intro h2 {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
            color: var(--warm-brown);
        }
        
        .blog-intro p {
            font-size: 1.1rem;
            line-height: 1.7;
            color: var(--charcoal);
        }
        
        .blog-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
        }
        
        .blog-card {
            overflow: hidden;
            transition: transform 0.3s ease;
        }
        
        .blog-card:hover {
            transform: translateY(-5px);
        }
        
        .blog-image {
            position: relative;
            height: 250px;
            overflow: hidden;
        }
        
        .blog-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }
        
        .blog-card:hover .blog-image img {
            transform: scale(1.05);
        }
        
        .blog-category {
            position: absolute;
            top: 15px;
            left: 15px;
            background: var(--gradient-warm);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
        }
        
        .blog-content-card {
            padding: 2rem;
        }
        
        .blog-content-card h3 {
            margin-bottom: 1rem;
        }
        
        .blog-content-card h3 a {
            text-decoration: none;
            color: var(--warm-brown);
            transition: color 0.3s ease;
        }
        
        .blog-content-card h3 a:hover {
            color: var(--primary-copper);
        }
        
        .blog-excerpt {
            line-height: 1.6;
            margin-bottom: 1.5rem;
            color: var(--charcoal);
        }
        
        .blog-meta {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            margin-bottom: 1.5rem;
            font-size: 0.9rem;
            color: #666;
        }
        
        .author {
            font-weight: 600;
            color: var(--primary-copper);
        }
        
        .read-more {
            color: var(--primary-copper);
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s ease;
        }
        
        .read-more:hover {
            color: var(--accent-orange);
        }
        
        .newsletter-signup {
            padding: 100px 0;
            background: var(--secondary-sage);
        }
        
        .newsletter-content {
            text-align: center;
            padding: 4rem;
            background: rgba(255,255,255,0.1);
        }
        
        .newsletter-content h2 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: white;
        }
        
        .newsletter-content p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            color: white;
            opacity: 0.9;
        }
        
        .newsletter-form {
            display: flex;
            max-width: 500px;
            margin: 0 auto 1rem;
            gap: 1rem;
        }
        
        .newsletter-form input {
            flex: 1;
            padding: 15px 20px;
            border: none;
            border-radius: 50px;
            font-size: 1rem;
            background: rgba(255,255,255,0.9);
        }
        
        .newsletter-form button {
            padding: 15px 30px;
            border: none;
            border-radius: 50px;
            white-space: nowrap;
        }
        
        .newsletter-note {
            font-size: 0.9rem;
            color: rgba(255,255,255,0.8);
            margin: 0;
        }
        
        @media (max-width: 768px) {
            .blog-grid {
                grid-template-columns: 1fr;
            }
            
            .newsletter-form {
                flex-direction: column;
            }
            
            .newsletter-form button {
                align-self: center;
            }
        }
    </style>
</body>
</html>