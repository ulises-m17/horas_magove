<?php
require_once '../includes/conexion.php';
session_start();
$_SESSION['mensaje']="";


if(isset($_POST)){
    if(isset($_POST['codigo']) && isset($_POST['fecha_entrega'])&& isset($_POST['presupuesto_horas'])){
       
        $codigo=mysqli_real_escape_string($conect,$_POST['codigo']);
       $fecha_entrega=mysqli_real_escape_string($conect,$_POST['fecha_entrega']);
       $presupuesto_horas=mysqli_real_escape_string($conect,$_POST['presupuesto_horas']);
        $P_horas=floatval($presupuesto_horas);

        if(!empty($codigo) && !empty($fecha_entrega) && !empty($presupuesto_horas)){
            $consulta="INSERT INTO proyecto VALUES(null,'$codigo','$fecha_entrega','$P_horas',0.0,0.0,1);";
            $ejecuta=mysqli_query($conect,$consulta);

            if($ejecuta){
                $_SESSION['mensaje']="Datos guardados correctamente";
               
            }else{
                $_SESSION['mensaje']="Datos no guardados";
               
            }
        }else{
            $_SESSION['mensaje']="Completa todos los campos";
        }
        
    }else{
        $_SESSION['mensaje']="Datos no enviados";
       
    }

}else{
$_SESSION['mensaje']="Datos no enviados";

}

header('Location: ../proyecto.php');
?>