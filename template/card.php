

<div class="row justify-content-start align-items-start  g-2">
  
<?php foreach ($tareas as $tarea) { ?>
  
            <div class="col-ms-12 col-md-6 col-lg-4 ">
              <div class="overflow-auto card m-3 shadow mb-3 <?php echo ($tarea['prioridad'] === 'Alta')?"border-danger":(($tarea['prioridad'] === 'Media')?'border-warning ':'border-success')?>" style="max-height: 20em;">
                <form action="" method="get">
                <div class="card-body">
                <p class="card-subtitle">Prioridad:<span class="<?php echo ($tarea['prioridad'] === 'Alta')?"text-danger":(($tarea['prioridad'] === 'Media')?'text-warning ':'text-success')?>""><strong> <?php echo $tarea['prioridad'] ?></strong> </span></p>
                <p class="card-subtitle">Estado:<span class=""><strong> <?php echo $tarea['estado'] ?></strong> </span></p>

                  <h5 class="card-title"><?php echo $tarea['titulo'] ?></h5>
                  <p class="card-text"><?php echo $tarea['descripcion'] ?></p>
                  
                  <div class="d-grid gap-2">
                    <a class="btn btn-danger border" id="eliminar" href="index.php?id=<?php echo $tarea['id'] ?>" role="button">Eliminar</a>
                    <a class="btn btn-primary border" href="editar.php?id=<?php echo $tarea['id'] ?>" role="button">Editar</a>
                  </div>
                </form>
                  </div>
                  
                </div>
            </div>
            
            <?php } ?>
            
          </div>            
          <?php include('pagination.php') ?>
          