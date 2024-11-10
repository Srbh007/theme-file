<?php
/**
 * The template for displaying the footer.
 *
 * @package nasatheme
 */
?>
</main>
<!-- End Main Content Site -->

<?php
/**
 *  Footer Site 
 */
do_action('nasa_footer_layout_style'); ?>

</div>
<!-- End Wrapper Site -->
<!-- whatsapp icon -->
<a href="https://wa.me/919785024398" class="whatsapp-float" target="_blank">
        <img src="/wp-content/uploads/2024/11/whatsapp-1.webp" alt="WhatsApp">
    </a>
<style type="text/css">
  .whatsapp-float { position: fixed; width: 45px; height: 45px; bottom: 140px; right: 25px; background-color: #fff; color: #FFF; border-radius: 50px; text-align: center; font-size: 30px; box-shadow:; z-index: 1000;display:flex;align-items:center;justify-content:center } .whatsapp-float img {  width: 30px; height: 30px; }
	@media screen and (max-width:1024px) {
	.whatsapp-float {
		bottom: 200px !important;
    	right: 10px !important;
		box-shadow: 1px 1px 10px 1px rgba(0, 0, 0, 0.1);

        
</style>

<?php
wp_footer();
echo '</body></html>';
