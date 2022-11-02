<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
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
                    <h1 class="h1-title">oops! <span>page not found</span></h1>
                </div>
            </div>
        </div>
    </div>

</section>

<div class="inner-page-text error-404">
    <div class="container">
        <div class="row">
            <div class="col-12">
            <img width="500" height="373" src="<?php echo home_url(); ?>/wp-content/themes/sabel-mechanical/assets/images/404.png" alt="404 Not Found!">
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
