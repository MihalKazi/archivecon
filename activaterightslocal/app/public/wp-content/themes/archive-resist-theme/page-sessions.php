<?php
/*
Template Name: Sessions Page
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Full Schedule - Archive & Resist Conclave 2026</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <?php wp_head(); ?>

    <style>
        /* 1. SCROLL REVEAL ANIMATION */
        .reveal-on-scroll { opacity: 0; transform: translateY(30px); transition: all 0.8s cubic-bezier(0.5, 0, 0, 1); }
        .reveal-on-scroll.is-visible { opacity: 1; transform: translateY(0); }

        /* 2. CARD HOVER EFFECTS */
        .session-card { transition: transform 0.4s cubic-bezier(0.34, 1.56, 0.64, 1), box-shadow 0.3s ease; will-change: transform; }
        @media (min-width: 992px) {
            .session-card:hover { transform: translateY(-7px) scale(1.01); box-shadow: 0 15px 30px rgba(0,0,0,0.15); z-index: 2; border-color: #333; }
        }

        /* 3. BOTH DAYS HEADER STYLES */
        .both-days-container { width: 100%; margin-bottom: 50px; margin-top: 60px; text-align: center; }
        .both-days-header { margin-bottom: 10px; border-bottom: 2px solid #ddd; line-height: 0.1em; margin-left: 20px; margin-right: 20px; }
        .both-days-header span { background:#fff; padding:0 15px; font-family: var(--font-display, sans-serif); font-weight: 700; color: #555; text-transform: uppercase; letter-spacing: 1px; }
        .both-days-desc { font-family: var(--font-body, sans-serif); color: #666; font-size: 0.95rem; max-width: 600px; margin: 15px auto 30px auto; line-height: 1.4; }

        /* 4. DAY COLUMN HEADER DESCRIPTIONS */
        .day-header { margin-bottom: 30px; padding-bottom: 15px; border-bottom: 4px solid #000; }
        .day-desc { margin-top: 10px; font-family: var(--font-body, sans-serif); font-size: 0.95rem; color: #555; line-height: 1.4; max-width: 90%; }
        .day-desc strong { color: #000; font-weight: 600; }

        /* 5. FULL WIDTH CARD & SHIMMER */
        .session-card.full-width-card { width: 100%; max-width: 100%; display: flex; flex-direction: row; justify-content: space-between; align-items: center; min-height: auto; padding: 30px; position: relative; overflow: hidden; background: #fff; border: 2px solid #000; margin-bottom: 30px; }
        @keyframes shimmer { 0% { left: -100%; } 100% { left: 200%; } }
        .full-width-card::after { content: ""; position: absolute; top: 0; left: -100%; width: 50%; height: 100%; background: linear-gradient(to right, transparent, rgba(255,255,255,0.8), transparent); transform: skewX(-25deg); pointer-events: none; animation: shimmer 6s infinite; }
        .full-width-card .card-header { flex: 2; margin-bottom: 0; padding-right: 20px; border-bottom: none; }
        .full-width-card .card-details { flex: 1; border-left: 1px solid rgba(0,0,0,0.1); padding-left: 30px; }
        @media (max-width: 768px) {
            .session-card.full-width-card { flex-direction: column; align-items: flex-start; }
            .full-width-card .card-header { border-bottom: 1px solid #eee; margin-bottom: 15px; padding-bottom: 15px; width: 100%; }
            .full-width-card .card-details { border-left: none; padding-left: 0; width: 100%; }
        }

        /* 6. STATIC LAYOUT STYLES */
        .schedule-layout { display: flex; gap: 40px; justify-content: center; margin-top: 40px; margin-bottom: 60px; }
        .day-column { flex: 1; max-width: 600px; display: flex; flex-direction: column; }
        .card-stack { display: flex; flex-direction: column; gap: 30px; }
        
        .session-card.static-card { width: 100%; background: #fff; border: 2px solid #000; padding: 25px; display: flex; flex-direction: column; min-height: auto; position: relative; }
        
        .card-header { border-bottom: 1px solid #eee; padding-bottom: 15px; margin-bottom: 15px; }
        .card-title { font-family: var(--font-display, sans-serif); font-size: 1.4rem; line-height: 1.2; margin-bottom: 8px; text-transform: uppercase; }
        
        /* ORG STYLE (UPDATED TO RED) */
        .session-org { font-family: var(--font-body, sans-serif); color: #ff4d4d; font-weight: 700; font-size: 0.9rem; margin-bottom: 0; text-transform: uppercase; }

        .header-meta { margin-top: 10px; }
        .card-badge { padding: 4px 10px; font-size: 0.75rem; font-weight: 700; text-transform: uppercase; border: 1px solid #000; display: inline-block; }
        .badge-plenary { background: #ff4d4d; color: #fff; border-color: #ff4d4d; }
        .badge-workshop { background: #e0e0e0; }
        .badge-ideation { background: #fff; border: 1px dashed #000; }
        .badge-dialogue { background: #fff; border: 1px solid #000; }
        .badge-roundtable { background: #000; color: #fff; }
        .badge-parallel { background: #FFD700; border-color: #FFD700; }

        .detail-row { display: flex; align-items: flex-start; gap: 10px; margin-bottom: 8px; font-size: 0.95rem; color: #444; line-height: 1.4; }
        .detail-icon { font-size: 1.1rem; min-width: 25px; }

        /* DESCRIPTION AREA (Bottom) */
        .card-description-area { margin-top: 15px; padding-top: 15px; border-top: 1px solid #eee; }
        .card-description { font-family: var(--font-body, sans-serif); font-size: 0.9rem; color: #666; line-height: 1.5; margin: 0; }

        /* 7. ORGANIZERS & CO-HOSTS SECTION STYLES */
        .organizers-wrapper { margin-top: 80px; margin-bottom: 60px; padding: 0 20px; }
        .org-title { font-family: var(--font-display, sans-serif); font-size: 3rem; color: #009945; text-transform: uppercase; font-weight: 800; margin-bottom: 30px; letter-spacing: -1px; }
        .conveyed-box { border-top: 2px solid #009945; padding-top: 30px; display: flex; align-items: center; justify-content: space-between; }
        .conveyed-label { font-family: var(--font-body, sans-serif); font-size: 1.1rem; color: #333; width: 20%; font-weight: 600; text-transform: uppercase; }
        .logos-grid { width: 75%; display: flex; justify-content: flex-start; gap: 50px; align-items: center; flex-wrap: wrap; }
        .org-logo img { max-height: 60px; height: auto; object-fit: contain; filter: grayscale(100%); transition: filter 0.3s; }
        .org-logo img:hover { filter: grayscale(0%); }

        /* 8. SUBMIT CTA SECTION STYLES */
        .cta-banner { background-color: #0066cc; padding: 80px 20px; text-align: center; color: #fff; width: 100%; }
        .cta-title { font-family: var(--font-display, sans-serif); font-size: 4rem; font-weight: 900; text-transform: uppercase; margin-bottom: 20px; letter-spacing: -1px; }
        .cta-text { font-family: var(--font-body, sans-serif); font-size: 1.1rem; max-width: 800px; margin: 0 auto 40px auto; line-height: 1.5; opacity: 0.95; }
        .btn-apply { display: inline-block; background-color: #f4f1ea; color: #0066cc; font-family: var(--font-display, sans-serif); font-weight: 700; text-transform: uppercase; padding: 15px 50px; font-size: 1.2rem; text-decoration: none; transition: transform 0.2s ease, box-shadow 0.2s ease; }
        .btn-apply:hover { transform: translateY(-3px); box-shadow: 0 10px 20px rgba(0,0,0,0.2); }

        /* 9. BACK TO TOP BUTTON */
        #backToTop { display: none; position: fixed; bottom: 30px; right: 30px; z-index: 2147483647; width: 50px; height: 50px; border-radius: 50%; border: none; outline: none; justify-content: center; align-items: center; background-color: #F62E2E; color: white; cursor: pointer; box-shadow: 0 8px 20px rgba(0, 0, 0, 0.25); transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1); }
        #backToTop svg { width: 24px; height: 24px; stroke-width: 3; transition: transform 0.3s ease; }
        #backToTop:hover { background-color: #10935B; transform: translateY(-5px) scale(1.05); box-shadow: 0 12px 25px rgba(16, 147, 91, 0.4); }

        /* Mobile Responsive */
        @media (max-width: 768px) {
            .schedule-layout { flex-direction: column; gap: 60px; }
            .day-column { max-width: 100%; }
            .conveyed-box { flex-direction: column; align-items: flex-start; }
            .conveyed-label { margin-bottom: 20px; width: 100%; }
            .logos-grid { width: 100%; gap: 30px; justify-content: flex-start; }
            .org-title { font-size: 2.5rem; }
            .cta-title { font-size: 2.5rem; }
            .cta-banner { padding: 60px 20px; }
        }
    </style>
</head>

<body id="top" <?php body_class(); ?>>

    <button id="backToTop" title="Go to top" aria-label="Scroll to top">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
            <path d="m18 15-6-6-6 6" />
        </svg>
    </button>

    <header class="site-header">
        <nav class="main-nav">
            <a href="<?php echo site_url(); ?>">Home</a>
            <a href="<?php echo site_url('/sessions'); ?>" class="active">Sessions</a>
            <a href="https://forms.gle/5znCihw4n17QiQnN8" target="_blank" rel="noopener noreferrer">Registration</a>
            <a href="<?php echo site_url('/faq'); ?>">FAQ</a>
        </nav>
    </header>

    <div class="container">
        
        <section class="hero">
            <div class="hero-left">
                <h1>
                    <span class="text-blue">ARCHIVE</span>
                    <span class="text-red">& RESIST</span>
                    <span class="text-green">CONCLAVE</span>
                </h1>
            </div>
            <div class="hero-right reveal-on-scroll">
                <div class="hero-desc">
                    OFFICIAL SCHEDULE<br>Day 01 & Day 02<br>Workshops & Panels
                </div>
                <div class="hero-graphic">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/red-stamp.png" alt="Stamp">
                </div>
                <div class="date-divider"></div>
                <div class="hero-date">26-27 January 2026 | BRAC University, Dhaka</div>
                
                <a href="#schedule-grid" class="btn-ticket">VIEW SESSION ↓</a>
            </div>
        </section>

        <?php
        // --- 1. BOTH DAYS (TOP) ---
        $both_days_top = [
            [
                'title' => 'Resistance Cinema Fest', 
                'desc' => 'Screening of documentaries and short films capturing the spirit of resistance.', 
                'type' => 'Parallel', 
                'time' => 'Ongoing (Day 01 & 02)', 
                'lead' => 'Bangladesh Protest Archive', 
                'org' => 'Bangladesh Protest Archive',
                'date' => 'Jan 26-27'
            ]
        ];

        // --- 2. DAY 1 SESSIONS (Jan 26) ---
        $day1 = [
            [
                'title' => 'Collaborative Future for Community-Led Documentation', 
                'desc' => 'A foundational session exploring frameworks for community-driven justice and documentation standards.', 
                'type' => 'Plenary', 
                'time' => '10:00 AM - 11:30 AM', 
                'lead' => 'Community Leaders', 
                'org' => 'Community Leaders'
            ],
            [
                'title' => 'Documenting Tech-Facilitated Gender-Based Violence', 
                'desc' => '10 Things You Need to Know: Identifying and combating gender-based violence in digital spaces.', 
                'type' => 'Workshop', 
                'time' => '11:00 AM - 12:30 PM', 
                'lead' => 'Minhaj Aman', 
                'org' => 'Activate Rights'
            ],
            [
                'title' => 'From Hindutva Watch to CSOH: Countering Organized Hate', 
                'desc' => 'Interactive workshop on researching and documenting organized hate speech using CSOH methodologies.', 
                'type' => 'Workshop', 
                'time' => '12:00 PM - 01:30 PM', 
                'lead' => 'Ammaarah Nilafdeen, Raqib Hameed Naik', 
                'org' => 'Center for the Study of Organized Hate'
            ],
            [
                'title' => 'Digital Security Clinic for Activists', 
                'desc' => 'Bring your devices. A hands-on clinic to help activists secure their phones and accounts.', 
                'type' => 'Workshop', 
                'time' => '01:00 PM - 03:00 PM', 
                'lead' => 'SecDev Team', 
                'org' => 'SecDev Team'
            ],
            [
                'title' => 'July Persist: Building Community-Led Archiving & OSINT', 
                'desc' => 'Strategies for sustainable community archives and investigating protest history using open source intel.', 
                'type' => 'Ideation', 
                'time' => '02:30 PM - 04:00 PM', 
                'lead' => 'Subinoy Mustofi Eron, Aaqib Shatil, Shoeb Abdullah', 
                'org' => 'Netra News, BD Protest Archive'
            ],
            [
                'title' => 'Protect the Messenger: Digital & Physical Safety', 
                'desc' => 'Essential digital hygiene and physical security protocols for journalists covering protests.', 
                'type' => 'Workshop', 
                'time' => '04:30 PM - 06:00 PM', 
                'lead' => 'M A Mazed, Sam Jahan', 
                'org' => 'BJIM'
            ]
        ];

        // --- 3. DAY 2 SESSIONS (Jan 27) ---
        $day2 = [
            [
                'title' => 'Truth and Reconciliation: Healing and Accountability', 
                'desc' => 'Conversations on balancing the need for healing with the demand for accountability in post-conflict contexts.', 
                'type' => 'Dialogue', 
                'time' => '09:00 AM - 10:30 AM', 
                'lead' => 'Open Forum', 
                'org' => 'Open Forum'
            ],
            [
                'title' => 'Let Knowledge Be Free: Open-Source Principles', 
                'desc' => 'How open-source principles can support modern journalistic practice and collaborative information sharing.', 
                'type' => 'Workshop', 
                'time' => '10:00 AM - 11:30 AM', 
                'lead' => 'M. Rafiul Bahar Rafi', 
                'org' => 'Korikath Knowledge'
            ],
            [
                'title' => 'Art as Evidence: Legal Admissibility', 
                'desc' => 'Can a song, a poem, or a mural be used as evidence in court? Lawyers and artists discuss.', 
                'type' => 'Roundtable', 
                'time' => '11:00 AM - 12:30 PM', 
                'lead' => 'Lawyers & Artists', 
                'org' => 'Legal Aid Network'
            ],
            [
                'title' => 'Deadly in Disguise: Hidden Lethality of Pellet Guns', 
                'desc' => 'Analyzing the medical and social impact of "non-lethal" crowd control weapons like chhorra guli.', 
                'type' => 'Dialogue', 
                'time' => '12:00 PM - 01:30 PM', 
                'lead' => 'Zarif Rahman, Opsora Islam, Sapran', 
                'org' => 'Independent Researchers'
            ],
            [
                'title' => 'The Ethics of Archiving Trauma', 
                'desc' => 'When does documentation become exploitation? A critical look at the ethics of collecting traumatic history.', 
                'type' => 'Plenary', 
                'time' => '01:00 PM - 02:30 PM', 
                'lead' => 'Academic Panel', 
                'org' => 'Academic Panel'
            ],
            [
                'title' => 'Crisis Response Tech: Emerging Civic Technologies', 
                'desc' => 'Exploring challenges and opportunities for civic technologies in crisis response and coordination.', 
                'type' => 'Roundtable', 
                'time' => '02:30 PM - 04:00 PM', 
                'lead' => 'Chowdhury Isfatul Karim, Rafid Khan', 
                'org' => 'Jogajog'
            ],
            [
                'title' => 'Beyond Disinformation: Countering Info Warfare', 
                'desc' => 'Understanding and countering industrial-scale information warfare targeting Bangladesh.', 
                'type' => 'Roundtable', 
                'time' => '04:30 PM - 06:00 PM', 
                'lead' => 'Fact Checkers, Media', 
                'org' => 'Fact Checkers Alliance'
            ],
            [
                'title' => 'Closing Ceremony: The Way Forward', 
                'desc' => 'Reflecting on the two days of work and setting the agenda for the coming year.', 
                'type' => 'Plenary', 
                'time' => '06:30 PM - 08:00 PM', 
                'lead' => 'Organizing Committee', 
                'org' => 'Organizing Committee'
            ]
        ];

        // --- 4. BOTH DAYS (BOTTOM) ---
        $both_days_bottom = [
            [
                'title' => 'Posters of Resistance: Visual Solidarity and Artivism', 
                'desc' => 'Interactive journey through the visual language of the movement. Engaging with archive posters.', 
                'type' => 'Parallel', 
                'time' => 'Ongoing (Day 01 & 02)', 
                'lead' => 'Artivism Studio', 
                'org' => 'Artivism Studio, Kashful Foundation',
                'date' => 'Jan 26-27'
            ]
        ];
        ?>

        <?php if (!empty($both_days_top)): ?>
        <div class="both-days-container reveal-on-scroll" id="schedule-grid">
            <h2 class="both-days-header"><span>Ongoing / Both Days</span></h2>
            <p class="both-days-desc">An immersive exhibition running parallel to the main sessions. Open for all attendees throughout the conclave.</p>
            <?php foreach($both_days_top as $session): $badgeClass = 'badge-parallel'; ?>
            <div class="session-card static-card full-width-card">
                <div class="card-header">
                    <div class="header-content">
                        <h3 class="card-title"><?php echo $session['title']; ?></h3>
                        <p class="session-org" style="color:#ff4d4d; font-weight:700; font-size:0.95rem; margin-bottom:5px; text-transform:uppercase;"><?php echo $session['org']; ?></p>
                    </div>
                    <div class="header-meta"><span class="card-badge <?php echo $badgeClass; ?>"><?php echo $session['type']; ?></span></div>
                </div>
                <div class="card-details">
                    <div class="detail-row"><span class="detail-icon icon-time">⏰</span> <?php echo $session['time']; ?></div>
                    <div class="detail-row"><span class="detail-icon icon-room">📍</span> <span style="font-style: italic; opacity: 0.8;">Gallery / Hall</span></div>
                    <div class="detail-row"><span class="detail-icon icon-user">👤</span> <?php echo $session['lead']; ?></div>
                </div>
                <div class="card-description-area">
                    <p class="card-description"><?php echo $session['desc']; ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>

        <div class="schedule-layout">
            <div class="day-column">
                <div class="day-header header-d1 reveal-on-scroll">
                    <h2>DAY 01</h2><span class="date-sub">January 26, 2026</span>
                    <p class="day-desc">Focus: <strong>Tools & Protection</strong>. Practical workshops, ideation sessions, and clinics designed to equip activists.</p>
                </div>
                <div class="card-stack">
                    <?php foreach($day1 as $session): 
                        $type = strtolower($session['type']);
                        if (strpos($type, 'plenary') !== false) $badgeClass = 'badge-plenary';
                        elseif (strpos($type, 'workshop') !== false) $badgeClass = 'badge-workshop';
                        elseif (strpos($type, 'ideation') !== false) $badgeClass = 'badge-ideation';
                        else $badgeClass = 'badge-workshop';
                    ?>
                    <div class="session-card static-card reveal-on-scroll">
                        <div class="card-header">
                            <div class="header-content">
                                <h3 class="card-title"><?php echo $session['title']; ?></h3>
                                <p class="session-org" style="color:#ff4d4d; font-weight:700; font-size:0.9rem; margin-bottom:5px; text-transform:uppercase;"><?php echo $session['org']; ?></p>
                            </div>
                            <div class="header-meta"><span class="card-badge <?php echo $badgeClass; ?>"><?php echo $session['type']; ?></span></div>
                        </div>
                        <div class="card-details">
                            <div class="detail-row"><span class="detail-icon icon-time">⏰</span> <?php echo $session['time']; ?></div>
                            <div class="detail-row"><span class="detail-icon icon-room">📍</span> <span style="font-style: italic; opacity: 0.8;">Room: TBA</span></div>
                            <div class="detail-row"><span class="detail-icon icon-user">👤</span> <?php echo $session['lead']; ?></div>
                        </div>
                        <div class="card-description-area">
                            <p class="card-description"><?php echo $session['desc']; ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="day-column">
                <div class="day-header header-d2 reveal-on-scroll">
                    <h2>DAY 02</h2><span class="date-sub">January 27, 2026</span>
                    <p class="day-desc">Focus: <strong>Justice & Dialogue</strong>. Strategic roundtables, critical dialogues, and plenaries shaping the future.</p>
                </div>
                <div class="card-stack">
                    <?php foreach($day2 as $session): 
                        $type = strtolower($session['type']);
                        if (strpos($type, 'plenary') !== false) $badgeClass = 'badge-plenary';
                        elseif (strpos($type, 'workshop') !== false) $badgeClass = 'badge-workshop';
                        elseif (strpos($type, 'ideation') !== false) $badgeClass = 'badge-ideation';
                        elseif (strpos($type, 'dialogue') !== false) $badgeClass = 'badge-dialogue';
                        elseif (strpos($type, 'roundtable') !== false) $badgeClass = 'badge-roundtable';
                        else $badgeClass = 'badge-workshop';
                    ?>
                    <div class="session-card static-card reveal-on-scroll">
                        <div class="card-header">
                            <div class="header-content">
                                <h3 class="card-title"><?php echo $session['title']; ?></h3>
                                <p class="session-org" style="color:#ff4d4d; font-weight:700; font-size:0.9rem; margin-bottom:5px; text-transform:uppercase;"><?php echo $session['org']; ?></p>
                            </div>
                            <div class="header-meta"><span class="card-badge <?php echo $badgeClass; ?>"><?php echo $session['type']; ?></span></div>
                        </div>
                        <div class="card-details">
                            <div class="detail-row"><span class="detail-icon icon-time">⏰</span> <?php echo $session['time']; ?></div>
                            <div class="detail-row"><span class="detail-icon icon-room">📍</span> <span style="font-style: italic; opacity: 0.8;">Room: TBA</span></div>
                            <div class="detail-row"><span class="detail-icon icon-user">👤</span> <?php echo $session['lead']; ?></div>
                        </div>
                        <div class="card-description-area">
                            <p class="card-description"><?php echo $session['desc']; ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <?php if (!empty($both_days_bottom)): ?>
        <div class="both-days-container reveal-on-scroll">
            <?php foreach($both_days_bottom as $session): $badgeClass = 'badge-parallel'; ?>
            <div class="session-card static-card full-width-card">
                <div class="card-header">
                    <div class="header-content">
                        <h3 class="card-title"><?php echo $session['title']; ?></h3>
                        <p class="session-org" style="color:#ff4d4d; font-weight:700; font-size:0.95rem; margin-bottom:5px; text-transform:uppercase;"><?php echo $session['org']; ?></p>
                    </div>
                    <div class="header-meta"><span class="card-badge <?php echo $badgeClass; ?>"><?php echo $session['type']; ?></span></div>
                </div>
                <div class="card-details">
                    <div class="detail-row"><span class="detail-icon icon-time">⏰</span> <?php echo $session['time']; ?></div>
                    <div class="detail-row"><span class="detail-icon icon-room">📍</span> <span style="font-style: italic; opacity: 0.8;">Gallery / Hall</span></div>
                    <div class="detail-row"><span class="detail-icon icon-user">👤</span> <?php echo $session['lead']; ?></div>
                </div>
                <div class="card-description-area">
                    <p class="card-description"><?php echo $session['desc']; ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>

        <div class="organizers-wrapper reveal-on-scroll">
            <h2 class="org-title">ORGANIZERS & PARTNERS</h2>
            <div class="conveyed-box">
                <div class="conveyed-label">Conveyed by</div>
                <div class="logos-grid">
                    <div class="org-logo"><img src="<?php echo get_template_directory_uri(); ?>/images/partner/activate-rights-logo.png" alt="Activate Rights"></div>
                    <div class="org-logo"><img src="<?php echo get_template_directory_uri(); ?>/images/partner/protest-archive-logo.png" alt="Bangladesh Protest Archive"></div>
                    <div class="org-logo"><img src="<?php echo get_template_directory_uri(); ?>/images/partner/witness-logo.png" alt="Witness"></div>
                </div>
            </div>
        </div>

        <div class="organizers-wrapper reveal-on-scroll" style="margin-top: 0;">
            <h2 class="org-title">SESSION CO-HOSTS</h2>
            <div class="conveyed-box">
                <div class="conveyed-label">collaborating with</div>
                <div class="logos-grid">
                    <div class="org-logo"><img src="<?php echo get_template_directory_uri(); ?>/images/partner/netra-news-logo.png" alt="Netra News"></div>
                    <div class="org-logo"><img src="<?php echo get_template_directory_uri(); ?>/images/partner/bjim-logo.png" alt="BJIM"></div>
                    <div class="org-logo"><img src="<?php echo get_template_directory_uri(); ?>/images/partner/jogajog-logo.png" alt="Jogajog"></div>
                    <div class="org-logo"><img src="<?php echo get_template_directory_uri(); ?>/images/partner/korikath-logo.png" alt="Korikath"></div>
                    <div class="org-logo"><img src="<?php echo get_template_directory_uri(); ?>/images/partner/csoh-logo.png" alt="CSOH"></div>
                </div>
            </div>
        </div>

    </div> <section class="cta-banner reveal-on-scroll">
        <h2 class="cta-title">SUBMIT YOUR SESSION</h2>
        <p class="cta-text">
            Session submissions are open to individuals and organizations working on human rights, digital rights, social justice, documentation, and archiving, including practitioners, researchers, journalists, technologists, activists, and community organizers, with the submission deadline set for 6 January 2026.
        </p>
        <a href="https://forms.gle/5znCihw4n17QiQnN8" target="_blank" rel="noopener noreferrer" class="btn-apply">APPLY</a>
    </section>

    <footer>
        <div class="footer-bottom">
            <div class="container">
                <div class="footer-content-row">
                    <div class="footer-logo">
                        <a href="<?php echo site_url(); ?>" class="footer-logo-link">
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
    
    <?php wp_footer(); ?>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("is-visible");
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1, rootMargin: "0px 0px -50px 0px" });

        document.querySelectorAll(".reveal-on-scroll").forEach((el) => observer.observe(el));

        // BACK TO TOP
        const mybutton = document.getElementById("backToTop");
        window.onscroll = function() {
            if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
                mybutton.style.display = "flex";
            } else {
                mybutton.style.display = "none";
            }
        };
        mybutton.addEventListener('click', function() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    });
    </script>
</body>
</html>