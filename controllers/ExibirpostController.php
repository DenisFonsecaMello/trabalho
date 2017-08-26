<?php

namespace app\controllers;

use app\models\Post;
use Yii;
use app\models\PostSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;


class ExibirpostController extends \yii\web\Controller
{
    public function actionIndex()
    {
       $searchModel = new PostSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $post = Post::find()->all();
        return $this->render('index',array(
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'post'=> $post
        ));
    }
    
     public function actionView($id)
    {
        $post = Post::findOne($id);
    
        $post->viewed = $post->viewed + 1;
        
        //salvar
        $post->save();
        
        return $this->render('view',array(
                                        'post'=> $post
                                    )
                            );
    }

}
