<?php

if (isset($_POST['id_tt']))
    $id_t=$_POST['id_tt'];

if (isset($_POST['date_move']))
    $date_move=$_POST['date_move'];

if (isset($_POST['who_move']))
    $who_move=$_POST['who_move'];

if (isset($_POST['selectedPoint']))
    $id_p=$_POST['selectedPoint'];

if (isset($_GET['id_delTehn']))
    $id_delTehn2=$_GET['id_delTehn'];

if (isset($_GET['id_p'])) {
	$id_pp=$_GET['id_p'];
}

if($id_t!=NULL && $id_p!=NULL && $id_delTehn2==NULL){
    if ($it_invent->movTehn($id_t, $id_p)){
        $ref = str_replace("moveTehn.php","brows.php?id_p=$id_pp", $_SERVER['PHP_SELF']);
		$it_invent->addToStory($id_t, $id_p, $date_move, $who_move);

        $info = $it_invent->getItemPointInfo($id_p);
        $city=$info[0][city];
        $p_type=$info[0][p_type];
        $adress=$info[0][adress];
        $shop=$info[0][shop];

        $tehn_info=$it_invent->getItemTehnInfo($id_t);
        $tehn_name=$tehn_info[0]['name'];
        $tehn_modle=$tehn_info[0]['model'];
        $tehn_serN=$tehn_info[0]['serN'];

        $messaggio="Перемещение.\nКто:".$who_move." \nКому:".$city." ".$adress."\nЧто:".$tehn_name." ".$tehn_modle." ".$tehn_serN;
        $it_invent->sendMessage($_SESSION['chat_id'], $messaggio);

        header("Location: ".$ref);
    }
}

if($id_delTehn2!=NULL && $id_p!=NULL){
   if ($it_invent->movDelTehn($id_delTehn, $id_p)){
        $ref = str_replace("moveTehn.php","brows.php?id_p=$id_p", $_SERVER['PHP_SELF']);
        header("Location: ".$ref);
   }
}
?>
