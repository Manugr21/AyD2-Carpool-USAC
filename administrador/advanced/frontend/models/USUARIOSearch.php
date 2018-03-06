<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\USUARIO;

/**
 * USUARIOSearch represents the model behind the search form about `app\models\USUARIO`.
 */
class USUARIOSearch extends USUARIO
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'TIPO_USUARIO_ID'], 'integer'],
            [['CUI', 'REGISTRO'], 'number'],
            [['NOMBRE', 'APELLIDO', 'PASSWORD'], 'safe'],
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
        $query = USUARIO::find();

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
            'CUI' => $this->CUI,
            'REGISTRO' => $this->REGISTRO,
            'TIPO_USUARIO_ID' => $this->TIPO_USUARIO_ID,
        ]);

        $query->andFilterWhere(['like', 'NOMBRE', $this->NOMBRE])
            ->andFilterWhere(['like', 'APELLIDO', $this->APELLIDO])
            ->andFilterWhere(['like', 'PASSWORD', $this->PASSWORD]);

        return $dataProvider;
    }
}
