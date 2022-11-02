<section class="inner-banner banner-sec back-img"style="background-image: url('<?php the_field('equipment_background_image'); ?>');">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="banner-content">
                    <h1 class="h1-title"><?php the_field('equipment_title'); ?></h1>
                </div>
            </div>
        </div>
    </div>

</section>
<section class="service-page-detail equipment-offering-service">
    <div class="container">
        <div class="row">
            <?php
            $equipment_short_description = get_field('equipment_short_description');
            $equipment_content = get_field('equipment_content');
            ?>
            <?php
            if(!empty($equipment_short_description)):
            ?>
            <div class="col-lg-6">
                <div class="service-page-info">
                    <p><?php echo $equipment_short_description; ?></p>
                </div>
            </div>
            <?php
            endif;
            ?>
            <div class="col-lg-6">
                <div class="service-page-content">
                <?php
                if(!empty($equipment_content)):
                ?>
                    <p><?php echo $equipment_content; ?></p>
                <?php
                else:
                ?>
                <section class="our-client-list equipment-offering-list">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="client-list-box">
                                    <?php
                                    $equipment_main_title1 = get_field('equipment_main_title');
                                    if(!empty($equipment_main_title1)):
                                    ?>
                                        <div class="list-title"><p><?php echo $equipment_main_title1; ?></p></div>
                                    <?php
                                    endif;
                                    ?>
                                    <div class="client-list">
                                        <ul>
                                            <?php
                                            if(have_rows('equipment_points')):
                                                while(have_rows(('equipment_points'))): the_row();
                                            ?>
                                                <li><?php the_sub_field('equipment_pointsname'); ?></li>
                                            <?php
                                                endwhile;
                                            endif;
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <?php
                endif;
                ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$equipment_points_list = get_field('equipment_points');
if(!empty($equipment_content))
{
    if(!empty($equipment_points_list)):
    ?>
    <section class="our-client-list">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="client-list-box">
                        <?php
                        $equipment_main_title2 = get_field('equipment_main_title');
                        if(!empty($equipment_main_title2)):
                        ?>
                            <div class="list-title"><p><?php echo $equipment_main_title2; ?></p></div>
                        <?php
                        endif;
                        ?>
                        <div class="client-list">
                            <ul>
                                <?php
                                if(have_rows('equipment_points')):
                                    while(have_rows(('equipment_points'))): the_row();
                                ?>
                                    <li><?php the_sub_field('equipment_pointsname'); ?></li>
                                <?php
                                    endwhile;
                                endif;
                                ?>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <?php
    endif;   
}
    ?>

<section class="gallery-list">
    <div class="container">
        <div class="row">
            <?php
            if(!empty(get_field('equipment_sub_service_note'))):
            ?>
                <div class="col-lg-12">
                    <div class="gallery-list-text">
                        <p><?php echo get_field('equipment_sub_service_note'); ?></p>
                    </div>
                </div>
            <?php
            endif;
            ?>
            <?php
            $equipment_sub_services_list = get_field('equipment_sub_services_list');
            if(!empty($equipment_sub_services_list)):
                if(have_rows('equipment_sub_services_list')):
                    while(have_rows('equipment_sub_services_list')): the_row();
                    $equipment_sub_service_image = get_sub_field('equipment_sub_service_list_image');
                    $equipment_sub_service_title =get_sub_field('equipment_sub_service_list_title');
                    $equipment_sub_service_content =get_sub_field('equipment_sub_service_list_content');
                ?>
                    <div class="col-lg-6">
                        <div class="service-page-box">
                            <?php
                            if(!empty($equipment_sub_service_image)):
                            ?>
                                <div class="service-box-img back-img" style="background-image: url('<?php echo $equipment_sub_service_image; ?>');">
                                </div>
                            <?php
                            else:
                            ?>
                            <div class="service-box-img back-img">
                            </div>
                            <?php
                            endif;
                            ?>
                            <div class="service-box-info">
                                <?php
                                if(!empty($equipment_sub_service_title)):
                                ?>
                                    <h2><?php echo $equipment_sub_service_title; ?></h2>
                                <?php
                                endif;
                                ?>
                                <?php
                                if(!empty($equipment_sub_service_content)):
                                ?>
                                    <?php echo $equipment_sub_service_content; ?>
                                <?php
                                endif;
                                ?>
                            </div>
                        </div>
                    </div>
                <?php
                    endwhile;
                endif;
            endif;
            ?> 
        </div>
    </div>
</section>
<!-- Gallery Start -->
<section class="gallery">
    <div class="gallery-slider gallery-box">
        <?php
        $equipment_gallery_images= get_field('equipment_gallery_images');
        if (isset($equipment_gallery_images) && !empty($equipment_gallery_images)) :
            $counter = 1;
            foreach ($equipment_gallery_images as $key => $image) :
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
 
