<?php 
 require_once 'includes/conexion.php';  
  session_start();
$mensaje='';
if(isset($_POST)){
 if(isset($_POST['nombre']) && isset($_POST['ap1']) && isset($_POST['ap2']) && isset($_POST['paswor'])){
        $nombre=$_POST['nombre'];
        $ap1=$_POST['ap1'];
        $ap2=$_POST['ap2'];
        $paswor=$_POST['paswor'];

       if((!is_numeric($nombre) && !empty($nombre) && !preg_match("/[0-9]/",$nombre)) &&(!is_numeric($ap1) && !empty($ap1) && !preg_match("/[0-9]/",$ap1)) &&
       (!is_numeric($ap2) && !empty($ap2) && !preg_match("/[0-9]/",$ap2)) && (!empty($paswor)) ){
       
       
            $paswor_seguro=password_hash($paswor, PASSWORD_BCRYPT,['cost'=>4]);
           
           

            $consulta= "INSERT INTO empleado VALUES (null,'$nombre','$ap1','$ap2','$paswor_seguro',1,1);";
            
            $guarda=mysqli_query($conect,$consulta);
           
            if($guarda){

             $mensaje="<div class='alert alert-warning' role='alert'>
                A simple warning alert—check it out!
              </div>";
             $_SESSION['mostrar']= $mensaje;
             
             
             
            }else{
              $mensaje="<div class='alert alert-warning' role='alert'>
               no se guardo
              </div>";
              $_SESSION['mostrar']= $mensaje;
              
            } 
            
           

        }else{
        echo "datos invalido";
       }
    
    
    }else{

        echo "datos no en contrados";
    }



    }else{
    echo "datos no enviados";
}
   
?>