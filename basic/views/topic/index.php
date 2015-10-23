<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TopicSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Topics');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="topic-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Topic'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'topic_id',
            'blog_id',
            'user_id',
            'topic_type',
            'topic_title',
            // 'topic_tags',
            // 'topic_date_add',
            // 'topic_date_edit',
            // 'topic_user_ip',
            // 'topic_publish',
            // 'topic_publish_draft',
            // 'topic_publish_index',
            // 'topic_rating',
            // 'topic_count_vote',
            // 'topic_count_vote_up',
            // 'topic_count_vote_down',
            // 'topic_count_vote_abstain',
            // 'topic_count_read',
            // 'topic_count_comment',
            // 'topic_count_favourite',
            // 'topic_cut_text',
            // 'topic_forbid_comment',
            // 'topic_text_hash',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
