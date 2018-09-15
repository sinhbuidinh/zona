<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
<!-- start front-page themes twenty-seventeen -->

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php // Show the selected frontpage content.
		if ( have_posts() ) :
			while ( have_posts() ) : 
                echo '<!-- start have_posts front-page-->';
                the_post();
				get_template_part( 'template-parts/page/content', 'front-page' );
                echo '<!-- end have_posts front-page-->';
			endwhile;
		else :
			get_template_part( 'template-parts/post/content', 'none' );
            echo '<!-- none front-page-->';
		endif; ?>

		<?php
		// Get each of our panels and show the post data.
		if ( 0 !== twentyseventeen_panel_count() || is_customize_preview() ) : // If we have pages to show.

            echo '<!-- start panel -->';
			/**
			 * Filter number of front page sections in Twenty Seventeen.
			 *
			 * @since Twenty Seventeen 1.0
			 *
			 * @param int $num_sections Number of front page sections.
			 */
			$num_sections = apply_filters( 'twentyseventeen_front_page_sections', 4 );
			global $twentyseventeencounter;

			// Create a setting and control for each of the sections available in the theme.
			for ( $i = 2; $i < ( 1 + $num_sections ); $i++ ) {
                echo "<!-- twentyseventeen_panel_count {$i} - {$num_sections} -->";
				$twentyseventeencounter = $i;
				twentyseventeen_front_page_section( null, $i );
			}
            echo "<!-- end panel -->";

	endif; // The if ( 0 !== twentyseventeen_panel_count() ) ends here. ?>

	</main><!-- #main -->
</div><!-- #primary -->
<!-- end front-page themes twenty-seventeen -->

<?php get_footer();
