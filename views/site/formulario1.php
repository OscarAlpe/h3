<?php

use yii\helpers\Url;

?>

<form method="post" action="<?= yii\helpers\Url::to(['site/formulario']) ?>">
    <div class="form-group">
        <label for="iusuario">Nombre</label>
        <input type="text" class="form-control" id="iusuario" name="iusuario">
    </div>
    <button class="btn btn-info">Enviar</button>
</form>