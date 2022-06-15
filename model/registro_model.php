<?php

    require_once "../util/database.php"; 


    class RegistroModel {
        
        public function criarRegistro($matricula, $data, $tipo)
        {
            $db = new Database(); //instancia a classe
            $con = $db->connect(); //-> faz com que o connect seja um objeto

            $sql = "insert into ponto(matricula,horario,tipo) values (:matricula, current_time(), :tipo)";
            $stmt = $con->prepare($sql);
            $result = $stmt->execute(["matricula"=>$matricula,"tipo"=>$tipo]);
            



        }
        
    }

?>