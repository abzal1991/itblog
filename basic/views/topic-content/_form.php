<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TopicContent */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="topic-content-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= Html::activeHiddenInput($model, 'topic_id') ?>

    <?= $form->field($model, 'topic_text')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'topic_text_short')->textarea(['rows' => 6]) ?>

   <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
