<?php

namespace frontend\models;

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
class Consumo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'consumo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IDCONSUMO'], 'required'],
            [['IDCONSUMO', 'IDPERSONA'], 'integer'],
            [['PRECIOCONSUMO'], 'number'],
            [['DESCONSUMO'], 'string', 'max' => 50],
            [['IDPERSONA'], 'exist', 'skipOnError' => true, 'targetClass' => Persona::className(), 'targetAttribute' => ['IDPERSONA' => 'IDPERSONA']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IDCONSUMO' => 'Idconsumo',
            'IDPERSONA' => 'Idpersona',
            'DESCONSUMO' => 'Desconsumo',
            'PRECIOCONSUMO' => 'Precioconsumo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIDPERSONA()
    {
        return $this->hasOne(Persona::className(), ['IDPERSONA' => 'IDPERSONA']);
    }
}
