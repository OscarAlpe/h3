<?php

use yii\helpers\Html;

?>

<p>Has introducido la siguiente información</p>

<ul>
    <li><label>Nombre</label>: <?= Html::encode($model->nombre) ?></li>
    <li><label>Apellidos</label>: <?= Html::encode($model->apellidos) ?></li>
    <li><label>Edad</label>: <?= Html::encode($model->edad) ?></li>
    <li><label>Email</label>: <?= Html::encode($model->email) ?></li>
</ul>
