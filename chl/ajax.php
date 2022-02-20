<?php
    require 'classes/IT_invent.class.php';
    $it_invent = new IT_invent;
    if (isset($_GET['serN'])) { 
        $newArr = array();
        $id_model = $_GET['serN'];
        $arr = ($it_invent->fillSNAjax($id_model));
        foreach ($arr as $item){
            $newArr[$item['id_SN']]=$item['SN'];
        }
        $arr = json_encode($newArr);
        echo $arr;
    }
    if (isset($_GET['addModel'])) { 
        $id_tehn = $_GET['addModel']; 
            $newArr = array();
        $arr = ($it_invent->fillModelsAjax($id_tehn));
        foreach ($arr as $item){
            $newArr[$item['id_model']]=$item['model'];
        }
        $arr = json_encode($newArr);
        echo $arr;
    }

    if (isset($_GET['remFromListModel']))  { 
        $id_tehn = $_GET['remFromListModel']; 
        $newArr = array();
        $arr = ($it_invent->fillModelsAjax($id_tehn));
        foreach ($arr as $item){
            $newArr[$item['id_model']]=$item['model'];
        }
        $arr = json_encode($newArr);
        echo $arr;
    }

?>
