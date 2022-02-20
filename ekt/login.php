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
        <br>
        <br>
        <br>
        <form name="login" method="POST" action="/ekt/login.php">
            <input type="text" name="login">
            <input type="password" name="password">
            <input type="submit" name="go" value="Вход">
        </form>
    <?php endif;

    if ($isLogin || $_SESSION['login']!=""): ?>
        <form name="logout" method="POST" action="/ekt/login.php">
            <input type="submit" name="logout" value="Выход">
        </form>
    <? endif;
