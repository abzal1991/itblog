<?php
use app\components\SubscribeWidget;
 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
        <title>ITBLOG.kz</title>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        
    </head>

    <body>

    <div class="vp-wrapper">

        <div class="vp-middle">

            <div class="vp-container">
                <div class="vp-content">
                    <?=SubscribeWidget::widget() ?>
                </div>
                <div class="vp-content">
                    <a href="./">ITBLOG.kz</a>

                    <main class="vp-main-place">
                      <?php  echo $this->render('list', ['models'=> $models, 'pages'=>$pages]);?>

                    </main>
                </div><!-- .content -->
            </div><!-- .container-->



        </div><!-- .middle-->

    </div><!-- .wrapper -->

    </body>
</html>