<?php
function middleware($rota){
    echo "3. MiddleWare está verificando a requisição.<br>";
    $permitido = true;
    if($permitido){
        echo "4. MiddleWare permitiu continuar.<br>";
        dispatcher($rota);
    } else{
        echo "4. MiddleWare bloqueou a requisição.<br>";
    }
}