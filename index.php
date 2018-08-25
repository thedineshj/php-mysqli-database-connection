<?php
// To prevent direct access of dbconnect.php
define('included',TRUE);
include('./shared/dbconnect.php');
class Example extends Database{
    public function execQuery(){
    //connect() method returns an array
        $connectionStatus=$this->connect();
        // connection established, $mysqli from Database class holds the connection to MySql server
        if($connectionStatus[0]){
            $qry="SELECT 'HelloWorld'";
            if($res=$this->mysqli->query($qry)){
                $fetchedData=[];
                while($row=$res->fetch_array(MYSQLI_ASSOC)){
                    $fetchedData[]=$row;
                }
                return [true,$fetchedData];
            }
        }
        // failed to establish connection,return error message
        else{
            return [false,$connectionStatus[1]];
        }
    }
}

// Example
/*
$e=new Example();
var_dump($e->execQuery());
*/
?>
