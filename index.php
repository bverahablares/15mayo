<?php include('cabeza.php');?>
<section>
<h2>Artículos</h2>
<?php
// basta con la línea de PHP para llamar al imdb-movies.csv y asignarlo a la variable $csv
$csv = array_map('str_getcsv', file('datos.csv'));
// pero debo hacer un pequeño ajuste, para eliminar del arreglo el encabezado del imdb-movies.csv
array_walk($csv, function(&$a) use ($csv) {$a = array_combine($csv[0], $a);});
array_shift($csv);
// ahora puedo crear un bucle "for(){}" que examine lo asignado como contenido a la variable $csv
// lo que esté contenido en la variable se repetirá tantas veces como arreglos tenga la variable $csv
for($a = 0; $a < $total = count($csv); $a++){?>
  <article class="row">
    <hr>

    <div class="col-xs-12 col-sm-12 col-md-12">
      <h3><?php echo $csv[$a]['id'];?>. <?php echo $csv[$a]['titulo'];?> </h3>
      <h5>Referencia <?php echo $csv[$a]['apa'];?> </h5>
      <img src="<?php echo $csv[$a]['images'];?>" class="img-responsive">
      <p><strong>Abstract:</strong> <?php echo $csv[$a]['texto'];?></p>
      <p><strong>Vínculo:</strong></p><?php echo $csv[$a]['vinculo'];?></p>
      <p><strong>Palabras Clave:</strong></p><?php echo $csv[$a]['tags'];?></p>

      <!--<h6>Agreguen aquí la información en Data</h6>-->
      <p><?php echo $csv[$a]['Storyline'];?></p>
    </div>
  </article>
<?php };?>

</section>
<?php include('pie.php');?>
