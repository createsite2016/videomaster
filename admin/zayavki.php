<?
// Подключение хэдера
include_once('template/header.php');
// Подключение меню
include_once('template/menu.php');
// Подключение БД
include_once 'vendor/Database.php';
$db = new Database();
// Подключение функции человекопонятного вывода даты
include_once 'vendor/showdata_forpeople.php';
?>

<section id="content">
  <section class="main padder">


      <br>
      <br>
    <div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">
              Мои заявки (обращения) с сайта
            </header>
            <div class="panel-body">
              <div class="row text-small">
              </div>
            </div>
            <div class="table-responsive">
              <table class="table table-striped b-t text-small">
                <thead>
                  <tr>
                    <th>Имя</th>
                    <th>Связь с человеком</th>
                    <th>Обращение</th>
                    <th>Дата</th>
                    <th width="30px">Изменить</th>
                  </tr>
                </thead>
                <tbody>

                <?
                $arr_work = $db->getRows("SELECT * FROM `zayavki`");
                foreach ($arr_work as $work){?>
                    <tr>
                        <td><?=$work['name']?></td>
                        <td><?=$work['kontakt']?></td>
                        <td><?=$work['text']?></td>
                        <td><?=date_smart($work['day'])?></td>
                        <td class="text-right">
                            <div class="btn-group">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-pencil"></i></a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="app/App.php?action=удалитьзаявку&id=<?=$work['id']?>"><font color="red" >Удалить заявку</font></a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                <?}
                ?>
                </tbody>
              </table>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
            </div>
          </section>
        </div>

    </div>
  </section>
</section>

<!-- .modal -->
<div id="modal" class="modal fade">
    <form class="m-b-none" action="app/App.php" method="POST">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="icon-remove"></i></button>
                    <h4 class="modal-title" id="myModalLabel">Добавить работу на сайт</h4>
                </div>
                <div class="modal-body">
                    <div class="block">
                        <label class="control-label">Название</label>
                        <input type="hidden" name="action" value="добавление работы">
                        <input type="text" name="name" class="form-control" placeholder="Название работы как она будет отображаться на сайте">
                    </div>
                    <div class="block">
                        <label class="control-label">Ссылка</label>
                        <textarea class="form-control" name="link" placeholder="Ссылка на ютуб" rows="5"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Отмена</button>
                    <button type="submit" class="btn btn-sm btn-primary" data-loading-text="Добавляю...">Добавить на сайт</button>
                </div>
            </div><!-- /.modal-content -->
        </div>
    </form>
</div>
<!-- / .modal -->


<?foreach ($arr_work as $update_work){?>
    <!-- .modal -->
    <div id="modal<?=$update_work['id']?>" class="modal fade">
        <form class="m-b-none" action="app/App.php" method="POST">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><i class="icon-remove"></i></button>
                        <h4 class="modal-title" id="myModalLabel">Изменить данные о работе</h4>
                    </div>
                    <div class="modal-body">
                        <div class="block">
                            <label class="control-label">Название</label>
                            <input type="hidden" name="action" value="изменение работы">
                            <input type="hidden" name="id" value="<?=$update_work['id']?>">
                            <input type="text" name="name" class="form-control" value="<?=$update_work['name']?>">
                        </div>
                        <div class="block">
                            <label class="control-label">Ссылка</label>
                            <textarea class="form-control" name="link" rows="5"><?=$update_work['link']?></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Отмена</button>
                        <button type="submit" class="btn btn-sm btn-primary" data-loading-text="Сохраняю...">Сохранить правки</button>
                    </div>
                </div><!-- /.modal-content -->
            </div>
        </form>
    </div>
    <!-- / .modal -->
<?}?>



<?
// Подключение футера
include_once('template/footer.php');
?>
