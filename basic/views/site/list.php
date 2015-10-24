<div class="vp-poll-list-header">
    <a href="#" class="active">Жаңа</a>
    <a href="#">Танымал</a>
    <a href="#">Талқыланып жатқан</a>
    <strong></strong>
</div>
<div class="vp-poll-list">
    <div class="vp-container">
        <?php
        use yii\helpers\Html;
        use yii\widgets\LinkPager;


        foreach ($models as $model) {
            //echo $model->topic_title."</br>";
            echo $this->render('list_item', ['model'=> $model, 'pages'=>$pages]);
        }

        echo LinkPager::widget([
            'pagination' => $pages,
        ]);

        ?>
    </div>
</div>