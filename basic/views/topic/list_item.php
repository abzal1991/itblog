<article>
<h2>
	<a href=''><?=$model->topic_title?></a>
</h2>
<div>categories, groups</div>
<div class="vp-answers">
	<?=$model->topicContent->topic_text_short ?>
</div>
</article>
<footer>
author, view count

<?=count($model->comments) ?>

<?



?>
</footer>