<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilos/estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Actividades de máquinas</title>
</head>
<body>
   <div class="contenedor_principal">

   <?php 
    include 'includes/menu.php';
     
    ?>
    
    <div class="item">
      <h1>Actividades</h1>
        <form class="formulario">
            <div class="form-row">
              <div class="form-group col-md-3">
                <label for="codigo">Tipo de actividad</label>
                <input type="text" class="form-control" id="inputcodigo" required>
              </div>

            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>
          </form>

          <div class="tablas">
            <table class="table table-bordered table-dark">
              <thead>
                <tr>
                    <th scope="col">#</th>
                  <th scope="col">Tipo de actividad</th>
                 
               
                 
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                 
                  <td> <button type="submit" class="btn btn-outline-success">Editar </button>
                     <button type="button" class="btn btn-outline-danger">Borrar</button> </td> 
                </tr>

                <tr>
                  <th scope="row">2</th>
                  <td>Mark</td>
                  
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