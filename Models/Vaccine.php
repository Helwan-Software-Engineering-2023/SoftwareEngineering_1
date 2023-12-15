<?php
class Vaccine{
    private $vaccin_id ;
    private $name ;
    private $gap ;
    private $sql ;
    private $db ;

    function __construct(){
        include_once '../Control/include/DatabaseClass.php';		
		$this->db = new database();
    }

    function vaccins(){
        $this   ->sql = "SELECT * from vaccine ";
        $row = $this->db->display($this->sql);
        return $row;
    }
        public function count(){
            $num=$this->db->check($this->sql);
            return $num;
        }


    public function getVaccin_id() {
        return $this->vaccin_id;
    }

    public function getName() {
        return $this->name;
    }

    public function getGap() {
        return $this->gap;
    }

    public function setVaccin_id($vaccin_id) {
        $this->vaccin_id = $vaccin_id;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function setGap($gap) {
        $this->gap = $gap;
    }
}
?>