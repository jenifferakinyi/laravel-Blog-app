<h1><?php echo  $heading?></h1>
<?php foreach($listings as $listings): ?>
    <?php echo $listings['id'];?>:
<h2><?php echo $listings['title'];?></h2>
<p><?php echo $listings['description'];?></p>
<?php endforeach ?>


blade version
<h1>{{ $heading }}</h1>
@foreach($listings as $listings)
<h2>{{ $listings['title']}}</h2>
<p>{{ $listings['description']}}</p>
@endforeach

