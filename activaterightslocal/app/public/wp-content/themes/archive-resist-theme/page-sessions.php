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
        /* --- 0. VARIABLES & DEFAULTS --- */
        :root {
            --c-archive: #0f79eb;
            /* Blue */
            --c-resist: #f62e2e;
            /* Red */
            --c-conclave: #10935b;
            /* Green */
            --black: #262421;
            --white: #ffffff;
            --beige: #f6f4ee;
            --dark-charcoal: #262421;
            --font-display: "Barlow Semi Condensed", sans-serif;
            --font-body: "Inter", sans-serif;
        }

        body {
            margin: 0;
            padding: 0;
            background-color: #fdfdf5;
            /* Off-white background */
            overflow-x: hidden;
            color: var(--black);
        }

        /* Container: Controls width for Header AND Content */
        .container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 20px;
            width: 100%;
            box-sizing: border-box;
        }

        /* --- 1. HEADER (Fixed) --- */
        .site-header {
            display: flex;
            align-items: flex-end;
            padding: 40px 0 20px 0;
            /* Adjusted padding for balance */
            width: 100%;
            border-bottom: 3px solid var(--c-archive);
            margin-bottom: 40px;
            /* Pushes Hero down */
            background: transparent;
        }

        .main-nav {
            display: flex;
            /* FIX: changed from space-between to flex-start + gap to prevent awkward edge-to-edge spreading */
            justify-content: space-between;
            gap: 60px;
            width: 100%;
            margin: 0;
            padding: 0;
        }

        .main-nav a {
            text-decoration: none;
            color: var(--black);
            font-family: var(--font-body);
            font-weight: 700;
            /* Made slightly bolder for readability */
            text-transform: uppercase;
            font-size: 1.1rem;
            line-height: 1;
            transition: color 0.3s ease;
            position: relative;
        }

        .main-nav a:hover,
        .main-nav a.active {
            color: var(--c-archive);
        }

        /* --- 2. HERO SECTION (Fixed Clipping) --- */
        .hero {
            display: flex;
            justify-content: space-between;
            /* Ensures left/right split */
            align-items: flex-start;
            /* FIX: Added top padding (40px) to prevent "ARCHIVE" from being cut off */
            padding: 40px 0 80px 0;
            overflow: visible;
            /* Allows text ascenders to show */
            gap: 40px;
            margin-bottom: 60px;
        }

        .hero-left {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
        }

        .hero-left h1 {
            font-family: var(--font-display);
            font-weight: 900;
            font-size: clamp(4.5rem, 13vw, 13rem);
            /* Slightly reduced max to fit standard screens better */
            line-height: 0.75;
            text-transform: uppercase;
            margin: 0;
            letter-spacing: -0.02em;
            width: 100%;
            word-break: normal;

            /* FIX: Negative top margin to pull text up visually without clipping */
            margin-top: -10px;
        }

        /* HERO ANIMATIONS */
        .hero-left h1 span {
            display: block;
            opacity: 0;
            transform: translateX(-50px);
            animation: textSlideIn 0.8s ease-out forwards;
        }

        .hero-left h1 span.text-blue {
            color: var(--c-archive);
        }

        .hero-left h1 span.text-red {
            color: var(--c-resist);
        }

        .hero-left h1 span.text-green {
            color: var(--c-conclave);
        }

        .hero-left h1 span:nth-child(1) {
            animation-delay: 0.2s;
        }

        .hero-left h1 span:nth-child(2) {
            animation-delay: 0.4s;
        }

        .hero-left h1 span:nth-child(3) {
            animation-delay: 0.6s;
        }

        @keyframes textSlideIn {
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .hero-right {
            width: 28%;
            min-width: 300px;
            max-width: 400px;
            flex-shrink: 0;
            display: flex;
            flex-direction: column;
            gap: 20px;
            /* FIX: Align with the visual top of the big text */
            padding-top: 10px;
            text-align: left;
        }

        .hero-desc {
            color: var(--c-resist);
            font-family: var(--font-body);
            font-size: 1.25rem;
            line-height: 1.3;
            font-weight: 500;
        }

        .hero-graphic {
            width: 150px;
            height: 150px;
            display: flex;
            align-items: center;
            justify-content: flex-start;
            margin: 10px 0;
        }

        .hero-graphic img {
            opacity: 0;
            transform: scale(3) rotate(-10deg);
            animation: stampDown 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards;
            animation-delay: 1.2s;
            width: 100%;
            height: auto;
        }

        @keyframes stampDown {
            to {
                opacity: 1;
                transform: scale(1) rotate(0deg);
            }
        }

        .date-divider {
            border-top: 3px solid var(--black);
            width: 100%;
        }

        .hero-date {
            color: var(--c-resist);
            font-family: var(--font-body);
            font-weight: 700;
            font-size: 1.2rem;
        }

        .btn-ticket {
            background: var(--c-resist);
            color: var(--white);
            padding: 22px 0;
            text-align: center;
            text-transform: uppercase;
            font-family: var(--font-display);
            font-weight: 800;
            font-size: 1.6rem;
            text-decoration: none;
            display: block;
            width: 100%;
            border: none;
            transition: background-color 0.3s ease;
            margin-top: auto;
            cursor: pointer;
        }

        .btn-ticket:hover {
            background: var(--c-conclave);
        }

        /* --- 3. SCHEDULE LAYOUT & CARDS --- */
        .reveal-on-scroll {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s cubic-bezier(0.5, 0, 0, 1);
        }

        .reveal-on-scroll.is-visible {
            opacity: 1;
            transform: translateY(0);
        }

        .schedule-layout {
            display: flex !important;
            flex-direction: row !important;
            gap: 60px;
            justify-content: center;
            align-items: flex-start;
            margin-bottom: 80px;
        }

        .day-column {
            flex: 1 1 0px !important;
            width: 50% !important;
            min-width: 0;
            display: flex;
            flex-direction: column;
        }

        .card-stack {
            display: flex;
            flex-direction: column;
            gap: 30px;
            width: 100%;
        }

        .session-card {
            width: 100% !important;
            max-width: 100% !important;
            box-sizing: border-box;
            background: #fff;
            border: 2px solid #000;
            padding: 30px;
            display: flex;
            flex-direction: column;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        /* Card Headers */
        .day-header {
            margin-bottom: 30px;
            padding-bottom: 15px;
            border-bottom: 5px solid #000;
        }

        .day-header h2 {
            font-family: var(--font-display);
            font-size: 3.5rem;
            margin: 0;
            line-height: 1;
            font-weight: 900;
            letter-spacing: -1px;
            text-transform: uppercase;
        }

        .header-d1 h2 {
            color: var(--c-conclave);
        }

        .header-d1 {
            border-bottom-color: var(--c-conclave);
        }

        .header-d2 h2 {
            color: var(--c-resist);
        }

        .header-d2 {
            border-bottom-color: var(--c-resist);
        }

        .both-days-header h2 {
            color: var(--c-archive);
        }

        .date-sub {
            font-family: var(--font-body);
            font-weight: 700;
            text-transform: uppercase;
            font-size: 1rem;
            color: #000;
            margin-top: 5px;
            display: inline-block;
        }

        .day-desc {
            margin-top: 15px;
            font-family: var(--font-body);
            font-size: 1rem;
            color: #555;
            line-height: 1.5;
        }
/* --- BOTH DAYS HEADER (Centered, Gradient & Description) --- */
.both-days-header {
    text-align: center !important;
    padding-bottom: 20px; /* More space for the text */
    margin-bottom: 40px;
    
    /* Gradient Border: Green to Red */
    border-bottom: 5px solid;
    border-image: linear-gradient(to right, var(--c-conclave), var(--c-resist)) 1;
}

.both-days-header h2 {
    font-family: var(--font-display);
    font-weight: 900;
    font-size: 3.5rem;
    text-transform: uppercase;
    letter-spacing: -1px;
    line-height: 1;
    margin: 0;
    
    /* Gradient Text: Green to Red */
    background:#0f79eb;
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    display: inline-block;
}

.both-days-header .date-sub {
    font-family: var(--font-body);
    font-weight: 700;
    text-transform: uppercase;
    font-size: 1rem;
    color: var(--black);
    display: block;
    margin-top: 10px;
}

/* NEW: Centered Description Style */
.both-days-header .day-desc {
    font-family: var(--font-body);
    font-size: 1.1rem;
    color: #555;
    line-height: 1.5;
    max-width: 600px;    /* Prevents it from getting too wide */
    margin: 15px auto 0; /* Centers the block horizontally */
}
        /* Card Content */
        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            border-bottom: 1px solid #eee;
            padding-bottom: 15px;
            margin-bottom: 15px;
            gap: 15px;
        }

        .card-title {
            font-family: var(--font-display);
            font-size: 1.6rem;
            line-height: 1.1;
            margin: 0 0 8px 0;
            text-transform: uppercase;
            font-weight: 800;
            color: #000;
        }

        .session-org {
            font-family: var(--font-body);
            color: var(--c-resist);
            font-weight: 700;
            font-size: 0.9rem;
            margin: 0;
            text-transform: uppercase;
        }

        .card-badge {
            padding: 5px 10px;
            font-size: 0.7rem;
            font-weight: 700;
            text-transform: uppercase;
            border: 1px solid #000;
            white-space: nowrap;
            flex-shrink: 0;
        }

        .badge-plenary {
            background: var(--c-resist);
            color: #fff;
            border-color: var(--c-resist);
        }

        .badge-workshop {
            background: #e0e0e0;
        }

        .badge-ideation {
            background: #fff;
            border: 1px dashed #000;
        }

        .badge-dialogue {
            background: #fff;
            border: 1px solid #000;
        }

        .badge-roundtable {
            background: #000;
            color: #fff;
        }

        .badge-parallel {
            background: #FFD700;
            border-color: #FFD700;
        }

        .card-details {
            margin-bottom: 15px;
        }

        .detail-row {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 6px;
            font-size: 0.9rem;
            color: #444;
            font-family: var(--font-body);
        }

        .card-description-area {
            border-top: 1px solid #eee;
            padding-top: 15px;
        }

        .card-description {
            font-family: var(--font-body);
            font-size: 0.95rem;
            color: #555;
            line-height: 1.5;
            margin: 0;
        }

        .full-width-card {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
        }

        .full-width-card .card-header {
            border-bottom: none;
            flex: 2;
            margin-bottom: 0;
            padding-bottom: 0;
        }

        .full-width-card .card-details {
            flex: 1;
            border-left: 1px solid #eee;
            padding-left: 20px;
            margin-bottom: 0;
        }

        .full-width-card .card-description-area {
            width: 100%;
            margin-top: 20px;
        }

        /* Partners & CTA */
        .partners-section {
            padding: 80px 0;
            border-top: 1px solid #eee;
            margin-top: 60px;
        }

        .partners-title {
            font-family: var(--font-display);
            font-size: 3rem;
            color: var(--c-conclave);
            text-transform: uppercase;
            font-weight: 800;
            margin-bottom: 40px;
        }

        .partner-row {
            display: flex;
            border-top: 1px solid #eee;
            padding: 30px 0;
            align-items: center;
        }

        .partner-label {
            width: 25%;
            font-weight: 700;
            text-transform: uppercase;
            font-family: var(--font-body);
        }

        .partner-logos-wrapper {
            width: 75%;
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
            align-items: center;
        }

        .partner-logo {
            max-height: 50px;
            width: auto;
        }

        .cta-banner {
            background-color: var(--c-archive);
            padding: 60px 20px;
            text-align: center;
            color: #fff;
        }

        .cta-title {
            font-size: 3rem;
            font-weight: 900;
            text-transform: uppercase;
            margin-bottom: 20px;
            font-family: var(--font-display);
        }

        .btn-apply {
            background: #fff;
            color: var(--c-archive);
            padding: 15px 40px;
            font-weight: 700;
            text-transform: uppercase;
            text-decoration: none;
            display: inline-block;
            font-family: var(--font-display);
        }

        /* =========================================
           MOBILE & TABLET RESPONSIVE
           ========================================= */
        @media screen and (max-width: 1024px) {
            .hero {
                flex-direction: column;
                gap: 40px;
            }

            .hero-right {
                width: 100%;
                max-width: 100%;
            }

            .hero-left h1 {
                font-size: 15vw;
            }

            .main-nav {
                justify-content: center;
                gap: 20px;
                flex-wrap: wrap;
            }
        }

        @media screen and (max-width: 900px) {
            .site-header {
                padding: 20px 0;
                flex-direction: column;
                align-items: center;
            }

            .schedule-layout {
                display: block !important;
            }

            .day-column {
                width: 100% !important;
                margin-bottom: 60px;
            }

            .full-width-card {
                flex-direction: column !important;
                align-items: flex-start !important;
            }

            .full-width-card .card-header {
                width: 100%;
                border-bottom: 1px solid #eee !important;
                padding-bottom: 15px !important;
            }

            .full-width-card .card-details {
                border-left: none !important;
                padding-left: 0 !important;
                width: 100%;
            }

            .partner-row {
                flex-direction: column;
                gap: 15px;
            }

            .partner-label {
                width: 100%;
            }
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
                'desc'  => 'Screening of documentaries and short films capturing the spirit of resistance.',
                'type'  => 'Parallel',
                'date'  => 'Jan 26-27',
                'time'  => 'Ongoing',
                'lead'  => 'Bangladesh Protest Archive',
                'org'   => 'Bangladesh Protest Archive'
            ],

        ];

        // --- 2. DAY 1 SESSIONS (Jan 26) ---
        $day1 = [
            [
                'title' => 'Collaborative Future for Community-Led Human Rights Documentation & Transitional Justice',
                'desc'  => 'A foundational session exploring frameworks for community-driven justice and documentation standards.',
                'type'  => 'Plenary',
                'date'  => 'Jan 26',
                'time'  => '10:00 AM',
                'lead'  => 'All Partners',
                'org'   => 'All Partners'
            ],
            [
                'title' => 'Level Up Your Archiving, Starting from the Basics',
                'desc'  => 'Practical steps for activists to secure and organize their documentation for future justice processes.',
                'type'  => 'Workshop',
                'date'  => 'Jan 26',
                'time'  => '11:30 AM',
                'lead'  => 'Yvonne Ng',
                'org'   => 'WITNESS'
            ],
            [
                'title' => 'From Hindutva Watch to CSOH: Countering Organized Hate through Research & Documentation',
                'desc'  => 'Interactive workshop on researching and documenting organized hate speech using CSOH methodologies.',
                'type'  => 'Workshop',
                'date'  => 'Jan 26',
                'time'  => '02:00 PM',
                'lead'  => 'Ammaarah Nilafdeen,Raqib Hameed Naik',
                'org'   => 'Center for the Study of Organized Hate'
            ],
            [
                'title' => 'July Persist: How to build Community-Led Archiving and OSINT Investigation in Bangladesh',
                'desc'  => 'Strategies for sustainable community archives and investigating protest history using open source intel.',
                'type'  => 'Ideation',
                'date'  => 'Jan 26',
                'time'  => '02:00 PM',
                'lead'  => 'Subinoy Mustofi Eron Aaqib Shatil Shoeb Abdullah Iffat Joye',
                'org'   => 'Netra News, Bangladesh Protest Archive'
            ],
            [
                'title' => 'Preserving the History: Coverage, Safety, and Documentation of Bangladesh General Election-2026',
                'desc'  => 'A critical dialogue on the role of media and safety protocols during the upcoming general election.',
                'type'  => 'Dialogue',
                'date'  => 'Jan 26',
                'time'  => '04:00 PM',
                'lead'  => 'M A Mazed, Sam Jahan',
                'org'   => 'BJIM'
            ],
        ];

        // --- 3. DAY 2 SESSIONS (Jan 27) ---
        $day2 = [
            [
                'title' => 'Truth and Reconciliation: Conversations on Healing and Accountability',
                'desc'  => 'Conversations on balancing the need for healing with the demand for accountability in post-conflict contexts.',
                'type'  => 'Dialogue',
                'date'  => 'Jan 27',
                'time'  => '10:00 AM',
                'lead'  => 'UNDP Reps',
                'org'   => 'UNDP'
            ],
            [
                'title' => 'Screenshot It, Bestie! But Do It Right: 10 Things You Need to Know About Documenting TFGBV',
                'desc'  => '10 Things You Need to Know: Identifying and combating gender-based violence in digital spaces.',
                'type'  => 'Workshop',
                'date'  => 'Jan 27',
                'time'  => '11:30 AM',
                'lead'  => 'Minhaj Aman, Israr Hassan',
                'org'   => 'Activate Rights, BRAC James P Grant School of Public Health'
            ],
            [
                'title' => 'Let Knowledge Be Free: How Open-Source Principles Can Support Journalistic Practice and a Collaborative Future',
                'desc'  => 'How open-source principles can support modern journalistic practice and collaborative information sharing.',
                'type'  => 'Workshop',
                'date'  => 'Jan 27',
                'time'  => '11:30 AM',
                'lead'  => 'M. Rafiul Bahar Rafi',
                'org'   => 'Korikath Knowledge'
            ],

            [
                'title' => 'Deadly in Disguise: The Hidden Lethality of Pellet Guns/Chhorra Guli',
                'desc'  => 'Examining the often-overlooked dangers and fatal consequences of pellet guns, commonly known as chhorra guli.',
                'type'  => 'Dialogue',
                'date'  => 'Jan 27',
                'time'  => '01:00 PM',
                'lead'  => 'Zarif Rahman, Opsora Islam',
                'org'   => 'Sapran'
            ],
            [
                'title' => 'Crisis Response Tech: Exploring Challenges and Opportunities for Emerging Civic Technologies in Bangladesh',
                'desc'  => 'Analyzing the challenges and potential of emerging civic technologies in strengthening crisis response systems in Bangladesh.',
                'type'  => 'Roundtable',
                'date'  => 'Jan 27',
                'time'  => '02:00 PM',
                'lead'  => 'Chowdhury Isfatul Karim, Rafid Khan',
                'org'   => 'Jogajog and Friends'
            ],
            [
                'title' => 'Beyond Disinformation: Industrial-Scale Information Warfare in Bangladesh Before and After the Election',
                'desc'  => 'Investigating large-scale information warfare operations shaping public discourse in Bangladesh before and after the election.',
                'type'  => 'Roundtable',
                'date'  => 'Jan 27',
                'time'  => '02:00 PM',
                'lead'  => 'Fact Checkers, Media',
                'org'   => 'The Dissent, Dismislab, Fact Watch, Rumor Scanner, AFP Fact Check, Shottify '
            ],
            [
                'title' => 'July Human Rights Documentation: What Worked, What Didn\'t',
                'desc'  => 'A critical retrospective on the documentation efforts during the July movement.',
                'type'  => 'Roundtable',
                'date'  => 'Jan 27',
                'time'  => '04:00 PM',
                'lead'  => 'JRA, July Stories, July Record, Private University Students Networks',
                'org'   => 'JRA, July Stories, July Record, Private University Students Networks'
            ],
            [
                'title' => 'Announcing Archive & Resist Fund',
                'desc'  => 'Introducing the Archive & Resist Fund to support documentation, resistance, and long-term civic memory initiatives.',
                'type'  => 'Invitation Only',
                'date'  => 'Jan 27',
                'time'  => '04:00 PM',
                'lead'  => 'Fact Checkers',
                'org'   => 'Fact Checkers Alliance'
            ],
            [
                'title' => 'Closing Ceremony: The Way Forward',
                'desc'  => 'Reflecting on the two days of work and setting the agenda for the coming year.',
                'type'  => 'Plenary',
                'date'  => 'Jan 27',
                'time'  => '06:30 PM',
                'lead'  => 'Organizing Committee',
                'org'   => 'Organizing Committee'
            ],
        ];

        // --- 4. BOTH DAYS (BOTTOM) ---
        $both_days_bottom = [
            [
                'title' => 'Posters of Resistance: Visual Solidarity',
                'desc'  => 'Interactive journey through the visual language of the movement. Engaging with archive posters.',
                'type'  => 'Parallel',
                'date'  => 'Jan 26-27',
                'time'  => 'Ongoing',
                'lead'  => 'Artivism Studio',
                'org'   => 'Artivism Studio'
            ]
        ];
        ?>

        <?php if (!empty($both_days_top)): ?>
           <div class="reveal-on-scroll" style="margin-bottom: 40px;" id="schedule-grid">
    
    <div class="day-header both-days-header">
        <h2>ONGOING</h2>
        <span class="date-sub">Both Days</span>
        <p class="day-desc">
            An immersive exhibition running parallel to the main sessions. <br>
            Open for all attendees throughout the conclave.
        </p>
    </div>

    <?php foreach($both_days_top as $session): ?>
    <div class="session-card full-width-card" style="margin-bottom: 30px;">
        <div class="card-header">
            <div>
                <h3 class="card-title"><?php echo $session['title']; ?></h3>
                <p class="session-org"><?php echo $session['org']; ?></p>
            </div>
            <span class="card-badge badge-parallel"><?php echo $session['type']; ?></span>
        </div>
        <div class="card-details">
            <div class="detail-row"><span>⏰</span> <?php echo $session['time']; ?></div>
            <div class="detail-row"><span>👤</span> <?php echo $session['lead']; ?></div>
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
                    <?php foreach ($day1 as $session):
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
                    <?php foreach ($day2 as $session):
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
                <?php foreach ($both_days_bottom as $session): $badgeClass = 'badge-parallel'; ?>
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

        <section class="partners-section reveal-on-scroll">
            <h2 class="partners-title">Organizers & Partners</h2>

            <div class="partner-row">
                <div class="partner-label">Conveyed by</div>

                <div class="partner-logos-wrapper is-stacked">
                    <div class="logo-line">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/partner/activate.svg"
                            alt="Activate Rights"
                            class="partner-logo"
                            style="height: 45px;">

                        <img src="<?php echo get_template_directory_uri(); ?>/images/partner/bpa logo.svg"
                            alt="Bangladesh Protest Archive"
                            class="partner-logo"
                            style="height: 45px;">
                    </div>

                    <div class="logo-line">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/partner/witness logo new.png"
                            alt="WITNESS"
                            class="partner-logo"
                            style="height: 45px;">
                    </div>
                </div>
            </div>

            <div class="partner-row">
                <div class="partner-label">Collaboration with</div>

                <div class="partner-logos-wrapper is-stacked">
                    <div class="logo-line">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/partner/BJIM Logo.svg"
                            alt="BJIM"
                            class="partner-logo"
                            style="height: 48px;">

                        <img src="<?php echo get_template_directory_uri(); ?>/images/partner/HURIDOCS.png"
                            alt="HURIDOCS"
                            class="partner-logo"
                            style="height: 42px;">
                    </div>

                    <div class="logo-line">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/partner/Surge.webp"
                            alt="Surge Bangladesh"
                            class="partner-logo"
                            style="height: 50px;">
                    </div>
                </div>
            </div>

            <div class="partner-row">
                <div class="partner-label">In Partnership with</div>
                <div class="partner-logos-wrapper">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/partner/brac logo.svg"
                        alt="BRAC University"
                        class="partner-logo"
                        style="height: 90px;">
                </div>
            </div>

            <div class="partner-row no-border">
                <div class="partner-label">With Support from</div>
                <div class="partner-logos-wrapper">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/partner/undp logo.svg"
                        alt="UNDP"
                        class="partner-logo"
                        style="height: 120px;">

                    <img src="<?php echo get_template_directory_uri(); ?>/images/partner/netra logos.svg"
                        alt="Netra News"
                        class="partner-logo"
                        style="height: 40px;">

                    <img src="<?php echo get_template_directory_uri(); ?>/images/partner/archive-resist-fund-logo.png"
                        alt="Archive & Resist Fund"
                        class="partner-logo"
                        style="height: 80px;">
                </div>
            </div>
        </section>
    </div>

    <section class="cta-banner reveal-on-scroll">
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
            }, {
                threshold: 0.1,
                rootMargin: "0px 0px -50px 0px"
            });

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
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>

</html>