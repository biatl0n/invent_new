<?php
    session_start();
    if($_SESSION['login']=='') header('Location: /ekt/login.php');
    require 'classes/IT_invent.class.php';
    $it_invent = new IT_invent;
    $errMsg="";
?>
<!DOCTYPE html PUBLIC "-//W3C/DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=EDGE" />
    <link rel='stylesheet' type='text/css' href='style.css'>
    <script src="ajax.js"></script>
    <title>IT_INVENT HCFB</title>
</head>
<body onLoad="addEventQuery(); fillOptQuery(document.getElementsByName('addTehn')[0].value, 'addModel');" >

<table border id="body_table" cellpadding="0" cellspacing="0" width="100%">
    <tr>
        <td id="header" colspan="2">
            <form action="it_invent.php" method="POST">
                <input id="goHome"  type="submit" value="Назад">
            </form>
            <h1>Поиск и подсчёт техники</h1>
        </td>
    </tr>
    <tr>
        <td valign="top">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <table id="table" width="300px">
                <tr>
                    <th>Держатель</th>
                    <th>-</th>
                    <th>Проект</th>
                    <th>Модель</th>
                </tr>
                <tr>
                    <td><?php $it_invent->makeSelect('listCity', 'listCity'); ?></td>
                    <td><?php $it_invent->makeSelect('listPType', 'listPType'); ?></td>
                    <td><?php $it_invent->makeSelect('listTehn', 'addTehn'); ?></td>
                    <td><?php $it_invent->makeSelect('listModel', 'addModel'); ?></td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
						<!--<input type="submit" value="Применить" name="filtrate"> -->
						<input type="submit" name="saveToFile" value="Вывод в CSV">
					</td>
                </tr>
            </table>
            </form>
        </td>
        <td valign="top">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <table id="table" width="300px">
                <tr>
                    <th>Код</th>
					<th>Статус</th>
                </tr>
                <tr>
                    <td><input type="text" name="serN" size="25"></td>
					<td><?php $it_invent->makeSelect('listStatus', 'id_status'); ?></td>
                </tr>
                <tr>
                    <td align="center" colspan="2">
						<!--<input type="submit" name="search" value="найти">-->
						<input type="submit" name="saveFile" value="Вывод в CSV">
					</td>
                </tr>
            </table>
            </form>
        </td>
    </tr>
    <tr>
        <td align="center" colspan="2">
            <?php
                if($_SERVER['REQUEST_METHOD']=="POST"){
                    if (isset($_POST['filtrate'])){
                        include 'inc/makeTableForQuery.inc.php'; 
                    }
                    if (isset($_POST['search'])){
                        include 'inc/search.inc.php';
                    }
					if (isset($_POST['saveFile'])){
                        include 'inc/searchImport.inc.php';
                    }
					if (isset($_POST['saveToFile'])){
                        include 'inc/searchToImport.inc.php';
                    }
                }
            ?>
        </td>
    </tr>
</table>
</body>
</html>
