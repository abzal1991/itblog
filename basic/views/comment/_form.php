<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Comment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="comment-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'comment_pid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'comment_left')->textInput() ?>

    <?= $form->field($model, 'comment_right')->textInput() ?>

    <?= $form->field($model, 'comment_level')->textInput() ?>

    <?= $form->field($model, 'target_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'target_type')->dropDownList([ 'topic' => 'Topic', 'talk' => 'Talk', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'target_parent_id')->textInput() ?>

    <?= $form->field($model, 'user_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'comment_text')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'comment_text_hash')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'comment_date')->textInput() ?>

    <?= $form->field($model, 'comment_user_ip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'comment_rating')->textInput() ?>

    <?= $form->field($model, 'comment_count_vote')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'comment_count_favourite')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'comment_delete')->textInput() ?>

    <?= $form->field($model, 'comment_publish')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
