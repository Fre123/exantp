<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Bebidas;

/**
 * BebidasSearch represents the model behind the search form about `frontend\models\bebidas`.
 */
class BebidasSearch extends bebidas
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idBebida'], 'integer'],
            [['descripcionBebida'], 'safe'],
            [['precio'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = bebidas::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'idBebida' => $this->idBebida,
            'precio' => $this->precio,
        ]);

        $query->andFilterWhere(['like', 'descripcionBebida', $this->descripcionBebida]);

        return $dataProvider;
    }
}
