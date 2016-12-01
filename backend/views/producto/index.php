<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ProductoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Productos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="producto-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            [
                'attribute' => 'persona_id',
                'value' => 'persona.username',
            ],            
            //'producto',
            

            'precio',

            ['class' => yii\grid\ActionColumn::className(),'template'=>'{view}' ]
        ],
    ]); ?>
    
    
    <?= '<strong>'.'Total de ventas: $'. round(common\models\Producto::find()->sum('precio'), 2).'</strong>'   ?>
    
</div>
