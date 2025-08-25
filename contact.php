<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact CulinaryNova - Professional Culinary Services Phoenix, Arizona</title>
    <meta name="description" content="Contact CulinaryNova for professional catering, cooking classes, and private chef services in Phoenix, Arizona. Call (602) 555-0187 or book a consultation online.">
    <meta name="keywords" content="contact CulinaryNova Phoenix, book culinary services, catering quote Phoenix, cooking class reservation, private chef booking Arizona">
    
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
                <li><a href="/blog.php" class="nav-link">Blog</a></li>
                <li><a href="/contact.php" class="nav-link active">Contact</a></li>
            </ul>
            <div class="nav-toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>
    
    <section class="page-hero" style="background-image: url('images/fresh-ingredients-kitchen.jpg');">
        <div class="hero-overlay">
            <div class="hero-content">
                <h1 class="hero-title">Contact CulinaryNova</h1>
                <p class="hero-subtitle">Ready to create your perfect culinary experience?</p>
            </div>
        </div>
    </section>
    
    <section class="contact-section">
        <div class="container">
            <div class="contact-grid">
                <div class="contact-info">
                    <h2>Get In Touch</h2>
                    <p>Whether you're planning an intimate dinner party or a large corporate event, our team is here to make your culinary vision a reality.</p>
                    
                    <div class="contact-item">
                        <div class="contact-icon">📍</div>
                        <div class="contact-details">
                            <h3>Visit Our Kitchen</h3>
                            <p>2847 North Scottsdale Road<br>Phoenix, AZ 85008</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">📞</div>
                        <div class="contact-details">
                            <h3>Call Us</h3>
                            <p><a href="tel:(602)555-0187">(602) 555-0187</a></p>
                            <small>Monday - Friday: 9:00 AM - 6:00 PM</small>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">✉️</div>
                        <div class="contact-details">
                            <h3>Email Us</h3>
                            <p><a href="mailto:info@culinarynova.org">info@culinarynova.org</a></p>
                            <small>We respond within 24 hours</small>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">⚡</div>
                        <div class="contact-details">
                            <h3>Emergency Catering</h3>
                            <p><a href="tel:(602)555-0199">(602) 555-0199</a></p>
                            <small>Same-day service available</small>
                        </div>
                    </div>
                </div>
                
                <div class="contact-form">
                    <form class="glass-card" id="contactForm" method="POST" action="/contact-handler.php">
                        <h2>Request a Consultation</h2>
                        
                        <div class="form-group">
                            <label for="name">Full Name *</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Email Address *</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="phone">Phone Number *</label>
                            <input type="tel" id="phone" name="phone" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="service">Service Needed *</label>
                            <select id="service" name="service" required>
                                <option value="">Select a Service</option>
                                <option value="catering">Premium Catering</option>
                                <option value="cooking-classes">Cooking Classes</option>
                                <option value="private-chef">Private Chef Services</option>
                                <option value="consulting">Culinary Consulting</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="event-date">Preferred Event Date</label>
                            <input type="date" id="event-date" name="event-date">
                        </div>
                        
                        <div class="form-group">
                            <label for="guests">Number of Guests</label>
                            <select id="guests" name="guests">
                                <option value="">Select Guest Count</option>
                                <option value="1-10">1-10 Guests</option>
                                <option value="11-25">11-25 Guests</option>
                                <option value="26-50">26-50 Guests</option>
                                <option value="51-100">51-100 Guests</option>
                                <option value="100+">100+ Guests</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="budget">Budget Range</label>
                            <select id="budget" name="budget">
                                <option value="">Select Budget</option>
                                <option value="under-1000">Under $1,000</option>
                                <option value="1000-2500">$1,000 - $2,500</option>
                                <option value="2500-5000">$2,500 - $5,000</option>
                                <option value="5000-10000">$5,000 - $10,000</option>
                                <option value="over-10000">Over $10,000</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="message">Tell Us About Your Event *</label>
                            <textarea id="message" name="message" rows="5" placeholder="Please describe your event, dietary restrictions, style preferences, or any special requirements..." required></textarea>
                        </div>
                        
                        <div class="form-group">
                            <label class="checkbox-label">
                                <input type="checkbox" name="marketing" value="yes">
                                <span class="checkmark"></span>
                                I'd like to receive updates about cooking classes and special events
                            </label>
                        </div>
                        
                        <button type="submit" class="cta-button">Send Request</button>
                        <p class="form-note">We'll respond within 24 hours with a personalized quote and consultation details.</p>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
    <section class="service-areas">
        <div class="container">
            <h2 class="section-title">Service Areas</h2>
            <p class="section-subtitle">We proudly serve the greater Phoenix metropolitan area</p>
            
            <div class="areas-grid">
                <div class="area-card neu-card">
                    <h3>Phoenix</h3>
                    <p>Downtown, Ahwatukee, Central Phoenix, North Phoenix</p>
                </div>
                <div class="area-card neu-card">
                    <h3>Scottsdale</h3>
                    <p>Old Town, North Scottsdale, Desert Ridge, McDowell Mountain</p>
                </div>
                <div class="area-card neu-card">
                    <h3>Tempe</h3>
                    <p>Downtown Tempe, ASU Campus Area, South Tempe</p>
                </div>
                <div class="area-card neu-card">
                    <h3>Paradise Valley</h3>
                    <p>Luxury residential areas, exclusive event venues</p>
                </div>
                <div class="area-card neu-card">
                    <h3>Chandler</h3>
                    <p>Downtown Chandler, Ahwatukee Foothills, Sun Lakes</p>
                </div>
                <div class="area-card neu-card">
                    <h3>Mesa</h3>
                    <p>East Mesa, Red Mountain, Las Sendas</p>
                </div>
            </div>
            
            <p class="service-note">Don't see your area listed? Contact us - we may be able to provide services with additional travel arrangements.</p>
        </div>
    </section>
    
    <section class="faq-section">
        <div class="container">
            <h2 class="section-title">Frequently Asked Questions</h2>
            
            <div class="faq-grid">
                <div class="faq-item glass-card">
                    <h3>How far in advance should I book?</h3>
                    <p>We recommend booking 2-4 weeks in advance for catering services and 1-2 weeks for private chef services. However, we do offer same-day emergency catering when available.</p>
                </div>
                
                <div class="faq-item glass-card">
                    <h3>Do you accommodate dietary restrictions?</h3>
                    <p>Absolutely! We specialize in accommodating all dietary needs including vegetarian, vegan, gluten-free, keto, and allergen-free menus. Just let us know your requirements during booking.</p>
                </div>
                
                <div class="faq-item glass-card">
                    <h3>What's included in your catering service?</h3>
                    <p>Our catering includes menu planning, food preparation, setup, service staff (for events over 25 guests), and cleanup. Tableware and linens can be provided for an additional fee.</p>
                </div>
                
                <div class="faq-item glass-card">
                    <h3>Can you provide cooking equipment?</h3>
                    <p>For private chef services, we bring all necessary cooking tools and equipment. For larger events, we can arrange additional equipment rental if needed.</p>
                </div>
                
                <div class="faq-item glass-card">
                    <h3>What are your cooking class sizes?</h3>
                    <p>Our group cooking classes accommodate 8-12 participants for optimal hands-on learning. We also offer private classes for couples or small groups of 2-6 people.</p>
                </div>
                
                <div class="faq-item glass-card">
                    <h3>Do you offer tastings?</h3>
                    <p>Yes! For catering events over $2,500, we offer complimentary tastings. For smaller events, tastings are available for a fee that's applied to your final invoice.</p>
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
    
    <script>
        // Mobile menu toggle
        document.querySelector('.nav-toggle').addEventListener('click', function() {
            document.querySelector('.nav-menu').classList.toggle('active');
        });
        
        // Form handling
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Basic form validation
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const phone = document.getElementById('phone').value;
            const service = document.getElementById('service').value;
            const message = document.getElementById('message').value;
            
            if (!name || !email || !phone || !service || !message) {
                alert('Please fill in all required fields.');
                return;
            }
            
            // Simulate form submission
            const button = e.target.querySelector('button[type="submit"]');
            button.innerHTML = 'Sending...';
            button.disabled = true;
            
            setTimeout(() => {
                alert('Thank you for your inquiry! We will contact you within 24 hours to discuss your culinary needs.');
                this.reset();
                button.innerHTML = 'Send Request';
                button.disabled = false;
            }, 2000);
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
        
        .contact-section {
            padding: 100px 0;
            background: var(--soft-white);
        }
        
        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: start;
        }
        
        .contact-info h2 {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
            color: var(--warm-brown);
        }
        
        .contact-info > p {
            font-size: 1.1rem;
            margin-bottom: 2rem;
            line-height: 1.7;
        }
        
        .contact-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 2rem;
            padding: 1.5rem;
            background: white;
            border-radius: 15px;
            box-shadow: var(--shadow-soft);
            transition: transform 0.3s ease;
        }
        
        .contact-item:hover {
            transform: translateY(-3px);
        }
        
        .contact-icon {
            font-size: 2rem;
            margin-right: 1rem;
            flex-shrink: 0;
        }
        
        .contact-details h3 {
            font-size: 1.2rem;
            margin-bottom: 0.5rem;
            color: var(--primary-copper);
        }
        
        .contact-details a {
            color: var(--charcoal);
            text-decoration: none;
            font-weight: 500;
        }
        
        .contact-details a:hover {
            color: var(--primary-copper);
        }
        
        .contact-details small {
            color: #666;
            font-size: 0.9rem;
        }
        
        .contact-form {
            position: sticky;
            top: 100px;
        }
        
        .contact-form h2 {
            font-size: 2rem;
            margin-bottom: 2rem;
            color: var(--warm-brown);
            text-align: center;
        }
        
        .form-group {
            margin-bottom: 1.5rem;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            color: var(--charcoal);
            font-weight: 500;
        }
        
        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid rgba(184, 115, 51, 0.2);
            border-radius: 8px;
            font-size: 1rem;
            background: rgba(255,255,255,0.8);
            transition: border-color 0.3s ease;
        }
        
        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: var(--primary-copper);
        }
        
        .form-group textarea {
            resize: vertical;
            min-height: 120px;
        }
        
        .checkbox-label {
            display: flex;
            align-items: center;
            cursor: pointer;
            font-size: 0.9rem;
        }
        
        .checkbox-label input[type="checkbox"] {
            margin-right: 0.5rem;
            width: auto;
        }
        
        .form-note {
            text-align: center;
            font-size: 0.9rem;
            color: #666;
            margin-top: 1rem;
        }
        
        .service-areas {
            padding: 100px 0;
            background: var(--cream-white);
        }
        
        .areas-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }
        
        .area-card {
            text-align: center;
        }
        
        .area-card h3 {
            color: var(--primary-copper);
            margin-bottom: 1rem;
            font-size: 1.3rem;
        }
        
        .service-note {
            text-align: center;
            margin-top: 3rem;
            font-style: italic;
            color: #666;
        }
        
        .faq-section {
            padding: 100px 0;
            background: var(--soft-white);
        }
        
        .faq-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }
        
        .faq-item h3 {
            color: var(--primary-copper);
            margin-bottom: 1rem;
            font-size: 1.2rem;
        }
        
        .faq-item p {
            line-height: 1.7;
        }
        
        @media (max-width: 768px) {
            .contact-grid {
                grid-template-columns: 1fr;
                gap: 2rem;
            }
            
            .contact-form {
                position: static;
            }
            
            .areas-grid, .faq-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</body>
</html>