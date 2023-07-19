

<?php if(empty($tareas)){?>

    <div class="row justify-content-center align-items-center my-5 g-2">
    <div class="col-8 animate__animated animate__bounceInLeft">
  <div class="alert alert-warning" role="alert">
  <h3 class="text-center">
  <i class="bi bi-exclamation-triangle-fill"></i>
     No hay tareas</h3>
</div>
    </div>

<?php }else{?>

<h1>Filtrar por:</h1>

<!-- single  -->
<form action="" method="post">
<div class="row justify-content-start d-flex align-items-end g-2">
  <div class="col-12 col-md-2">
    <label for="validationCustom02" class="form-label"
      >Prioridad</label
    >
    <select class="form-select" name="f_prioridad" id="validationCustom04" required>
      <option selected disabled value="">Prioridad...</option>
      <option>Alta</option>
          <option>Media</option>
          <option>Baja</option>
    </select>
  </div>
  <div class="col-12 col-md-2">
    <label for="validationCustom02" class="form-label">Estado</label>
    <select class="form-select"  name="f_estado" id="validationCustom04" required>
      <option selected disabled value="">Estado...</option>
      <option>Nueva</option>
          <option>En Proceso</option>
          <option>Finalizada</option>
    </select>
</div>
<div class="col-12">
  <button type="submit" name="filtrartareas" class="btn btn-small btn-primary">Submit</button>
  
</div>
</div>

</form>
<?php include('card.php')?>

<?php }?>
