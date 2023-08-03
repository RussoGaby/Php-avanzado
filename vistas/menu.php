<!DOCTYPE html>
<html lang="en">
<?php include('paginas/include/head.php');?>
<body>
    <?php include('paginas/include/header.php'); ?>
    <main>
        <section class="section1">

            <div>
                <?php
                    if(isset($_GET['ruta'])){
                        if (
                            $_GET['ruta'] == "registro" ||
                            $_GET['ruta'] == "ingreso" ||
                            $_GET['ruta'] == "inicio"
                        ){
                            include "paginas/" . $_GET['ruta'] . ".php";
                        } else {
                            include "paginas/error404.php";
                        }
                    } else{
                        include "paginas/registro.php";
                    }
                ?>
            </div>
        </section>

        <?php include('paginas/include/nav.php'); ?>
    </main>
    <?php include('paginas/include/footer.php'); ?>
    
</body>
</html>