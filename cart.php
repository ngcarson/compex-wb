<!-- Header File -->
<?php include("menu.php"); ?>

<!-- CSS Files for cards.php -->
<link rel="stylesheet" href="css/cart.css">

<!-- Include the above in your HEAD tag -->

<script src="https://use.fontawesome.com/c560c025cf.js"></script>

<div class="container">
   <div class="card shopping-cart">
            <div class="card-header bg-light text-dark">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                Shopping cart
                <a href="index.php" class="btn btn-outline-info btn-sm pull-right">Continue shopping</a>
                <div class="clearfix"></div>
            </div>
            <div class="card-body">
                    <!-- PRODUCT -->
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-2 text-center">
                                <img class="img-responsive" src="http://placehold.it/120x80" alt="prewiew" width="120" height="80">
                        </div>
                        <div class="col-12 text-sm-center col-sm-12 text-md-center col-md-6">
                            <h5 class="product-name"><strong>Product Name</strong></h5>
                            <h5>
                                <small>Product description</small>
                            </h5>
                        </div>
                        <div class="col-12 col-sm-12 text-sm-center col-md-4 text-md-right row">
                            <div class="col-3 col-sm-3 col-md-6 text-md-right" style="padding-top: 5px">
                                <h6><strong>₱25.00 <span class="text-muted">x</span></strong></h6>
                            </div>
                            <div class="col-4 col-sm-4 col-md-4">
                                <input type="email" class="form-control" value="1">
                            </div>
                            <div class="col-2 col-sm-2 col-md-2 text-right">
                                <button type="button" class="btn btn-outline-danger btn-xs">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <!-- END PRODUCT -->
                    <!-- PRODUCT -->
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-2 text-center">
                                <img class="img-responsive" src="http://placehold.it/120x80" alt="prewiew" width="120" height="80">
                        </div>
                        <div class="col-12 text-sm-center col-sm-12 text-md-center col-md-6">
                            <h5 class="product-name"><strong>Product Name</strong></h5>
                            <h5>
                                <small>Product description</small>
                            </h5>
                        </div>
                        <div class="col-12 col-sm-12 text-sm-center col-md-4 text-md-right row">
                            <div class="col-3 col-sm-3 col-md-6 text-md-right" style="padding-top: 5px">
                                <h6><strong>₱ 25.00 <span class="text-muted">x</span></strong></h6>
                            </div>
                                <div class="col-4 col-sm-4 col-md-4">
                                    <input type="email" class="form-control" value="1">
                                </div>
                            <div class="col-2 col-sm-2 col-md-2 text-right">
                                <button type="button" class="btn btn-outline-danger btn-xs">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <!-- END PRODUCT -->
                <div class="pull-right">
                    <a href="" class="btn btn-secondary pull-right">
                        Update shopping cart
                    </a>
                </div>
            </div>
            <div class="card-footer">
                <div class="coupon col-md-5 col-sm-5 no-padding-left pull-left">
                    <div class="row">
                        <div class="col-6">
                            <input type="text" class="form-control" placeholder="Coupon code">
                        </div>
                        <div class="col-6">
                            <input type="submit" class="btn btn-success" value="Use coupon">
                        </div>
                    </div>
                </div>
                <div class="pull-right" style="margin: 10px">
                    <a href="checkout.php" class="btn btn-primary pull-right">Checkout</a>
                    <div class="pull-right" style="margin: 5px">
                        Total price: <b>₱ 50.00</b>
                    </div>
                </div>
            </div>
        </div>
</div>

<!-- Footer File -->
<?php include("footer.php"); ?>
