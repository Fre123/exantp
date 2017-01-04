<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Consumo;

/**
 * ConsumoSearch represents the model behind the search form about `frontend\models\Consumo`.
 */
class ConsumoSearch extends Consumo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IDCONSUMO', 'IDPERSONA'], 'integer'],
            [['DESCONSUMO'], 'safe'],
            [['PRECIOCONSUMO'], 'number'],
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
        $query = Consumo::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'IDCONSUMO' => $this->IDCONSUMO,
            'IDPERSONA' => Yii::$app->user->identity->id,
            'PRECIOCONSUMO' => $this->PRECIOCONSUMO,
        ]);

        $query->andFilterWhere(['like', 'DESCONSUMO', $this->DESCONSUMO]);

        return $dataProvider;
    }
}
