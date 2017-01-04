<?php

namespace frontend\models;

use backend\models\Personas
use Yii;

/**
 * This is the model class for table "personas".
 *
 * @property integer $id_persona
 * @property string $nombre_persona
 * @property string $fecha
 *
 * @property Libros[] $libros
 */
class Personas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'personas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_persona', 'fecha'], 'required'],
            [['id_persona'], 'integer'],
            [['fecha'], 'safe'],
            [['nombre_persona'], 'string', 'max' => 40],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_persona' => 'Id Persona',
            'nombre_persona' => 'Nombre Persona',
            'fecha' => 'Fecha',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLibros()
    {
        return $this->hasMany(Libros::className(), ['id_persona' => 'id_persona']);
    }
}
