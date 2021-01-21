<?php



class Sql extends PDO{

    private $conn;

    public function __construct(){
        
        $this->conn = new PDO("mysql:dbname=de_volta;host=localhost","root", "" );

    }

    private function setPamas($stament, $paramtas=array()){
        foreach ($paramtas as $key => $value) {
           
           $this->serParam($key, $value);
       
        }
    }

    private function serParam($stament,$key, $value){
            
        $stament->bindParam($key,$value);
    
    }

    public function query($rowQuery, $parans=array()){

        $stme = $this->conn->prepare($rowQuery);
    
    }

}