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
            padding-bottom: 20px;
            /* More space for the text */
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
            background: #0f79eb;
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
            max-width: 600px;
            /* Prevents it from getting too wide */
            margin: 15px auto 0;
            /* Centers the block horizontally */
        }

        /* Card Content */
        .card-description-area {
            border-top: 1px solid #eee;
            padding-top: 15px;
            margin-top: 15px;
            position: relative;
        }

        /* The Text Container */
        .desc-content {
            transition: max-height 0.4s ease-out;
            /* Smooth animation */
            overflow: hidden;
        }

        /* State A: Collapsed (Show only ~3 lines) */
        .desc-content.collapsed {
            max-height: 4.5em;
            /* Adjust this number to show more/less lines */
            mask-image: linear-gradient(to bottom, black 60%, transparent 100%);
            -webkit-mask-image: linear-gradient(to bottom, black 60%, transparent 100%);
            /* Fades out the bottom text */
        }

        /* State B: Expanded (Show everything) */
        .desc-content.expanded {
            max-height: 1000px;
            /* Arbitrary large height to allow animation */
            mask-image: none;
            -webkit-mask-image: none;
        }

        /* The Button */
        .desc-toggle-btn {
            background: none;
            border: none;
            padding: 0;
            margin-top: 8px;
            font-family: var(--font-body);
            font-size: 0.8rem;
            font-weight: 700;
            color: var(--c-resist);
            /* Uses your Red color */
            cursor: pointer;
            text-transform: uppercase;
            display: block;
        }

        .desc-toggle-btn:hover {
            text-decoration: underline;
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
            /* 1. Layout for multi-line text */
            white-space: normal !important;
            /* Allows text to wrap */
            max-width: 120px;
            /* Forces wrapping if text is wider than this */
            text-align: center;
            /* Centers the stacked text */
            line-height: 1.1;
            /* Tighter spacing between lines */
            display: inline-flex;
            /* Keeps content centered vertically/horizontally */
            align-items: center;
            justify-content: center;
            min-height: 25px;
            /* Ensures consistent height for short badges */

            /* 2. Your existing visual styles */
            padding: 6px 8px;
            font-size: 0.7rem;
            font-weight: 700;
            text-transform: uppercase;
            flex-shrink: 0;
            /* Prevents the badge from getting squashed */
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
            margin-top: 15px;
            position: relative;
        }

        .card-description {
            font-family: var(--font-body);
            font-size: 0.95rem;
            color: #555;
            line-height: 1.5;
            margin: 0;
        }

        /* --- FIX FOR PARALLEL / ONGOING CARD --- */
        .session-card.full-width-card {
            display: flex;
            flex-direction: column;
            /* Stack items vertically instead of side-by-side */
            gap: 20px;
            padding: 35px;
            /* More breathing room */
            border: 3px solid #000;
            background: #fff;
            position: relative;

        }

        /* 1. Header: Title on Left, Badge on Right */
        .full-width-card .card-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            border-bottom: 2px solid #f0f0f0;
            /* Light separator line */
            padding-bottom: 20px;
            margin-bottom: 0;
        }

        /* Make the title big and clean */
        .full-width-card .card-title {
            font-size: 2.5rem;
            /* Larger than normal cards */
            margin-bottom: 5px;
            width: 100%;
        }

        .full-width-card .session-org {
            font-size: 1.1rem;
            color: var(--c-resist);
            /* Red color for organizer */
            font-weight: 700;
            margin: 0;
        }

        /* 2. Middle Row: Time & Lead Icons */
        .full-width-card .card-details {
            display: flex;
            flex-wrap: wrap;
            /* Allows wrapping on small screens */
            gap: 30px;
            font-family: var(--font-body);
            font-weight: 600;
            color: #444;
            background: #fafafa;
            /* Light grey background for data */
            padding: 15px;
            border-radius: 5px;
        }

        .full-width-card .detail-row {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        /* 3. Bottom: Description text has full width now */
        .full-width-card .card-description-area {
            margin-top: 5px;
        }

        .full-width-card .card-description {
            font-size: 1.15rem;
            line-height: 1.6;
            color: #222;
            max-width: 100%;
            /* Lets text fill the space */
        }

        /* Mobile Adjustment */
        @media screen and (max-width: 768px) {
            .full-width-card .card-header {
                flex-direction: column;
                gap: 10px;
            }

            .full-width-card .card-details {
                flex-direction: column;
                gap: 10px;
            }
        }

        .countdown-section {
            background-color: var(--c-resist, #f62e2e);
            /* Red background like volunteer section */
            padding: 20px 0;
            text-align: center;
            color: #ffffff;
            position: relative;
            overflow: hidden;
            margin-top: 30px;
        }

        .countdown-section .countdown-title {
            font-family: 'Barlow Semi Condensed', sans-serif;
            font-size: 3rem;
            font-weight: 900;
            text-transform: uppercase;
            margin: 0 0 50px 0;
            line-height: 1;
            color: #ffffff;
            letter-spacing: 2px;
        }

        /* Countdown Timer Wrapper */
        .countdown-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 40px;
            margin: 0 auto 40px auto;
            flex-wrap: wrap;
        }

        /* Individual Countdown Block */
        .countdown-block {
            display: flex;
            flex-direction: column;
            align-items: center;
            min-width: 120px;
        }

        .countdown-number {
            font-family: 'Barlow Semi Condensed', sans-serif;
            font-size: 5rem;
            font-weight: 900;
            color: #ffffff;
            line-height: 1;
            text-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }

        .countdown-label {
            font-family: 'Inter', sans-serif;
            font-size: 1.1rem;
            font-weight: 600;
            text-transform: uppercase;
            color: #ffffff;
            margin-top: 10px;
            letter-spacing: 1px;
            opacity: 0.95;
        }

        /* Description Text */
        .countdown-section .countdown-text {
            font-family: 'Inter', sans-serif;
            font-size: 1.15rem;
            font-weight: 500;
            line-height: 1.6;
            max-width: 700px;
            margin: 0 auto 40px auto;
            color: #ffffff;
            opacity: 0.95;
        }

        /* Button Style (Matches volunteer section) */
        .btn-countdown {
            display: inline-block;
            background-color: #f6f4ee;
            /* Beige/White */
            color: var(--c-resist, #f62e2e);
            /* Red Text */
            font-family: 'Barlow Semi Condensed', sans-serif;
            font-weight: 800;
            font-size: 1.2rem;
            text-transform: uppercase;
            padding: 18px 45px;
            text-decoration: none;
            border-radius: 2px;
            transition: transform 0.2s ease, opacity 0.2s ease, box-shadow 0.2s ease;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .btn-countdown:hover {
            opacity: 0.9;
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
        }

        /* Mobile Responsiveness */
        @media (max-width: 768px) {
            .countdown-section {
                padding: 60px 0;
            }

            .countdown-section .countdown-title {
                font-size: 2.5rem;
                margin-bottom: 40px;
            }

            .countdown-wrapper {
                gap: 25px;
            }

            .countdown-block {
                min-width: 80px;
            }

            .countdown-number {
                font-size: 3.5rem;
            }

            .countdown-label {
                font-size: 0.9rem;
                margin-top: 8px;
            }

            .countdown-section .countdown-text {
                font-size: 1rem;
                padding: 0 20px;
            }

            .btn-countdown {
                font-size: 1rem;
                padding: 15px 35px;
            }
        }

        @media (max-width: 480px) {
            .countdown-wrapper {
                gap: 15px;
            }

            .countdown-block {
                min-width: 70px;
            }

            .countdown-number {
                font-size: 2.5rem;
            }

            .countdown-label {
                font-size: 0.75rem;
            }
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
                'desc'  => 'Across both days of the Conclave, Resistance Cinema Fest will screen a curated selection of investigative documentaries and resistance cinema from Bangladesh and beyond. These films document struggles for justice, human rights violations, and movements of resistance, creating space to reflect on the power of visual storytelling as evidence, memory, and a tool for accountability.',
                'type'  => 'Parallel',
                'date'  => 'Jan 26-27',
                'time'  => 'Ongoing',
                'lead'  => 'Bangladesh Protest Archive',
                'org'   => 'Bangladesh Protest Archive'
            ],

        ];

        // --- 2. DAY 1 SESSIONS (Jan 26) ---
        $day1 = [
            // --- DAY 01 (JAN 26) ---
            [
                'title' => 'Collaborative Future for Community-Led Human Rights Documentation & Transitional Justice',
                'desc'  => 'This opening plenary brings together all partner organizations to express collective solidarity and a shared commitment to sustaining the Archive & Resist Conclave beyond this year. The session will reflect on why community-led documentation matters, how archives can support transitional justice, and how we can build long-term collaboration to strengthen this work in Bangladesh and the region. Together, partners will outline a common vision for keeping this platform alive and growing as a space for learning, resistance, and accountability.',
                'type'  => 'Plenary',
                'date'  => 'Jan 26',
                'time'  => '10:00 AM',
                'lead'  => 'All Partners',
                'org'   => 'All Partners'
            ],
            [
                'title' => 'Level Up Your Archiving, Starting from the Basics',
                'desc'  => 'Archiving exists on a spectrum—from simple, baseline practices to more robust systems—depending on available resources, capacities, and the nature of the materials. This hands-on workshop offers a practical introduction to the core components of archiving, including selection, collection, organization, packaging, storage, cataloging, and access. Starting from the basics, participants will explore how to build safer, more resilient archiving practices over time. The workshop is designed for those who are new to archiving, as well as practitioners who want to strengthen and “level up” their existing approaches.',
                'type'  => 'Interactive Workshop',
                'date'  => 'Jan 26',
                'time'  => '11:30 AM',
                'lead'  => 'Yvonne Ng',
                'org'   => 'WITNESS'
            ],
            [
                'title' => 'Countering Organized Hate through Research & Documentation',
                'desc'  => 'This session introduces the work of the Center for the Study of Organized Hate (CSOH) and explores how research-driven hate tracking can strengthen human rights documentation, advocacy, and policy engagement in South Asia. Through discussion and peer exchange, participants will reflect on shared challenges and how to build regional collaboration to counter organized hate and protect democratic space.',
                'type'  => 'Dialogue',
                'date'  => 'Jan 26',
                'time'  => '01:00 PM',
                'lead'  => 'Ammaarah Nilafdeen, Raqib Hameed Naik',
                'org'   => 'Center for the Study of Organized Hate'
            ],
            [
                'title' => 'Capture, Protect, Preserve: Resilient Evidence Documentation for Elections, Crackdowns & Internet Shutdowns',
                'desc'  => 'This hands-on workshop offers practical, field-tested steps to help activists, documenters, and journalists securely capture, organize, and preserve documentation so it remains safe, findable, and usable for future accountability and justice processes. Participants will practice a simple Capture–Protect–Preserve workflow designed for high-risk situations such as elections, raids, violent crackdowns, and internet shutdowns. The session focuses on realistic, low-barrier methods that can be applied even under pressure and limited resources. Participants will leave with a clear, adaptable approach they can immediately use with their teams and communities.',
                'type'  => 'Interactive Workshop',
                'date'  => 'Jan 26',
                'time'  => '02:00 PM',
                'lead'  => 'Arul Prakkash Sinappan',
                'org'   => 'Activate Rights'
            ],
            [
                'title' => 'July Persist: How to build Community-Led Archiving and OSINT Investigation in Bangladesh',
                'desc'  => 'This session explores how community-led archiving and open-source investigations are emerging in Bangladesh after July, focusing on the work of Netra News and the Bangladesh Protest Archive (BPA). It examines how journalists, researchers, and activists are building a community-driven ecosystem for human rights documentation and grassroots investigations. Speakers will share how these initiatives collect, verify, and preserve open-source information to document violations, counter disinformation, and support accountability, while reflecting on the challenges of trust, safety, and sustaining community participation.',
                'type'  => 'Ideation',
                'date'  => 'Jan 26',
                'time'  => '03:00 PM',
                'lead'  => ' Shoeb Abdullah, Subinoy Mustofi Eron, Aaqib Shatil, Iffat Joye',
                'org'   => 'Netra News, Bangladesh Protest Archive'
            ],
            [
                'title' => 'Preserving the History: Coverage, Safety, and Documentation of Bangladesh General Election-2026',
                'desc'  => 'This session brings together journalists, researchers, and civil society to discuss ethical election coverage, journalist safety, and effective documentation practices. It will explore challenges like misinformation and digital threats, while highlighting ways to protect democratic processes and preserve a credible public record of the 2026 election.',
                'type'  => 'Dialogue',
                'date'  => 'Jan 26',
                'time'  => '04:00 PM',
                'lead'  => 'Mohammad Ali Mazed, Sam Jahan',
                'org'   => 'Bangladeshi Journalists in International Media'
            ],
            [
                'title' => 'Building human rights database systems as a tool for sustained resistance',
                'desc'  => 'This practical session explores how fragmented documentation and scattered datasets can be transformed into structured, resilient human rights database systems. Participants will learn why databases matter for long-term documentation, investigations, and accountability work. The discussion will cover key principles of organizing, standardizing, and maintaining human rights data in challenging environments. The session will also reflect on ethical, security, and sustainability considerations. Participants will leave with a clearer understanding of how database systems can support sustained resistance and long-term justice efforts.',
                'type'  => 'Roundtable',
                'date'  => 'Jan 26',
                'time'  => '05:00 PM',
                'lead'  => 'Pruhbu Dolma, Hyebin Bina Jeon',
                'org'   => 'HURIDOCS'
            ],
            [
                'title' => 'Tools and skills to build visual investigations using OSINT',
                'desc'  => 'This practical session explores video-based approaches to building visual investigations using open-source information. Participants will be introduced to key OSINT tools and workflows for collecting, verifying, analyzing, and presenting visual evidence from videos, images, and social media content. The session will also introduce different open-source tools for visualizing investigations, helping participants understand how to structure findings and communicate evidence clearly. It highlights how visual investigations can support human rights documentation, journalism, and accountability efforts.
',
                'type'  => 'Interactive Workshop',
                'date'  => 'Jan 26',
                'time'  => '06:30 PM',
                'lead'  => 'Georgia Edwards',
                'org'   => 'Witness'
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
                'desc'  => 'Technology-Facilitated Gender-Based Violence (TFGBV) is widespread, fast-moving, and often poorly documented—making accountability harder and harm deeper. This session offers a practical, survivor-centered introduction to documenting TFGBV safely, ethically, and effectively, with a focus on supporting platform accountability. Through real-world examples and hands-on guidance, participants will learn core principles for capturing, preserving, and organizing digital evidence; minimizing risks to survivors and documenters; and using documentation to support advocacy, platform accountability, and legal or policy action. This session is designed for activists, journalists, researchers, and community responders working at the frontlines of online harm.',
                'type'  => 'Interactive Workshop',
                'date'  => 'Jan 27',
                'time'  => '11:30 AM',
                'lead'  => 'Minhaj Aman, Israr Hassan',
                'org'   => 'Activate Rights, BRAC James P Grant School of Public Health'
            ],
            [
                'title' => 'Internet Shutdown Drill: Circumventing and Documenting Human Rights Violations During Internet Shutdowns',
                'desc'  => 'Investigating large-scale information warfare operations shaping public discourse in Bangladesh before and after the election.',
                'type'  => 'Roundtable',
                'date'  => 'Jan 27',
                'time'  => '02:00 PM',
                'lead'  => 'Arul Prakkash Sinappan, Shoeb Abdullah',
                'org'   => 'Activate Rights'
            ],
            //                         [
            //                             'title' => 'Let Knowledge Be Free: How Open-Source Principles Can Support Journalistic Practice and a Collaborative Future',
            //                             'desc'  => 'How open-source principles can support modern journalistic practice and collaborative information sharing.',
            //                             'type'  => 'Workshop',
            //                             'date'  => 'Jan 27',
            //                             'time'  => '11:30 AM',
            //                             'lead'  => 'M. Rafiul Bahar Rafi',
            //                             'org'   => 'Korikath Knowledge'
            //                         ],

            [
                'title' => 'Deadly in Disguise: The Hidden Lethality of Pellet Guns/Chhorra Guli',
                'desc'  => 'This session examines the often-overlooked lethality of pellet guns (chhorra guli) when used in crowd-control contexts and the severe human suffering they cause. Drawing on investigative research and documentation, the session will explore how these weapons inflict life-altering injuries, permanent disability, and, in some cases, death.Through case studies and evidence-based analysis, participants will learn how lethality is investigated, documented, and communicated, and why exposing the real impacts of so-called “less-lethal” weapons is essential for accountability, advocacy, and the protection of human rights.',
                'type'  => 'Dialogue',
                'date'  => 'Jan 27',
                'time'  => '01:00 PM',
                'lead'  => 'Zarif Rahman, Opsora Islam',
                'org'   => 'Sapran'
            ],
            [
                'title' => 'Crisis Response Tech: Exploring Challenges and Opportunities for Emerging Civic Technologies in Bangladesh',
                'desc'  => 'This session explores how emerging civic technologies can support crisis response, documentation, and accountability in Bangladesh. Participants will discuss real-world challenges, local needs, and opportunities for building tools that strengthen community resilience and human rights work.',
                'type'  => 'Roundtable',
                'date'  => 'Jan 27',
                'time'  => '02:00 PM',
                'lead'  => 'Chowdhury Isfatul Karim, Rafid Khan',
                'org'   => 'Jogajog and Friends'
            ],
            [
                'title' => 'Beyond Disinformation: Industrial-Scale Information Warfare in Bangladesh Before and After the Election',
                'desc'  => 'This session examines how coordinated, industrial-scale information disorder—including FIMI, disinformation, and influence operations—is shaping Bangladesh’s information environment before and after the election. It will explore key tactics, actors, and real-world impacts, and discuss how research, documentation, and cross-sector collaboration can help expose and counter large-scale information warfare.',
                'type'  => 'Roundtable',
                'date'  => 'Jan 27',
                'time'  => '02:00 PM',
                'lead'  => 'Fact Checkers Community ',
                'org'   => 'The Dissent, Dismislab, Fact Watch, Rumor Scanner, AFP Fact Check, Shottify '
            ],
            [
                'title' => 'A Fight to Remember: July Human Rights Documentation: What Worked, What Didn\'t',
                'desc'  => 'This session reflects on the community-led, self-organized human rights documentation efforts that emerged during and after July, examining what worked, what failed, and what must be reimagined. Drawing on the experiences of JRA, July Record, and university networks, the discussion explores how students, volunteers, and civil society mobilized to collect evidence, preserve memory, and respond to unfolding violations. Speakers will share field-level lessons, including verification challenges, safety risks, coordination gaps, ethical dilemmas, and emotional labor. The session invites participants into a collective reflection on how July’s documentation efforts can inform stronger, safer, and more sustainable community-led documentation models for the future.',
                'type'  => 'Roundtable',
                'date'  => 'Jan 27',
                'time'  => '04:00 PM',
                'lead'  => 'JRA, July Record',
                'org'   => 'JRA, July Record'
            ],
            [
                'title' => 'Announcing Archive & Resist Fund',
                'desc'  => 'This invitation-only, closed-door session marks the official announcement of the Archive & Resist Fund—an independent fundraising initiative to support community-led human rights documentation, archiving, and accountability work. The session will bring together philanthropists, activists, and community leaders to share solidarity and explore ways to build sustainable, long-term support for grassroots documentation efforts. While the fund is being initiated by Activate Rights and the Bangladesh Protest Archive (BPA), it will be independently governed and led by an independent advisory board to ensure transparency, accountability, and community trust.',
                'type'  => 'Invitation Only',
                'date'  => 'Jan 27',
                'time'  => '04:00 PM',
                'lead'  => 'Bangladesh Protest Archive',
                'org'   => 'Bangladesh Protest Archive'
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
                'desc'  => 'Running alongside Archive & Resist Conclave 2026, this interactive exhibition showcases posters and artworks from protests and human rights movements, inspired by the July Uprising in Bangladesh and global youth-led struggles. Selected works will be displayed at BRAC University, with contributors invited to join participatory art sessions and potentially be featured in an online resistance gallery.',
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

                <?php foreach ($both_days_top as $session):
                    // LOGIC: Change text if it is a workshop
                    $displayType = $session['type'];
                    if (trim(strtolower($session['type'])) == 'workshop') {
                        $displayType = 'Interactive Workshop';
                    }
                ?>
                    <div class="session-card full-width-card" style="margin-bottom: 30px;">
                        <div class="card-header">
                            <div>
                                <h3 class="card-title"><?php echo $session['title']; ?></h3>
                                <p class="session-org"><?php echo $session['org']; ?></p>
                            </div>
                            <span class="card-badge badge-parallel"><?php echo $displayType; ?></span>
                        </div>
                        <div class="card-details">
                            <div class="detail-row"><span>⏰</span> <?php echo $session['time']; ?></div>
                            <div class="detail-row"><span>👤</span> <?php echo $session['lead']; ?></div>
                        </div>
                        <div class="card-description-area">
                            <div class="desc-content collapsed">
                                <p class="card-description"><?php echo $session['desc']; ?></p>
                            </div>
                            <button class="desc-toggle-btn" onclick="toggleDescription(this)">Read More ▼</button>
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

                        // CLASS LOGIC
                        if (strpos($type, 'plenary') !== false) $badgeClass = 'badge-plenary';
                        elseif (strpos($type, 'workshop') !== false) $badgeClass = 'badge-workshop';
                        elseif (strpos($type, 'ideation') !== false) $badgeClass = 'badge-ideation';
                        else $badgeClass = 'badge-workshop';

                        // DISPLAY TEXT LOGIC
                        $displayType = $session['type'];
                        if (trim($type) == 'workshop') {
                            $displayType = 'Interactive Workshop';
                        }
                    ?>
                        <div class="session-card static-card reveal-on-scroll">
                            <div class="card-header">
                                <div class="header-content">
                                    <h3 class="card-title"><?php echo $session['title']; ?></h3>
                                    <p class="session-org" style="color:#ff4d4d; font-weight:700; font-size:0.9rem; margin-bottom:5px; text-transform:uppercase;"><?php echo $session['org']; ?></p>
                                </div>
                                <div class="header-meta"><span class="card-badge <?php echo $badgeClass; ?>"><?php echo $displayType; ?></span></div>
                            </div>
                            <div class="card-details">
                                <div class="detail-row"><span class="detail-icon icon-time">⏰</span> <?php echo $session['time']; ?></div>
                                <div class="detail-row"><span class="detail-icon icon-room">📍</span> <span style="font-style: italic; opacity: 0.8;">Room: TBA</span></div>
                                <div class="detail-row"><span class="detail-icon icon-user">👤</span> <?php echo $session['lead']; ?></div>
                            </div>
                            <div class="card-description-area">
                                <div class="desc-content collapsed">
                                    <p class="card-description"><?php echo $session['desc']; ?></p>
                                </div>
                                <button class="desc-toggle-btn" onclick="toggleDescription(this)">Read More ▼</button>
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

                        // CLASS LOGIC
                        if (strpos($type, 'plenary') !== false) $badgeClass = 'badge-plenary';
                        elseif (strpos($type, 'workshop') !== false) $badgeClass = 'badge-workshop';
                        elseif (strpos($type, 'ideation') !== false) $badgeClass = 'badge-ideation';
                        elseif (strpos($type, 'dialogue') !== false) $badgeClass = 'badge-dialogue';
                        elseif (strpos($type, 'roundtable') !== false) $badgeClass = 'badge-roundtable';
                        else $badgeClass = 'badge-workshop';

                        // DISPLAY TEXT LOGIC
                        $displayType = $session['type'];
                        if (trim($type) == 'workshop') {
                            $displayType = 'Interactive Workshop';
                        }
                    ?>
                        <div class="session-card static-card reveal-on-scroll">
                            <div class="card-header">
                                <div class="header-content">
                                    <h3 class="card-title"><?php echo $session['title']; ?></h3>
                                    <p class="session-org" style="color:#ff4d4d; font-weight:700; font-size:0.9rem; margin-bottom:5px; text-transform:uppercase;"><?php echo $session['org']; ?></p>
                                </div>
                                <div class="header-meta"><span class="card-badge <?php echo $badgeClass; ?>"><?php echo $displayType; ?></span></div>
                            </div>
                            <div class="card-details">
                                <div class="detail-row"><span class="detail-icon icon-time">⏰</span> <?php echo $session['time']; ?></div>
                                <div class="detail-row"><span class="detail-icon icon-room">📍</span> <span style="font-style: italic; opacity: 0.8;">Room: TBA</span></div>
                                <div class="detail-row"><span class="detail-icon icon-user">👤</span> <?php echo $session['lead']; ?></div>
                            </div>
                            <div class="card-description-area">
                                <div class="desc-content collapsed">
                                    <p class="card-description"><?php echo $session['desc']; ?></p>
                                </div>
                                <button class="desc-toggle-btn" onclick="toggleDescription(this)">Read More ▼</button>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <?php if (!empty($both_days_bottom)): ?>
            <div class="both-days-container reveal-on-scroll">
                <?php foreach ($both_days_bottom as $session):
                    $badgeClass = 'badge-parallel';

                    // DISPLAY TEXT LOGIC
                    $displayType = $session['type'];
                    if (trim(strtolower($session['type'])) == 'workshop') {
                        $displayType = 'Interactive Workshop';
                    }
                ?>
                    <div class="session-card static-card full-width-card">
                        <div class="card-header">
                            <div class="header-content">
                                <h3 class="card-title"><?php echo $session['title']; ?></h3>
                                <p class="session-org" style="color:#ff4d4d; font-weight:700; font-size:0.95rem; margin-bottom:5px; text-transform:uppercase;"><?php echo $session['org']; ?></p>
                            </div>
                            <div class="header-meta"><span class="card-badge <?php echo $badgeClass; ?>"><?php echo $displayType; ?></span></div>
                        </div>
                        <div class="card-details">
                            <div class="detail-row"><span class="detail-icon icon-time">⏰</span> <?php echo $session['time']; ?></div>
                            <div class="detail-row"><span class="detail-icon icon-room">📍</span> <span style="font-style: italic; opacity: 0.8;">Gallery / Hall</span></div>
                            <div class="detail-row"><span class="detail-icon icon-user">👤</span> <?php echo $session['lead']; ?></div>
                        </div>
                        <div class="card-description-area">
                            <div class="desc-content collapsed">
                                <p class="card-description"><?php echo $session['desc']; ?></p>
                            </div>

                            <button class="desc-toggle-btn" onclick="toggleDescription(this)">Read More ▼</button>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <section class="countdown-section">
            <div class="container">
                <h2 class="countdown-title">cONCLAVE STARTS IN</h2>

                <div class="countdown-wrapper" id="countdownTimer">
                    <div class="countdown-block">
                        <span class="countdown-number" id="days">00</span>
                        <span class="countdown-label">Days</span>
                    </div>

                    <div class="countdown-block">
                        <span class="countdown-number" id="hours">00</span>
                        <span class="countdown-label">Hours</span>
                    </div>

                    <div class="countdown-block">
                        <span class="countdown-number" id="minutes">00</span>
                        <span class="countdown-label">Minutes</span>
                    </div>

                    <div class="countdown-block">
                        <span class="countdown-number" id="seconds">00</span>
                        <span class="countdown-label">Seconds</span>
                    </div>
                </div>

                <p class="countdown-text">
                    Join us for a transformative two-day conclave on human rights documentation,
                    archiving, and transitional justice.
                </p>

                <a href="https://forms.gle/5znCihw4n17QiQnN8" target="_blank" class="btn-countdown">
                    REGISTER NOW
                </a>
            </div>
        </section>

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

    <!--     <section class="cta-banner reveal-on-scroll">
        <h2 class="cta-title">SUBMIT YOUR SESSION</h2>
        <p class="cta-text">
            Session submissions are open to individuals and organizations working on human rights, digital rights, social justice, documentation, and archiving, including practitioners, researchers, journalists, technologists, activists, and community organizers, with the submission deadline set for 6 January 2026.
        </p>
        <a href="https://forms.gle/5znCihw4n17QiQnN8" target="_blank" rel="noopener noreferrer" class="btn-apply">APPLY</a>
    </section> -->

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
        // ==========================================
        //  1. GLOBAL FUNCTIONS (Must be outside DOMContentLoaded)
        // ==========================================

        // Function to expand/collapse descriptions
        function toggleDescription(btn) {
            // Find the text container immediately before this button
            var content = btn.previousElementSibling;

            // Toggle the 'collapsed' and 'expanded' classes
            if (content.classList.contains('collapsed')) {
                content.classList.remove('collapsed');
                content.classList.add('expanded');
                btn.innerHTML = "Show Less ▲";
            } else {
                content.classList.remove('expanded');
                content.classList.add('collapsed');
                btn.innerHTML = "Read More ▼";
            }
        }

        // ==========================================
        //  2. ON PAGE LOAD
        // ==========================================
        document.addEventListener("DOMContentLoaded", function() {

            // --- A. COUNTDOWN TIMER ---
            const countdownTimer = document.getElementById('countdownTimer');
            if (countdownTimer) {
                // Set the event date: January 26, 2026, 09:00 AM (Bangladesh Time)
                const eventDate = new Date('2026-01-26T09:00:00+06:00').getTime();

                function updateCountdown() {
                    const now = new Date().getTime();
                    const distance = eventDate - now;

                    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                    const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    const seconds = Math.floor((distance % (1000 * 60)) / 1000);

                    const daysEl = document.getElementById('days');
                    const hoursEl = document.getElementById('hours');
                    const minutesEl = document.getElementById('minutes');
                    const secondsEl = document.getElementById('seconds');

                    if (daysEl) daysEl.textContent = String(days).padStart(2, '0');
                    if (hoursEl) hoursEl.textContent = String(hours).padStart(2, '0');
                    if (minutesEl) minutesEl.textContent = String(minutes).padStart(2, '0');
                    if (secondsEl) secondsEl.textContent = String(seconds).padStart(2, '0');

                    if (distance < 0) {
                        clearInterval(countdownInterval);
                        countdownTimer.innerHTML = '<h3 style="color: #ffffff; font-family: var(--font-display); font-size: 3rem; font-weight: 900; margin: 0; text-transform: uppercase;">EVENT IS LIVE NOW!</h3>';
                    }
                }

                updateCountdown();
                const countdownInterval = setInterval(updateCountdown, 1000);
            }

            // --- B. DESCRIPTION BUTTON CHECKER ---
            // Automatically hide "Read More" button if text is short
            var descriptions = document.querySelectorAll('.desc-content');
            descriptions.forEach(function(desc) {
                // If text is shorter than 85px (approx 3 lines), hide the button
                if (desc.scrollHeight < 85) {
                    desc.classList.remove('collapsed'); // Just show it all
                    desc.style.maskImage = 'none'; // Remove fade
                    desc.style.webkitMaskImage = 'none';

                    // Safely hide the button if it exists
                    var btn = desc.nextElementSibling;
                    if (btn && btn.classList.contains('desc-toggle-btn')) {
                        btn.style.display = 'none';
                    }
                }
            });

            // --- C. SCROLL REVEAL ANIMATION ---
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

            // --- D. BACK TO TOP BUTTON ---
            const mybutton = document.getElementById("backToTop");
            if (mybutton) {
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
            }
        });
    </script>
</body>

</html>