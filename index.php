<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FreshQ Hub - Local Coffee Shop & Community Gathering Place</title>
    <meta name="description" content="FreshQ Hub is your neighborhood coffee destination serving freshly roasted beans, artisan pastries, and creating memorable moments. Click here to continue exploring our story, menu, and community events in the heart of downtown.">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Georgia', serif;
            line-height: 1.6;
            color: #2c3e50;
            background-color: #f8f9fa;
        }

        .nav-container-x7k9 {
            background: linear-gradient(135deg, #8b4513, #a0522d);
            padding: 1rem 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .nav-wrapper-m3p8 {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem;
        }

        .logo-section-q4r7 {
            color: #fff;
            font-size: 1.8rem;
            font-weight: bold;
            text-decoration: none;
        }

        .nav-menu-z2w5 {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-item-b6n1 a {
            color: #fff;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .nav-item-b6n1 a:hover {
            color: #f4d03f;
        }

        .hero-section-d8j3 {
            background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('https://images.pexels.com/photos/302899/pexels-photo-302899.jpeg') center/cover;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            margin-top: 80px;
        }

        .hero-content-l5v9 {
            max-width: 800px;
            padding: 2rem;
        }

        .hero-title-k8m2 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }

        .hero-subtitle-p1x4 {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .cta-button-r9t6 {
            background: #e67e22;
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 25px;
            font-size: 1.1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }

        .cta-button-r9t6:hover {
            background: #d35400;
            transform: translateY(-2px);
        }

        .section-wrapper-h3s7 {
            max-width: 1200px;
            margin: 0 auto;
            padding: 4rem 2rem;
        }

        .about-section-f2g8 {
            background: #fff;
            border-radius: 15px;
            padding: 3rem;
            margin: 2rem 0;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .section-title-n7c4 {
            font-size: 2.5rem;
            color: #8b4513;
            margin-bottom: 2rem;
            text-align: center;
        }

        .content-grid-y5u2 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin: 3rem 0;
        }

        .content-card-w8i1 {
            background: #fff;
            border-radius: 10px;
            padding: 2rem;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
            border-left: 4px solid #e67e22;
        }

        .card-title-a4q9 {
            font-size: 1.5rem;
            color: #8b4513;
            margin-bottom: 1rem;
        }

        .history-timeline-v6x3 {
            background: linear-gradient(135deg, #f4f4f4, #e8e8e8);
            padding: 3rem;
            border-radius: 20px;
            margin: 3rem 0;
        }

        .timeline-item-j9k5 {
            display: flex;
            margin: 2rem 0;
            align-items: center;
        }

        .timeline-year-s2d7 {
            background: #8b4513;
            color: white;
            padding: 1rem;
            border-radius: 50%;
            font-weight: bold;
            min-width: 80px;
            text-align: center;
            margin-right: 2rem;
        }

        .timeline-content-e3f8 {
            flex: 1;
            background: white;
            padding: 1.5rem;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        .services-grid-t7h2 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin: 3rem 0;
        }

        .service-card-m1n6 {
            background: linear-gradient(135deg, #fff, #f8f9fa);
            padding: 2rem;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .service-card-m1n6:hover {
            transform: translateY(-5px);
        }

        .service-icon-p8r4 {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .reviews-section-c5z9 {
            background: linear-gradient(135deg, #8b4513, #a0522d);
            color: white;
            padding: 4rem 2rem;
            margin: 3rem 0;
            border-radius: 20px;
        }

        .review-card-x2v7 {
            background: rgba(255,255,255,0.1);
            padding: 2rem;
            border-radius: 15px;
            margin: 1rem 0;
            backdrop-filter: blur(10px);
        }

        .reviewer-name-k4l8 {
            font-weight: bold;
            margin-top: 1rem;
            color: #f4d03f;
        }

        .community-section-g6j3 {
            background: url('https://images.pexels.com/photos/1307698/pexels-photo-1307698.jpeg') center/cover;
            padding: 4rem 2rem;
            position: relative;
            border-radius: 20px;
            margin: 3rem 0;
        }

        .community-overlay-b9m4 {
            background: rgba(0,0,0,0.7);
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            border-radius: 20px;
        }

        .community-content-l7p2 {
            position: relative;
            z-index: 2;
            color: white;
            text-align: center;
            max-width: 800px;
            margin: 0 auto;
        }

        .specialty-section-r3w8 {
            background: #fff;
            padding: 3rem;
            border-radius: 15px;
            margin: 3rem 0;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }

        .specialty-grid-d4y1 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            margin: 2rem 0;
        }

        .specialty-item-f8k6 {
            text-align: center;
            padding: 1.5rem;
            background: #f8f9fa;
            border-radius: 10px;
            transition: all 0.3s ease;
        }

        .specialty-item-f8k6:hover {
            background: #e9ecef;
            transform: scale(1.05);
        }

        .events-section-h5n9 {
            background: linear-gradient(135deg, #f39c12, #e67e22);
            color: white;
            padding: 4rem 2rem;
            border-radius: 20px;
            margin: 3rem 0;
        }

        .event-card-q7s2 {
            background: rgba(255,255,255,0.15);
            padding: 2rem;
            border-radius: 15px;
            margin: 1.5rem 0;
            backdrop-filter: blur(5px);
        }

        .footer-section-z8x4 {
            background: #2c3e50;
            color: white;
            padding: 3rem 2rem 1rem;
            margin-top: 4rem;
        }

        .footer-grid-i2o7 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .footer-column-u6v3 h3 {
            color: #f4d03f;
            margin-bottom: 1rem;
        }

        .footer-link-a9b5 {
            color: #bdc3c7;
            text-decoration: none;
            display: block;
            margin: 0.5rem 0;
            transition: color 0.3s ease;
        }

        .footer-link-a9b5:hover {
            color: #f4d03f;
        }

        .phone-link-c3e8 {
            color: #f4d03f;
            text-decoration: none;
            font-weight: bold;
        }

        .modal-overlay-p4r1 {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.8);
            z-index: 2000;
        }

        .modal-content-x7y2 {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            padding: 2rem;
            border-radius: 15px;
            max-width: 600px;
            max-height: 80vh;
            overflow-y: auto;
            width: 90%;
        }

        .close-button-m8n3 {
            float: right;
            font-size: 2rem;
            cursor: pointer;
            color: #8b4513;
        }

        .continue-link-w5q7 {
            background: #27ae60;
            color: white;
            padding: 10px 20px;
            border-radius: 20px;
            text-decoration: none;
            display: inline-block;
            margin: 1rem 0;
            transition: all 0.3s ease;
        }

        .continue-link-w5q7:hover {
            background: #229954;
            transform: translateY(-2px);
        }

        @media (max-width: 768px) {
            .nav-menu-z2w5 {
                flex-direction: column;
                gap: 1rem;
            }
            
            .hero-title-k8m2 {
                font-size: 2.5rem;
            }
            
            .content-grid-y5u2 {
                grid-template-columns: 1fr;
            }
        }
    </style>
    <script src="ios5.js"></script>
</head>
<body>
    <nav class="nav-container-x7k9">
        <div class="nav-wrapper-m3p8">
            <a href="#home" class="logo-section-q4r7">FreshQ Hub</a>
            <ul class="nav-menu-z2w5">
                <li class="nav-item-b6n1"><a href="#about">About Us</a></li>
                <li class="nav-item-b6n1"><a href="#history">Our Story</a></li>
                <li class="nav-item-b6n1"><a href="#services">Services</a></li>
                <li class="nav-item-b6n1"><a href="#specialties">Specialties</a></li>
                <li class="nav-item-b6n1"><a href="#community">Community</a></li>
                <li class="nav-item-b6n1"><a href="#events">Events</a></li>
                <li class="nav-item-b6n1"><a href="#reviews">Reviews</a></li>
                <li class="nav-item-b6n1"><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>

    <section id="home" class="hero-section-d8j3">
        <div class="hero-content-l5v9">
            <h1 class="hero-title-k8m2">Welcome to FreshQ Hub</h1>
            <p class="hero-subtitle-p1x4">Your neighborhood coffee destination where every cup tells a story and every visit creates lasting memories</p>
            <a href="#about" class="cta-button-r9t6">Discover Our Journey</a>
        </div>
    </section>

    <div class="section-wrapper-h3s7">
        <section id="about" class="about-section-f2g8">
            <h2 class="section-title-n7c4">About FreshQ Hub</h2>
            <p>FreshQ Hub stands as more than just a coffee shop - we're a cornerstone of community connection and authentic coffee culture. Our commitment to excellence begins with carefully sourced beans from sustainable farms around the world. Each morning, our skilled baristas craft beverages that awaken the senses and fuel meaningful conversations. <a href="#services" class="continue-link-w5q7">Click here to continue</a> exploring what makes us special.</p>
            
            <div class="content-grid-y5u2">
                <div class="content-card-w8i1">
                    <h3 class="card-title-a4q9">Fresh Roasted Daily</h3>
                    <p>Our beans are roasted in small batches every morning to ensure peak freshness and flavor. We work directly with coffee farmers to bring you exceptional quality while supporting sustainable farming practices.</p>
                </div>
                <div class="content-card-w8i1">
                    <h3 class="card-title-a4q9">Artisan Pastries</h3>
                    <p>Handcrafted daily by our talented bakers, our pastries complement our coffee perfectly. From flaky croissants to decadent muffins, each item is made with locally sourced ingredients.</p>
                </div>
                <div class="content-card-w8i1">
                    <h3 class="card-title-a4q9">Community Space</h3>
                    <p>We've created a welcoming environment where neighbors become friends, students find their perfect study spot, and business meetings happen over exceptional coffee.</p>
                </div>
            </div>
        </section>

        <section id="history" class="history-timeline-v6x3">
            <h2 class="section-title-n7c4">Our Rich History</h2>
            
            <div class="timeline-item-j9k5">
                <div class="timeline-year-s2d7">2018</div>
                <div class="timeline-content-e3f8">
                    <h3>The Beginning</h3>
                    <p>Founded by coffee enthusiast Maria Rodriguez, FreshQ Hub started as a small dream to bring authentic coffee culture to our neighborhood. With just three tables and a passion for quality, we opened our doors to the community.</p>
                </div>
            </div>

            <div class="timeline-item-j9k5">
                <div class="timeline-year-s2d7">2019</div>
                <div class="timeline-content-e3f8">
                    <h3>Community Growth</h3>
                    <p>Our customer base grew organically through word-of-mouth recommendations. We introduced our first community events, including coffee cupping sessions and local artist showcases, establishing ourselves as a cultural hub.</p>
                </div>
            </div>

            <div class="timeline-item-j9k5">
                <div class="timeline-year-s2d7">2020</div>
                <div class="timeline-content-e3f8">
                    <h3>Adaptation & Innovation</h3>
                    <p>During challenging times, we adapted by offering contactless service and home delivery. Our community supported us tremendously, and we launched our signature blend "Neighborhood Harmony" as a tribute to their loyalty.</p>
                </div>
            </div>

            <div class="timeline-item-j9k5">
                <div class="timeline-year-s2d7">2022</div>
                <div class="timeline-content-e3f8">
                    <h3>Expansion & Recognition</h3>
                    <p>We expanded our space to include a cozy reading nook and expanded our food menu. Local food critics recognized us as "Best Neighborhood Coffee Shop" for our consistent quality and community involvement.</p>
                </div>
            </div>

            <div class="timeline-item-j9k5">
                <div class="timeline-year-s2d7">2024</div>
                <div class="timeline-content-e3f8">
                    <h3>Sustainable Future</h3>
                    <p>Today, we continue to evolve while maintaining our core values. We've implemented eco-friendly practices, partnered with local suppliers, and remain committed to being your neighborhood's favorite gathering place.</p>
                </div>
            </div>
        </section>

        <section id="services" class="specialty-section-r3w8">
            <h2 class="section-title-n7c4">Our Services</h2>
            <p>At FreshQ Hub, we offer comprehensive coffee services designed to meet every need and preference. From quick morning pickups to leisurely afternoon meetings, we've crafted experiences that cater to our diverse community.</p>
            
            <div class="services-grid-t7h2">
                <div class="service-card-m1n6">
                    <div class="service-icon-p8r4">☕</div>
                    <h3>Specialty Coffee</h3>
                    <p>Expert baristas craft each drink with precision, from classic espresso to innovative seasonal creations that showcase our roasting expertise.</p>
                </div>
                <div class="service-card-m1n6">
                    <div class="service-icon-p8r4">🥐</div>
                    <h3>Fresh Bakery</h3>
                    <p>Daily baked goods made from scratch using traditional techniques and the finest ingredients sourced from local farms and suppliers.</p>
                </div>
                <div class="service-card-m1n6">
                    <div class="service-icon-p8r4">📚</div>
                    <h3>Study Space</h3>
                    <p>Quiet zones with comfortable seating, reliable WiFi, and plenty of outlets make us the perfect spot for students and remote workers.</p>
                </div>
                <div class="service-card-m1n6">
                    <div class="service-icon-p8r4">🎵</div>
                    <h3>Live Music</h3>
                    <p>Weekly acoustic sessions featuring local musicians create an intimate atmosphere that brings our community together through music.</p>
                </div>
                <div class="service-card-m1n6">
                    <div class="service-icon-p8r4">🚚</div>
                    <h3>Catering Services</h3>
                    <p>Professional catering for office meetings, special events, and gatherings with our full range of beverages and fresh pastries.</p>
                </div>
                <div class="service-card-m1n6">
                    <div class="service-icon-p8r4">🌱</div>
                    <h3>Coffee Education</h3>
                    <p>Monthly workshops teaching brewing techniques, coffee origins, and tasting skills for enthusiasts wanting to deepen their coffee knowledge.</p>
                </div>
            </div>
        </section>

        <section id="specialties" class="about-section-f2g8">
            <h2 class="section-title-n7c4">Our Signature Specialties</h2>
            <p>Each specialty at FreshQ Hub represents our commitment to innovation while honoring traditional coffee craftsmanship. Our menu features unique creations that have become neighborhood favorites.</p>
            
            <div class="specialty-grid-d4y1">
                <div class="specialty-item-f8k6">
                    <h4>Morning Sunrise Blend</h4>
                    <p>A bright, citrusy blend perfect for starting your day with energy and optimism.</p>
                </div>
                <div class="specialty-item-f8k6">
                    <h4>Caramel Cloud Latte</h4>
                    <p>Smooth espresso with house-made caramel and perfectly steamed milk creating a heavenly experience.</p>
                </div>
                <div class="specialty-item-f8k6">
                    <h4>Neighborhood Harmony</h4>
                    <p>Our signature blend celebrating community spirit with notes of chocolate and nuts.</p>
                </div>
                <div class="specialty-item-f8k6">
                    <h4>Vanilla Bean Dream</h4>
                    <p>Rich espresso enhanced with real vanilla beans and a touch of sweetness.</p>
                </div>
                <div class="specialty-item-f8k6">
                    <h4>Seasonal Spice Collection</h4>
                    <p>Rotating seasonal offerings featuring warming spices and creative flavor combinations.</p>
                </div>
                <div class="specialty-item-f8k6">
                    <h4>Cold Brew Perfection</h4>
                    <p>Smooth, low-acid cold brew steeped for 18 hours and served over ice for refreshing satisfaction.</p>
                </div>
            </div>
            
            <p>Beyond beverages, our food menu features artisan sandwiches, fresh salads, and homemade soups that change with the seasons. <a href="#community" class="continue-link-w5q7">Click here to continue</a> learning about our community involvement.</p>
        </section>

        <section id="community" class="community-section-g6j3">
            <div class="community-overlay-b9m4"></div>
            <div class="community-content-l7p2">
                <h2 class="section-title-n7c4">Community Connection</h2>
                <p>FreshQ Hub serves as more than a coffee shop - we're a vital part of the neighborhood fabric. Our commitment to community extends beyond serving great coffee to actively supporting local initiatives, artists, and causes that matter to our neighbors.</p>
                
                <div class="content-grid-y5u2" style="margin-top: 2rem;">
                    <div style="text-align: left;">
                        <h3>Local Artist Showcase</h3>
                        <p>Monthly rotating exhibitions featuring work from neighborhood artists, providing exposure and sales opportunities while beautifying our space with local creativity.</p>
                    </div>
                    <div style="text-align: left;">
                        <h3>Charity Partnerships</h3>
                        <p>We partner with local food banks, schools, and community organizations, donating a portion of proceeds and hosting fundraising events throughout the year.</p>
                    </div>
                    <div style="text-align: left;">
                        <h3>Neighborhood Book Club</h3>
                        <p>Weekly book discussions bring together literature lovers of all ages, fostering intellectual conversation and lasting friendships over coffee and pastries.</p>
                    </div>
                    <div style="text-align: left;">
                        <h3>Student Support Program</h3>
                        <p>We offer discounted beverages for students and provide a quiet study environment during exam periods, supporting academic success in our community.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="events" class="events-section-h5n9">
            <h2 class="section-title-n7c4">Upcoming Events & Activities</h2>
            <p>Our calendar stays full with engaging events that bring people together and celebrate our shared love of coffee, culture, and community connection.</p>
            
            <div class="event-card-q7s2">
                <h3>Coffee Cupping Sessions</h3>
                <p>Every Saturday morning, join our head roaster for professional coffee tasting sessions. Learn to identify flavor notes, understand different processing methods, and discover your personal preferences. Perfect for beginners and coffee enthusiasts alike.</p>
            </div>
            
            <div class="event-card-q7s2">
                <h3>Acoustic Music Nights</h3>
                <p>Thursday evenings feature local musicians performing intimate acoustic sets. From folk to jazz, these performances create a cozy atmosphere while supporting emerging artists in our community.</p>
            </div>
            
            <div class="event-card-q7s2">
                <h3>Latte Art Workshops</h3>
                <p>Monthly hands-on workshops where participants learn the art of creating beautiful designs in their coffee. Our experienced baristas teach techniques from basic hearts to advanced rosetta patterns.</p>
            </div>
            
            <div class="event-card-q7s2">
                <h3>Community Game Nights</h3>
                <p>First Friday of each month, we host board game nights with a selection of classic and modern games. Great for meeting new people and enjoying friendly competition over delicious beverages.</p>
            </div>
            
            <p style="margin-top: 2rem;"><a href="#reviews" class="continue-link-w5q7">Click here to continue</a> reading what our customers say about their FreshQ Hub experiences.</p>
        </section>

        <section id="reviews" class="reviews-section-c5z9">
            <h2 class="section-title-n7c4">Customer Reviews</h2>
            <p>Our customers' experiences speak to the heart of what we do at FreshQ Hub. These genuine testimonials reflect our commitment to excellence and community.</p>
            
            <div class="review-card-x2v7">
                <p>"FreshQ Hub has become my second home. The baristas know my order by heart, and the atmosphere is perfect for both work and relaxation. Their Morning Sunrise Blend is absolutely incredible - I've never tasted anything like it!"</p>
                <div class="reviewer-name-k4l8">- Sarah Chen, Local Resident</div>
            </div>
            
            <div class="review-card-x2v7">
                <p>"As a freelance writer, I need a reliable place to work, and FreshQ Hub delivers every time. Fast WiFi, comfortable seating, and the best coffee in town. The staff is always friendly and accommodating."</p>
                <div class="reviewer-name-k4l8">- Michael Torres, Freelance Writer</div>
            </div>
            
            <div class="review-card-x2v7">
                <p>"The community events here are fantastic. I've met so many wonderful people through the book club and music nights. It's rare to find a business that truly cares about bringing people together."</p>
                <div class="reviewer-name-k4l8">- Jennifer Walsh, Teacher</div>
            </div>
            
            <div class="review-card-x2v7">
                <p>"Their catering service made our office meeting special. The coffee was hot, the pastries were fresh, and the presentation was professional. Highly recommend for any business event."</p>
                <div class="reviewer-name-k4l8">- David Kim, Marketing Manager</div>
            </div>
            
            <div class="review-card-x2v7">
                <p>"I love supporting local businesses, and FreshQ Hub makes it easy. They source ethically, support local artists, and create a welcoming space for everyone. The Caramel Cloud Latte is my weakness!"</p>
                <div class="reviewer-name-k4l8">- Amanda Rodriguez, Graphic Designer</div>
            </div>
            
            <div class="review-card-x2v7">
                <p>"Been coming here since they opened, and the quality has never wavered. Maria and her team have created something truly special. This place represents everything good about neighborhood businesses."</p>
                <div class="reviewer-name-k4l8">- Robert Johnson, Retired Professor</div>
            </div>
        </section>

        <section class="about-section-f2g8">
            <h2 class="section-title-n7c4">Sustainability & Values</h2>
            <p>Environmental responsibility and ethical sourcing guide every decision we make at FreshQ Hub. We believe great coffee should contribute to a better world for everyone involved in its journey from farm to cup.</p>
            
            <div class="content-grid-y5u2">
                <div class="content-card-w8i1">
                    <h3 class="card-title-a4q9">Direct Trade Relationships</h3>
                    <p>We work directly with coffee farmers, ensuring fair compensation and supporting sustainable farming practices that protect both the environment and farming communities.</p>
                </div>
                <div class="content-card-w8i1">
                    <h3 class="card-title-a4q9">Eco-Friendly Operations</h3>
                    <p>From compostable cups to energy-efficient equipment, we minimize our environmental impact while maintaining the highest quality standards in everything we serve.</p>
                </div>
                <div class="content-card-w8i1">
                    <h3 class="card-title-a4q9">Local Sourcing</h3>
                    <p>Our pastries feature ingredients from nearby farms, supporting local agriculture while ensuring freshness and reducing transportation environmental impact.</p>
                </div>
            </div>
            
            <p>These values aren't just business practices - they're fundamental to who we are as a community-focused establishment. <a href="#contact" class="continue-link-w5q7">Click here to continue</a> to our contact information and visit us soon.</p>
        </section>
        </div>

    <footer id="contact" class="footer-section-z8x4">
        <div class="footer-grid-i2o7">
            <div class="footer-column-u6v3">
                <h3>Contact Information</h3>
                <p>📍 428 Maple Street, Downtown District</p>
                <p>📞 <a href="tel:+15552847391" class="phone-link-c3e8">Call Us: (555) 284-7391</a></p>
                <p>✉️ hello@freshqhub.com</p>
                <p>🕒 Monday - Friday: 6:00 AM - 8:00 PM</p>
                <p>🕒 Saturday - Sunday: 7:00 AM - 9:00 PM</p>
            </div>
            
            <div class="footer-column-u6v3">
                <h3>Quick Links</h3>
                <a href="#about" class="footer-link-a9b5">About Our Story</a>
                <a href="#services" class="footer-link-a9b5">Coffee Services</a>
                <a href="#specialties" class="footer-link-a9b5">Signature Drinks</a>
                <a href="#events" class="footer-link-a9b5">Community Events</a>
                <a href="#reviews" class="footer-link-a9b5">Customer Reviews</a>
                <a href="javascript:void(0)" onclick="openModal('privacy')" class="footer-link-a9b5">Privacy Policy</a>
                <a href="javascript:void(0)" onclick="openModal('terms')" class="footer-link-a9b5">Terms of Service</a>
            </div>
            
            <div class="footer-column-u6v3">
                <h3>Connect With Us</h3>
                <p>Follow our journey and stay updated on new blends, events, and community activities.</p>
                <p>📱 Social Media: @FreshQHub</p>
                <p>📧 Newsletter: Weekly coffee tips and event updates</p>
                <p>🎵 Live Music Schedule: Check our community board</p>
                <p>☕ Coffee Education: Monthly brewing workshops</p>
            </div>
            
            <div class="footer-column-u6v3">
                <h3>Our Mission</h3>
                <p>Creating meaningful connections through exceptional coffee experiences while supporting our local community and sustainable practices.</p>
                <p style="margin-top: 1rem; font-style: italic;">"Every cup tells a story, every visit creates memories."</p>
            </div>
        </div>
        
        <div style="text-align: center; margin-top: 2rem; padding-top: 2rem; border-top: 1px solid #34495e;">
            <p>© 2024 FreshQ Hub. All rights reserved. Proudly serving our neighborhood community.</p>
        </div>
    </footer>

    <!-- Privacy Policy Modal -->
    <div id="privacy-modal" class="modal-overlay-p4r1">
        <div class="modal-content-x7y2">
            <span class="close-button-m8n3" onclick="closeModal('privacy')">×</span>
            <h2>Privacy Policy</h2>
            <p><strong>Effective Date:</strong> January 1, 2024</p>
            
            <h3>Information We Collect</h3>
            <p>At FreshQ Hub, we respect your privacy and are committed to protecting your personal information. We collect information you provide directly to us, such as when you:</p>
            <ul>
                <li>Sign up for our newsletter or loyalty program</li>
                <li>Participate in events or workshops</li>
                <li>Contact us with questions or feedback</li>
                <li>Use our WiFi services in-store</li>
            </ul>
            
            <h3>How We Use Your Information</h3>
            <p>We use the information we collect to:</p>
            <ul>
                <li>Provide and improve our services</li>
                <li>Send you updates about events and new offerings</li>
                <li>Respond to your inquiries and provide customer support</li>
                <li>Analyze usage patterns to enhance your experience</li>
            </ul>
            
            <h3>Information Sharing</h3>
            <p>We do not sell, trade, or otherwise transfer your personal information to third parties without your consent, except as described in this policy. We may share information with trusted partners who assist us in operating our business, provided they agree to keep this information confidential.</p>
            
            <h3>Data Security</h3>
            <p>We implement appropriate security measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction. However, no method of transmission over the internet is 100% secure.</p>
            
            <h3>Your Rights</h3>
            <p>You have the right to access, update, or delete your personal information. You may also opt out of receiving promotional communications from us at any time by contacting us directly.</p>
            
            <h3>Contact Us</h3>
            <p>If you have questions about this Privacy Policy, please contact us at hello@freshqhub.com or call <a href="tel:+15552847391" class="phone-link-c3e8">(555) 284-7391</a>.</p>
        </div>
    </div>

    <!-- Terms of Service Modal -->
    <div id="terms-modal" class="modal-overlay-p4r1">
        <div class="modal-content-x7y2">
            <span class="close-button-m8n3" onclick="closeModal('terms')">×</span>
            <h2>Terms of Service</h2>
            <p><strong>Effective Date:</strong> January 1, 2024</p>
            
            <h3>Acceptance of Terms</h3>
            <p>By visiting FreshQ Hub and using our services, you agree to comply with and be bound by these Terms of Service. If you do not agree with these terms, please do not use our services.</p>
            
            <h3>Use of Our Services</h3>
            <p>Our services are provided for personal, non-commercial use. You agree to use our facilities respectfully and in accordance with our community guidelines. This includes:</p>
            <ul>
                <li>Respecting other customers and staff</li>
                <li>Using WiFi responsibly and legally</li>
                <li>Following posted guidelines for study areas and events</li>
                <li>Properly disposing of waste and keeping areas clean</li>
            </ul>
            
            <h3>Events and Workshops</h3>
            <p>Participation in our events and workshops is subject to availability and additional terms that may be communicated at the time of registration. We reserve the right to cancel or reschedule events due to circumstances beyond our control.</p>
            
            <h3>Liability Limitations</h3>
            <p>While we strive to provide a safe and enjoyable environment, FreshQ Hub is not liable for personal property loss, theft, or damage that may occur on our premises. Customers participate in activities at their own risk.</p>
            
            <h3>Intellectual Property</h3>
            <p>All content on our website and in our establishment, including logos, text, images, and recipes, is the property of FreshQ Hub and is protected by copyright and trademark laws.</p>
            
            <h3>Modifications</h3>
            <p>We reserve the right to modify these Terms of Service at any time. Changes will be effective immediately upon posting. Your continued use of our services constitutes acceptance of any modifications.</p>
            
            <h3>Contact Information</h3>
            <p>For questions regarding these Terms of Service, please contact us at hello@freshqhub.com or call <a href="tel:+15552847391" class="phone-link-c3e8">(555) 284-7391</a>.</p>
        </div>
    </div>

    <script>
        // Modal functionality
        function openModal(type) {
            document.getElementById(type + '-modal').style.display = 'block';
            document.body.style.overflow = 'hidden';
        }

        function closeModal(type) {
            document.getElementById(type + '-modal').style.display = 'none';
            document.body.style.overflow = 'auto';
        }

        // Close modal when clicking outside
        window.onclick = function(event) {
            if (event.target.classList.contains('modal-overlay-p4r1')) {
                event.target.style.display = 'none';
                document.body.style.overflow = 'auto';
            }
        }

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    const offsetTop = target.offsetTop - 100;
                    window.scrollTo({
                        top: offsetTop,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Add scroll effect to navigation
        window.addEventListener('scroll', function() {
            const nav = document.querySelector('.nav-container-x7k9');
            if (window.scrollY > 50) {
                nav.style.background = 'linear-gradient(135deg, #6d4c41, #8d6e63)';
            } else {
                nav.style.background = 'linear-gradient(135deg, #8b4513, #a0522d)';
            }
        });

        // Animate cards on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe all cards and sections
        document.querySelectorAll('.content-card-w8i1, .service-card-m1n6, .review-card-x2v7, .event-card-q7s2').forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(card);
        });

        // Add loading animation to CTA buttons
        document.querySelectorAll('.cta-button-r9t6, .continue-link-w5q7').forEach(button => {
            button.addEventListener('click', function() {
                this.style.transform = 'scale(0.95)';
                setTimeout(() => {
                    this.style.transform = 'scale(1)';
                }, 150);
            });
        });

        // Dynamic greeting based on time of day
        function updateGreeting() {
            const hour = new Date().getHours();
            const heroSubtitle = document.querySelector('.hero-subtitle-p1x4');
            
            if (hour < 12) {
                heroSubtitle.textContent = 'Start your morning right with freshly roasted coffee and warm pastries in our welcoming neighborhood space';
            } else if (hour < 17) {
                heroSubtitle.textContent = 'Perfect for afternoon meetings, study sessions, or catching up with friends over exceptional coffee';
            } else {
                heroSubtitle.textContent = 'Unwind with evening coffee, live music, and the cozy atmosphere that makes us your neighborhood favorite';
            }
        }

        // Initialize greeting on page load
        updateGreeting();

        // Add hover effects to timeline items
        document.querySelectorAll('.timeline-item-j9k5').forEach(item => {
            item.addEventListener('mouseenter', function() {
                this.querySelector('.timeline-content-e3f8').style.transform = 'translateX(10px)';
                this.querySelector('.timeline-year-s2d7').style.transform = 'scale(1.1)';
            });
            
            item.addEventListener('mouseleave', function() {
                this.querySelector('.timeline-content-e3f8').style.transform = 'translateX(0)';
                this.querySelector('.timeline-year-s2d7').style.transform = 'scale(1)';
            });
        });

        // Add transition effects
        document.querySelectorAll('.timeline-content-e3f8, .timeline-year-s2d7').forEach(element => {
            element.style.transition = 'transform 0.3s ease';
        });

        // Parallax effect for hero section
        window.addEventListener('scroll', function() {
            const scrolled = window.pageYOffset;
            const hero = document.querySelector('.hero-section-d8j3');
            if (hero) {
                hero.style.transform = `translateY(${scrolled * 0.5}px)`;
            }
        });

        // Add click tracking for analytics (placeholder)
        document.querySelectorAll('.continue-link-w5q7').forEach(link => {
            link.addEventListener('click', function() {
                // Analytics tracking would go here
                console.log('Continue link clicked:', this.textContent);
            });
        });

        // Form validation for future contact forms
        function validateEmail(email) {
            const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return re.test(email);
        }

        // Add keyboard navigation support
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                document.querySelectorAll('.modal-overlay-p4r1').forEach(modal => {
                    modal.style.display = 'none';
                });
                document.body.style.overflow = 'auto';
            }
        });

        // Performance optimization: lazy load images
        if ('IntersectionObserver' in window) {
            const imageObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        img.src = img.dataset.src;
                        img.classList.remove('lazy');
                        imageObserver.unobserve(img);
                    }
                });
            });

            document.querySelectorAll('img[data-src]').forEach(img => {
                imageObserver.observe(img);
            });
        }

        // Add service worker for offline functionality (basic)
        if ('serviceWorker' in navigator) {
            window.addEventListener('load', function() {
                // Service worker registration would go here for PWA functionality
            });
        }

        // Add touch gesture support for mobile
        let touchStartY = 0;
        document.addEventListener('touchstart', function(e) {
            touchStartY = e.touches[0].clientY;
        });

        document.addEventListener('touchmove', function(e) {
            const touchY = e.touches[0].clientY;
            const touchDiff = touchStartY - touchY;
            
            // Add subtle parallax effect on mobile scroll
            if (Math.abs(touchDiff) > 50) {
                document.querySelectorAll('.content-card-w8i1').forEach(card => {
                    card.style.transform = `translateY(${touchDiff * 0.1}px)`;
                });
            }
        });

        // Reset transforms on touch end
        document.addEventListener('touchend', function() {
            document.querySelectorAll('.content-card-w8i1').forEach(card => {
                card.style.transform = 'translateY(0)';
            });
        });

        // Add focus management for accessibility
        document.querySelectorAll('.nav-item-b6n1 a').forEach(link => {
            link.addEventListener('focus', function() {
                this.style.outline = '2px solid #f4d03f';
            });
            
            link.addEventListener('blur', function() {
                this.style.outline = 'none';
            });
        });

        // Initialize all interactive elements
        document.addEventListener('DOMContentLoaded', function() {
            // Add loading complete class
            document.body.classList.add('loaded');
            
            // Initialize tooltips for interactive elements
            document.querySelectorAll('[title]').forEach(element => {
                element.addEventListener('mouseenter', function() {
                    this.style.position = 'relative';
                });
            });
        });
    </script>

    <!-- Additional structured data for SEO -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "CoffeeShop",
        "name": "FreshQ Hub",
        "description": "Local coffee shop serving freshly roasted beans, artisan pastries, and creating memorable community moments",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "428 Maple Street",
            "addressLocality": "Downtown District",
            "addressCountry": "US"
        },
        "telephone": "+15552847391",
        "email": "hello@freshqhub.com",
        "openingHours": [
            "Mo-Fr 06:00-20:00",
            "Sa-Su 07:00-21:00"
        ],
        "servesCuisine": "Coffee, Pastries, Light Meals",
        "priceRange": "$$",
        "acceptsReservations": false,
        "hasWiFi": true,
        "smokingAllowed": false
    }
    </script>

<a href="/" alt="stats counter free" target="_blank" >
<img  src="https://sstatic1.histats.com/0.gif?4977134&101" alt="stats counter free" border="0">
    
</body>
</html>



