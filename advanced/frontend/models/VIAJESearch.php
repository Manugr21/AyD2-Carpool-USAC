<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\VIAJE;

/**
 * VIAJESearch represents the model behind the search form about `app\models\VIAJE`.
 */
class VIAJESearch extends VIAJE
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'ESTADO_VIAJE_ID', 'USUARIO_ID'], 'integer'],
            [['FECHA_HORA'], 'safe'],
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
        $query = VIAJE::find();

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
            'ID' => $this->ID,
            'FECHA_HORA' => $this->FECHA_HORA,
            'ESTADO_VIAJE_ID' => $this->ESTADO_VIAJE_ID,
            'USUARIO_ID' => $this->USUARIO_ID,
        ]);

        return $dataProvider;
    }
}
