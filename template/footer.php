<?
include_once '../admin/vendor/showdata_forpeople.php';
// Подключаю БД
include_once '../admin/vendor/Database.php';
$db = new Database();
?>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $('a[data-rel^=lightcase]').lightcase();
    });
</script>

<?$arr_script = $db->getRow("SELECT * FROM `pages_data`");?>

<?
echo $arr_script['vk_script'];
?>

<footer class="ftco-footer ftco-bg-dark ftco-section">
  <div class="container px-md-5">
    <div class="row mb-5">

      <div class="col-md">
         <div class="ftco-footer-widget mb-4">
          <h2 class="ftco-heading-2">Несколько свежих работ</h2>
          <ul class="list-unstyled categories">
              <?$arr_work = $db->getRows("SELECT * FROM `work` ORDER BY `sort` ASC LIMIT 5");
              foreach ($arr_work as $work) {
                  $work_new = str_replace('https://www.youtube.com/watch?v=', '', $work['link']);
                  ?>

                  <li><a href="//www.youtube.com/embed/<?=$work_new?>?version=3" data-rel="lightcase"><?=$work['name']?> <span><?=date_smart($work['day']);?></span></a></li>
              <?}?>
          </ul>
        </div>
      </div>
      <div class="col-md">
        <div class="ftco-footer-widget mb-4">
          <h2 class="ftco-heading-2">Есть вопросы?</h2>
          <div class="block-23 mb-3">
            <ul>
              <?$arr_user = $db->getRow("SELECT * FROM `users`");?>
              <li><span class="icon icon-map-marker"></span><span class="text"><?=$arr_user['adress']?></span></li>
              <li><a href="tel://<?=$arr_user['phone']?>"><span class="icon icon-phone"></span><span class="text"><?=$arr_user['phone']?></span></a></li>
              <li><a href="mailto:<?=$arr_user['email']?>"><span class="icon icon-envelope"></span><span class="text"><?=$arr_user['email']?></span></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">

        <p>
            Все права защищены &copy;<script>document.write(new Date().getFullYear());</script> | Даже код этого сайта был создан с вдохновеньем <i class="icon-heart" aria-hidden="true"></i> <a href="/admin/index.php">вход в панель управления</a>
        </p>
      </div>
    </div>
  </div>
</footer>
</div><!-- END COLORLIB-MAIN -->
</div><!-- END COLORLIB-PAGE -->

<!-- loader -->
<div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/>
    </svg>
</div>
<script src="/js/andrey.js"></script>

</body>
</html>
