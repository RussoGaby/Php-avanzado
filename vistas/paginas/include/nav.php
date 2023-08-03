<nav>

    <style>
        .nav-inicio{
            padding-top: 10px;
            display: grid;
            align-items: center;
            text-align: center;
            margin: 0;
            padding-bottom: 10px;
        }

        .nav-li-inicial{
            display: inline;
            margin-top: 0;
        }

        .nav-a-inicial{
            color: black;
            text-decoration: none;
            font-size: 23px;
        }

        ul {
            margin: 0;
            border-bottom: 2px solid #212121;
            padding: 0;
            display: grid;
            align-items: center;
            text-align: center
        }

        li {
            display: inline;
            margin-top: 5px;
        }

        a {
            color: black;
            text-decoration: none;
            color: #212121;
            font-size: 20px;
        }

        li:hover{
            background-color: #212121;
        }

        a:hover {
            color: #eee;
        }
    </style>

    <ul class="nav-inicial">
        <li class="nav-li-inicial" ><a class="nav-a-inicial" href="index.php?ruta=inicio">Inicio</a></li>
        <li class="nav-li-inicial" ><a class="nav-a-inicial" href="index.php?ruta=ingreso">Ingreso</a></li>
        <li class="nav-li-inicial" ><a class="nav-a-inicial" href="index.php?ruta=registro">Registro</a></li>
    </ul>
</nav>