<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\User */

$this->title = $model->user_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Users'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->user_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->user_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'user_id',
            'user_login',
            'user_password',
            'user_mail',
            'user_skill',
            'user_date_register',
            'user_date_activate',
            'user_date_comment_last',
            'user_ip_register',
            'user_rating',
            'user_count_vote',
            'user_activate',
            'user_activate_key',
            'user_profile_name',
            'user_profile_sex',
            'user_profile_country',
            'user_profile_region',
            'user_profile_city',
            'user_profile_birthday',
            'user_profile_about:ntext',
            'user_profile_date',
            'user_profile_avatar',
            'user_profile_foto',
            'user_settings_notice_new_topic',
            'user_settings_notice_new_comment',
            'user_settings_notice_new_talk',
            'user_settings_notice_reply_comment',
            'user_settings_notice_new_friend',
            'user_settings_timezone',
        ],
    ]) ?>

</div>
