<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        
        <?php $path_site = 'http://localhost/wpandexen/wp-content/plugins/gallery-images/Front_images'; //plugins_url("", __FILE__); ?>
        <link rel="stylesheet" href="<?php echo $path_site ; ?>/../andex_one/owl-carousel/owl.carousel.css" />
        <link rel="stylesheet" href="<?php echo $path_site ; ?>/../andex_one/owl-carousel/owl.theme.css" />
        <style type="text/css">
#owl-demo .item{
  background: #3fbf79;
  padding: 30px 0px;
  margin: 10px;
  color: #FFF;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
  text-align: center;
}
.customNavigation{
  text-align: center;
}
//use styles below to disable ugly selection
.customNavigation a{
  -webkit-user-select: none;
  -khtml-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}
.owl-pagination {
    display: none;
}
        </style>        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="<?php echo $path_site ; ?>/../andex_one/owl-carousel/owl.carousel.min.js"></script>
        <script src="<?php echo $path_site ; ?>/../andex_one/owl-carousel/owl.carousel.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
       
  var owl = $("#owl-demo");
 
  owl.owlCarousel({
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
       
  //$("#owl-demo").owlCarousel();
  
    });
    
    </script>

    <!-- Skill Grid Section -->
<div>
    <div id="owl-demo" class="owl-carousel owl-theme">
      <div class="item"><h1>1</h1></div>
      <div class="item"><h1>2</h1></div>
      <div class="item"><h1>3</h1></div>
      <div class="item"><h1>4</h1></div>
      <div class="item"><h1>5</h1></div>
      <div class="item"><h1>6</h1></div>
      <div class="item"><h1>7</h1></div>
      <div class="item"><h1>8</h1></div>
      <div class="item"><h1>9</h1></div>
      <div class="item"><h1>10</h1></div>
      <div class="item"><h1>11</h1></div>
      <div class="item"><h1>12</h1></div>
      <div class="item"><h1>13</h1></div>
      <div class="item"><h1>14</h1></div>
      <div class="item"><h1>15</h1></div>
      <div class="item"><h1>16</h1></div>
    </div>
     <!--
    <div class="customNavigation">
      <a class="btn prev">Previous</a>
      <a class="btn next">Next</a>
    </div>-->
            <!-- Controls -->
        <a class="left carousel-control btn prev" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control btn next" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
</div>
        
        
        
    </body>
</html>
