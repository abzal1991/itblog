<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SubscribeSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="subscribe-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'target_type') ?>

    <?= $form->field($model, 'target_id') ?>

    <?= $form->field($model, 'mail') ?>

    <?= $form->field($model, 'date_add') ?>

    <?php // echo $form->field($model, 'date_remove') ?>

    <?php // echo $form->field($model, 'ip') ?>

    <?php // echo $form->field($model, 'key') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
