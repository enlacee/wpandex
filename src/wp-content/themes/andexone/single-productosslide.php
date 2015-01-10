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
                    $data_thumb_slide = wp_get_attachment_image_src($attachments->id(), 'slides'); // 991x348
                    $thumb_slide = $data_thumb_slide[0];
                    // $attachments->url()
                    $item_carousel[] = <<<ITEM
          <div data-thumb="{$thumb_slide}"  style="overflow: hidden;">
            <div><img src="{$thumb_slide}" alt="{$attachments->field('title')}" /></div>
            <div class="bg-slide-vertical-title">
                <div class="slide-vertical-title">{$attachments->field('title')}</div>
            </div>
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
        line-height: 14px;
        color: white;
        font-weight: bold;
        text-align: left;
        padding: 6px;
    }
    .bg-slide-vertical-title {
        position: relative;  
        background-color: rgba(0, 0, 0, 0.5);
        width: 100%;
        top:-25px;
    }
    /*custom*/
    a.lSPrev, a.lSNext {
      color:#999;
      font-size: 30px;
      background-image: none;
      z-index: 1;
    }   
    </style>
    <script src="<?php echo get_template_directory_uri() ?>/assets/plugins/lightSlider/js/jquery.lightSlider.js"></script> 
    <script>
    $(document).ready(function() {
      /*$('#vertical').lightSlider({
        gallery:true,
        item:1,
        vertical:true,
        verticalHeight:295,
        vThumbWidth:50,
        thumbItem:8,
        thumbMargin:4,
        slideMargin:0
      });
      */
        /**/
      var slider = $('#vertical').lightSlider({
            gallery:true,
            item:1,
            vertical:true,
            verticalHeight:348, /*348*/
            vThumbWidth:50,
            thumbItem:8,
            thumbMargin:4,
            slideMargin:0,
            prevHtml : '<span class="glyphicon glyphicon-chevron-left"></span>',
            nextHtml : '<span class="glyphicon glyphicon-chevron-right"></span>',
            addClass : ''
        });
        // console.log('slider',slider);
        var obj = slider;

        var img = $(obj[0]).find('img');
        for (var i=0; i<img.length; i++) {            
            $(img[i]).attr('width', '991px').attr('height', '348px');
        }

      });
// width="991px"
    </script>
    

    <div class="demo ">
        <ul id="vertical">
            <?php echo $item_string_carousel; ?>
        </ul>
    </div>
<?php else: ?>
    
<?php endif; ?>
