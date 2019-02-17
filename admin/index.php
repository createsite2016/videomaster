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
              Мои работы
            </header>
            <div class="panel-body">
              <div class="row text-small">

                  <div class="col-sm-4 m-b-mini"><a class="btn btn-sm btn-info" data-toggle="modal" href="#modal"><i class="icon-plus"></i> Добавить работу на сайт</a></div>
              </div>
            </div>
            <div class="table-responsive">
              <table class="table table-striped b-t text-small">
                <thead>
                  <tr>
                    <th width="20px">На главной</th>
                    <th width="10px">Порядок</th>
                    <th width="20px">Изменить</th>
                    <th>Название работы</th>
                    <th>Дата</th>
                  </tr>
                </thead>
                <tbody>

                <?
                $arr_work = $db->getRows("SELECT * FROM `work` ORDER BY `sort` ASC");
                foreach ($arr_work as $work){?>
                    <tr>
                        <script>
                            function set_status<?=$work['id']?>() {
                                $.ajax({
                                    type: "POST",
                                    data: "id=<?=$work['id']?>&action=статус_работы",
                                    url: "app/App.php",
                                    dataType: "text",
                                    success: function (data) {
                                        alert(data);
                                    }
                                });
                            }
                        </script>
                        <td>
                            <a onclick="set_status<?=$work['id']?>();" href="#" <?if($work['status']=='1'){?>class="active"<?}?> data-toggle="class"><i class="icon-ok icon-large text-success text-active"></i><i class="icon-remove icon-large text-danger text"></i></a>
                        </td>
                        <td><?=$work['sort']?></td>
                        <td class="text-right">
                            <div class="btn-group">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-pencil"></i></a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a data-toggle="modal" href="#modal<?=$work['id']?>">Изменить работу</a></li>
                                    <li class="divider"></li>
                                    <li><a href="app/App.php?action=удалить&id=<?=$work['id']?>"><font color="red" >Удалить работу</font></a></li>
                                </ul>
                            </div>
                        </td>
                        <td><a href="<?=$work['link']?>" target="_blank"><?=$work['name']?></a></td>
                        <td><?=date_smart($work['day'])?></td>
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
                        <label class="control-label">Порядок</label>
                        <input type="hidden" name="action" value="добавление работы">
                        <input type="text" name="sort" class="form-control" placeholder="Порядок вывода работ" value="1">
                    </div>
                    <div class="block">
                        <label class="control-label">Название</label>
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
                            <label class="control-label">Порядок</label>
                            <input type="text" name="sort" class="form-control" placeholder="Порядок вывода работ" value="<?=$update_work['sort']?>">
                        </div>
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
