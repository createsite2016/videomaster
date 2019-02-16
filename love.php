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
                        <p class="breadcrumbs"><span class="mr-2"><a href="/">Главная</a></span><span>Признания</span></p>
                        <?
                        $arr_work = $db->getRow("SELECT * FROM `pages_data`");
                        ?>
                        <h1 class="mb-3 bread"><h2 class="h3"><?if($_GET['error']=='false'){?><font color="green">Ваш отзыв отправлен!</font><br><?}?><?echo $arr_work['peoples_name'];?></h1>
                        <p>
                            <?echo $arr_work['peoples_text'];?>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="ftco-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 ftco-animate">


                        <div class="pt-5 mt-5">
                            <?$arr_otziv = $db->getRows("SELECT * FROM `otzivi` WHERE `status` = ? ORDER BY `id` DESC",[1]);?>
                            <h3 class="mb-5 font-weight-bold"><?echo count($arr_otziv);?> Отзывов</h3>
                            <ul class="comment-list">
                                <?
                                foreach ($arr_otziv as $otziv){
                                ?>
                                <li class="comment">
                                    <div class="vcard bio">
                                        <img src="images/person_1.jpg" alt="Image placeholder">
                                    </div>
                                    <div class="comment-body">
                                        <h3><?=$otziv['name']?></h3>
                                        <div class="meta"><?=date_smart($otziv['day']);?></div>
                                        <p><?=$otziv['text']?></p>
                                        <p><a href="<?=$otziv['url']?>" target="_blank" class="reply">Ссылка на профиль</a></p>
                                    </div>
                                </li>
                                <?}?>
                            </ul>
                            <!-- END comment-list -->

                            <div class="comment-form-wrap pt-5">
                                <h3 class="mb-5">Написать отзыв</h3>
                                <form action="admin/app/App.php" method="post" class="p-3 p-md-5 bg-light">
                                    <div class="form-group">
                                        <label for="name">Ваше имя *</label>
                                        <input type="hidden" name="action" value="otziv">
                                        <input type="text" name="name" class="form-control" id="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="website">Ссылка на профиль в соц. сети</label>
                                        <input type="text" name="url" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="message">Отзыв:</label>
                                        <textarea name="text" id="message" cols="30" rows="10" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="Отправить отзыв" class="btn py-3 px-4 btn-primary">
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div> <!-- .col-md-8 -->

                </div>
            </div>
        </section>


<?
// Подключаю футер
include_once('template/footer.php');
?>
