<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "bebidas".
 *
 * @property integer $idBebida
 * @property string $descripcionBebida
 * @property double $precio
 */
class Bebidas extends \yii\db\ActiveRecord
{
  public $idPersona;
  public $bebida;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bebidas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['descripcionBebida', 'precio'], 'required'],
            [['precio'], 'number'],
            [['descripcionBebida'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idBebida' => 'Id Bebida',
            'descripcionBebida' => 'Descripcion Bebida',
            'precio' => 'Precio',
        ];
    }
}
