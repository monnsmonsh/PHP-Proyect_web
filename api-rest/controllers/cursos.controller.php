<?php
class ControllerCursos{
    //metodo
    public function index(){

        $json=array(
            "detalle"=> "estas en la vista cursos"
        );
        echo json_encode($json,true);

        return;
    }

    public function create(){
        $json=array(
            "detalle"=> "estas en la vista create cursos"
        );
        echo json_encode($json,true);

        return;
    }

}

?>