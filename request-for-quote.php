<!-- CSS Custom Files-->
<link href="css/bootstrap.css" rel="stylesheet">

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
				<div id="request-contact-us">
					<h2 style="max-width: 300px;">Need help looking for a product?</h2>
					<h3 style="max-width: 300px;">Submit a request form!</h3>
					<br>
					<h5>OR</h5>
					<a class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2">CONTACT US</a>
				</div>
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
		        <label for="fullName">Full name</label>
		        <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
		        <div class="invalid-feedback">
		          Valid first name is required.
		        </div>
		      </div>
		      <div class="col-md-6">
		        <label for="address">Address</label>
		        <input type="text" class="form-control" id="address" placeholder="" value="" required>
		        <div class="invalid-feedback">
		          Valid last name is required.
		        </div>
		      </div>
		    </div>
		  	<div class="row">
			    <div class="col-md-6">
			      <label for="email">Email</label>
			      <div class="input-group">
			        <div class="input-group-prepend">
			          <span class="input-group-text"><i class="fa fa-envelope"></i></span>
			        </div>
			        <input type="email" class="form-control" id="email" placeholder="you@example.com" required>
			        <div class="invalid-feedback">
			          Please enter a valid email address for shipping updates.
			        </div>
			      </div>
			    </div>
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
			  </div>
			  <br>
			  <div class="row">
				  <div class="col-md-6">
						<div class="g-recaptcha" data-sitekey="6Lei53wUAAAAAMbYMXgLmWkXyYwlAsoTdwVKKJ7U" data-theme="light" style="transform:scale(.9);-webkit-transform:scale(.9);transform-origin:0 0;-webkit-transform-origin:0 0;"></div>
						<button class="btn btn-success">Request for quote</button>
					</div>
				</div>
			</form>
		</div>
	</div> <!-- col // -->
</div><!-- row // -->

</div><!-- container // -->
</section>
<!-- ========================= SECTION REQUEST .END// ========================= -->