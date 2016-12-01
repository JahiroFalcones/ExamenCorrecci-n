<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Producto */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Productos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="producto-view">

    <h1><?= yii\helpers\ArrayHelper::getValue(dektrium\user\models\User::findOne(['id'=>$model->persona_id ]), 'username')?></h1>



    
    <div class="row">
        <div class="col-lg-8">

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            //'persona.username',
            'producto',

            
             [
                'label' => 'Precio $',
                'attribute'=>'precio',
                'value'=> $model->precio,       
            ],            
            
            
        ],
    ]) ?>            
        </div>
        <div class="col-lg-4">
    
    <?php if($model->producto=='cafe'): ?>
    <img class=" img-responsive"  width="200px" height="200px"src="http://3.bp.blogspot.com/-QC1usims0AM/VDdgZYIWGMI/AAAAAAACumo/MnLLub8PhCI/s1600/taza_de_cafe.png"/>
    <?php endif;?>
    <?php if($model->producto=='te'): ?>
    <img  class=" img-responsive" width="200px" height="200px"src="http://ssantura.com/wp-content/uploads/revslider/Ssantura/taza.png"/>
    <?php endif;?>
    <?php if($model->producto=='agua'): ?>
    <img class=" img-responsive" width="200px" height="020px"src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Botella_de_Agua_font_vella.png/424px-Botella_de_Agua_font_vella.png"/>
    <?php endif;?>              
        </div>
    </div>
  
</div>
