<?php
include("inc/data.php");
  // adds new element to an array;


$pageTitle = "Full Catalog";
$section = null;

if (isset($_GET["cat"])){
  if ($_GET["cat"] == "books") {
    $pageTitle = "Books";
    $section = "books";
  }
  elseif ($_GET["cat"] == "movies") {
    $pageTitle = "Movies";
    $section = "movies";
  }
  elseif ($_GET["cat"] == "music") {
    $pageTitle = "Music";
    $section = "music";
  }
}

include 'inc/header.php'; ?>

<div class="section catalog page">
  <h1><?php echo $pageTitle; ?></h1>
  <ul class="items">
    <?php
    foreach($catalog as $item) {
      echo "<li><a href='#'> <img src=' "
      . $item["img"] . "' alt='"
      . $item["title"] . "' />"
      . "<p>View Details</p>"
      ."</a></li>";
    }
    ?>
  </ul>


</div>

<?php include 'inc/footer.php'; ?>
