<?php
/**
* Custom :
* requerid : plugin Gallery Images
*
* */
    $id_gallery = false;
    $patron = '[huge_it_gallery id="';
    $start =  strpos(get_the_content(), $patron);

    if ($start !== false && is_int($start)) {
        $string_id_gallery = substr(get_the_content(), $start+(strlen($patron)), 7);
        $dat = preg_split('~"~', $string_id_gallery);
        if (count($dat) > 0) {
            $id_gallery = (int) $dat[0];
        }
        
    }

    if ($id_gallery != false) {
        $id = $id_gallery;
        $query=$wpdb->prepare("SELECT * FROM ".$wpdb->prefix."huge_itgallery_images where gallery_id = '%d' order by ordering ASC",$id);
        $images=$wpdb->get_results($query);

        $query=$wpdb->prepare("SELECT * FROM ".$wpdb->prefix."huge_itgallery_gallerys where id = '%d' order by id ASC",$id);
        $gallery=$wpdb->get_results($query); 

        //var_dump($gallery);
        $flag_gallery = !empty($gallery[0]->huge_it_sl_effects) ? $gallery[0]->huge_it_sl_effects : false;
                 
        foreach ($images as $key => $row) {
            $imgurl = explode(";",$row->image_url);
            $link = empty($row->sl_url) ? 'javascript::void()' : $row->sl_url;
            $descnohtml = strip_tags($row->description);
            $result = substr($descnohtml, 0, 50);
            $imagerowstype = $row->sl_type;        

            if ($imagerowstype = 'image') {
                if($row->image_url != ';') { // 991x348
                $item_carousel[] = <<<ITEM
                  <div data-thumb="{$imgurl[0]}"  style="overflow: hidden;">
                    <div><img src="{$imgurl[0]}" alt="{$row->name}" /></div>
                    <div class="bg-slide-vertical-title">
                        <div class="slide-vertical-title">{$row->name}</div>
                    </div>
                  </div>
ITEM;

                }
                
            }
        }
        $item_string_carousel = implode(" ", $item_carousel);
    }
   
?>
<?php if ($id_gallery && $flag_gallery != false): ?>
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
            addClass : '',
            auto : true,
            loop : true
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
