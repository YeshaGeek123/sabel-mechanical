<section class="inner-banner banner-sec back-img"style="background-image: url('<?php the_field('hauling_banner_background_image'); ?>');">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="banner-content">
                    <h1 class="h1-title"><?php the_field('hauling_banner_title'); ?></h1>
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
                    <?php the_field('hauling_short_description'); ?>   
                </div>
                <div class="service-page-content">
                    <?php the_field('hauling_content'); ?>                
                </div>
            </div>
            <div class="col-lg-6">
                <div class="service-page-img back-img" style="background-image: url('<?php the_field('hauling_image'); ?>');">
                </div>
            </div>

        </div>
    </div>
</section>
<?php
$hauling_list = get_field('hauling_sub_services_list');
if(!empty($hauling_list)):
?>
    <section class="service-page-list">
        <div class="container">
            <div class="row">
                <?php
                if(have_rows('hauling_sub_services_list')):
                    while(have_rows('hauling_sub_services_list')): the_row();
                    $hauling_sub_service_image = get_sub_field('hauling_sub_services_list_image');
                    $hauling_sub_service_title = get_sub_field('hauling_sub_services_list_title');
                    $hauling_sub_service_content = get_sub_field('hauling_sub_services_list_content');
                ?>
                    <div class="col-lg-6">
                        <div class="service-page-box">
                            <?php
                            if(!empty($hauling_sub_service_image)):
                            ?>
                                <div class="service-box-img back-img" style="background-image: url('<?php echo $hauling_sub_service_image; ?>');">
                                </div>
                            <?php
                            endif;
                            ?>
                            <div class="service-box-info">
                                <?php
                                if(!empty($hauling_sub_service_title )):
                                ?>
                                    <h2><?php echo $hauling_sub_service_title;  ?></h2>
                                <?php
                                endif;
                                ?>
                                <?php
                                if(!empty($hauling_sub_service_content)): 
                                ?>
                                    <?php echo $hauling_sub_service_content;  ?>
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
        $hauling_gallery_images = get_field('hauling_gallery_images');
        if (isset($hauling_gallery_images) && !empty($hauling_gallery_images)) :
            $counter = 1;
            foreach ($hauling_gallery_images as $key => $image) :
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