<?
//  Подключение хэдера
include_once('template/header.php');
?>

<div id="colorlib-page">
  <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>

<?
//Подключаю меню
include_once('template/menu.php');
// Подключаю человекопонятную функцию вывода даты
include_once 'admin/vendor/showdata_forpeople.php';
// Подключаю БД
include_once 'admin/vendor/Database.php';
$db = new Database();
?>


    <div id="colorlib-main">
        <section class="ftco-section bg-light ftco-bread">
            <div class="container">
                <div class="row no-gutters slider-text align-items-center">
                    <div class="col-md-12 ftco-animate">
                        <p class="breadcrumbs"><span class="mr-2"><a href="/">Главная</a></span> <span>Контакт</span></p>
                        <?
                        $arr_work = $db->getRow("SELECT * FROM `pages_data`");
                        $arr_user = $db->getRow("SELECT * FROM `users`");

                        ?>
                        <h1 class="mb-3 bread"><?=$arr_work['contact_name']?></h1>
                        <p>
                            <?=$arr_work['contact_text']?>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="ftco-section contact-section">
            <div class="container">
                <div class="row d-flex mb-5 contact-info">
                    <div class="col-md-12 mb-4">
                        <h2 class="h3"><?if($_GET['error']=='false'){?><font color="green">Ваше обращение отправленно!</font><br><?}?>Контактная информация</h2>
                    </div>
                    <div class="w-100"></div>
                    <div class="col-md-3 d-flex">
                        <div class="info bg-light p-4">
                            <p><span>Адрес:</span><br><?=$arr_user['adress']?></p>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex">
                        <div class="info bg-light p-4">
                            <p>
                                <span>Телефон:</span>
                                <br><a href="tel://<?=$arr_user['phone']?>"><?=$arr_user['phone']?>
                                </a></p>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex">
                        <div class="info bg-light p-4">
                            <p><span>Эл.почта:</span> <a href="mailto:<?=$arr_user['email']?>"><?=$arr_user['email']?></a></p>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex">
                        <div class="info bg-light p-4">
                            <p><span>Сайт</span><br> <a href="https://февральскийвзгляд.рф">февральскийвзгляд.рф</a></p>
                        </div>
                    </div>
                </div>
                <div class="row block-9">
                    <div class="col-md-6 order-md-last d-flex">
                        <form action="admin/app/App.php" method="post" class="bg-light p-5 contact-form">
                            <div class="form-group">
                                <input type="hidden" name="action" value="zayavka">
                                <input type="text" name="name" class="form-control" placeholder="Ваше имя">
                            </div>
                            <div class="form-group">
                                <input type="text" name="kontakt" class="form-control" placeholder="Ваш телефон, почта или ВК">
                            </div>
                            <div class="form-group">
                                <textarea name="text" id="" cols="30" rows="7" class="form-control" placeholder="Тут напишите Ваш вопрос"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Направить обращение" class="btn btn-primary py-3 px-5">
                            </div>
                        </form>

                    </div>

                    <div class="col-md-6 d-flex">
                        <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A4db583f5789976de636b340dbf2ddb08a0f5388c92746e8e3b52715e96fa6aa4&amp;source=constructor" width="500" height="400" frameborder="0"></iframe>
                    </div>
                </div>
            </div>
        </section>


<?
// Подключаю футер
include_once('template/footer.php');
?>
