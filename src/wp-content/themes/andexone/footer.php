            <!-- FOOTER -->
            <footer class="footer ">
                <div class="col-md-8 footer-line-blue"></div>
                <div class="col-md-4 footer-line-sky"></div>
                <div class="margin-bottom-10"></div>
                <div class="container">
                    <div class="col-md-5 footer-item-one">
                        <p><?php _e('Contact us at', 'andexone') ?>:<br />
                            <span class="text-unbold">(511)</span> 4367442<br />
                        Av. Javier Prado Este 3569, San Borja, Lima 41 - Perú
                        <span class="color-text-blue-dark"><a href="mailto:geosoluciones@andex.com.pe">geosoluciones@andex.com.pe</a></span>
                        </p>
                    </div>
                    <div class="col-md-4"><?php _e('Andex © .All rights reserved', 'andexone') ?></div>
                    <div class="col-md-3 text-right">
                        <a href="https://www.facebook.com/pages/ANDEX-Ciudades-Verdes/547825721923640?ref=hl" target="other">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/social/facebook.png" alt="skype">
                        </a>
                        <!-- <a href="javascript::void()">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/social/twitter.png" alt="twitter">
                        </a> -->
                        <a href="https://www.youtube.com/user/geosoluciones1/feed?activity_view=3" target="other">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/social/youtube.png" alt="youtube">
                        </a><br /><br />
                        <?php 
                            $d1 = new DateTime('1991-01-01');
                            $d2 = new DateTime();
                            $interval = $d1->diff($d2);
                            $anios = $interval->format('%Y');
                        ?>
                        
                        <p><span class="text-footer-year subtitle-bg-0">
                            <?php printf( __( 'Andex %s Years innovating', 'andexone' ), $anios ); ?>
                        </span></p>
                    </div>
                </div>
            </footer>

        </div><!-- end-wrapper -->

        
        <!-- <div class="div-social hidden-xs">
             <a href="https://www.facebook.com/pages/ANDEX-Ciudades-Verdes/547825721923640?ref=hl" target="other">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/social/facebook.png" alt="skype">
            </a>
           <a href="javascript::void()">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/social/twitter.png" alt="twitter">
            </a> 
            <a href="https://www.youtube.com/user/geosoluciones1/feed?activity_view=3" target="other">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/social/youtube.png" alt="youtube">
            </a>-->
            <!-- <a href="javascript::void()">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/social/linkedin.png" alt="linkedin">
            </a> 
        </div> End . social-->       

    <?php wp_footer(); ?>
    </body>
</html>

