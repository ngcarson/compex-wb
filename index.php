<!-- Header File -->
<?php include("menu.php"); ?>

<!--- Image Slider -->
<div id="slides" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#slides" data-slide-to="0" class="active"></li>
    <li data-target="#slides" data-slide-to="1"></li>
    <li data-target="#slides" data-slide-to="2"></li>
  </ul>
  
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/background.png" alt="">
      <div class="carousel-caption">
        <h1 class="display-2">PRODUCT NAME</h1>
        <h3>Short Detailed Specs</h3>
        <button type="button" class="btn btn-primary">SHOP NOW</button>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/background2.png" alt="">
      <div class="carousel-caption">
        <h1 class="display-2">PRODUCT NAME</h1>
        <h3>Short Detailed Specs</h3>
        <button type="button" class="btn btn-primary">SHOP NOW</button>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/background3.png" alt="">
      <div class="carousel-caption">
        <h1 class="display-2">PRODUCT NAME</h1>
        <h3>Short Detailed Specs</h3>
        <button type="button" class="btn btn-primary">LEARN MORE</button>
      </div>
    </div>
  </div>

  <a class="carousel-control-prev" href="#slides" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#slides" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!-- Section For Collections -->
<?php include("cards.php"); ?>

<!-- Section For Request For Quotation -->
<?php include("request-for-quote.php"); ?>

<!-- Footer File -->
<?php include("footer.php"); ?>
