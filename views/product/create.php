<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Product */

$this->title = 'Adicionar Produto';

?>
 <p>
        <?= Html::a('Voltar', ['index'], ['class' => 'btn btn-success']) ?>
</p>
<div class="product-create">

    <h1><?= Html::encode($this->title) ?></h1>
    

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?> 
    
   
    

</div>
