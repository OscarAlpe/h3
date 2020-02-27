<?php

namespace app\components;

use yii\base\Widget;
use yii\helpers\Html;

class Mensaje1 extends Widget {
    public $titulo;
    public $pie;
    
    public function init() {
        parent::init();
        
        echo "<div><div><h1>$this->titulo</h1></div><div>";
    }
    
    public function run() {
        return "</div><div>$this->pie</div></div>";
    }
}
