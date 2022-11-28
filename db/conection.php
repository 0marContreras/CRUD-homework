<?php

    class Connect{
        
        public $db; // variable global de conexion

        public function conn($dbName){

            $host="localhost";
            $user="root";
            $password="";
            

            try{

                $db = new PDO("mysql:host=$host;dbname=$dbName", $user, $password);

                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                  

                
                return $db;
                
            }catch(PDOException $err){
                    echo "Finger en: ".$err->getMessage();
            }

            $this->db= $db;

        }

        public function closeConn(){
            $this->db = NULL;
        }
    }

    

?>