<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Archive & Resist Conclave 2026</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>?v=<?php echo time(); ?>">

    <?php wp_head(); ?>

    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Event",
  "name": "Archive & Resist Conclave 2026",
  "description": "Collaborative Future for Community-Led Human Rights Documentation. A two-day conclave focused on archiving, resistance, and justice.",
  "startDate": "2026-01-26T10:00",
  "endDate": "2026-01-27T20:00",
  "eventStatus": "https://schema.org/EventScheduled",
  "eventAttendanceMode": "https://schema.org/OfflineEventAttendanceMode",
  "location": {
    "@type": "Place",
    "name": "BRAC University",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "66 Mohakhali",
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
    "url": "https://activaterights.org"
  },
  "offers": {
    "@type": "Offer",
    "url": "https://forms.gle/5znCihw4n17QiQnN8",
    "price": "0",
    "priceCurrency": "BDT",
    "availability": "https://schema.org/InStock",
    "validFrom": "2025-10-01"
  },
  "performer": {
    "@type": "Organization",
    "name": "Bangladesh Protest Archive"
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

            <h2 class="masked-headline">
                THE STRUGGLE OF MAN<br>
                AGAINST POWER IS<br>
                THE STRUGGLE OF MEMORY<br>
                AGAINST FORGETTING
            </h2>

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
                <button class="accordion-header">
                    <span class="acc-title">CO- LEARNING SPACE</span>
                    <span class="acc-icon">+</span>
                </button>
                <div class="accordion-content">
                    <p>Create a shared learning space for young people, practitioners, and human rights defenders to explore, practice, and reflect on human rights documentation and community-led investigation and more, while building a shared vision for protecting human rights and strengthening democratic space.</p>
                </div>
            </div>

            <div class="accordion-item">
                <button class="accordion-header">
                    <span class="acc-title">CRITICAL DISCUSSIONS</span>
                    <span class="acc-icon">+</span>
                </button>
                <div class="accordion-content">
                    <p>Facilitate critical discussions at the intersection of transitional justice and human rights documentation, grounded in trauma-informed and care-based approaches. These conversations will also engage with digital rights, shared standards for community-led archiving and ethical OSINT, and emerging technologies, including both the threats and opportunities that AI presents for evidence-ready human rights documentation.</p>
                </div>
            </div>

            <div class="accordion-item">
                <button class="accordion-header">
                    <span class="acc-title">REGIONAL SOLIDARITY</span>
                    <span class="acc-icon">+</span>
                </button>
                <div class="accordion-content">
                    <p>Strengthen cross-border regional solidarity and exchange by bringing together practitioners and human rights defenders from across the Asia-Pacific region to share strategies, tools, and resources. The goal is to build an ecosystem of resistance, memory work, and survivor-centric, justice-focused documentation, particularly within digital spaces. This includes creating an intergenerational space for dialogue between experienced practitioners and emerging defenders.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="resistance-banner">
        <div class="marquee-track">
            <span class="resistance-text-item">JOIN THE CRITICAL DISCUSSION ON EVIDENCE-READY DOCUMENTATION, TRANSITIONAL JUSTICE, AND RECONCILIATION.</span>
            <span class="resistance-text-item">JOIN THE CRITICAL DISCUSSION ON EVIDENCE-READY DOCUMENTATION, TRANSITIONAL JUSTICE, AND RECONCILIATION.</span>
            <span class="resistance-text-item">JOIN THE CRITICAL DISCUSSION ON EVIDENCE-READY DOCUMENTATION, TRANSITIONAL JUSTICE, AND RECONCILIATION.</span>
            <span class="resistance-text-item">JOIN THE CRITICAL DISCUSSION ON EVIDENCE-READY DOCUMENTATION, TRANSITIONAL JUSTICE, AND RECONCILIATION.</span>
            <span class="resistance-text-item">JOIN THE CRITICAL DISCUSSION ON EVIDENCE-READY DOCUMENTATION, TRANSITIONAL JUSTICE, AND RECONCILIATION.</span>
            <span class="resistance-text-item">JOIN THE CRITICAL DISCUSSION ON EVIDENCE-READY DOCUMENTATION, TRANSITIONAL JUSTICE, AND RECONCILIATION.</span>
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

            <div class="speakers-grid" id="speakersGrid">


                <div class="speaker-card">
                    <div class="speaker-img-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/images/avatar/romana.jpg" alt="Romana Schweiger" class="speaker-img"></div>
                    <h3 class="speaker-name">Romana Schweiger</h3>
                    <p class="speaker-role">Senior Rule of Law, Justice, and Security Advisor</p>
                    <p class="speaker-org">UNDP</p>
                </div>

                <!-- <div class="speaker-card">
                    <div class="speaker-img-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/images/avatar/null.png" alt="JinBo Choi" class="speaker-img"></div>
                    <h3 class="speaker-name">JinBo Choi</h3>
                    <p class="speaker-role">Senior Rule of Law, Justice, and Security Advisor</p>
                    <p class="speaker-org">UNDP</p>
                </div> -->

                <!--                 <div class="speaker-card">
                    <div class="speaker-img-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/images/avatar/majid.png" alt="Faisal Bin Majid" class="speaker-img"></div>
                    <h3 class="speaker-name">Faisal Bin Majid</h3>
                    <p class="speaker-role">Project Manager, Partnership for a Tolerant, Inclusive Bangladesh</p>
                    <p class="speaker-org">UNDP</p>
                </div> -->

                <div class="speaker-card">
                    <div class="speaker-img-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/images/avatar/kartika.jpg" alt="Kartika Pratiwi" class="speaker-img"></div>
                    <h3 class="speaker-name">Kartika Pratiwi</h3>
                    <p class="speaker-role">Program Lead (Asia-Pacific)</p>
                    <p class="speaker-org">WITNESS</p>
                </div>

                <div class="speaker-card">
                    <div class="speaker-img-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/images/avatar/georgia.png" alt="Georgia Edwards" class="speaker-img"></div>
                    <h3 class="speaker-name">Georgia Edwards</h3>
                    <p class="speaker-role">Coordinator, Evidence & Investigation</p>
                    <p class="speaker-org">WITNESS</p>
                </div>

                <div class="speaker-card">
                    <div class="speaker-img-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/images/avatar/yovonne.png" alt="Yvonne Ng" class="speaker-img"></div>
                    <h3 class="speaker-name">Yvonne Ng</h3>
                    <p class="speaker-role">Senior Program Manager of the Archives</p>
                    <p class="speaker-org">WITNESS</p>
                </div>

                <div class="speaker-card">
                    <div class="speaker-img-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/images/avatar/huey.png" alt="Huey Shin Choo" class="speaker-img"></div>
                    <h3 class="speaker-name">Huey Shin Choo</h3>
                    <p class="speaker-role">Program Coordinator</p>
                    <p class="speaker-org">WITNESS</p>
                </div>

                <div class="speaker-card">
                    <div class="speaker-img-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/images/avatar/prubhu.jpg" alt="Prubhu Dolma" class="speaker-img"></div>
                    <h3 class="speaker-name">Prubhu Dolma</h3>
                    <p class="speaker-role">Programme Officer</p>
                    <p class="speaker-org">HURIDOCS</p>
                </div>

                <div class="speaker-card">
                    <div class="speaker-img-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/images/avatar/hyebin.jpg" alt="Hyebin Bina Jeon" class="speaker-img"></div>
                    <h3 class="speaker-name">Hyebin Bina Jeon</h3>
                    <p class="speaker-role">Programme Officer</p>
                    <p class="speaker-org">HURIDOCS</p>
                </div>

                <div class="speaker-card">
                    <div class="speaker-img-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/images/avatar/raqib.png" alt="Raqib Hameed Naik" class="speaker-img"></div>
                    <h3 class="speaker-name">Raqib Hameed Naik</h3>
                    <p class="speaker-role">Executive Director</p>
                    <p class="speaker-org">Center for the Study of Organized Hate</p>
                </div>

                <div class="speaker-card">
                    <div class="speaker-img-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/images/avatar/nilafdeen.png" alt="Ammaarah Nilafdeen" class="speaker-img"></div>
                    <h3 class="speaker-name">Ammaarah Nilafdeen</h3>
                    <p class="speaker-role">Researcher</p>
                    <p class="speaker-org">Center for the Study of Organized Hate</p>
                </div>

                <div class="speaker-card">
                    <div class="speaker-img-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/images/avatar/nabila.png" alt="Dr. Nabila Idris" class="speaker-img"></div>
                    <h3 class="speaker-name">Dr. Nabila Idris</h3>
                    <p class="speaker-role">Member</p>
                    <p class="speaker-org">Commission of Inquiry on Enforced Disappearances</p>
                </div>

                <div class="speaker-card">
                    <div class="speaker-img-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/images/avatar/tasneem khalil.png" alt="Tasneem Khalil" class="speaker-img"></div>
                    <h3 class="speaker-name">Tasneem Khalil</h3>
                    <p class="speaker-role">Editor in Chief</p>
                    <p class="speaker-org">Netra News</p>
                </div>

                <div class="speaker-card">
                    <div class="speaker-img-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/images/avatar/iktisad.png" alt="Ikhtisad Ahmed" class="speaker-img"></div>
                    <h3 class="speaker-name">Ikhtisad Ahmed</h3>
                    <p class="speaker-role">Managing Editor</p>
                    <p class="speaker-org">Netra News</p>
                </div>


                <div class="speaker-card">
                    <div class="speaker-img-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/images/avatar/miraj.png" alt="Miraj Ahmed Chowdhury" class="speaker-img"></div>
                    <h3 class="speaker-name">Miraj Ahmed Chowdhury</h3>
                    <p class="speaker-role">Managing Director</p>
                    <p class="speaker-org">Digitally Right</p>
                </div>


                <div class="speaker-card">
                    <div class="speaker-img-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/images/avatar/arul.png" alt="Arul Prakkash Sinappan" class="speaker-img"></div>
                    <h3 class="speaker-name">Arul Prakkash</h3>
                    <p class="speaker-role">Video Advocacy and Technology Expert</p>
                    <p class="speaker-org">Independent</p>
                </div>

                <div class="speaker-card">
                    <div class="speaker-img-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/images/avatar/shoeb dp.png" alt="Shoeb Abdullah" class="speaker-img"></div>
                    <h3 class="speaker-name">Shoeb Abdullah</h3>
                    <p class="speaker-role">Co-Founder</p>
                    <p class="speaker-org">Activate Rights</p>
                </div>

                <div class="speaker-card">
                    <div class="speaker-img-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/images/avatar/minhaj.jpg" alt="Minhaj Aman" class="speaker-img"></div>
                    <h3 class="speaker-name">Minhaj Aman</h3>
                    <p class="speaker-role">Co-Founder, Research and Policy Lead</p>
                    <p class="speaker-org">Activate Rights</p>
                </div>
				
				<div class="speaker-card">
                    <div class="speaker-img-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/images/avatar/maruf.png" alt="Dewan Maruf Ahmed" class="speaker-img"></div>
                    <h3 class="speaker-name">Dewan Maruf Ahmed</h3>
                    <p class="speaker-role">Program and Strategy Lead</p>
                    <p class="speaker-org">Activate Rights</p>
                </div>
				
                <div class="speaker-card">
                    <div class="speaker-img-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/images/avatar/mazed.png" alt="Mohammad Ali Mazed" class="speaker-img"></div>
                    <h3 class="speaker-name">Mohammad Ali Mazed</h3>
                    <p class="speaker-role">Member Secretary</p>
                    <p class="speaker-org">Bangladeshi Journalists in International Media</p>
                </div>

                <div class="speaker-card">
                    <div class="speaker-img-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/images/avatar/sam jahan.png" alt="Sam Jahan" class="speaker-img"></div>
                    <h3 class="speaker-name">Sam Jahan</h3>
                    <p class="speaker-role">Convener</p>
                    <p class="speaker-org">Bangladeshi Journalists in International Media</p>
                </div>

                <div class="speaker-card">
                    <div class="speaker-img-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/images/avatar/ayesha.png" alt="Ayesha Kabir" class="speaker-img"></div>
                    <h3 class="speaker-name">Ayesha Kabir</h3>
                    <p class="speaker-role">Head of English Web</p>
                    <p class="speaker-org">Prothom Alo</p>
                </div>

                <div class="speaker-card">
                    <div class="speaker-img-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/images/avatar/zyma.png" alt="Zyma Islam" class="speaker-img"></div>
                    <h3 class="speaker-name">Zyma Islam</h3>
                    <p class="speaker-role">Senior Reporter</p>
                    <p class="speaker-org">The Daily Star</p>
                </div>

                <div class="speaker-card">
                    <div class="speaker-img-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/images/avatar/shishir.png" alt="Qadaruddin Shishir" class="speaker-img"></div>
                    <h3 class="speaker-name">Qadaruddin Shishir</h3>
                    <p class="speaker-role">Editor</p>
                    <p class="speaker-org">The Dissent</p>
                </div>

                <!--         

                <div class="speaker-card">
                    <div class="speaker-img-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/images/avatar/placeholder.png" alt="Subinoy Mustofi Eron" class="speaker-img"></div>
                    <h3 class="speaker-name">Subinoy Mustofi Eron</h3>
                    <p class="speaker-role">Archivist</p>
                    <p class="speaker-org">Netra News</p>
                </div>

                <div class="speaker-card">
                    <div class="speaker-img-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/images/avatar/placeholder.png" alt="Aaqib Shatil" class="speaker-img"></div>
                    <h3 class="speaker-name">Aaqib Shatil</h3>
                    <p class="speaker-role">Researcher</p>
                    <p class="speaker-org">BD Protest Archive</p>
                </div>

                <div class="speaker-card">
                    <div class="speaker-img-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/images/avatar/placeholder.png" alt="Iffat Joye" class="speaker-img"></div>
                    <h3 class="speaker-name">Iffat Joye</h3>
                    <p class="speaker-role">Coordinator</p>
                    <p class="speaker-org">Netra News</p>
                </div>

                <div class="speaker-card">
                    <div class="speaker-img-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/images/avatar/placeholder.png" alt="M. Rafiul Bahar Rafi" class="speaker-img"></div>
                    <h3 class="speaker-name">M. Rafiul Bahar Rafi</h3>
                    <p class="speaker-role">Founder</p>
                    <p class="speaker-org">Korikath Knowledge</p>
                </div>

                <div class="speaker-card">
                    <div class="speaker-img-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/images/avatar/placeholder.png" alt="Zarif Rahman" class="speaker-img"></div>
                    <h3 class="speaker-name">Zarif Rahman</h3>
                    <p class="speaker-role">Researcher</p>
                    <p class="speaker-org">Independent</p>
                </div>

                <div class="speaker-card">
                    <div class="speaker-img-wrapper"><img src="<?php echo get_template_directory_uri(); ?>/images/avatar/placeholder.png" alt="Chowdhury Isfatul Karim" class="speaker-img"></div>
                    <h3 class="speaker-name">Chowdhury Isfatul Karim</h3>
                    <p class="speaker-role">Tech Lead</p>
                    <p class="speaker-org">Jogajog</p>
                </div>
 -->
            </div>

            <button id="toggleSpeakers" class="btn-view-speakers">
                View Full Speaker List ↓
            </button>

        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const speakers = document.querySelectorAll('.speaker-card');
                const btn = document.getElementById('toggleSpeakers');
                const limit = 16;
                let isExpanded = false; // Track state

                // 1. Initially hide speakers > 16
                if (speakers.length > limit) {
                    for (let i = limit; i < speakers.length; i++) {
                        speakers[i].style.display = 'none';
                    }
                } else {
                    if (btn) btn.style.display = 'none';
                }

                // 2. Handle Click (Toggle Logic)
                if (btn) {
                    btn.addEventListener('click', function() {
                        if (!isExpanded) {
                            // EXPAND: Show all
                            for (let i = limit; i < speakers.length; i++) {
                                speakers[i].style.display = 'flex'; // Reset to flex
                                // Animation
                                speakers[i].style.opacity = '0';
                                speakers[i].style.transform = 'translateY(20px)';
                                speakers[i].style.transition = 'opacity 0.5s ease, transform 0.5s ease';
                                setTimeout(() => {
                                    speakers[i].style.opacity = '1';
                                    speakers[i].style.transform = 'translateY(0)';
                                }, 50);
                            }
                            this.textContent = "Show Less ↑";
                            isExpanded = true;
                        } else {
                            // COLLAPSE: Hide extras
                            for (let i = limit; i < speakers.length; i++) {
                                speakers[i].style.display = 'none';
                            }
                            this.textContent = "View Full Speaker List ↓";

                            // Smooth scroll back to button area
                            this.scrollIntoView({
                                behavior: "smooth",
                                block: "center"
                            });

                            isExpanded = false;
                        }
                    });
                }
            });
        </script>
    </section>
    <section id="sessions" class="sessions-section">

        <div class="sessions-container">
            <div class="sessions-header">
                <span class="sessions-tag">JOIN US LIVE</span>
                <h2 class="sessions-title">The Schedule</h2>

                <!-- <p class="sessions-desc">
                    Glides automatically.<br>
                    <strong>Desktop:</strong> Hover to pause. <strong>Mobile:</strong> Swipe to navigate.
                </p> -->

                <a href="<?php echo site_url('/sessions'); ?>" class="link-full-schedule" target="_blank" rel="noopener noreferrer">View Full Schedule &rarr;</a>

            </div>

            <div class="sessions-slider-wrapper">

                <button id="slidePrev" class="slider-nav-btn prev-btn" aria-label="Previous">←</button>

                <div class="sessions-track" id="sessionsTrack">
                    <?php
                    // DATA: Cinema First, Posters Last
                    $sessions = [
                        // --- ONGOING (TOP) ---
                        [
                            'title' => 'Resistance Cinema Fest',
                            'desc'  => 'Screening of documentaries and short films capturing the spirit of resistance.',
                            'type'  => 'Parallel',
                            'date'  => 'Jan 26-27',
                            'time'  => 'Ongoing',
                            'lead'  => 'Bangladesh Protest Archive',
                            'org'   => 'Bangladesh Protest Archive'
                        ],

                        // --- DAY 01 (JAN 26) ---
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
                            'title' => 'Countering Organized Hate through Research & Documentation',
                            'desc'  => 'Interactive workshop on researching and documenting organized hate speech using CSOH methodologies.',
                            'type'  => 'Workshop',
                            'date'  => 'Jan 26',
                            'time'  => '02:00 PM',
                            'lead'  => 'Ammaarah Nilafdeen, Raqib Hameed Naik',
                            'org'   => 'Center for the Study of Organized Hate'
                        ],
                        [
                            'title' => 'July Persist: How to build Community-Led Archiving and OSINT Investigation in Bangladesh',
                            'desc'  => 'Strategies for sustainable community archives and investigating protest history using open source intel.',
                            'type'  => 'Ideation',
                            'date'  => 'Jan 26',
                            'time'  => '02:00 PM',
                            'lead'  => ' Shoeb Abdullah, Subinoy Mustofi Eron, Aaqib Shatil, Iffat Joye',
                            'org'   => 'Netra News, Bangladesh Protest Archive'
                        ],
                        [
                            'title' => 'Preserving the History: Coverage, Safety, and Documentation of Bangladesh General Election-2026',
                            'desc'  => 'A critical dialogue on the role of media and safety protocols during the upcoming general election.',
                            'type'  => 'Dialogue',
                            'date'  => 'Jan 26',
                            'time'  => '04:00 PM',
                            'lead'  => 'Mohammad Ali Mazed, Sam Jahan',
                            'org'   => 'Bangladeshi Journalists in International Media'
                        ],

                        // --- DAY 02 (JAN 27) ---
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
                            'lead'  => 'JRA, July Record',
                            'org'   => 'JRA, July Record'
                        ],
                        [
                            'title' => 'Announcing Archive & Resist Fund',
                            'desc'  => 'Introducing the Archive & Resist Fund to support documentation, resistance, and long-term civic memory initiatives.',
                            'type'  => 'Invitation Only',
                            'date'  => 'Jan 27',
                            'time'  => '04:00 PM',
                            'lead'  => 'Organizing Committee',
                            'org'   => 'Organizing Committee'
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

                        // --- ONGOING (BOTTOM) ---
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

                    // LOOP TWICE
                    for ($i = 0; $i < 2; $i++) {
                        foreach ($sessions as $session):
                            $badgeClass = 'badge-workshop';
                            $t = strtolower($session['type']);
                            if (strpos($t, 'plenary') !== false) $badgeClass = 'badge-plenary';
                            elseif (strpos($t, 'parallel') !== false) $badgeClass = 'badge-parallel';
                            elseif (strpos($t, 'ideation') !== false) $badgeClass = 'badge-ideation';
                            elseif (strpos($t, 'dialogue') !== false) $badgeClass = 'badge-dialogue';
                            elseif (strpos($t, 'roundtable') !== false) $badgeClass = 'badge-roundtable';

                            $dayLabel = (strpos($session['date'], 'Jan 26') !== false) ? 'DAY 01' : 'DAY 02';
                            if (strpos($session['date'], 'Jan 26-27') !== false) $dayLabel = 'BOTH';
                            $dayClass = ($dayLabel === 'DAY 01') ? 'day-one' : 'day-two';
                    ?>

                            <div class="session-card">
                                <div class="card-header">
                                    <div class="header-content">
                                        <h3 class="card-title"><?php echo $session['title']; ?></h3>
                                        <p class="card-subtitle" style="color: #ff4d4d; font-weight: 700; text-transform: uppercase; margin-bottom: 5px;"><?php echo $session['org']; ?></p>
                                    </div>
                                    <div class="header-meta">
                                        <span class="card-badge <?php echo $badgeClass; ?>"><?php echo $session['type']; ?></span>
                                        <span class="day-label <?php echo $dayClass; ?>"><?php echo $dayLabel; ?></span>
                                    </div>
                                </div>

                                <div class="card-details">
                                    <div class="detail-row"><span class="detail-icon icon-cal">📅</span> <?php echo $session['date']; ?></div>
                                    <div class="detail-row"><span class="detail-icon icon-time">⏰</span> <?php echo $session['time']; ?></div>
                                    <div class="detail-row"><span class="detail-icon icon-room">📍</span> Venue TBA</div>
                                    <div class="detail-row"><span class="detail-icon icon-user">👤</span> <?php echo $session['lead']; ?></div>
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

                                    <a href="<?php echo site_url('/sessions'); ?>" class="btn-visit-page">
                                        GO TO SESSIONS PAGE &rarr;
                                    </a>
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

    <section class="countdown-section">
    <div class="container">
        <h2 class="countdown-title">EVENT STARTS IN</h2>
        
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
    <section class="partners-section">
        <div class="container">
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
                            style="height: 38px;">
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
                        style="height: 100px;">
                </div>
            </div>

        </div>
    </section>

    <section class="cta-section volunteer-section">
        <div class="container">
            <h2 class="cta-title">JOIN AS VOLUNTEER</h2>

            <p class="cta-text">
                We are looking for dedicated volunteers to support the Conclave.
                If you are passionate about human rights, archiving, and community work,
                join us in making this event a success.
            </p>

            <a href="https://forms.gle/84eqJTewPjg2H12L8" target="_blank" class="btn-cta-white">
                APPLY TO VOLUNTEER
            </a>
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
    <section class="infinite-partners-section">
        <div class="container">
            <h2 class="partners-slider-title">SESSION CO-HOSTS</h2>

            <div class="partners-slider-wrapper">
                <div class="partners-track" id="partnerTickerTrack">
                    <?php
                    // 1. Define Logos
                    $logos = [
                        ['src' => '/images/copartner/Kashful Foundation.png', 'alt' => 'Kashful Foundation'],
                        ['src' => '/images/copartner/sapran logo.png', 'alt' => 'Sapran'],
                        ['src' => '/images/copartner/jogajog.png', 'alt' => 'Jogajog'],
                        ['src' => '/images/copartner/Kashful Foundation.png', 'alt' => 'Kashful Foundation'],
                        ['src' => '/images/copartner/sapran logo.png', 'alt' => 'Sapran'],
                        ['src' => '/images/copartner/jogajog.png', 'alt' => 'Jogajog'],
                    ];

                    // 2. Loop 6 times to ensure the track is very long
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

    // ==========================================
    // 1. GENERAL UI (Accordion, etc.)
    // ==========================================
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

    // Toggle Details Button
    document.querySelectorAll('.btn-toggle-details').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            const card = this.closest('.session-card');
            const isOpen = card.classList.contains('open');
            if (!isOpen) {
                card.classList.add('open');
                if (this.tagName === 'BUTTON') this.textContent = 'Close';
            } else {
                card.classList.remove('open');
                if (this.tagName === 'BUTTON') this.textContent = 'View Details';
            }
        });
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


    // ==========================================
    // 2. MAIN SESSIONS SLIDER (The Big One)
    // ==========================================
    const track = document.getElementById('sessionsTrack');
    const prevBtn = document.getElementById('slidePrev');
    const nextBtn = document.getElementById('slideNext');

    if (track) {
        let animId;
        let isPaused = false;
        let speed = 1.0;

        function sessionScroll() {
            if (!isPaused) {
                track.scrollLeft += speed;
                if (track.scrollLeft >= (track.scrollWidth / 2)) {
                    track.scrollLeft = 0;
                }
            }
            animId = requestAnimationFrame(sessionScroll);
        }
        animId = requestAnimationFrame(sessionScroll);

        track.addEventListener('mouseenter', () => isPaused = true);
        track.addEventListener('mouseleave', () => isPaused = false);
        track.addEventListener('touchstart', () => isPaused = true);
        track.addEventListener('touchend', () => isPaused = false);

        if (prevBtn && nextBtn) {
            [prevBtn, nextBtn].forEach(btn => {
                btn.addEventListener('mouseenter', () => isPaused = true);
                btn.addEventListener('mouseleave', () => isPaused = false);
            });
            prevBtn.addEventListener('click', () => track.scrollBy({
                left: -380,
                behavior: 'smooth'
            }));
            nextBtn.addEventListener('click', () => track.scrollBy({
                left: 380,
                behavior: 'smooth'
            }));
        }
    }


    // ==========================================
    // 3. PARTNER LOGO SLIDER (The New One)
    // ==========================================
    const partnerTrack = document.getElementById('partnerTickerTrack');

    if (partnerTrack) {
        let pAnimId;
        let pPaused = false;
        let pSpeed = 0.8; // Speed of logos

        function partnerScroll() {
            if (!pPaused) {
                partnerTrack.scrollLeft += pSpeed;

                // Reset Logic
                if (partnerTrack.scrollLeft >= (partnerTrack.scrollWidth / 2)) {
                    partnerTrack.scrollLeft = 0;
                }
            }
            pAnimId = requestAnimationFrame(partnerScroll);
        }
        // Start
        pAnimId = requestAnimationFrame(partnerScroll);

        // Pause on Hover
        partnerTrack.addEventListener('mouseenter', () => pPaused = true);
        partnerTrack.addEventListener('mouseleave', () => pPaused = false);
        partnerTrack.addEventListener('touchstart', () => pPaused = true);
        partnerTrack.addEventListener('touchend', () => pPaused = false);
    }


    // ==========================================
    // 4. COUNTDOWN TIMER
    // ==========================================
    const countdownTimer = document.getElementById('countdownTimer');
    
    if (countdownTimer) {
        // Set the event date: January 26, 2026, 09:00 AM (Bangladesh Time)
        const eventDate = new Date('2026-01-26T09:00:00+06:00').getTime();

        function updateCountdown() {
            const now = new Date().getTime();
            const distance = eventDate - now;
            
            // Time calculations
            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);
            
            // Update DOM elements
            const daysEl = document.getElementById('days');
            const hoursEl = document.getElementById('hours');
            const minutesEl = document.getElementById('minutes');
            const secondsEl = document.getElementById('seconds');
            
            if (daysEl) daysEl.textContent = String(days).padStart(2, '0');
            if (hoursEl) hoursEl.textContent = String(hours).padStart(2, '0');
            if (minutesEl) minutesEl.textContent = String(minutes).padStart(2, '0');
            if (secondsEl) secondsEl.textContent = String(seconds).padStart(2, '0');
            
            // If countdown is finished
            if (distance < 0) {
                clearInterval(countdownInterval);
                countdownTimer.innerHTML = '<h3 style="color: #ffffff; font-family: var(--font-display); font-size: 3rem; font-weight: 900; margin: 0; text-transform: uppercase;">EVENT IS LIVE NOW!</h3>';
            }
        }
        
        // Update immediately and then every second
        updateCountdown();
        const countdownInterval = setInterval(updateCountdown, 1000);
    }


    // ==========================================
    // 5. SPEAKERS TOGGLE (Show More/Less)
    // ==========================================
    const speakersGrid = document.getElementById('speakersGrid');
    const toggleSpeakersBtn = document.getElementById('toggleSpeakers');
    
    if (speakersGrid && toggleSpeakersBtn) {
        const speakers = speakersGrid.querySelectorAll('.speaker-card');
        const limit = 16;
        let isExpanded = false;

        // Initially hide speakers beyond the limit
        if (speakers.length > limit) {
            for (let i = limit; i < speakers.length; i++) {
                speakers[i].style.display = 'none';
            }
        } else {
            toggleSpeakersBtn.style.display = 'none';
        }

        // Toggle button click handler
        toggleSpeakersBtn.addEventListener('click', function() {
            if (!isExpanded) {
                // EXPAND: Show all speakers
                for (let i = limit; i < speakers.length; i++) {
                    speakers[i].style.display = 'flex';
                    speakers[i].style.opacity = '0';
                    speakers[i].style.transform = 'translateY(20px)';
                    speakers[i].style.transition = 'opacity 0.5s ease, transform 0.5s ease';
                    
                    setTimeout(() => {
                        speakers[i].style.opacity = '1';
                        speakers[i].style.transform = 'translateY(0)';
                    }, 50);
                }
                this.textContent = 'Show Less ↑';
                isExpanded = true;
            } else {
                // COLLAPSE: Hide extra speakers
                for (let i = limit; i < speakers.length; i++) {
                    speakers[i].style.display = 'none';
                }
                this.textContent = 'View Full Speaker List ↓';
                
                // Smooth scroll back to button area
                this.scrollIntoView({
                    behavior: 'smooth',
                    block: 'center'
                });
                
                isExpanded = false;
            }
        });
    }

});
</script>
    <?php wp_footer(); ?>
</body>

</html>