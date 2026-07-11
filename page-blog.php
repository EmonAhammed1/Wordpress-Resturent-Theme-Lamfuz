<?php
/**
 * Template Name: Blog
 */
get_header(); ?>

<main id="primary" class="site-main">
    <!-- HERO SECTION -->
    <section class="about-hero-section menu-hero-section">
        <div class="about-hero-bg">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Space-1_16-9_Side.webp" alt="Blog">
            <div class="about-hero-overlay menu-hero-overlay"></div>
        </div>
        <div class="about-container" style="width: 100%; position: relative; z-index: 10;">
            <div class="about-hero-content">
                <h1 class="about-hero-title">
                    <span class="show-da">VORES BLOG</span>
                    <span class="show-en notranslate">OUR BLOG</span>
                </h1>
            </div>
        </div>
    </section>

    <!-- BLOG GRID SECTION -->
    <section class="blog-section">
        <div class="blog-container">
            <div class="blog-grid">
                <?php
                $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                $args = array(
                    'post_type'      => 'post',
                    'posts_per_page' => 6,
                    'paged'          => $paged,
                    'post_status'    => 'publish'
                );
                $blog_query = new WP_Query( $args );

                if ( $blog_query->have_posts() ) :
                    while ( $blog_query->have_posts() ) : $blog_query->the_post();
                        $thumbnail_url = get_the_post_thumbnail_url( get_the_ID(), 'large' );
                        if ( ! $thumbnail_url ) {
                            // Fallback default image from theme assets if no featured image is set
                            $thumbnail_url = get_template_directory_uri() . '/assets/images/Dish-3_16-9_Above.webp';
                        }
                        $categories = get_the_category();
                        $category_name = ! empty( $categories ) ? esc_html( $categories[0]->name ) : 'Nepalese';
                        ?>
                        <article class="blog-card">
                            <div class="blog-card-image">
                                <a href="<?php the_permalink(); ?>">
                                    <img src="<?php echo esc_url( $thumbnail_url ); ?>" alt="<?php the_title_attribute(); ?>">
                                </a>
                                <span class="blog-card-category notranslate"><?php echo esc_html( strtoupper($category_name) ); ?></span>
                            </div>
                            <div class="blog-card-content">
                                <div class="blog-card-meta">
                                    <span class="blog-card-date"><?php echo get_the_date('j. M Y'); ?></span>
                                </div>
                                <h3 class="blog-card-title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h3>
                                <p class="blog-card-excerpt"><?php echo wp_trim_words( get_the_excerpt(), 18, '...' ); ?></p>
                                <a href="<?php the_permalink(); ?>" class="blog-card-link">
                                    <span class="show-da">LÆS MERE</span>
                                    <span class="show-en notranslate">READ MORE</span>
                                    <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                                </a>
                            </div>
                        </article>
                    <?php
                    endwhile;
                    ?>
            </div>

            <!-- Pagination -->
            <div class="blog-pagination">
                <?php
                echo paginate_links( array(
                    'total'     => $blog_query->max_num_pages,
                    'current'   => $paged,
                    'prev_text' => '&larr; <span class="show-da">Forrige</span><span class="show-en notranslate">Previous</span>',
                    'next_text' => '<span class="show-da">Næste</span><span class="show-en notranslate">Next</span> &rarr;',
                    'type'      => 'list'
                ) );
                ?>
            </div>
            
            <?php
            else :
            ?>
                <div class="blog-no-posts">
                    <p class="show-da">Der blev ikke fundet nogen blogindlæg.</p>
                    <p class="show-en notranslate">No blog posts were found.</p>
                </div>
            <?php
            endif;
            wp_reset_postdata();
            ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>
