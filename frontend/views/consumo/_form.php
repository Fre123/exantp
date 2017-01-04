<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Consumo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="consumo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'IDCONSUMO')->textInput() ?>

    <?= $form->field($model, 'IDPERSONA')->textInput() ?>

    <?= $form->field($model, 'DESCONSUMO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PRECIOCONSUMO')->textInput() ?>

  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
