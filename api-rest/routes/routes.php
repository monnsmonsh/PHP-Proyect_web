<?php

$arrayRoutes=explode("/",$_SERVER['REQUEST_URI']);

//echo $_SERVER['REQUEST_URI'];
//echo "<pre>"; print_r($arrayRoutes); echo"<pre>";

//indice 2 api-rest
//array_filter elimina los indixes vacios
    if(count(array_filter($arrayRoutes))==2){

        //cuano no se realiza ninguna peticion a la API
        $json=array(
            "detalle"=> "no encontrado"
        );
        echo json_encode($json,true);

        return;
    
    }else{
        //evaluamos cuando le pasomos un indixe en el array $arrayRoutes
        if(count(array_filter($arrayRoutes))==3){

            //cuando realizo peticiones desde cursos
            if (array_filter($arrayRoutes)[3]=="cursos"){

                //eviamos- un metodo de tipo POST
                if(isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == "POST"){

                    $cursos = new ControllerCursos();
                    //llamamos al metodo
                    $cursos -> create();
                }
                else if(isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == "GET"){
                    $cursos = new ControllerCursos();
                    //llamamos al metodo
                    $cursos -> index();
                }

                

            }

            //cuando realizo peticiones desde registro
            if (array_filter($arrayRoutes)[3]=="registro"){
                //eviamos- un metodo de tipo GET
                if(isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == "GET"){

                    $clientes = new ControllerClientes();
                    //llamamos al metodo
                    $clientes -> create();
                }
            }


            
        }
    }

?>