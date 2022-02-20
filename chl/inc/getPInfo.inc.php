<?php

if(isset($_REQUEST['upFilter'])){
    $idCity = $_POST['cityFilter'];
    $idPType = $_POST['ptypeFilter'];
    $res = $it_invent->getFilterPointsInfo($idCity, $idPType);
} else {
    $res = $it_invent->getPointsInfo();
}
$i=0;
foreach($res as $item){
    $i++;
    $id_p = $item['id_p'];
    $city = $item['city'];
    $adress = $item['adress'];
	$remark = $item['remark'];
    #$self = $_SERVER['PHP_SELF'];
    $self = "brows.php";
    echo <<<LABEL
        <tr class="onMove">
            <td align="center"><b>$i</b></td>
            <td><a class="links" href="$self?id_p=$id_p">$city</a></td>
            <td><textarea class="edit" rows="1" cols="30" >$adress</textarea></td>
			<td><textarea class="edit" rows="1" cols="30" >$remark</textarea></td>
        </tr>

LABEL;
}

?>
