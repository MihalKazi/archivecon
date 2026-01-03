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
        .reveal-on-scroll {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s cubic-bezier(0.5, 0, 0, 1);
        }
        .reveal-on-scroll.is-visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* 2. CARD HOVER EFFECTS */
        .session-card {
            transition: transform 0.4s cubic-bezier(0.34, 1.56, 0.64, 1), box-shadow 0.3s ease;
            will-change: transform;
        }
        @media (min-width: 992px) {
            .session-card:hover {
                transform: translateY(-7px) scale(1.01);
                box-shadow: 0 15px 30px rgba(0,0,0,0.15);
                z-index: 2;
                border-color: #333;
            }
        }

        /* 3. BOTH DAYS HEADER STYLES */
        .both-days-container {
            width: 100%;
            margin-bottom: 50px;
            margin-top: 60px;
            text-align: center;
        }
        .both-days-header {
            margin-bottom: 10px;
            border-bottom: 2px solid #ddd;
            line-height: 0.1em;
            margin-left: 20px; 
            margin-right: 20px;
        }
        .both-days-header span {
            background:#fff; 
            padding:0 15px; 
            font-family: var(--font-display, sans-serif);
            font-weight: 700;
            color: #555;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        .both-days-desc {
            font-family: var(--font-body, sans-serif);
            color: #666;
            font-size: 0.95rem;
            max-width: 600px;
            margin: 15px auto 30px auto;
            line-height: 1.4;
        }

        /* 4. DAY COLUMN HEADER DESCRIPTIONS */
        .day-header {
            margin-bottom: 30px;
            padding-bottom: 15px;
            border-bottom: 4px solid #000;
        }
        .day-desc {
            margin-top: 10px;
            font-family: var(--font-body, sans-serif);
            font-size: 0.95rem;
            color: #555;
            line-height: 1.4;
            max-width: 90%;
        }
        .day-desc strong {
            color: #000;
            font-weight: 600;
        }

        /* 5. FULL WIDTH CARD & SHIMMER */
        .session-card.full-width-card {
            width: 100%;
            max-width: 100%;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            min-height: auto;
            padding: 30px;
            position: relative;
            overflow: hidden;
            background: #fff;
            border: 2px solid #000;
        }
        @keyframes shimmer {
            0% { left: -100%; }
            100% { left: 200%; }
        }
        .full-width-card::after {
            content: "";
            position: absolute;
            top: 0;
            left: -100%;
            width: 50%;
            height: 100%;
            background: linear-gradient(to right, transparent, rgba(255,255,255,0.8), transparent);
            transform: skewX(-25deg);
            pointer-events: none;
            animation: shimmer 6s infinite;
        }
        .full-width-card .card-header {
            flex: 2;
            margin-bottom: 0;
            padding-right: 20px;
            border-bottom: none;
        }
        .full-width-card .card-details {
            flex: 1;
            border-left: 1px solid rgba(0,0,0,0.1);
            padding-left: 30px;
        }
        @media (max-width: 768px) {
            .session-card.full-width-card {
                flex-direction: column;
                align-items: flex-start;
            }
            .full-width-card .card-header {
                border-bottom: 1px solid #eee;
                margin-bottom: 15px;
                padding-bottom: 15px;
                width: 100%;
            }
            .full-width-card .card-details {
                border-left: none;
                padding-left: 0;
                width: 100%;
            }
        }
    </style>
</head>

<body id="top" <?php body_class(); ?>>

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
        // --- DATA DEFS ---
        $both_days = [['title' => 'Posters of Resistance: Visual Solidarity', 'desc' => 'Interactive journey through the visual language of the movement. Exhibition open all day.', 'type' => 'Parallel', 'time' => 'Ongoing (Day 01 & 02)', 'lead' => 'Artivism Studio']];

        $day1 = [
            ['title' => 'Collaborative Future for Community-Led Documentation', 'desc' => 'A foundational session exploring frameworks for community-driven justice and transitional justice mechanisms.', 'type' => 'Plenary', 'time' => '10:00 AM - 11:30 AM', 'lead' => 'Community Leaders'],
            ['title' => 'Documenting Tech-Facilitated Gender-Based Violence', 'desc' => '10 Things You Need to Know: Identifying and combating gender-based violence in digital spaces.', 'type' => 'Workshop', 'time' => '11:00 AM - 12:30 PM', 'lead' => 'Activate Rights'],
            ['title' => 'From Hindutva Watch to CSOH: Countering Organized Hate', 'desc' => 'Interactive workshop on researching and documenting organized hate speech using CSOH methodologies.', 'type' => 'Workshop', 'time' => '12:00 PM - 01:30 PM', 'lead' => 'Center for the Study of Organized Hate'],
            ['title' => 'Digital Security Clinic for Activists', 'desc' => 'Bring your devices. A hands-on clinic to help activists secure their phones and accounts.', 'type' => 'Workshop', 'time' => '01:00 PM - 03:00 PM', 'lead' => 'SecDev Team'],
            ['title' => 'July Persist: Building Community-Led Archiving & OSINT', 'desc' => 'Strategies for sustainable community archives and investigating protest history using open source intel.', 'type' => 'Ideation', 'time' => '02:30 PM - 04:00 PM', 'lead' => 'Netra News & BD Protest Archive'],
            ['title' => 'Protect the Messenger: Digital & Physical Safety', 'desc' => 'Essential digital hygiene and physical security protocols for journalists covering protests.', 'type' => 'Workshop', 'time' => '04:30 PM - 06:00 PM', 'lead' => 'BJIM']
        ];

        $day2 = [
            ['title' => 'Truth and Reconciliation: Healing and Accountability', 'desc' => 'Conversations on balancing the need for healing with the demand for accountability in post-conflict contexts.', 'type' => 'Dialogue', 'time' => '09:00 AM - 10:30 AM', 'lead' => 'Open Forum'],
            ['title' => 'Let Knowledge Be Free: Open-Source Principles', 'desc' => 'How open-source principles can support modern journalistic practice and collaborative information sharing.', 'type' => 'Workshop', 'time' => '10:00 AM - 11:30 AM', 'lead' => 'Korikath Knowledge'],
            ['title' => 'Art as Evidence: Legal Admissibility', 'desc' => 'Can a song, a poem, or a mural be used as evidence in court? Lawyers and artists discuss.', 'type' => 'Roundtable', 'time' => '11:00 AM - 12:30 PM', 'lead' => 'Legal Aid Network'],
            ['title' => 'Deadly in Disguise: Hidden Lethality of Pellet Guns', 'desc' => 'Analyzing the medical and social impact of "non-lethal" crowd control weapons like chhorra guli.', 'type' => 'Dialogue', 'time' => '12:00 PM - 01:30 PM', 'lead' => 'Zarif Rahman, Opsora Islam'],
            ['title' => 'The Ethics of Archiving Trauma', 'desc' => 'When does documentation become exploitation? A critical look at the ethics of collecting traumatic history.', 'type' => 'Plenary', 'time' => '01:00 PM - 02:30 PM', 'lead' => 'Academic Panel'],
            ['title' => 'Crisis Response Tech: Emerging Civic Technologies', 'desc' => 'Exploring challenges and opportunities for civic technologies in crisis response and coordination.', 'type' => 'Roundtable', 'time' => '02:30 PM - 04:00 PM', 'lead' => 'Jogajog'],
            ['title' => 'Beyond Disinformation: Countering Info Warfare', 'desc' => 'Understanding and countering industrial-scale information warfare targeting Bangladesh.', 'type' => 'Roundtable', 'time' => '04:30 PM - 06:00 PM', 'lead' => 'Fact Checkers Alliance'],
            ['title' => 'Closing Ceremony: The Way Forward', 'desc' => 'Reflecting on the two days of work and setting the agenda for the coming year.', 'type' => 'Plenary', 'time' => '06:30 PM - 08:00 PM', 'lead' => 'Organizing Committee']
        ];
        ?>

        <?php if (!empty($both_days)): ?>
        <div class="both-days-container reveal-on-scroll" id="schedule-grid">
            <h2 class="both-days-header"><span>Ongoing / Both Days</span></h2>
            <p class="both-days-desc">
                An immersive exhibition running parallel to the main sessions. Open for all attendees throughout the conclave to explore visual narratives and interactive art.
            </p>
            
            <?php foreach($both_days as $session): 
                 $badgeClass = 'badge-parallel'; 
            ?>
            <div class="session-card static-card full-width-card">
                <div class="card-header">
                    <div class="header-content">
                        <h3 class="card-title"><?php echo $session['title']; ?></h3>
                        <p class="card-subtitle"><?php echo $session['desc']; ?></p>
                    </div>
                    <div class="header-meta">
                        <span class="card-badge <?php echo $badgeClass; ?>"><?php echo $session['type']; ?></span>
                    </div>
                </div>
                <div class="card-details">
                    <div class="detail-row"><span class="detail-icon icon-time">⏰</span> <?php echo $session['time']; ?></div>
                    <div class="detail-row"><span class="detail-icon icon-room">📍</span> <span style="font-style: italic; opacity: 0.8;">Gallery / Hall</span></div>
                    <div class="detail-row"><span class="detail-icon icon-user">👤</span> <?php echo $session['lead']; ?></div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>


        <div class="schedule-layout">
            
            <div class="day-column">
                <div class="day-header header-d1 reveal-on-scroll">
                    <h2>DAY 01</h2>
                    <span class="date-sub">January 26, 2026</span>
                    <p class="day-desc">
                        Focus: <strong>Tools & Protection</strong>. Practical workshops, ideation sessions, and clinics designed to equip activists and journalists with essential skills for documentation.
                    </p>
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
                                <p class="card-subtitle"><?php echo $session['desc']; ?></p>
                            </div>
                            <div class="header-meta">
                                <span class="card-badge <?php echo $badgeClass; ?>"><?php echo $session['type']; ?></span>
                            </div>
                        </div>
                        <div class="card-details">
                            <div class="detail-row"><span class="detail-icon icon-time">⏰</span> <?php echo $session['time']; ?></div>
                            <div class="detail-row"><span class="detail-icon icon-room">📍</span> <span style="font-style: italic; opacity: 0.8;">Room: TBA</span></div>
                            <div class="detail-row"><span class="detail-icon icon-user">👤</span> <?php echo $session['lead']; ?></div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="day-column">
                <div class="day-header header-d2 reveal-on-scroll">
                    <h2>DAY 02</h2>
                    <span class="date-sub">January 27, 2026</span>
                    <p class="day-desc">
                        Focus: <strong>Justice & Dialogue</strong>. Strategic roundtables, critical dialogues, and plenaries shaping the future of legal frameworks and reconciliation.
                    </p>
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
                                <p class="card-subtitle"><?php echo $session['desc']; ?></p>
                            </div>
                            <div class="header-meta">
                                <span class="card-badge <?php echo $badgeClass; ?>"><?php echo $session['type']; ?></span>
                            </div>
                        </div>
                        <div class="card-details">
                            <div class="detail-row"><span class="detail-icon icon-time">⏰</span> <?php echo $session['time']; ?></div>
                            <div class="detail-row"><span class="detail-icon icon-room">📍</span> <span style="font-style: italic; opacity: 0.8;">Room: TBA</span></div>
                            <div class="detail-row"><span class="detail-icon icon-user">👤</span> <?php echo $session['lead']; ?></div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

        </div> 
    </div>

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
    });
    </script>
</body>
</html>