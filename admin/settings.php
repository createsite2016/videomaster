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

$arr_user = $db->getRow("SELECT * FROM `users`");
$arr_page = $db->getRow("SELECT * FROM `pages_data`");
?>

        <section class="panel">
            <div class="panel-body">
                <form class="form-horizontal" method="post" action="app/App.php" data-validate="parsley">
                    <div class="form-group">
                        <label class="col-lg-3 control-label">ЛИЧНЫЕ ДАННЫЕ</label>
                        <div class="col-lg-8">
                            <div class="line line-dashed m-t-large"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Логин</label>
                        <div class="col-lg-8">
                            <input type="hidden" name="action" value="setting">
                            <input type="text" name="login" placeholder="Ваш новый логин" class="bg-focus form-control parsley-validated" value="<?=$_SESSION['user']['login']?>" data-required="true" data-type="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Пароль</label>
                        <div class="col-lg-8">
                            <input type="password" name="password" value="<?=$_SESSION['user']['password']?>" placeholder="Ваш новый пароль" class="bg-focus form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Имя</label>
                        <div class="col-lg-8">
                            <input type="text" name="name" placeholder="Ваше новое имя" data-required="true" value="<?=$_SESSION['user']['name']?>" class="form-control parsley-validated">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Адрес:</label>
                        <div class="col-lg-8">
                            <input type="text" name="adress" placeholder="Ваш адрес" data-required="true" value="<?=$arr_user['adress']?>" class="form-control parsley-validated">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Телефон:</label>
                        <div class="col-lg-8">
                            <input type="text" name="phone" placeholder="Ваш телефон" data-required="true" value="<?=$arr_user['phone']?>" class="form-control parsley-validated">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Электроная почта:</label>
                        <div class="col-lg-8">
                            <input type="text" name="email" placeholder="Ваш ящик" data-required="true" value="<?=$arr_user['email']?>" class="form-control parsley-validated">
                        </div>
                    </div>

<div class="form-group">
    <label class="col-lg-3 control-label">СТРАНИЦА =МОИ РАБОТЫ=</label>
    <div class="col-lg-8">
        <div class="line line-dashed m-t-large"></div>
    </div>
</div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Текст страницы</label>
                        <div class="col-lg-8">
                            <textarea placeholder="Текст страницы" name="work_text" rows="5" class="form-control parsley-validated" data-trigger="keyup" data-rangelength="[20,200]">
                                 <?=$arr_page['work_text']?>
                            </textarea>
                        </div>
                    </div>


<div class="form-group">
    <label class="col-lg-3 control-label">СТРАНИЦА =ОБО МНЕ=</label>
    <div class="col-lg-8">
        <div class="line line-dashed m-t-large"></div>
    </div>
</div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Текст страницы</label>
                        <div class="col-lg-8">
                            <textarea placeholder="Profile" name="about_text" rows="5" class="form-control parsley-validated" data-trigger="keyup" data-rangelength="[20,200]">
                                 <?=$arr_page['about_text']?>
                            </textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Заголовок</label>
                        <div class="col-lg-8">
                            <textarea placeholder="Profile" name="about_name" rows="5" class="form-control parsley-validated" data-trigger="keyup" data-rangelength="[20,200]">
                                 <?=$arr_page['about_name']?>
                            </textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Текст страницы</label>
                        <div class="col-lg-8">
                            <textarea placeholder="Profile" name="about_text_two" rows="5" class="form-control parsley-validated" data-trigger="keyup" data-rangelength="[20,200]">
                                <?=$arr_page['about_text_two']?>
                            </textarea>
                        </div>
                    </div>


<div class="form-group">
    <label class="col-lg-3 control-label">СТРАНИЦА =ОТЗЫВЫ=</label>
    <div class="col-lg-8">
        <div class="line line-dashed m-t-large"></div>
    </div>
</div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Заголовок</label>
                        <div class="col-lg-8">
                            <textarea placeholder="Profile" name="peoples_name" rows="5" class="form-control parsley-validated" data-trigger="keyup" data-rangelength="[20,200]">
                                 <?=$arr_page['peoples_name']?>
                            </textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Текст страницы</label>
                        <div class="col-lg-8">
                            <textarea placeholder="Profile" name="peoples_text" rows="5" class="form-control parsley-validated" data-trigger="keyup" data-rangelength="[20,200]">
                                 <?=$arr_page['peoples_text']?>
                            </textarea>
                        </div>
                    </div>

<div class="form-group">
    <label class="col-lg-3 control-label">СТРАНИЦА =КОНТАКТЫ=</label>
    <div class="col-lg-8">
        <div class="line line-dashed m-t-large"></div>
    </div>
</div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Заголовок</label>
                        <div class="col-lg-8">
                            <textarea placeholder="Profile" name="contact_name" rows="5" class="form-control parsley-validated" data-trigger="keyup" data-rangelength="[20,200]">
                                 <?=$arr_page['contact_name']?>
                            </textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Текст страницы</label>
                        <div class="col-lg-8">
                            <textarea placeholder="Profile" name="contact_text" rows="5" class="form-control parsley-validated" data-trigger="keyup" data-rangelength="[20,200]">
                                <?=$arr_page['contact_text']?>
                            </textarea>
                        </div>
                    </div>



<div class="form-group">
    <label class="col-lg-3 control-label">ВИДЖЕТ =СООБЩЕНИЕ ВКОНТАКТЕ=</label>
    <div class="col-lg-8">
        <div class="line line-dashed m-t-large"></div>
    </div>
</div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Скрипт</label>
                        <div class="col-lg-8">
                            <textarea placeholder="Profile" name="vk_script" rows="5" class="form-control parsley-validated" data-trigger="keyup" data-rangelength="[20,200]">
                                <?=$arr_page['vk_script']?>
                            </textarea>
                        </div>
                    </div>



                    <?if($_GET['error'] == 'false'){?>
                        <div class="form-group">
                            <label class="col-lg-3 control-label"><font color="red">Данные успешно обновленны</font></label>
                            <div class="col-lg-8">
                                <div class="line line-dashed m-t-large"></div>
                            </div>
                        </div>
                    <?}?>


                    <div class="form-group">
                        <div class="col-lg-9 col-lg-offset-3">
                            <button type="submit" class="btn btn-primary">Сохранить</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>





<?
// Подключение футера
include_once('template/footer.php');
?>