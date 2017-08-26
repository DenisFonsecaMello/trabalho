<?php

namespace app\controllers;

use app\models\Post;

class IndexController extends \yii\web\Controller
{
    public function actionContato()
    {
        return $this->render('contato');
    }

    public function actionIndex()
    {
        $post =  Post::find()->one();
        
        $titulo = $post->title;
        $texto = $post->text;
        
        return $this -> render('index', array(
            'titulo' => $titulo,
            'texto' => $texto,
        ));
    }

    public function actionSobre()
    {
        return $this->render('sobre');
    }

}
