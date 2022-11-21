<?php

class Database{

	private $db_host = "localhost";
	private $db_user = "root";
	private $db_pass = "root";
	private $db_name = "newtest";

	private $mysqli = "";
	private $result = array();
	private $conn = false;
	

	public function __construct(){
		echo "done";die;
		if(!$this->conn){
			$this->mysqli = new mysqli($this->db_host,$this->db_user,$this->db_pass,$this->db_name);
			echo done;
			$this->conn = true;
			if($this->mysqli->connect_error){
				array_push($this->result, $this->mysqli->connect_error);
				return false;
			}
		}else{
			return true;
		}
	}
//funtion to insert into the database
public function insert(){

}
//funtion to update into the database
public function update(){

}
//funtion to delete into the database
public function delete(){

}
//funtion to select into the database
public function select(){

}
public function __destruct(){
    if($this->conn){
        if($this->mysql->close()){
            $this->conn=false;
            return ture;
        }
    }else{
        return false;
    }

}



}//class close
?>