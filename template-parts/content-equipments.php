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
if(!empty($equipment_content)):
    if(!empty($equipment_points_list)):
    ?>
    <section class="our-client-list">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="client-list-box">
                        <?php
                        $equipment_main_title = get_field('equipment_main_title');
                        if(!empty($equipment_main_title)):
                        ?>
                            <div class="list-title"><p><?php echo $equipment_main_title; ?></p></div>
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
endif;
    ?>

<section class="gallery-list">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="gallery-list-text">
                    <p>See the gallery below for examples of the work we’ve done.</p>
                </div>
            </div>

            <?php
            $equipment_sub_services_list = get_field('equipment_sub_services_list');
            $upload_dir = wp_upload_dir();
            $baseurl= $upload_dir['baseurl'];
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
                            <div class="service-box-img back-img" style="background-image: url('<?php echo $baseurl; ?>/2022/11/Equipment-Replacement.png');">
                            </div>
                            <?php
                            endif;
                            ?>
                            <div class="service-box-info">
                                <?php
                                if(!empty($equipment_sub_service_title)):
                                ?>
                                    <h2 class="h2-title"><?php echo $equipment_sub_service_title; ?></h2>
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

