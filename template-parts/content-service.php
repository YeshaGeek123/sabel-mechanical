<section class="inner-banner banner-sec back-img"style="background-image: url('<?php the_field('service_banner_bg_image'); ?>');">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="banner-content">
                    <h1 class="h1-title"><?php the_field('service_banner_bg_title'); ?></h1>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="service-page-detail">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="service-page-info">
                    <?php the_field('service__banner_short_description'); ?>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="service-page-content">
                    <?php the_field('service_banner_content'); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
$list = get_field('service_sub_service_list');
if(!empty($list)):
?>
    <section class="service-page-list">
        <div class="container">
            <div class="row">
                <?php
                if(have_rows('service_sub_service_list')):
                    while(have_rows('service_sub_service_list')): the_row();
                    $sub_service_image = get_sub_field('service_sub_service_list_image');
                    $sub_service_title = get_sub_field('service_sub_service_list_title');
                    $sub_service_content = get_sub_field('service_sub_service_list_content');
                ?>
                    <div class="col-lg-6">
                        <div class="service-page-box">
                            <?php
                            if(!empty($sub_service_image)):
                            ?>
                                <div class="service-box-img back-img" style="background-image: url('<?php echo $sub_service_image; ?>');">
                                </div>
                            <?php
                            endif;
                            ?>
                            <div class="service-box-info">
                                <?php
                                if(!empty($sub_service_title )):
                                ?>
                                    <h2 class="h2-title"><mark><?php echo $sub_service_title;  ?></mark></h2>
                                <?php
                                endif;
                                ?>
                                <?php
                                if(!empty($sub_service_content)): 
                                ?>
                                    <?php echo $sub_service_content;  ?>
                                <?php
                                endif;
                                ?>
                            </div>
                        </div>
                    </div>
                <?php
                    endwhile;
                endif;
                ?>
            </div>
        </div>
    </section>
<?php
endif;
?>
<!-- Gallery Start -->
<section class="gallery">
    <div class="gallery-slider gallery-box">
        <?php
        $service_gallery_images = get_field('service_gallery_images');
        if (isset($service_gallery_images) && !empty($service_gallery_images)) :
            $counter = 1;
            foreach ($service_gallery_images as $key => $image) :
        ?>
            <div class="gallery-img">
                <a href="<?php echo $image['url']; ?>" title="Gallery Image <?php echo $counter++; ?>" data-fancybox="gallery-images" >
                    <div class="back-img" style="background-image:url('<?php echo $image['url']; ?>');"> </div>
                </a>
            </div>
        <?php
            endforeach;
        endif;
        ?>
       
    </div>
</section>
<!-- Gallery End -->

<?php
	get_template_part( 'template-parts/content', 'career' );		
?>