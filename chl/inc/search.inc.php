<?php

$id_status=$_POST['id_status'];
$barkod=$_POST['barkod'];
$invN=$_POST['invN'];
$serN=$_POST['serN'];


if ($barkod!=NULL && $invN==NULL && $serN==NULL && $id_status==0){
    $barkod=$it_invent->clearStr($_POST['barkod']);
    $where = " WHERE barkod='$barkod'";
    $res = $it_invent->queryMaker($where);
}

if ($barkod==NULL && $invN!=NULL && $serN==NULL && $id_status==0){
    $invN=$it_invent->clearStr($_POST['invN']);
    $where = " WHERE invN='$invN'";
    $res = $it_invent->queryMaker($where);
}

if ($barkod==NULL && $invN==NULL && $serN!=NULL && $id_status==0){
    $serN=$it_invent->clearStr($_POST['serN']);
    $where = " WHERE serN='$serN'";
    $res = $it_invent->queryMaker($where);
}

if ($barkod==NULL && $invN==NULL && $serN==NULL && $id_status!=0){
    $id_status=$it_invent->clearInt($_POST['id_status']);
    $where = " WHERE tehn.id_status='$id_status'";
    $res = $it_invent->queryMaker($where);
} 

echo <<<LABEL
<table border id="table">
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
    foreach($res as $item){
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
		
        echo <<<LABEL
        <tr class="onMove">
            <td><input type="text" class="edit" size="15" value="$city"></td>
            <td><input type="text" class="edit" size="5" value="$pType"></td>
            <td><textarea cols="20"  rows="1" class="edit">$adress</textarea></td>
            <td><input type="text" class="edit" size="15" value="$name"></td>
            <td><input type="text" class="edit" size="15" value="$model"></td>
            <td><input type="text" class="edit" size="15" value="$serN"></td>
			<td><input type="text" class="edit" size="15" value="$status"></td>
			<!--<td><input type="text" class="edit" size="15" value="$remark"></td>-->
			<td><textarea cols="20"  rows="1" class="edit">$remark</textarea></td>
			
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
?>
