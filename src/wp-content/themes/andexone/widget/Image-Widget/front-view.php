<?php
/**
 * @package AndexOne
 * 
 * helper view for plugin Image-Widget : this extension is very dependent of 
 * plugin Attachments : https://wordpress.org/plugins/attachments/
 * 
 */?>
<?php $path_site = get_template_directory_uri() ?>
    <link rel="stylesheet" href="<?php echo $path_site ; ?>/assets/plugins/owl-carousel/owl.carousel.css" />
    <link rel="stylesheet" href="<?php echo $path_site ; ?>/assets/plugins/owl-carousel/owl.theme.css" />
    <style type="text/css">
        #owl-demo1 .item{
          margin: 3px;
        }
        #owl-demo1 .item img{
          display: block;
          width: 100%;
          height: auto;
          border: 2px solid white;
          border-radius:0;
        }
        /* custom */
        .owl-pagination {
            display: none;
        }
        .div-background {
            background-color: black;
            border-top: 2px dotted white;
            border-bottom: 2px dotted white;
            padding: 10px 0 0 0;
        }
        .customNavigation {
            position:relative;
            top:-75px;
        }
    </style>
<!-- Magnific Popup core CSS file -->
<link rel="stylesheet" href="<?php echo $path_site ; ?>/assets/plugins/magnific-popup/magnific-popup.css"> 
<!-- Magnific Popup core JS file -->
<script src="<?php echo $path_site ; ?>/assets/plugins/magnific-popup/jquery.magnific-popup.js"></script>

    <script src="<?php echo $path_site ; ?>/assets/plugins/owl-carousel/owl.carousel.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
      // 01 enabled component images
      //$('.image-link').magnificPopup({type:'image'});
        $('.popup-gallery').magnificPopup({
          delegate: 'a',
          type: 'image',
          tLoading: 'Loading image #%curr%...',
          mainClass: 'mfp-img-mobile',
          gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0,1] // Will preload 0 - before current, and 1 after the current image
          },
          image: {
            tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
            titleSrc: function(item) {
              return item.el.attr('title');
            }
          }
        });      

        // 02 enabled component accordion
        var owl = $("#owl-demo1");
        owl.owlCarousel({
          items : 4,
          navigation: false,
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: false,
          autoHeight: true,
          afterMove: true,      

        });

        // Custom Navigation Events
        $(".next1").click(function(){
          owl.trigger('owl.next');
        })
        $(".prev1").click(function(){
          owl.trigger('owl.prev');
        })
  
    });
    </script>

<?php
    // $attachments = new Attachments( 'attachments' );    
    $item_carousel = array(); 
    
    if( $attachments->exist() ) {
        while($attachments->get()) {
            if ($attachments->url() != '' &&   $attachments->type() == 'image') {
                $thumbnail = $attachments->src('thumbnail');
                $item_carousel[] = <<<ITEM
        <div class="item">
           <a class="" href="{$attachments->url()}" title="{$attachments->field('title')}">               
              <img style="width:75px" id="wd-cl-img{$attachments->id()}" alt="{$attachments->field('title')}" src="{$thumbnail}"/>
           </a>
       </div>
ITEM;
            }
        }
        $item_string_carousel = implode(" ", $item_carousel);
    } 
?>

<div class="div-background margin-bottom-25">    
    <div id="owl-demo1" class="owl-carousel owl-theme popup-gallery">
        <?php echo $item_string_carousel ?>
    </div>
    <!--<div class="customNavigation">
      <a class="btn prev1">Previous</a>
      <a class="btn next1">Next</a>
    </div>End-Controls --> 

    <!--
    <a class="left carousel-control btn prev" style="height:210px">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control btn next" style="height:210px">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
    -->
</div>
<div class="customNavigation">
  <a class="left carousel-control prev1">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>      
  </a>
  <a class="right carousel-control next1">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>      
  </a>
</div><!-- End-Controls --> 
            
<div class="wg-boder-white"></div>   