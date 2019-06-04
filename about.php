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
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $('a[data-rel^=lightcase]').lightcase();
        });
    </script>

    <div id="colorlib-main">
        <section class="ftco-section bg-light ftco-bread">
            <div class="container">
                <div class="row no-gutters slider-text align-items-center">
                    <div class="col-md-9 ftco-animate">
                        <p class="breadcrumbs"><span class="mr-2"><a href="/">Главная</a></span> <span>Жизнь</span></p>
                        <h1 class="mb-3 bread">Обо мне</h1>
                        <p>
                            <?
                            $arr_work = $db->getRow("SELECT * FROM `pages_data`");
                            echo $arr_work['about_text'];
                            ?>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="ftco-section-no-padding bg-light">
            <div class="hero-wrap">
                <div class="overlay"></div>
                <div class="d-flex">
                    <div class="author-image text img p-md-5 ftco-animate" style="background-image: url(images/author2.jpg);">

                    </div>
                    <div class="author-info text p-4 mt-5 mb-5 ftco-animate">
                        <div class="desc">
                            <h1 class="mb-4"><?echo $arr_work['about_name'];?></h1>
                            <p class="mb-4">
                                <?echo $arr_work['about_text_two'];?>
                            </p>
                            <ul class="ftco-social mt-3">
                                <li class="ftco-animate"><a href="https://www.youtube.com/channel/UCSDch_y4nHiPL7L17g5UXqg/videos" target="_blank"><span class="icon-youtube"></span></a></li>
                                <li class="ftco-animate"><a href="https://vk.com/fmuzklip" target="_blank"><span class="icon-vk"></span></a></li>
                                <li class="ftco-animate"><a href="https://www.instagram.com/fevral_skiy/" target="_blank"><span class="icon-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>



<?
// Подключаю футер
include_once('template/footer.php');
?>
