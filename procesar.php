<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Arreglos</title>
    <!-- Incluir bulma.min.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/bulma.min.css">
</head>

<body>

    <section class="hero is-primary">
        <div class="hero-body">
            <p class="title">
                Datos de persona
            </p>
        </div>
    </section>

    <section class="section is-medium columns">

        <div class="column"></div>

        <div class="column is-two-fifths">


            <?php

            $nombres = $_POST['nombres'];
            $apellidoP = $_POST['apellidoP'];
            $apellidoM = $_POST['apellidoM'];
            $cargo = $_POST['cargo'];
            $rfc = $_POST['rfc'];
            $curp = $_POST['curp'];
            $domicilio = $_POST['domicilio'];
            $telefono = $_POST['telefono'];
            $correo = $_POST['correo'];
            $genero = $_POST['genero'];
            $fechaN = $_POST['fechaNacimiento'];
            $estadoCivil = $_POST['estadoCivil'];
            $escolaridad = $_POST['escolaridad'];
            $referencia = $_POST['referenciaFa'];
            $observaciones = $_POST['observaciones'];





            echo "<h1 class='is-subtitle'>";


            echo "Nombre: " . $nombres;
            echo "<br> Apellido paterno: " . $apellidoP;
            echo "<br>Apellido Materno: " . $apellidoM;
            echo "<br>Cargo: " . $cargo;
            echo "<br>RFC: " . $rfc;
            echo "<br>Curp: " . $curp;
            echo "<br>Domicilio: " . $domicilio;
            echo "<br>Telefono: " . $telefono;
            echo "<br>Correo: " . $correo;
            echo "<br>Genero: " . $genero;
            echo "<br>Fecha de Nacimiento: " . $fechaN;
            echo "<br>Estado civil: " . $estadoCivil;
            echo "<br>Escolaridad: " . $escolaridad;
            echo "<br>Referencias: " . $referencia;
            echo "<br>Observaciones: " . $observaciones;

            echo "</h1>";
            ?>


        </div>

        <div class="column"></div>

    </section>

</body>

</html>

