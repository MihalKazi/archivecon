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
            --c-resist: #f62e2e;
            --c-conclave: #10935b;
            --c-room4: #FF6B35;
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
            overflow-x: hidden;
            color: #10935b;
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 20px;
            width: 100%;
            box-sizing: border-box;
        }

        /* --- 1. HEADER --- */
        .site-header {
            display: flex;
            align-items: flex-end;
            padding: 40px 0 20px 0;
            width: 100%;
            border-bottom: 3px solid var(--c-archive);
            margin-bottom: 40px;
            background: transparent;
        }

        .main-nav {
            display: flex;
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

        /* --- 2. HERO SECTION --- */
        .hero {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            padding: 40px 0 80px 0;
            overflow: visible;
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
            line-height: 0.75;
            text-transform: uppercase;
            margin: 0;
            letter-spacing: -0.02em;
            width: 100%;
            word-break: normal;
            margin-top: -10px;
        }

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

        /* --- BRANDED SEARCH BAR (FIXED Z-INDEX & ENHANCED LABEL) --- */

        .search-outer-wrapper {
            max-width: 850px;
            margin: 80px auto 40px auto;
            padding: 0 20px;
            /* Ensures no parent container cuts off the dropdown */
            position: relative;
            z-index: 99999 !important;
            overflow: visible !important;
        }

        /* Label Styling - Industrial Tag Look */
        .search-label-container {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: -4px;
            /* Slight overlap for cohesive look */
            position: relative;
            z-index: 100001;
        }

        .search-label-tag {
            font-family: var(--font-display);
            font-weight: 900;
            font-size: 1rem;
            letter-spacing: 0.15em;
            color: white;
            background: var(--black);
            padding: 8px 18px;
            display: inline-block;
            text-transform: uppercase;
            /* Angle effect for a "radical" look */
            clip-path: polygon(0% 0%, 100% 0%, 95% 100%, 0% 100%);
        }

        .search-label-line {
            flex-grow: 1;
            height: 4px;
            background: var(--c-resist);
            /* Bold red accent line */
        }

        .search-container {
            max-width: 100%;
            position: relative;
            /* Highest priority stacking to stay above session-cards */
            z-index: 100000 !important;
        }

        /* The Input Field */
        .search-input {
            width: 100%;
            padding: 22px 25px;
            font-family: var(--font-display);
            font-weight: 700;
            font-size: 1.3rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            border: 4px solid var(--black);
            border-radius: 0px;
            box-sizing: border-box;
            transition: all 0.2s ease;
            background: white !important;
            /* Force solid white */
        }

        /* When clicking into the search */
        .search-input:focus {
            outline: none;
            border-color: var(--c-archive);
            box-shadow: 10px 10px 0px rgba(15, 121, 235, 0.1);
        }

        /* Results Dropdown Box */
        .search-results {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            background: white !important;
            border: 4px solid var(--black);
            border-top: none;
            max-height: 450px;
            overflow-y: auto;
            /* Massive z-index to stay above cards */
            z-index: 100005 !important;
            box-shadow: 15px 15px 0px rgba(0, 0, 0, 0.2);
        }

        .search-results.active {
            display: block !important;
        }

        /* Individual Result Item */
        .search-result-item {
            background: white !important;
            padding: 20px 25px;
            border-bottom: 2px solid #f0f0f0;
            cursor: pointer;
            transition: all 0.2s ease;
            position: relative;
            z-index: 100006 !important;
        }

        .search-result-item:hover {
            background: #f0f7ff !important;
            border-left: 10px solid var(--c-archive);
            padding-left: 15px;
        }

        .search-result-item:last-child {
            border-bottom: none;
        }

        /* Text inside results */
        .result-title {
            font-family: var(--font-display);
            font-weight: 800;
            font-size: 1.2rem;
            color: var(--black);
            margin-bottom: 3px;
            line-height: 1.2;
            text-transform: uppercase;
        }

        .result-meta {
            font-family: var(--font-body);
            font-size: 0.95rem;
            color: var(--c-archive);
            font-weight: 600;
        }

        .no-results {
            padding: 25px;
            text-align: center;
            color: #666;
            font-family: var(--font-body);
            font-style: italic;
            background: white !important;
        }

        /* Ensure the rest of the page doesn't overlap the dropdown */
        #schedule,
        .session-card {
            position: relative;
            z-index: 1;
        }

        /* Clear Button Style */
        .search-clear-btn {
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            font-size: 2rem;
            color: #ccc;
            cursor: pointer;
            z-index: 100002;
            display: none;
        }

        .search-clear-btn:hover {
            color: var(--c-resist);
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
            display: grid;
            grid-template-columns: 120px repeat(4, 1fr);
            gap: 25px;
            margin-bottom: 80px;
        }

        .time-column {
            display: flex;
            flex-direction: column;
            gap: 30px;
            padding-top: 95px;
        }

        .time-slot {
            background: var(--c-archive);
            color: var(--white);
            padding: 15px 10px;
            text-align: center;
            font-family: var(--font-body);
            font-weight: 700;
            font-size: 0.9rem;
            min-height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            line-height: 1.2;
            flex: 1;
        }

        .empty-slot {
            background: transparent !important;
            border: 2px dashed #ddd !important;
            min-height: 100px;
            flex: 1;
        }

        .day-column {
            width: 100%;
            margin-bottom: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            min-width: 0;
            /* ADD THIS */
        }

        .card-stack {
            width: 100%;
            max-width: 100%;
            /* Full width within grid */
            gap: 30px;
            padding: 0 10px;
            min-width: 0;
        }

        .session-card {
            width: 100%;
            max-width: 100%;
            box-sizing: border-box;
            background: #fff;
            border: 2px solid #000;
            padding: 20px;
            /* REDUCED from 25px */
            display: flex;
            flex-direction: column;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            flex: 1;
            min-width: 0;
        }

        /* Card Headers */
        .day-header {
            margin-bottom: 30px;
            padding-bottom: 15px;
            border-bottom: 5px solid #000;
        }

        .day-header h2 {
            font-family: var(--font-display);
            font-size: 2.5rem;
            margin: 0;
            line-height: 1;
            font-weight: 900;
            letter-spacing: -1px;
            text-transform: uppercase;
        }

        .header-room1 h2 {
            color: var(--c-archive);
        }

        .header-room1 {
            border-bottom-color: var(--c-archive);
        }

        .header-room2 h2 {
            color: var(--c-conclave);
        }

        .header-room2 {
            border-bottom-color: var(--c-conclave);
        }

        .header-room3 h2 {
            color: var(--c-resist);
        }

        .header-room3 {
            border-bottom-color: var(--c-resist);
        }

        .header-room4 h2 {
            color: var(--c-room4);
        }

        .header-room4 {
            border-bottom-color: var(--c-room4);
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

        /* --- BOTH DAYS HEADER --- */
        .both-days-header {
            text-align: center;
            padding-bottom: 20px;
            margin-bottom: 40px;
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

        .both-days-header .day-desc {
            font-family: var(--font-body);
            font-size: 1.1rem;
            color: #555;
            line-height: 1.5;
            max-width: 600px;
            margin: 15px auto 0;
        }

        /* Card Content */
        .card-description-area {
            border-top: 1px solid #eee;
            padding-top: 10px;
            /* REDUCED from 15px */
            margin-top: 10px;
            /* REDUCED from 15px */
            position: relative;
        }

        .desc-content {
            transition: max-height 0.4s ease-out;
            overflow: hidden;
        }

        .desc-content.collapsed {
            max-height: 3.5em;
            /* REDUCED from 4.5em */
            mask-image: linear-gradient(to bottom, black 60%, transparent 100%);
            -webkit-mask-image: linear-gradient(to bottom, black 60%, transparent 100%);
        }

        .desc-content.expanded {
            max-height: 1000px;
            mask-image: none;
            -webkit-mask-image: none;
        }

        .desc-toggle-btn {
            background: none;
            border: none;
            padding: 0;
            margin-top: 6px;
            /* REDUCED from 8px */
            font-family: var(--font-body);
            font-size: 0.75rem;
            /* REDUCED from 0.8rem */
            font-weight: 700;
            color: var(--c-resist);
            cursor: pointer;
            text-transform: uppercase;
            display: block;
        }

        .desc-toggle-btn:hover {
            text-decoration: underline;
        }

        .card-title {
            font-family: var(--font-display);
            font-size: 1.5rem;
            line-height: 1.05;
            margin: 0 0 8px 0;
            /* REDUCED from 12px */
            text-transform: uppercase;
            font-weight: 800;
            color: #000;
            word-wrap: break-word;
            overflow-wrap: break-word;
            max-width: 100%;
            letter-spacing: -0.02em;
        }


        .session-org {
            font-family: var(--font-body);
            color: var(--c-resist);
            font-weight: 700;
            font-size: 0.9rem;
            margin: 0;
            text-transform: uppercase;
            letter-spacing: 0.02em;
            line-height: 1.3;
        }

        .card-header {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            margin-bottom: 12px;
            /* REDUCED from 20px */
            gap: 8px;
            /* REDUCED from 12px */
        }

        .header-content {
            flex: 1;
            min-width: 0;
            width: 100%;
            /* Full width for better wrapping */
            order: 2;
            /* Title comes second */
        }

        .header-meta {
            flex-shrink: 0;
            align-self: flex-start;
            order: 1;
            /* Badge comes first */
        }

        .card-badge {
            white-space: nowrap;
            text-align: center;
            line-height: 1.1;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 22px;
            /* REDUCED from 25px */
            padding: 6px 12px;
            /* REDUCED from 8px 14px */
            font-size: 0.7rem;
            /* REDUCED from 0.75rem */
            font-weight: 700;
            text-transform: uppercase;
            font-family: var(--font-body);
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
            margin-bottom: 10px;
        }

        .detail-row {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 4px;
            /* REDUCED from 6px */
            font-size: 0.85rem;
            color: var(--c-archive);
            font-family: var(--font-body);
            font-weight: 600;
        }

        .card-description {
            font-family: var(--font-body);
            font-size: 0.88rem;
            /* REDUCED from 0.95rem */
            color: #555;
            line-height: 1.4;
            /* REDUCED from 1.5 */
            margin: 0;
            word-wrap: break-word;
            overflow-wrap: break-word;
        }

        /* Day Badge */
        .day-badge {
            display: inline-block;
            padding: 4px 10px;
            font-size: 0.75rem;
            font-weight: 700;
            text-transform: uppercase;
            margin-bottom: 10px;
            color: white;
        }

        .day-badge.day1 {
            background: var(--c-conclave);
        }

        .day-badge.day2 {
            background: var(--c-resist);
        }

        .time-badge {
            display: inline-block;
            padding: 4px 10px;
            font-size: 0.75rem;
            font-weight: 700;
            text-transform: uppercase;
            margin-bottom: 10px;
            margin-left: 5px;
            background: #000;
            color: white;
            max-width: 150px;
            white-space: nowrap;
        }

        .badges-wrapper {
            display: flex;
            flex-wrap: wrap;
            gap: 5px;
            margin-bottom: 10px;
        }

        /* Full Width Card */
        .full-width-card .header-content {
            order: 1;
        }

        .full-width-card .header-meta {
            order: 2;
        }

        .session-card.full-width-card {
            display: flex;
            flex-direction: column;
            gap: 20px;
            padding: 35px;
            border: 3px solid #000;
            background: #fff;
            position: relative;
        }

        .full-width-card .card-header {
            flex-direction: row;
            /* Keep horizontal for full-width */
            justify-content: space-between;
            align-items: flex-start;
            border-bottom: 2px solid #f0f0f0;
            padding-bottom: 20px;
            margin-bottom: 20px;
        }

        .full-width-card .card-title {
            font-size: 2.5rem;
            margin-bottom: 8px;
            width: 100%;
            line-height: 1.1;
            max-width: 900px;
        }

        .full-width-card .session-org {
            font-size: 1.1rem;
            color: var(--c-resist);
            font-weight: 700;
            margin: 0;
        }

        .full-width-card .card-details {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
            font-family: var(--font-body);
            font-weight: 600;
            color: #444;
            background: #fafafa;
            padding: 15px;
            border-radius: 5px;
        }

        .full-width-card .detail-row {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .full-width-card .card-description-area {
            margin-top: 5px;
        }

        .full-width-card .card-description {
            font-size: 1.15rem;
            line-height: 1.6;
            color: #222;
            max-width: 100%;
        }

        /* Countdown Section */
        .countdown-section {
            background-color: var(--c-resist);
            padding: 80px 0;
            text-align: center;
            color: #ffffff;
            position: relative;
            overflow: hidden;
            margin-top: 30px;
        }

        .countdown-section .countdown-title {
            font-family: var(--font-display);
            font-size: 3rem;
            font-weight: 900;
            text-transform: uppercase;
            margin: 0 0 50px 0;
            line-height: 1;
            color: #ffffff;
            letter-spacing: 2px;
        }

        .countdown-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 40px;
            margin: 0 auto 40px auto;
            flex-wrap: wrap;
        }

        .countdown-block {
            display: flex;
            flex-direction: column;
            align-items: center;
            min-width: 120px;
        }

        .countdown-number {
            font-family: var(--font-display);
            font-size: 5rem;
            font-weight: 900;
            color: #ffffff;
            line-height: 1;
            text-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }

        .countdown-label {
            font-family: var(--font-body);
            font-size: 1.1rem;
            font-weight: 600;
            text-transform: uppercase;
            color: #ffffff;
            margin-top: 10px;
            letter-spacing: 1px;
            opacity: 0.95;
        }

        .countdown-section .countdown-text {
            font-family: var(--font-body);
            font-size: 1.15rem;
            font-weight: 500;
            line-height: 1.6;
            max-width: 700px;
            margin: 0 auto 40px auto;
            color: #ffffff;
            opacity: 0.95;
        }

        .btn-countdown {
            display: inline-block;
            background-color: #f6f4ee;
            color: var(--c-resist);
            font-family: var(--font-display);
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

        /* Partners Section */
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

        .infinite-partners-section {
            padding: 60px 0 80px 0;
            overflow: hidden;
            border-top: 1px solid #eee;
        }

        .partners-slider-title {
            text-align: center;
            font-family: var(--font-display);
            font-size: 1.5rem;
            font-weight: 800;
            text-transform: uppercase;
            color: #009945;
            margin-bottom: 40px;
            letter-spacing: 1px;
        }

        .partners-slider-wrapper {
            width: 100%;
            overflow: hidden;
            position: relative;
        }

        .partners-track {
            display: flex;
            align-items: center;
            gap: 80px;
            width: 100%;
            padding: 10px 0;
            overflow-x: auto;
            scroll-behavior: auto;
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        .partners-track::-webkit-scrollbar {
            display: none;
        }

        .partner-slide-item {
            flex-shrink: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .partner-slide-img {
            height: 60px;
            width: auto;
            object-fit: contain;
            opacity: 1;
            filter: none;
            transition: transform 0.3s ease;
        }

        .partner-slide-img:hover {
            transform: scale(1.1);
        }

        /* Footer */
        .footer-bottom {

            color: var(--white);
            padding: 40px 0;
        }

        .footer-content-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .footer-logo-link {
            font-family: var(--font-display);
            font-weight: 900;
            font-size: 2rem;
            text-decoration: none;
            line-height: 1.2;
        }

        .footer-contact {
            font-family: var(--font-body);
            text-align: right;
        }

        .footer-contact a {
            color: var(--c-archive);
            text-decoration: none;
        }

        #backToTop {
            display: none;
            position: fixed;
            bottom: 30px;
            right: 30px;
            z-index: 99;
            border: none;
            outline: none;
            background-color: var(--c-resist);
            color: white;
            cursor: pointer;
            padding: 15px;
            border-radius: 50%;
            font-size: 18px;
            width: 50px;
            height: 50px;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            transition: all 0.3s ease;
        }

        #backToTop:hover {
            background-color: var(--c-conclave);
            transform: translateY(-3px);
        }

        #backToTop svg {
            width: 24px;
            height: 24px;
            stroke-width: 3;
        }

        /* Responsive */
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

            .schedule-layout {
                grid-template-columns: 100px repeat(2, 1fr);
            }
        }

        @media screen and (max-width: 900px) {
            .site-header {
                padding: 20px 0;
                flex-direction: column;
                align-items: center;
            }

            .card-title {
                font-size: 1.5rem;
                /* REDUCED from 1.6rem */
                line-height: 1.1;
            }

            .schedule-layout {
                display: flex;
                flex-direction: column;
                gap: 0;
            }

            .time-column {
                display: none;
            }

            .time-slot {
                display: none;
            }

            .day-header {
                display: none;
            }

            .day-section .both-days-header {
                display: block !important;
                text-align: center;
                margin-bottom: 30px;
                padding-bottom: 20px;
            }

            .mobile-room-label {
                display: none;
            }

            .mobile-time-badge {
                display: none;
                background: var(--c-archive);
                color: var(--white);
                padding: 6px 12px;
                font-size: 0.85rem;
                font-weight: 700;
                text-transform: uppercase;
                margin-bottom: 15px;
                font-family: var(--font-body);
            }

            .session-card {
                margin-left: auto;
                margin-right: auto;
                margin-bottom: 30px;
                width: 100%;
                /* ADD THIS */
            }

            .empty-slot {
                display: none;
            }

            .day-column {
                width: 100%;
                margin-bottom: 40px;
            }

            .full-width-card {
                flex-direction: column;
                align-items: flex-start;
            }

            .full-width-card .card-header {
                width: 100%;
                border-bottom: 1px solid #eee;
                padding-bottom: 15px;
            }

            .full-width-card .card-details {
                border-left: none;
                padding-left: 0;
                width: 100%;
            }

            * Add this CSS to your existing styles */

            /* Mobile Room Label - Initially hidden on desktop */
            .mobile-room-label {
                display: none;
            }

            /* Time slot color variations */
            .time-slot {
                background: var(--c-archive);
                color: var(--white);
                padding: 15px 10px;
                text-align: center;
                font-family: var(--font-body);
                font-weight: 700;
                font-size: 0.9rem;
                min-height: 50px;
                display: flex;
                align-items: center;
                justify-content: center;
                line-height: 1.2;
                flex: 1;
            }

            /* Alternate time slot colors for visual variety */
            .time-slot:nth-child(5n+1) {
                background: var(--c-archive);
            }

            .time-slot:nth-child(5n+2) {
                background: var(--c-conclave);
            }

            .time-slot:nth-child(5n+3) {
                background: var(--c-resist);
            }

            .time-slot:nth-child(5n+4) {
                background: var(--c-room4);
            }

            .time-slot:nth-child(5n+5) {
                background: var(--black);
            }

            /* Mobile-specific styles */
            @media screen and (max-width: 900px) {

                /* Show mobile room labels */
                .mobile-room-label {
                    display: block;
                    font-family: var(--font-display);
                    font-weight: 800;
                    font-size: 0.9rem;
                    /* REDUCED */
                    text-transform: uppercase;
                    padding: 6px 10px;
                    /* REDUCED */
                    margin-bottom: 8px;
                    /* REDUCED */
                    color: white;
                    letter-spacing: 0.5px;
                }

                /* Room-specific colors for mobile labels */
                .mobile-room-label.room1 {
                    background: var(--c-archive);
                }

                .mobile-room-label.room2 {
                    background: var(--c-conclave);
                }

                .mobile-room-label.room3 {
                    background: var(--c-resist);
                }

                .mobile-room-label.room4 {
                    background: var(--c-room4);
                }

                /* Mobile time badge styling */
                .mobile-time-badge {
                    display: block;
                    background: var(--black);
                    color: var(--white);
                    padding: 4px 10px;
                    font-size: 0.8rem;
                    /* Slightly smaller */
                    font-weight: 700;
                    text-transform: uppercase;
                    margin-bottom: 12px;
                    font-family: var(--font-body);
                }

                /* Add left border accent to cards based on room */
                .session-card {
                    padding: 18px;
                    /* REDUCED for mobile */
                    margin-bottom: 25px;
                    /* REDUCED from 30px */
                }

                .day-column:nth-child(2) .session-card {
                    border-left-color: var(--c-archive);
                }

                .day-column:nth-child(3) .session-card {
                    border-left-color: var(--c-conclave);
                }

                .day-column:nth-child(4) .session-card {
                    border-left-color: var(--c-resist);
                }

                .day-column:nth-child(5) .session-card {
                    border-left-color: var(--c-room4);
                }
            }

            .card-header {
                margin-bottom: 10px;
                gap: 6px;
            }

            /* Collapse card header on mobile */
            .session-card .card-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
            }

            .session-card .card-badge {
                align-self: flex-start;
                margin-top: 0;
            }


            .partner-row {
                flex-direction: column;
                gap: 15px;
            }

            .partner-label {
                width: 100%;
            }

            .footer-content-row {
                flex-direction: column;
                gap: 20px;
                text-align: center;
            }

            .footer-contact {
                text-align: center;
            }
        }

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
                <a href="#schedule-grid" class="btn-ticket">VIEW SCHEDULE ↓</a>
            </div>
        </section>
        </section>

        <!-- ADD THIS SEARCH BAR -->
        <div class="search-outer-wrapper">
            <div class="search-label-container">
                <span class="search-label-tag">FIND A SESSION</span>
                <div class="search-label-line"></div>
            </div>
            <div class="search-container">
                <input type="text" id="sessionSearch" class="search-input" placeholder="SEARCH SESSIONS...">
                <button id="clearSearch" class="search-clear-btn">&times;</button>
                <div id="searchResults" class="search-results"></div>
            </div>
        </div>

        <?php
        // ===================================================
        // BOTH DAYS SESSIONS (TOP) - Ongoing/Parallel Events
        // ===================================================
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
            // Add more ongoing sessions here
        ];

        // ===================================================
        // SCHEDULE DATA STRUCTURE
        // Time slots with sessions for each room
        // ===================================================

        // DAY 1 SCHEDULE
        $day1_schedule = [
            [
                'time' => '10:00-11:30 AM',
                'rooms' => [
                    'room1' => [
                        'title' => 'Collaborative Future for Community-Led Human Rights Documentation & Transitional Justice',
                        'desc'  => 'This opening plenary brings together all partner organizations to express collective solidarity and a shared commitment to sustaining the Archive & Resist Conclave beyond this year. The session will reflect on why community-led documentation matters, how archives can support transitional justice, and how we can build long-term collaboration to strengthen this work in Bangladesh and the region. Together, partners will outline a common vision for keeping this platform alive and growing as a space for learning, resistance, and accountability.',
                        'type'  => 'Plenary',
                        'lead'  => 'All Partners',
                        'org'   => 'All Partners'
                    ],
                    'room2' => [
                        'title' => '',
                        'desc'  => '',
                        'type'  => 'BOOKED',
                        'lead'  => 'BOOKED',
                        'org'   => 'BOOKED'
                    ],
                    'room3' => [
                        'title' => '',
                        'desc'  => '',
                        'type'  => 'BOOKED',
                        'lead'  => 'BOOKED',
                        'org'   => 'BOOKED'
                    ],
                    'room4' => [
                        'title' => '',
                        'desc'  => '',
                        'type'  => 'BOOKED',
                        'lead'  => 'BOOKED',
                        'org'   => 'BOOKED'
                    ],
                ]
            ],
            [
                'time' => '11:30 AM-1:00 PM',
                'rooms' => [
                    'room1' => [
                        'title' => '',
                        'desc'  => '',
                        'type'  => 'TBA',
                        'lead'  => 'TBA',
                        'org'   => 'TBA'
                    ],
                    'room2' => [
                        'title' => 'Level Up Your Archiving, Starting from the Basics',
                        'desc'  => 'Archiving exists on a spectrum—from simple, baseline practices to more robust systems—depending on available resources, capacities, and the nature of the materials. This hands-on workshop offers a practical introduction to the core components of archiving, including selection, collection, organization, packaging, storage, cataloging, and access. Starting from the basics, participants will explore how to build safer, more resilient archiving practices over time. The workshop is designed for those who are new to archiving, as well as practitioners who want to strengthen and “level up” their existing approaches.',
                        'type'  => 'Interactive Workshop',
                        'lead'  => 'Yvonne Ng',
                        'org'   => 'WITNESS'
                    ],
                    'room3' => [
                        'title' => 'Preserving the History: Coverage, Safety, and Documentation of Bangladesh General Election-2026',
                        'desc'  => 'This session brings together journalists, researchers, and civil society to discuss ethical election coverage, journalist safety, and effective documentation practices. It will explore challenges like misinformation and digital threats, while highlighting ways to protect democratic processes and preserve a credible public record of the 2026 election.',
                        'type'  => 'Dialogue',
                        'lead'  => 'Mohammad Ali Mazed, Sam Jahan',
                        'org'   => 'Bangladeshi Journalists in International Media'
                    ],
                    'room4' => [
                        'title' => '',
                        'desc'  => '',
                        'type'  => 'TBA',
                        'lead'  => 'TBA',
                        'org'   => 'TBA'
                    ],
                ]
            ],
            [
                'time' => 'LUNCH',
                'rooms' => [
                    'room1' => [
                        'title' => '',
                        'desc'  => '',
                        'type'  => 'Lunch Break',
                        'lead'  => 'Lunch Break',
                        'org'   => 'Lunch Break'
                    ],
                    'room2' => [
                        'title' => '',
                        'desc'  => '',
                        'type'  => 'Lunch Break',
                        'lead'  => 'Lunch Break',
                        'org'   => 'Lunch Break'
                    ],
                    'room3' => [
                        'title' => '',
                        'desc'  => '',
                        'type'  => 'Lunch Break',
                        'lead'  => 'Lunch Break',
                        'org'   => 'Lunch Break'
                    ],
                    'room4' => [
                        'title' => '',
                        'desc'  => '',
                        'type'  => 'Lunch Break',
                        'lead'  => 'Lunch Break',
                        'org'   => 'Lunch Break'
                    ],
                ]
            ],
            [
                'time' => '2:00-3:30 PM',
                'rooms' => [
                    'room1' => [
                        'title' => 'Resistance Cinema Fest',
                        'desc'  => 'Across both days of the Conclave, Resistance Cinema Fest will screen a curated selection of investigative documentaries and resistance cinema from Bangladesh and beyond. These films document struggles for justice, human rights violations, and movements of resistance, creating space to reflect on the power of visual storytelling as evidence, memory, and a tool for accountability.',
                        'type'  => 'Parallel',
                        'time'  => 'Ongoing',
                        'lead'  => 'Bangladesh Protest Archive',
                        'org'   => 'Bangladesh Protest Archive'
                    ],
                    'room2' => [
                        'title' => 'Tools and Skills to Build Visual Investigations using OSINT',
                        'desc'  => 'This practical session explores video-based approaches to building visual investigations using open-source information. Participants will be introduced to key OSINT tools and workflows for collecting, verifying, analyzing, and presenting visual evidence from videos, images, and social media content. The session will also introduce different open-source tools for visualizing investigations, helping participants understand how to structure findings and communicate evidence clearly. It highlights how visual investigations can support human rights documentation, journalism, and accountability efforts.',
                        'type'  => 'Interactive Workshop',
                        'lead'  => 'Georgia Edwards',
                        'org'   => 'Witness'
                    ],
                    'room3' => [
                        'title' => '',
                        'desc'  => '',
                        'type'  => 'TBA',
                        'lead'  => 'TBA',
                        'org'   => 'TBA'
                    ],
                    'room4' => [
                        'title' => 'July Persist: How to build Community-Led Archiving and OSINT Investigation in Bangladesh',
                        'desc'  => 'This session explores how community-led archiving and open-source investigations are emerging in Bangladesh after July, focusing on the work of Netra News and the Bangladesh Protest Archive (BPA). It examines how journalists, researchers, and activists are building a community-driven ecosystem for human rights documentation and grassroots investigations. Speakers will share how these initiatives collect, verify, and preserve open-source information to document violations, counter disinformation, and support accountability, while reflecting on the challenges of trust, safety, and sustaining community participation.',
                        'type'  => 'Ideation',
                        'lead'  => ' Shoeb Abdullah, Subinoy Mustofi Eron, Aaqib Shatil, Iffat Nowshin Joye',
                        'org'   => 'Netra News, Bangladesh Protest Archive'
                    ],
                ]
            ],
            [
                'time' => '3:30-5:00 PM',
                'rooms' => [
                    'room1' => [
                        'title' => '',
                        'desc'  => '',
                        'type'  => 'TBA',
                        'lead'  => 'TBA',
                        'org'   => 'TBA'
                    ],
                    'room2' => [
                        'title' => 'Prepare, Don’t Panic: How to Respond to AI and Deepfakes in Bangladesh Election Contexts',
                        'desc'  => 'As Bangladesh approaches its February election, we’re seeing increasing use of AI-generated content and deepfakes to confuse, discredit, and intimidate activists, journalists, and civic actors. The session is designed to be more than a panel but lighter than a technical training. It focuses on how to respond rather than panic or over-rely on tools. Participants will be guided through common election-related scenarios to discuss what to do when encountering suspected AI-generated content, how to interpret detection claims cautiously, and how to make informed decisions under pressure.',
                        'type'  => 'Interactive Workshop',
                        'lead'  => 'Kartika Pratiwi, Minhaj Aman',
                        'org'   => 'Witness, Activate Rights'
                    ],
                    'room3' => [
                        'title' => '',
                        'desc'  => '',
                        'type'  => 'TBA',
                        'lead'  => 'TBA',
                        'org'   => 'TBA'
                    ],
                    'room4' => [
                        'title' => 'Building Human Rights Database Systems as a Tool for Sustained Resistance',
                        'desc'  => 'This practical session explores how fragmented documentation and scattered datasets can be transformed into structured, resilient human rights database systems. Participants will learn why databases matter for long-term documentation, investigations, and accountability work. The discussion will cover key principles of organizing, standardizing, and maintaining human rights data in challenging environments. The session will also reflect on ethical, security, and sustainability considerations. Participants will leave with a clearer understanding of how database systems can support sustained resistance and long-term justice efforts.',
                        'type'  => 'Roundtable',
                        'lead'  => 'Pruhbu Dolma, Hyebin Bina Jeon',
                        'org'   => 'HURIDOCS'
                    ],
                ]
            ],
            [
                'time' => '5:00-6:30 PM',
                'rooms' => [
                    'room1' => [
                        'title' => 'Posters of Resistance: Visual Solidarity',
                        'desc'  => 'Running alongside Archive & Resist Conclave 2026, this interactive exhibition showcases posters and artworks from protests and human rights movements, inspired by the July Uprising in Bangladesh and global youth-led struggles. Selected works will be displayed at BRAC University, with contributors invited to join participatory art sessions and potentially be featured in an online resistance gallery.',
                        'type'  => 'Parallel',
                        'lead'  => 'Pruhbu Dolma, Hyebin Bina Jeon',
                        'org'   => 'HURIDOCS'
                    ],
                    'room2' => [
                        'title' => '',
                        'desc'  => '',
                        'type'  => 'BOOKED',
                        'lead'  => 'BOOKED',
                        'org'   => 'BOOKED'
                    ],
                    'room3' => [
                        'title' => '',
                        'desc'  => '',
                        'type'  => 'BOOKED',
                        'lead'  => 'BOOKED',
                        'org'   => 'BOOKED'
                    ],
                    'room4' => [
                        'title' => '',
                        'desc'  => '',
                        'type'  => 'BOOKED',
                        'lead'  => 'BOOKED',
                        'org'   => 'BOOKED'
                    ],
                ]
            ],
        ];

        // DAY 2 SCHEDULE
        $day2_schedule = [
            [
                'time' => '10:00-11:30 AM',
                'rooms' => [
                    'room1' => [
                        'title' => 'Truth and Reconciliation: Conversations on Healing and Accountability',
                        'desc'  => 'Conversations on balancing the need for healing with the demand for accountability in post-conflict contexts.',
                        'type'  => 'Plenary',
                        'lead'  => 'UNDP, UNESCO, CSOH, The Forum for Women\'s Political Rights',
                        'org'   => 'UNDP, UNESCO, CSOH, The Forum for Women\'s Political Rights'
                    ],
                    'room2' => [
                        'title' => '',
                        'desc'  => '',
                        'type'  => 'BOOKED',
                        'lead'  => 'BOOKED',
                        'org'   => 'BOOKED'
                    ],
                    'room3' => [
                        'title' => '',
                        'desc'  => '',
                        'type'  => 'BOOKED',
                        'lead'  => 'BOOKED',
                        'org'   => 'BOOKED'
                    ],
                    'room4' => [
                        'title' => '',
                        'desc'  => '',
                        'type'  => 'BOOKED',
                        'lead'  => 'BOOKED',
                        'org'   => 'BOOKED'
                    ],
                ]
            ],
            [
                'time' => '11:30 AM-1:00 PM',
                'rooms' => [
                    'room1' => [
                        'title' => 'Why People Rise: Stories of Resistance in Bangladesh',
                        'desc'  => 'This session traces a historical timeline of protest and resistance in Bangladesh, reaching back to movements before 1971 and continuing through later waves of mass mobilization. It will explore why people rise—examining the political, social, and economic forces that fuel resistance, and the moments that turn grievance into collective action. Through historical examples and analysis, the session will look at key drivers of protest, how resistance spreads across communities, including, gender and  and the nationwide impacts these movements have had on society, culture, and state power. The discussion invites participants to understand resistance not as isolated events, but as a continuous struggle shaped by memory, injustice, and collective courage.This session traces a historical timeline of protest and resistance in Bangladesh, reaching back to movements before 1971 and continuing through later waves of mass mobilization. It will explore why people rise—examining the political, social, and economic forces that fuel resistance, and the moments that turn grievance into collective action. Through historical examples and analysis, the session will look at key drivers of protest, how resistance spreads across communities, including, gender and  and the nationwide impacts these movements have had on society, culture, and state power. The discussion invites participants to understand resistance not as isolated events, but as a continuous struggle shaped by memory, injustice, and collective courage.',
                        'type'  => 'Interactive Discussion',
                        'lead'  => 'Amir Hamza Zihad',
                        'org'   => 'Makeateam'
                    ],
                    'room2' => [
                        'title' => 'Countering Organized Hate through Research & Documentation',
                        'desc'  => 'This session introduces the work of the Center for the Study of Organized Hate (CSOH) and explores how research-driven hate tracking can strengthen human rights documentation, advocacy, and policy engagement in South Asia. Through discussion and peer exchange, participants will reflect on shared challenges and how to build regional collaboration to counter organized hate and protect democratic space.',
                        'type'  => 'Dialogue',
                        'lead'  => 'Ammaarah Nilafdeen, Raqib Hameed Naik',
                        'org'   => 'Center for the Study of Organized Hate'
                    ],
                    'room3' => [
                        'title' => 'Screenshot It, Bestie! But Do It Right: 10 Things You Need to Know About Documenting TFGBV',
                        'desc'  => 'Technology-Facilitated Gender-Based Violence (TFGBV) is widespread, fast-moving, and often poorly documented—making accountability harder and harm deeper. This session offers a practical, survivor-centered introduction to documenting TFGBV safely, ethically, and effectively, with a focus on supporting platform accountability. Through real-world examples and hands-on guidance, participants will learn core principles for capturing, preserving, and organizing digital evidence; minimizing risks to survivors and documenters; and using documentation to support advocacy, platform accountability, and legal or policy action. This session is designed for activists, journalists, researchers, and community responders working at the frontlines of online harm.',
                        'type'  => 'Interactive Workshop',
                        'lead'  => 'Minhaj Aman, Selima Sara Kabir',
                        'org'   => 'Activate Rights, BRAC James P Grant School of Public Health'
                    ],
                    'room4' => [
                        'title' => 'Crisis Response Tech: Exploring Challenges and Opportunities for Emerging Civic Technologies in Bangladesh',
                        'desc'  => 'This session explores how emerging civic technologies can support crisis response, documentation, and accountability in Bangladesh. Participants will discuss real-world challenges, local needs, and opportunities for building tools that strengthen community resilience and human rights work.',
                        'type'  => 'Roundtable',
                        'lead'  => 'Chowdhury Isfatul Karim, Rafid Khan',
                        'org'   => 'Jogajog and Friends'
                    ],
                ]
            ],
            [
                'time' => 'LUNCH',
                'rooms' => [
                    'room1' => [
                        'title' => '',
                        'desc'  => '',
                        'type'  => 'Lunch Break',
                        'lead'  => 'Lunch Break',
                        'org'   => 'Lunch Break'
                    ],
                    'room2' => [
                        'title' => '',
                        'desc'  => '',
                        'type'  => 'Lunch Break',
                        'lead'  => 'Lunch Break',
                        'org'   => 'Lunch Break'
                    ],
                    'room3' => [
                        'title' => '',
                        'desc'  => '',
                        'type'  => 'Lunch Break',
                        'lead'  => 'Lunch Break',
                        'org'   => 'Lunch Break'
                    ],
                    'room4' => [
                        'title' => '',
                        'desc'  => '',
                        'type'  => 'Lunch Break',
                        'lead'  => 'Lunch Break',
                        'org'   => 'Lunch Break'
                    ],
                ]
            ],
            [
                'time' => '2:00-3:30 PM',
                'rooms' => [
                    'room1' => [
                        'title' => 'Capture, Protect, Preserve: Resilient Evidence Documentation for Elections, Crackdowns & Internet Shutdowns',
                        'desc'  => 'This hands-on workshop offers practical, field-tested steps to help activists, documenters, and journalists securely capture, organize, and preserve documentation so it remains safe, findable, and usable for future accountability and justice processes. Participants will practice a simple Capture–Protect–Preserve workflow designed for high-risk situations such as elections, raids, violent crackdowns, and internet shutdowns. The session focuses on realistic, low-barrier methods that can be applied even under pressure and limited resources. Participants will leave with a clear, adaptable approach they can immediately use with their teams and communities.',
                        'type'  => 'Interactive Workshop',
                        'lead'  => 'Arul Prakkash Sinappan',
                        'org'   => 'Independent'
                    ],
                    'room2' => [
                        'title' => 'Deadly in Disguise: The Hidden Lethality of Pellet Guns/Chhorra Guli',
                        'desc'  => 'This session examines the often-overlooked lethality of pellet guns (chhorra guli) when used in crowd-control contexts and the severe human suffering they cause. Drawing on investigative research and documentation, the session will explore how these weapons inflict life-altering injuries, permanent disability, and, in some cases, death.Through case studies and evidence-based analysis, participants will learn how lethality is investigated, documented, and communicated, and why exposing the real impacts of so-called “less-lethal” weapons is essential for accountability, advocacy, and the protection of human rights.',
                        'type'  => 'Dialogue',
                        'lead'  => 'Zarif Rahman, Opsora Islam',
                        'org'   => 'Sapran'
                    ],
                    'room3' => [
                        'title' => 'Beyond Disinformation: Industrial-Scale Information Warfare in Bangladesh Before and After the Election',
                        'desc'  => 'This session examines how coordinated, industrial-scale information disorder—including FIMI, disinformation, and influence operations—is shaping Bangladesh’s information environment before and after the election. It will explore key tactics, actors, and real-world impacts, and discuss how research, documentation, and cross-sector collaboration can help expose and counter large-scale information warfare.',
                        'type'  => 'Roundtable',
                        'lead'  => 'Fact Checkers Community',
                        'org'   => 'The Dissent, Dismislab, Fact Watch, Rumor Scanner, AFP Fact Check, Shottify'
                    ],
                    'room4' => [
                        'title' => '',
                        'desc'  => '',
                        'type'  => 'TBA',
                        'lead'  => 'TBA',
                        'org'   => 'TBA'
                    ],
                ]
            ],
            [
                'time' => '3:30-5:00 PM',
                'rooms' => [
                    'room1' => [
                        'title' => '',
                        'desc'  => '',
                        'type'  => 'TBA',
                        'lead'  => 'TBA',
                        'org'   => 'TBA'
                    ],
                    'room2' => [
                        'title' => '',
                        'desc'  => '',
                        'type'  => 'TBA',
                        'lead'  => 'TBA',
                        'org'   => 'TBA'
                    ],
                    'room3' => [
                        'title' => '',
                        'desc'  => '',
                        'type'  => 'TBA',
                        'lead'  => 'TBA',
                        'org'   => 'TBA'
                    ],
                    'room4' => [
                        'title' => 'Announcing Archive & Resist Fund',
                        'desc'  => 'This invitation-only, closed-door session marks the official announcement of the Archive & Resist Fund—an independent fundraising initiative to support community-led human rights documentation, archiving, and accountability work. The session will bring together philanthropists, activists, and community leaders to share solidarity and explore ways to build sustainable, long-term support for grassroots documentation efforts. While the fund is being initiated by Activate Rights and the Bangladesh Protest Archive (BPA), it will be independently governed and led by an independent advisory board to ensure transparency, accountability, and community trust.',
                        'type'  => 'Invitation Only',
                        'lead'  => 'Bangladesh Protest Archive',
                        'org'   => 'Bangladesh Protest Archive'
                    ],
                ]
            ],
            [
                'time' => '5:00-6:30 PM',
                'rooms' => [
                    'room1' => [
                        'title' => 'Closing Ceremony: The Way Forward',
                        'desc'  => 'Reflecting on the two days of work and setting the agenda for the coming year.',
                        'type'  => 'Plenary',
                        'lead'  => 'Organizing Committee',
                        'org'   => 'Organizing Committee'
                    ],
                    'room2' => [
                        'title' => '',
                        'desc'  => '',
                        'type'  => 'BOOKED',
                        'lead'  => 'BOOKED',
                        'org'   => 'BOOKED'
                    ],
                    'room3' => [
                        'title' => '',
                        'desc'  => '',
                        'type'  => 'BOOKED',
                        'lead'  => 'BOOKED',
                        'org'   => 'BOOKED'
                    ],
                    'room4' => [
                        'title' => '',
                        'desc'  => '',
                        'type'  => 'BOOKED',
                        'lead'  => 'BOOKED',
                        'org'   => 'BOOKED'
                    ],
                ]
            ],
        ];

        // ===================================================
        // BOTH DAYS SESSIONS (BOTTOM) - Ongoing/Parallel Events
        // ===================================================
        $both_days_bottom = [
            [
                'title' => 'Posters of Resistance: Visual Solidarity',
                'desc'  => 'Running alongside Archive & Resist Conclave 2026, this interactive exhibition showcases posters and artworks from protests and human rights movements, inspired by the July Uprising in Bangladesh and global youth-led struggles. Selected works will be displayed at BRAC University, with contributors invited to join participatory art sessions and potentially be featured in an online resistance gallery.',
                'type'  => 'Parallel',
                'date'  => 'Jan 26-27',
                'time'  => 'Ongoing',
                'lead'  => 'Artivism Studio',
                'org'   => 'Artivism Studio'
            ],
        ];

        // Room configuration
        $room_config = [
            'room1' => ['name' => 'Room 9C', 'class' => 'header-room1'],
            'room2' => ['name' => 'Room 4C', 'class' => 'header-room2'],
            'room3' => ['name' => 'Room 5C', 'class' => 'header-room3'],
            'room4' => ['name' => 'Room 6C', 'class' => 'header-room4'],
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

        <!-- DAY 1 SCHEDULE -->
        <div class="day-section" style="margin-bottom: 80px;">
            <div class="day-header both-days-header" style="margin-bottom: 40px;">
                <h2 style="color: var(--c-conclave);">DAY 1</h2>
                <span class="date-sub">January 26, 2026</span>
            </div>

            <div class="schedule-layout">
                <!-- ROOM HEADERS -->
                <div></div> <!-- Empty space for time column header -->
                <?php foreach ($room_config as $room_key => $room_info): ?>
                    <div class="day-header <?php echo $room_info['class']; ?> reveal-on-scroll">
                        <h2><?php echo $room_info['name']; ?></h2>
                    </div>
                <?php endforeach; ?>

                <!-- TIME SLOTS AND SESSIONS -->
                <?php foreach ($day1_schedule as $slot): ?>
                    <!-- Time Slot -->
                    <div class="time-slot"><?php echo $slot['time']; ?></div>

                    <!-- Sessions for each room at this time -->
                    <?php foreach ($room_config as $room_key => $room_info):
                        $session = $slot['rooms'][$room_key];
                        if ($session):
                            $type = strtolower($session['type']);

                            if (strpos($type, 'plenary') !== false) $badgeClass = 'badge-plenary';
                            elseif (strpos($type, 'workshop') !== false) $badgeClass = 'badge-workshop';
                            elseif (strpos($type, 'ideation') !== false) $badgeClass = 'badge-ideation';
                            elseif (strpos($type, 'dialogue') !== false) $badgeClass = 'badge-dialogue';
                            elseif (strpos($type, 'roundtable') !== false) $badgeClass = 'badge-roundtable';
                            elseif (strpos($type, 'parallel') !== false) $badgeClass = 'badge-parallel';
                            else $badgeClass = 'badge-workshop';

                            $displayType = $session['type'];
                            if (trim($type) == 'workshop') {
                                $displayType = 'Interactive Workshop';
                            }
                    ?>
                            <div class="session-card static-card reveal-on-scroll">
                                <div class="mobile-room-label <?php echo $room_key; ?>"><?php echo $room_info['name']; ?></div>
                                <div class="mobile-time-badge"><?php echo $slot['time']; ?></div>
                                <div class="card-header">
                                    <div class="header-content">
                                        <h3 class="card-title"><?php echo $session['title']; ?></h3>
                                        <p class="session-org"><?php echo $session['org']; ?></p>
                                    </div>
                                    <div class="header-meta"><span class="card-badge <?php echo $badgeClass; ?>"><?php echo $displayType; ?></span></div>
                                </div>
                                <div class="card-details">
                                    <div class="detail-row"><span class="detail-icon icon-user">👤</span> <?php echo $session['lead']; ?></div>
                                </div>
                                <div class="card-description-area">
                                    <div class="desc-content collapsed">
                                        <p class="card-description"><?php echo $session['desc']; ?></p>
                                    </div>
                                    <button class="desc-toggle-btn" onclick="toggleDescription(this)">Read More ▼</button>
                                </div>
                            </div>
                        <?php else: ?>
                            <div class="empty-slot"></div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- DAY 2 SCHEDULE -->
        <div class="day-section" style="margin-bottom: 80px;">
            <div class="day-header both-days-header" style="margin-bottom: 40px;">
                <h2 style="color: var(--c-resist);">DAY 2</h2>
                <span class="date-sub">January 27, 2026</span>
            </div>

            <div class="schedule-layout">
                <!-- ROOM HEADERS -->
                <div></div> <!-- Empty space for time column header -->
                <?php foreach ($room_config as $room_key => $room_info): ?>
                    <div class="day-header <?php echo $room_info['class']; ?> reveal-on-scroll">
                        <h2><?php echo $room_info['name']; ?></h2>
                    </div>
                <?php endforeach; ?>

                <!-- TIME SLOTS AND SESSIONS -->
                <?php foreach ($day2_schedule as $slot): ?>
                    <!-- Time Slot -->
                    <div class="time-slot"><?php echo $slot['time']; ?></div>

                    <!-- Sessions for each room at this time -->
                    <?php foreach ($room_config as $room_key => $room_info):
                        $session = $slot['rooms'][$room_key];
                        if ($session):
                            $type = strtolower($session['type']);

                            if (strpos($type, 'plenary') !== false) $badgeClass = 'badge-plenary';
                            elseif (strpos($type, 'workshop') !== false) $badgeClass = 'badge-workshop';
                            elseif (strpos($type, 'ideation') !== false) $badgeClass = 'badge-ideation';
                            elseif (strpos($type, 'dialogue') !== false) $badgeClass = 'badge-dialogue';
                            elseif (strpos($type, 'roundtable') !== false) $badgeClass = 'badge-roundtable';
                            elseif (strpos($type, 'parallel') !== false) $badgeClass = 'badge-parallel';
                            else $badgeClass = 'badge-workshop';

                            $displayType = $session['type'];
                            if (trim($type) == 'workshop') {
                                $displayType = 'Interactive Workshop';
                            }
                    ?>
                            <div class="session-card static-card reveal-on-scroll">
                                <div class="mobile-room-label <?php echo $room_key; ?>"><?php echo $room_info['name']; ?></div>
                                <div class="mobile-time-badge"><?php echo $slot['time']; ?></div>
                                <div class="card-header">
                                    <div class="header-content">
                                        <h3 class="card-title"><?php echo $session['title']; ?></h3>
                                        <p class="session-org"><?php echo $session['org']; ?></p>
                                    </div>
                                    <div class="header-meta"><span class="card-badge <?php echo $badgeClass; ?>"><?php echo $displayType; ?></span></div>
                                </div>
                                <div class="card-details">
                                    <div class="detail-row"><span class="detail-icon icon-user">👤</span> <?php echo $session['lead']; ?></div>
                                </div>
                                <div class="card-description-area">
                                    <div class="desc-content collapsed">
                                        <p class="card-description"><?php echo $session['desc']; ?></p>
                                    </div>
                                    <button class="desc-toggle-btn" onclick="toggleDescription(this)">Read More ▼</button>
                                </div>
                            </div>
                        <?php else: ?>
                            <div class="empty-slot"></div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endforeach; ?>
            </div>
        </div>

        <?php if (!empty($both_days_bottom)): ?>
            <div class="both-days-container reveal-on-scroll">
                <?php foreach ($both_days_bottom as $session):
                    $badgeClass = 'badge-parallel';
                    $displayType = $session['type'];
                    if (trim(strtolower($session['type'])) == 'workshop') {
                        $displayType = 'Interactive Workshop';
                    }
                ?>
                    <div class="session-card static-card full-width-card">
                        <div class="card-header">
                            <div class="header-content">
                                <h3 class="card-title"><?php echo $session['title']; ?></h3>
                                <p class="session-org"><?php echo $session['org']; ?></p>
                            </div>
                            <div class="header-meta"><span class="card-badge <?php echo $badgeClass; ?>"><?php echo $displayType; ?></span></div>
                        </div>
                        <div class="card-details">
                            <div class="detail-row"><span class="detail-icon icon-time">⏰</span> <?php echo $session['time']; ?></div>
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
                <h2 class="countdown-title">CONCLAVE STARTS IN</h2>

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

    <section class="infinite-partners-section">
        <div class="container">
            <h2 class="partners-slider-title">SESSION CO-HOSTS</h2>
            <div class="partners-slider-wrapper">
                <div class="partners-track" id="partnerTickerTrack">
                    <?php
                    $logos = [
                        ['src' => '/images/copartner/Kashful Foundation.png', 'alt' => 'Kashful Foundation'],
                        ['src' => '/images/copartner/sapran logo.png', 'alt' => 'Sapran'],
                        ['src' => '/images/copartner/jogajog.png', 'alt' => 'Jogajog'],
                        ['src' => '/images/copartner/punab.png', 'alt' => 'Punab'],
                    ];

                    for ($i = 0; $i < 6; $i++) {
                        foreach ($logos as $logo): ?>
                            <div class="partner-slide-item">
                                <img src="<?php echo get_template_directory_uri() . $logo['src']; ?>"
                                    alt="<?php echo $logo['alt']; ?>"
                                    class="partner-slide-img">
                            </div>
                    <?php endforeach;
                    }
                    ?>
                </div>
            </div>
        </div>
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
        // ==========================================
        //  GLOBAL FUNCTIONS
        // ==========================================
        function toggleDescription(btn) {
            var content = btn.previousElementSibling;
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
        //  ON PAGE LOAD
        // ==========================================
        document.addEventListener("DOMContentLoaded", function() {

            // --- COUNTDOWN TIMER ---
            const countdownTimer = document.getElementById('countdownTimer');
            if (countdownTimer) {
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

            // --- DESCRIPTION BUTTON CHECKER ---
            var descriptions = document.querySelectorAll('.desc-content');
            descriptions.forEach(function(desc) {
                if (desc.scrollHeight < 85) {
                    desc.classList.remove('collapsed');
                    desc.style.maskImage = 'none';
                    desc.style.webkitMaskImage = 'none';
                    var btn = desc.nextElementSibling;
                    if (btn && btn.classList.contains('desc-toggle-btn')) {
                        btn.style.display = 'none';
                    }
                }
            });

            // --- SCROLL REVEAL ANIMATION ---
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

            // --- PARTNER TICKER ---
            const partnerTrack = document.getElementById('partnerTickerTrack');
            if (partnerTrack) {
                let pAnimId;
                let pPaused = false;
                let pSpeed = 0.8;

                function partnerScroll() {
                    if (!pPaused) {
                        partnerTrack.scrollLeft += pSpeed;
                        if (partnerTrack.scrollLeft >= (partnerTrack.scrollWidth / 2)) {
                            partnerTrack.scrollLeft = 0;
                        }
                    }
                    pAnimId = requestAnimationFrame(partnerScroll);
                }
                pAnimId = requestAnimationFrame(partnerScroll);

                partnerTrack.addEventListener('mouseenter', () => pPaused = true);
                partnerTrack.addEventListener('mouseleave', () => pPaused = false);
                partnerTrack.addEventListener('touchstart', () => pPaused = true);
                partnerTrack.addEventListener('touchend', () => pPaused = false);
            }

            // --- BACK TO TOP BUTTON ---
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
        // --- SESSION SEARCH & NAVIGATION ---
        const searchInput = document.getElementById('sessionSearch');
        const searchResults = document.getElementById('searchResults');
        const clearBtn = document.getElementById('clearSearch');

        if (searchInput && searchResults) {
            const allSessions = [];

            // 1. Map all sessions and ensure they have IDs for navigation
            document.querySelectorAll('.session-card').forEach((card, index) => {
                const id = card.id || `session-node-${index}`;
                card.id = id;

                const title = card.querySelector('.card-title')?.textContent || '';
                const org = card.querySelector('.session-org')?.textContent || '';
                const lead = card.querySelector('.detail-row')?.textContent || '';

                if (title) {
                    allSessions.push({
                        title: title.trim(),
                        org: org.trim(),
                        lead: lead.trim(),
                        element: card,
                        id: id
                    });
                }
            });

            // 2. Filter Logic
            searchInput.addEventListener('input', function(e) {
                const query = e.target.value.toLowerCase().trim();

                // Show/Hide Clear Button
                if (clearBtn) clearBtn.style.display = (query.length > 0) ? 'block' : 'none';

                if (query.length < 2) {
                    searchResults.classList.remove('active');
                    return;
                }

                const matches = allSessions.filter(s =>
                    s.title.toLowerCase().includes(query) ||
                    s.org.toLowerCase().includes(query) ||
                    s.lead.toLowerCase().includes(query)
                );

                if (matches.length === 0) {
                    searchResults.innerHTML = '<div class="no-results">No sessions found</div>';
                } else {
                    searchResults.innerHTML = matches.map(s => `
                <div class="search-result-item" data-target="${s.id}">
                    <div class="result-title">${s.title}</div>
                    <div class="result-meta">${s.org}</div>
                </div>
            `).join('');
                }
                searchResults.classList.add('active');
            });

            // 3. The "Take Me There" Click Handler
            searchResults.addEventListener('click', function(e) {
                const item = e.target.closest('.search-result-item');
                if (!item) return;

                const targetId = item.getAttribute('data-target');
                const targetElement = document.getElementById(targetId);

                if (targetElement) {
                    // Scroll the browser to the session card
                    targetElement.scrollIntoView({
                        behavior: 'smooth',
                        block: 'center'
                    });

                    // Pulse Highlight: briefly show user which card was found
                    targetElement.style.transition = 'outline 0.3s ease, transform 0.3s ease';
                    targetElement.style.outline = '5px solid var(--c-resist)';
                    targetElement.style.transform = 'scale(1.02)';

                    setTimeout(() => {
                        targetElement.style.outline = '5px solid transparent';
                        targetElement.style.transform = 'scale(1)';
                    }, 2000);
                }

                // Clean up: Clear search and hide results
                searchInput.value = '';
                if (clearBtn) clearBtn.style.display = 'none';
                searchResults.classList.remove('active');
            });

            // 4. Clear Button functionality
            if (clearBtn) {
                clearBtn.addEventListener('click', function() {
                    searchInput.value = '';
                    this.style.display = 'none';
                    searchResults.classList.remove('active');
                    searchInput.focus();
                });
            }

            // Close dropdown when clicking anywhere else
            document.addEventListener('click', (e) => {
                if (!searchInput.contains(e.target) && !searchResults.contains(e.target)) {
                    searchResults.classList.remove('active');
                }
            });
        }
    </script>
</body>

</html>