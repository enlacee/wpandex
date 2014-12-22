<?php
/**
 * 
 * 
 * 
 * 
 */
    $attachments = new Attachments( 'attachments' );              
    $flag = false;
    if ($attachments->total() > 0) {
        while($attachments->get()) {
            if ($attachments->type() == 'image') {
                $flag = true; break;
            }
        }
        $attachments->rewind();
    }   

    
    if ($flag) {
        $item_carousel = array();     
        if( $attachments->exist() ) {
            while($attachments->get()) {
                if ($attachments->url() != '' &&   $attachments->type() == 'image') {
                    $thumbnail = $attachments->src('thumbnail');
                    $item_carousel[] = <<<ITEM
          <div data-thumb="{$attachments->url()}"  style="overflow: hidden; text-align: center;">
            <div class="bg-slide-vertical-title">
                <div class="slide-vertical-title">{$attachments->field('title')}</div>
            </div>
            <img src="{$attachments->url()}" alt="{$attachments->field('title')}" />            
          </div>
ITEM;
                }
            }
            $item_string_carousel = implode(" ", $item_carousel);
        }
    }    
?>
<?php if ($flag): ?>
    <link rel="stylesheet"  href="<?php echo get_template_directory_uri() ?>/assets/plugins/lightSlider/css/lightSlider.css"/>
    <style>
    .slide-vertical-title {       
        font-size: 14px;
        color: white;
       font-weight: bold;
       text-align: left;
        padding: 0 0 0 15px;
    }
    .bg-slide-vertical-title {
        position: absolute;  
        background-color: rgba(0, 0, 0, 0.5);
        width: 100%;
    }
    </style>
    <script src="<?php echo get_template_directory_uri() ?>/assets/plugins/lightSlider/js/jquery.lightSlider.js"></script> 
    <script>
    $(document).ready(function() {
        $('#vertical').lightSlider({
          gallery:true,
          item:1,
          vertical:true,
          verticalHeight:295,
          vThumbWidth:50,
          thumbItem:8,
          thumbMargin:4,
          slideMargin:0
        });  
      });
    </script>
    

    <div class="demo ">
        <ul id="vertical">
            <?php echo $item_string_carousel; ?>
        </ul>
    </div>
<?php else: ?>
    
<?php endif; ?>
