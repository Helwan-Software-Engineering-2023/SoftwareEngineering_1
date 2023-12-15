<?php
class Person{
    private $id ;
    private $name ;
    private $username ;
    private $password ;
    private $contact_number ;
    private $role ;
    private $cityName ;
    private $address ;
    private $db ;


    function __construct(){
        include_once '../Control/include/DatabaseClass.php';		
		$this->db = new database();
    }

    function login($username , $password) {
        $this->username = $username;
		$this->password = $password;
		
		$sql = "SELECT * FROM users WHERE email='$this->username'";
		$row = $this->db->select($sql);
		
		if ($row['pass'] === $this->password) {
			session_start();
			$_SESSION['id']             =  $row['id'];
            $_SESSION['name']           =  $row['name'];
			$_SESSION['username']       =  $row['email'];
			$_SESSION['role']           =  $row['role'];
            $_SESSION['CityId']         =  $row['CityId'] ;
            $_SESSION['Phone_no']       =  $row['phone'];
            $_SESSION['Address']        =  $row['address'];
            $_SESSION['image']          =  $row['image'] ;
            $_SESSION['type']           =  $row['type'];
            $_SESSION['nid']            =  $row['national_id'];
			return TRUE;
		}
		return false;
    }

    function logout() {
		session_start();
        unset($_SESSION['id']);
        unset($_SESSION['name']);
        unset($_SESSION['username']);
        unset($_SESSION['role']);
        unset($_SESSION['CityId']);
        unset($_SESSION['Phone_no']);
        unset($_SESSION['Address']);
		session_destroy();
    }
    //SignUp

    

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getContact_number() {
        return $this->contact_number;
    }

    public function getRole() {
        return $this->role;
    }

    public function getCityName() {
        return $this->cityName;
    }

    public function getAddress() {
        return $this->address;
    }

    public function setId($id)  {
        $this->id = $id;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function setContact_number($contact_number){
        $this->contact_number = $contact_number;
    }

    public function setRole($role) {
        $this->role = $role;
    }

    public function setCityName($cityName) {
        $this->cityName = $cityName;
    }

    public function setAddress($address) {
        $this->address = $address;
    }


}

?>