<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Topic */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="topic-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'blog_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'topic_type')->dropDownList([ 'topic' => 'Topic', 'link' => 'Link', 'question' => 'Question', 'photoset' => 'Photoset', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'topic_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'topic_tags')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'topic_date_add')->textInput() ?>

    <?= $form->field($model, 'topic_date_edit')->textInput() ?>

    <?= $form->field($model, 'topic_user_ip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'topic_publish')->textInput() ?>

    <?= $form->field($model, 'topic_publish_draft')->textInput() ?>

    <?= $form->field($model, 'topic_publish_index')->textInput() ?>

    <?= $form->field($model, 'topic_rating')->textInput() ?>

    <?= $form->field($model, 'topic_count_vote')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'topic_count_vote_up')->textInput() ?>

    <?= $form->field($model, 'topic_count_vote_down')->textInput() ?>

    <?= $form->field($model, 'topic_count_vote_abstain')->textInput() ?>

    <?= $form->field($model, 'topic_count_read')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'topic_count_comment')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'topic_count_favourite')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'topic_cut_text')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'topic_forbid_comment')->textInput() ?>

    <?= $form->field($model, 'topic_text_hash')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
