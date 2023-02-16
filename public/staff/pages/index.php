<?php require_once('../../../private/initialize.php'); ?>

<?php
  $pages = [
    ['id' => '1', 'name' => 'Page-1', 'visible' => '1' ],
    ['id' => '2', 'name' => 'Page-2', 'visible' => '1'],
    ['id' => '3', 'name' => 'Page-3', 'visible' => '1'],
    ['id' => '4', 'name' => 'Page-4', 'visible' => '1']
  ];
?>

<?php $page_title = 'Pages'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">
  <div class="subjects listing">
    <h1><?= $page_title?></h1>

    <div class="actions">
      <a class="action" href="">Create New Page</a>
    </div>

  	<table class="list">
  	  <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Visible</th>
  	    <th>&nbsp;</th>
  	    <th>&nbsp;</th>
        <th>&nbsp;</th>
  	  </tr>

      <?php foreach($pages as $page) { ?>
        <tr>
          <td><?php echo h($page['id']); ?></td>
          <td><?php echo h($page['name']); ?></td>
          <td><?php echo $page['visible'] == 1 ? 'true' : 'false'; ?></td>
          <td><a class="action" href="<?php echo url_for('/staff/pages/show.php?id='.$page['id']);?>">View</a></td>
          <td><a class="action" href="">Edit</a></td>
          <td><a class="action" href="">Delete</a></td>
    	  </tr>
      <?php } ?>
  	</table>

  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
