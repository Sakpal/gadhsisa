<?php
class SQL{
   private $db_host ;
   private $db_user;
   private $db_password;
   private $db_table;

    public function __construct($db_host=null,$db_user=null,$db_password=null,$dbdb_table=null) {

        $this->setDbHost($db_host);
        $this->setDbUser($db_user);
        $this->setDbPassword($db_password);
        $this->setDbTable($dbdb_table);
        $this->setConnection();
    }
    private function setDbHost($dbH_host)
}

?>
