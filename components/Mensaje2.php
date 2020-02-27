<?php

namespace app\components;

use yii\base\Widget;
use yii\helpers\Html;

/**
 * Description of Mensaje2
 *
 * @author Oscar
 */
class Mensaje2 extends Widget {
    public $titulo;
    public $contenido;
    
    public function init() {
        parent::init();
    }
    
    public function run() {
        $this->titulo = strtoupper($this->titulo);
        return $this->render("mensaje2",[
            "titulo"=> $this->titulo,
            "contenido"=> $this->contenido
        ]);
    }
}
