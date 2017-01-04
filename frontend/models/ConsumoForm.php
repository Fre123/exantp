<?php

namespace frontend\models;

use frontend\models\Bebidas;
use yii\base\Model;
use Yii;

/**
 * This is the model class for table "consumo".
 *
 * @property integer $IDCONSUMO
 * @property integer $IDPERSONA
 * @property string $DESCONSUMO
 * @property double $PRECIOCONSUMO
 *
 * @property Persona $iDPERSONA
 */


class ConsumoForm extends model
{

    public $idPersona;
    public $bebida;
    public $consumido;


    public function rules()
    {
        return [
        //  [['consumido'], 'number'],

        ];
    }


    public function attributeLabels()
    {
        return [
            //'idPersona' => 'Persona',
            'bebida' => 'Bebida',
            'consumido' => 'Precio',

        ];
    }


}
