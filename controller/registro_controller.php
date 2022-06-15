<?php   

    require_once "../model/registro_model.php";

    $acao = $_GET['action'];

    if($acao == 'registrar'){

        $matricula = $_POST['matricula'];
        $data = $_POST['horario'];
        $tipo = $_POST['tipo'];

        $model = new RegistroModel();
        $model -> criarRegistro($matricula, $data, $tipo);


    }


?>