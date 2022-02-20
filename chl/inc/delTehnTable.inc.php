<?php
$res = $it_invent->showDeletedTehn();

$i=0;
foreach ($res as $item){
    $i++;
    $id_delTehn=$item['id_delTehn'];
    $name=$item['name'];
    $model=$item['model'];
    $serN=$item['serN'];
	$status=$item['status'];
	$remark=$item['remark'];
    $delReason=$item['delReason'];
    $delDate=$item['delDate'];
	$city=$item['city'];

    echo <<<LABEL
    <tr class="onMove">
        <td>
            <table>
                <tr>
                    <td id="td_1"><input type="radio"  name="id_t" value="$id_delTehn"></td>
                    <td id="td_1">$i</td>
                </tr>
            </table>
        </td>
        <td>$name</td>
        <td>$model</td>
        <td>$serN</td>
		<td>$status</td>
		<td>$remark</td>
        <td>$delDate</td>
        <td>$delReason</td>
		<td>$city</td>
    </tr>
LABEL;
}


?>
