<?php
$usu=$_POST['usu'];
$con=$_POST['cont'];

if ($usu == 'LCP' and $con == '123') {
    echo '<script language="javascript">alert("Usuario y Contraseña Correctos Bienvenido");window.location.href="bienvenida.html"</script>';
} else {
    echo '<script language="javascript">alert("Usuario o Contraseña incorrectos intente de nuevo");window.location.href="index.html"</script>';
    
}

?>