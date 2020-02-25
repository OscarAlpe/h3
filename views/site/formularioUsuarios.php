<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'nombre') ?>

<?= $form->field($model, 'apellidos') ?>

<?= $form->field($model, 'email') ?>

<?= $form->field($model, 'edad') ?>

<div class="form-group">
    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
</div>

<?php $form = ActiveForm::end(); ?>
