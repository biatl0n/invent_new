<?php

if (isset($_POST['serN'])){
    $serN=$it_invent->clearStr($_POST['serN']);
    $where = " WHERE serN='$serN'";
    $res = $it_invent->queryMaker($where);
}

if (isset($_POST['id_status']) && $_POST['serN']==null){
    $id_status=$it_invent->clearInt($_POST['id_status']);
    $where = " WHERE tehn.id_status='$id_status'";
    $res = $it_invent->queryMaker($where);
}


echo <<<LABEL
<table border id="table">
	<tr>
		<td colspan="8" align="center"><a href="Table.csv">Скачать файл</a>
	</tr>
    <tr>
        <th>Держатель</th>
        <th>-</th>
        <th>Адрес</th>
        <th>Наименование</th>
        <th>Модель</th>
        <th>Код</th>
		<th>Статус</th>
		<th>Примечание</th>
    </tr>
LABEL;
if(isset($res)){
    $num_rows = 0;
	
	$filename = "Table.csv";
	$fd = fopen($filename, "w");
	if (!$fd) exit("Невозможно открыть файл");
	
    foreach($res as $item){
		
		$arr=array();
		
        $num_rows++;
        $city = $item['city'];
        $pType = $item['p_type'];
        $adress = $item['adress'];
        $name = $item['name'];
        $model = $item['model'];
        $serN = $item['serN'];
		$id_status = $item['id_status'];
		$status = $item['status'];
		$remark = $item['tehnrem'];
		
		$arr[] = @iconv('UTF-8', 'Windows-1251//TRANSLIT//IGNORE', $city);
		$arr[] = @iconv('UTF-8', 'Windows-1251//TRANSLIT//IGNORE', $pType);
		$arr[] = @iconv('UTF-8', 'Windows-1251//TRANSLIT//IGNORE', $adress);
		$arr[] = @iconv('UTF-8', 'Windows-1251//TRANSLIT//IGNORE', $name);
		$arr[] = @iconv('UTF-8', 'Windows-1251//TRANSLIT//IGNORE', $model);
		$arr[] = @iconv('UTF-8', 'Windows-1251//TRANSLIT//IGNORE', $serN);
		$arr[] = @iconv('UTF-8', 'Windows-1251//TRANSLIT//IGNORE', $status);
		$arr[] = @iconv('UTF-8', 'Windows-1251//TRANSLIT//IGNORE', $remark);
		fputcsv ($fd, $arr, ";");
		
        echo <<<LABEL
        <tr class="onMove">
            <td><input type="text" class="edit" size="15" value="$city"></td>
            <td><input type="text" class="edit" size="5" value="$pType"></td>
            <td><textarea cols="20"  rows="1" class="edit">$adress</textarea></td>
            <td><input type="text" class="edit" size="15" value="$name"></td>
            <td><input type="text" class="edit" size="15" value="$model"></td>
            <td><input type="text" class="edit" size="15" value="$serN"></td>
			<td><input type="text" class="edit" size="15" value="$status"></td>
			<td><input type="text" class="edit" size="15" value="$remark"></td>
        </tr>
LABEL;
    }
}
echo <<<LABEL
    <tr>
        <td colspan='7' align="right"><b>Итого:</b></td>
        <td align='center'><b>$num_rows</b></td>
    </tr>
LABEL;
echo "</table>";

fclose($fd);

?>