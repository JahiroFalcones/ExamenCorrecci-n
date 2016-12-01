<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Producto */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="producto-form">

    <?php $form = ActiveForm::begin(); ?>



    <?= $form->field($model, 'producto')->dropDownList([ 'cafe' => 'Cafe', 'te' => 'Te', 'agua' => 'Agua', ], ['prompt' => 'Elija (No olvide revisar los precios)']) ?>
    
    
    <table class="table">
        <thead>
            <tr>
                <th>Producto</th>
                <th>Precio</th>
            </tr>
        </thead>
        
        
        <tbody>     
            <tr class="success">
                <td>Cafe <img  width="20px" height="20px"src="http://3.bp.blogspot.com/-QC1usims0AM/VDdgZYIWGMI/AAAAAAACumo/MnLLub8PhCI/s1600/taza_de_cafe.png"/></td>
                <td>$0.50</td>
            </tr>
            <tr class="active">
                <td>Te<img  width="20px" height="20px"src="http://ssantura.com/wp-content/uploads/revslider/Ssantura/taza.png"/></td>
                <td>$0.40</td>
            </tr>
            <tr class="warning">
                <td>Agua<img  width="20px" height="20px"src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Botella_de_Agua_font_vella.png/424px-Botella_de_Agua_font_vella.png"/></td>
                <td>$0.25</td>
            </tr>            
        </tbody>
        
        
        
    </table>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'COMPRAR' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success glyphicon glyphicon-ok-sign' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
