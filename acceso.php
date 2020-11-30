<?php 
require_once 'includes/conexion.php';
if(isset($_POST)){

    if(isset($_POST['nombre'])&& isset($_POST['paswor'])){
        

    }else{
        echo'datos no validos';
    }

}else{
    echo'datos no recibidos';
}

?>