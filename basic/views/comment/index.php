<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CommentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Comments');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="comment-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Comment'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'comment_id',
            'comment_pid',
            'comment_left',
            'comment_right',
            'comment_level',
            // 'target_id',
            // 'target_type',
            // 'target_parent_id',
            // 'user_id',
            // 'comment_text:ntext',
            // 'comment_text_hash',
            // 'comment_date',
            // 'comment_user_ip',
            // 'comment_rating',
            // 'comment_count_vote',
            // 'comment_count_favourite',
            // 'comment_delete',
            // 'comment_publish',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
