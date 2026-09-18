<?php
function usuarioController(){
    echo "6. Controller recebeu a requisição.<br>";
    $usuarios = usuarioService();
    echo "8. controller recebeu os dados do service.<br>";
    echo "Usuarios encontrados: <br>";
    foreach($usuarios as $usuarios){
        echo "-". $usuarios . "<br>";
    }
}