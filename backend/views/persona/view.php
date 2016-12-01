<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Persona */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Personas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="persona-view">

    <h1><?= 'DEPARTAMENTO: '.yii\helpers\ArrayHelper::getValue(common\models\Departamento::findOne(['id'=>$model->departamento_id]), 'nombre') ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            //'departamento_id',
             [
                'label' => 'Usuario',
                'attribute'=>'nombres',
                'value'=> yii\helpers\ArrayHelper::getValue(dektrium\user\models\User::findOne(['id'=>$model->id]), 'username'),         
            ],
            'apellidos',
            'cedula',
        ],
    ]) ?>
    
    
    <?= 'Total de consumo: $'. round(common\models\Producto::find()->where(['persona_id'=>$model->nombres])->sum('precio'), 2)   ?><br>

</div>
