<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>
<main>
    <?php
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post();
            the_content();
        }
    }
    ?>
</main>
<?php
get_footer();
