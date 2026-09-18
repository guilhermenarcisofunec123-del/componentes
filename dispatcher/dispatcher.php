<?php
function dispatcher($rota){
    echo "5. dispatcher decidiu qual controller deve executar. <br>";
    if($rota == "/usuarios"){
        usuarioController();
    }
}