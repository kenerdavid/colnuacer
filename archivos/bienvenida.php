<?php  

	session_start();
	if (!isset($_SESSION['usuario'])) {
	echo "<script>
		alert('Por favor debes inicar sesión');
		window.location = 'index.php';
	</script>";
	session_destroy();
	}

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Colegio el renuevo</title>
	<link rel="shortcut icon" href="asist/img/3.png" type="image/x-icon">
	<link rel="stylesheet" href="asist/css/estilok.css">

</head>
<body onload="alert ('bienvenido a la página del Colegio el Renuevo');">
	<header>
		<div class="header-content">
		<div class="logo">
			<img class="lg">
			<h1>Colegio el <b>Renuevo</b></h1>
		</div>
		<div class="menu">
			<nav>
				<ul>
					<li><a href="inicio.php">Inicio</a></li>
					<li class="menu_select"><a href="Blog.php" class="text-menu_select">Blog</a></li>
					<li><a href="contacto.php">Contacto</a></li>
					<li ><a href="php/cerrar_sesion.php">Cerrar Sesión</a></li>
				</ul>
			</nav>
		</div>
		</div>
	</header>

	<div class="container-cover">
		<div class="container-info">
			<h1>¡Todo es posibe!</h1>
			<p>A qui encuentras lo mejor para ques estudies y trabajes a tu gusto</p>
		</div>
	</div>
	<div class="container_content">
		<section>
		<article>

			<h1>titulo del articulo</h1><br>

			<p>Propone un ejercicio de clarificación conceptual en torno al significado de los términos “público” y “privado” cuando se aplican a la educación.
			Se analizan tres usos comparativamente frecuentes. El primero emplea como
			criterio el origen del financiamiento. El segundo apela a la naturaleza de los
			bienes generados. El tercero se centra en las formas de gestión. Tras un examen<br>
			de los puntos fuertes y débiles de cada uno de estos usos, se concluye que los
			dos primeros plantean más dificultades que beneficios, mientras que el tercero
			es razonablemente claro y pertinente. El propósito de los ejercicios de clarificación conceptual no es ejercer una función policíaca sobre los usoslingüísticos,<br>	

			sino aportar elementos que faciliten un empleo consistente de los términos y,
			eventualmente, distinguir entre los usos más convenientes y menos convenientes
			para la comprensión y generación de conocimiento.</p> <br>

				<img src="asist/img/5.jpg"><br>

			<p>La distinción entre educación pública y educación privada es
			usual tanto en el lenguaje ciudadano como en el académico.
			Y, al menos a nivel intuitivo, parecería que no hay allí nada
			de problemático. Pero un análisis cuidadoso muestra que esta
			distinción es mucho menos nítida de lo que se suele creer. En
			primer lugar, el uso de los adjetivos “público” y “privado” varía
			mucho de un país a otro.<br>


			Hay países donde se llama “privadas”
			a escuelas que se financian principalmente con dinero público
			(por ejemplo, escuelas confesionales subsidiadas por el Estado),
			mientras que en Inglaterra se llama “escuelas públicas” a las
			instituciones más exclusivas del sistema educativo, a las que solo
			se ingresa si se cuenta con la combinación adecuada de alcurnia
			y dinero. En segundo lugar, existen varios criterios a los que se
			puede apelar dentro de un mismo país para trazar el límite entre
			lo público y lo privado. Y el resultado de la clasificación puede
			variar significativamente según cuál sea el criterio que se aplique.
			En este artículo no me propongo hacer ningún análisis empírico
			sino un ejercicio de clarificación conceptual. Intentaré discutir
			qué pueden significar los adjetivos “público” y “privado” cuando
			se aplican al sustantivo “educación”. <br>

			Los análisis de este tipono tienen como objetivo identificar el significado correcto, por
			la simple razón de que tal cosa no existe. Tanto en el lenguaje
			ciudadano como en el académico existen varias maneras posibles
			de utilizar las palabras, y todas ellas son en principio aceptables.
			El propósito de los ejercicios de clarificación conceptual no es
			ejercer una función policiaca sobre los usos lingüísticos, sino
			aportar elementos que faciliten un uso consistente de los términos
			y, a la larga, distinguir entre los usos más y menos convenientes
			para la comprensión y generación de conocimiento.</p><br>

			<h1>Objetivos de estudio</h1><br>

			<p>Al momento de realizar tu investigación de mercado, debes plantearte los siguientes objetivos:<br>

			Identificar necesidades y objetivos de los diferentes segmentos de mercado.<br>
			Definir cuáles son los beneficios que los usuarios valoran más.<br>
			Medir el posicionamiento de la marca en el público consumidor.<br>
			Comparar tus precios con los de la competencia.<br>
			Estar consciente de las desventajas y limitaciones del producto.<br>
			Definir el público meta o «Buyer Persona».</p><br>

			<h1>La importancia del estudio</h1><br>

			<p>
				El estudio sirvió como base de la compañía. Con los resultados de la edad, sexo y preferencias sobre el servicio de los clientes, la empresa pudo desarrollar una metodología de trabajo y plan de marketing que se ajustara a las exigencias de los clientes.<br>

				Gracias al estudio se determinó que uno de los principales problemas que se presentaba era el extravío de mercancía, por lo que se trabajó en crear seguros que resguardaran los productos y sobretodo en fortalecer la cadena de envíos.<br>

				Asimismo, se conoció que la mayoría de los clientes eran hombres de entre 25 hasta 50 años, por lo que las promociones, el contenido y el comportamiento de la marca fue adecuado para los gustos de este target.<br>

				Igualmente, se crearon promociones de precios del transporte de mercancía internacional dependiendo del país a donde se realice el envío.<br>

				Vale destacar que fueron varios puntos que se determinaron gracias al estudio y que sirvieron para crear el plan de marketing.<br>

				Finalmente se buscó afianzar la relación con los clientes existentes y promover el nuevo branding a través de promociones y regalando material POP como: Cintas de cuello personalizadas, bolígrafos y libretas.<br>
			</p>
		</article>
	</section>
	</div>
</body>
</html>