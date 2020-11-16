<?php
require 'header.php';
use Illuminate\Database\Capsule\Manager as DB;

require __DIR__ . '\config\database.php';
require __DIR__ . '\vendor\autoload.php';

$error = $usuario = $pass = "";

if (isset($_POST['usuario']))
{
    $usuario = $_POST['usuario'];
    $pass = $_POST['pass'];

    if ($usuario == "" || $pass == "")
    {
        $error = 'no se ingresaron los datos';
    }
    else
    {
        $user = DB::table('login')->where('user', $_POST['usuario'])->first();
        $mensaje = '';
        if($user->pass == $_POST['pass'])
        {
            $mensaje = "<h1>CONTRASEÑA CORRECTA </h1>";
            if ($usuario == 'admin@gmail.com'){
                echo '<script>alert("BIENVENIDO ADMINISTRADOR")</script> ';
                echo "<script>location.href='admin.php'</script>";
            }
            else 
            //if($usuario == 'usuario@gmail.com')
            {
                echo '<script>alert("BIENVENIDO ALUMNO")</script> ';
                echo "<script>location.href='user.php'</script>";
            }
            //else{
                //echo'<script>alert("USUARIO NO ENCONTRADO")</script>';
            //}
        }
        else
        {
            echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
            echo "<script>location.href='index.php'</script>";
            $mensaje = "<h1>CONTRASEÑA INCORRECTA </h1>";
        }
        echo $mensaje;
    }
}

echo <<<_END
<form method='post' action='login.php'>
<div class="form-group">
  <div data-role='fieldcotain'>
    <label></label>
    <span class='error'>$error</span>
  </div>
  <div data-role='fieldcontain'>
    <label></label>
    Please enter your details to log in
  </div> 
  <div class="field">
    <p class="control  has-icons-left has-icons-right">
      <input class="input" type="email"  placeholder="Email" name='usuario' value='$usuario'>
      <span class="icon is-small is-left">
        <i class="fas fa-envelope"></i>
      </span>
      <span class="icon is-small is-right">
        <i class="fas fa-check"></i>
      </span>
    </p>
  </div>
  <div class="field">
    <p class="control has-icons-left">
      <input class="input" type="password" placeholder="Password" name='pass' value='$pass'>
      <span class="icon is-small is-left">
        <i class="fas fa-lock"></i>
      </span>
    </p>
  </div>
  <div class="control">
    <button class="button is-primary" data-transition='slide' value='login'>Submit</button>
  </div>
</div>
</body>
</html>
_END;

?>