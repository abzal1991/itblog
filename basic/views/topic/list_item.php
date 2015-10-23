<article>
<h2>
	<a href=''><?=$model->topic_title?></a>
</h2>
<div>categories, groups</div>
<div><?=$model->topicContent->topic_text_short ?></div>
</article>
<footer>
authir 
<br />
comment count=<?=count($model->comment) ?>
</footer>