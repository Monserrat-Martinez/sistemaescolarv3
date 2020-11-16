<?php
use Illuminate\Database\Capsule\Manager as DB;

require __DIR__ . '\config\database.php';
require __DIR__ . '\vendor\autoload.php';

DB::table('calificaciones')
->where('idcalificaciones', $_GET['id'])
->delete();

echo "se elimino la calificacion con el id: {$_GET['id']}
<a class='button' href='consultar.php'>REGRESAR</a>";
?>
