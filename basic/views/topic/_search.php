<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TopicSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="topic-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'topic_id') ?>

    <?= $form->field($model, 'blog_id') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'topic_type') ?>

    <?= $form->field($model, 'topic_title') ?>

    <?php // echo $form->field($model, 'topic_tags') ?>

    <?php // echo $form->field($model, 'topic_date_add') ?>

    <?php // echo $form->field($model, 'topic_date_edit') ?>

    <?php // echo $form->field($model, 'topic_user_ip') ?>

    <?php // echo $form->field($model, 'topic_publish') ?>

    <?php // echo $form->field($model, 'topic_publish_draft') ?>

    <?php // echo $form->field($model, 'topic_publish_index') ?>

    <?php // echo $form->field($model, 'topic_rating') ?>

    <?php // echo $form->field($model, 'topic_count_vote') ?>

    <?php // echo $form->field($model, 'topic_count_vote_up') ?>

    <?php // echo $form->field($model, 'topic_count_vote_down') ?>

    <?php // echo $form->field($model, 'topic_count_vote_abstain') ?>

    <?php // echo $form->field($model, 'topic_count_read') ?>

    <?php // echo $form->field($model, 'topic_count_comment') ?>

    <?php // echo $form->field($model, 'topic_count_favourite') ?>

    <?php // echo $form->field($model, 'topic_cut_text') ?>

    <?php // echo $form->field($model, 'topic_forbid_comment') ?>

    <?php // echo $form->field($model, 'topic_text_hash') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
