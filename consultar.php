<?php
require 'header.php';
use Illuminate\Database\Capsule\Manager as DB;

require __DIR__ . '\config\database.php';
require __DIR__ . '\vendor\autoload.php';


$promedio = DB::table('calificaciones')->avg('calificacion');
$promedio = number_format($promedio,1);



$users = DB::table('login')
->select('user')
->get();

$calificaciones = DB::table('calificaciones')
->select('calificacion','idcalificaciones')
->get();

echo <<<_TABLE
<table class="table">
<thead>
    <tr>
        <th>ALUMNO</th>
    </tr>
</thead>
<tfoot>
    <tr>
        <th>PROMEDIO</th>
        <th>$promedio</th>
        <th></th>
    </tr>
</tfoot>
<tbody>
_TABLE;

foreach($users as $fila){
echo <<<_ROW
    <tr>
        <th>$fila->user</th>
    </tr>
_ROW;
}

echo "</tbody></table>";

echo <<<_TABLE
<table class="table">
<thead>
    <tr>
        <th></th>
        <th>calificacion</th>
    </tr>
</thead>
<tbody>
_TABLE;


foreach($calificaciones as $fila){
echo <<<_ROW
    <tr>
        <th></th>
        <td><center>$fila->calificacion</center></td>
        <td><a class='button' href='delete.php?id={$fila->idcalificaciones}'>ELIMINAR</a></td>
        <td>
            <form action "update.php" method="post">
                <input id="idcalificaciones" type="text" name="idcalificaciones" 
                value="{$fila->idcalificaciones}" hidden>
                <input id="calificacion" type="text" name="calificacion" size="3">
                <input class="button" type="submit" value="ACTUALIZAR">
            </form>
        </td>
    </tr>
_ROW;

}
echo "</tbody></table>
<a class='button' href='header2.php'>REGRESAR</a>";