<?php

namespace app\models;

use Yii;
use yii\base\Model;

class Usuarios extends Model {
    public $nombre;
    public $apellidos;
    public $edad;
    public $email;
    
    public function rules() {
        return [
          [['nombre','apellidos','edad','email'], 'required', 'message' => '{attribute} es obligatorio'],
          ['email','email', 'message' => 'Escribir correctamente el correo electronico'],
          ['edad', 'number','min'=>18, 'max'=>65,'tooBig'=>'La edad debe estar entre 18 y 65', 'tooSmall'=>'La edad debe estar entre 18 y 65']
        ];
    }
    
    public function attibuteLabels() {
        return [
            'nombre' => 'Nombre de usuario',
        ];
    }
}
