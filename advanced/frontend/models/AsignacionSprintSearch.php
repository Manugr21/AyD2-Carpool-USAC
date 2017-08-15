<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\AsignacionSprint;

/**
 * AsignacionSprintSearch represents the model behind the search form about `frontend\models\AsignacionSprint`.
 */
class AsignacionSprintSearch extends AsignacionSprint
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_sprint', 'id_historia'], 'integer'],
            [['responsable'], 'safe'],
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
        $query = AsignacionSprint::find();

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
            'id_sprint' => $this->id_sprint,
            'id_historia' => $this->id_historia,
        ]);

        $query->andFilterWhere(['like', 'responsable', $this->responsable]);

        return $dataProvider;
    }
}
