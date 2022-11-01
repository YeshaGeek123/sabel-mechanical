
<?php
global $phone,$phone_link;
?>
<section class="inner-banner contact-page-detail">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            <h2 class="h2-title">Contact Us</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5 offset-lg-1">

                <div class="service-page-info">
                    <p>Sabel Mechanical LLC provides a broad range of mechanical services to industrial and commercial clients across Wisconsin, Illinois, and Michigan. Get in touch today!</p>
                </div>
                <div class="footer-contact-detail">
						<div class="social-box">
							<div class="social-icon">
							<i class="fas fa-map-marker-alt"></i>
							</div>
							<?php
							$address = get_field('address','options');
							$address_title = strip_tags($address);
							?>
							<div class="social-info address">
								<span class="title">Address:</span>
								<a href="<?php the_field('address_link','options'); ?>" title="<?php echo $address_title; ?>" target="_blank" ><?php echo $address; ?></a>
							</div>
						</div>
						<div class="social-box">
							<div class="social-icon">
							<i class="fas fa-envelope"></i>
							</div>
							<div class="social-info">
								<a href="mailto:<?php the_field('email','options'); ?>" title="<?php the_field('email','options'); ?>"><?php the_field('email','options'); ?></a>
							</div>
						</div>
						<div class="social-box">
							<div class="social-icon">
							<i class="fas fa-phone-alt"></i>
							</div>
							<div class="social-info">
								<a href="tel:+<?php echo $phone_link; ?>" title="<?php echo $phone; ?>"><span class="callus"><?php echo $phone; ?></span></a>
							</div>
						</div>
						<div class="social-box">
							<div class="social-icon face-book">
							 <a href="<?php the_field('facebook_link','options'); ?>" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
							</div>
						</div>
					</div>
            </div>
            <div class="col-lg-6 ">
                <div class="contact-form">
                <?php
                     echo do_shortcode('[contact-form-7 id="11" title="Contact form"]');
                ?>
                </div>
            </div>

        </div>
    </div>
</section>