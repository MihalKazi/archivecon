<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Archive & Resist Conclave 2025</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

    <style>
        /* Inline overrides */
        html {
            scroll-behavior: smooth;
        }

        .footer-logo-link {
            text-decoration: none;
            display: inline-block;
        }

        .footer-logo-link:hover {
            opacity: 0.8;
        }

        /* Coming Soon Block */
        .coming-soon-section {
            background-color: var(--c-archive);
            color: #F1EADA;
            text-align: center;
            padding: 100px 20px;
        }

        .coming-soon-section h2 {
            font-family: var(--font-display);
            font-weight: 900;
            font-size: clamp(3rem, 7vw, 6rem);
            line-height: 0.9;
            margin: 0 0 30px 0;
            text-transform: uppercase;
        }

        .coming-soon-section p {
            font-family: var(--font-body);
            font-size: 1.3rem;
            max-width: 800px;
            margin: 0 auto;
            font-weight: 500;
        }
    </style>

    <?php wp_head(); ?>

    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Event",
            "name": "Archive & Resist Conclave 2025",
            "description": "Collaborative Future for Community-Led Human Rights Documentation and Transitional Justice.",
            "startDate": "2025-01-24",
            "endDate": "2025-01-25",
            "eventStatus": "https://schema.org/EventScheduled",
            "eventAttendanceMode": "https://schema.org/OfflineEventAttendanceMode",
            "location": {
                "@type": "Place",
                "name": "Dhaka",
                "address": {
                    "@type": "PostalAddress",
                    "addressLocality": "Dhaka",
                    "addressCountry": "BD"
                }
            },
            "image": [
                "<?php echo get_template_directory_uri(); ?>/images/history-back.jpg"
            ],
            "organizer": {
                "@type": "Organization",
                "name": "Activate Rights",
                "url": "https://activaterights.org"
            }
        }
    </script>
</head>

<body id="top" <?php body_class(); ?>>

    <button id="backToTop" title="Go to top" aria-label="Scroll to top">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
            <path d="m18 15-6-6-6 6" />
        </svg>
    </button>

    <div class="container">

        <header class="site-header">
            <nav class="main-nav">
                <a href="#about">About</a>
                <a href="#sessions">Sessions</a>
                <a href="https://forms.gle/5znCihw4n17QiQnN8" target="_blank" rel="noopener noreferrer">Registration</a>
                
                <a href="<?php echo site_url('/faq'); ?>">FAQ</a>
            </nav>
        </header>

        <section class="hero">
            <div class="hero-left">
                <h1>
                    <span class="text-blue">ARCHIVE</span>
                    <span class="text-red">& RESIST</span>
                    <span class="text-green">CONCLAVE</span>
                </h1>
            </div>

            <div class="hero-right">
                <div class="hero-desc">
                    Collaborative Future for<br>
                    Community-Led Human<br>
                    Rights Documentation<br>
                    and Transitional Justice
                </div>

                <div class="hero-graphic">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/red-stamp.png" alt="Camera Stamp" style="width:100%; border-radius: 50%;">
                </div>

                <div class="date-divider"></div>

                <div class="hero-date">
                    24-25 January 2025 | Dhaka
                </div>

                <a href="https://forms.gle/5znCihw4n17QiQnN8" target="_blank" rel="noopener noreferrer" class="btn-ticket">GET YOUR TICKET</a>
            </div>
        </section>

        <div class="feature-image-wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/images/tank1.jpg" alt="Tank with an Army" class="feature-img">
        </div>

    </div>

    <div class="quote-breakout-wrapper">
        <div class="quote-container">
            <img src="<?php echo get_template_directory_uri(); ?>/images/quote.png" alt="The struggle of man against power..." class="quote-graphic">
            <p class="quote-author">Milan Kundera</p>
        </div>
    </div>

    <section class="history-block" id="about">
        <div class="history-text">
            <p>The July 2024 uprising marked a pivotal shift in how we witness state violence. In the face of blackouts and suppression, citizen documentation became the primary tool for truth.</p>
            <p style="margin-top: 20px;">This conclave gathers the archivists, technologists, and youth defenders who are building the infrastructure of memory. We are moving from reactive recording to proactive preservation.</p>
        </div>
        <div class="history-visual">
            <div class="history-stack-wrapper">
                <img src="<?php echo get_template_directory_uri(); ?>/images/history-back.jpg" alt="History Background" class="stack-img-back">
                <img src="<?php echo get_template_directory_uri(); ?>/images/history-front.jpg" alt="History Foreground" class="stack-img-front">
            </div>
        </div>
    </section>

    <section id="sessions" class="goals-split-container">

        <div class="goals-visual">
            <img src="<?php echo get_template_directory_uri(); ?>/images/goal.jpg" alt="Our Goals" class="goals-bg-img">
            <div class="goals-overlay"></div>
            <h2 class="goals-visual-title">Our<br>Goals</h2>
        </div>

        <div class="goals-accordion">
            <div class="accordion-item">
                <button class="accordion-header">
                    <span class="acc-title">LEARNING SPACE<br>FOR YOUTH</span>
                    <span class="acc-icon">+</span>
                </button>
                <div class="accordion-content">
                    <p>We provide a dedicated space for young defenders to learn the tools of digital security, archival verification, and ethical documentation.</p>
                </div>
            </div>

            <div class="accordion-item">
                <button class="accordion-header">
                    <span class="acc-title">CRITICAL<br>DISCUSSIONS</span>
                    <span class="acc-icon">+</span>
                </button>
                <div class="accordion-content">
                    <p>Facilitating hard conversations about state power, censorship, and the role of memory in justice.</p>
                </div>
            </div>

            <div class="accordion-item">
                <button class="accordion-header">
                    <span class="acc-title">REGIONAL<br>SOLIDARITY</span>
                    <span class="acc-icon">+</span>
                </button>
                <div class="accordion-content">
                    <p>Building a network of solidarity across borders to share resources, strategies, and support.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="resistance-banner">
        <div class="marquee-track">
            <span class="resistance-text-item">JOIN THE RESISTANCE</span>
            <span class="resistance-text-item">JOIN THE RESISTANCE</span>
            <span class="resistance-text-item">JOIN THE RESISTANCE</span>
            <span class="resistance-text-item">JOIN THE RESISTANCE</span>
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/images/1.jpg" class="collage-img pos-1">
        <img src="<?php echo get_template_directory_uri(); ?>/images/3.jpg" class="collage-img pos-2">
        <img src="<?php echo get_template_directory_uri(); ?>/images/2.jpg" class="collage-img pos-3">
        <img src="<?php echo get_template_directory_uri(); ?>/images/5.jpg" class="collage-img pos-4">
        <img src="<?php echo get_template_directory_uri(); ?>/images/4.jpg" class="collage-img pos-5">
    </section>

    <section class="coming-soon-section">
        <div class="container">
            <h2>MORE DETAILS<br>COMING SOON</h2>
            <p>Open to individuals and organizations working on human rights, digital rights, social justice, and archiving.</p>
        </div>
    </section>

    <footer>
        <div class="footer-bottom">
            <div class="container">
                <div class="footer-content-row">
                    <div class="footer-logo">
                        <a href="#top" class="footer-logo-link">
                            <span class="text-blue">ARCHIVE</span><br>
                            <span class="text-red">& RESIST</span><br>
                            <span class="text-green">CONCLAVE</span>
                        </a>
                    </div>
                    <div class="footer-contact">
                        For any kind of inquiries ping us on<br>
                        <a href="mailto:info@activaterights.org">info@activaterights.org</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {

            // --- 1. GENERAL HELPERS TO OPEN/CLOSE ---
            function closeItem(item, contentClass, iconClass) {
                item.classList.remove('active');
                item.querySelector('.' + contentClass).style.maxHeight = 0;
                item.querySelector('.' + iconClass).textContent = '+';
            }

            function openItem(item, contentClass, iconClass) {
                item.classList.add('active');
                const content = item.querySelector('.' + contentClass);
                content.style.maxHeight = content.scrollHeight + "px";
                item.querySelector('.' + iconClass).textContent = '−';
            }

            // --- 2. GOALS ACCORDION (Kept for the Sessions section) ---
            document.querySelectorAll('.accordion-header').forEach(header => {
                header.addEventListener('click', (e) => {
                    e.stopPropagation(); // Don't trigger document click
                    const item = header.parentElement;
                    const isActive = item.classList.contains('active');

                    // Close others
                    document.querySelectorAll('.goals-accordion .accordion-item').forEach(other => {
                        if (other !== item) closeItem(other, 'accordion-content', 'acc-icon');
                    });

                    if (isActive) closeItem(item, 'accordion-content', 'acc-icon');
                    else openItem(item, 'accordion-content', 'acc-icon');
                });
            });

            // --- 3. DOCUMENT CLICK (OUTSIDE) TO CLOSE ---
            document.addEventListener('click', (e) => {
                // If click is NOT inside a Goals item, close Goals
                if (!e.target.closest('.accordion-item')) {
                    document.querySelectorAll('.goals-accordion .accordion-item').forEach(item => {
                        closeItem(item, 'accordion-content', 'acc-icon');
                    });
                }
            });

            // --- 4. BACK TO TOP BUTTON LOGIC ---
            const mybutton = document.getElementById("backToTop");
            window.onscroll = function() {
                if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
                    mybutton.style.display = "flex";
                } else {
                    mybutton.style.display = "none";
                }
            };
            mybutton.addEventListener('click', function() {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });
        });
    </script>

    <?php wp_footer(); ?>
</body>

</html>