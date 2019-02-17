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
    <section class="ftco-section-2">
      <div class="photograhy">
        <div class="row no-gutters">

            <?$arr_work = $db->getRows("SELECT * FROM `work` WHERE `status` = ? ORDER BY `sort` ASC",[1]);
            foreach ($arr_work as $work){
                $work_new = str_replace('https://www.youtube.com/watch?v=', '', $work['link']);
                $work_img = '//img.youtube.com/vi/'.$work_new.'/maxresdefault.jpg'

            ?>

            <div class="col-md-4 ftco-animate">
                <a href="//www.youtube.com/embed/<?=$work_new?>?version=3" data-rel="lightcase" class="photography-entry img image d-flex justify-content-center align-items-center" style="background-image: url(<?=$work_img?>);">
                    <div class="overlay"></div>
                    <div class="text text-center">
                        <h3><?=$work['name']?></h3>
                        <span class="tag">Добавленно: <?=date_smart($work['day'])?></span>
                    </div>
                </a>
            </div>

            <?}?>


        </div>
      </div>
    </section>


<?
// Подключаю футер
include_once('template/footer.php');
?>
