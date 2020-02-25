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
          [['nombre','apellidos','edad','email'], 'required'],
          ['email','email'],
        ];
    }
    
    public function attibuteLabels() {
        return [
            'nombre' => 'Nombre de usuario',
        ];
    }
}
