<?php  include(VIEWS.'inc'.DS.'header.php'); ?>
    <h1><?php echo $page ?></h1>
    <ul>
    <?php foreach($categories as $cat): ?>
        <li>  <?php echo $cat['cat_name']; ?> </li>
    <?php  endforeach; ?>
    </ul>
<?php  include(VIEWS.'inc'.DS.'footer.php'); ?>


  
 