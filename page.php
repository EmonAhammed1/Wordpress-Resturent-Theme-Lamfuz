<?php
/**
 * The template for displaying all pages
 */

get_header();
?>

<main id="primary" class="site-main">
    <div style="background-color: #0b131a; padding: 100px 0 60px; text-align: center; border-bottom: 1px solid rgba(179, 82, 42, 0.2);">
        <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
            <?php the_title('<h1 class="entry-title" style="font-family: var(--font-heading); color: #b3522a; font-size: 2.5rem; letter-spacing: 0.05em; text-transform: uppercase; margin: 0;">', '</h1>'); ?>
        </div>
    </div>

    <div style="background-color: #0c151d; padding: 60px 0; min-height: 50vh;">
        <div class="container" style="max-width: 800px; margin: 0 auto; padding: 0 20px; color: #f4ece1; font-family: var(--font-body); line-height: 1.8; font-size: 1.05rem;">
            <?php
            while ( have_posts() ) :
                the_post();
                the_content();
            endwhile;
            ?>
        </div>
    </div>
</main>

<?php
get_footer();
