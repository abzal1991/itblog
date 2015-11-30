<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UserSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'user_login') ?>

    <?= $form->field($model, 'user_password') ?>

    <?= $form->field($model, 'user_mail') ?>

    <?= $form->field($model, 'user_skill') ?>

    <?php // echo $form->field($model, 'user_date_register') ?>

    <?php // echo $form->field($model, 'user_date_activate') ?>

    <?php // echo $form->field($model, 'user_date_comment_last') ?>

    <?php // echo $form->field($model, 'user_ip_register') ?>

    <?php // echo $form->field($model, 'user_rating') ?>

    <?php // echo $form->field($model, 'user_count_vote') ?>

    <?php // echo $form->field($model, 'user_activate') ?>

    <?php // echo $form->field($model, 'user_activate_key') ?>

    <?php // echo $form->field($model, 'user_profile_name') ?>

    <?php // echo $form->field($model, 'user_profile_sex') ?>

    <?php // echo $form->field($model, 'user_profile_country') ?>

    <?php // echo $form->field($model, 'user_profile_region') ?>

    <?php // echo $form->field($model, 'user_profile_city') ?>

    <?php // echo $form->field($model, 'user_profile_birthday') ?>

    <?php // echo $form->field($model, 'user_profile_about') ?>

    <?php // echo $form->field($model, 'user_profile_date') ?>

    <?php // echo $form->field($model, 'user_profile_avatar') ?>

    <?php // echo $form->field($model, 'user_profile_foto') ?>

    <?php // echo $form->field($model, 'user_settings_notice_new_topic') ?>

    <?php // echo $form->field($model, 'user_settings_notice_new_comment') ?>

    <?php // echo $form->field($model, 'user_settings_notice_new_talk') ?>

    <?php // echo $form->field($model, 'user_settings_notice_reply_comment') ?>

    <?php // echo $form->field($model, 'user_settings_notice_new_friend') ?>

    <?php // echo $form->field($model, 'user_settings_timezone') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
