<?php
/*
 * Template Name: Tech & Hate Custom Feed
 * Description: Custom grid layout located in the tech-and-hate folder.
 */

get_header(); // Keeps your site's main navigation menu
?>

<style>
    /* Main Layout */
    .tech-feed-wrapper {
        max-width: 1200px;
        margin: 60px auto;
        padding: 0 20px;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
    }

    .tech-header {
        text-align: center;
        margin-bottom: 50px;
    }
    
    .tech-header h1 {
        font-size: 3rem;
        margin-bottom: 10px;
        font-weight: 800;
        letter-spacing: -1px;
    }

    /* Grid System */
    .tech-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 30px;
    }

    /* Card Design */
    .tech-card {
        background: #fff;
        border: 1px solid #eaeaea;
        border-radius: 12px;
        overflow: hidden;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
        display: flex;
        flex-direction: column;
    }

    .tech-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 24px rgba(0,0,0,0.08);
    }

    .card-image-wrap {
        height: 200px;
        background-color: #f0f0f0;
        overflow: hidden;
        position: relative;
    }

    .card-image-wrap img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .tech-card:hover .card-image-wrap img {
        transform: scale(1.05);
    }

    .card-body {
        padding: 24px;
        display: flex;
        flex-direction: column;
        flex-grow: 1;
    }

    .card-meta {
        font-size: 0.85rem;
        color: #888;
        margin-bottom: 10px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .card-title {
        font-size: 1.4rem;
        margin: 0 0 12px 0;
        line-height: 1.3;
        font-weight: 700;
    }

    .card-title a {
        text-decoration: none;
        color: #111;
    }

    .card-excerpt {
        font-size: 1rem;
        color: #555;
        line-height: 1.6;
        margin-bottom: 20px;
    }

    .read-more {
        margin-top: auto;
        font-weight: 600;
        text-decoration: none;
        color: #007bff; /* Adjust to your brand color */
        display: inline-flex;
        align-items: center;
    }
    
    .read-more:hover { text-decoration: underline; }

    /* Responsive */
    @media (max-width: 768px) {
        .tech-header h1 { font-size: 2rem; }
        .tech-grid { grid-template-columns: 1fr; }
    }
</style>

<div class="tech-feed-wrapper">
    
    <header class="tech-header">
        <h1>Tech and Hate</h1>
        <p>Exploring the intersection of technology and human emotion.</p>
    </header>

    <div class="tech-grid">
        <?php
        // === 3. THE PHP LOGIC (Database Query) ===
        
        // Settings for the loop
        $args = array(
            'category_name'  => 'tech', // IMPORTANT: Make sure your category slug is exactly 'tech'
            'posts_per_page' => 9,      // Shows 9 cards
            'post_status'    => 'publish',
            'orderby'        => 'date',
            'order'          => 'DESC'
        );

        // Fetch from Database
        $tech_query = new WP_Query( $args );

        // Check if posts exist
        if ( $tech_query->have_posts() ) :
            
            // Start Looping through posts
            while ( $tech_query->have_posts() ) : $tech_query->the_post(); 
                $thumb_url = get_the_post_thumbnail_url(get_the_ID(), 'large'); 
            ?>

                <article class="tech-card">
                    <?php if($thumb_url): ?>
                    <div class="card-image-wrap">
                        <a href="<?php the_permalink(); ?>">
                            <img src="<?php echo esc_url($thumb_url); ?>" alt="<?php the_title_attribute(); ?>">
                        </a>
                    </div>
                    <?php endif; ?>

                    <div class="card-body">
                        <div class="card-meta">
                            <?php echo get_the_date('F j, Y'); ?>
                        </div>
                        
                        <h2 class="card-title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h2>

                        <div class="card-excerpt">
                            <?php echo wp_trim_words( get_the_excerpt(), 18, '...' ); ?>
                        </div>

                        <a href="<?php the_permalink(); ?>" class="read-more">Read Article &rarr;</a>
                    </div>
                </article>

            <?php endwhile;
            
            // Clean up data after loop
            wp_reset_postdata();

        else : ?>
            <p>No posts found. Please add some posts to the "Tech" category in WP Admin.</p>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); // Keeps your site's footer ?>