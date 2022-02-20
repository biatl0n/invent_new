<?php

if(isset($_POST['id_p']))
    $id_p = $it_invent->clearInt($_POST['id_p']);
if(isset($_POST['PInfoCity']))
    $idCity = $it_invent->clearInt($_POST['PInfoCity']);
if(isset($_POST['PInfoPType']))
    $id_p_type = $it_invent->clearInt($_POST['PInfoPType']);
if(isset($_POST['adress']))
    $adress = $it_invent->clearStr($_POST['adress']);
if(isset($_POST['shop']))
    $shop = $it_invent->clearStr($_POST['shop']);
if(isset($_POST['inet_1']))
    $inet_1 = $it_invent->clearStr($_POST['inet_1']);
if(isset($_POST['inet_2']))
    $inet_2 = $it_invent->clearStr($_POST['inet_2']);
if(isset($_POST['remark']))
    $remark = $it_invent->clearStr($_POST['remark']);


$it_invent->changePointInfo($id_p, $idCity, $id_p_type, $adress, $shop, $inet_1, $inet_2, $remark);

?>