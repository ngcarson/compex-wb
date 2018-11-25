<?php include("menu.php"); ?>

<!-- CSS Custom Files -->
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/ui.css">
<link rel="stylesheet" href="css/responsive.css" media="only screen and (max-width: 1200px)">
<link rel="stylesheet" href="fonts/fontawesome/css/fontawesome-all.min.css">

<!-- CSS Plugins Files -->
<link rel="stylesheet" href="plugins/fancybox/fancybox.min.css">
<link rel="stylesheet" href="plugins/owlcarousel/assets/owl.carousel.min.css">
<link rel="stylesheet" href="plugins/owlcarousel/assets/owl.theme.default.css">

<!-- JS Custom Files -->
<script src="js/jquery-2.0.0.min.js"></script>
<script src="js/script.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>

<!-- JS Plugins Files -->
<script src="plugins/fancybox/fancybox.min.js"></script>
<script src="plugins/owlcarousel/owl.carousel.min.js"></script>

<!-- ========================= SECTION CONTENT ========================= -->
<body>
<section class="section-content bg padding-y-sm">
<div class="container">
<div class="card">
  <div class="card-body">
<div class="row">
  <div class="col-md-3-24"> <strong>Your are here:</strong> </div> <!-- col.// -->
  <nav class="col-md-18-24"> 
  <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item"><a href="products-smartphones-tablets">Category name</a></li>
      <li class="breadcrumb-item"><a href="#">Sub category</a></li>
      <li class="breadcrumb-item active" aria-current="page">Items</li>
  </ol>  
  </nav> <!-- col.// -->
  <div class="col-md-3-24 text-right"> 
   <a href="#" data-toggle="tooltip" title="List view"> <i class="fa fa-bars"></i></a>
   <a href="#" data-toggle="tooltip" title="Grid view"> <i class="fa fa-th"></i></a>
  </div> <!-- col.// -->
</div> <!-- row.// -->
<hr>
<div class="row">
  <div class="col-md-3-24"> <strong>Filter by:</strong> </div> <!-- col.// -->
  <div class="col-md-21-24"> 
    <ul class="list-inline">
      <li class="list-inline-item dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">   Product type </a>
            <div class="dropdown-menu p-3" style="max-width:400px;"> 
          <label class="form-check">
            <input type="checkbox" class="form-check-input"><a href="#">Product type 1</a>
          </label>
          <label class="form-check">
            <input type="checkbox" class="form-check-input"><a href="#">Product type 2</a>
          </label>
          <label class="form-check">
            <input type="checkbox" class="form-check-input"><a href="#">Product type 3</a>
          </label>
            </div> <!-- dropdown-menu.// -->
        </li>
        <li class="list-inline-item dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">  Brand name </a>
            <div class="dropdown-menu p-3" style="max-width:400px;"> 
          <label class="form-check">
            <input type="checkbox" class="form-check-input"><a href="#">Brand 1</a>
          </label>
          <label class="form-check">
            <input type="checkbox" class="form-check-input"><a href="#">Brand 2</a>
          </label>
          <label class="form-check">
            <input type="checkbox" class="form-check-input"><a href="#">Brand 3</a>
          </label>
          <label class="form-check">
            <input type="checkbox" class="form-check-input"><a href="#">Brand 4</a>
          </label>
            </div> <!-- dropdown-menu.// -->
        </li>
      <li class="list-inline-item">
        <div class="form-inline">
          <label class="mr-2">Price</label>
        <input class="form-control form-control-sm" placeholder="Min" type="number">
          <span class="px-2"> - </span>
        <input class="form-control form-control-sm" placeholder="Max" type="number">
        <button type="submit" class="btn btn-sm ml-2">Ok</button>
      </div>
      </li>
    </ul>
  </div> <!-- col.// -->
</div> <!-- row.// -->
  </div> <!-- card-body .// -->
</div> <!-- card.// -->

<div class="padding-y-sm">
<span>3897 results for "Item"</span>  
</div>

<div class="row-sm">
<div class="col-6 col-md-3">
  <figure class="card card-product">
    <div class="img-wrap"> <img src="img/items/1.jpg"></div>
    <figcaption class="info-wrap">
      <a href="#" class="title">Good item name</a>
      <div class="price-wrap">
        <span class="price-new">$1280</span>
        <del class="price-old">$1980</del>
      </div> <!-- price-wrap.// -->
        <a href="products-view.php" class="btn btn-dark btn-sm">VIEW </a>
        <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart"></i> BUY</a>
    </figcaption>
  </figure> <!-- card // -->
</div> <!-- col // -->
<div class="col-6 col-md-3">
  <figure class="card card-product">
    <div class="img-wrap"> <img src="img/items/2.jpg"></div>
    <figcaption class="info-wrap">
      <a href="#" class="title">The name of product</a>
      <div class="price-wrap">
        <span class="price-new">$280</span>
        <del class="price-old">$1980</del>
      </div> <!-- price-wrap.// -->
        <a href="products-view.php" class="btn btn-dark btn-sm">VIEW </a>
        <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart"></i> BUY</a>
    </figcaption>
  </figure> <!-- card // -->
</div> <!-- col // -->
<div class="col-6 col-md-3">
  <figure class="card card-product">
    <div class="img-wrap"> <img src="img/items/3.jpg"></div>
    <figcaption class="info-wrap">
      <a href="#" class="title">Good item name</a>
      <div class="price-wrap">
        <span class="price-new">$280</span>
        <del class="price-old">$1980</del>
      </div> <!-- price-wrap.// -->
        <a href="products-view.php" class="btn btn-dark btn-sm">VIEW </a>
        <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart"></i> BUY</a>
    </figcaption>
  </figure> <!-- card // -->
</div> <!-- col // -->
<div class="col-6 col-md-3">
  <figure class="card card-product">
    <div class="img-wrap"> <img src="img/items/4.jpg"></div>
    <figcaption class="info-wrap">
      <a href="#" class="title">Good item name</a>
      <div class="price-wrap">
        <span class="price-new">$280</span>
        <del class="price-old">$1980</del>
      </div> <!-- price-wrap.// -->
      <a href="products-view.php" class="btn btn-dark btn-sm">VIEW </a>
      <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart"></i> BUY</a>
    </figcaption>
  </figure> <!-- card // -->
</div> <!-- col // -->
<div class="col-6 col-md-3">
  <figure class="card card-product">
    <div class="img-wrap"> <img src="img/items/5.jpg"></div>
    <figcaption class="info-wrap">
      <a href="#" class="title">Good item name</a>
      <div class="price-wrap">
        <span class="price-new">$1280</span>
        <del class="price-old">$1980</del>
      </div> <!-- price-wrap.// -->
      <a href="products-view.php" class="btn btn-dark btn-sm">VIEW </a>
      <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart"></i> BUY</a>
    </figcaption>
  </figure> <!-- card // -->
</div> <!-- col // -->
<div class="col-6 col-md-3">
  <figure class="card card-product">
    <div class="img-wrap"> <img src="img/items/6.jpg"></div>
    <figcaption class="info-wrap">
      <a href="#" class="title">The name of product</a>
      <div class="price-wrap">
        <span class="price-new">$280</span>
        <del class="price-old">$1980</del>
      </div> <!-- price-wrap.// -->
      <a href="products-view.php" class="btn btn-dark btn-sm">VIEW </a>
      <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart"></i> BUY</a>
    </figcaption>
  </figure> <!-- card // -->
</div> <!-- col // -->
<div class="col-6 col-md-3">
  <figure class="card card-product">
    <div class="img-wrap"> <img src="img/items/7.jpg"></div>
    <figcaption class="info-wrap">
      <a href="#" class="title">The name of product</a>
      <div class="price-wrap">
        <span class="price-new">$280</span>
        <del class="price-old">$1980</del>
      </div> <!-- price-wrap.// -->
      <a href="products-view.php" class="btn btn-dark btn-sm">VIEW </a>
      <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart"></i> BUY</a>
    </figcaption>
  </figure> <!-- card // -->
</div> <!-- col // -->
<div class="col-6 col-md-3">
  <figure class="card card-product">
    <div class="img-wrap"> <img src="img/items/1.jpg"></div>
    <figcaption class="info-wrap">
      <a href="#" class="title">The name of product</a>
      <div class="price-wrap">
        <span class="price-new">$280</span>
        <del class="price-old">$1980</del>
      </div> <!-- price-wrap.// -->
      <a href="products-view.php" class="btn btn-dark btn-sm">VIEW </a>
      <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart"></i> BUY</a>
    </figcaption>
  </figure> <!-- card // -->
</div> <!-- col // -->
<div class="col-6 col-md-3">
  <figure class="card card-product">
    <div class="img-wrap"> <img src="img/items/2.jpg"></div>
    <figcaption class="info-wrap">
      <a href="#" class="title">The name of product</a>
      <div class="price-wrap">
        <span class="price-new">$1280</span>
        <del class="price-old">$1980</del>
      </div> <!-- price-wrap.// -->
      <a href="products-view.php" class="btn btn-dark btn-sm">VIEW </a>
      <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart"></i> BUY</a>
    </figcaption>
  </figure> <!-- card // -->
</div> <!-- col // -->
<div class="col-6 col-md-3">
  <figure class="card card-product">
    <div class="img-wrap"> <img src="img/items/3.jpg"></div>
    <figcaption class="info-wrap">
      <a href="#" class="title">The name of product</a>
      <div class="price-wrap">
        <span class="price-new">$280</span>
        <del class="price-old">$1980</del>
      </div> <!-- price-wrap.// -->
      <a href="products-view.php" class="btn btn-dark btn-sm">VIEW </a>
      <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart"></i> BUY</a>
    </figcaption>
  </figure> <!-- card // -->
</div> <!-- col // -->
<div class="col-6 col-md-3">
  <figure class="card card-product">
    <div class="img-wrap"> <img src="img/items/4.jpg"></div>
    <figcaption class="info-wrap">
      <a href="#" class="title">The name of product</a>
      <div class="price-wrap">
        <span class="price-new">$280</span>
        <del class="price-old">$1980</del>
      </div> <!-- price-wrap.// -->
      <a href="products-view.php" class="btn btn-dark btn-sm">VIEW </a>
      <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart"></i> BUY</a>
    </figcaption>
  </figure> <!-- card // -->
</div> <!-- col // -->
<div class="col-6 col-md-3">
  <figure class="card card-product">
    <div class="img-wrap"> <img src="img/items/6.jpg"></div>
    <figcaption class="info-wrap">
      <a href="#" class="title">The name of product</a>
      <div class="price-wrap">
        <span class="price-new">$280</span>
        <del class="price-old">$1980</del>
      </div> <!-- price-wrap.// -->
      <a href="products-view.php" class="btn btn-dark btn-sm">VIEW </a>
      <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart"></i> BUY</a>
    </figcaption>
  </figure> <!-- card // -->
</div> <!-- col // -->
</div> <!-- row.// -->


</div><!-- container // -->
</section>
<!-- ========================= SECTION CONTENT .END// ========================= -->

<?php include("footer.php"); ?>