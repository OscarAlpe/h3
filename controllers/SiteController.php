<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionPrueba() {
        $datos = "<script>alert('1');</script>";
        
        return $this->render("prueba",[
            "datos" => $datos
        ]);
    }
    
    public function actionFormulario() {
        if ($datos = Yii::$app->request->post()) {
            return $this->render("prueba", [
                "datos" => $datos["usuario"]
            ]);
        } else {
            return $this->render("formulario");
        }
    }
    
    public function actionUsuarios() {
        $model = new \app\models\Usuarios();
        if ($model->load(Yii::$app->request->post())) {
            return $this->render('mostrarUsuarios', ['model' => $model]);
        } else {
            return $this->render('formularioUsuarios', ['model' => $model]);
        }
    }

    public function actionIndex() {
        return $this->render("index");
    }
    
    public function actionMensaje() {
        return $this->render("mensaje",[
            "titulo"=>"Ejemplo de clase",
            "texto"=>"Texto de ejemplo"
        ]);
    }

    public function actionMensaje1() {
        return $this->render("mensaje1",[
            "titulo"=>"Ejemplo de clase",
            "pie"=>"Pie"
        ]);
    }

    public function actionMensaje2() {
        return $this->render("mensaje2",[
            "titulo"=>"Ejemplo de clase",
            "contenido"=>"Texto de ejemplo"
        ]);
    }

}
