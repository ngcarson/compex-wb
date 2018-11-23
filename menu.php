<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Compex Consumer Electronics And Office Equipment Online Store</title>
	<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
</head>

<body>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark sticky-top bg-company-red">
	<a class="navbar-brand" href="#"><img src="img/logo-white.png"></a>
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
			    	<a class="dropdown-item" href="products-lists">Smart Phones & Tablets</a>
			    	<a class="dropdown-item" href="products-lists">Laptops & Desktops</a>
			    	<a class="dropdown-item" href="products-lists">Computer Accessories</a>
			    	<a class="dropdown-item" href="products-lists">Cameras & Camcorders</a>
			    	<a class="dropdown-item" href="products-lists">Office Equipments</a>
			    	<a class="dropdown-item" href="products-lists">Printers & Inks</a>
			    	<a class="dropdown-item" href="products-lists">Smart Home & Car Products</a>
			    	<a class="dropdown-item" href="products-lists">Speakers & Headphones</a>
			    	<a class="dropdown-item" href="products-lists">Storage & Flash</a>
			    	<a class="dropdown-item" href="products-lists">Furnitures</a>
			    	<div class="dropdown-divider"></div>
			    	<a class="dropdown-item" href="#">COMPEX SPECIAL DEALS</a>
			  	</div>
			  </div>
			</li>
			<li class="nav-item">
					<a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModal2">CONTACT US</a>
			</li>
			<li class="nav-item">
					<a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModal">BANK DETAIL</a>
			</li>
			<li class="nav-item">
					<a class="nav-link" href="cart.php"><i class="fa fa-shopping-cart"></i> CART <span class="badge badge-secondary badge-pill">3</span></a>
			</li>
		</ul>
    <form class="input-group col-md-4">
      <input class="form-control py-2 btn-outline-light" type="search" placeholder="Search products" id="example-search-input">
      <span class="input-group-append">
        <button class="btn btn-outline-light" type="submit">
            <i class="fa fa-search"></i>
        </button>
      </span>
		</form>
	</div>
</nav>

<!-- Modal For Bank Details -->
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
        <?php echo file_get_contents('bank-details.txt') ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal For Contact Us -->
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
        <p id="contact-1">
	        Email:  sales@compex.com.ph<br>
					Landline: 711-0288<br>
					Globe: 0917-829-0288<br>
					Smart: 0999-993-1498<br>
					Fax: 711-0614<br>
					Facebook: <a href="http://www.facebook.com/compexinternational" id="fb-link">Visit Us</a></p>
				<hr class="light" id="border-collection">
				<p id="contact-1">
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

<!-- Modal For Shipping Options -->
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
        <?php echo file_get_contents('shipping-options.txt') ?>
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
				<a href="#" class="nav-link" href="#" data-toggle="modal" data-target="#exampleModal3">
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