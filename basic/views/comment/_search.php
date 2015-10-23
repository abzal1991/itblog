<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CommentSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="comment-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'comment_id') ?>

    <?= $form->field($model, 'comment_pid') ?>

    <?= $form->field($model, 'comment_left') ?>

    <?= $form->field($model, 'comment_right') ?>

    <?= $form->field($model, 'comment_level') ?>

    <?php // echo $form->field($model, 'target_id') ?>

    <?php // echo $form->field($model, 'target_type') ?>

    <?php // echo $form->field($model, 'target_parent_id') ?>

    <?php // echo $form->field($model, 'user_id') ?>

    <?php // echo $form->field($model, 'comment_text') ?>

    <?php // echo $form->field($model, 'comment_text_hash') ?>

    <?php // echo $form->field($model, 'comment_date') ?>

    <?php // echo $form->field($model, 'comment_user_ip') ?>

    <?php // echo $form->field($model, 'comment_rating') ?>

    <?php // echo $form->field($model, 'comment_count_vote') ?>

    <?php // echo $form->field($model, 'comment_count_favourite') ?>

    <?php // echo $form->field($model, 'comment_delete') ?>

    <?php // echo $form->field($model, 'comment_publish') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
