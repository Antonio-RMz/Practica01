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

	<section class="hero is-success">
		<div class="hero-body">
			<p class="title">
				Datos Alumno
			</p>
			<p class="subtitle">
				Registro
			</p>
		</div>
	</section>
	<h1 class="title is-1">Practica Registro de Datos</h1>

	<section class="section is-medium columns">

		<div class="column"></div>

		<div class="column is-two-fifths">
			<form action="procesar.php" method="post">
				<div>
					<label><b>Nombre(s):</b></label>
					<input class="input is-primary" type="text" name="nombres" required>
				</div>

				<div>
					<label><b>Apellido paterno:M </b></label>
					<input class="input is-primary" type="text" name="apellidoP" required>
				</div>

				<div>
					<label><b>Apellido materno:</b></label>
					<input class="input is-primary" type="text" name="apellidoM" required>
				</div>
				<div>
					<label><b>Cargo:</b></label>
					<input class="input is-primary" type="text" name="cargo" required>
				</div>

				<div>
					<label><b>RFC:</b></label>
					<input class="input is-primary" type="text" name="rfc" required>
				</div>

				<div>
					<label><b>CURP:</b></label>
					<input class="input is-primary" type="text" name="curp" required>
				</div>
				<div>
					<label><b>Domicilio:</b></label>
					<input class="input is-primary" type="text" name="domicilio" required>
				</div>
				<div>
					<label><b>Teléfono</b></label>
					<input class="input is-primary" type="tel" name="telefono" required>
				</div>
				<div>
					<label><b>Correo Electronico:</b></label>
					<input class="input is-primary" type="text" name="correo" required>
				</div>


				<div>
					<label class="label"><b>Sexo</b></label>
					<div class="control">
						<label class="radio">

							<input type="radio" name="genero" value="Hombre">
							Hombre
						</label>
						<label class="radio">

							<input type="radio" name="genero" value="Mujer">
							Mujer
						</label>
						
					</div>

				</div>
				<br>

				<div>
					<label><b>Fecha de Nacimiento</b></label>
					<input class="input is-primary" type="text" name="fechaNacimiento" required>
				</div>
				<div>
					<label><b>Estado civilM</b></label>
					<input class="input is-primary" type="text" name="estadoCivil" required>
				</div>
				<div>
					<label><b>Escolaridad</b></label>
					<input class="input is-primary" type="text" name="escolaridad" required>
				</div>
				<div>
					<label><b>Referencia Familiar</b></label>
					<input class="input is-primary" type="text" name="referenciaFa" required>
				</div>
				<div>
					<label><b>Observaciones</b></label>
					<input class="input is-primary" type="text" name="observaciones" required>
				</div>
				<div>

					<label><b>Edad:</b></label>
					<input class="input is-primary" type="number" name="edad" min="0" max="120" required>
				</div>

				


				<div>
					<input class="button is-primary" type="submit" value="Enviar">
				</div>










			</form>
		</div>

		<div class="column"></div>

	</section>

</body>

</html>