<?php require_once('../../../private/initialize.php'); ?>
<?php
  //$id=isset($_GET["id"])? $_GET["id"] : "Parameter not set yet";
  $id= $_GET["id"]?? 0; // PHP > 7.0

 echo $id;
?>
<a href="show.php?name=<?php echo u('John Doe') ?>">Link-1</a>

<a href="show.php?company=<?php echo u('Widget&More')?>">Link-2</a>

<a href="show.php?query=<?php echo u('!#*?')?>">Link-3</a>