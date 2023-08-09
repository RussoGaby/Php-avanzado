<?php
    $date = getdate();
    $fecha_comentario = $date['weekday'] . " " . $date['mday'] . "/" . $date['mon'];
    $nombre_comentario = " " . $_POST['nombre'];
    $comentario = $_POST['comentario'];

    $comentario_completo = '<div class="comentario"> <div class="contenedor_fecha" > <p> Comentario de:' . $nombre_comentario . '</p> <p>' . $fecha_comentario . '</p> </div> <div class="datos_comentarios"> <p>' . $comentario . '</p> </div> </div>';

    $archivo = fopen('archivo.txt', 'a');
    fwrite($archivo, $comentario_completo);
    header('Location:' . getenv('HTTP_REFERER'));

?>