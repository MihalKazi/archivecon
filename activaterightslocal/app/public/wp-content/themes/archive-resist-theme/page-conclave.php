<?php
/* Template Name: Conclave PDF Design */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Archive & Resist Conclave</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
</head>
<body>

    <div class="container">
        <header class="site-header">
            <nav class="main-nav">
                <a href="#">About</a>
                <a href="#">Sessions</a>
                <a href="#">Registration</a>
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

                <a href="#" class="btn-ticket">GET YOUR TICKET</a>
            </div>
        </section>

        <div class="feature-image-wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/images/bus.jpg" alt="Bus and Shelter" class="feature-img">
        </div>

        <div class="feature-image-wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/images/quote.png" alt="Milan Kundera Quote" class="feature-img">
        </div>

    </div> <section class="history-block">
        <div class="history-text">
            <p>The July 2024 uprising marked a pivotal shift in how we witness state violence. In the face of blackouts and suppression, citizen documentation became the primary tool for truth.</p>
            <p style="margin-top: 20px;">This conclave gathers the archivists, technologists, and youth defenders who are building the infrastructure of memory. We are moving from reactive recording to proactive preservation.</p>
        </div>
        <div class="history-visual">
            <img src="<?php echo get_template_directory_uri(); ?>/images/history-collage.jpg" alt="Historical Prison Collage">
        </div>
    </section>

    <section class="goals-split-container">
        <div class="goals-visual">
            <div class="goals-overlay"></div>
            <h2 class="goals-visual-title">OUR<br>GOALS</h2>
        </div>

        <div class="goals-accordion">
            <div class="accordion-item">
                <button class="accordion-header">
                    <span class="acc-title">LEARNING SPACE<br>FOR YOUTH</span>
                    <span class="acc-icon">+</span>
                </button>
                <div class="accordion-content">
                    <p>We provide a dedicated space for young defenders to learn the tools of digital security, archival verification, and ethical documentation. This is about handing over the torch of truth-keeping to the next generation.</p>
                </div>
            </div>
            <div class="accordion-item">
                <button class="accordion-header">
                    <span class="acc-title">CRITICAL<br>DISCUSSIONS</span>
                    <span class="acc-icon">+</span>
                </button>
                <div class="accordion-content">
                    <p>Facilitating hard conversations about state power, censorship, and the role of memory in justice. We bring together diverse voices to challenge the narrative of forgetting.</p>
                </div>
            </div>
            <div class="accordion-item">
                <button class="accordion-header">
                    <span class="acc-title">REGIONAL<br>SOLIDARITY</span>
                    <span class="acc-icon">+</span>
                </button>
                <div class="accordion-content">
                    <p>Building bridges across South Asia to share strategies for resistance. We recognize that our struggles are interconnected and require a collective response to authoritarianism.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="resistance-banner">
        <div class="resistance-content">
            
            <h2 class="resistance-text">JOIN THE<br>RESISTANCE</h2>
            
            <img src="<?php echo get_template_directory_uri(); ?>/images/crowd.jpg" class="collage-img pos-1">
            <img src="<?php echo get_template_directory_uri(); ?>/images/protest.jpg" class="collage-img pos-2">
            <img src="<?php echo get_template_directory_uri(); ?>/images/crowd.jpg" class="collage-img pos-3">
            <img src="<?php echo get_template_directory_uri(); ?>/images/protest.jpg" class="collage-img pos-4">
            <img src="<?php echo get_template_directory_uri(); ?>/images/crowd.jpg" class="collage-img pos-5">

        </div>
    </section>

<footer>
        
        <div class="footer-top">
            <div class="container">
                <h2>MORE DETAILS<br>COMING SOON</h2>
                <p>Open to individuals and organizations working on human rights, digital rights, social justice, and archiving.</p>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                
                <div class="footer-line"></div>

                <div class="footer-content-row">
                    
                    <div class="footer-logo">
                        <span class="text-blue">ARCHIVE</span><br>
                        <span class="text-red">& RESIST</span><br>
                        <span class="text-green">CONCLAVE</span>
                    </div>

                    <div class="footer-contact">
                        For any kind of inquiries ping us on <a href="mailto:info@activaterights.org">info@activaterights.org</a>
                    </div>

                </div>
            </div>
        </div>

    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const accHeaders = document.querySelectorAll('.accordion-header');

            accHeaders.forEach(header => {
                header.addEventListener('click', function() {
                    const item = this.parentElement;
                    const isActive = item.classList.contains('active');

                    // Close all others
                    document.querySelectorAll('.accordion-item').forEach(otherItem => {
                        otherItem.classList.remove('active');
                        otherItem.querySelector('.acc-icon').textContent = '+';
                        otherItem.querySelector('.accordion-content').style.maxHeight = null;
                    });

                    // Toggle clicked
                    if (!isActive) {
                        item.classList.add('active');
                        this.querySelector('.acc-icon').textContent = '−';
                        const content = item.querySelector('.accordion-content');
                        content.style.maxHeight = content.scrollHeight + "px";
                    } else {
                        item.classList.remove('active');
                        this.querySelector('.acc-icon').textContent = '+';
                        item.querySelector('.accordion-content').style.maxHeight = null;
                    }
                });
            });
        });
    </script>

</body>
</html>