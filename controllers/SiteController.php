<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * @inheritdoc
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
     * @inheritdoc
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

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        date_default_timezone_set('America/Sao_Paulo');
        $titulo = "Super TADS Aula YII2";
        $ano = Date("d/m/Y H:i:s");
        
        $titulo1 = "Atos aposta em Londrina como polo de inovação e tecnologia ";
        $texto1 = "Com quatro anos de existência, sede no Paraná cresce para se tornar principal centro de operações do grupo na América do Sul. São Paulo, 08 de maio de 2017 – A Atos, líder internacional em serviços digitais, está transformando o site de Londrina (PR) em seu principal Centro de Inovação e Tecnologia na América do Sul. 
";
        
        $titulo2 = "Tecnologia oferece 'feedback tátil' a pessoas que usam próteses";
        $texto2 = "Pesquisadores da Universidade de Rice, da Universidade de Pisa e do Instituto Italiano de Tecnologia estão trabalhando em um projeto que pode ajudar pessoas amputadas a ter de volta o feedback tátil em suas próteses.";
        
        $titulo3 = "Framework que usa linguagem Go em IoT, Arduino e Raspberry Pi é lançado";
        $texto3 = "Você certamente já ouviu falar da linguagem de programação Go, uma iniciativa open source de uma equipe de desenvolvimento do Google, com o objetivo de criar uma linguagem que poderia otimizar processos no desenvolvimento de produtos da empresa. O que você pode não conhecer é um framework baseado nessa linguagem voltado para robótica e aplicações IoT. Chamado de Gobot, ele permite que você controle vários dispositivos baseados em placa como Arduino, BeagleBone, Raspberry e mais.";
        
        
        
        return $this->render('index', array(
                                          'titulo' => $titulo,
                                           'ano' => $ano,
                                           
                                           'titulo1' => $titulo1,
                                           'texto1' => $texto1,
            
                                            'titulo2' => $titulo2,
                                            'texto2' => $texto2,
            
                                            'titulo3' => $titulo3,
                                            'texto3' => $texto3,
                
                                            )
                            );
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
}
