<form id="subscribeFormData" action="<?php echo Yii::$app->params['baseUrl']."?r=subscribe/create-for-news"; ?>" method="post">
<div>
	<input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
	<input type="text" name="Subscribe[mail]" /> 
</div>
<div>
	<input id="btn_save" onclick="btn_save_click()" type="button" value="Save" />
</div>
</form>

<script type="text/javascript">
function btn_save_click(){
	$.post($('#subscribeFormData').attr('action'), $('#subscribeFormData').serialize(), function(response){
		
	},'json');

}
</script>

<div id="result">sadas
	</div>