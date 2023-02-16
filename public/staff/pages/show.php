<?php require_once('../../../private/initialize.php'); ?>
<?php
  //$id=isset($_GET["id"])? $_GET["id"] : "Parameter not set yet";
  $id= $_GET["id"]?? 0; // PHP > 7.0

 echo "Page-".h($id);
?>
