<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Compex Consumer Electronics And Office Equipment Online Store</title>

	<!-- CSS Files -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/ui.css">
	<link rel="stylesheet" href="css/responsive.css" media="only screen and (max-width: 1200px)">
	<link rel="stylesheet" href="css/cart.css">
	<link rel="stylesheet" href="fonts/fontawesome/css/fontawesome-all.min.css">

	<!-- JavaScript Files -->
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/popper.min.js"></script>	
	<script src="js/bootstrap-4.0.0.min.js"></script>
	<script src="js/all-5.0.8.js"></script>
	<script src="https://use.fontawesome.com/c560c025cf.js"></script>

	<!-- Plugin: Fancybox  -->
	<link href="plugins/fancybox/fancybox.min.css" type="text/css" rel="stylesheet">
	<script src="plugins/fancybox/fancybox.min.js" type="text/javascript"></script>

	<!-- Plugin: Owl Carousel -->
	<link href="plugins/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
	<link href="plugins/owlcarousel/assets/owl.theme.default.css" rel="stylesheet">
	<script src="plugins/owlcarousel/owl.carousel.min.js"></script>
</head>

<body>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark sticky-top bg-company-red">
	<a class="navbar-brand" href="index.php"><img src="img/logo-white.png" alt="Compex-Online-Store"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item active">
					<a class="nav-link" href="index.php">HOME</a>
			</li>
			<li class="nav-item">
				<div class="btn-group">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">SHOP</a>
					<div class="dropdown-menu">
			    	<a class="dropdown-item" href="products-lists-grid-view.php">Smart Phones & Tablets</a>
			    	<a class="dropdown-item" href="products-lists-grid-view.php">Laptops & Desktops</a>
			    	<a class="dropdown-item" href="products-lists-grid-view.php">Computer Accessories</a>
			    	<a class="dropdown-item" href="products-lists-grid-view.php">Cameras & Camcorders</a>
			    	<a class="dropdown-item" href="products-lists-grid-view.php">Office Equipments</a>
			    	<a class="dropdown-item" href="products-lists-grid-view.php">Printers & Inks</a>
			    	<a class="dropdown-item" href="products-lists-grid-view.php">Smart Home & Car Products</a>
			    	<a class="dropdown-item" href="products-lists-grid-view.php">Speakers & Headphones</a>
			    	<a class="dropdown-item" href="products-lists-grid-view.php">Storage & Flash</a>
			    	<a class="dropdown-item" href="products-lists-grid-view.php">Furnitures</a>
			    	<div class="dropdown-divider"></div>
			    	<a class="dropdown-item" href="#">COMPEX SPECIAL DEALS</a>
			  	</div>
			  </div>
			</li>
			<li class="nav-item">
					<a class="nav-link" data-toggle="modal" data-target="#exampleModal2">CONTACT US</a>
			</li>
			<li class="nav-item">
					<a class="nav-link" data-toggle="modal" data-target="#exampleModal">BANK DETAIL</a>
			</li>
			<li class="nav-item">
					<a class="nav-link" href="cart.php"><i class="fa fa-shopping-cart"></i> CART <span class="badge badge-secondary badge-pill">3</span></a>
			</li>
		</ul>
    <form class="input-group col-md-4">
      <input class="form-control py-2 btn-outline-light" type="search" placeholder="Search products">
      <span class="input-group-append">
        <button class="btn btn-outline-light" type="submit">
            <i class="fa fa-search"></i>
        </button>
      </span>
		</form>
	</div>
</nav>

<!-- Pop Up Modal For Bank Details -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">BANK DETAILS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo file_get_contents('text/bank-details.txt') ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Pop Up Modal For Contact Us -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel2">CONTACT US</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="contact-1">
	        Email: sales@compex.com.ph<br>
					Landline: 711-0288<br>
					Globe: 0917-829-0288<br>
					Smart: 0999-993-1498<br>
					Fax: 711-0614<br>
					Facebook: <a href="http://www.facebook.com/compexinternational" id="fb-link">Visit Us</a></p>
				<hr class="light" id="border-collection">
				<p class="contact-1">
					Address:<br>
					341 GBW Bldg. Quezon Avenue<br>
					Quezon City, Philippines
				</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Pop Up Modal For Shipping Options -->
<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel3">SHIPPING OPTIONS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo file_get_contents('text/shipping-options.txt') ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!--- Jumbotron -->
<div class="jumbotron jumbotron-fluid" id="jumbotron-main">
  <div class="container-fluid">
    <ul class="font-xxs uppercase">
			<li class="banner">
				<a href="#">
					<i class="fa fa-tag"></i>
					<span class="regular">Lowest Price </span>
					<span class="extrabold">Guarantee</span>
				</a>
			</li>
			<li class="banner">
				<a href="reserve-online.php">
					<i class="fa fa-laptop"></i>
					<span class="regular">Reserve Online </span>
					<span class="extrabold">Pick Up In-Store</span>
				</a>
			</li>
			<li class="banner">
				<a class="banner" data-toggle="modal" data-target="#exampleModal3">
					<i class="fa fa-truck"></i>
					<span class="regular">Shipping </span>
					<span class="extrabold">Available</span>
				</a>
			</li>
			<li class="banner">
				<a href="order-status.php">
					<i class="fa fa-calendar-check"></i>
					<span class="regular">Order </span>
					<span class="extrabold">Status</span>
				</a>
			</li>
		</ul>
  </div>
</div>
</body>
</html>