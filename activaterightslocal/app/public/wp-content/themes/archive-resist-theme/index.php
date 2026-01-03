<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Archive & Resist Conclave 2026</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

    <?php wp_head(); ?>

    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Event",
            "name": "Archive & Resist Conclave 2026",
            "description": "Collaborative Future for Community-Led Human Rights Documentation.",
            "startDate": "2026-01-26",
            "endDate": "2026-01-27",
            "location": {
                "@type": "Place",
                "name": "BRAC University",
                "address": {
                    "@type": "PostalAddress",
                    "addressLocality": "Dhaka",
                    "addressCountry": "BD"
                }
            },
            "image": ["<?php echo get_template_directory_uri(); ?>/images/history-back.jpg"],
            "organizer": {
                "@type": "Organization",
                "name": "Activate Rights",
                "url": "https://activaterights.org"
            }
        }
    </script>
</head>

<body id="top" <?php body_class(); ?>>

    <button id="backToTop" title="Go to top">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="m18 15-6-6-6 6" />
        </svg>
    </button>

    <div class="container">

        <header class="site-header">
            <nav class="main-nav">
                <a href="#about">About</a>
                <a href="#sessions">Sessions</a>
                <a href="https://forms.gle/5znCihw4n17QiQnN8" target="_blank">Registration</a>
                <a href="#faq">FAQ</a>
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
                    Collaborative Future for<br>Community-Led Human<br>Rights Documentation<br>and Transitional Justice
                </div>
                <div class="hero-graphic">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/red-stamp.png" alt="Stamp">
                </div>
                <div class="date-divider"></div>
                <div class="hero-date">26-27 January 2026 | BRAC University, Dhaka</div>
                <a href="https://forms.gle/5znCihw4n17QiQnN8" target="_blank" class="btn-ticket">GET YOUR TICKET</a>
            </div>
        </section>

        <div class="feature-image-wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/images/tank1.jpg" alt="Tank" class="feature-img">
        </div>

    </div>

    <div class="quote-breakout-wrapper">
        <div class="quote-container">
            <img src="<?php echo get_template_directory_uri(); ?>/images/quote.png" alt="Quote" class="quote-graphic">
            <p class="quote-author">Milan Kundera</p>
        </div>
    </div>

    <section class="history-block" id="about">
        <div class="history-text">
            <p>The July uprising marked a pivotal shift in how we witness and record state violence. In the face of blackouts and suppression, citizen documentation emerged as the primary tool for truth and as crucial evidence for justice.</p>
            <p style="margin-top: 20px;">This Conclave brings together archivists, human rights defenders, technologists, transitional justice advocates, and young people who are building the infrastructure for human rights documentation for memory, accountability, and reconciliation.</p>
            <p style="margin-top: 20px;">We are moving from reactive recording to proactive preservation. Our journey is to build a collective movement for evidence-ready documentation.</p>
        </div>
        <div class="history-visual">
            <div class="history-stack-wrapper">
                <img src="<?php echo get_template_directory_uri(); ?>/images/history-back.jpg" class="stack-img-back" alt="History Background">
                <img src="<?php echo get_template_directory_uri(); ?>/images/history-front.jpg" class="stack-img-front" alt="History Foreground">
            </div>
        </div>
    </section>

    <section id="goals" class="goals-split-container">
        <div class="goals-visual">
            <img src="<?php echo get_template_directory_uri(); ?>/images/goal.jpg" class="goals-bg-img" alt="Goals">
            <div class="goals-overlay"></div>
            <h2 class="goals-visual-title">Our<br>Goals</h2>
        </div>
        <div class="goals-accordion">
            <div class="accordion-item">
                <button class="accordion-header"><span class="acc-title">LEARNING SPACE</span><span class="acc-icon">+</span></button>
                <div class="accordion-content">
                    <p>We provide a dedicated space for young defenders to learn digital security.</p>
                </div>
            </div>
            <div class="accordion-item">
                <button class="accordion-header"><span class="acc-title">CRITICAL DISCUSSIONS</span><span class="acc-icon">+</span></button>
                <div class="accordion-content">
                    <p>Facilitating hard conversations about state power and censorship.</p>
                </div>
            </div>
            <div class="accordion-item">
                <button class="accordion-header"><span class="acc-title">REGIONAL SOLIDARITY</span><span class="acc-icon">+</span></button>
                <div class="accordion-content">
                    <p>Building a network of solidarity across borders.</p>
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
            <span class="resistance-text-item">JOIN THE RESISTANCE</span>
            <span class="resistance-text-item">JOIN THE RESISTANCE</span>
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/images/1.jpg" class="collage-img pos-1" alt="Collage 1">
        <img src="<?php echo get_template_directory_uri(); ?>/images/3.jpg" class="collage-img pos-2" alt="Collage 2">
        <img src="<?php echo get_template_directory_uri(); ?>/images/2.jpg" class="collage-img pos-3" alt="Collage 3">
        <img src="<?php echo get_template_directory_uri(); ?>/images/5.jpg" class="collage-img pos-4" alt="Collage 4">
        <img src="<?php echo get_template_directory_uri(); ?>/images/4.jpg" class="collage-img pos-5" alt="Collage 5">
    </section>

    <section id="sessions" class="sessions-section">

        <div class="sessions-container">
            <div class="sessions-header">
                <span class="sessions-tag">JOIN US LIVE</span>
                <h2 class="sessions-title">UPCOMING SESSIONS</h2>
                <p class="sessions-desc">Glides automatically. Hover to pause. Use buttons to navigate.</p>
            </div>

            <div class="sessions-slider-wrapper">

                <button id="slidePrev" class="slider-nav-btn prev-btn" aria-label="Previous">←</button>

                <div class="sessions-track" id="sessionsTrack">

                    <?php
                    // UPDATED SESSION DATA FOR 2026
                    $sessions = [
                        ['title' => 'Digital Verification 101', 'desc' => 'Techniques for verifying open source footage.', 'type' => 'Technical', 'date' => 'Jan 26, 2026', 'time' => '10:00 AM - 12:00 PM', 'lead' => 'Expert Facilitator'],
                        ['title' => 'Archival Ethics', 'desc' => 'Bridging the gap between memory and justice.', 'type' => 'Theory', 'date' => 'Jan 26, 2026', 'time' => '12:30 PM - 02:00 PM', 'lead' => 'Lead Archivist'],
                        ['title' => 'Secure Communication', 'desc' => 'Tools for encrypted messaging and protecting sources.', 'type' => 'Technical', 'date' => 'Jan 26, 2026', 'time' => '02:30 PM - 04:30 PM', 'lead' => 'Security Analyst'],
                        ['title' => 'Metadata Preservation', 'desc' => 'How to strip or keep metadata for evidence integrity.', 'type' => 'Technical', 'date' => 'Jan 26, 2026', 'time' => '05:00 PM - 06:30 PM', 'lead' => 'Tech Lead'],
                        ['title' => 'Trauma-Informed Archives', 'desc' => 'Handling sensitive content without causing re-traumatization.', 'type' => 'Theory', 'date' => 'Jan 26, 2026', 'time' => '09:00 AM - 10:30 AM', 'lead' => 'Psychologist'],
                        ['title' => 'OSINT Investigations', 'desc' => 'Using Open Source Intelligence for human rights reporting.', 'type' => 'Technical', 'date' => 'Jan 26, 2026', 'time' => '11:00 AM - 01:00 PM', 'lead' => 'Investigator'],
                        ['title' => 'Legal Frameworks', 'desc' => 'Understanding digital rights laws in South Asia.', 'type' => 'Theory', 'date' => 'Jan 26, 2026', 'time' => '02:00 PM - 03:30 PM', 'lead' => 'Legal Counsel'],
                        ['title' => 'Mobile Journalism', 'desc' => 'Capturing high-quality evidence with just a smartphone.', 'type' => 'Technical', 'date' => 'Jan 26, 2026', 'time' => '04:00 PM - 05:30 PM', 'lead' => 'Journalist'],

                        // DAY 2 (Jan 27, 2026)
                        ['title' => 'Collective Memory', 'desc' => 'The role of community in preserving history.', 'type' => 'Theory', 'date' => 'Jan 27, 2026', 'time' => '10:00 AM - 11:30 AM', 'lead' => 'Historian'],
                        ['title' => 'Data Visualization', 'desc' => 'Turning complex datasets into compelling visual stories.', 'type' => 'Technical', 'date' => 'Jan 27, 2026', 'time' => '12:00 PM - 01:30 PM', 'lead' => 'Data Artist'],
                        ['title' => 'Anti-Censorship Tools', 'desc' => 'Bypassing internet shutdowns and VPN safety.', 'type' => 'Technical', 'date' => 'Jan 27, 2026', 'time' => '02:30 PM - 04:00 PM', 'lead' => 'Net Freedom Activist'],
                        ['title' => 'Oral History Tactics', 'desc' => 'Interview techniques for preserving survivor testimonies.', 'type' => 'Theory', 'date' => 'Jan 27, 2026', 'time' => '10:00 AM - 12:00 PM', 'lead' => 'Oral Historian'],
                        ['title' => 'Cloud Security Basics', 'desc' => 'Safeguarding your digital library in the cloud.', 'type' => 'Technical', 'date' => 'Jan 27, 2026', 'time' => '01:00 PM - 02:30 PM', 'lead' => 'Cloud Expert'],
                        ['title' => 'The Future of Archives', 'desc' => 'AI, blockchain, and the next frontier of documentation.', 'type' => 'Theory', 'date' => 'Jan 27, 2026', 'time' => '03:00 PM - 04:30 PM', 'lead' => 'Futurist'],
                        ['title' => 'Closing Ceremony', 'desc' => 'Reflecting on the conclave and steps forward.', 'type' => 'Theory', 'date' => 'Jan 27, 2026', 'time' => '05:00 PM - 07:00 PM', 'lead' => 'Organizers']
                    ];

                    // Loop TWICE for Infinite Scroll
                    for ($i = 0; $i < 2; $i++) {
                        foreach ($sessions as $session):
                            $badgeClass = ($session['type'] === 'Technical') ? 'badge-tech' : 'badge-theory';

                            // DAY LOGIC based on 2026 dates
                            $dayLabel = (strpos($session['date'], 'Jan 26') !== false) ? 'DAY 01' : 'DAY 02';
                            $dayClass = ($dayLabel === 'DAY 01') ? 'day-one' : 'day-two';
                    ?>

                            <div class="session-card">
                                <div class="card-header">
                                    <div class="header-content">
                                        <h3 class="card-title"><?php echo $session['title']; ?></h3>
                                        <p class="card-subtitle"><?php echo $session['desc']; ?></p>
                                    </div>
                                    <div class="header-meta">
                                        <span class="card-badge <?php echo $badgeClass; ?>"><?php echo $session['type']; ?></span>
                                        <span class="day-label <?php echo $dayClass; ?>"><?php echo $dayLabel; ?></span>
                                    </div>
                                </div>

                                <div class="card-details">
                                    <div class="detail-row">
                                        <span class="detail-icon icon-cal">📅</span>
                                        <?php echo $session['date']; ?>
                                    </div>

                                    <div class="detail-row">
                                        <span class="detail-icon icon-time">⏰</span>
                                        <?php echo $session['time']; ?>
                                    </div>

                                    <div class="detail-row">
                                        <span class="detail-icon icon-room">📍</span>
                                        <span style="font-style: italic; opacity: 0.8;">Room: TBA (Announcing Soon)</span>
                                    </div>

                                    <div class="detail-row">
                                        <span class="detail-icon icon-user">👤</span>
                                        <?php echo $session['lead']; ?>
                                    </div>
                                </div>

                                <div class="session-hidden-content">
                                    <div class="hidden-section">
                                        <span class="hidden-title">Our Goal</span>
                                        <p class="hidden-text">Insight into <?php echo strtolower($session['title']); ?>.</p>
                                    </div>
                                    <div class="hidden-section">
                                        <span class="hidden-title">FAQ</span>
                                        <p class="hidden-text"><strong>Q:</strong> Prerequisites?<br><strong>A:</strong> None.</p>
                                    </div>
                                    <a href="https://forms.gle/5znCihw4n17QiQnN8" target="_blank" class="btn-final-register">Go to Registration &rarr;</a>
                                </div>

                                <button class="btn-toggle-details">View Details</button>
                            </div>

                    <?php
                        endforeach;
                    }
                    ?>

                </div>

                <button id="slideNext" class="slider-nav-btn next-btn" aria-label="Next">→</button>

            </div>
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

            // 1. HELPERS
            function closeItem(item, contentClass, iconClass) {
                item.classList.remove('active');
                if (contentClass) item.querySelector('.' + contentClass).style.maxHeight = 0;
                if (iconClass) item.querySelector('.' + iconClass).textContent = '+';
            }

            function openItem(item, contentClass, iconClass) {
                item.classList.add('active');
                const content = item.querySelector('.' + contentClass);
                content.style.maxHeight = content.scrollHeight + "px";
                if (iconClass) item.querySelector('.' + iconClass).textContent = '−';
            }

            // 2. ACCORDION
            document.querySelectorAll('.accordion-header').forEach(header => {
                header.addEventListener('click', (e) => {
                    e.stopPropagation();
                    const item = header.parentElement;
                    const isActive = item.classList.contains('active');
                    document.querySelectorAll('.goals-accordion .accordion-item').forEach(other => {
                        if (other !== item) closeItem(other, 'accordion-content', 'acc-icon');
                    });
                    if (isActive) closeItem(item, 'accordion-content', 'acc-icon');
                    else openItem(item, 'accordion-content', 'acc-icon');
                });
            });

            // 3. CARD DETAILS
            document.querySelectorAll('.btn-toggle-details').forEach(btn => {
                btn.addEventListener('click', function(e) {
                    e.stopPropagation();
                    const card = this.closest('.session-card');
                    const isOpen = card.classList.contains('open');
                    document.querySelectorAll('.session-card').forEach(c => {
                        c.classList.remove('open');
                        c.querySelector('.btn-toggle-details').textContent = 'View Details';
                    });
                    if (!isOpen) {
                        card.classList.add('open');
                        this.textContent = 'Close';
                    } else {
                        this.textContent = 'View Details';
                    }
                });
            });

            // 4. AUTO SLIDER
            const track = document.getElementById('sessionsTrack');
            const prevBtn = document.getElementById('slidePrev');
            const nextBtn = document.getElementById('slideNext');

            let isPaused = false;
            let autoScrollSpeed = 1.5;
            let animationFrameId;

            if (track) {
                function autoScroll() {
                    if (!isPaused) {
                        track.scrollLeft += autoScrollSpeed;
                        if (track.scrollLeft >= (track.scrollWidth / 2)) {
                            track.scrollLeft = 0;
                        }
                    }
                    animationFrameId = requestAnimationFrame(autoScroll);
                }
                autoScroll();

                track.addEventListener('mouseenter', () => isPaused = true);
                track.addEventListener('mouseleave', () => isPaused = false);
                track.addEventListener('touchstart', () => isPaused = true);
                track.addEventListener('touchend', () => {
                    setTimeout(() => isPaused = false, 2000);
                });

                if (prevBtn && nextBtn) {
                    const jumpAmount = 350;
                    nextBtn.addEventListener('click', () => {
                        track.scrollBy({
                            left: jumpAmount,
                            behavior: 'smooth'
                        });
                    });
                    prevBtn.addEventListener('click', () => {
                        track.scrollBy({
                            left: -jumpAmount,
                            behavior: 'smooth'
                        });
                    });
                    [nextBtn, prevBtn].forEach(btn => {
                        btn.addEventListener('mouseenter', () => isPaused = true);
                        btn.addEventListener('mouseleave', () => isPaused = false);
                    });
                }
            }

            // 5. GLOBAL CLICK
            document.addEventListener('click', (e) => {
                if (!e.target.closest('.accordion-item')) {
                    document.querySelectorAll('.goals-accordion .accordion-item').forEach(item => closeItem(item, 'accordion-content', 'acc-icon'));
                }
                if (!e.target.closest('.session-card')) {
                    document.querySelectorAll('.session-card.open').forEach(c => {
                        c.classList.remove('open');
                        c.querySelector('.btn-toggle-details').textContent = 'View Details';
                    });
                }
            });

            // 6. BACK TO TOP
            const mybutton = document.getElementById("backToTop");
            window.onscroll = function() {
                mybutton.style.display = (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) ? "flex" : "none";
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
