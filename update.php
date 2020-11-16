<?php
use Illuminate\Database\Capsule\Manager as DB;

require __DIR__ . '\config\database.php';
require __DIR__ . '\vendor\autoload.php';

DB::table('calificaciones')
->where('idcalificaciones', $_POST['idcalificaciones'])
->update(['calificacion' => $_POST['calificacion']]);

echo "se actualizo la calificacion con el id:{$_POST['idcalificaciones']}
<a class='button' href='consultar.php'>REGRESAR</a>";
?>