<?
session_start();
$sesion= $_SESSION['sesioniniciada'];
if ($sesion != true) {
   header("Location: index.php");
}
?>
<html lang="en">
<head>
     <meta name="apple-mobile-web-app-capable"
      content="yes" />
    <meta http-equiv="Content-Type" content="text/html; charset=gb18030"> 
<script>  var loc = window.location.href+'';
if (loc.indexOf('http://')==0){
    window.location.href = loc.replace('http://','https://');
} 
</script>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Mototli">
  <title>Bienvenido</title>
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <link href="css/bootstrap.min.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:600italic,400,800,700,300" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=BenchNine:300,400,700" rel="stylesheet" type="text/css" />
  <script src="js/modernizr.js"></script>
  <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
<!-- ******************** Script para la tabla de animales DataTable ********* -->
<style>
 .contable
 {
     font-size: 15px;
    background:#cccccc;
        
    }
    
</style>
<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.js"></script>

<script src="https://cdn.datatables.net/plug-ins/1.10.18/i18n/Spanish.json"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#tablaAnimal').dataTable( {
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.18/i18n/Spanish.json"
            }
        } );
    } );
</script>


<!-- ********** Para termina el Script para la tabla de animales DataTable********* -->


<!--*********************** Script del Select Modo ************************ -->
<script>
$(document).ready(function(){
$('select.status').on('change',function () {
        var decision = $(this).val();
        var id = $('td.myid').html();
        alert("Scripte actualizo exitosamente!");
  
        $.ajax({
                 type: "POST",
                 url: "guarda_modo.php",
                 data: {decision: decision, id: id },
                 success: function(msg) {
                     $('#autosavenotify').text(msg);
                 }
      })
  });
});
</script>
<!--*********************** Script del Select Modo ************************ -->
  </head>
<body>
<header class="top-header">
        <div class="container">
        <div class="row">
        <div class="col-xs-3 header-logo">
            <br>
<a href=""><img alt="" class="img-responsive logo" src="img/logo.png" /></a>
</div>

<div class="col-md-7">
<nav class="navbar navbar-default">
<div class="container-fluid nav-bar">
    <!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar-header">
    <button class="navbar-toggle collapsed" data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" type="button"><span class="sr-only">Toggle navigation</span> 
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
  <span class="icon-bar"></span>
  </button>
  </div>
<!-- Collect the nav links, forms, and other content for toggling -->

<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<ul class="nav navbar-nav navbar-right">
  <li><a class="menu active" href="http://www.mototli.com/#about">Proyecto</a></li>
  <li><a class="menu" href="https://www.mototli.com/#team">Nosotros</a></li>
  <li><a class="menu" href="https://www.mototli.com/#contact">Contacto&nbsp;</a>
  <li><a class="menu" <a href="logout.php">Cerrar Sesión</a>
  
</ul>
</div>
</div>
</nav><!-- /navbar-collapse -->
</div><!-- / .container-fluid -->
</div>
</div>
</header>















<?

$conn=new mysqli("localhost", "mototli_user", "TecMi!1209", "mototli_system") or die("ConnectionFailed");
error_reporting(0);
$usuario_ID =$_POST['usuarios_ID'];
$uno =$_POST['uno'];

if($usuario_ID > 1 && $uno == 1){
   $usuario_ID;
   
   
}else{
session_start();
$usuario_ID=$_SESSION['usuarios_ID'];
}

$resNombre = mysqli_query($conn ,"SELECT * FROM  `usuarios` WHERE ID='$usuario_ID'");

 while($row= mysqli_fetch_array($resNombre)){
         $nombre= $row['nombre'];
 }

   /* $resConsulta = mysql_query("SELECT * FROM  `animales` where id='ID'");*/
?>




<br>
<br>
<br>
<br>
<br>
<br>
<section class="about text-center" id="bienvenido">
<div class="container">
<!--<div class="contable">-->
<div class= "row">

<h2>Bienvenid@ <?=$nombre;?></h2>

<div class="col-md-8 col-md-offset-2">

<!--******************** Div del Script del Select Modo ****************** -->
<div id="autosavenotify"></div>
  <div id="myid"></div>
<!--*********** Termina Div del Script del Select Modo ********************* -->





<!-- ************************** Muestra los animales ******************** -->

<div class="table-responsive">
<div class="jumbotron">
   <!--- **************** Boton aGREGAR NUEVO ANIMAL ******************* -->



<form action="registroanimal.php" method="post">
                
          <input type="hidden" name="usuarios_ID"  value="<?=$usuario_ID;?>"> 
          <h3>¿Deseas agregar una nueva mascota?  <input class="btn btn-primary" type="submit" name="envia"  value="Agregar">  </h3>
          
            </form>
<!--- **************** fin del Boton aGREGAR NUEVO ANIMAL ******************* -->
   <table id="tablaAnimal" class="table table-bordered table-striped text-center">
  <thead> 
           <tr>
              <!-- definimos cabeceras de la tabla --> 
              <th>Fotografia </th> 
              <th>Nombre</th> 
              <th>Edad</th> 
              <th>Modo</th>
             <!-- <th>QR </th>-->
              <th>Editar </th> 
              <th>Placa</th>
           </tr> 
        </thead>
        <tbody>

<form action="cuenta.php" method="post" name="regisConsulta" enctype="multipart/form-data">
  <?php
           //recorremos resultado de la consulta y aˇ下dimos el contenido a la tabla

   
     $resConsulta = mysqli_query($conn ,"SELECT * FROM  `animales` WHERE usuarios_ID='$usuario_ID'");


     while($row= mysqli_fetch_array($resConsulta)){
         $foto_animal= $row['foto'];
         $animodo_ID= $row['modos_ID'];
         $animal_ID = $row['ID'];  
         $aninombre = $row['nombre'];
       
            ?>
    <tr>
        <td><img src="images/mascotas/<?=$foto_animal;?>" height="50"/></td>
      <td><strong><?php echo $row['nombre'] ?></strong></td>
      <td><strong><?php echo $row['edad'] ?> </strong>   
         </td>
       <!--   En lugar de poner php echo(Simplifica) se pone esto  ?=$row['ID'];?> -->  

            
            <td>
<!-- ***************** Selecciona el modo del animal ****************  -->     

 <?   
/* ****************** CONSULTA PARA OBTENER EL NOMBRE DEL MODO DEL ID DE LA MASCOTA ********** */
   $consultaMdod = mysqli_query($conn , "SELECT * FROM  `modos` WHERE ID='$animodo_ID'");
     while($row= mysqli_fetch_assoc($consultaMdod)){
$aniModoBueno_ID= $row['tipo'];          
     }
/* ****************** TERMINA LA CONSULTA PARA OBTENER EL MODO ********** */          ?>

                  <div class="form-group" >
    <select name="modo_tipo" class="status" >
                 <option value="<?=$modo_ID;?>|<?=$animal_ID;?>"><?=$aniModoBueno_ID;?></option>
                 
                        <? $query2 = mysqli_query($conn , "SELECT * FROM modos");
                      while($data= mysqli_fetch_assoc($query2) ) {
                                $modo_ID =  $data[ID];
                                $tipo = $data[tipo];
                      ?>
                         <option value="<?=$modo_ID;?>|<?=$animal_ID;?>">
                            <?
                                if($animodo_ID==$modo_ID)
                                 echo "Actual: ";
                          
                           ?> 
                               
                        <?=$tipo;?>
                     
                           
                           </option>

                <? } ?>
 </select>
  </div>
    </form>
            </td>
            
<!-- **************** TERMINA la seleccion del modo del animal ***************  -->
         <!--  <td>
           
            <form action="generador_qr.php" method="post">
                
         <input type="hidden" name="animales_ID" value="<?=$animal_ID;?>"> 
                    <input type="submit" name="generador_qr" class="btn btn-info" value="Ver">
           </form>
            </td>        
            -->
<!-- **************** FIN de Guarda el Modo y Genera el QR ***************  -->       
<form action="actualiza_animal.php" method="post" name="regisConsulta" enctype="multipart/form-data">
            </td>
     
    <td>
                 <input type="hidden" name="animales_ID" value="<?=$animal_ID;?>">
               <input type="submit" name="modifica" class="btn btn-warning"  value="Editar">
            </td> </form>

<!-- <form action="/tienda/catalogo.php" method="post" name="catalogotienda" enctype="multipart/form-data">
             <td>
                 <input type="hidden" name="animales_ID" value="<?=$animal_ID;?>">
               <input type="submit" name="comprar" class="btn btn-warning"  value="Comprar"
            </td> </form> -->
            
            <form action="/tienda2/cart.php?action=add_item&id=625&qty=1&anid=<?=$animal_ID;?>&nomid=<?=$aninombre;?>" method="post" name="catalogotienda" enctype="multipart/form-data">
             <td>
                 <input type="hidden" name="animales_ID" value="<?=$animal_ID;?>">
                <input type="hidden" name="nombre" value= "<?=$nombre;?>">
               <input type="submit" name="comprar" class="btn btn-warning"  value="Comprar"
            </td> </form>
</tr> 
                
       <? 
 
     }
       ?>
       </tbody>
   </table>
  

</div>
</div>
<!-- ************************** Termina de Muestrar los animales ******************** -->


</div>
</div>
</div>
</div>
</section>
<!-- end of contact section --><!-- pie de pagina -->
<footer class="footer clearfix">
<div class="container">
<div class="row">
<div class="col-xs-6 footer-para">
<h4>&copy;Dise&ntildeo por Mostafizur, Mototli todos los derechos reservados</h4>
</div>

<div class="col-md-6 text-right"></div>
 <h4 align="right">&nbsp;<a href="politicas_de_privacidad1.php">Pol&iacute;ticas de privacidad</a><h4>
</div>
</div>
<!-- script tags
  ============================================================= -->
</footer>
<!-- ****************** Inserta los datos a la tabla citas ************-->
<?php


/* **********     Recepta el guardar modo y lo Actualiza en la BD ********** */
if(isset($_POST['hola'])){ //check if form was submitted
  $modo_ID1 = $_POST['modo_tipo'];
$anima_ID=$_POST['animales_ID'];

}
/* **********     Edita los campos y lo Actualiza en la BD ********** */
if(isset($_POST['modifica']))
{
    $nombre=$_POST['nom'];
    $edad=$_POST['age'];
}
$sq4= mysqli_query($conn,"UPDATE animales SET nombre='$nombre',edad='$edad' WHERE nombre='$nom', edad='$age'");   
$sq3 = mysqli_query($conn, "UPDATE animales SET modos_ID = '$modo_ID1'WHERE ID='$anima_ID' limit 1");
mysqli_query($sq3);

/* **********  TERMINA  Recepta el guardar modo y lo Actualiza en la BD ********** */
?>



</body>
</html>