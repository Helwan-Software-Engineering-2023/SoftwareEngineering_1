<?php
include("../Models/Person.php");
class Admin extends Person {
	private $sql;
	private $db;
    


		public function __construct(){
			include_once '../Control/include/DatabaseClass.php';		
			$this->db = new database();
		}
		public function AddCity($cityName) {
			$this->sql = "SELECT name FROM city WHERE name='$cityName'";
			$result= $this->db->select($this->sql);
			if(!empty($result)){
				return false;
			}else{
			$this->sql = "INSERT INTO city(name) VALUES
			('$cityName')";
			$res= $this->db->insert($this->sql);
			return $res;
		}
	}
	public function DeleteVaccine($id) {
		$this->sql = "DELETE FROM vaccine WHERE Vaccine_id=$id";
		$res= $this->db->delete($this->sql);
		return $res;
	}
	public function getVaccines() {
		$this->sql = "SELECT * from vaccine";
		$result= $this->db->display($this->sql);
		return $result;
	}
		public function count(){
		$num=$this->db->check($this->sql);
        return $num;
		}
	
		public function getCites(){
			$this->sql="SELECT * FROM city";
			$result= $this->db->display($this->sql);
			return $result;
		}
		public function getVaccinationCenterId(){
			$type="VaccinationCenter";
			$this->sql="SELECT ID FROM users WHERE Type='$type'";
			$row = $this->db->display($this->sql);
			return $row ;
		}

		function listUsers(){   
			$this->sql="SELECT * FROM users WHERE role='User' ";
			$row = $this->db->display($this->sql);
			return $row ;

	}

		public function searchCenter($name){
			$this->sql= "SELECT id from city where name='$name'";
			$id=$this->db->select($this->sql);
				$this->sql= "SELECT users.*,city.name as city_name From users inner join city
				on city.id=users.CityId
				WHERE CityId='$id[id]' and role='vaccination_center'";
				$result = $this->db->display($this->sql);
				return $result;
		}
		


		public function addVaccinationCenter($name,$userName,$password,$cityId,$contactNumber,$address,$role,$type){
			$this->sql= "SELECT email From users Where email='$userName'";
			$result= $this->db->select($this->sql);
			if(!empty($result)){
				return false;
			}else{
			$this->sql="INSERT INTO users (name,email,pass,CityId,phone,address,role,type) 
			VALUES('$name','$userName','$password','$cityId','$contactNumber','$address','$role','$type') ";
			$res=$this->db->insert($this->sql);
			return $res;
		}
	}

		public function updateVaccinationCenter($id,$newName){
			$this->sql = "UPDATE users SET name='$newName'  WHERE id='$id'";
			return $this->db->update($this->sql);
		}

		public function deleteVaccinationCenter($id){
			$this->sql="DELETE FROM users WHERE id = '$id' ";
			$res=$this->db->delete($this->sql);
			return $res;
		}

		public function addVaccine($name,$gap,$precautions,$age){
			$this->sql= "SELECT Name FROM vaccine Where Name='$name'";
			$result = $this->db->select($this->sql);
			if(!empty($result)){
				return false;
			}else{
			$this->sql ="INSERT INTO vaccine(Name,gap,Description,Valid_age)
			VALUES ('$name','$gap','$precautions','$age')";
			$res=$this->db->insert($this->sql);
			return $res;
		}
	}

}
?>