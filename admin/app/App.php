<?php
session_start();
/**
 * Тут вся логика работы программы
 * 1 - проверяем экшен какой
 * 2 - в зависимости какой пришел через POST экшен - выполняем действия
 */

include_once '../vendor/Database.php';
$db = new Database();
$datatime = date("Y-m-d"); // дата нынешняя

if($_GET['action'] == 'удалить'){

    $db->deleteRow("DELETE FROM `work` WHERE `id` = ?",[$_GET['id']]);
    exit("<html><head><meta http-equiv='Refresh' content='0; URL=../index.php'></head></html>");
}
if($_GET['action'] == 'удалитьотзыв'){

    $db->deleteRow("DELETE FROM `otzivi` WHERE `id` = ?",[$_GET['id']]);
    exit("<html><head><meta http-equiv='Refresh' content='0; URL=../love.php'></head></html>");
}
if($_GET['action'] == 'удалитьзаявку'){

    $db->deleteRow("DELETE FROM `zayavki` WHERE `id` = ?",[$_GET['id']]);
    exit("<html><head><meta http-equiv='Refresh' content='0; URL=../zayavki.php'></head></html>");
}
if($_GET['action'] == 'exit'){
    unset($_SESSION['user']);
    exit("<html><head><meta http-equiv='Refresh' content='0; URL=../index.php'></head></html>");
}
if($_POST['action'] == 'добавление работы'){
    $db->insertRow("INSERT INTO `work` (`name`,`link`,`day`,`sort`) VALUES (?,?,?,?)",[$_POST['name'],$_POST['link'],$datatime],$_POST['sort']);
    exit("<html><head><meta http-equiv='Refresh' content='0; URL=../index.php'></head></html>");
}
if($_POST['action'] == 'изменение работы'){
    $db->updateRow("UPDATE `work` SET `name` = ?, `link` = ?, `sort` = ? WHERE `id` = ? ",[$_POST['name'],$_POST['link'],$_POST['sort'],$_POST['id']]);
    exit("<html><head><meta http-equiv='Refresh' content='0; URL=../index.php'></head></html>");
}
if($_POST['action'] == 'статус_работы'){
    $arr_work = $db->getRow("SELECT * FROM `work` WHERE `id` = ? ",[$_POST['id']]);
    if($arr_work['status'] == '0' || $arr_work['status'] == ''){
        $status = 1;
        $text = 'Видео: "'.$arr_work['name'].'" теперь будет на главной странице';
    } else {
        $status = 0;
        $text = 'Видео: "'.$arr_work['name'].'" будет скрыто с главной страницы';
    }
    $db->updateRow("UPDATE `work` SET `status` = ? WHERE `id` = ? ",[$status,$_POST['id']]);
    echo $text;
}
if($_POST['action'] == 'статус_отзыв'){
    $arr_work = $db->getRow("SELECT * FROM `otzivi` WHERE `id` = ? ",[$_POST['id']]);
    if($arr_work['status'] == '0' || $arr_work['status'] == ''){
        $status = 1;
        $text = 'Отзыв от: "'.$arr_work['name'].'" теперь будет на сайте';
    } else {
        $status = 0;
        $text = 'Отзыв от: "'.$arr_work['name'].'" будет скрыт на сайте';
    }
    $db->updateRow("UPDATE `otzivi` SET `status` = ? WHERE `id` = ? ",[$status,$_POST['id']]);
    echo $text;
}
if($_POST['action'] == 'auth'){
    $arr_auth = $db->getRow("SELECT * FROM `users` WHERE `login` = ? and `password` = ? ",[$_POST['login'],$_POST['password']]);
    if($arr_auth){
        $_SESSION['user']['name'] = $arr_auth['name'];
        $_SESSION['user']['login'] = $arr_auth['login'];
        $_SESSION['user']['password'] = $arr_auth['password'];
        exit("<html><head><meta http-equiv='Refresh' content='0; URL=../index.php'></head></html>");
    }else{
        exit("<html><head><meta http-equiv='Refresh' content='0; URL=../signin.php?error=true'></head></html>");
    }
}
if($_POST['action'] == 'setting'){
    $db->updateRow("UPDATE `users` SET 
`login` = ?,
`name` = ?,
`password` = ?,
`adress` = ?,
`phone` = ?,
`email` = ?
 
 WHERE `login` = ? ",[
     $_POST['login'],
     $_POST['name'],
     $_POST['password'],
     $_POST['adress'],
     $_POST['phone'],
     $_POST['email'],
     $_SESSION['user']['login']]);

    $db->updateRow("UPDATE `pages_data` SET 
`work_text` = ?, 
`about_text` = ?, 
`about_name` = ?, 
`about_text_two` = ?, 
`peoples_name` = ?, 
`peoples_text` = ?, 
`contact_name` = ?, 
`contact_text` = ?, 
`vk_script` = ? 
WHERE `id` = 1 ",[
    $_POST['work_text'],
    $_POST['about_text'],
    $_POST['about_name'],
    $_POST['about_text_two'],
    $_POST['peoples_name'],
    $_POST['peoples_text'],
    $_POST['contact_name'],
    $_POST['contact_text'],
    $_POST['vk_script']
        ]);
    $_SESSION['user']['name'] = $_POST['name'];
    $_SESSION['user']['login'] = $_POST['login'];
    $_SESSION['user']['password'] = $_POST['password'];
    exit("<html><head><meta http-equiv='Refresh' content='0; URL=../settings.php?error=false'></head></html>");
}
if($_POST['action'] == 'zayavka'){
    //$arr_users = $db->getRow("SELECT * FROM `users`");
    //mail($arr_users['email'], "Заявка с сайта", "Имя: ".$_POST['name']."\nСвязаться можно: ".$_POST['kontakt']."\nТекст заявки: ".$_POST['text']);
    $db->insertRow("INSERT INTO `zayavki` (`name`,`kontakt`,`text`,`day`) VALUES (?,?,?,?)",[$_POST['name'],$_POST['kontakt'],$_POST['text'],$datatime]);
    exit("<html><head><meta http-equiv='Refresh' content='0; URL=/contact.php?error=false'></head></html>");
}
if($_POST['action'] == 'otziv'){
    $db->insertRow("INSERT INTO `otzivi` (`name`,`url`,`text`,`day`) VALUES (?,?,?,?)",[$_POST['name'],$_POST['url'],$_POST['text'],$datatime]);
    exit("<html><head><meta http-equiv='Refresh' content='0; URL=/love.php?error=false'></head></html>");
}









