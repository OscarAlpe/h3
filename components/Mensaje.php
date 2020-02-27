<?php

namespace app\components;

use yii\base\Widget;
use yii\helpers\Html;

class Mensaje extends Widget {
    public $titulo;
    public $texto;
    
    public function init() {
        parent::init();
        
        if (empty($this->titulo)) {
            $this->titulo = 'Hola mundo';
            $this->texto = 'gracias';
        }
    }
    
    public function run() {
        return "<div><h2>$this->titulo</h2>$this->texto</div>";
    }
}
