<?php if(isset($_GET['pagina'])): ?>
<nav aria-label="Page navigation example" class="paginacao">
    <ul class="pagination justify-content-center">

        <?php
        $previous_page = $page - 1;
        $next_page = $page + 1;
        ?>
        
        <?php if ($page > 1) : ?>
            <li class="page-item">
                <a class="page-link link-pagina" href="/<?=$identificador?>?pagina=<?php echo $previous_page ?>" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Anterior</span>
                </a>
            </li>
        <?php endif; ?>

        
        <?php for ($i = 1; $i < $total_pages + 1; $i++) { ?>
            <li class="page-item <?php if ($i == $page) : ?> active <?php else : ?> <?php endif; ?>"> <a class="page-link link-pagina" href="/<?=$identificador?>?pagina=<?php echo $i ?>"> <?php echo $i ?> </a></li>
        <?php } ?>

        <?php if ($page < $total_pages) : ?>
            <li class="page-item">
                <a class="page-link link-pagina" href="/<?=$identificador?>?pagina=<?php echo $next_page ?>" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Próxima</span>
                </a>
            </li>
        <?php endif; ?>
    </ul>
</nav>
<?php endif ?>