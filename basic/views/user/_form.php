<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_login')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_password')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_mail')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_skill')->textInput() ?>

    <?= $form->field($model, 'user_date_register')->textInput() ?>

    <?= $form->field($model, 'user_date_activate')->textInput() ?>

    <?= $form->field($model, 'user_date_comment_last')->textInput() ?>

    <?= $form->field($model, 'user_ip_register')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_rating')->textInput() ?>

    <?= $form->field($model, 'user_count_vote')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_activate')->textInput() ?>

    <?= $form->field($model, 'user_activate_key')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_profile_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_profile_sex')->dropDownList([ 'man' => 'Man', 'woman' => 'Woman', 'other' => 'Other', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'user_profile_country')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_profile_region')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_profile_city')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_profile_birthday')->textInput() ?>

    <?= $form->field($model, 'user_profile_about')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'user_profile_date')->textInput() ?>

    <?= $form->field($model, 'user_profile_avatar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_profile_foto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_settings_notice_new_topic')->textInput() ?>

    <?= $form->field($model, 'user_settings_notice_new_comment')->textInput() ?>

    <?= $form->field($model, 'user_settings_notice_new_talk')->textInput() ?>

    <?= $form->field($model, 'user_settings_notice_reply_comment')->textInput() ?>

    <?= $form->field($model, 'user_settings_notice_new_friend')->textInput() ?>

    <?= $form->field($model, 'user_settings_timezone')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
