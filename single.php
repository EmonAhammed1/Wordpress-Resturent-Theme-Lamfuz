<?php
get_header(); ?>

<main id="primary" class="site-main">
    <?php
    while ( have_posts() ) :
        the_post();
        
        $thumbnail_url = get_the_post_thumbnail_url( get_the_ID(), 'full' );
        if ( ! $thumbnail_url ) {
            $thumbnail_url = get_template_directory_uri() . '/assets/images/Space-1_16-9_Side.webp';
        }
        
        $categories = get_the_category();
        $category_name = ! empty( $categories ) ? esc_html( $categories[0]->name ) : 'Nepalese';
        ?>
        
        <!-- HERO SECTION -->
        <section class="about-hero-section menu-hero-section">
            <div class="about-hero-bg">
                <img src="<?php echo esc_url( $thumbnail_url ); ?>" alt="<?php the_title_attribute(); ?>">
                <div class="about-hero-overlay menu-hero-overlay"></div>
            </div>
            <div class="about-container" style="width: 100%; position: relative; z-index: 10;">
                <div class="about-hero-content">
                    <h1 class="about-hero-title">
                        <?php the_title(); ?>
                    </h1>
                </div>
            </div>
        </section>

        <!-- SINGLE POST CONTENT SECTION -->
        <section class="single-post-section">
            <div class="single-post-container">
                <!-- Meta Info -->
                <div class="single-post-meta">
                    <span class="single-post-category notranslate"><?php echo esc_html( strtoupper($category_name) ); ?></span>
                    <span class="single-post-divider">&bull;</span>
                    <span class="single-post-date"><?php echo get_the_date('j. F Y'); ?></span>
                </div>

                <!-- Main Content -->
                <div class="single-post-content entry-content">
                    <?php the_content(); ?>
                </div>

                <!-- Footer Navigation -->
                <div class="single-post-footer">
                    <a href="<?php echo home_url('/blog'); ?>" class="btn-back-blog">
                        <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="transform: rotate(180deg); margin-right: 8px;"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                        <span class="show-da">TILBAGE TIL BLOG</span>
                        <span class="show-en notranslate">BACK TO BLOG</span>
                    </a>
                </div>
            </div>
        </section>
        
    <?php
    endwhile;
    ?>
</main>

<?php get_footer(); ?>
