
<?php include('config/funciones.php') ;

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <link
    href="public/css/style.css"
    rel="stylesheet"

    />
    <!-- Bootstrap CSS v5.2.1 -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
      crossorigin="anonymous"
    />
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />

  <!--icon-->

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  
  </head>

  <body>
    <div class="container my-3">
    <a href="index.php" class="btn-flotante"><i class="bi bi-arrow-clockwise"></i></a>
      <div class="row justify-content-center align-items-center g-2">
        <div class="col-12 col-md-12 col-lg-6">
          <?php if(isset($_SESSION['title'])) {?>
            <script>
              Swal.fire({
               position: 'center',
               width:'32em',
               icon: '<?php echo $_SESSION['icon'] ?>',
               title: '<?php echo $_SESSION['title'] ?>',
              showConfirmButton: false,
              timer: 1500
              })
              setTimeout(() => {
                window.location.href= 'http://localhost/php/pruebas/index.php';
              }, 1500);
            </script>

          <?php } ?>
          <div class="card shadow animate__animated animate__bounceInDown">
            <div class="card-header">Tareas</div>
            <div class="card-body">
              <form class="row g-3 needs-validation" id="formulario" novalidate action="index.php" method="POST">
                <div class="col-12 col-md-12 col-lg-4">
                  <label for="validationCustom01" class="form-label"
                    >Titulo</label
                  >
                  <input
                    type="text"
                    class="form-control"
                    id="validationCustom01"
                    value=""
                    name="titulo"
                    required
                  />
                  <div class="valid-feedback">Looks good!</div>
                  <div class="invalid-feedback">
                  Please choose a title.
                  </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                  <label for="validationCustom02" class="form-label"
                    >Prioridad</label
                  >
                  <select class="form-select" name="prioridad" id="validationCustom04" required>
                    <option selected disabled value="">Prioridad...</option>
                    <option>Alta</option>
                    <option>Media</option>
                    <option>Baja</option>
                  </select>
                  <div class="valid-feedback">Looks good!</div>

                  <div class="invalid-feedback">
                    Please select a valid option.
                  </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                  <label for="validationCustom03" class="form-label"
                    >Estado</label
                  >
                  <select class="form-select" name="estado" id="validationCustom04" required>
                    <option selected disabled value="">Estado...</option>
                    <option>Nueva</option>
                    <option>En Proceso</option>
                    <option>Finalizada</option>
                  </select>
                  <div class="valid-feedback">Looks good!</div>
                  <div class="invalid-feedback">
                    Please select a valid option.
                  </div>
                </div>
                <div class="col-12">
                  <label for="validationCustom04" class="form-label" 
                    >Descripcion</label
                  >
                  <input
                    type="text"
                    class="form-control"
                    id="validationCustom03"
                    name="descripcion"
                    required
                  />
                  <div class="valid-feedback">Looks good!</div>
                  <div class="invalid-feedback">
                  Please choose a description.
                  </div>
                </div>

                <div class="col-12">
                  <button class="btn btn-primary" name="agregartarea" id="agregartarea" type="submit">Enviar</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <?php //filter and card 
        include('template/filter.php') ?>
       

      </div>
    </div>

    <!-- Bootstrap JavaScript Libraries -->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
      integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
      integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz"
      crossorigin="anonymous"
    ></script>
    <script src="public/js/validacion.js"></script>
  </body>
</html>
