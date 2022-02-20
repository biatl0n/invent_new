<?php

    session_start();
    
    if($_SESSION['login']=='') header('Location: /ekt/login.php');
    if ($_POST['logout']!=''){
        $_SESSION=[];
        session_destroy();
        header('Location: /ekt/login.php');
    }
    if ($isLogin || $_SESSION['login']!=""): ?>
        <form name="logout" method="POST" action="/ekt/login.php">
            <input type="submit" name="logout" value="Выход">
        </form>
    <? endif;
    require 'classes/IT_invent.class.php';
    $it_invent = new IT_invent;
	//$it_invent->renameS();
	//$it_invent->listDelete();
    $errMsg='';
    if($_SERVER['REQUEST_METHOD']=='POST'){
        if (isset($_POST['addPoint'])){
            include 'inc/add_point.inc.php';
        }
        if (isset($_REQUEST['addCity']) or 
            isset($_REQUEST['addPType']) or 
            isset($_REQUEST['addTehn']) or 
            isset($_REQUEST['addModel'])){
                Include 'inc/addToList.inc.php';
            }
        if (isset($_REQUEST['remCity']) or 
            isset($_REQUEST['remPType']) or 
            isset($_REQUEST['remTehn']) or 
            isset($_REQUEST['remModel'])){
                Include 'inc/remFromList.inc.php';
           } 
        if (isset($_REQUEST['queryMaker'])){
            header("Location: queryMaker.php");
        }
    }
?>
<!DOCTYPE html PUBLIC "-//W3C/DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=EDGE" />
    <link rel='stylesheet' type='text/css' href='style.css'>
    <script src="ajax.js"></script>
    <title>IT инверт</title>
</head>
<body onLoad="addEvent(); fillOpt(document.getElementsByName('choiceTehnListModel')[0].value, 'remFromListModel');">
<?php 
    if ($errMsg!="")
        echo "<H2>".$errMsg."</H2>"; 
?>
<table cellpadding="0" cellspacing="0" id="body_table" border width="100%">
    <tr>
        <td colspan="2" valign="top" align="center" id="header">
            <h1>IT инвент </h1>
        </td>
    </tr>
    <tr>
        <td valign="top">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <table id="table" valign="top" border style="margin:10px;">
                    <tr>
                       <th> N
                       <th> Держатель
                       <th> Адрес держателя
					   <th> Пометка
                    </tr>
                    <?php include 'inc/getPInfo.inc.php';?>
                    <tr valign="top">
                        <td><input type="submit" name="addPoint" value="+">
                        <td><?php $it_invent->makeSelect('listCity'); ?>
                        <td><textarea name="adress" cols='30' rows="1"> </textarea></td>
						<td><textarea name="remark" cols='19' rows="1"> </textarea></td>
                    </tr>
                </table>
            </form>
        </td>

        <td align="center" valign="top">
            <h3>Вывод в Excel</h3>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <input type="submit" name="queryMaker" value="Переход">
            </form>
            <hr>
        </td>

</body>
</html>