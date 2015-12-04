<form id="subscribeFormData" action="<?php echo Yii::$app->params['baseUrl']."?r=subscribe/create-for-news"; ?>" method="post">
<div>
	<input id="txt_email" type="text" /> 
</div>
<div>
	<input id="btn_save" onclick="btn_save_click()" type="button" value="Save" />
</div>
</form>

<script type="text/javascript">
function btn_save_click(){
	var em=$('#txt_email').val();
	if(validateEmail(em)){
		$.ajax({
       url: '<?php echo Yii::$app->params['baseUrl'].'?r=subscribe/create-for-news' ?>',
       type: 'post',
       data: {
                 email: em, 
                 _csrf : '<?=Yii::$app->request->getCsrfToken()?>'
             },
       success: function (data) {
          $('#result').html(data);
       }
  	});	
	}else{
		$('#result').css('color','red');
		$('#result').html("Невалидный формат e-mail");
	}
}

function validateEmail(email) {
    var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    return re.test(email);
}
</script>
<div id="result"></div>