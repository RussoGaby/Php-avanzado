<section class="seccion_comentarios">
    <div class="mandar_comentario">
        <form action="subir_comentario.php" method="post" class="form_comentario">
            <input type="text" name="nombre" placeholder="Nombre" class="nombre_comentario">
            <textarea name="comentario" id="comentario" cols="450" rows="2" placeholder="Agregar comentario" class="texto_comentario"></textarea>
            <input type="submit" value="enviar comentario" class="send">
        </form>
    </div>

    <article class="contenedor_comentarios">
        <?php 
            $comentarios = fopen('archivo.txt', 'r');
            echo fread($comentarios,'5000');
        ?>
    </article>
</section>
<?php include('include/nav.php'); ?>