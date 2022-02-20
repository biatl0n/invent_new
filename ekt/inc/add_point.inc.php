<?php

$id_city = $it_invent->clearInt($_POST['listCity']);
$id_p_type = $it_invent->clearInt($_POST['listPType']);
$adress = $it_invent->clearStr($_POST['adress']);
$shop = $it_invent->clearStr($_POST['shop']);
$inet_1 = $it_invent->clearStr($_POST['inet_1']);
$inet_2 = $it_invent->clearStr($_POST['inet_2']);
$remark = $it_invent->clearStr($_POST['remark']);

if(empty($adress) or empty($id_city)){
    $errMsg = 'Заполнены не все обязательные поля (город, тип точки, адрес, интернет)';
}else{
    $it_invent->addPoint($adress, $id_city, $id_p_type, $shop, $inet_1, $inet_2, $remark);
    header ('Location:'.$_SERVER['PHP_SELF']);
    exit;
}

?>
