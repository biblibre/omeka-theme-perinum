</div><!-- end content -->
</div><!-- end content-wrapper -->

<footer>

    <div id="footer-content" class="center-div">
        <?php if($footerText = get_theme_option('Footer Text')): ?>
        <div id="custom-footer-text">
            <p><?php echo get_theme_option('Footer Text'); ?></p>
        </div>
        <?php endif; ?>
        <?php if ((get_theme_option('Display Footer Copyright') == 1) && $copyright = option('copyright')): ?>
        <p><?php echo $copyright; ?></p>
        <?php endif; ?>
        <p class="credits">
            <img src="<?php echo img('BM_REG-NouvelleAquitaine.jpg'); ?>"/>
            <img src="<?php echo img('logo-mediatheque-noir.jpg'); ?>"/>
            <img src="<?php echo img('logo ministere culture.jpg'); ?>"/>
            <img src="<?php echo img('logo_NA-Horizontal_Coul.jpg'); ?>"/>
            <img src="<?php echo img('Mairie-bulle-Culture.png'); ?>"/>
        </p>

    </div><!-- end footer-content -->

     <?php fire_plugin_hook('public_footer', array('view'=>$this)); ?>

</footer>

<script type="text/javascript">
    jQuery(document).ready(function(){
        Omeka.showAdvancedForm();
               Omeka.dropDown();
    });
</script>

</body>

</html>
