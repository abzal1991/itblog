<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Topic */

$this->title = $model->topic_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Topics'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="topic-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->topic_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->topic_id], [
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
            'topic_id',
            'blog_id',
            'user_id',
            'topic_type',
            'topic_title',
            'topic_tags',
            'topic_date_add',
            'topic_date_edit',
            'topic_user_ip',
            'topic_publish',
            'topic_publish_draft',
            'topic_publish_index',
            'topic_rating',
            'topic_count_vote',
            'topic_count_vote_up',
            'topic_count_vote_down',
            'topic_count_vote_abstain',
            'topic_count_read',
            'topic_count_comment',
            'topic_count_favourite',
            'topic_cut_text',
            'topic_forbid_comment',
            'topic_text_hash',
        ],
    ]) ?>

</div>
