<?php

use yii\helpers\Html;
use yii\widgets\LinkPager;


foreach ($models as $model) {
	//echo $model->topic_title."</br>";
    echo $this->render('list_item', ['model'=> $model]); 
}

echo LinkPager::widget([
    'pagination' => $pages,
]);

?>

