<?php
/**
 * Template Name: Page Questions and Answer
 *
 * Description: A page template that provides all space One Column
 * @package Enlacee
 * @subpackage Andex_Onde
 * @since Andex Onde 1.0
 */

get_header(); ?>
<style type="text/css">
    .container-me-page {
        padding: 0 0 0 15px;
    }
    /*custom modal*/
    .modal-content {
        border:0;
        background-color: white;
        -webkit-border-radius: 0 0 0 0;
        border-radius: 0 0 0 0;
    }
    .modal-header, .modal-body {
        padding : 0 0 30px 0;
        border:0;
        margin:0 0 0 40px;
        
    }
    .modal-header {
        margin-bottom:10px;
    }
    .modal-footer {
        border:0;
        padding-top: 25px;
        padding-bottom: 25px;
    }
</style> 
    <div class="wrapper-container">
        <div class="container container-me-page color-bg-white ">

            <?php while ( have_posts() ) : the_post(); ?>
                <div class="subtitle subtitle-bg-5">
                    <h2>&nbsp;&nbsp;&nbsp;&nbsp;<?php the_title(); ?></h2>
                </div>

                <div class="page-one-colum">
                    <?php if (isset($_REQUEST['key'])): ?>
                        <?php 
                        $string = get_the_content();
                        $string = str_replace('class="hide"', 'class=""', $string);
                        $string = str_replace('class="read-more"', 'class="hide"', $string); // hide button
                        echo $string;
                        ?>
                    <?php else: ?>
                        <?php the_content(); ?>
                    <?php endif?>

                </div>
            <?php endwhile; // end of the loop. ?>


        </div>
    </div>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content subtitle-bg-5">
            <form action="<?php echo esc_url(admin_url('/admin-ajax.php')); ?> " method="POST" name="form" id="form" >
                <div class="modal-header ">
                    <div class="subtitle ">
                        <h2 font-weight:100"><?php the_title(); ?></h2>
                    </div>

                    <h4 class="modal-title hide" id="myModalLabel">Modal title</h4>
                </div>
                <div class="modal-body">
                    <p><?php _e('For see the answer complete, enter your email and clic in send', 'andexone') ?></p>
                    <br/><br/>
                    <div class="form-group">
                        <div class="row">
                            
                            <label for="Nombre" class="col-sm-4 control-label"><span class="color-text-green-dark">▪</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php _e('Nombre y Apellido', 'andexone') ?></label>
                            <div class="col-sm-6">
                              <input type="text" class="form-control required"  name="nombre">
                            </div>

                            <label for="telefono" class="col-sm-4 control-label"><span class="color-text-green-dark">▪</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php _e('Teléfono', 'andexone') ?></label>
                            <div class="col-sm-6">
                              <input type="text" class="form-control"  name="telefono">
                            </div>

                            <label for="email" class="col-sm-4 control-label"><span class="color-text-green-dark">▪</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php _e('Email', 'andexone') ?></label>
                            <div class="col-sm-6">
                              <input type="text" class="form-control required email"  name="email">
                            </div>
                            
                            <label for="empresa" class="col-sm-4 control-label"><span class="color-text-green-dark">▪</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php _e('Empresa', 'andexone') ?></label>
                            <div class="col-sm-6">
                              <input type="text" class="form-control"  name="empresa">
                            </div>

                            <label for="web" class="col-sm-4 control-label"><span class="color-text-green-dark">▪</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php _e('Página Web', 'andexone') ?></label>
                            <div class="col-sm-6">
                              <input type="text" class="form-control"  name="web">
                            </div>                  
                    
                            <div class="col-sm-2"></div>
                        </div>
                    </div>

                    <input type="hidden" class="form-control" id ="issue" name="issue" value="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary color-bg-blue color-text-white btn-sky text-bold" data-dismiss="modal"><?php _e('Cancel', 'andexone') ?></button>
                    <button type="submit" class="btn btn-primary color-bg-blue color-text-white btn-sky text-bold"><?php _e('Send', 'andexone') ?></button>        
                </div>
            </form>
        </div>
    </div>
</div>
<?php get_footer(); ?>    
