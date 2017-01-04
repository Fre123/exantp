<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\bootstrap\ActiveForm;
use frontend\models\Bebidas;
use frontend\models\ConsumoForm;
use bookin\aws\checkbox\AwesomeCheckbox;

$this->title = 'Consumos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-consumoForm">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Bebidas saludables:</p>
<!--https://packagist.org/packages/bookin/yii2-awesome-bootstrap-checkbox  google maps  https://github.com/2amigos/yii2-google-maps-library-->
    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                <!--?= $form->field($model, 'bebida')->textInput(['autofocus' => true]) ?-->


                <!--?php
                $rows = (new \yii\db\Query())->select('*')->from('bebidas')->limit(10)->all();
                //foreach ( $rows as  $value) {
                //  $v = $value['idBebida'].'.'. $value['descripcionBebida'].'<strong>$ '.$value['precio'].'</strong>';
                //  echo AwesomeCheckbox::widget([
                //    'name'=> 'test',
                //    'type'=>AwesomeCheckbox::TYPE_CHECKBOX,
                //    'style'=>AwesomeCheckbox::STYLE_PRIMARY,
                //    'options'=>[
                //      'label'=>$v
                //    ]
                //  ]);
                //}
                //?-->

              <?php
                $rows = (new \yii\db\Query())->select('*')->from('bebidas')->limit(10)->all();
                $ro = ArrayHelper::map(Bebidas::find()->all(), 'idBebida','descripcionBebida');
                $con = 0;
                foreach ( $rows as  $value){
                  $id[$con]= $value['idBebida'];
                  $des[$con]= $value['descripcionBebida'];
                  $precio[$con]= $value['precio'];
                  $con++;
                }

                $v = $value['idBebida'].'.'. $value['descripcionBebida'].'<strong>$ '.$value['precio'].'</strong>';

                echo $form->field($model, 'consumido')->widget(AwesomeCheckbox::classname(),[
                    'type'=>AwesomeCheckbox::TYPE_CHECKBOX, //optional string default type TYPE_CHECKBOX
                    'style'=>AwesomeCheckbox::STYLE_PRIMARY,
                    'list'=>[ // array data
                          $id[0]=> $des[0].'<strong> $ '.$precio[0].'<strong>',
                          $id[1]=> $des[1].'<strong> $ '.$precio[1].'<strong>',
                          $id[2]=> $des[2].'<strong> $ '.$precio[2].'<strong>',
                          $id[3]=> $des[3].'<strong> $ '.$precio[3].'<strong>',

                    ]
                ]);

              ?>

              <?php
              //$r = ArrayHelper::getColumn($rows, 'idBebida');
              //$r1 = ArrayHelper::getColumn($rows, 'descripcionBebida');
              //$r2 = ArrayHelper::getColumn($rows, 'precio');

              ?>



                <!--?= $form->field($model, 'consumido')->checkboxList(ArrayHelper::map(Bebidas::find()->all(), 'idBebida','descripcionBebida')) ?-->

                <!--?= $form->field($model, 'consumido')->CheckboxList($rows); ?-->




                <div class="form-group">
                    <?= Html::submitButton('Consumo', ['class' => 'btn btn-primary', 'name' => 'consumo-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
