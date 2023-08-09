<section class="sectionIng">
    <div>
        <h2>Inicia sesión</h2>
        <div class="divIng">
            <form action="" method="post">
                <label for="usuario">Nombre usuario</label>
                <input type="text" id="usuario" name="usuario">
                <label for="contraseña">Contraseña</label>
                <input type="text" id="contraseña" name="contraseña">
                <input type="submit" value="enviar">
            </form>
            <?php 
                if(isset($_GET['error'])){
                    echo '<p>Datos incorrectos</p>';
                }
            ?>
            <a href="index.php?ruta=inicio">Entrar como invitado</a>
        </div>
        
    </div>
</section>