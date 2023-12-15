<?php
include("../Models/Person.php");
class Vaccination_center extends Person{
    private $type ;
    private $sql;

    function __construct(){
        include_once '../Control/include/DatabaseClass.php';		
		$this->db = new database();
    }

    function vaccination_centers(){
        $this->sql = "SELECT  users.*,city.name as city_name from users inner join city
        on city.id=users.CityId 
        WHERE users.role = 'vaccination_center' ";
        $row = $this->db->display($this->sql);
        return $row;
    }

    public function ConfirmFirst($id){
        $this->sql = "UPDATE reserve_vaccination_center
        SET first_taken='true' WHERE reserve_vaccination_center.reservation_Numbere='$id'";
        $row = $this->db->update($this->sql);
        return $row;
    }
    public function ConfirmSecond($id){
        $this->sql = "SELECT second_dose_date FROM reserve_vaccination_center WHERE 
        reserve_vaccination_center.reservation_Numbere='$id'";
        $date=$this->db->select($this->sql);
        if($date['second_dose_date'] != 'Waiting'){
            $this->sql="UPDATE reserve_vaccination_center  
            SET second_taken= 'true' WHERE reserve_vaccination_center.reservation_Numbere='$id'";
            $result= $this->db->update($this->sql);
            return $result;
    }
}   
        public function count(){
            $num=$this->db->check($this->sql);
            return $num;
        }
    function listUsers($date){   
        $this->sql="SELECT user_id 
        FROM reserve_vaccination_center 
        WHERE first_dose_date='$date' or second_dose_date='$date'";
        $row = $this->db->display($this->sql);
        return $row ;

    }

    public function getUserInfo($id){
        $this->sql= "SELECT reserve_vaccination_center.reservation_Numbere as reserve_id,users.name as user_name,
        reserve_vaccination_center.user_id as user_id,reserve_vaccination_center.first_taken,reserve_vaccination_center.second_taken
        FROM users INNER JOIN reserve_vaccination_center
        on reserve_vaccination_center.user_id=users.id
        WHERE reserve_vaccination_center.Vaccination_center_id='$id'";
        $result = $this->db->display($this->sql);
        return $result ;
    }

    public function showAll($id){
        $this->sql= "SELECT reserve_vaccination_center.user_id as user_id,reserve_vaccination_center.reservation_Numbere as reserve_id
        ,reserve_vaccination_center.first_dose_date,reserve_vaccination_center.second_dose_date,reserve_vaccination_center.first_taken,
        reserve_vaccination_center.second_taken,users.* FROM users INNER JOIN reserve_vaccination_center
        on reserve_vaccination_center.user_id=users.id 
            WHERE reserve_vaccination_center.Vaccination_center_id='$id'";
        $result = $this->db->display($this->sql);
        return $result ;
    }
    public function searchUser($date,$id){
        $this->sql= "SELECT reserve_vaccination_center.user_id as user_id,reserve_vaccination_center.reservation_Numbere as reserve_id
        ,reserve_vaccination_center.first_dose_date,reserve_vaccination_center.second_dose_date,
        users.* FROM users INNER JOIN reserve_vaccination_center
        on reserve_vaccination_center.user_id=users.id 
            WHERE reserve_vaccination_center.Vaccination_center_id='$id' and 
            (reserve_vaccination_center.first_dose_date='$date' or reserve_vaccination_center.second_dose_date='$date')";
            $res = $this->db->display($this->sql);
            return $res ;
    }

    function confirmVaccinTaken($id){
        $this->sql="  SELECT  second_taken 
                FROM  Reserve_Vaccination_Center
                WHERE Vaccine_id='$id' ";
        if ($this->sql===true){
            return true ;
        }else 
            return false ;
    }

    function setType($type){
        $this->type= $type ;
    }

    function getType(){
        return $this->type ;
    }
}

?>