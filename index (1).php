<?
$conn=new mysqli("localhost","anevico_qasms","gSHxPJX*tiFh","anevico_qasms")or die("Connection Failed"); //CONEXION BASE DE DATOS


$sesioniniciada=false;
if(isset($_POST['login'])){ //ACCION QUE HARA AL DAR CLIC BOTON LOGIN
    $correo=$_POST['correo']; //VARIABLE DE CAMPO USUARIO AL INICIAR SESION
    $psw=$_POST['psw'];//VARIABLE CAMPO CONTRASENA AL INCIAR SESION
    $query1="SELECT * FROM usuarios WHERE user='$correo'"; //CONSULTA TABLA USUARIOS
    $result=mysqli_query($conn,$query1);
    $message="";
    if(mysqli_num_rows($result)!=0){
        while($data=mysqli_fetch_assoc($result)){
            //DATOS DE LA BASE DE DATOS
            $usuarios_ID=$data['ID']; 
            $tipo_usuario=$data['tipo_usuario'];
            $nombre=$data['user'];
            $contrasena=$data['password'];
            $password=$data['password'];
        }
        if($psw==$password){ //CONDICION PARA QUE EL TEXTO DEL CAMPO COINCIDA CON EL TEXTO EN LA BASE DE DATOS
        
          //  header("Location:ticket.php");
             $sesioniniciada=true; //SI SE CUMPLE LA COINCIDENCIA
            session_start(); //INICIO DE SESION
            $_SESSION['ID']=$usuarios_ID; //VARIABLE CON LA QUE EL SISTEMA VA A IDENTIFICAR LA SESION, EN ESTE CASO POR ID
            $_SESSION['sesioniniciada']=true;
          
        //if($tipo_usuario == 'cliente'){//cliente
            //	 header("Location:adminz.php");
           // }
           // if($tipo_usuario == 'admin'){// administrador
            	 header("Location:adminz.php"); //AL INICIAR SESION A QUE ARCHIVO MANDA
            	 
            }
        } 
    }

?>
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    

<title>Inicio Sesi&oacute;n</title>

<style type="text/css">
@import url(https://fonts.googleapis.com/css?family=Roboto:300);

.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #80bbe5;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background: #5bbbcc;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #80bbe5;
  text-decoration: none;
}
.form .register-form {
  display: none;
}
.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #EF3B3A;
}
body {
  background: #80bbe5; /* fallback for old browsers */
  background: -webkit-linear-gradient(right,#4cbaff,#4cbaff );
  background: -moz-linear-gradient(right, #4cbaff,#4cbaff );
  background: -o-linear-gradient(right, #4cbaff,#4cbaff );
  background: linear-gradient(to left, #4cbaff,#4cbaff );
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;      
}




* { margin: 0; padding: 0; }

html { height: 100%; font-size: 62.5% }



/* ==================== Form style sheet END ==================== */
.table2 {
    border-collapse: collapse;
    width: 100%;
}

.th2, .td2 {
    text-align: left;
    padding: 8px;
}

.tr2:nth-child(even){background-color: #f2f2f2}

.th2 {
    background-color: #2a78dc;
    color: white;
}
.th3 {
    background-color: #f60c0c;
    color: white;
}
.th4 {
    background-color: #0cf627;
    color: white;
}
.th22{
  font-size: 14px;
}
</style>
<style>
    body{
    background-color:#40E0D0;
}
</style>
<!--[if IE]>
<style type="text/css">

/* ==================== Form style sheet for IE ==================== */

fieldset { padding: 22px 17px 12px 17px; position: relative; margin: 12px 0 34px 0; }
legend { position: absolute; top: -12px; left: 10px; }
label.float { margin: 5px 0 0 0; }
label { margin: 0 0 5px 0; }
label.spam-protection { display: inline; width: auto; position: relative; top: -3px; }
input.choose { border: 0; margin: 0; }
input.submit-button { margin: -10px 0 0 0; }

/* ==================== Form style sheet for IE end ==================== */

</style>
<![endif]-->
</head>

<!--FORMULARIO PARA INICIO DE SESION-->
<body>
<div align="left"> <h1></h1></div>

<div class="login-page">
  <div class="form">
    <form class="login-form" action="" method="post"> <!--ACCION QUE TENDRA EL FORMULARIO-->
    <img height="80" class="img-responsive logo" src="http://anevi.com/QASMS/images/index/login.jpg" > <!--IMAGEN FORMULARIO INICIO SESION-->
    <br>
      <input type="text" name="correo" placeholder="correo"/> <!--CAMPO USUARIO PARA INCIAR SESION-->
      <input type="password" name="psw" placeholder="contrasena"/><!--CAMPO CONTRASENA PARA INICAR SESION-->
      
      <button type="submit" name="login">Iniciar Sesi&oacute;n</button> <!--BOTON QUE CORRERA CODIGO PARA INCIAR SESION-->
    </form>
    <br>
     <!--<a class="th22" href="https://mototli.com/recuperacion.php?mos=1">&#191;Olvidaste tu contrase&#241;a?</a>-->
  </div>
  
</div>

</body>
</html>