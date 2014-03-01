<?php
class connectionManager{
    public static $conn;
    static function connectionManager(){
        if(self::$conn == null){
            self::$conn=new SQL(DB_HOST,DB_USER,DB_PASSWORD);
            return self::$conn;
        }
        return self::$conn;
    }

}
?>
