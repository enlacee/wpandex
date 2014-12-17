<?php
/**
 * Template Name: Page Contact Template
 *
 * Description: A page template that provides relation with user o navigator
 * seems this idea was create this page
 *
 * @package Enlacee
 * @subpackage Andex_Onde
 * @since Andex Onde 1.0
 */

get_header(); ?>    
    <div class="wrapper-container">
        <div class="container container-me-page color-bg-white ">
            <div class="subtitle subtitle-bg-1">
                <h2><?php _e('Contáctenos') ?></h2>
            </div>

            <div class="row margin-bottom-60">
                <div class="col-md-9">
                    <form action="<?php echo esc_url(admin_url('/admin-ajax.php')); ?> " method="POST" id="contact" name="contact">
                    <fieldset name="field-set-contact" >
                    <ul>
                        <li>
                            <div class="form-group">
                                <label for="name" class="col-sm-3 control-label">
                                    <span class="color-text-blue">•</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <?php _e('Nombre') ?></label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control required" name="name" />
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="form-group">
                                <label for="company" class="col-sm-3 control-label">
                                    <span class="color-text-blue">•</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <?php _e('Empresa') ?></label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control" name="company" />
                                </div>
                            </div>                            
                        </li>
                        <li>
                            <div class="form-group">
                                <label for="email" class="col-sm-3 control-label">
                                    <span class="color-text-blue">•</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <?php _e('Correo electrónico') ?></label>
                                <div class="col-sm-9">
                                  <input type="email" class="form-control required email" name="email" />
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="form-group">
                                <label for="issue" class="col-sm-3 control-label">
                                    <span class="color-text-blue">•</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <?php _e('Asunto') ?></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control required" name="issue" />
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="form-group">
                                <label for="message" class="col-sm-3 control-label">
                                    <span class="color-text-blue">•</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <?php _e('Mensaje') ?></label>
                                <div class="col-sm-9">
                                <textarea name="message" class="form-control required" 
                                rows="5" aria-required="true"></textarea>                                  
                                </div>
                            </div>
                        </li>
                        <li>
                        <div class="form-group">
                            <div class="col-sm-offset-10 col-sm-2 text-right">
                                <button type="submit" 
                                class="btn btn-primary color-bg-blue color-text-white"><?php _e('Enviar') ?></button>
                            </div>
                        </div>
                        </li>
                    </ul>
                    </fieldset>
                    </form>
                    <span id="contact-message" class="hide">
                        <h4><?php _e('Se envio correctamente su mensajé, Gracias por contáctarnos!.') ?></h4>
                    </span>
                    <span id="contact-message-bad" class="hide">
                        <h4><?php _e("I'm Sorry, Error connection or servidor.") ?></h4>
                    </span>                    
                </div>

                <div class="col-md-3"></div>
            </div>

        </div>
    </div>
<?php get_footer(); ?>    