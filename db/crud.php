<?php
    include('../db/conection.php');


    class crud{

    
        public function insertDB(){

            $conne = new Connect;
            $db = $conne->db("crud");

            $name=$_POST["insert-name"];
            $age=$_POST["insert-age"];  

            $ins = $db->prepare("INSERT INTO gente(name, age) VALUES ($name, $age)");

            $ins->execute();

        }

    }

    if(isset($_POST["bu-insert"])){
        $crud = new crud;
        $crud->insertDB();
        
        header('../../public/pages/index.html');
    }
?>