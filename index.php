<?
$conn=new mysqli("localhost","anevico_qasms","gSHxPJX*tiFh","anevico_qasms")or die("Connection Failed");


$sesioniniciada=false;
if(isset($_POST['login'])){
    $correo=$_POST['user'];
    $psw=$_POST['password'];
    $query1="SELECT * FROM usuarios WHERE user='$correo'";
    $result=mysqli_query($conn,$query1);
    $message="";
    if(mysqli_num_rows($result)!=0){
        while($data=mysqli_fetch_assoc($result)){
            $usuarios_ID=$data['ID'];
            $tipo_usuario=$data['tipo_usuario'];
            $nombre=$data['user'];
            $contrasena=$data['password'];
            
        }
        if($contrasena==$psw){
            $sesioniniciada=true;
            session_start();
            $_SESSION['usuarios_ID']=$usuarios_ID;
            $_SESSION['sesioniniciada']=true;
            header("Location:ticket.php");
        }
        if($tipo_usuario == 'cliente'){//cliente
            	 header("Location:ticket.php");
            }
            if($tipo_usuario == 'admin'){// administrador
            	 header("Location:adminz.php");
            	 
            }
    }
}
?>
<!DOCTYPE html>
<html lang="es-MXN">
  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SMS - login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <style>
      html,
      body {
        height: 100%;
      }
      body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #1FB4E7;
      }
      .form-signin {
        width: 100%;
        max-width: 330px;
        padding: 15px;
        margin: auto;
      }
      .form-signin .checkbox {
        font-weight: 400;
      }
      .form-signin .form-control {
        position: relative;
        box-sizing: border-box;
        height: auto;
        padding: 10px;
        font-size: 16px;
      }
      .form-signin .form-control:focus {
        z-index: 2;
      }
      .form-signin input[type="email"] {
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
      }
      .form-signin input[type="password"] {
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
      }
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

</head>


<body class="text-center">
    <div class="col d-flex justify-content-center">
 <div class="card shadow-lg  mb-5 bg-white rounded">
      <div class="card-body">
    <form method="POST" action="" class="form-signin">
  
    <img class="mb-4" src="http://anevi.com/QASMS/images/index/u0.png" width="250px">
	<h1 class="h3 mb-3 font-weight-normal"> Inicia Sesi&oacute;n </h1>
	 <label for="inputEmail" class="sr-only">Usuario</label>
       <input type="text" id="inputEmail" name="user" placeholder="Correo"class="form-control" required autofocus>
	    <label for="inputPassword" class="sr-only">Contrase&ntilde;a</label>
      <input type="password" id="inputPassword"  name="password" class="form-control" placeholder="Contrase&#241;a" required>
       <button class="btn btn-lg btn-success btn-block" name="login" type="submit">Iniciar Sesi&oacute;n</button>
    </form>
     <!-- <a class="th22" href="https://mototli.com/recuperacion.php?mos=1">&#191;Olvidaste tu contrase&#241;a?</a>-->

  </div>
  </div>
  </div>
  </div>
  
 
</body>
</html>
