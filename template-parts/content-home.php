<!-- banner sec start -->
<?php
$phone = get_field('phone_number','option');
$val = array("(", ")", " ", "-", ".");
$replace = array("", "", "", "", "");
$phone_link = str_replace($val, $replace, $phone);
?>
<section class="banner-sec back-img"style="background-image: url('<?php the_field('home_banner_image'); ?>');">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="banner-content">
                    <h1 class="h1-title"><?php the_field('home_banner_title'); ?></h1>
                    <h4 class="h4-title"><?php the_field('home_banner_sub_title'); ?></h4>
                    <div class="banner-btn">
                        <a href="tel:+<?php echo $phone_link; ?>" title="<?php echo $phone; ?>"  class="sec-btn callus">Call <span class="callus"><?php echo $phone; ?></span></a>
                        <a href="javascript:void(0)" title="Contact Us"  class="sec-btn">Contact us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner sec end -->
<!-- about sec start -->
<section class="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="about-image back-img" style="background-image: url('<?php the_field('home_about_us_image'); ?>');">

                </div>
            </div>
            <div class="col-lg-5">
                <div class="about-content">
                    <h2 class="h2-title"><?php the_field('home_about_us_title'); ?></h2>
                    <span><?php the_field('home_about_us_sub_title'); ?></span>
                    <div class="about-info">
                        <?php the_field('home_about_us_content'); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="owner">
            <div class="row">
                <div class="col-lg-6">
                    <div class="owner-img back-img" style="background-image: url('<?php the_field('home_owner_image'); ?>');">

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="owner-info">
                        <h2 class="h2-title"><?php the_field('home_owner_title'); ?></h2>
                        <span><?php the_field('home_owner_sub_title'); ?></span>
                        <div class="about-info">
                            <?php the_field('home_owner_content'); ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- about sec end -->
<!-- service sec start -->
<section class="service">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title">
                    <h2 class="h2-title"><?php the_field('home_service_main_title'); ?></h2>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="service-menu custom-dot-slider">
                    <ul class="dropdown-tabbing">
                        
                    </ul>
                </div>
            </div>
        </div>
        <div class="service-slider">
            <?php
            if(have_rows('home_service_list')):
                while(have_rows('home_service_list')): the_row();
                $service_image = get_sub_field('service_list_image');
                $service_title = get_sub_field('service_list_title');
                $service_content = get_sub_field('service_list_content');
                $service_page_link = get_sub_field('service_list_page_link');
            ?>
                <div class="service-box">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="service-info">
                                <?php
                                if(!empty($service_title)):
                                ?>
                                    <h3 class="h3-title dot-title" title="<?php echo $service_title; ?>"><?php echo $service_title; ?></h3>
                                <?php
                                endif;
                                ?>
                                <?php
                                if(!empty($service_content)):
                                ?>
                                    <div class="service-text">
                                        <?php echo $service_content; ?>
                                    </div>
                                <?php
                                endif;
                                ?>
                                <?php
                                if(!empty($service_page_link)):
                                ?>
                                    <div class="service-btn">
                                        <a href="<?php echo $service_page_link; ?>" title="read more" class="sec-btn" tabindex="0">read more </a>
                                    </div>
                                <?php
                                endif;
                                ?>
                            </div>
                        </div>
                        <?php
                        if(!empty($service_image)):
                        ?>
                            <div class="col-lg-7">
                                <div class="service-img">
                                    <div class="back-img" style="background-image:url('<?php echo $service_image; ?>');"></div>
                                </div>
                            </div>
                        <?php
                        endif;
                        ?>
                    </div>
                </div>
            <?php
                endwhile;
            endif;
            ?>
            
        </div>
        
    </div>
</section>
<!-- service sec end -->
<!-- testimonial sec start -->

<section class="testimonial">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-5">
                <div class="testimonial-info">
                    <h2 class="h2-title">Testimonials</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor andin incididunt ut labore et dolore magna.</p>
                    <div class="service-btn">
                        <a href="#" title="leave a review" class="sec-btn">leave a review </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="testimonial-slider">
                    <div class="testimonial-content">
                        <p>Great staff. I was there this morning delivering some bearings, and they really helped me a lot. Thanks guys.</p>
                        <span>Emerson Santos</span>
                    </div>
                    <div class="testimonial-content">
                        <p>Great staff. I was there this morning delivering some bearings, and they really helped me a lot. Thanks guys.</p>
                        <span>Emerson Santos</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- testimonial sec end -->

<?php
	get_template_part( 'template-parts/content', 'gallery' );		
?>

