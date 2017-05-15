<?php include('cabeza.php');?>
<section>
<?php
$datos = array_map('str_getcsv', file('portafolio-academico.csv'));
// pero debo hacer un pequeño ajuste, para eliminar del arreglo el encabezado del imdb-movies.csv
array_walk($datos, function(&$a) use ($datos) {$a = array_combine($datos[0], $a);});
array_shift($datos);
?>
<h2>Sobre el proyecto</h2>
<p>Dentro de las artes escénicas la tecnología está aportando cada vez más en cuanto a imagen sobre el escenario y composición escénica visual en general. Es en este  punto donde la proyección de imagen comienza a formar parte de las nuevas formas de exponer mundos nuevos o complementación de imagen y sonido, en el campo de los show musicales.</p>
<p>Este trabajo busca conocer cómo las proyecciones en los últimos tiempos, donde la tecnología se ha incorporado cada vez más, intenta aportar en las artes escénicas llevando a la audiencia a otro nivel de interpretación al momento de ver un show, con el fin de crear un repertorio y secuencias de imágenes animadas que permitan incorporar la imagen a los show musicales, donde no sólo la música es primordial sino que el ambiente que se produzca genere y comunique algo más allá.</p>

</section>
<?php include('pie.php');?>

