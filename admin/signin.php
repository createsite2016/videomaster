<?session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Февральский взгляд | панель управления</title>
    <meta name="description" content="mobile first, app, web app, responsive, admin dashboard, flat, flat ui">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/font.css" cache="false">
    <link rel="stylesheet" href="css/style.css">
    <!--[if lt IE 9]>
    <script src="js/ie/respond.min.js" cache="false"></script>
    <script src="js/ie/html5.js" cache="false"></script>
    <![endif]-->
</head>
<body>
<!-- header -->
<header id="header" class="navbar bg bg-black">
</header>
<!-- / header -->
<section id="content">
    <div class="main padder">
        <div class="row">
            <div class="col-lg-4 col-lg-offset-4 m-t-large">

                <section class="panel">
                    <header class="panel-heading text-center">
                        Авторизация
                    </header>
                    <form action="/admin/app/App.php" class="panel-body" method="post">
                        <?if($_GET['error']){?><p class="text-muted text-center"><small><font color="red">Не верный логин или пароль</font></small></p><?}?>
                        <div class="block">
                            <label class="control-label">Логин</label>
                            <input type="hidden" name="action" value="auth">
                            <input type="text" name="login" placeholder="Ваш логин в системе" class="form-control">
                        </div>
                        <div class="block">
                            <label class="control-label">Пароль</label>
                            <input type="password" name="password" id="inputPassword" placeholder="Ваш пароль" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-info">Войти</button>
                        <div class="line line-dashed"></div>
                        <a href="/" class="btn btn-white btn-block">Вернуться назад на сайт</a>
                    </form>
                </section>

            </div>
        </div>
    </div>
</section>
<!-- footer -->
<footer id="footer">
    <div class="text-center padder clearfix">
        <p>
            <small>&copy; Февральский взгляд <?echo date("Y");?>, панель управления</small><br><br>
            <a href="https://www.instagram.com/fevral_skiy/" target="_blank" class="btn btn-xs btn-circle btn-twitter"><i class="icon-instagram"></i></a>
            <a href="https://vk.com/fmuzklip" target="_blank" class="btn btn-xs btn-circle btn-facebook"><i class="icon-vk"></i></a>
            <a href="https://www.youtube.com/channel/UCSDch_y4nHiPL7L17g5UXqg/videos" target="_blank" class="btn btn-xs btn-circle btn-gplus"><i class="icon-youtube"></i></a>
        </p>
    </div>
</footer>
<!-- / footer -->
<script src="js/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.js"></script>
<!-- app -->
<script src="js/app.js"></script>
<script src="js/app.plugin.js"></script>
<script src="js/app.data.js"></script>
</body>
</html>