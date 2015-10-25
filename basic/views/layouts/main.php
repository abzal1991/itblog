<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="container" style="width: 80%">
    <div class="row">


    <div id="content" class="col-md-9">
        <?php echo $content ?>
    </div>

<div class="col-md-3">
    <aside class="vp-right-sidebar">
        <div class="vp-enter-n-profile">
            <a href="../views/site/enter.html" class="vp-button vp-button-enter">Кіру</a>
            <div class="vp-sidebar-place" data-include="
                            <?php Yii::$app->request->baseUrl;?>/basic/views/layouts/right-sidebar/search.html,
                            <?php Yii::$app->request->baseUrl;?>/basic/views/layouts/right-sidebar/button-newpoll.html,
                            <?php Yii::$app->request->baseUrl; ?>/basic/views/layouts/right-sidebar/comment-of-day.html,
                            <?php Yii::$app->request->baseUrl; ?>/basic/views/layouts/right-sidebar/categories.html
                            ">
            </div>
        </div>
    </aside><!-- .right-sidebar -->
    </div>
    </div>
</div>





<footer class="footer">
    <div class="vp-container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

    </div>
</footer>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="./js/main.js"></script>
<script src="./js/loader.js"></script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
