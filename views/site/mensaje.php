<?php

use app\components\Mensaje;

echo Mensaje::widget([
    "titulo"=>$titulo,
    "texto"=>$texto
]);