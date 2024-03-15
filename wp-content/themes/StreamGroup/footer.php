<?php
$var            = variables();
$set            = $var['setting_home'];
$assets         = $var['assets'];
$url            = $var['url'];
$policy_page_id = (int) get_option( 'wp_page_for_privacy_policy' );
$logo           = carbon_get_post_meta( $set, 'logo' );
$copyright      = carbon_get_post_meta( $set, 'copyright' );

?>

<script>
    var admin_ajax = '<?php echo $var['admin_ajax']; ?>';
</script>

</main>

<footer class="footer">
    <div class="container">
        <div class="footer-content">
        <?php $logo_f = carbon_get_post_meta(get_option('page_on_front'), 'logo_f') ?>
        <a class="logo" href="<?php echo get_home_url(); ?>"> 
            <img src="<?php _u( $logo_f ) ?>" alt="">
        </a>
            <div class="copyright">
				<?php echo $copyright; ?>
            </div>
			<?php if ( $policy_page_id ): ?>
                <a class="footer-link fancybox" href="#page-<?php echo $policy_page_id; ?>">
					<?php echo get_the_title( $policy_page_id ); ?>
                </a>
			<?php endif; ?>
        </div>
    </div>
</footer>

<div class="modal modal-sm" id="thanks">
    <div class="modal-content">
        <div class="modal-title text-center">
            <div class="modal-title__main">Сообщение отправлено</div>
        </div>
    </div>
</div>

<div class="modal" id="page-<?php echo $policy_page_id; ?>">
    <div class="modal-content">
        <div class="modal-title text-center">
            <div class="modal-title__main">
                <?php echo get_the_title( $policy_page_id ); ?>
            </div>
        </div>
        <div class="title-section__subtitle">
			<?php echo get_content_by_id( $policy_page_id ); ?>
        </div>
    </div>
</div>


<?php wp_footer(); ?>

</body>

</html>