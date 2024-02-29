<h1><?php echo  $heading?></h1>
<?php foreach($listings as $listings): ?>
<?php echo $listings['id'];?>:
<h2><?php echo $listings['title'];?></h2>
<p><?php echo $listings['description'];?></p>
<?php endforeach ?>




