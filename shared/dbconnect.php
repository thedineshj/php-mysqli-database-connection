<?php
// preventing direct access
if(!defined('included')){
    header("HTTP/1.0 403 Forbidden");
    die("Access denied");
}
class Database{
    protected $mysqli=null;
    public function connect(){
    // change constructor values
        $this->mysqli = new mysqli("127.0.0.1","root","root","dbname",3306);
            if ($this->mysqli->connect_error) {
                return [FALSE,$this->mysqli->connect_error];
            }
             else {
                return [TRUE,"Connected"];
            }
        return [FALSE,"Error"];
    } 
}
?>
