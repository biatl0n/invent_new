<?php
require 'IIT_invent.class.php';

class IT_invent implements IIT_invent {
    protected $_db;
    const DB_NAME = 'it_invent.db';

    function __construct(){
        if(is_file(self::DB_NAME)){
            $this->_db = new SQLite3(self::DB_NAME);
            $this->_db->busyTimeout(2000);
            $this->_db->exec('PRAGMA journal_mode=WAL;');
            //$this->_db->exec('PRAGMA wal_checkpoint(FULL)');
            //$this->_db->exec('PRAGMA journal_mode=DELETE');
        }else{
             $this->_db = new SQLite3(self::DB_NAME);
             $this->_db->busyTimeout(2000);
             $this->_db->exec('PRAGMA journal_mode=WAL;');
             $sql = "CREATE TABLE point(
                    id_p INTEGER PRIMARY KEY AUTOINCREMENT,
                    id_city INTEGER,
                    id_p_type INTEGER,
                    adress TEXT,
					shop TEXT,
					remark TEXT)";
            $this->_db->exec($sql) or die ($this->_db->lastErrorMsg());
            $sql = "CREATE TABLE tehn(
                    id_t INTEGER PRIMARY KEY AUTOINCREMENT,
                    id_p INTEGER,
                    id_tehn INTEGER,
                    id_model INTEGER,
                    serN TEXT,
					id_status INTEGER,
					remark TEXT)";
            $this->_db->exec($sql) or die ($this->_db->lastErrorMsg());
            $sql = "CREATE TABLE listCity(
                    id_city INTEGER PRIMARY KEY AUTOINCREMENT,
                    city TEXT)";
            $this->_db->exec($sql) or die ($this->_db->lastErrorMsg());
            $sql = "CREATE TABLE listPType(
                    id_p_type INTEGER PRIMARY KEY AUTOINCREMENT,
                    p_type TEXT)";
            $this->_db->exec($sql) or die ($this->_db->lastErrorMsg());
            $sql = "CREATE TABLE listTehn(
                    id_tehn INTEGER PRIMARY KEY AUTOINCREMENT,
                    name TEXT)";
            $this->_db->exec($sql) or die ($this->_db->lastErrorMsg());
            $sql = "CREATE TABLE listModel(
                    id_model INTEGER PRIMARY KEY AUTOINCREMENT,
                    id_tehn INTEGER,
                    model TEXT)";
            $this->_db->exec($sql) or die ($this->_db->lastErrorMsg());
            $sql = "CREATE TABLE listSN(
                    id_SN INTEGER PRIMARY KEY AUTOINCREMENT,
                    id_model INTEGER,
                    SN TEXT)";
            $this->_db->exec($sql) or die ($this->_db->lastErrorMsg());
			$sql = "CREATE TABLE listStatus(
                    id_status INTEGER PRIMARY KEY AUTOINCREMENT,
                    status TEXT)";
            $this->_db->exec($sql) or die ($this->_db->lastErrorMsg());
            $sql = "CREATE TABLE delPoint(
                    id_delPoint INTEGER PRIMARY KEY AUTOINCREMENT,
                    id_p INTEGER,
                    city TEXT,
                    adress TEXT,
                    p_type TEXT,
                    delReason TEXT,
                    delDate TEXT)";
            $this->_db->exec($sql) or die ($this->_db->lastErrorMsg());
            $sql = "CREATE TABLE delTehn(
                    id_delTehn INTEGER PRIMARY KEY AUTOINCREMENT,
                    id_t INTEGER,
                    id_p INTEGER,
                    name TEXT,
                    model TEXT,
                    serN TEXT,
					status TEXT,
					remark TEXT,
                    delReason TEXT,
                    delDate TEXT,
					city TEXT)";
            $this->_db->exec($sql) or die ($this->_db->lastErrorMsg());
            $sql = "CREATE TABLE users(
                    user_id INTEGER PRIMARY KEY AUTOINCREMENT,
                    name TEXT (30) UNIQUE,
                    pass TEXT (255),
                    chat_id TEXT (100),
                    id_city INTEGER)";
            $this->_db->exec($sql) or die ($this->_db->lastErrorMsg());
            $sql = "CREATE TABLE history(
                    id_h INTEGER PRIMARY KEY AUTOINCREMENT,
                    id_t INTEGER,
					date_move TEXT,
					who_move TEXT,
                    city TEXT,
                    p_type TEXT,
                    adress TEXT,
					shop TEXT,
					remark TEXT)";
            $this->_db->exec($sql) or die ($this->_db->lastErrorMsg());
            $this->AddDefaultListValues();
            //$this->makeStore();

        }
    }

    function __destruct(){
        unset($this->_db);
    }

    function changeTehnInfo($id_t, $serN, $id_status, $remark){
        $check=0;
        $sql = "SELECT COUNT(id_t), serN FROM tehn WHERE serN='$serN'";
        $res = $this->_db->query($sql) or die ($this->_db->lastErrorMsg());
        $resSerN = $this->db2Arr($res);

        if($resSerN[0]['COUNT(id_t)']=='0' or $serN==NULL){
            $sql = "UPDATE tehn SET serN='$serN' WHERE id_t='$id_t'";
            if ($this->_db->exec($sql) or die ($this->_db->lastErrorMsg())){
                $check=+1;
            }
        }
		
		$sql = "UPDATE tehn SET serN='$serN', id_status='$id_status', remark='$remark' WHERE id_t='$id_t'";
		$this->_db->exec($sql) or die ($this->_db->lastErrorMsg());

        if ($check>0) {return true;}
        else { return false;}

    }
	
	function changePointInfo ($id_p, $idCity, $idPType, $adress, $shop, $remark){
		$sql = "UPDATE point 
					SET id_city='$idCity', id_p_type='$idPType', adress='$adress', shop='$shop', remark='$remark'
					WHERE id_p='$id_p'";
		$this->_db->exec($sql) or die ($this->_db->lastErorrMsg());
	}
    
    function getPointsInfo(){
        $sql = "SELECT point.*, listCity.*, listPType.*
                            FROM POINT
                            LEFT JOIN listPType USING (id_p_type)
                            LEFT JOIN listCity USING (id_city)
                            ORDER BY city";
        $res = $this->_db->query($sql) or die ($this->_db->lastErrorMsg());
        return $this->db2Arr($res);   
    }

    function getFilterPointsInfo($idCity, $idPType){
        $sql = "SELECT point.*, listCity.*, listPType.*
                            FROM POINT
                            LEFT JOIN listPType USING (id_p_type)
                            LEFT JOIN listCity USING (id_city)
                            WHERE point.id_city='$idCity' and id_p_type='$idPType'
                            ORDER BY city";
        if ($idCity!='NULL' && $idPType!='NULL'){
            $sql = "SELECT point.*, listCity.*, listPType.*
                                FROM POINT
                                LEFT JOIN listPType USING (id_p_type)
                                LEFT JOIN listCity USING (id_city)
                                WHERE point.id_city='$idCity' and id_p_type='$idPType'
                                ORDER BY city";
        }
        if ($idCity!='NULL' && $idPType=='NULL'){
            $sql = "SELECT point.*, listCity.*, listPType.*
                                FROM POINT
                                LEFT JOIN listPType USING (id_p_type)
                                LEFT JOIN listCity USING (id_city)
                                WHERE point.id_city='$idCity' 
                                ORDER BY city";
        }
        if ($idPType!='NULL' && $idCity=='NULL'){
            $sql = "SELECT point.*, listCity.*, listPType.*
                                FROM POINT
                                LEFT JOIN listPType USING (id_p_type)
                                LEFT JOIN listCity USING (id_city)
                                WHERE id_p_type='$idPType'
                                ORDER BY city";
        }

        $res = $this->_db->query($sql) or die ($this->_db->lastErrorMsg());
        return $this->db2Arr($res);   
        
    }

    function getItemPointInfo($id_p){
        $sql_point = "SELECT  point.*, listCity.*, listPType.* 
                           FROM point
                           LEFT JOIN listPtype USING (id_p_type)
                           LEFT JOIN listCity USING (id_city)
                           WHERE point.id_p=$id_p";
        $res_point = $this->_db->query($sql_point) or die ($this->_db->lastErrorMsg());
        return $this->db2arr($res_point);
               
    }

    function getTehnInfo($id_p){

        $sql_tehn = "SELECT tehn.*, listTehn.*, listModel.*, listStatus.*
                            FROM tehn
                            LEFT JOIN listTehn USING (id_tehn)
                            LEFT JOIN listModel USING (id_model)
							LEFT JOIN listStatus USING (id_status)
                            WHERE tehn.id_p='$id_p'
                            ORDER BY listTehn.name,listModel.model";

        $res_tehn = $this->_db->query($sql_tehn) or die ($this->_db->lastErrorMsg());
        return array ($this->db2arr($res_tehn));
    }

    function addPoint($adress, $id_city, $id_p_type, $shop, $remark){
        $sql = "INSERT INTO point(id_city, adress, id_p_type, shop, remark)
                            VALUES ($id_city, '$adress', $id_p_type, '$shop', '$remark')";
        $this->_db->exec($sql) or die ($this->_db->lastErrorMsg());           
    }

    function addTehn($id_p, $id_tehn, $id_model, $serN, $id_status, $remark){
            
        /*if ($serN!="") {
			if (!empty($serN)) {
				$sql = "SELECT COUNT(id_t) FROM tehn WHERE serN='$serN'";
				$res = $this->_db->query($sql);
				$res = $this->db2Arr($res);
				if($res[0]['COUNT(id_t)']>0){echo "Дубликат: <b>Серийник:</b> $serN<br>";}
				}
            $res = $this->_db->query($sql) or die ($this->_db->lastErrorMsg());
            $res = $this->db2Arr($res);
			
        } else {
           $res[0]['COUNT(id_t)']=0; 
        }*/
        /*if($res[0]['COUNT(id_t)']=='0'){*/
            $sql = "INSERT INTO tehn(id_p, id_tehn, id_model, serN, id_status, remark)
                                values($id_p, $id_tehn, $id_model, '$serN', '$id_status', '$remark')";

            $this->_db->exec($sql) or die ($this->_db->lastErrorMsg());
            return true;
        /*}else{return false;}*/
    }

    function movTehn($id_t, $id_p){
        $sql = "UPDATE tehn SET id_p='$id_p' WHERE id_t='$id_t'";
        if ($this->_db->exec($sql) or die ($this->_db->lastErrorMsg()));
        return true;
    }
	
	function addToStory($id_t, $id_p, $date_move, $who_move){
		$ItemPointInfo=$this->getItemPointInfo($id_p);
		$city=$ItemPointInfo[0][city];
		$p_type=$ItemPointInfo[0][p_type];
		$adress=$ItemPointInfo[0][adress];
		$shop=$ItemPointInfo[0][shop];

        $sql = "SELECT remark FROM tehn WHERE id_t=".$id_t;
        $res = $this->_db->query($sql) or die ($this->_db->lastErrorMsg());
        $res = $this->db2Arr($res);
		$remark=$res[0]['remark'];
		
		$sql = "INSERT INTO history(id_t, date_move, who_move, city, p_type, adress, shop, remark)
							VALUES ($id_t, '$date_move', '$who_move', '$city',  '$p_type', '$adress', '$shop', '$remark')";
		$this->_db->exec($sql) or die ($this->_db->lastErrorMsg());
	}
	
	function showHistry($id_t) {
		$sql = "SELECT * FROM history
				WHERE id_t='$id_t'";
		$result = $this->_db->query($sql) or die ($this->_db->lastErrorMsg());
        return $this->db2Arr($result);
	}

    function movDelTehn($id_delTehn, $id_p){
        $delTehn=$this->getItemDelTehnInfo($id_delTehn);
		$id_t=$delTehn[0]['id_t'];
        $name=$delTehn[0]['name'];
        $model=$delTehn[0]['model'];
        $serN=$delTehn[0]['serN'];
		$status=$delTehn[0]['status'];
		$remark=$delTehn[0]['remark'];

					$sql="SELECT COUNT(name), id_tehn FROM listTehn WHERE name='$name'";
					$res=$this->_db->query($sql) or die ($this->_db->lastErrorMsg());
					$res=$res->fetchArray(SQLITE3_NUM);
					if($res[0]==0) {
						$sql = "INSERT INTO listTehn(name) VALUES ('$name')";
						$this->_db->exec($sql) or die ($this->_db->lastErrorMsg());
						$sql="SELECT name, id_tehn FROM listTehn WHERE name='$name'";
						$res=$this->_db->query($sql) or die ($this->_db->lastErrorMsg());
						$res=$res->fetchArray(SQLITE3_NUM);
						$id_tehn=$res[1];
					} else {$id_tehn=$res[1];}
								
					$sql="SELECT COUNT(model), id_model, id_tehn FROM listModel WHERE model='$model' and id_tehn='$id_tehn'";
					$res=$this->_db->query($sql) or die ($this->_db->lastErrorMsg());
					$res=$res->fetchArray(SQLITE3_NUM);
					if($res[0]==0) {
						$sql = "INSERT INTO listModel(id_tehn, model) VALUES ('$id_tehn', '$model')";
						$this->_db->exec($sql) or die ($this->_db->lastErrorMsg());
						$sql="SELECT model, id_model FROM listModel WHERE model='$model'";
						$res=$this->_db->query($sql) or die ($this->_db->lastErrorMsg());
						$res=$res->fetchArray(SQLITE3_NUM);
						$id_model=$res[1];
					} else {$id_model=$res[1];}
					
					$sql="SELECT COUNT(status), id_status FROM listStatus WHERE status='$status'";
					$res=$this->_db->query($sql) or die ($this->_db->lastErrorMsg());
					$res=$res->fetchArray(SQLITE3_NUM);
					if($res[0]==0) {
						$sql = "INSERT INTO listStatus(status) VALUES ('$status')";
						$this->_db->exec($sql) or die ($this->_db->lastErrorMsg());
						$sql="SELECT status, id_status FROM listStatus WHERE status='$status'";
						$res=$this->_db->query($sql) or die ($this->_db->lastErrorMsg());
						$res=$res->fetchArray(SQLITE3_NUM);
						$id_status=$res[1];
					} else {$id_status=$res[1];}

		if ($id_tehn!=NULL && $id_model!=NULL && $id_p!=NULL) {
            $sql = "INSERT INTO tehn(id_t, id_p, id_tehn, id_model, serN, id_status, remark) 
                                VALUES ('$id_t','$id_p', '$id_tehn', '$id_model', '$serN', '$id_status', '$remark')";
            $this->_db->exec($sql) or die ($this->_db->lastErrorMsg());

            $sql = "DELETE FROM delTehn WHERE id_delTehn=$id_delTehn";
            $this->_db->exec($sql) or die ($this->_db->lastErrorMsg());
            return true;
        }
        else {
            return false;
        }
		
    }

    function getItemDelTehnInfo($id_delTehn){
        $sql = "SELECT id_t, name, model, serN, status, remark from delTehn WHERE id_delTehn='$id_delTehn'";
        $result = $this->_db->query($sql) or die ($this->_db->lastErrorMsg());
        $result = $this->db2Arr($result);
        return $result;
    }

    function getItemTehnInfo($id_t){
        $sql = "SELECT tehn.id_t, tehn.id_status, tehn.remark, tehn.serN, listTehn.name, listModel.model 
                                        FROM tehn
                                        LEFT JOIN listTehn USING(id_tehn)
                                        LEFT JOIN listModel USING(id_model)
                                        WHERE id_t='$id_t'";
        $result = $this->_db->query($sql) or die ($this->_db->lastErrorMsg());
        $result = $this->db2Arr($result);
        return $result;    
    }
   
    function showDeletedPoints(){
        $sql = "SELECT * FROM delPoint ORDER BY city";
        $res = $this->_db->query($sql) or die ($this->_db->lastErrorMsg());
        $res = $this->db2Arr($res);   
        return $res;
    }

    function showDeletedTehn(){
        $sql = "SELECT * FROM delTehn ORDER BY model";
        $res = $this->_db->query($sql) or die ($this->_db->lastErrorMsg());
        $res = $this->db2Arr($res);   
        return $res;
    }

    function queryMaker($where){

        $sql = "SELECT *, listPType.*, listTehn.*, listModel.*, point.*, listCity.*, listStatus.*, tehn.remark as tehnrem FROM tehn 
                                        LEFT JOIN point USING(id_p)
                                        LEFT JOIN listCity USING(id_city)
                                        LEFT JOIN listPType USING (id_p_type)
                                        LEFT JOIN listTehn USING (id_tehn)
                                        LEFT JOIN listModel USING (id_model)
										LEFT JOIN listStatus USING (id_status)";
        $sql=$sql.$where;    
        $res = $this->_db->query($sql) or die ($this->_db->lastErrorMsg()); 
        $res = $this->db2Arr($res);
        return $res;
    }

    function AddDefaultListValues(){
        $ini_array = parse_ini_file("ini/tehn.ini", true);

        $i=100;
        $j=100;
        foreach($ini_array as $key=>$value){
            $sqlTehn = "INSERT INTO listTehn(id_tehn, name) VALUES('$i', '$key')";
            $this->_db->exec($sqlTehn) or die ($this->_db->lastErrorMsg());
            foreach ($value as $key2=>$val2){
                $sqlModel = "INSERT INTO listModel(id_model, id_tehn, model) VALUES('$j', '$i', '$val2')";
                $this->_db->exec($sqlModel) or die ($this->_db->lastErrorMsg());

                $sqlSN = "INSERT INTO listSN(id_model, SN) VALUES ('$j', '$key2')";
                $this->_db->exec($sqlSN) or die ($this->_db->lastErrorMsg());
                $j++;
            }
            $i++;
        }

        $ini_array = parse_ini_file("ini/point.ini");
        foreach($ini_array as $key=>$value){
            $sql = "INSERT INTO listPtype(p_type) VALUES ('$value')";
            $this->_db->exec($sql) or die ($this->_db->lastErrorMsg());
        }

        $ini_array = parse_ini_file("ini/store.ini");
        foreach($ini_array as $key=>$value){
            $sql = "INSERT INTO listCity(city) VALUES ('$value')";
            $this->_db->exec($sql) or die ($this->_db->lastErrorMsg());
        }
		
		$ini_array = parse_ini_file("ini/status.ini");
        foreach($ini_array as $key=>$value){
            $sql = "INSERT INTO listStatus(status) VALUES ('$value')";
            $this->_db->exec($sql) or die ($this->_db->lastErrorMsg());
        }      

    }

    function makeStore(){
        $sql = "INSERT INTO point(id_city, id_p_type) VALUES('1', '7')";
        $this->_db->exec($sql) or die ($this->_db->lastErrorMsg());
    }

    function remTehn($id_t, $delReason, $delDate){
        $sql = "SELECT listTehn.name, listModel.model, tehn.serN, tehn.id_t, tehn.id_p, listStatus.status, tehn.remark FROM tehn 
                        LEFT JOIN listTehn USING (id_tehn)
                        LEFT JOIN listModel USING (id_model)
						LEFT JOIN listStatus USING (id_status)
                        WHERE id_t='$id_t'";
        $res = $this->_db->query($sql) or die ($this->_db->lastErrorMsg());
        $res = $this->db2Arr($res);
		
		$id_p = $res[0]['id_p'];
		
		$sql = "SELECT listCity.city FROM point LEFT JOIN listCity USING (id_city) where point.id_p='$id_p'";
		$res2 = $this->_db->query($sql) or die ($this->_db->lastErrorMsg());
		$res2 = $this->db2Arr($res2);
        
		$city = $res2[0]['city'];
        $name = $res[0]['name'];
        $model = $res[0]['model'];
        $serN = $res[0]['serN'];
		$status = $res[0]['status'];
		$remark = $res[0]['remark'];

        $sql = "INSERT INTO delTehn(id_t,
                                    id_p,
                                    name,
                                    model,
                                    serN,
									status,
									remark,
                                    delReason,
                                    delDate,
									city)
                            VALUES( $id_t,
                                    $id_p,
                                    '$name',
                                    '$model',
                                    '$serN',
									'$status',
									'$remark',
                                    '$delReason',
                                    '$delDate',
									'$city')";
        $this->_db->exec($sql) or die ($this->_db->lastErrorMsg());
        $sql = "DELETE FROM tehn WHERE id_t='$id_t'";
        $this->_db->exec($sql) or die ($this->_db->lastErrorMsg());
    }

    function remPoint($id_p, $delReason, $delDate){
        $point = $this->getItemPointInfo($id_p);

        $id_p = $point[0]['id_p'];
        $city = $point[0]['city'];
        $adress = $point[0]['adress'];
        $p_type = $point[0]['p_type'];
        
        $sql = "INSERT INTO delPoint(id_p,
                                     city,
                                     adress,
                                     p_type,
                                     delReason,
                                     delDate)
                            VALUES($id_p,
                                     '$city', 
                                     '$adress', 
                                     '$p_type', 
                                     '$delReason', 
                                     '$delDate')";
        $this->_db->exec($sql) or die ($this->_db->lastErrorMsg());
        $sql = "DELETE FROM point WHERE id_p='$id_p'";
        $this->_db->exec($sql) or die ($this->_db->lastErrorMsg());
    }

    function doubleFinder($tableName, $rowName, $data){
            function sqlite_NoCase($string){
                return mb_strtolower($string);
            }
            $this->_db->createFunction('sqlite_NoCase', 'sqlite_NoCase');
            $data = sqlite_NoCase($data);
            $sql = "SELECT COUNT($rowName) FROM $tableName WHERE sqlite_NoCase($rowName)='$data'";
            $res = $this->_db->query($sql) or die ($this->_db->lastErrorMsg());
            $row = $res->fetchArray(SQLITE3_NUM);
        return $row."Hello";
    }

    function addToList($tableName, $rowName, $data, $row_2_name=Null, $data2=Null){
        if (!$row_2_name and !$data2) {
            $sql = "INSERT INTO $tableName($rowName) VALUES ('$data')";
            $this->_db->exec($sql) or die ($this->_db->lastErrorMsg());
         }else { 
            $sql = "INSERT INTO $tableName($rowName, $row_2_name) VALUES ('$data', '$data2')";
            $this->_db->exec($sql) or die ($this->_db->lastErrorMsg());
        }
    }

    function remFromList($tableName, $rowName, $data){
            $sql = "DELETE FROM $tableName WHERE $rowName=$data";
            $this->_db->exec($sql) or die ($this->_db->lastErrorMsg());
    }

    function getCount($rowName, $tableName, $data){
        $sql = "SELECT COUNT($rowName) FROM $tableName WHERE $rowName=$data";
        $res = $this->_db->query($sql) or die ($this->_db->lastErrorMsg());
        $row = $res->fetchArray(SQLITE3_NUM);
        if ($row[0]){
            return true;
        }else{
            return false;
        }
    }

    function clearStr($data){
        $data = trim(strip_tags($data));
        return $this->_db->escapeString($data);
    }

    function clearInt($data){
        return abs((int)$data);    
    }
    
    function fillModelsAjax($id_tehn){
        $sql = "SELECT id_model, model FROM listModel WHERE id_tehn='$id_tehn'";
        $res = $this->_db->query($sql) or die ($this->_db->lastErrorMsg());
        return $this->db2Arr($res);
    }

    function fillSNAjax($id_model){
        $sql = "SELECT id_SN, SN FROM listSN WHERE id_model='$id_model'";
        $res = $this->_db->query($sql) or die ($this->_db->lastErrorMsg());
        return $this->db2Arr($res);
    }

    protected function db2Arr($data){
        $arr = array();
        while($row = $data->fetchArray(SQLITE3_ASSOC))
            $arr[] = $row;
        return $arr;
    }

    function makeSelect($table_name, $select_name=null, $select_size=null, $selected=null, $id_p=NULL, $enabled=NULL){
        if ($table_name!="listModel"){
            $sql = "PRAGMA table_info('$table_name')";
            $res = $this->_db->query($sql) or die ($this->_db->lastErrorMsg());
            $arr = $this->db2Arr($res);
            $orderColl = $arr[1]['name'];
            $col_2 = $arr[1]['name'];
            $col_1 = $arr[0]['name'];
            $sql = "SELECT * FROM '$table_name' ORDER BY $orderColl";
            $res = $this->_db->query($sql) or die ($this->_db->lastErorrMsg());
            $arr = $this->db2Arr($res);
            if (!$select_size){
                $selectWidth = "165px";
            }else{
                $selectWidth = $select_size;
            }
            if(!$select_name){
                echo "\r\n<select ";
				if (isset($enabled)) {echo "disabled style='color: black;' "; echo $enabled." ";}
				echo "name='".$table_name."' style='width:".$selectWidth."'>\r\n";
            }else{
                echo "\r\n<select ";
				if (isset($enabled)) {echo "disabled style='color: black;' "; echo $enabled." ";}
				echo "name='".$select_name."' style='width:".$selectWidth."'>\r\n";
            }
            //echo "<option value='NULL'> </option>\r\n";
			if (!$selected) {echo "<option value='NULL'> </option>\r\n";}
            foreach($arr as $item){
                $data_1 = $item[$col_1];
                $data_2 = $item[$col_2];
				if ($id_p!=1 and $data_2!='СКЛАД' and $_SERVER['SCRIPT_NAME']!='/chl/queryMaker.php'){
					if ($selected==$data_2) {
						echo "<option selected value='$data_1'>$data_2</option>\r\n";
					}
					else {echo "<option value='$data_1'>$data_2</option>\r\n";}
				}
				if ($id_p==1 and $data_2=='СКЛАД') {
					if ($selected==$data_2) {
						echo "<option selected value='$data_1'>$data_2</option>\r\n";
					}
					else {echo "<option value='$data_1'>$data_2</option>\r\n";}
				}
				if ($_SERVER['SCRIPT_NAME']=='/chl/queryMaker.php') {echo "<option value='$data_1'>$data_2</option>\r\n";}
			}
            echo "</select>\r\n";
        }else{
            $sql = "PRAGMA table_info('$table_name')";
            $res = $this->_db->query($sql) or die ($this->_db->lastErrorMsg());
            $arr = $this->db2Arr($res);
			
            $orderColl = $arr[2]['name'];
            $col_3 = $arr[2]['name'];
			
            $col_2 = $arr[1]['name'];
            $col_1 = $arr[0]['name'];
            $sql = "SELECT * FROM '$table_name' ORDER BY $orderColl";
            $res = $this->_db->query($sql) or die ($this->_db->lastErorrMsg());
            $arr = $this->db2Arr($res);
			
            if (!$select_size){
                $selectWidth = "165px";
            }else{
                $selectWidth = $select_size;
            }
            if(!$select_name){
                echo "\r\n<select name='".$table_name."' style='width:".$selectWidth."'>\r\n";
            }else{
                echo "\r\n<select name='".$select_name."' style='width:".$selectWidth."'>\r\n";
            }

            foreach($arr as $item){
                $data_1 = $item[$col_1];
                $data_2 = $item[$col_2];
                $data_3 = $item[$col_3];
                echo <<<LABEL
                    <option value="$data_1">$data_3</option>\r\n
LABEL;
            }
            echo "</select>\r\n";
        }
    }
	
	
    function getChatID($id_p){
        $sql = "SELECT id_city, users.chat_id FROM point 
            LEFT JOIN users USING('id_city')
            WHERE id_p='$id_p'";
        $res = $this->_db->query($sql) or die ($this->_db->lastErrorMsg());
        $res = $this->db2Arr($res);   
        $res=$res[0]['chat_id'];
        return $res;
    }


	function login($li, $pw) {
		$li = $this->clearStr($li);
		$pw = $this->clearStr($pw);
        $sql = "SELECT pass FROM users WHERE name='$li'";
        $res = $this->_db->query($sql) or die ($this->_db->lastErrorMsg());
        $res = $this->db2Arr($res);   
		$hash = $res[0]['pass'];
		if (password_verify($pw, $hash)) {
			$res=true;
		} else {
			$res=false;
		}
        return $res;
	}

    function session_init($li){
        $sql = "SELECT id_city, chat_id FROM users WHERE name='$li'";
        $res = $this->_db->query($sql) or die ($this->_db->lastErrorMsg());
        $res = $this->db2Arr($res);
        $result['id_city'] = $res[0]['id_city'];
        $result['chat_id'] = $res[0]['chat_id'];


        $sql = "SELECT city FROM listCity WHERE id_city=".$result['id_city'];
        $res = $this->_db->query($sql) or die ($this->_db->lastErrorMsg());
        $res = $this->db2Arr($res);
        $result['city'] = $res[0]['city'];

        $sql = "SELECT id_p FROM point WHERE id_city=".$result['id_city'];
        $res = $this->_db->query($sql) or die ($this->_db->lastErrorMsg());
        $res = $this->db2Arr($res);
        $result['id_p'] = $res[0]['id_p'];

        $result['login'] = $li;

        return $result;
    }
	
	function sendMessage($chat_id, $messaggio) {
			$token="bot5161483103:AAEW4Q9QtMVy6hpozvhIF9nJu79oqfBnTrQ";
			$messaggio = $this->clearStr($messaggio);
			$url = "https://api.telegram.org/" . $token . "/sendMessage?chat_id=" . $chat_id;
			$url = $url . "&text=" . urlencode($messaggio);
			$ch = curl_init();
			//curl_setopt($ch, CURLOPT_PROXY, "localhost:9050");
			//curl_setopt($ch, CURLOPT_PROXYTYPE, 7);
			$optArray = array(
				CURLOPT_URL => $url,
				CURLOPT_RETURNTRANSFER => true
			);
			
			curl_setopt_array($ch, $optArray);
			$result = curl_exec($ch);
			curl_close($ch);
		}
	

	function importCSV ($filename, $id_p){
		$this->_db->exec("BEGIN EXCLUSIVE TRANSACTION"); 
		$filename = fopen (getcwd()."/".$filename, 'r' );
		if($filename) {
			for($i=0; $info = fgetcsv ($filename, 10000, ";"); $i++) {
				list($name, $model, $serN, $status, $remark) = $info;
				$name = @iconv('Windows-1251', 'UTF-8//TRANSLIT//IGNORE', $name);
				$model = @iconv('Windows-1251', 'UTF-8//TRANSLIT//IGNORE', $model);
				$serN = @iconv('Windows-1251', 'UTF-8//TRANSLIT//IGNORE', $serN);
				$status = @iconv('Windows-1251', 'UTF-8//TRANSLIT//IGNORE', $status);
				$remark = @iconv('Windows-1251', 'UTF-8//TRANSLIT//IGNORE', $remark);
					
					$sql="SELECT COUNT(name), id_tehn FROM listTehn WHERE name='$name'";
					$res=$this->_db->query($sql) or die ($this->_db->lastErrorMsg());
					$res=$res->fetchArray(SQLITE3_NUM);
					if($res[0]==0) {
						$sql = "INSERT INTO listTehn(name) VALUES ('$name')";
						$this->_db->exec($sql) or die ($this->_db->lastErrorMsg());
						$sql="SELECT name, id_tehn FROM listTehn WHERE name='$name'";
						$res=$this->_db->query($sql) or die ($this->_db->lastErrorMsg());
						$res=$res->fetchArray(SQLITE3_NUM);
						$id_tehn=$res[1];
					} else {$id_tehn=$res[1];}
					$sql="SELECT COUNT(model), id_model, id_tehn FROM listModel WHERE model='$model' and id_tehn='$id_tehn'";
					$res=$this->_db->query($sql) or die ($this->_db->lastErrorMsg());
					$res=$res->fetchArray(SQLITE3_NUM);
					if($res[0]==0) {
						$sql = "INSERT INTO listModel(id_tehn, model) VALUES ('$id_tehn', '$model')";
						$this->_db->exec($sql) or die ($this->_db->lastErrorMsg());
						$sql="SELECT model, id_model FROM listModel WHERE model='$model'";
						$res=$this->_db->query($sql) or die ($this->_db->lastErrorMsg());
						$res=$res->fetchArray(SQLITE3_NUM);
						$id_model=$res[1];
					} else {$id_model=$res[1];}
					
					$sql="SELECT COUNT(status), id_status FROM listStatus WHERE status='$status'";
					$res=$this->_db->query($sql) or die ($this->_db->lastErrorMsg());
					$res=$res->fetchArray(SQLITE3_NUM);
					if($res[0]==0) {
						$sql = "INSERT INTO listStatus(status) VALUES ('$status')";
						$this->_db->exec($sql) or die ($this->_db->lastErrorMsg());
						$sql="SELECT status, id_status FROM listStatus WHERE status='$status'";
						$res=$this->_db->query($sql) or die ($this->_db->lastErrorMsg());
						$res=$res->fetchArray(SQLITE3_NUM);
						$id_status=$res[1];
					} else {$id_status=$res[1];}
					
					if ($id_tehn!=NULL && $id_model!=NULL) {
						$this->addTehn($id_p, $id_tehn, $id_model, $serN, $id_status, $remark);
					}
			}
			fclose ( $filename );
			
			$this->_db->exec('COMMIT');
			return true;
		}else {return false;}
	}
	
	function delFromTrash($id_t){
		$sql = "DELETE FROM delTehn WHERE id_delTehn='$id_t'";
        $this->_db->exec($sql) or die ($this->_db->lastErrorMsg());
	}
	

    function showTable($table){     //***************************************** Удалить!!!!!!!!!!! ************//
        $sql = "SELECT * FROM $table";
        $res = $this->_db->query($sql) or die ($this->_db->lastErrorMsg());
        return $this->db2Arr($res);
    }
	
	function renameS(){				//*************************************** Удалить!!!!!!!!!!! ************//
		$sql = "UPDATE listTehn SET name='Ноутбук' WHERE name='Ноут'";
        $this->_db->exec($sql) or die ($this->_db->lastErrorMsg());
	}
	
	function listDelete(){			//*************************************** Удалить!!!!!!!!!!! ************//
		$sql = "DELETE FROM listTehn WHERE id_tehn=118";
		$this->_db->exec($sql) or die ($this->_db->lastErrorMsg());
		$sql = "DELETE FROM listModel WHERE id_model=175";
		$this->_db->exec($sql) or die ($this->_db->lastErrorMsg());
		$sql = "DELETE FROM listStatus WHERE id_status=7";
		$this->_db->exec($sql) or die ($this->_db->lastErrorMsg());
	}
	
	function delThet(){     //***************************************** Удалить!!!!!!!!!!! ************//
		$sql = "DELETE FROM listTehn WHERE id_tehn=108";
        $this->_db->exec($sql) or die ($this->_db->lastErrorMsg());
		$sql = "DELETE FROM listModel WHERE id_model=142";
        $this->_db->exec($sql) or die ($this->_db->lastErrorMsg());
		$sql = "DELETE FROM listStatus WHERE id_status=7";
        $this->_db->exec($sql) or die ($this->_db->lastErrorMsg());
    }
}
?>
