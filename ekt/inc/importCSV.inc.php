<?php
$id_p=$_POST['id_p'];
$pathCSV=$_POST['pathCSV'];

$uploaddir =getcwd()."/upload";
$uploadfile = basename($_FILES["pathCSV"]["name"]);
$tmp_name = $_FILES["pathCSV"]["tmp_name"];

if (move_uploaded_file($_FILES["pathCSV"]["tmp_name"], "$uploaddir/$uploadfile")) {
	$filename="upload/$uploadfile";
	$res = $it_invent->importCSV($filename, $id_p);
	
	if ($res === false) $errMsg="Не удалось открыть файл.";
}
else {$errMsg="Не введён путь к файлу!!!";}

?>