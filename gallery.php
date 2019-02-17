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
                  <div class="col-md-12 ftco-animate">
                      <p class="breadcrumbs"><span class="mr-2"><a href="/">Главная</a></span> <span>Творчество</span></p>
                      <h1 class="mb-3 bread">Мои работы</h1>
                      <p>
                         <?
                         $arr_work = $db->getRow("SELECT * FROM `pages_data`");
                         echo $arr_work['work_text'];
                         ?>
                      </p>
                  </div>
              </div>
          </div>
      </section>
      <section class="ftco-section-2">
          <div class="photograhy">
              <div class="row no-gutters">
                  <?$arr_work = $db->getRows("SELECT * FROM `work` ORDER BY `sort` ASC");
                  foreach ($arr_work as $work){
                      $work_name = str_replace('https://www.youtube.com/watch?v=', '', $work['link']);
                      $work_img = './image_cache/'.$work_name.'.jpg';
                      if (file_exists($work_img)) {
                          $work_img = './image_cache/'.$work_name.'.jpg';
                      } else {
                          copy('http://img.youtube.com/vi/'.$work_name.'/maxresdefault.jpg','./image_cache/'.$work_name.'.jpg');
                          $image->load('./image_cache/'.$work_name.'.jpg');
                          $image->resizeToWidth(600);
                          $image->save('./image_cache/'.$work_name.'.jpg');
                          $work_img = '//img.youtube.com/vi/'.$work_name.'/maxresdefault.jpg';
                      }
                      ?>

                      <div class="col-md-4 ftco-animate">
                          <a href="//www.youtube.com/embed/<?=$work_name?>?version=3" data-rel="lightcase" class="photography-entry img image d-flex justify-content-center align-items-center" style="background-image: url(<?=$work_img?>);">
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
