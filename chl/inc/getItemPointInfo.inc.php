<?php

$id_p = $_GET['id_p'];
$id_p = $it_invent->clearInt($id_p);
$point_info = $it_invent->getItemPointInfo($id_p);

$city = $point_info[0]['city'];
$adress = $point_info[0]['adress'];
$remark = $point_info[0]['remark'];

?>

<table border id="table" valign="top" style="margin:10px">
    <tr>
        <th>Держатель</th>
		<th>Адрес</th>
		<th>Пометка</th>
	</tr>
	<tr>
        <td><textarea name="city"   cols="22" rows="1"><?php echo $city; ?></textarea></td>
        <td><textarea name="adress" cols="22" rows="1"><?php echo $adress;?></textarea></td>
        <td><textarea name="remark" cols="22" rows="1"><?php echo $remark;?></textarea></td>
    </tr>
</table>



