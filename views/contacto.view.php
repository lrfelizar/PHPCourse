<?php require 'views/header.php'; ?>
    <div class="contenedor">
        <form class="formulario" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        
            <input type="text" name="nombre" id="nombre" placeholder="Nombre:" value="<?php if((!$enviado) && isset($nombre)) echo $nombre ?>">
            <input type="text" name="correo" id="correo" placeholder="correo:" value="">
            <textarea name="mensaje" id="mensaje" placeholder="mensaje"></textarea>

            <?php if (!empty($errores)): ?>
                <div>
                    <?php echo $errores ?>
                </div>
            <?php elseif($enviado): ?>
                <div>
                    <p>Enviado correctamente</p>
                </div>
            <?php endif ?>
            <input type="submit" name="submit" class="btn" value="Enviar Correo">

        </form>
    </div> 

    <?php require 'views/footer.php'; ?>
 