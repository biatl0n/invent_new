<?php
require 'classes/IT_invent.class.php';
$it_invent = new IT_invent;

$id_t = $it_invent->clearStr($_GET['id_t']);
$serN = $it_invent->clearStr($_GET['serN']);
$id_status = $it_invent->clearStr($_GET['id_status']);
$status = $it_invent->clearStr($_GET['status']);
$remark = $it_invent->clearStr($_GET['remark']);


$res=$it_invent->changeTehnInfo($id_t, $serN, $status, $remark);

echo $res;

?>
