<?php
require 'classes/IT_invent.class.php';
$it_invent = new IT_invent;
$errMsg="";
$id_p=$_POST[id_p];
?>
<!DOCTYPE html PUBLIC "-//W3C/DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=EDGE" />
    <link rel='stylesheet' type='text/css' href='style.css'>
    <script src="ajax.js"></script>
    <title>IT инвент</title>
</head>
<body>
<?php 
    if ($errMsg!="") echo "<h1 align='center'>".$errMsg."</h1>"
?>

    <table border cellpadding="0" cellspacing="0"  id="body_table" width="100%">
        <tr>
            <td id="header">
                <form action="brows.php?id_p=<?php echo $id_p;?>" method="POST"> 
                    <input id="goHome" type="submit" value="Назад"> 
                </form>
                <h1>История</h1>
            </td> 
        </tr>
		<tr>
			<td>
				<table border id="table" valign="top" style="margin:10px">
					<?php require 'inc/getStory.inc.php' ?>
				</table>
			</td>
		</tr>
	</table>


</body>
</html>
