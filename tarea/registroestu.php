<?php
if(!empty($_POST["btnregistrar"])) {

if(!empty($_POST["nombres"]) and !empty($_POST["apellidos"]) and !empty($_POST["direccion"]) and !empty($_POST["telefono"]) and !empty($_POST["titulo"])) {
    echo"TODO OK";
}else{
    echo "ALGUNOS DE LOS CAMPOS ESTAN VACIOS";
}
}
?>