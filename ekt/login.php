<?php
    session_start();
    if ($_POST['logout']!=''){
        $_SESSION=[];
        session_destroy();
    }
	require 'classes/IT_invent.class.php';
    $it_invent = new IT_invent;

	$isLogin = ($it_invent->login($_POST['login'], $_POST['password']));
    if ($isLogin){ 
        $_SESSION = $it_invent->session_init($_POST['login']);
        header('Location: /ekt/');
    }

    if (!$isLogin && $_SESSION['login']==''): ?>
<!DOCTYPE html PUBLIC "-//W3C/DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=EDGE" />
        <title>IT Инвент</title>
        <style>
            a {
                font-family: Verdana, Arial, Helvetica, sans-serif; 
                font-size: 14pt;
                margin-left: 15px;
                margin-top: 15px;
                color: #0000CC;
                text-decoration: none;
                font-weight: bold;
                font-size: 20px;
            }
            #header {
               /* background: #FF0000; */
                background: #fff;
                color: #101010;
                text-shadow: 1px 1px 2px black;
                text-align: center;
            }
        </style>
    </head>
    <body>
    <table cellpadding="0" cellspacing="0" id="body_table" border width="100%">
        <tr><td align="center" id="header"><h1>Авторизация</h1></td></tr>
        <tr><td align="center">
        <form name="login" method="POST" action="/ekt/login.php">
            <div>Логин:</div>
            <div><input type="text" name="login"></div>
            <div>Пароль:</div>
            <div><input type="password" name="password"></div>
            <div><input type="submit" name="go" value="Вход"></div>
        </form>
        </td></tr>
    </table>
    </body>
    </html>
    <?php endif;

    if ($isLogin || $_SESSION['login']!=""): ?>
        <form name="logout" method="POST" action="/ekt/login.php">
            <input type="submit" name="logout" value="Выход">
        </form>
    <? endif;
