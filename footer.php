<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sabel-mechanical
 */

?>
<?php
global $phone,$phone_link;
?>
	<footer id="colophon" class="site-footer">
	<div class="footer-top back-img" style="background-image:url('<?php the_field('footer_background_image','options'); ?>');">
		<div class="container">
			<div class="row">
				<div class="col-xl-6 col-lg-6">
					<div class="footer-info">
						<div class="footer-branding">
							<a href="<?php echo home_url(); ?>" title="Sabel Mechanical"><img src="<?php the_field('logo','options'); ?>" alt="Sabel Mechanical" width="315" height="152"></a>
						</div>
						<p><?php the_field('footer_content','options'); ?></p>
						<div class="branding-icons">
						<?php
						if(have_rows('brand_logo','options')):
							while(have_rows('brand_logo','options')): the_row();
							$brand_image = get_sub_field('brand_logo_image','options');
								if(!empty($brand_image)):
						?>
								<a href="<?php the_sub_field('brand_link','options'); ?>" target="_blank" title="<?php the_sub_field('brand_name','options'); ?>"><img src="<?php echo $brand_image; ?>" alt="<?php the_sub_field('brand_name','options'); ?>" width="59" height="44"></a>
						<?php
								endif;
							endwhile;
						endif;
						?>

						</div>
					</div>
				</div>
				<div class="col-xl-5 col-lg-6 offset-xl-1">
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
			</div>
		</div>

	</div>
	<div class="footer-bottom-box">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-12">
					<div class="footer-bottom-text">
						<div class="copy-right">
							<p>© <?php echo date('Y');?> Sabel Mechanical</p>
						</div>
						<div class="footer-bottom-link">
							<ul>
								<li><a href="<?php echo home_url();?>/privacy-policy" title="Privacy Policy">Privacy Policy</a></li>
								<li><a href="<?php echo home_url();?>/terms-of-use" title="Terms of Service">Terms of Use</a></li>
								<li><a href="<?php echo home_url();?>/cookie-policy" title="Cookies Policy">Cookie Policy</a></li>
							</ul>
						</div>
						<div class="footer-other-link">
							<p>Website Design, SEO, & Online Marketing with <span><i class="fa fa-heart" aria-hidden="true"></i></span> by<a href="https://www.dotcomdesign.com" target="_blank" title="Dotcom Design" class="dotcom-link"> Dotcom Design</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</footer><!-- #colophon -->
		<!-- Career -->
		<div class="modal common-popup career-popup" id="get_an_career_modal">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="popup-title">
						<h3 class="h3-title">Apply Now</h3>
						<button type="button" class="close close-popup" data-dismiss="modal"><i class="fas fa-times" aria-hidden="true"></i></button>
					</div>
					<div class="common-popup-overflow">
						<div class="common-popup-text" data-simplebar>
							<div class="contact-form">
								<?php echo do_shortcode('[contact-form-7 id="292" title="Career Form"]'); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- CTA  Button Start -->
		<div class="cta-btn">
			<span>Call now</span>
			<div class="social-box">
				<div class="social-icon">
					<i class="fas fa-phone-alt"></i>
					</div>
					<div class="social-info">
						<a href="tel:+<?php echo $phone_link; ?>" title="<?php echo $phone; ?>" ><span class="callus"><?php echo $phone; ?></span></a>
					</div>
				</div>
    	</div>
    	<!-- CTA  Button End -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
