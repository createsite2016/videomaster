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
// Обработчик изображений
include_once 'admin/vendor/SimpleImage.php';
$image = new SimpleImage();
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
                $work_name = str_replace('https://www.youtube.com/watch?v=', '', $work['link']);
                $work_img = './image_cache/'.$work_name.'.jpg';
                if (file_exists($work_img)) {
                    $work_img = './image_cache/'.$work_name.'.jpg';
                } else {
                    copy('http://img.youtube.com/vi/'.$work_name.'/maxresdefault.jpg','./image_cache/'.$work_name.'.jpg');
                    $image->load('./image_cache/'.$work_name.'.jpg');
                    $image->scale(60);
                    $image->save('./image_cache/'.$work_name.'.jpg');
                    $work_img = '//img.youtube.com/vi/'.$work_name.'/maxresdefault.jpg';
                }
            ?>

            <div class="col-md-4 ftco-animate">
                <a href="//www.youtube.com/embed/<?=$work_name?>?version=3" data-rel="lightcase" class="photography-entry img image d-flex justify-content-center align-items-center" style="background-image: url(<?=$work_img?>);">
                    <?unset($work_img);?>
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
