<?php
/*
Template Name: FAQ Page
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ - Archive & Resist Conclave 2025</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

    <style>
        html { scroll-behavior: smooth; }
        .footer-logo-link { text-decoration: none; display: inline-block; }
        .footer-logo-link:hover { opacity: 0.8; }
        .faq-link { color: var(--c-resist); text-decoration: underline; font-weight: 700; }
        .faq-link:hover { color: var(--c-archive); }
        .faq-subtext { margin-top: 10px; font-family: 'Inter', sans-serif; font-weight: 500; font-size: 1.2rem; color: var(--black); line-height: 1.4; }
    </style>

    <?php wp_head(); ?>
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
                <a href="<?php echo site_url('/#about'); ?>">About</a>
                <a href="<?php echo site_url('/#sessions'); ?>">Sessions</a>
                <a href="https://forms.gle/5znCihw4n17QiQnN8" target="_blank" rel="noopener noreferrer">Registration</a>
                <a href="<?php echo site_url('/faq'); ?>" class="active">FAQ</a>
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

    </div>

    <section class="faq-section" id="faq">
        <div class="container">

            <div class="faq-header">
                <h2 class="faq-main-title text-red">
                    FREQUENTLY<br>ASKED QUESTIONS
                </h2>
                <p class="faq-subtext">Check this page regularly for updates on the Conclave.</p>
            </div>

            <div class="faq-wrapper">

                <div class="faq-item">
                    <button class="faq-question">
                        <span class="faq-q-text">What is the Archive & Resist Conclave?</span>
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-answer">
                        <p>The Archive & Resist Conclave is an unconference-style gathering where community members, practitioners, archivists, journalists, researchers, and national and international experts come together to share knowledge, resources, memories, solidarity, and strategies for justice.</p>
                        <p>This year, the conclave focuses on transitional justice in Bangladesh, exploring how documentation, archiving, and community-led investigations can support truth, accountability, and democratic futures. Sessions, workshops, and collaborative activities will revolve around three core themes:</p>
                        <p><strong>1️⃣ Human Rights Documentation & Evidence-Ready Archiving</strong><br>We see archiving not only as documentation, but as a meaningful process that preserves memory, strengthens accountability, and supports justice.</p>
                        <p><strong>2️⃣ Community-Led Investigations & OSINT</strong><br>Experts will lead sessions on practices, tools, and technologies for community-driven investigation, including human rights documentation, digital safety, journalist protection, and mental health support.</p>
                        <p><strong>3️⃣ Building a Collaborative Future</strong><br>We aim to create a space for cross-border solidarity, dialogue, and resource-sharing—cultivating knowledge, care, and collective strength for democratic futures in times of transition.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">
                        <span class="faq-q-text">Who is Organizing This?</span>
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-answer">
                        <p>The Conclave will be co-convened by <strong>Activate Rights</strong>, <strong>Bangladesh Protest Archive</strong>, and <strong>WITNESS</strong>, with support from <strong style="color: var(--black); text-decoration: underline;">UNDP Bangladesh</strong> and the <strong>Archive & Resist Fund</strong>.</p>
                        <p>We are collaborating with Netra News, Bangladeshi Journalists in International Media (BJIM), and Surge Bangladesh. Co-hosts include: SAPRAN, a rights-based think tank.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">
                        <span class="faq-q-text">What is an Unconference?</span>
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-answer">
                        <p>An unconference is a community- and participant-driven event where attendees actively shape the agenda. Unlike traditional conferences with fixed speakers and panels, unconferences center collaborative, peer-to-peer learning.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">
                        <span class="faq-q-text">When and where is the Conclave taking place?</span>
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-answer">
                        <p>The conclave will take place <strong>24–25 January 2025</strong> in Dhaka, Bangladesh.</p>
                        <p>Final venue details will be shared with confirmed participants.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">
                        <span class="faq-q-text">Who will be participating?</span>
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-answer">
                        <p>The Archive & Resist Conclave welcomes anyone interested in Digital rights, Archiving & memory work, Human rights documentation & investigation, and Transitional justice.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">
                        <span class="faq-q-text">How can I participate? Are there fees?</span>
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-answer">
                        <p>Only registered participants may attend.</p>
                        <p><a href="https://forms.gle/5znCihw4n17QiQnN8" target="_blank" class="faq-link">To express interest, please complete the registration form.</a></p>
                        <p>There is no registration fee, but participation slots are limited.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">
                        <span class="faq-q-text">Travel & Accommodation Information</span>
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-answer">
                        <p><strong>For local participants:</strong> You only need to register to attend.</p>
                        <p><strong>For international participants:</strong> Participants are responsible for arranging their own travel. Please contact the relevant Bangladeshi embassy or consulate regarding Visas.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">
                        <span class="faq-q-text">What protocols will be followed?</span>
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-answer">
                        <p><strong>Code of Conduct:</strong> Archive & Resist Conclave maintains a zero-tolerance policy toward harassment.</p>
                        <p><strong>Dress code:</strong> Whatever makes you comfortable. This is a casual, informal event.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">
                        <span class="faq-q-text">Where can I get updates?</span>
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-answer">
                        <p>Visit the Activate Rights website and follow our social media accounts for announcements and updates.</p>
                    </div>
                </div>

                 <div class="faq-item">
                    <button class="faq-question">
                        <span class="faq-q-text">Who do I contact for partnerships or sponsorships?</span>
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-answer">
                        <p>We welcome partners interested in supporting through funding, collaboration, media coverage, or volunteering.</p>
                        <p>📧 Sponsorships, funding & media: info@activaterights.org<br>
                            📧 Volunteering: info@activaterights.org</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">
                        <span class="faq-q-text">Can I join online?</span>
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-answer">
                        <p>No, there will be no option for online participation due to resource constraints. Sessions will also not be recorded.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">
                        <span class="faq-q-text">How are proposals reviewed and evaluated?</span>
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-answer">
                        <p>Proposals will be reviewed and evaluated by the Conclave Advisory Body. We will prioritize thematic, hands-on, workshop-style sessions.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">
                        <span class="faq-q-text">Can I volunteer?</span>
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-answer">
                        <p>Yes, you may join as a volunteer. Volunteers will receive travel allowance, meals and snacks, a certificate, access to sessions and guests.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">
                        <span class="faq-q-text">Is there any translation or language support available?</span>
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-answer">
                        <p>Yes, Bangla to English translation support will be available. In some cases, English to Bangla support may also be provided.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question">
                        <span class="faq-q-text">Is there a press pass available for journalists?</span>
                        <span class="faq-icon">+</span>
                    </button>
                    <div class="faq-answer">
                        <p>Yes, journalists must obtain a press pass to access the Conclave and follow the press coverage guidelines provided by the organizers.</p>
                    </div>
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // General Helpers
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

            // FAQ ACCORDION LOGIC
            document.querySelectorAll('.faq-question').forEach(btn => {
                btn.addEventListener('click', (e) => {
                    e.stopPropagation();
                    const item = btn.parentElement;
                    const isActive = item.classList.contains('active');
                    document.querySelectorAll('.faq-item').forEach(other => {
                        if (other !== item) closeItem(other, 'faq-answer', 'faq-icon');
                    });
                    if (isActive) closeItem(item, 'faq-answer', 'faq-icon');
                    else openItem(item, 'faq-answer', 'faq-icon');
                });
            });

            // Click answer text to close
            document.querySelectorAll('.faq-answer').forEach(ans => {
                ans.addEventListener('click', () => {
                    const item = ans.parentElement;
                    closeItem(item, 'faq-answer', 'faq-icon');
                });
            });

            // Click outside to close
            document.addEventListener('click', (e) => {
                if (!e.target.closest('.faq-item')) {
                    document.querySelectorAll('.faq-item').forEach(item => {
                        closeItem(item, 'faq-answer', 'faq-icon');
                    });
                }
            });

            // Back To Top
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
    <?php wp_footer(); ?>
</body>
</html>