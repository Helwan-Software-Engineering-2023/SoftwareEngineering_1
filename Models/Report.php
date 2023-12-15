<?php
    class Report{

        private $db;
        public function __construct(){
            include_once '../include/DatabaseClass.php';		
            $this->db = new database();
        }
        public function setReport($name , $description){
            $sql="INSERT INTO Reports('Name','Description') VALUES ('$name','$description')";
            $this->db->insert($sql);
        }
    }
?>