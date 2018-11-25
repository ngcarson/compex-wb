<!-- Bootstrap 4 Files-->
<link href="css/bootstrap.css" rel="stylesheet">
<script src="js/bootstrap.bundle.min.js"></script>

<!-- Font Awesome 5 -->
<link rel="stylesheet" href="fonts/fontawesome/css/fontawesome-all.min.css">

<!-- Custom Style -->
<link rel="stylesheet" href="css/ui.css">
<link rel="stylesheet" href="css/responsive.css" media="only screen and (max-width: 1200px)">

<!-- Custom Javascript -->
<script src="js/script.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>

<!-- ========================= SECTION REQUEST ========================= -->
<section class="section-request bg padding-y-sm">
<div class="container">
<header class="section-heading heading-line">
	<h4 class="title-section bg text-uppercase">Request for Quotation</h4>
</header>

<div class="row">
	<div class="col-md-6">
		<figure class="card-banner banner-size-lg">
			<figcaption class="overlay left">
				<br>
				<h2 style="max-width: 300px;">Need help looking for a product?</h2>
				<h3 style="max-width: 300px;">Submit a request form!</h3>
				<br>
				<p>OR, </p>
				<a class="btn btn-warning" href="#">Contact Us</a>
			</figcaption>
			<img src="img/banners/banner-request.jpg">
		</figure>
	</div> <!-- col // -->
	<div class="col-md-6">
		<div class="card card-body">
			<!-- <h5 class="title py-4">Request Us For A Quote.</h5> -->
			<form class="needs-validation" novalidate>
		    <div class="mb-3">
		        <label for="itemName">Product Name</label>
		        <input type="text" class="form-control" id="itemName" placeholder="" value="" required>
		        <div class="invalid-feedback">
		          Item name is required.
		        </div>
		      </div>

		    <div class="row">
		      <div class="col-md-6">
		        <label for="firstName">First name</label>
		        <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
		        <div class="invalid-feedback">
		          Valid first name is required.
		        </div>
		      </div>
		      <div class="col-md-6">
		        <label for="lastName">Last name</label>
		        <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
		        <div class="invalid-feedback">
		          Valid last name is required.
		        </div>
		      </div>
		    </div>

		    <div class="row">
			    <div class="col-md-6">
			      <label for="phone">Phone Number</label>
			      <div class="input-group">
			        <div class="input-group-prepend">
			          <span class="input-group-text"><i class="fa fa-phone"></i></span>
			        </div>
			        <input type="text" class="form-control" id="phone" placeholder="xxx-xxx-xxxx" required>
			        <div class="invalid-feedback" style="width: 100%;">
			          Your username is required.
			        </div>
			      </div>
			    </div>
			    <div class="col-md-6">
			      <label for="email">Email <span class="text-muted">(Optional)</span></label>
			      <div class="input-group">
			        <div class="input-group-prepend">
			          <span class="input-group-text"><i class="fa fa-envelope"></i></span>
			        </div>
			        <input type="email" class="form-control" id="email" placeholder="you@example.com">
			        <div class="invalid-feedback">
			          Please enter a valid email address for shipping updates.
			        </div>
			      </div>
			    </div>
			  </div>
			  <br>
			  <div class="row">
				  <div class="col-md-6">
						<div class="g-recaptcha" data-sitekey="6Lei53wUAAAAAMbYMXgLmWkXyYwlAsoTdwVKKJ7U" data-theme="light" style="transform:scale(.9);-webkit-transform:scale(.9);transform-origin:0 0;-webkit-transform-origin:0 0;"></div>
						<button class="btn btn-warning">Request for quote</button>
					</div>
				</div>
			</form>
		</div>
	</div> <!-- col // -->
</div><!-- row // -->

</div><!-- container // -->
</section>
<!-- ========================= SECTION REQUEST .END// ========================= -->