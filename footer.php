<?php
/**
 * Footer template
 *
 * @author   <Author>
 * @version  1.0.0
 * @package  <Package>
 */
$site_logo = get_field('site_logo', 'options');
?>

</main>
<footer class="footer py-5">
    <div class="container contact-container py-5">
        <div class="row">
            <div class="col-md-6 tagline">
                <h2>Let's make some magic!</h2>
            </div>
            <div class="col-md-6 contact-content">
                <h3>Like what you see?</h3>
                <p>If you've make it down this far why not send me an email?
                    I'm currently booking new projects starting in June, so don't miss ou!</p>
                <a href="#" class="contact-me">Let's work together!</a>
            </div>
        </div>
    </div>
    <div class="container footer-navigation">
        <div class="row">
            <div class="col-md-2">
                <a href="#" class="d-flex align-items-center col-md-3 mb-1 mb-md-0 text-decoration-none">
                    <img width="50" src="<?php echo $site_logo; ?>" />
                </a>
            </div>
            <div class="col-md-3">
                <h4 class="contact-heading">Navigation</h4>
                <?php wp_nav_menu(
					array(
						'theme_location'  => 'footer',
						'container'       => '',
						'menu_class'      => 'nav flex-column footer-nav',
						'container_class' => '',
						'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
						'fallback_cb'     => false,
					)
					);
		?>
            </div>
            <div class="col-md-3">
                <h4 class="contact-heading">Services</h4>
                <?php wp_nav_menu(
					array(
						'theme_location'  => 'service',
						'container'       => '',
						'menu_class'      => 'nav flex-column',
						'container_class' => '',
						'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
						'fallback_cb'     => false,
					)
					);
		?>
            </div>
            <div class="col-md-4 footer-contact">
                <h4 class="contact-heading">Contact</h4>
                <ul class="nav flex-column">
                <a href="#">hello@bytebeardigital.com</a>
                <a href="#">1234567890</a>
                social media links here!
                </ul>
            </div>
        </div>
    </div>
    <div class="container footer-copywrite text-center">
                    Made with coffee & love by ByteBearDigital
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>