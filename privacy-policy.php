<!-- Header File -->
<?php include("menu.php"); ?>

<div class="container">
  <!-- Breadcrumbs -->
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Privacy Policy</li>
    </ol>
  </nav>

<!-- Body Content -->
<div id="txt-file">
	<?php echo file_get_contents('privacy-policy.txt') ?>
</div>

<!-- Footer File -->
<?php include("footer.php"); ?>
