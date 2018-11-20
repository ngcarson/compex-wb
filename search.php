<!-- Header File -->
<?php include("menu.php"); ?>

<!-- Breadcrumbs -->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Search</li>
  </ol>
</nav>

<!-- Body Content -->
<h5 id="search-title">SEARCH FOR PRODUCTS ON OUR SITE</h5>
<form class="input-group col-md-8" id="search-input-whole">
  <input class="form-control py-2 btn-outline-dark" type="search" placeholder="Search all products..." id="search-input">
  <span class="input-group-append">
    <button class="btn btn-outline-dark" type="submit">
        <i class="fa fa-search" id="search-page-icon"></i>
    </button>
  </span>
</form>

<!-- Footer File -->
<?php include("footer.php"); ?>
