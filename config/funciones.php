<?php

include('./db.php');


if(isset($_POST['agregartarea'])){

    $titulo=$_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $estado = $_POST['estado'];
    $prioridad = $_POST['prioridad'];

    $sql = "INSERT INTO tareas (id,titulo,descripcion,estado,prioridad) VALUES (NULL,:titulo,:descripcion,:estado,:prioridad)";
            $query = $conexion->prepare($sql);
            $query->bindParam(':titulo',$titulo);
            $query->bindParam(':descripcion',$descripcion);
            $query->bindParam(':estado',$estado);
            $query->bindParam(':prioridad',$prioridad);
             
            if($query->execute()){
                session_start();
                $_SESSION['title'] = 'Tarea Enviada!';
                $_SESSION['icon'] = 'success';
            }
    }




if(isset($_POST['filtrartareas'])){
   $fprioridad=$_POST['f_prioridad'];
   $f_estado = $_POST['f_estado'];
    switch ($fprioridad) {
        
        case 'Baja':
            if($f_estado === 'Nueva'){
                $sql = "SELECT * FROM tareas where tareas.prioridad = 'Baja' and tareas.estado = 'Nueva'";
                $query = $conexion->prepare($sql);
                $query->execute();
                $prioridades = $query->fetchAll();
                break;
            }else if($f_estado==='En Proceso'){
                $sql = "SELECT * FROM tareas where tareas.prioridad = 'Baja' and tareas.estado = 'En Proceso'";
                $query = $conexion->prepare($sql);
                $query->execute();
                $prioridades = $query->fetchAll();
                break;
            }else{
                $sql = "SELECT * FROM tareas where tareas.prioridad = 'Baja' and tareas.estado = 'Finalizada'";
                $query = $conexion->prepare($sql);
                $query->execute();
                $prioridades = $query->fetchAll();
                break;
            }
           
        
        case'Media':
            if($f_estado === 'Nueva'){
                $sql = "SELECT * FROM tareas where tareas.prioridad = 'Media' and tareas.estado = 'Nueva'";
                $query = $conexion->prepare($sql);
                $query->execute();
                $prioridades = $query->fetchAll();
                break;
            }else if($f_estado==='En Proceso'){
                $sql = "SELECT * FROM tareas where tareas.prioridad = 'Media' and tareas.estado = 'En Proceso'";
                $query = $conexion->prepare($sql);
                $query->execute();
                $prioridades = $query->fetchAll();
                break;
            }else{
                $sql = "SELECT * FROM tareas where tareas.prioridad = 'Media' and tareas.estado = 'Finalizada'";
                $query = $conexion->prepare($sql);
                $query->execute();
                $prioridades = $query->fetchAll();
                break;
            }
        case'Alta':
            if($f_estado === 'Nueva'){
                $sql = "SELECT * FROM tareas where tareas.prioridad = 'Alta' and tareas.estado = 'Nueva'";
                $query = $conexion->prepare($sql);
                $query->execute();
                $prioridades = $query->fetchAll();
                break;
            }else if($f_estado==='En Proceso'){
                $sql = "SELECT * FROM tareas where tareas.prioridad = 'Alta' and tareas.estado = 'En Proceso'";
                $query = $conexion->prepare($sql);
                $query->execute();
                $prioridades = $query->fetchAll();
                break;
            }else{
                $sql = "SELECT * FROM tareas where tareas.prioridad = 'Alta' and tareas.estado = 'Finalizada'";
                $query = $conexion->prepare($sql);
                $query->execute();
                $prioridades = $query->fetchAll();
                break;
            }
            break;
    }
}

if(isset($_GET['id'])){
    $id=$_GET['id'];
    
    $sql = 'DELETE FROM tareas WHERE id=:id';
    $query = $conexion->prepare($sql);
    $query->bindParam(':id',$id);
    $query->execute();
}

if(!isset($_POST['filtrartareas'] )){
    # Cuántos productos mostrar por página
$productosPorPagina = 3;
$pagina = 1;
if (isset($_GET["pagina"])) {
    $pagina = $_GET["pagina"];
}
# El límite es el número de productos por página
$limit = $productosPorPagina;
# El offset es saltar X productos que viene dado por multiplicar la página - 1 * los productos por página
$offset = ($pagina - 1) * $productosPorPagina;
# Necesitamos el conteo para saber cuántas páginas vamos a mostrar
$sentencia = $conexion->query("SELECT count(*) AS conteo FROM tareas");
$conteo = $sentencia->fetchObject()->conteo;
# Para obtener las páginas dividimos el conteo entre los productos por página, y redondeamos hacia arriba
$paginas = ceil($conteo / $productosPorPagina);
# Ahora obtenemos los productos usando ya el OFFSET y el LIMIT
$sentencia = $conexion->prepare("SELECT * FROM tareas LIMIT :limit OFFSET :offset");
$sentencia->bindParam(':limit', $limit, \PDO::PARAM_INT);
$sentencia->bindParam(':offset', $offset, \PDO::PARAM_INT);
$sentencia->execute();
$tareas = $sentencia->fetchAll();
# Y más abajo los dibujamos...

}

if(isset($prioridades)){
    $tareas = $prioridades;
  }
?>