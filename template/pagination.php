


<nav>
    <div class="row">
        <div class="col-xs-12 col-sm-6 mx-auto text-center">
            <?php if(isset($prioridades)){ ?>
                



            <?php }else{ ?>
                
                

                
                <p>Mostrando <?php echo $productosPorPagina ?> de <?php echo $conteo ?> productos disponibles</p>
                <nav aria-label="Page navigation shadow">
  <ul class="pagination justify-content-center">
    
     <!-- Si la página actual es mayor a uno, mostramos el botón para ir una página atrás -->
        <?php if ($pagina > 1) { ?>
            <li class="page-item">
                <a class="page-link" href="index.php?pagina=<?php echo $pagina - 1 ?>"><
                    
                </a>
            </li>
            <?php } ?>
        <!-- Mostramos enlaces para ir a todas las páginas. Es un simple ciclo for-->

    <?php for ($x = 1; $x <= $paginas; $x++) { ?>
            <li class="page-item <?php if ($x == $pagina) echo "active" ?>">
                <a class="page-link" href="index.php?pagina=<?php echo $x ?>">
                    <?php echo $x ?></a>
                </li>
                <?php } ?>
        <!-- Si la página actual es menor al total de páginas, mostramos un botón para ir una página adelante -->

                <?php if ($pagina < $paginas) { ?>
                    <li class="page-item">
                        <a class="page-link" href="index.php?pagina=<?php echo $pagina + 1 ?>">></a>
                </li>
            <?php } ?>
    
  </ul>
  
  <?php } ?>
</div>
</div>
</nav>