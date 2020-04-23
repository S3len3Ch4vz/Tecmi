<?
$conn=new mysqli("localhost","anevico_qasms","gSHxPJX*tiFh","anevico_qasms")or die("Connection Failed"); //CONEXION BASE DE DATOS
error_reporting(0);
session_start(); //SESION INICIADA
$correo=$_SESSION['ID']; //VARIABLE QUE TOMA DE LA SESION
//CONSULTA CAMPO USUARIOS
$consuUsuario = mysqli_query($conn ,"SELECT * FROM usuarios WHERE ID='$correo' ORDER BY ID DESC ");
  while($row= mysqli_fetch_assoc($consuUsuario)){
   $tipo_usuario= $row['tipo_usuario'];
  }
//$tipo_de_usuario_ID = 1;


?>
<!--CODIGO TABLA-->
<html>
<head>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
  // Setup - add a text input to each footer cell
    $('#consu_inv tfoot th').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text"  placeholder="'+title+'" />' );
    } );
    // DataTable
    var table = $('#consu_inv').DataTable();
   
    // Apply the search
    table.columns().every( function () {
    var that = this;
 
        $( 'input', this.footer() ).on( 'keyup change', function () {
            if ( that.search() !== this.value ) {
               that
                   .search( this.value )
                   .draw();
           }
    } );

    } );

      var table = $('#').DataTable();
       
      $('# tbody')
          .on( 'mouseenter', 'td', function () {
              var colIdx = table.cell(this).index().column;
   
              $( table.cells().nodes() ).removeClass( 'highlight' );
              $( table.column( colIdx ).nodes() ).addClass( 'highlight' );
          } );          
    } );
  </script>
<style>
  .popover
    {
      width: 100%;
      max-width: 800px;
    }
  #consu_inv {
    table-layout: fixed;
    width: 100% !important;
    }
  td {
    text-overflow: ellipsis;
  }
  th{
    width: auto !important;
    white-space: normal;
    text-overflow: ellipsis;
    overflow: hidden;
  } 
</style>
  <title></title>
</head>
<body>
<div class="container">
    <div class="row">
      <div class="col-md">
        <ul class="nav nav-tabs" id="myTab" role="tablist" align="center">
          <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Consultar tickets</a>
          </li>
            <?php 
            if($tipo_usuario == 'cliente'){ ?>
            <li class="nav-item">
              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"></a>
            </li>
            <?php  } ?>
          <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"></a>
          </li>
        </ul>
        
        <div class="tab-content shadow-lg p-3 mb-5 bg-white rounded" id="myTabContent"> 
          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"><?php //Consultar registro ?>
                <?php 
                if($tipo_usuario == 'cliente'){ ?>
                  <div align="center">
                    <a href="ticket.php?accion=Crear" target="_blank" class="btn btn-success" >Crear un ticket</a>
                  </div> 
                <?php }  ?>    
                <table id="consu_inv" class="table table-bordered  row-border hover order-column" style="width:100%">
                  <thead class="thead-dark">
                      <!--TITULO COLUMNAS TABLA-->
                    <tr align="center">
                      <th>Folio</th>
                      <th>Fecha reporte</th>
                      <th>Verificentro</th>
                      <th>Mantenimiento</th>
                      <th>Modificar</th>
                      
                      
                      
                      
                      
                    </tr>
                  </thead>
                  <!--CODIGO DATOS PARA TIPO DE USUARIO CLIENTE-->
                 <?php 
                if($tipo_usuario == 'cliente'){ ?> 
                  
                  <tbody>
                     <?php $consuUsuario = mysqli_query($conn ,"SELECT * FROM usuarios WHERE ID='$correo'"); //CONSULTA TABLA USUARIOS
  while($row= mysqli_fetch_assoc($consuUsuario)){
   $tipo_usuario= $row['tipo_usuario']; ?>
   <?}?>
    <?php $conOrden = mysqli_query($conn ,"SELECT * FROM orden WHERE usuarios_ID= '$correo' ORDER BY ID ASC"); //CONSULTA TABLA ORDEN QUE COINCIDA CON EL ID DE LA SESION
  while($row= mysqli_fetch_assoc($conOrden)){
   $folio= $row['folio'];
   $fecha_reporte= $row['fecha_rep'];
   $verificentro= $row['verificentros_ID'];
   $mantenimiento= $row['tipo_mant'];
   $ticket_ID=$row['ID'];
   ?>
   <!--DATOS TABLA-->
   <tr>
                            <td><?=$folio?></td>
                           <td><?=$fecha_reporte?></td>
                            <td><?= $verificentro?></td>
                           <td><?=$mantenimiento?></td> 
                          <td> <a href="ticket.php?ID=<?=$ticket_ID?>&accion=Modificar" target="_blank" class="btn btn-success" >Modificar</a></td> <!--BOTON QUE ENVIA A OPC MODIFICAR DE TICKET.PHP-->
                          
   
   
     <?}?>
     
    </tr>
    <!--CODIGO DATOS PARA TIPO DE USUARIO ADMINISTRADOR-->
           <?php }  ?> 
           <?php 
                if($tipo_usuario == 'admin'){ ?>
                  
                  <tbody>
                     <?php $consuUsuario = mysqli_query($conn ,"SELECT * FROM usuarios WHERE ID='$correo'");//CONSULTA TABLA USUARIOS
  while($row= mysqli_fetch_assoc($consuUsuario)){
   $tipo_usuario= $row['tipo_usuario']; ?>
   <?}?>
    <?php $conOrden = mysqli_query($conn ,"SELECT * FROM orden ORDER BY ID ASC"); //CONSULTA TABLA ORDEN PARA MOSTRAR TODOS LOS REGISTROS
  while($row= mysqli_fetch_assoc($conOrden)){
   $folio= $row['folio'];
   $fecha= $row['fecha'];
   $verificentro= $row['verificentros_ID'];
   $mantenimiento= $row['tipo_mant'];
   $ticket_ID=$row['ID'];
   ?>
   <!--DATOS DE LA TABLA-->
   <tr>
                            <td><?=$folio?></td>
                           <td><?=$fecha?></td>
                            <td><?= $verificentro?></td>
                           <td><?=$mantenimiento?></td> 
                          <td> <a href="ticket.php?ID=<?=$ticket_ID?>&accion=Modificar" target="_blank" class="btn btn-success" >Modificar</a></td> <!--BOTON CON ACCION MODIFICAR EN TICKET.PHP-->
                          
   
   
     <?}?>
     
    </tr>
           <?php }  ?> 
                           
                           
                             
                              
        
                           
                              
                       
                    
                      