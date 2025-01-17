<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilos/estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Empleados</title>
</head>
<body>
   <div class="contenedor_principal">

   <?php 
    include 'includes/menu.php';
    session_start();
    ?>
    
    <div class="item">
      <h1>Empleados</h1>
        <form class="formulario" method="POST" action="consultas/registro_empleados.php">
    
         <div class="form-row">
              <div class="form-group col-md-3">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="inputNombre" name="nombre" required>
              </div>
              
              <div class="form-group col-md-3">
                <label for="ap1">Apellido paterno</label>
                <input type="text" class="form-control" id="inputAp1" name="ap1" required>
              </div>


              <div class="form-group col-md-3">
                <label for="ap2">Apellido materno</label>
                <input type="text" class="form-control" id="inputAp2" name="ap2" required>
              </div>

              <div class="form-group col-md-3">
                <label for="paswor">Contraseña</label>
                <input type="password" class="form-control" id="inputpasword" name="paswor" required>
              </div>

            </div>

            <button type="submit" name="guardar" class="btn btn-primary">Guardar</button>
            
            
            <?php if(isset($_SESSION['registrado'])): ?>

                <div class='alert alert-primary' role='alert'>
                <strong>
              <?= $_SESSION['registrado'] ?>
              </strong>
              </div>

             <?php endif;
              session_unset(); ?>
          </form>

          <div class="tablas">
            <table class="table table-bordered table-dark">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">Apellido paterno</th>
                  <th scope="col">Apellido materno</th>
                  <th scope="col">Area</th>
                 
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>Otto</td>
                  <td>Otto</td>
                 
                  <td> <button type="submit" class="btn btn-outline-success">Editar </button>
                     <button type="button" class="btn btn-outline-danger">Borrar</button> </td> 
                </tr>

                <tr>
                  <th scope="row">2</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                  <td>Otto</td>
                 
                  <td> <button type="submit" class="btn btn-outline-success">Editar </button>
                    <button type="button" class="btn btn-outline-danger">Borrar</button> </td>
                </tr>
              </tbody>
            </table>
          </div>

    </div>

   </div>
   

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>