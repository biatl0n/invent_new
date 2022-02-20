<tr>
<th>Дата перемещения</th>
<th>Кто перемещал</th>
<th>Кому переместил</th>
<th>Адрес</th>
<th>Пометка</th>
</tr>
<?php
$id_t = $it_invent->clearInt($_POST['id_t']);
$story=$it_invent->showHistry($id_t);

foreach($story as $item){
    $id_t=$item['id_t'];
    $date_move=$item['date_move'];
	$who_move=$item['who_move'];
	$city=$item['city'];
	$adress=$item['adress'];
	$remark=$item['remark'];
?>
	<tr>
		<td><input class="edit class_<?php echo $id_t;?>" readonly type="text" name="date_move" size="15" value="<?php echo $date_move;?>">
		<td><input class="edit class_<?php echo $id_t;?>" readonly type="text" name="who_move" size="15" value="<?php echo $who_move;?>">
		<td><input class="edit class_<?php echo $id_t;?>" readonly type="text" name="city" size="15" value="<?php echo $city;?>">
		<td><input class="edit class_<?php echo $id_t;?>" readonly type="text" name="adress" size="15" value="<?php echo $adress;?>">	
		<td><input class="edit class_<?php echo $id_t;?>" readonly type="text" name="remark" size="15" value="<?php echo $remark;?>">
	</tr>
<?php
}date_move
?>
