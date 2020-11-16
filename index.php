<?php
  require_once 'header.php';
  //require_once 'log.php';
  
  echo "<div align= center class='center'>Bienvenido ";
  

  //if ($loggedin) echo "$user, you are logged in";
  //else           echo 'Por favor registrate o inicia sesión';

echo <<<_END
      </div><br>
    </div>
    <div align= "center" id='derechos' data-role="footer">
      <h4>Web App from <i><a href= 'http://localhost/sistemaescolarv3'
      target='_blank'>Web develomped</a></i></h4>
      <h4>Hecho en Mexico. CBTIS 253 todos los derechos reservados</h4>
      <h4>Esta pagina puede ser reproducida con fines no lucrativos siempre</h4>
      <h4>y cuando no se mutile, se cite la fuente completa y su direccion electronica</h4>
    </div>
  </body>
</html>
_END;
T_END_HEREDOC;
?>