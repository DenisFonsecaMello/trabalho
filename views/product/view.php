<?php
use yii\helpers\Html;
/* @var $this yii\web\View */
?>
<h1>Produto</h1>
<p>
        <?= Html::a('Voltar', ['index'], ['class' => 'btn btn-success']) ?>
</p>
 

    <div class="col-md-3">
       <img src="<?php echo $produtos ->image ?>" class="img-responsive" />
        <h2><?php echo $produtos->model ?></h2>
        <h3>R$ <?php echo number_format($produtos->price,2,',','.') ?></h3>
        <h4>Estoque:<?php echo $produtos->quantity ?></h4>
        <h5>Entrega:<?php if ($produtos->shipping==1){
            echo 'requer a entrega';
        }else{
            echo 'não requer a entrega';
        }?></h5>
        
        <h6><?php echo date('d/m/Y', strtotime($produtos->date_available)) ?></h6><br>
        <h7>Peso:<?php echo number_format($produtos->weight,2,'.','.')  ?></h7><br>
        <h8>Comprimento:<?php echo number_format($produtos->length,2,'.','.')  ?></h8><br>
        <h9>Largura:<?php echo number_format($produtos->width,2,'.','.')?></h9><br>
        <h10>Altura:<?php echo number_format($produtos->height,2,'.','.')?></h10><br>
        <h11>Ordem de Classificação:<?php echo $produtos->sort_order ?></h11><br>
        <h12>Status:<?php echo $produtos->status ?></h12><br>
        <h13>Visto:<?php echo $produtos->viewed ?></h13><br>
        <h14>Data Adicionado: <?php echo date('d/m/Y', strtotime($produtos->date_added)) ?></h14><br>
        <h15>Data de Modificação: <?php echo date('d/m/Y', strtotime($produtos->date_modified)) ?></h15>
       
        <div class="row"><?php echo $produtos->viewed ?></div>
        
    </div>
   
