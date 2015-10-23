<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
        <title>ITBLOG.kz</title>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>

    <div class="vp-wrapper">

        <div class="vp-middle">

            <div class="vp-container">
                <div class="vp-content">
                    <a href="./">ITBLOG.kz</a>
                    <main class="vp-main-place">
                      <?php  echo $this->render('list', ['models'=> $models, 'pages'=>$pages]);?>

                    </main>
                </div><!-- .content -->
            </div><!-- .container-->

            <aside class="vp-right-sidebar">
                <div class="vp-enter-n-profile">
                    <a href="../views/site/enter.html" class="vp-button vp-button-enter">Кіру</a>
                    <div class="vp-sidebar-place" data-include="
                        ../views/layouts/right-sidebar/search.html,
                        ../views/layouts/right-sidebar/button-newpoll.html,
                        ../views/layouts/right-sidebar/comment-of-day.html,
                        ../views/layouts/right-sidebar/categories.html
                        ">
                    </div>
                </div>
            </aside><!-- .right-sidebar -->

        </div><!-- .middle-->

    </div><!-- .wrapper -->

    <footer class="vp-footer">
        <div class="vp-counter"></div>
    </footer><!-- .footer -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="./js/main.js"></script>
    <script src="./js/loader.js"></script>
    </body>
</html>