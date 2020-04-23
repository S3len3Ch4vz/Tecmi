<!DOCTYPE html>
<?/*
 // CONEXION BASE DE DATOS
 $conn=new mysqli("localhost","anevico_qasms","gSHxPJX*tiFh","anevico_qasms")or die("Connection Failed");
 //FORMATO DE VARIABLE DATE
 $fechaActual = date('Y-m-d');
 //MANTENER SESION INICIADA Y VARIABLE QUE SE TOMA DE LA SESION
 session_start();
 $correo=$_SESSION['ID'];
 //ACCION QUE TE LLEVA A LA CONDICION DE MODIFICAR O CREAR
 $accion = $_GET['accion'];
 //CONSULTA TABLA USUARIOS
 $consuUsuario = mysqli_query($conn ,"SELECT * FROM usuarios WHERE ID='$correo' ORDER BY ID DESC ");
  while($row= mysqli_fetch_assoc($consuUsuario)){
   $tipo_usuario= $row['tipo_usuario'];
   $usuario_ID=$row['ID'];
   
  }
  //CONSULTA TABLA ORDEN
 $conOrden = mysqli_query($conn ,"SELECT * FROM orden WHERE usuarios_ID= '$correo' ORDER BY ID DESC");
  while($row= mysqli_fetch_assoc($conOrden)){
   $folio= $row['folio'];
   $fecha_reporte= $row['fecha_rep'];
   $verificentro= $row['verificentros_ID'];
   $mantenimiento= $row['tipo_mant'];
   $ticket_ID=$_GET['ID']; //OBTENDER ID DEL TICKET DE LA URL
   
  }
  //CONSULTA TABLA VERIFICENTROS
   $converificentro = mysqli_query($conn ,"SELECT * FROM verificentros WHERE active='1' ORDER BY ID DESC ");
  while($row= mysqli_fetch_assoc($consuUsuario)){
  // $tipo_usuario= $row['tipo_usuario'];
  // $usuario_ID=$row['ID'];
   
  }
  
  $permitted_chars = '0123456789';
// Output: 54esmdr0qf
$foliorandom= substr(str_shuffle($permitted_chars), 0, 10);
 */?>
<html lang="en">
  <head>
  	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Creador de tickets</title>
</head>
<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php"><img src="http://anevi.com/QASMS/images/index/u0.png" width="250px" alt="view-apps"></img></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
 <div class="collapse navbar-collapse" id="navbarSupportedContent">
 
    <form class="form-inline my-2 my-md-0">

        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modal_general">Cerrar Sesi&oacute;n</button>
    </form>
  </div>
</nav>
</header>
 <body style="background-color:#A0CAD9">
 <div class="badge badge-primary text-wrap" style="width: 8rem; text-align: right; font-size:18px;">
  Folio No. <?/*=$foliorandom;*/?> 
</div>
<p class="text-right" style="font-size: 18px;">Fecha: <?/*=$fechaActual;*/?></p>
<div class="container-xl">
	<div class="text-right">
         <h1 class="display-4">Orden de Servicio</h1>
    </div>
              <div class="text-left">
              <div class="input-group mb-3">
               <div class="input-group-prepend">
                 <span class="input-group-text" id="inputGroup-sizing-default">Fecha de Reporte:</span>
               </div>
                 <input  type="date" name="fecha_reporte" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
               </div>
               </div>
               <form>
                <div class="form-row align-items-center">
                <div class="col-auto">
                   <label class="sr-only" for="inlineFormInputGroup">Su Nombre</label>
                      <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text">Respor&oacute;</div>
                      </div>
                       <input type="text" name="reporto" class="form-control" id="inlineFormInputGroup" placeholder="">
                      </div>
                </div>
                
                       <div class="col-auto">
                          <label class="sr-only" for="inlineFormInputGroup">Cargo</label>
                            <div class="input-group mb-2">
                             <div class="input-group-prepend">
                               <div class="input-group-text">Cargo</div>
                             </div>
                               <input type="text" name="cargo" class="form-control" id="inlineFormInputGroup" placeholder="">
                            </div>
                        </div>
                
                                <div class="col-auto">
                                 <label class="sr-only" for="inlineFormInputGroup">Nombre del tecnico</label>
                                   <div class="input-group mb-2">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Atendi&oacute;</div>
                                      </div>
                                         <input type="text" name="reporto" class="form-control" id="inlineFormInputGroup" placeholder="">
                                    </div>
                               </div>
                </div>
                </form>
           
                      <div class="col-auto">
                       <div class="input-group mb-3">
                       <div class="input-group-prepend">
                           <span class="input-group-text" id="inputGroup-sizing-default">Verificentros:</span>
                       </div>
                            <input  type="text" name="verificentro" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                       </div>
                       </div>      
                            
                            <div class="col-auto">
                             <div class="d-flex">
                               <div class="dropdown mr-1">
                                <button type="button" class="btn btn-light dropdown-toggle" id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-offset="10,20"> Mantenimiento </button>
                                 <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                                  <a class="dropdown-item" name="mant" value="preventivo" href="#">Preventivo</a>
                                  <a class="dropdown-item" name="mant" value="correctivo" href="#">Correctivo</a>
                                   <a class="dropdown-item" name="mant" value="limpieza" href="#">Limpieza</a>
                                 </div>
                               </div>
                              </div>
                            </div>
</div>
<form>
	 <div class="form-group">
    <label for="exampleFormControlTextarea1" style="font-size: 18px;">Descripci&oacute;n de la falla:</label>
    <textarea class="form-control"  name="desc_falla" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
<div class="form-group">
    <label for="exampleFormControlTextarea1" style="font-size: 18px;">Descripci&oacute;n de la soluci&oacute;:</label>
    <textarea class="form-control"  name="desc_solucion" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1" style="font-size: 18px;">Refacciones Utilizadas:</label>
    <textarea class="form-control"  name="refac_utilizadas" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
 
 <div class="input-group mb-3">
 <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">Fecha de atencï&oactue;n de reporte</span>
  </div>
<input type="date" class="form-control" name="aten_reporte">
</div>
  
 <div class="form-row">
    <div class="col">
      <input type="text" name="firma_tecnico" class="form-control" placeholder="">
      <label for="exampleFormControlTextarea1" style="font-size: 18px;">Nombre y firma del técnico de SMS</label>
    </div>
    <div class="col">
      <input type="text" name="conformidad" class="form-control" placeholder="">
      <label for="exampleFormControlTextarea1" style="font-size: 18px;">Sello y firma de recibo de conformidad</label>
    </div>
  </div>
</form>

 <footer class="bd-footer text-muted">
 	<div class="container-fluid p-3 p-md-5">
 		<address>
    <strong>SMS</strong><br />
   AVENIDA INSURGENTES SUR 800 PISO 8 DEL VALLE <br />
    . CIUDAD DE MÉXICO . 03100<br />
    <abbr title="phone">Tel:</abbr> (55) 5336 2000
  </address>
 	</div>
 </footer>
 </body>
 </html>
 <?/*php
if(isset($_POST['enviar'])){ //ACCION QUE REALIZARA EL BOTON ENVIAR
 $folio=$_POST['folio'];
  $fecha_reporte=$_POST['fecha_reporte'];//CAMPOS DE TEXTO DE LOS QUE SE VA A ENVIAR LA INFORMACION
$reporto=$_POST['reporto'];
    $cargo=$_POST['cargo'];
   $atendio=$_POST['atendio'];
   $mant=$_POST['mant'];
   $desc_falla=$_POST['desc_falla'];
   $desc_solucion=$_POST['desc_solucion'];
    $refac_utilizadas=$_POST['refac_utilizadas'];
    $aten_reporte=$_POST['aten_reporte'];
    $firma_tecnico=$_POST['firma_tecnico'];
    $conformidad=$_POST['conformidad'];
    $verificentros=$_POST['verificentros'];
    
    
        if($tipo_usuario=='admin')//CONDICION TIPO USUARIO ADMINISTRADOR
        {
         $sql2= mysqli_query($conn,"UPDATE orden SET atendio='$atendio', verificentros_ID='$verificentros', tipo_mant='$mant',desc_solucion='$desc_solucion', refacc='$refac_utilizadas', fecha_atencion='$aten_reporte', datos_tecnico='$firma_tecnico' WHERE ID=$ticket_ID");
$result=mysqli_query($sql3); //CAMPOS QUE SE VAN A MODIFICAR
}

if($tipo_usuario=='cliente') //CONDICION TIPO USUARIO CLIENTE
        {
         $sql2= mysqli_query($conn,"UPDATE orden SET recibo='$conformidad' WHERE ID=$ticket_ID");
$result=mysqli_query($sql3);//CAMPOS QUE SE VAN A MODIFICAR
}
}
        }
    
?>
*/
