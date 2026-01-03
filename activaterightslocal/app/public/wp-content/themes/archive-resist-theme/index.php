<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Archive & Resist Conclave 2026</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>?v=2">

    <?php wp_head(); ?>

    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Event",
            "name": "Archive & Resist Conclave 2026",
            "description": "Collaborative Future for Community-Led Human Rights Documentation and Transitional Justice.",
            "startDate": "2026-01-26",
            "endDate": "2026-01-27",
            "eventStatus": "https://schema.org/EventScheduled",
            "eventAttendanceMode": "https://schema.org/OfflineEventAttendanceMode",
            "location": {
                "@type": "Place",
                "name": "BRAC University",
                "address": {
                    "@type": "PostalAddress",
                    "streetAddress": "Kha 224, Bir Uttam Rafiqul Islam Ave, Merul Badda",
                    "addressLocality": "Dhaka",
                    "postalCode": "1212",
                    "addressCountry": "BD"
                }
            },
            "image": [
                "https://archivecon.activaterights.org/wp-content/themes/archive-resist-theme/images/history-back.jpg"
            ],
            "organizer": {
                "@type": "Organization",
                "name": "Activate Rights",
                "url": "https://activaterights.org/"
            },
            "offers": {
                "@type": "Offer",
                "url": "https://forms.gle/5znCihw4n17QiQnN8",
                "price": "0",
                "priceCurrency": "BDT",
                "availability": "https://schema.org/InStock",
                "validFrom": "2025-12-01"
            },
            "performer": {
                "@type": "Organization",
                "name": "Various Human Rights Experts"
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

                <a href="<?php echo site_url('/faq'); ?>" target="_blank" rel="noopener noreferrer">FAQ</a>
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
<section class="speakers-section">
    <div class="container">
        <h2 class="speakers-title">Speakers</h2>
        
        <div class="speakers-grid">
            
            <div class="speaker-card">
                <div class="speaker-img-wrapper">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/avatar/kartika.jpg" alt="Kartika Pratiwi" class="speaker-img">
                </div>
                <h3 class="speaker-name">Kartika Pratiwi</h3>
                <p class="speaker-role">Program Lead (Asia-Pacific)</p>
                <p class="speaker-org">WITNESS</p>
            </div>

            <div class="speaker-card">
                <div class="speaker-img-wrapper">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/avatar/georgia.png" alt="Georgia Edwards" class="speaker-img">
                </div>
                <h3 class="speaker-name">Georgia Edwards</h3>
                <p class="speaker-role">Coordinator, Evidence & Investigation</p>
                <p class="speaker-org">WITNESS</p>
            </div>

            <div class="speaker-card">
                <div class="speaker-img-wrapper">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/avatar/yovonne.png" alt="Yvonne Ng" class="speaker-img">
                </div>
                <h3 class="speaker-name">Yvonne Ng</h3>
                <p class="speaker-role">Senior Program Manager of the 
Archives Program</p>
                <p class="speaker-org">WITNESS</p>
            </div>

            <div class="speaker-card">
                <div class="speaker-img-wrapper">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/avatar/huey.jpg" alt="Huey Shin Choo" class="speaker-img">
                </div>
                <h3 class="speaker-name">Huey Shin Choo</h3>
                <p class="speaker-role">Program Coordinator</p>
                <p class="speaker-org">WITNESS</p>
            </div>

            <div class="speaker-card">
                <div class="speaker-img-wrapper">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/avatar/speaker5.jpg" alt="Speaker Name" class="speaker-img">
                </div>
                <h3 class="speaker-name">Speaker Name 5</h3>
                <p class="speaker-role">Role Title Here</p>
                <p class="speaker-org">Organization</p>
            </div>

            <div class="speaker-card">
                <div class="speaker-img-wrapper">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/avatar/speaker6.jpg" alt="Speaker Name" class="speaker-img">
                </div>
                <h3 class="speaker-name">Speaker Name 6</h3>
                <p class="speaker-role">Role Title Here</p>
                <p class="speaker-org">Organization</p>
            </div>

            <div class="speaker-card">
                <div class="speaker-img-wrapper">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/avatar/speaker7.jpg" alt="Speaker Name" class="speaker-img">
                </div>
                <h3 class="speaker-name">Speaker Name 7</h3>
                <p class="speaker-role">Role Title Here</p>
                <p class="speaker-org">Organization</p>
            </div>

            <div class="speaker-card">
                <div class="speaker-img-wrapper">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/avatar/speaker8.jpg" alt="Speaker Name" class="speaker-img">
                </div>
                <h3 class="speaker-name">Speaker Name 8</h3>
                <p class="speaker-role">Role Title Here</p>
                <p class="speaker-org">Organization</p>
            </div>

            <div class="speaker-card">
                <div class="speaker-img-wrapper">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/avatar/speaker9.jpg" alt="Speaker Name" class="speaker-img">
                </div>
                <h3 class="speaker-name">Speaker Name 9</h3>
                <p class="speaker-role">Role Title Here</p>
                <p class="speaker-org">Organization</p>
            </div>

            <div class="speaker-card">
                <div class="speaker-img-wrapper">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/avatar/speaker10.jpg" alt="Speaker Name" class="speaker-img">
                </div>
                <h3 class="speaker-name">Speaker Name 10</h3>
                <p class="speaker-role">Role Title Here</p>
                <p class="speaker-org">Organization</p>
            </div>

            <div class="speaker-card">
                <div class="speaker-img-wrapper">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/avatar/speaker11.jpg" alt="Speaker Name" class="speaker-img">
                </div>
                <h3 class="speaker-name">Speaker Name 11</h3>
                <p class="speaker-role">Role Title Here</p>
                <p class="speaker-org">Organization</p>
            </div>

            <div class="speaker-card">
                <div class="speaker-img-wrapper">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/avatar/speaker12.jpg" alt="Speaker Name" class="speaker-img">
                </div>
                <h3 class="speaker-name">Speaker Name 12</h3>
                <p class="speaker-role">Role Title Here</p>
                <p class="speaker-org">Organization</p>
            </div>

            <div class="speaker-card">
                <div class="speaker-img-wrapper">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/avatar/speaker13.jpg" alt="Speaker Name" class="speaker-img">
                </div>
                <h3 class="speaker-name">Speaker Name 13</h3>
                <p class="speaker-role">Role Title Here</p>
                <p class="speaker-org">Organization</p>
            </div>

        </div>
    </div>
</section>
    <section id="sessions" class="sessions-section">

    <div class="sessions-container">
        <div class="sessions-header">
                <span class="sessions-tag">JOIN US LIVE</span>
                <h2 class="sessions-title">The Schedule</h2>
                
                <p class="sessions-desc">
                    Glides automatically.<br>
                    <strong>Desktop:</strong> Hover to pause. <strong>Mobile:</strong> Swipe to navigate.
                </p>

                <a href="<?php echo site_url('/sessions'); ?>" class="link-full-schedule">
                    View Full Schedule &rarr;
                </a>
            </div>

        <div class="sessions-slider-wrapper">

            <button id="slidePrev" class="slider-nav-btn prev-btn" aria-label="Previous">←</button>

            <div class="sessions-track" id="sessionsTrack">

                <?php
                // UPDATED SESSION DATA FOR 2026 (15 Items Total)
                $sessions = [
                    // --- REAL DATA FROM DOCUMENT ---
                    [
                        'title' => 'Collaborative Future for Community-Led Human Rights Documentation',
                        'desc'  => 'A foundational session exploring future frameworks for community-driven justice and documentation standards.',
                        'type'  => 'Plenary',
                        'date'  => 'Jan 26, 2026',
                        'time'  => '10:00 AM - 11:30 AM',
                        'lead'  => 'Community Leaders'
                    ],
                    [
                        'title' => 'From Hindutva Watch to CSOH: Countering Organized Hate',
                        'desc'  => 'Interactive workshop on researching and documenting organized hate speech using CSOH methodologies.',
                        'type'  => 'Workshop',
                        'date'  => 'Jan 26, 2026',
                        'time'  => '12:00 PM - 01:30 PM',
                        'lead'  => 'Ammaarah Nilafdeen, Raqib Hameed Naik'
                    ],
                    [
                        'title' => 'July Persist: Building Community-Led Archiving & OSINT',
                        'desc'  => 'Strategies for sustainable community archives and investigating protest history using open source intel.',
                        'type'  => 'Ideation',
                        'date'  => 'Jan 26, 2026',
                        'time'  => '02:30 PM - 04:00 PM',
                        'lead'  => 'Subinoy Mustofi Eron, Aaqib Shatil, Shoeb Abdullah, Iffat Joye'
                    ],
                    [
                        'title' => 'Protect the Messenger: Digital & Physical Safety',
                        'desc'  => 'Essential digital hygiene and physical security protocols for journalists covering protests.',
                        'type'  => 'Workshop',
                        'date'  => 'Jan 26, 2026',
                        'time'  => '04:30 PM - 06:00 PM',
                        'lead'  => 'BJIM'
                    ],
                    [
                        'title' => 'Documenting Tech-Facilitated Gender-Based Violence',
                        'desc'  => '10 things you need to know about identifying and combating gender-based violence in digital spaces.',
                        'type'  => 'Workshop',
                        'date'  => 'Jan 26, 2026',
                        'time'  => '11:00 AM - 12:30 PM',
                        'lead'  => 'Activate Rights'
                    ],
                    [
                        'title' => 'Let Knowledge Be Free: Open-Source Principles',
                        'desc'  => 'How open-source principles can support modern journalistic practice and collaborative information sharing.',
                        'type'  => 'Workshop',
                        'date'  => 'Jan 27, 2026',
                        'time'  => '10:00 AM - 11:30 AM',
                        'lead'  => 'Korikath Knowledge'
                    ],
                    [
                        'title' => 'Deadly in Disguise: The Hidden Lethality of Pellet Guns',
                        'desc'  => 'Analyzing the medical and social impact of "non-lethal" crowd control weapons like chhorra guli.',
                        'type'  => 'Dialogue',
                        'date'  => 'Jan 27, 2026',
                        'time'  => '12:00 PM - 01:30 PM',
                        'lead'  => 'Zarif Rahman, Opsora Islam'
                    ],
                    [
                        'title' => 'Crisis Response Tech: Emerging Civic Technologies',
                        'desc'  => 'Exploring challenges and opportunities for civic technologies in crisis response and coordination.',
                        'type'  => 'Roundtable',
                        'date'  => 'Jan 27, 2026',
                        'time'  => '02:30 PM - 04:00 PM',
                        'lead'  => 'Jogajog'
                    ],
                    [
                        'title' => 'Beyond Disinformation: Countering Info Warfare',
                        'desc'  => 'Understanding and countering industrial-scale information warfare targeting Bangladesh.',
                        'type'  => 'Roundtable',
                        'date'  => 'Jan 27, 2026',
                        'time'  => '04:30 PM - 06:00 PM',
                        'lead'  => 'Fact Checkers Alliance'
                    ],
                    [
                        'title' => 'Posters of Resistance: Visual Solidarity and Artivism',
                        'desc'  => 'Interactive journey through the visual language of the movement. Engaging with archive posters.',
                        'type'  => 'Parallel',
                        'date'  => 'Jan 26-27, 2026',
                        'time'  => 'All Day Exhibition',
                        'lead'  => 'Artivism Studio'
                    ],
                    [
                        'title' => 'Truth and Reconciliation: Healing and Accountability',
                        'desc'  => 'Conversations on balancing the need for healing with the demand for accountability in post-conflict contexts.',
                        'type'  => 'Dialogue',
                        'date'  => 'Jan 27, 2026',
                        'time'  => '09:00 AM - 10:30 AM',
                        'lead'  => 'Open Forum'
                    ],

                    // --- SAMPLES TO REACH 15 ---
                    [
                        'title' => 'The Ethics of Archiving Trauma',
                        'desc'  => 'When does documentation become exploitation? A critical look at the ethics of collecting traumatic history.',
                        'type'  => 'Plenary',
                        'date'  => 'Jan 27, 2026',
                        'time'  => '01:00 PM - 02:30 PM',
                        'lead'  => 'Academic Panel'
                    ],
                    [
                        'title' => 'Digital Security Clinic for Activists',
                        'desc'  => 'Bring your devices. A hands-on clinic to help activists secure their phones and accounts.',
                        'type'  => 'Workshop',
                        'date'  => 'Jan 26, 2026',
                        'time'  => '01:00 PM - 03:00 PM',
                        'lead'  => 'SecDev Team'
                    ],
                    [
                        'title' => 'Art as Evidence: Legal Admissibility',
                        'desc'  => 'Can a song, a poem, or a mural be used as evidence in court? Lawyers and artists discuss.',
                        'type'  => 'Roundtable',
                        'date'  => 'Jan 27, 2026',
                        'time'  => '11:00 AM - 12:30 PM',
                        'lead'  => 'Legal Aid Network'
                    ],
                    [
                        'title' => 'Closing Ceremony: The Way Forward',
                        'desc'  => 'Reflecting on the two days of work and setting the agenda for the coming year.',
                        'type'  => 'Plenary',
                        'date'  => 'Jan 27, 2026',
                        'time'  => '06:30 PM - 08:00 PM',
                        'lead'  => 'Organizing Committee'
                    ]
                ];

                // Loop TWICE for Infinite Scroll Effect
                for ($i = 0; $i < 2; $i++) {
                    foreach ($sessions as $session):
                        
                        // BADGE COLOR LOGIC
                        $type = strtolower($session['type']);
                        if (strpos($type, 'plenary') !== false) {
                            $badgeClass = 'badge-plenary';
                        } elseif (strpos($type, 'workshop') !== false) {
                            $badgeClass = 'badge-workshop';
                        } elseif (strpos($type, 'ideation') !== false) {
                            $badgeClass = 'badge-ideation';
                        } elseif (strpos($type, 'dialogue') !== false) {
                            $badgeClass = 'badge-dialogue';
                        } elseif (strpos($type, 'roundtable') !== false) {
                            $badgeClass = 'badge-roundtable';
                        } elseif (strpos($type, 'parallel') !== false) {
                            $badgeClass = 'badge-parallel';
                        } else {
                            $badgeClass = 'badge-workshop'; // Default
                        }

                        // DAY COLOR LOGIC
                        $dayLabel = (strpos($session['date'], 'Jan 26') !== false) ? 'DAY 01' : 'DAY 02';
                        if (strpos($session['date'], 'Jan 26-27') !== false) $dayLabel = 'BOTH';
                        
                        $dayClass = 'day-two';
                        if ($dayLabel === 'DAY 01') $dayClass = 'day-one';
                    ?>

                        <div class="session-card">
                            <div class="card-header">
                                <div class="header-content">
                                    <h3 class="card-title"><?php echo $session['title']; ?></h3>
                                    <p class="card-subtitle"><?php echo $session['lead']; ?></p>
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
                                    <span style="font-style: italic; opacity: 0.8;">Venue TBA</span>
                                </div>
                            </div>

                            <div class="session-hidden-content">
                                <div class="hidden-section">
                                    <span class="hidden-title">About This Session</span>
                                    <p class="hidden-text"><?php echo $session['desc']; ?></p>
                                </div>
                                <div class="hidden-section">
                                    <span class="hidden-title">Info</span>
                                    <p class="hidden-text">Open to all registered participants.</p>
                                </div>
                               <a href="<?php echo site_url('/sessions'); ?>" class="btn-toggle-details" style="text-decoration: none; display: flex; justify-content: center; align-items: center;">View Details</a>
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
<section class="partners-section">
    <div class="container">
        <h2 class="partners-title">Organizers & Partners</h2>
        
        <div class="partner-row">
            <div class="partner-label">Conveyed by</div>
            <div class="partner-logos-wrapper">
                <div class="logo-group">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/partner/activate.svg" alt="Activate Rights" class="partner-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/partner/bpa logo.svg" alt="Bangladesh Protest Archive" class="partner-logo">
                </div>
                <div class="logo-group full-width">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/partner/witness logo new.png" alt="WITNESS" class="partner-logo large-logo">
                </div>
            </div>
        </div>

        <div class="partner-row">
            <div class="partner-label">Collaboration with</div>
            <div class="partner-logos-wrapper">
                <img src="<?php echo get_template_directory_uri(); ?>/images/partner/BJIM Logo.svg" alt="BJIM" class="partner-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/images/partner/shokol-praner-logo.png" alt="Shokol Praner Nirapotta" class="partner-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/images/partner/Surge.webp" alt="Surge Bangladesh" class="partner-logo">
            </div>
        </div>

        <div class="partner-row">
            <div class="partner-label">In Partnership with</div>
            <div class="partner-logos-wrapper">
                <img src="<?php echo get_template_directory_uri(); ?>/images/partner/brac logo.svg" alt="BRAC University" class="partner-logo medium-logo">
            </div>
        </div>

        <div class="partner-row no-border">
            <div class="partner-label">With Support from</div>
            <div class="partner-logos-wrapper">
                <img src="<?php echo get_template_directory_uri(); ?>/images/partner/undp-logo.png" alt="UNDP" class="partner-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/images/partner/netra-news-logo.png" alt="Netra News" class="partner-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/images/partner/archive-resist-fund-logo.png" alt="Archive & Resist Fund" class="partner-logo">
            </div>
        </div>

    </div>
</section>
<section class="venue-section">
    <div class="container">
        <div class="venue-grid">
            
            <div class="venue-info">
                <h2 class="venue-title">Save The Date</h2>
                <p class="venue-desc">
                    A convening for individuals and organizations engaged in human rights, digital rights, social justice, and documentation practices.
                </p>

                <div class="venue-details-block">
                    <div class="venue-item">
                        <span class="venue-label">Venue:</span>
                        <h3 class="venue-highlight">BRAC University</h3>
                    </div>
                    
                    <div class="venue-item">
                        <span class="venue-label">Date:</span>
                        <h3 class="venue-highlight">26-27 Jan 2026</h3>
                    </div>
                </div>
            </div>

            <div class="venue-map-wrapper">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.275386498738!2d90.42224537600622!3d23.773205978654918!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7715a40c603%3A0xec01cd75f33139f5!2sBRAC%20University!5e0!3m2!1sen!2sbd!4v1767476666024!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </iframe>
            </div>

        </div>
        
        <div class="venue-divider"></div>
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

            // --- 1. GENERAL HELPERS (Accordion, etc.) ---
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

            // Accordion Logic
            document.querySelectorAll('.accordion-header').forEach(header => {
                header.addEventListener('click', (e) => {
                    e.stopPropagation();
                    const item = header.parentElement;
                    const isActive = item.classList.contains('active');
                    document.querySelectorAll('.accordion-item').forEach(other => {
                        if (other !== item) closeItem(other, 'accordion-content', 'acc-icon');
                    });
                    isActive ? closeItem(item, 'accordion-content', 'acc-icon') : openItem(item, 'accordion-content', 'acc-icon');
                });
            });

            // Card Details Logic
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
                    }
                });
            });

            // Global Click (Close dropdowns)
            document.addEventListener('click', (e) => {
                if (!e.target.closest('.accordion-item')) {
                    document.querySelectorAll('.accordion-item').forEach(item => closeItem(item, 'accordion-content', 'acc-icon'));
                }
                if (!e.target.closest('.session-card')) {
                    document.querySelectorAll('.session-card.open').forEach(c => {
                        c.classList.remove('open');
                        c.querySelector('.btn-toggle-details').textContent = 'View Details';
                    });
                }
            });

            // Back To Top
            const mybutton = document.getElementById("backToTop");
            if (mybutton) {
                window.onscroll = function() {
                    mybutton.style.display = (window.scrollY > 300) ? "flex" : "none";
                };
                mybutton.addEventListener('click', () => window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                }));
            }


            // --- 2. THE SESSIONS SLIDER (FIXED) ---
            const track = document.getElementById('sessionsTrack');
            const prevBtn = document.getElementById('slidePrev');
            const nextBtn = document.getElementById('slideNext');

            if (track) {
                let isPaused = false;
                let speed = 1.0; // The speed of the slider

                // THE LOOP: Keeps it moving
                function animate() {
                    if (!isPaused) {
                        track.scrollLeft += speed;
                        // Infinite Scroll Reset
                        if (track.scrollLeft >= (track.scrollWidth / 2)) {
                            track.scrollLeft = 0;
                        }
                    }
                    requestAnimationFrame(animate);
                }
                // Start the movement
                animate();

                // DESKTOP INTERACTION (Mouse Only)
                // Checks if the user has a mouse (PC/Laptop)
                const hasMouse = window.matchMedia('(hover: hover) and (pointer: fine)').matches;

                if (hasMouse) {
                    // Pause when hovering over the track
                    track.addEventListener('mouseenter', () => {
                        isPaused = true;
                    });
                    track.addEventListener('mouseleave', () => {
                        isPaused = false;
                    });

                    // Pause when hovering over buttons
                    if (prevBtn && nextBtn) {
                        [prevBtn, nextBtn].forEach(btn => {
                            btn.addEventListener('mouseenter', () => isPaused = true);
                            btn.addEventListener('mouseleave', () => isPaused = false);
                        });
                    }
                }

                // BUTTON CLICKS (Works on Mobile & Desktop)
                if (prevBtn && nextBtn) {
                    const jump = 350;
                    prevBtn.addEventListener('click', () => track.scrollBy({
                        left: -jump,
                        behavior: 'smooth'
                    }));
                    nextBtn.addEventListener('click', () => track.scrollBy({
                        left: jump,
                        behavior: 'smooth'
                    }));
                }
            }

        });
    </script>
    <?php wp_footer(); ?>
</body>

</html>