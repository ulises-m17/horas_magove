<?php 

// incluimos el scrip de coneccio a la base de datos
 require_once '../includes/conexion.php';  
  
 // iniciamos una secion para poder usar variables de secion
 session_start();

if(isset($_POST)){
  // verificaos si se han recibido los datos por el metodo
 if(isset($_POST['nombre']) && isset($_POST['ap1']) && isset($_POST['ap2']) && isset($_POST['paswor'])){
              /* se le da seguridad para que cuando se ingresen caracteres especiales como comillas los tome como string 
              y obtenemos los datos enviados del formulario y los guardamos en las variables de php
              */       
        $nombre=mysqli_real_escape_string($conect,$_POST['nombre']);
        $ap1=mysqli_real_escape_string($conect,$_POST['ap1']);
        $ap2=mysqli_real_escape_string($conect,$_POST['ap2']);
        $paswor=$_POST['paswor'];
        $_SESSION['registrado']=" ";

        // verificamos si las variables no contienen numeros y si no son espacios y si no tienen numero donde solo van letras
       if((!is_numeric($nombre) && !empty($nombre) && !preg_match("/[0-9]/",$nombre)) &&(!is_numeric($ap1) && !empty($ap1) && !preg_match("/[0-9]/",$ap1)) &&
       (!is_numeric($ap2) && !empty($ap2) && !preg_match("/[0-9]/",$ap2)) && (!empty($paswor)) ){
       
       // encriptamos la contraseña que recibimos desde el formulario
            $paswor_seguro=password_hash($paswor, PASSWORD_BCRYPT,['cost'=>4]);
           
            // creamos nuestra consulta para insertar datos y la guardamos en una variable
            $consulta= "INSERT INTO empleado VALUES (null,'$nombre','$ap1','$ap2','$paswor_seguro',1);";
            
            // ejecutamos la consulta y obtenemos la coneccion a nuestra base de datos
            $guarda=mysqli_query($conect,$consulta);
           
            // verificamos si se ejecuto la consulta correctamente 
            if($guarda){

              // declaramos o asignamos un mensaje a la variable de secion 
             $_SESSION['registrado']= "Datos guardados correctamente";        
         
            }else{
              
              $_SESSION['registrado']= "Datos no guardados";
           
            }   

        }else{
          $_SESSION['registrado']= "Datos invalidos";
       }
    
    
    }else{

      $_SESSION['registrado']= "Datos no encontrados";
    }



    }else{
      $_SESSION['registrado']= "Datos no recibidos";
}
// Al mandar llamar nuestro archivo de registro de empleados nos recargue la pagina empleados que es donde estamos 
header("location: ../empleados.php");
?>