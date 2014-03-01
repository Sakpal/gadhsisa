<?php
class SQL{
   private $db_host ;
   private $db_user;
   private $db_password;
   private $db_name;

    public function __construct($db_host=null,$db_user=null,$db_password=null,$db_name=null) {

        $this->setDbHost($db_host);
        $this->setDbUser($db_user);
        $this->setDbPassword($db_password);
        $this->setDbName($dbdb_name);
        return $this->setConnection();
    }
    private function setDbHost($db_host){
        $this->db_host=$db_host;
    }
    private function setDbUser($db_user){
        $this->db_user=$db_user;
    }
    private function setDbPassword($db_password){
        $this->db_password=$db_password;
    }
    private function setDbName($db_name){
        $this->db_name;
        mysqli_select_db($this->db_name);
    }
    private function setConnection(){
        $conn;
        try{
           $conn= mysqli_connect($this->db_host,$this->db_user,  $this->db_password);
        }  catch (Exception $e){}
        return $conn;
    }
}

?>
