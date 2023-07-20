<?php
include('./db.php');

if(isset($_GET['id'])){
  $id = $_GET['id'];
  $sql = "SELECT * FROM tareas WHERE id=:id";
  $query = $conexion->prepare($sql);
  $query->bindParam(":id",$id);
  $query->execute();
  $tarea = $query->fetch(PDO::FETCH_LAZY);
  $tituloid = $tarea['titulo'];
  $descripcionid = $tarea['descripcion'];
  $prioridadid = $tarea['prioridad'];
  $estadoid = $tarea['estado'];
};
if(isset($_POST['editartarea'])){
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $prioridad = $_POST['prioridad'];
    $estado = $_POST['estado'];
 

  
    $sql='UPDATE tareas SET titulo=:titulo,descripcion=:descripcion,prioridad=:prioridad,estado=:estado 
    WHERE id = :id';
    $query = $conexion->prepare($sql);
    $query->bindParam(':titulo',$titulo);
    $query->bindParam(':descripcion',$descripcion);

    $query->bindParam(':prioridad',$prioridad);
    $query->bindParam(':estado',$estado);
    $query->bindParam(':id',$id);
    $query->execute();
    header("Location:index.php");

}
?>

<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  
    <div class="container">
        <div class="row justify-content-center align-items-center g-2">
          <div class="col-6">
            <div class="card">
              <div class="card-header">Tareas</div>
              <div class="card-body">
                <form class="row g-3 needs-validation" novalidate action="" method="POST">
                  <div class="col-md-4">
                    <label for="validationCustom01" class="form-label"
                      >Titulo</label
                    >
                    <input
                      type="text"
                      class="form-control"
                      id="validationCustom01"
                      value="<?php echo $tituloid ?>"
                      name="titulo"
                      required
                    />
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">
                      Please select a valid state.
                    </div>
                  </div>
  
                  <div class="col-md-4">
                    <label for="validationCustom02" class="form-label"
                      >Prioridad</label
                    >
                    <select class="form-select" name="prioridad" id="validationCustom04" required>
                      <option selected disabled value=""><?php echo $prioridadid?></option>
                      <option>Alta</option>
                      <option>Media</option>
                      <option>Baja</option>
                      
                    </select>
                    <div class="valid-feedback">Looks good!</div>
  
                    <div class="invalid-feedback">
                      Please select a valid state.
                    </div>
                  </div>
                  <div class="col-md-4">
                    <label for="validationCustom03" class="form-label"
                      >Estado</label
                    >
                    <select class="form-select" name="estado" id="validationCustom04" required>
                      <option selected disabled value=""><?php echo $estadoid?></option>
                      <option>Nueva</option>
                      <option>En Proceso</option>
                      <option>Finalizada</option>

                    </select>
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">
                      Please select a valid state.
                    </div>
                  </div>
                  <div class="col-md-12">
                    <label for="validationCustom04" class="form-label" 
                      >Descripcion</label
                    >
                    <input
                      type="text"
                      class="form-control"
                      id="validationCustom03"
                      name="descripcion"
                      value="<?php echo $descripcionid ?>"
                      required
                    />
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">
                      Please select a valid state.
                    </div>
                  </div>
  
                  <div class="col-12">
                    <button class="btn btn-primary" name="editartarea" type="submit">Enviar</button>
                    <a name="" id="" class="btn btn-secondary" href="index.php" role="button">Volver</a>
                  </div>
                </form>
              </div>
            </div>
          </div>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
    <script src="public/js/validacion.js"></script>

</body>

</html>