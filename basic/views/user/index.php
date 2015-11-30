<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Users');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create User'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'user_id',
            'user_login',
            'user_password',
            'user_mail',
            'user_skill',
            // 'user_date_register',
            // 'user_date_activate',
            // 'user_date_comment_last',
            // 'user_ip_register',
            // 'user_rating',
            // 'user_count_vote',
            // 'user_activate',
            // 'user_activate_key',
            // 'user_profile_name',
            // 'user_profile_sex',
            // 'user_profile_country',
            // 'user_profile_region',
            // 'user_profile_city',
            // 'user_profile_birthday',
            // 'user_profile_about:ntext',
            // 'user_profile_date',
            // 'user_profile_avatar',
            // 'user_profile_foto',
            // 'user_settings_notice_new_topic',
            // 'user_settings_notice_new_comment',
            // 'user_settings_notice_new_talk',
            // 'user_settings_notice_reply_comment',
            // 'user_settings_notice_new_friend',
            // 'user_settings_timezone',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
