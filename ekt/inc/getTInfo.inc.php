<?php
$id_p=$_GET['id_p'];
list ($tehn) = $it_invent->getTehnInfo($_GET['id_p']);
$i=0;

//$filename = "text.csv";
//$fd = fopen($filename, "w");
//if (!$fd) exit("Невозможно открыть файл");

foreach($tehn as $item){
	$arr=array();
    $i++;
    $id_t=$item['id_t'];
    $name=$item['name'];
    $model=$item['model'];
    $invN1=$item['invN'];
    $serN1=$item['serN'];
	$barkod1=$item['barkod'];
	$id_status=$item['id_status'];
	$status=$item['status'];
	$remark=$item['remark'];
    $item['serN']!="" ? $serN="value=\"".$item['serN']."\"" : $serN="style=\" background: #FF0000;\"" ;
	
	//$arr[] = $name;
	//$arr[] = $model;
	//$arr[] = $invN1;
	//$arr[] = $serN1;
	//$arr[] = $barkod1;
	//$arr[] = $status;
	//$arr[] = $remark;
	//fputcsv ($fd, $arr, ";");
	
?>
	<tr class="onMove">
		<td><input class="edit class_<?php echo $id_t;?>" type="radio" value="<?php echo $id_t;?>" name="id_t" form="delTehn">
		<td><input class="edit class_<?php echo $id_t;?>" readonly type="text" name="id_t" size="2" id="count" value="<?php echo $i;?>">
		<td><input class="edit class_<?php echo $id_t;?>" readonly type="text" name="name" size="15" value="<?php echo $name;?>">
		<td><input class="edit class_<?php echo $id_t;?>" readonly type="text" name="model" size="15" value="<?php echo $model;?>">
		<td><input class="edit class_<?php echo $id_t;?>" readonly type="text" name="serN" size="15" <?php echo $serN;?>>
		<td><?php $it_invent->makeSelect('listStatus', 'id_status', '165px', $status, NULL, "class='edit class_$id_t' "); ?>
		<!--<td><input class="edit class_<?php echo $id_t;?>" readonly type="text" name="remark" size="15" value="<?php echo $remark;?>">-->
		<td><textarea class="edit class_<?php echo $id_t;?>" readonly name="remark" cols="22" rows="1"><?php echo $remark;?></textarea>
	</tr>
<?php
}
	//fclose($fd);
?>
