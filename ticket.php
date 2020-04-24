<!DOCTYPE html>
 <?
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
 ?>
<html>
  <head>
    <title>Reportes</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <link href="resources/css/axure_rp_page.css" type="text/css" rel="stylesheet"/>
    <link href="data/styles.css" type="text/css" rel="stylesheet"/>
    <link href="files/index/styles.css" type="text/css" rel="stylesheet"/>
    <script src="resources/scripts/jquery-3.2.1.min.js"></script>
    <script src="resources/scripts/axure/axQuery.js"></script>
    <script src="resources/scripts/axure/globals.js"></script>
    <script src="resources/scripts/axutils.js"></script>
    <script src="resources/scripts/axure/annotation.js"></script>
    <script src="resources/scripts/axure/axQuery.std.js"></script>
    <script src="resources/scripts/axure/doc.js"></script>
    <script src="resources/scripts/messagecenter.js"></script>
    <script src="resources/scripts/axure/events.js"></script>
    <script src="resources/scripts/axure/recording.js"></script>
    <script src="resources/scripts/axure/action.js"></script>
    <script src="resources/scripts/axure/expr.js"></script>
    <script src="resources/scripts/axure/geometry.js"></script>
    <script src="resources/scripts/axure/flyout.js"></script>
    <script src="resources/scripts/axure/model.js"></script>
    <script src="resources/scripts/axure/repeater.js"></script>
    <script src="resources/scripts/axure/sto.js"></script>
    <script src="resources/scripts/axure/utils.temp.js"></script>
    <script src="resources/scripts/axure/variables.js"></script>
    <script src="resources/scripts/axure/drag.js"></script>
    <script src="resources/scripts/axure/move.js"></script>
    <script src="resources/scripts/axure/visibility.js"></script>
    <script src="resources/scripts/axure/style.js"></script>
    <script src="resources/scripts/axure/adaptive.js"></script>
    <script src="resources/scripts/axure/tree.js"></script>
    <script src="resources/scripts/axure/init.temp.js"></script>
    <script src="resources/scripts/axure/legacy.js"></script>
    <script src="resources/scripts/axure/viewer.js"></script>
    <script src="resources/scripts/axure/math.js"></script>
    <script src="resources/scripts/axure/jquery.nicescroll.min.js"></script>
    <script src="data/document.js"></script>
    <script src="files/index/data.js"></script>
    <script type="text/javascript">
      $axure.utils.getTransparentGifPath = function() { return 'http://anevi.com/QASMS/resources/images/transparent.gif'; };
      $axure.utils.getOtherPath = function() { return 'http://anevi.com//resources/Other.html'; };
      $axure.utils.getReloadPath = function() { return 'http://anevi.com/QASMS/resources/reload.html'; };
    </script>
  </head>
  <!--INICIO ACCION CREAR-->
  <?php 
  if ($accion == "Crear") {
  
  ?>
  <body>
      <!--ENVIO VARIABLE-->
      <form action="" method="post">
          <input type="hidden" name="usuarios_ID" value="<?=$usuario_ID;?>"/>
          <input type="hidden" name="fecha_actual" value="<?=$fechaActual;?>"/>
          
          
    <div id="base" class="">

      <!-- Unnamed (Image) -->
      <div id="u0" class="ax_default image">
        <img id="u0_img" class="img " src="http://anevi.com/QASMS/images/index/u0.png"/>
        <div id="u0_text" class="text " style="display:none; visibility: hidden">
          <p></p>
        </div>
      </div>
     </div>
     
     
      <div id="u01" class="ax_default label" align="right">
      <div id="u01_div" class="">  </div>
      <div id="u01_text" class="text " >
         <button type="button" class="btn btn-info"><a href="logout.php">Cerrar Sesi&oacute;n</button></a>
          </div>
      </div>


      <!-- Unnamed (Rectangle) -->
      <div id="u1" class="ax_default label">
        <div id="u1_div" class=""></div>
        <div id="u1_text" class="text ">
          <p><span>Folio No.</span></p>
        </div>
      </div>

      <!-- foliotxt (Text Field) -->
      <div id="u2" class="ax_default text_field" data-label="foliotxt">
        <input id="u2_input" type="text" value="<?=$foliorandom;?>" name="folio" class="u2_input" readonly/>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u3" class="ax_default label">
        <div id="u3_div" class=""></div>
        <div id="u3_text" class="text ">
          <p><span>Fecha: <? echo $fechaActual; ?></span></p>
        </div>
      </div>

      <!-- fechatxt (Text Field) -->
      <div id="u4" class="ax_default text_field" data-label="fechatxt">
        <input id="u4_input" type="text" value="" class="u4_input"/>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u5" class="ax_default heading_2">
        <div id="u5_div" class=""></div>
        <div id="u5_text" class="text ">
          <p><span>ORDEN DE SERVICIO</span></p>
        </div>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u6" class="ax_default label">
        <div id="u6_div" class=""></div>
        <div id="u6_text" class="text ">
          <p><span>Fecha de reporte:</span>  <input type="date" name="fecha_reporte" class=""></p>
        </div>
      </div>
      <!--ESTILOS PARA OCULTAR CAMPOS DE TEXTOS DE ACUERDO A TIPO DE USUARIO-->
<style>
    .sinborde{
        border:0;
        font-size:20px;
        font-family:arial;
        position:fixed;
    }
    .u9_input{
        <?php 
        if($tipo_usuario=='admin')
        {
          ?> 
          display:none;
          <?
        } ?>
        
    }
    .u11_input{
        <?php 
        if($tipo_usuario=='admin')
        {
          ?> 
          display:none;
          <?
        } ?>
        
    }
    .u13_input{
        <?php 
        if($tipo_usuario=='cliente')
        {
          ?> 
          display:none;
          <?
        } ?>
        
    }
    .u22_input{
        <?php 
        if($tipo_usuario=='admin')
        {
          ?> 
          display:none;
          <?
        } ?>
        
    }
    .u35_input{
        <?php 
        if($tipo_usuario=='admin')
        {
          ?> 
          display:none;
          <?
        } ?>
        
    }
    .u24_input{
        <?php 
        if($tipo_usuario=='cliente')
        {
          ?> 
          display:none;
          <?
        } ?>
        
    }
    .u26_input{
        <?php 
        if($tipo_usuario=='cliente')
        {
          ?> 
          display:none;
          <?
        } ?>
        
    }
    .u32_input{
        <?php 
        if($tipo_usuario=='cliente')
        {
          ?> 
          display:none;
          <?
        } ?>
        
    }
    .u29_input{
        <?php 
        if($tipo_usuario=='cliente')
        {
          ?> 
          display:none;
          <?
        } ?>
        
    }
    .miboton {
	box-shadow:inset 0px 1px 0px 0px #54a3f7;
	background:linear-gradient(to bottom, #064466 5%, #0061a7 100%);
	background-color:#064466;
	border-radius:3px;
	border:1px solid #124d77;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:13px;
	padding:6px 24px;
	text-decoration:none;
	text-shadow:0px 1px 0px #154682;
	position:relative;
}
.miboton:hover {
	background:linear-gradient(to bottom, #0061a7 5%, #064466 100%);
	background-color:#0061a7;
}
.miboton:active {
	position:relative;
	top:1px;
}
</style>
      <!-- fechareporte (Text Field) -->
      <!--<div id="u7" class="ax_default text_field" data-label="fechareporte">
        <input id="u7_input" type="text" value="" class="u7_input"/>
      </div>-->
     

      <!-- Unnamed (Rectangle) -->
      <div id="u8" class="ax_default label">
        <div id="u8_div" class=""></div>
        <div id="u8_text" class="text ">
          <p><span>REPORTÓ:</span></p>
        </div>
      </div>

      <!-- reporto (Text Field) -->
      <div id="u9" class="ax_default text_field" data-label="reporto">
        <input id="u9_input" type="text" name="reporto" value="" class="u9_input"/>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u10" class="ax_default label">
        <div id="u10_div" class=""></div>
        <div id="u10_text" class="text ">
          <p><span>CARGO:</span></p>
        </div>
      </div>

      <!-- cargo (Text Field) -->
      <div id="u11" class="ax_default text_field" data-label="cargo">
        <input id="u11_input" type="text" value="" name="cargo" class="u11_input"/>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u12" class="ax_default label">
        <div id="u12_div" class=""></div>
        <div id="u12_text" class="text ">
          <p><span>ATENDIÓ:</span></p>
        </div>
      </div>

      <!-- atendio (Text Field) -->
      <div id="u13" class="ax_default text_field" data-label="atendio">
        <input id="u13_input" type="text" value="" name="atendio" class="u13_input"/>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u14" class="ax_default box_1">
        <div id="u14_div" class=""></div>
        <div id="u14_text" class="text " style="display:none; visibility: hidden">
          <p></p>
        </div>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u15" class="ax_default label">
        <div id="u15_div" class=""></div>
        <select name = "verificentros" class="dropverifi">
            <option value = "1" selected>Fernandez del Castillo</option>
            <option value = "2">Anevi</option>
            
         </select>
      </div>
<style>
    #select{
        padding:15px;
        font-size:10px;
    }
</style>
      <!-- verificentro (Text Field) -->
      

      <!-- Unnamed (Rectangle) -->
      <div id="u17" class="ax_default label">
        <div id="u17_div" class=""></div>
        <div id="u17_text" class="text ">
          <p><span>MANTENIMIENTO:</span></p>
        </div>
      </div>

      <!-- rbpreventivo (Radio Button) -->
      <div id="u18" class="ax_default radio_button" data-label="rbpreventivo" selectiongroup="mant">
        <label id="u18_input_label" for="u18_input" style="position: absolute; left: 0px;">
         <img id="u18_img" class="img " src="/QASMS/images/index/rbpreventivo_u18.svg"/>
          <div id="u18_text" class="text ">
            <p><span>Preventivo</span></p>
          </div>
        </label>
        <input id="u18_input" type="radio" value="preventivo" name="mant"/>
      </div>

      <!-- rbcorrectivo (Radio Button) -->
      <div id="u19" class="ax_default radio_button" data-label="rbcorrectivo" selectiongroup="mant">
        <label id="u19_input_label" for="u19_input" style="position: absolute; left: 0px;">
          <img id="u19_img" class="img " src="/QASMS/images/index/rbcorrectivo_u19.svg"/>
          <div id="u19_text" class="text ">
            <p><span>Correctivo</span></p>
          </div>
        </label>
        <input id="u19_input" type="radio" value="correctivo" name="mant"/>
      </div>

      <!-- rblimpieza (Radio Button) -->
      <div id="u20" class="ax_default radio_button selected" data-label="rblimpieza" selectiongroup="mant">
        <label id="u20_input_label" for="u20_input" style="position: absolute; left: 0px;">
          <img id="u20_img" class="img " src="/QASMS/images/index/rblimpieza_u20_selected.svg"/>
          <div id="u20_text" class="text ">
            <p><span>Limpieza</span></p>
          </div>
        </label>
        <input id="u20_input" type="radio" value="limpieza" name="mant" checked/>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u21" class="ax_default label">
        <div id="u21_div" class=""></div>
        <div id="u21_text" class="text ">
          <p><span>DESCRIPCIÓN DE LA FALLA:</span></p>
        </div>
      </div>

      <!-- descripcionfalla (Text Area) -->
      <div id="u22" class="ax_default text_area" data-label="descripcionfalla">
        <div id="u22_div" class=""></div>
        <textarea id="u22_input" class="u22_input" name="desc_falla"></textarea>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u23" class="ax_default label">
        <div id="u23_div" class=""></div>
        <div id="u23_text" class="text ">
          <p><span>DESCRIPCIÓN DE LA SOLUCIÓN:</span></p>
        </div>
      </div>

      <!-- descripcionsolucion (Text Area) -->
      <div id="u24" class="ax_default text_area" data-label="descripcionsolucion">
        <div id="u24_div" class=""></div>
        <textarea id="u24_input" class="u24_input" name="desc_solucion"></textarea>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u25" class="ax_default label">
        <div id="u25_div" class=""></div>
        <div id="u25_text" class="text ">
          <p><span>REFACCIONES UTILIZADAS:</span></p>
        </div>
      </div>

      <!-- descripcionfalla (Text Area) -->
      <div id="u26" class="ax_default text_area" data-label="descripcionfalla">
        <div id="u26_div" class=""></div>
        <textarea id="u26_input" class="u26_input" name="refac_utilizadas"></textarea>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u27" class="ax_default label">
        <div id="u27_div" class=""></div>
        <div id="u27_text" class="text ">
          <p><span>Fecha de atención de reporte: </span></p>
        </div>
      </div>

      <!-- Unnamed (Line) -->
      <div id="u28" class="ax_default line">
        <img id="u28_img" class="img " src="QASMS/images/index/u28.svg"/>
        <div id="u28_text" class="text " style="display:none; visibility: hidden">
          <p></p>
        </div>
      </div>

      <!-- fechareporte (Text Field) -->
      <div id="u29" class="ax_default text_field" data-label="fechareporte">
        <input id="u29_input" type="date" value="" name="aten_reporte" class="u29_input"/>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u30" class="ax_default label">
        <div id="u30_div" class=""></div>
        <div id="u30_text" class="text ">
          <p><span>Nombre y firma del técnico de SMS</span></p>
        </div>
      </div>

      <!-- Unnamed (Line) -->
      <div id="u31" class="ax_default line">
        <img id="u31_img" class="img " src="QASMS/images/index/u28.svg"/>
        <div id="u31_text" class="text " style="display:none; visibility: hidden">
          <p></p>
        </div>
      </div>

      <!-- firma tecnico (Text Field) -->
      <div id="u32" class="ax_default text_field" data-label="firma tecnico">
        <input id="u32_input" type="text" value="" name="firma_tecnico" class="u32_input"/>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u33" class="ax_default label">
        <div id="u33_div" class=""></div>
        <div id="u33_text" class="text ">
          <p><span>Sello y firma de recibo de conformidad</span></p>
        </div>
      </div>

      <!-- Unnamed (Line) -->
      <div id="u34" class="ax_default line">
        <img id="u34_img" class="img " src="QASMS/images/index/u28.svg"/>
        <div id="u34_text" class="text " style="display:none; visibility: hidden">
          <p></p>
        </div>
      </div>

      <!-- firma conformidad (Text Field) -->
      <div id="u35" class="ax_default text_field" data-label="firma conformidad">
        <input id="u35_input" type="text" value="" name="conformidad" class="u35_input"/>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u36" class="ax_default heading_3">
        <div id="u36_div" class=""></div>
        <div id="u36_text" class="text ">
          <p><span>AVENIDA INSURGENTES SUR 800 PISO 8 . DEL VALLE . CIUDAD DE MÉXICO . 03100 </span></p>
        </div>
      </div>
<br>
      <!-- Unnamed (SVG) -->
      <div id="u37" class="ax_default image">
        <img id="u37_img" class="img " src="QASMS/images/index/u37.svg"/>
        <div id="u37_text" class="text " style="display:none; visibility: hidden">
          <p></p>
        </div>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u38" class="ax_default heading_3">
        <div id="u38_div" class=""></div>
        <div id="u38_text" class="text ">
          <p><span>(55) 5336 2000</span></p>
        </div>
      </div>

      <!-- Unnamed (Line) -->
      <div id="u39" class="ax_default line">
        <img id="u39_img" class="img " src="QASMS/images/index/u39.svg"/>
        <div id="u39_text" class="text " style="display:none; visibility: hidden">
          <p></p>
        </div>
      </div>

      <!-- Unnamed (Line) -->
      <div id="u40" class="ax_default line">
        <img id="u40_img" class="img " src="QASMS/images/index/u39.svg"/>
        <div id="u40_text" class="text " style="display:none; visibility: hidden">
          
        </div>
        
      </div>

     

     <!--BOTON ENVIAR-->
      <input type="submit" value="enviar" name="enviar" class="miboton"/>
    </div>
    <script src="resources/scripts/axure/ios.js"></script>
    </form>
  </body>
</html>
<!--CODIGO PARA GUARDAR VARIABLES EN BASE DE DATOS-->
<?php
if(isset($_POST['enviar'])){ //ACCION AL DAR CLICK AL BOTON ENVIAR
 $folio=$_POST['folio'];//NAME DE LOS CAMPOS DE TEXTO A ENVIAR
  $fecha_reporte=$_POST['fecha_reporte'];
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
    
    //INSERTAR DATOS DENTRO DE LA BASE DE DATOS
    $sql="INSERT INTO `orden` (`usuarios_ID`, `folio`, `fecha`, `fecha_rep`, `reporto`, `cargo`, `atendio`, `verificentros_ID`, `tipo_mant`, `desc_falla`, `desc_solucion`, `refacc`, `fecha_atencion`, `datos_tecnico`, `recibo`, `active`) VALUES ('$correo','$folio','$fechaActual','$fecha_reporte','$reporto','$cargo','$atendio','$verificentros','$mant','$desc_falla','$desc_solucion','$refac_utilizadas','$aten_reporte','$firma_tecnico','$conformidad','1')";
$result=mysqli_query($conn,$sql);
}

?>

<!--FINAL ACCION CREAR-->
<?php 
}
?>




<!--Accion modificar el archivo-->
<?php

if ($accion == "Modificar") {
    $correo=$_SESSION['user'];
    $orden_ID=$_POST['orden_ID'];
    
     $ticket_ID=$_GET['ID']; //SE OBTIENE EL ID DEL TICKET DEL URL
 
 $conOrden = mysqli_query($conn ,"SELECT * FROM orden WHERE ID= '$ticket_ID'");
  while($row= mysqli_fetch_assoc($conOrden)){
   $folio= $row['folio'];
   $fecha_reporte= $row['fecha_rep'];
   $verificentro= $row['verificentros_ID'];
   $mantenimiento= $row['tipo_mant'];
   $reporto=$row['reporto'];
   $firma_conformidad=$row['recibo'];
   $cargo=$row['cargo'];
   $desc_falla=$row['desc_falla'];
   $atendio=$row['atendio'];
   $desc_solucion=$row['desc_solucion'];
   $refac_utilizadas=$row['refacc'];
   $firma_tecnico=$row['datos_tecnico'];
   $atencion_reporte=$row['fecha_atencion'];
   
   
  
  }
   ?>
  ?>
  
  <body>
      <!--ENVIO VARIABLE-->
      <form action="" method="post">
          <input type="hidden" name="usuarios_ID" value="<?=$usuario_ID;?>"/>
          <input type="hidden" name="fecha_actual" value="<?=$fechaActual;?>"/>
          
          
    <div id="base" class="">

      <!-- Unnamed (Image) -->
      <div id="u0" class="ax_default image">
        <img id="u0_img" class="img " src="http://anevi.com/QASMS/images/index/u0.png"/>
        <div id="u0_text" class="text " style="display:none; visibility: hidden">
          <p></p>
        </div>
      </div>
     </div>
     
     
      <div id="u01" class="ax_default label" align="right">
      <div id="u01_div" class="">  </div>
      <div id="u01_text" class="text " >
         <button type="button" class="btn btn-info"><a href="logout.php">Cerrar Sesi&oacute;n</button></a>
          </div>
      </div>


      <!-- Unnamed (Rectangle) -->
      <div id="u1" class="ax_default label">
        <div id="u1_div" class=""></div>
        <div id="u1_text" class="text ">
          <p><span>Folio No.</span></p>
        </div>
      </div>

      <!-- foliotxt (Text Field) -->
      <div id="u2" class="ax_default text_field" data-label="foliotxt">
        <input id="u2_input" type="text" value="<?=$folio;?>" name="folio" class="u2_input" readonly/>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u3" class="ax_default label">
        <div id="u3_div" class=""></div>
        <div id="u3_text" class="text ">
          <p><span>Fecha: <? echo $fechaActual; ?></span></p>
        </div>
      </div>

      <!-- fechatxt (Text Field) -->
      <div id="u4" class="ax_default text_field" data-label="fechatxt">
        <input id="u4_input" type="text" value="" class="u4_input"/>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u5" class="ax_default heading_2">
        <div id="u5_div" class=""></div>
        <div id="u5_text" class="text ">
          <p><span>ORDEN DE SERVICIO</span></p>
        </div>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u6" class="ax_default label">
        <div id="u6_div" class=""></div>
        <div id="u6_text" class="text ">
          <p><span>Fecha de reporte:</span>  <input type="date" name="fecha_reporte" class=""></p>
        </div>
      </div>
      <!--ESTILOS PARA OCULTAR CAMPOS DE TEXTOS DE ACUERDO A TIPO DE USUARIO-->
<style>
    .sinborde{
        border:0;
        font-size:20px;
        font-family:arial;
        position:fixed;
    }
    
    .miboton {
	box-shadow:inset 0px 1px 0px 0px #54a3f7;
	background:linear-gradient(to bottom, #064466 5%, #0061a7 100%);
	background-color:#064466;
	border-radius:3px;
	border:1px solid #124d77;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:13px;
	padding:6px 24px;
	text-decoration:none;
	text-shadow:0px 1px 0px #154682;
	position:relative;
}
.miboton:hover {
	background:linear-gradient(to bottom, #0061a7 5%, #064466 100%);
	background-color:#0061a7;
}
.miboton:active {
	position:relative;
	top:1px;
}
    
    
    
    
  
   
</style>
      <!-- fechareporte (Text Field) -->
      <!--<div id="u7" class="ax_default text_field" data-label="fechareporte">
        <input id="u7_input" type="text" value="" class="u7_input"/>
      </div>-->
     

      <!-- Unnamed (Rectangle) -->
      <div id="u8" class="ax_default label">
        <div id="u8_div" class=""></div>
        <div id="u8_text" class="text ">
          <p><span>REPORTÓ:</span></p>
        </div>
      </div>

      <!-- reporto (Text Field) -->
      <div id="u9" class="ax_default text_field" data-label="reporto">
        <input id="u9_input" type="text" name="reporto" value="" class="u9_input" placeholder="<?=$reporto;?>" 
        <?if($tipo_usuario=='admin')
        {?>
          readonly
        <?} ?>/>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u10" class="ax_default label">
        <div id="u10_div" class=""></div>
        <div id="u10_text" class="text ">
          <p><span>CARGO:</span></p>
        </div>
      </div>

      <!-- cargo (Text Field) -->
      <div id="u11" class="ax_default text_field" data-label="cargo">
        <input id="u11_input" type="text" value="" name="cargo" class="u11_input" placeholder="<?=$cargo;?>" 
        <?if($tipo_usuario=='admin')
        {?>
          readonly
        <?} ?>/>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u12" class="ax_default label">
        <div id="u12_div" class=""></div>
        <div id="u12_text" class="text ">
          <p><span>ATENDIÓ:</span></p>
        </div>
      </div>

      <!-- atendio (Text Field) -->
      <div id="u13" class="ax_default text_field" data-label="atendio">
        <input id="u13_input" type="text" value="" name="atendio" class="u13_input" placeholder="<?=$atendio;?>" 
        <?if($tipo_usuario=='cliente')
        {?>
          readonly
        <?} ?>/>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u14" class="ax_default box_1">
        <div id="u14_div" class=""></div>
        <div id="u14_text" class="text " style="display:none; visibility: hidden">
          <p></p>
        </div>
      </div>

      <!-- Unnamed (Rectangle) -->
       <div id="u15" class="ax_default label">
        <div id="u15_div" class=""></div>
        <select name = "verificentros" class="dropverifi">
            <option value = "1" selected>Fernandez del Castillo</option>
            <option value = "2">Anevi</option>
            
         </select>
      </div>
<style>
    #select{
        padding:15px;
        font-size:10px;
    }
</style>

      <!-- Unnamed (Rectangle) -->
      <div id="u17" class="ax_default label">
        <div id="u17_div" class=""></div>
        <div id="u17_text" class="text ">
          <p><span>MANTENIMIENTO:</span></p>
        </div>
      </div>

      <!-- rbpreventivo (Radio Button) -->
      <div id="u18" class="ax_default radio_button" data-label="rbpreventivo" selectiongroup="mant">
        <label id="u18_input_label" for="u18_input" style="position: absolute; left: 0px;">
         <img id="u18_img" class="img " src="/QASMS/images/index/rbpreventivo_u18.svg"/>
          <div id="u18_text" class="text ">
            <p><span>Preventivo</span></p>
          </div>
        </label>
        <input id="u18_input" type="radio" value="preventivo" name="mant"/>
      </div>

      <!-- rbcorrectivo (Radio Button) -->
      <div id="u19" class="ax_default radio_button" data-label="rbcorrectivo" selectiongroup="mant">
        <label id="u19_input_label" for="u19_input" style="position: absolute; left: 0px;">
          <img id="u19_img" class="img " src="/QASMS/images/index/rbcorrectivo_u19.svg"/>
          <div id="u19_text" class="text ">
            <p><span>Correctivo</span></p>
          </div>
        </label>
        <input id="u19_input" type="radio" value="correctivo" name="mant"/>
      </div>

      <!-- rblimpieza (Radio Button) -->
      <div id="u20" class="ax_default radio_button selected" data-label="rblimpieza" selectiongroup="mant">
        <label id="u20_input_label" for="u20_input" style="position: absolute; left: 0px;">
          <img id="u20_img" class="img " src="/QASMS/images/index/rblimpieza_u20_selected.svg"/>
          <div id="u20_text" class="text ">
            <p><span>Limpieza</span></p>
          </div>
        </label>
        <input id="u20_input" type="radio" value="limpieza" name="mant" checked/>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u21" class="ax_default label">
        <div id="u21_div" class=""></div>
        <div id="u21_text" class="text ">
          <p><span>DESCRIPCIÓN DE LA FALLA:</span></p>
        </div>
      </div>

      <!-- descripcionfalla (Text Area) -->
      <div id="u22" class="ax_default text_area" data-label="descripcionfalla">
        <div id="u22_div" class=""></div>
        <textarea id="u22_input" class="u22_input" name="desc_falla" placeholder="<?=$desc_falla;?>" 
        <?if($tipo_usuario=='admin')
        {?>
          readonly
        <?} ?>></textarea>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u23" class="ax_default label">
        <div id="u23_div" class=""></div>
        <div id="u23_text" class="text ">
          <p><span>DESCRIPCIÓN DE LA SOLUCIÓN:</span></p>
        </div>
      </div>

      <!-- descripcionsolucion (Text Area) -->
      <div id="u24" class="ax_default text_area" data-label="descripcionsolucion">
        <div id="u24_div" class=""></div>
        <textarea id="u24_input" class="u24_input" name="desc_solucion" placeholder="<?=$desc_solucion;?>" 
        <?if($tipo_usuario=='cliente')
        {?>
          readonly
        <?} ?>></textarea>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u25" class="ax_default label">
        <div id="u25_div" class=""></div>
        <div id="u25_text" class="text ">
          <p><span>REFACCIONES UTILIZADAS:</span></p>
        </div>
      </div>

      <!-- descripcionfalla (Text Area) -->
      <div id="u26" class="ax_default text_area" data-label="descripcionfalla">
        <div id="u26_div" class=""></div>
        <textarea id="u26_input" class="u26_input" name="refac_utilizadas" placeholder="<?=$refac_utilizadas;?>" 
        <?if($tipo_usuario=='cliente')
        {?>
          readonly
        <?} ?>></textarea>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u27" class="ax_default label">
        <div id="u27_div" class=""></div>
        <div id="u27_text" class="text ">
          <p><span>Fecha de atención de reporte: </span></p>
        </div>
      </div>

      <!-- Unnamed (Line) -->
      <div id="u28" class="ax_default line">
        <img id="u28_img" class="img " src="QASMS/images/index/u28.svg"/>
        <div id="u28_text" class="text " style="display:none; visibility: hidden">
          <p></p>
        </div>
      </div>

      <!-- fechareporte (Text Field) -->
      <div id="u29" class="ax_default text_field" data-label="fechareporte">
        <input id="u29_input" type="date" value="" name="aten_reporte" class="u29_input" placeholder="<?=$atencion_reporte;?>" 
        <?if($tipo_usuario=='cliente')
        {?>
          readonly
        <?} ?>/>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u30" class="ax_default label">
        <div id="u30_div" class=""></div>
        <div id="u30_text" class="text ">
          <p><span>Nombre y firma del técnico de SMS</span></p>
        </div>
      </div>

      <!-- Unnamed (Line) -->
      <div id="u31" class="ax_default line">
        <img id="u31_img" class="img " src="QASMS/images/index/u28.svg"/>
        <div id="u31_text" class="text " style="display:none; visibility: hidden">
          <p></p>
        </div>
      </div>

      <!-- firma tecnico (Text Field) -->
      <div id="u32" class="ax_default text_field" data-label="firma tecnico">
        <input id="u32_input" type="text" value="" name="firma_tecnico" class="u32_input" placeholder="<?=$firma_tecnico;?>" 
        <?if($tipo_usuario=='cliente')
        {?>
          readonly
        <?} ?>/>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u33" class="ax_default label">
        <div id="u33_div" class=""></div>
        <div id="u33_text" class="text ">
          <p><span>Sello y firma de recibo de conformidad</span></p>
        </div>
      </div>

      <!-- Unnamed (Line) -->
      <div id="u34" class="ax_default line">
        <img id="u34_img" class="img " src="QASMS/images/index/u28.svg"/>
        <div id="u34_text" class="text " style="display:none; visibility: hidden">
          <p></p>
        </div>
      </div>

      <!-- firma conformidad (Text Field) -->
      <div id="u35" class="ax_default text_field" data-label="firma conformidad">
        <input id="u35_input" type="text" value="" name="conformidad" class="u35_input" placeholder="<?=$firma_conformidad;?>" 
        <?if($tipo_usuario=='admin')
        {?>
          readonly
        <?} ?>/>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u36" class="ax_default heading_3">
        <div id="u36_div" class=""></div>
        <div id="u36_text" class="text ">
          <p><span>AVENIDA INSURGENTES SUR 800 PISO 8 . DEL VALLE . CIUDAD DE MÉXICO . 03100 </span></p>
        </div>
      </div>
<br>
      <!-- Unnamed (SVG) -->
      <div id="u37" class="ax_default image">
        <img id="u37_img" class="img " src="QASMS/images/index/u37.svg"/>
        <div id="u37_text" class="text " style="display:none; visibility: hidden">
          <p></p>
        </div>
      </div>

      <!-- Unnamed (Rectangle) -->
      <div id="u38" class="ax_default heading_3">
        <div id="u38_div" class=""></div>
        <div id="u38_text" class="text ">
          <p><span>(55) 5336 2000</span></p>
        </div>
      </div>

      <!-- Unnamed (Line) -->
      <div id="u39" class="ax_default line">
        <img id="u39_img" class="img " src="QASMS/images/index/u39.svg"/>
        <div id="u39_text" class="text " style="display:none; visibility: hidden">
          <p></p>
        </div>
      </div>

      <!-- Unnamed (Line) -->
      <div id="u40" class="ax_default line">
        <img id="u40_img" class="img " src="QASMS/images/index/u39.svg"/>
        <div id="u40_text" class="text " style="display:none; visibility: hidden">
          <p></p>
        </div>
      </div>

     

     <!--BOTON ENVIAR-->
      <input type="submit" value="enviar" name="enviar" class="miboton"/>
    </div>
    <script src="resources/scripts/axure/ios.js"></script>
    </form>
  </body>
</html>
<?php
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


