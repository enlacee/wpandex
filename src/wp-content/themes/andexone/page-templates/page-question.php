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
</style> 
    <div class="wrapper-container">
        <div class="container container-me-page color-bg-white ">

            <?php while ( have_posts() ) : the_post(); ?>
                <div class="subtitle subtitle-bg-1 subtitle-bg-4">
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
        <div class="modal-content">
            <form action="<?php echo esc_url(admin_url('/admin-ajax.php')); ?> " method="POST" name="form" id="form" >
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                </div>
                <div class="modal-body">
                      <p><?php _e('For see the answer complete, enter your email and clic in send', 'andexone') ?></p>
                      
                        <div class="form-group">
                          <label for="recipient-name" class="control-label"><strong><?php _e('Email', 'andexone') ?>:</strong></label>
                          <input type="text" class="form-control required email" name="email">
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
