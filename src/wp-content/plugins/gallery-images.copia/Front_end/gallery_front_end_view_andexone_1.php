<?php
/**
* Component by : Theme Andex One
* Generator of slides
* 
*/
?>
<?php $path_site = plugins_url("", __FILE__); ?>
        <link rel="stylesheet" href="<?php echo $path_site ; ?>/../andex_one/owl-carousel/owl.carousel.css" />
        <link rel="stylesheet" href="<?php echo $path_site ; ?>/../andex_one/owl-carousel/owl.theme.css" />
        <style type="text/css">
#owl-demo .item{
  margin: 3px;
}
#owl-demo .item img{
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
        </style>        
        <script src="<?php echo $path_site ; ?>/../andex_one/owl-carousel/owl.carousel.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
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
  $(".next").click(function(){
    owl.trigger('owl.next');
  })
  $(".prev").click(function(){
    owl.trigger('owl.prev');
  })
  
    });
    </script>

    <!-- Skill Grid Section -->

<div class="div-background margin-bottom-25">
    <div id="owl-demo" class="owl-carousel owl-theme">
        <?php foreach($images as $key=>$row) :  //error_log (print_r($row,true)); var_dump($row); die;
            $imgurl = explode(";",$row->image_url);
            $link = $row->sl_url;
            $descnohtml = strip_tags($row->description);
            $result = substr($descnohtml, 0, 50);
            $imagerowstype = $row->sl_type;
        ?>
        <?php if ($imagerowstype = 'image'): ?>
            <?php if($row->image_url != ';') { ?>
                <div class="item">
                    <a class="group1" href="<?php echo $imgurl[0]; ?>">
                    	<?php // echo wp_get_attachment_image( 1 ); ?>
                       <img id="wd-cl-img<?php echo $key; ?>" alt="<?php echo $row->name; ?>" src="<?php echo $imgurl[0]; ?>"/>
                    </a>
                </div>
            <?php } else { ?>
                <div class="item">
                    <img id="wd-cl-img<?php echo $key; ?>" src="images/noimage.jpg" alt="" />
                </div>
            <?php } ?>       
        <?php endif; ?>

        
      
        <?php endforeach; ?>
    </div>
     <!--
    <div class="customNavigation">
      <a class="btn prev">Previous</a>
      <a class="btn next">Next</a>
    </div>-->
    <!-- Controls -->
    <a class="left carousel-control btn prev" style="height:210px">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control btn next" style="height:210px">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
<div class="wg-boder-white"></div>