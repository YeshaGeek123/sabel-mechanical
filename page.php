<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sabel-mechanical
 */

get_header();
?>
<section class="inner-banner banner-sec back-img"style="background-image: url('http://192.168.1.13/sabel-mechanical/wp-content/uploads/2022/11/service-banner-bg.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="banner-content">
                    <h1 class="h1-title">sample page</h1>
                </div>
            </div>
        </div>
    </div>

</section>
<div class="inner-page-text">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<main id="primary" class="site-main">

					<?php
					while ( have_posts() ) :
						the_post();

						get_template_part( 'template-parts/content', 'page' );

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.
					?>

				</main><!-- #main -->

			</div>
		</div>
	</div>

</div>

<?php

get_footer();
