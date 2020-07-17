<?php require 'header.php'; ?>

<div class="contenedor">
    <div class="post">
        <article>
            <h2 class="titulo">Nuevo Articulo</h2>
            <form class="formulario" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            
                <input type="text" name="titulo" placeholder="Titulo del Articulo">
                <input type="text" name="Extracto" placeholder="Extracto del Articulo">
                <textarea name="texto" placeholder="Texto del Articulo"></textarea>
                <input type="file" name="thumb">
            
                <input type="submit" value="Crear Articulo" >
            </form>
        </article>
    </div>        
</div>

<?php require 'footer.php'; ?>
