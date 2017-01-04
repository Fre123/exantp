<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "persona".
 *
 * @property integer $IDPERSONA
 * @property integer $IDDEPARTAMENTO
 * @property double $SALDOPAGAR
 *
 * @property Consumo[] $consumos
 * @property Ddepartamento $iDDEPARTAMENTO
 */
class Persona extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'persona';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IDPERSONA'], 'required'],
            [['IDPERSONA', 'IDDEPARTAMENTO'], 'integer'],
            [['SALDOPAGAR'], 'number'],
            //[['IDDEPARTAMENTO'], 'exist', 'skipOnError' => true, 'targetClass' => Ddepartamento::className(), 'targetAttribute' => ['IDDEPARTAMENTO' => 'IDDEPARTAMENTO']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IDPERSONA' => 'Idpersona',
            'IDDEPARTAMENTO' => 'Iddepartamento',
            'SALDOPAGAR' => 'Saldopagar',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getConsumos()
    {
        return $this->hasMany(Consumo::className(), ['IDPERSONA' => 'IDPERSONA']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIDDEPARTAMENTO()
    {
        return $this->hasOne(Ddepartamento::className(), ['IDDEPARTAMENTO' => 'IDDEPARTAMENTO']);
    }
}
