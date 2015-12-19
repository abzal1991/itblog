<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Topic */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="topic-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'topic_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'topic_type')->dropDownList([ 'topic' => 'Программалау', 'hardware' => 'Темір жабдықтар', 'general' => 'Жалпы IT', 'design' => 'Дизайн және UX', ]) ?>

    <?= $form->field($model, 'topic_tags')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Келесі') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
