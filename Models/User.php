<?php

include("../Models/Person.php");

class user extends Person{
    private $vaccination_center_id ;
    private $vaccinationNumber ;
    private $specialNeeds ; 
    private $sql;
    private $db ;

    public function __construct(){
        include_once '../Control/include/DatabaseClass.php';		
        $this->db = new database();
    }

    function SignUp($name,$national_id,$email,$pass,$city,$phone,$address,$role){
        $this->sql = "SELECT email FROM users where email='$email'";
        $result=$this->db->display($this->sql);
        if (!empty($result)){
            return false;
        }else{
            $this->sql= "INSERT INTO users(name,national_id,email,pass,CityId,phone,address,role)VALUES('$name','$national_id','$email','$pass',$city,'$phone','$address','$role')";
            $result= $this->db->insert($this->sql);
            return $result;
        }
    }



    function reserveVaccine($vaccin_id,$user_id,$date,$doseType,$center_id){
        if ($doseType == 1){
            $this->sql = "SELECT * FROM reserve_vaccination_center WHERE user_id='$user_id'and Vaccine_id='$vaccin_id'";
            $result=$this->db->display($this->sql);
            if (!empty($result)){
                return false;
            }else{
            $this->sql="INSERT INTO reserve_vaccination_center(user_id,Vaccine_id,Vaccination_center_id,first_dose_date,first_taken,second_dose_date,second_taken)  
            VALUES('$user_id','$vaccin_id','$center_id','$date','false','Waiting','false')";
            $res=$this->db->insert($this->sql);
            return $res;
        }}elseif( $doseType== 2){
            $res="SELECT  first_taken FROM  reserve_vaccination_center 
            WHERE user_id='$user_id' and Vaccine_id= '$vaccin_id' ";
            $this->db->select($res);
            if($res == true or $res == 1){
            $gap="SELECT Gap FROM vaccine 
            WHERE Vaccine_id='$vaccin_id'";
            $res2="SELECT  first_dose_date FROM  reserve_vaccination_center 
            WHERE user_id='$user_id' and Vaccine_id= '$vaccin_id' ";
            $first_dose=$this->db->select($res2);
            $dateTime1 = new DateTime($date);
            $dateTime2 = new DateTime($first_dose["first_dose_date"]);
            $dateInterval=$dateTime1->diff($dateTime2);
            $daysDifference = $dateInterval->days;
            if($gap>=$daysDifference){
            
                $this->sql ="UPDATE reserve_vaccination_center 
                SET second_dose_date='$date' 
                where Vaccine_id='$vaccin_id' and user_id='$user_id'";
                $this->db->update($this->sql);
                return true ;
            }
            else{
                return false;
            }
        }
        }
    }
    
    public function getMyProfile($id){
        $this->sql = "SELECT reserve_vaccination_center.*,vaccine.name as vaccine_name,users.name as username FROM reserve_vaccination_center INNER JOIN vaccine on 
        reserve_vaccination_center.Vaccine_id= vaccine.Vaccine_id INNER JOIN users
        on reserve_vaccination_center.user_id=users.id
        WHERE reserve_vaccination_center.user_id=$id";
        $result= $this->db->display($this->sql);
        return $result ;
    }
    
    public function getCenters($id){
        $this->sql="SELECT name as center_name,id  From users Where CityId=$id and role='vaccination_center'";
        $res= $this->db->display($this->sql);
        return $res;
    }
    public function getVaccine(){
        $this->sql= "SELECT * from vaccine";
        $result= $this->db->display($this->sql);
        return $result;
    }
    

    public function count(){
        $num=$this->db->check($this->sql);
        return $num;
    }
    public function getResevation(){
        return $this->vaccinationNumber ;
    }

    public function setSpecialNeeds($disabled){
        $this->specialNeeds= $disabled ;
    }
    public function getSpecialNeeds(){
        return $this->specialNeeds ;
    }

}
?>