<section class="features" id="slider">
    <div class="container">
      <div class="section-heading text-center">
        <h2>Unlimited Features, Unlimited Fun</h2>
        <p class="text-muted">Check out what you can do with this app theme!</p>
        <hr>
      </div>
	  <?php 
include 'conexiondb.php';
// establecer y realizar consulta. guardamos en variable.
$consulta = "SELECT * FROM slider";
$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");

// Motrar el resultado de los registro de la base de datos

?>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
  <?php
// Bucle while que recorre cada registro y muestra cada campo en la tabla.
$i =0;

while ($columna = mysqli_fetch_array( $resultado )){
	
?>
<li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $i; ?>"<?php if($i==0){print ' class="active" ';} ?>></li>
  <?php
  $i++;
}
?>
  </ol>
  <div class="carousel-inner">
  	  <?php 
include 'conexiondb.php';
// establecer y realizar consulta. guardamos en variable.
$consulta = "SELECT * FROM slider";
$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
?>
 <?php
// Bucle while que recorre cada registro y muestra cada campo en la tabla.
$i =0;
while ($columna = mysqli_fetch_array( $resultado )){
?> 
    <div class="carousel-item <?php if($i==0){print ' active ';$i++;} ?> ">
      <img class="d-block w-100" src="img/<?php echo $columna['imagen']; ?>" alt="<?php echo $columna['alt']; ?>">
    </div>
    <?php }?>
  </div>
  <?php
mysqli_close( $conexion );
?>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Siguiente</span>
  </a>
</div>
    </div>
  </section>