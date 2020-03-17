
<div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
  <ol class="carousel-indicators">
  <?php
        $counter_indicator = 0;
        while($list_indicator = mysqli_fetch_array($get_slider_indicator)){
    ?>
    <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $counter_indicator; ?>" class="<?php if($counter_indicator <= 0){echo 'active'; } ?>"></li>
    <?php
        $counter_indicator++;
    }
    ?>
    <!--<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li> -->
  </ol>
  <div class="carousel-inner">
    <!-- 
    <div class="carousel-item active">
      <a href="#"><img class="d-none d-md-block w-60 mx-auto mt-3" src="imgs/banner-01.png" alt="First slide"></a>
      <a href="#"><img class="d-block d-md-none w-100 mx-auto" src="imgs/banner-01.png" alt="First slide"></a>
    </div>
    <div class="carousel-item">
      <img class="d-none d-md-block w-60 mx-auto mt-3" src="imgs/banner-02.png" alt="First slide">
      <img class="d-block d-md-none w-100 mx-auto" src="imgs/banner-02.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-none d-md-block w-60 mx-auto mt-3" src="imgs/banner-03.png" alt="First slide">
      <img class="d-block d-md-none w-100 mx-auto" src="imgs/banner-03.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-none d-md-block w-60 mx-auto mt-3" src="imgs/banner-04.png" alt="First slide">
      <img class="d-block d-md-none w-100 mx-auto" src="imgs/banner-04.png" alt="First slide">
    </div>  
    -->
    <?php
        $counter = 1;
        while($list_sliders = mysqli_fetch_array($get_slider)){
    ?>
    <div class='carousel-item<?php if($counter <= 1){echo ' active'; } ?>'>
        <a href="<?php echo $list_sliders[link_slider]; ?>"><img class='d-none d-md-block w-60 mx-auto mt-3' src='<?php echo $list_sliders[img_slider]; ?>'></a>
        <a href="<?php echo $list_sliders[link_slider]; ?>"><img class='d-block d-md-none w-100 mx-auto' src='<?php echo $list_sliders[img_slider]; ?>'></a>
    </div>
    <?php
        $counter++;
    }
    ?>
  </div>
  
</div>