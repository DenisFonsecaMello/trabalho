<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */


$this->params['breadcrumbs'][] = $this->title;
?>
<h1><i><u>Lista de Produtos</u></i></h1>
 <p>
        <?= Html::a('Adicionar Produto', ['create'], ['class' => 'btn btn-success']) ?>
</p>
   


<?php foreach ($produtos as $key => $produto): ?>
	<div class="col-md-3">
		<img src="<?php echo $produto->image?> "class= "img-responsive"/>
		<h2><?php echo $produto->model ?></h2>
	    <h3><?php echo number_format($produto->price,2,',','.') ?></h3>
		<a href="index.php?r=product/view&id=<?php echo $produto->id?>">Ver Produto</a>
	</div>

<?php endforeach ?>
<div class=""></div>
<div class="row"></div>

<p>
<div class="product-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

   
  
    <?= GridView::widget([
         'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'model',
            'quantity',
            'image',
            'shipping',
            // 'price',
            // 'date_available',
            // 'weight',
            // 'length',
            // 'width',
            // 'height',
            // 'sort_order',
            // 'status',
            // 'viewed',
            // 'date_added',
            // 'date_modified',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

