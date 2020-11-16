<?php
require 'header2.php';

use Illuminate\Database\Capsule\Manager as DB;

require 'config\database.php';
require 'vendor\autoload.php';

$mensaje = '';
if (isset($_POST['calif']))
{
    $calif = $_POST['calif'];
    if ($calif == "")
    {
        echo '<script>alert("AGREGAR CALIFICACION")</script> ';
        $mensaje = 'agregar calificacion';
    }
    else{
        DB::table('calificaciones')->insert(['calificacion' => $_POST['calif']]);
        echo '<script>alert("DATOS GUARDADOS")</script> ';
        $mensaje = "<h1></h1><br><a href='admin.php'>Regresar</a>";
    }
}

echo $mensaje;

echo <<<_END
<form method='post' action='admin.php'>
<div class="field">
  <label class="label">CALIFICACIÓN</label>
  <div class="control">
    <input class="input" type="text" name="calif">
  </div>
</div>

<div class="control">
  <button class="button is-primary" data-transition='slide'>Submit</button>
</div>

_END;
?>