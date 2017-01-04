<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\bebidas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bebidas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'descripcionBebida')->textInput(['maxlength' => true]) ?>

    

  
    <?= $form->field($model, 'precio')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
