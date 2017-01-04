<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "departamento".
 *
 * @property integer $IDDEPARTAMENTO
 * @property string $NOMBREDEPA
 *
 * @property Persona[] $personas
 */
class Departamento extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'departamento';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IDDEPARTAMENTO'], 'required'],
            [['IDDEPARTAMENTO'], 'integer'],
            [['NOMBREDEPA'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IDDEPARTAMENTO' => 'Iddepartamento',
            'NOMBREDEPA' => 'Nombredepa',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPersonas()
    {
        return $this->hasMany(Persona::className(), ['IDDEPARTAMENTO' => 'IDDEPARTAMENTO']);
    }
}
