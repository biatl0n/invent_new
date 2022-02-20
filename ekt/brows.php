<?php
    session_start();
    if($_SESSION['login']=='') header('Location: /ekt/login.php');
    require 'classes/IT_invent.class.php';
    $it_invent = new IT_invent;
    $errMsg = '';
    if ($_SERVER['REQUEST_METHOD']=='POST'){
        if(isset($_POST['remPoint'])){
            include 'inc/remPoint.inc.php';
        }
        if(isset($_POST['remTehn'])){
            include 'inc/remTehn.inc.php';
        }
        if(isset($_POST['newTehn'])){
            include 'inc/addTehn.inc.php';
        }
		if(isset($_POST['chPointInfo'])){
            include 'inc/chPointInfo.inc.php';
        }
		if(isset($_POST['saveChange'])){
            include 'inc/saveChange.inc.php';
        }
		if(isset($_POST['importCSV'])){
			include 'inc/importCSV.inc.php';
		}
    }

?>
<!DOCTYPE html PUBLIC "-//W3C/DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=EDGE" />
    <link rel='stylesheet' type='text/css' href='style.css'>
    <script src="ajax.js"></script>
    <script src="java.js"></script>
    <script>
        function onPointDelete()
        {
           if(confirm("Удалить?")){return true;}
           else {return false;}
        }
		function onChangePoint()
		{
			if(confirm("Изменить?")){return true;}
			else {return false;}
		}
        function onTehnDelete()
        {
            if(confirm("Удалить? Техника будет перемещена в корзину админа."))
                {
                }
            else {return false;}
        }
    </script>

	<style>
		#delTehn{
			top: 10pt;
			left: 80pt;
			position: fixed;
			z-index: 101;
		}
	</style>
    <title>IT инвент</title>
</head>
<body onLoad="addEventTehn(); fillOpt(document.getElementsByName('addTehn')[0].value, 'addModel'); " >
    <?php 
        if ($errMsg!="")
            echo "<h1 align='center'>".$errMsg."</h1>"
    ?>
    <table border cellpadding="0" cellspacing="0"  id="body_table">
        <tr>
            <td id="header">
                <form action="it_invent.php" method="POST"> 
                    <input id="goHome" type="submit" value="Назад"> 
                </form>
                <h1>ЗИП у держателя</h1>
            </td> 
        </tr>
        <tr>
            <td valign="top" width="25%">
                <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="POST">
                    <?php include "inc/getItemPointInfo.inc.php" ?>
                    <table style="margin: 10px;">
                        <tr>
                        <?php /*
                            if ($_GET['id_p']!='1'){
                                echo "
									<td><input type='submit' name='remPoint' value='Удалить' onClick=\"return onPointDelete();\"></td>
									<td>Причина удаления:<input type='text' name='delReason' value=''></td>
								";
                            } */
                        ?>
                        </tr>
						<tr>
							<?php //if ($id_p!=1) echo "<td><input type='submit' name='chPointInfo' value='Изменить' onClick=\"return onChangePoint();\"></td>";?>
						</tr>
						<tr>
							<!---<td><input type='submit' name='importCSV' value='Импорт техники из CSV' form='upload'></td>
							<td>Обзор:<input type='file' name='pathCSV' size='80' form='upload'></td> -->
							<input type="hidden" form='upload' name="id_p" value="<?php echo $_GET['id_p']; ?>">
							<!--<td><input type='submit' name='saveChange' value='Подтвердить'></td>-->
						</tr>
                    </table>
                </form>
            </td>
		</tr>
		<tr>
            <td valign="top">
			    <form action="<?php echo $_SERVER['REQUEST_URI']?>" method="POST" id="delTehn" class="delTehn">	
				<div id="FlyDiv">

					<table bgcolor="#ffcc00" style="margin: 10px; border: 1px solid black; width: 300pt;" >
                        <tr>
							<td><input type="submit" name="remTehn" value="Удалить" onClick="return onTehnDelete();"> </td>
                            <td><div id="FlyDivHeader" style="display: inline-block;" > Причина удаления:</div><input type="text" name="delReason" value=""> </td>
                        </tr>
                        <tr>
                            <td colspan="2"> 
                                <input type="hidden" name="id_p" value="<?php echo $_GET['id_p']; ?>">
                                <input type="submit" name="moveTehn" value="Переместить" onClick="movTehn();">  
                                <input type="button" name="Go" value="Изменить" onClick="unlockText()">
								<input type="button" name="history" value="История" onClick="showStory()">
                            </td>
                        </tr>
                    </table>
					</div>
                </form>
			

				
                <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="POST">
                <table border  id="table" valign="top" style="margin:10px">
                    <tr>
                        <th>&nbsp;
                        <th>N
                        <th>Проект
                        <th>Модель
                        <th>Код
						<th>Статус
						<th>Примечание
                    </tr>
                    <?php include 'inc/getTInfo.inc.php'; ?>
                     <tr>
                        <td>&nbsp;</td>
                        <td><input type="submit" name="newTehn" value="+">
                            <input type="hidden" name="id_p" value="<?php echo $_GET['id_p']; ?>"></td>
                        <td><?php $it_invent->makeSelect('listTehn', 'addTehn'); ?></td>
                        <td><?php $it_invent->makeSelect('listModel', 'addModel'); ?></td>
                        <td><input type="text" name="serN" id="serN" size="15"></td>
						<td><?php $it_invent->makeSelect('listStatus', 'id_status'); ?></td>
						<!--<td><input type="text" name="remark" size="15"></td>-->
						<td><textarea name="remark" cols="22" rows="1"></textarea></td>
                    </tr>
                 </table>
                 </form>
            </td>
        </tr>
    </table>
	<form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post" enctype="multipart/form-data" id="upload">
		
	</form>
	

<?php


?>
<script src="FlyDiv.js"></script>
	
</body>
</html>
