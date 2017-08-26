<?php
/* @var $this yii\web\View */
?>


<h1>Posts</h1>
<?php foreach ($post as $key => $post): ?>
	<div class="col-md-3">
		<h2><?php echo $post->title?></h2>
		<h3><?php echo $post->description?></h3>
		<h4><?php echo $post->text?></h4>
	</div>

<?php endforeach ?>