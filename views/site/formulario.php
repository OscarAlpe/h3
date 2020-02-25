<?php

use yii\helpers\Html;

echo Html::beginForm(['site/formulario'], 'post');
echo Html::beginTag('div', ['class' => 'form-group']);
echo Html::label('Nombre', 'iusuario', ['class' => 'control-label']);
echo Html::input('text', 'usuario', '', ['id' => 'iusuario', 'class' => 'form-control']);
echo Html::endTag('div');
echo Html::submitButton('Enviar', ['class' => 'btn btn-info']);
echo Html::endForm();