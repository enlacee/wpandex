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
            <div class="subtitle subtitle-bg-3">
                <h2><?php _e('Contact us', 'andexone') ?></h2>
            </div>
			<div>
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3901.3940538432676!2d-76.98831041009787!3d-12.085153445302188!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2spe!4v1421157566087" width="970" height="240" frameborder="0" style="border:0"></iframe>
			</div>

            <div class="row margin-bottom-60">
                <div class="col-md-9">
                    <form action="<?php echo esc_url(admin_url('/admin-ajax.php')); ?> " method="POST" id="contact" name="contact">
                    <fieldset name="field-set-contact" >
                    <ul>
                        <li>
                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">
                                    <span class="color-text-blue">•</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <?php _e('Name', 'andexone') ?></label>
                                <div class="col-md-8">
                                  <input type="text" class="form-control required" name="name" />
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="form-group">
                                <label for="company" class="col-md-4 control-label">
                                    <span class="color-text-blue">•</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <?php _e('Company', 'andexone') ?></label>
                                <div class="col-md-8">
                                  <input type="text" class="form-control" name="company" />
                                </div>
                            </div>                            
                        </li>
                        <li>
                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">
                                    <span class="color-text-blue">•</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <?php _e('Email', 'andexone') ?></label>
                                <div class="col-md-8">
                                  <input type="email" class="form-control required email" name="email" />
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="form-group">
                                <label for="issue" class="col-md-4 control-label">
                                    <span class="color-text-blue">•</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <?php _e('Issue', 'andexone') ?></label>
                                <div class="col-md-8">
                                    <select class="form-control required" name="issue">
                                        <option value="" selected="selected"></option>
                                        <option value="consultation"><?php _e('Consultation', 'andexone') ?></option>
                                        <option value="requeriments"><?php _e('Requeriments', 'andexone') ?></option>
                                        <option value="information"><?php _e('Information', 'andexone') ?></option>
                                    </select>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="form-group">
                                <label for="message" class="col-md-4 control-label">
                                    <span class="color-text-blue">•</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <?php _e('Mensaje', 'andexone') ?></label>
                                <div class="col-md-8">
                                <textarea name="message" class="form-control required" 
                                rows="5" aria-required="true"></textarea>                                  
                                </div>
                            </div>
                        </li>
                        <li>
                        <div class="form-group">
                            <div class="col-sm-offset-10 col-sm-2 text-right">
                                <button type="submit" 
                                class="btn btn-primary color-bg-blue color-text-white btn-sky text-bold"><?php _e('Send', 'andexone') ?></button>
                            </div>
                        </div>
                        </li>
                    </ul>
                    </fieldset>
                    </form>
                    <span id="contact-message" class="hide">
                        <h4><?php _e('Your message was successfully sent, please contact us', 'andexone') ?>.</h4>
                    </span>
                    <span id="contact-message-bad" class="hide">
                        <h4><?php _e("I'm Sorry, Error connection or servidor", 'andexone') ?>.</h4>
                    </span>                    
                </div>

                <div class="col-md-3"></div>
            </div>

        </div>
    </div>
<?php get_footer(); ?>    