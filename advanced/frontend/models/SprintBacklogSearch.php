<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\SprintBacklog;

/**
 * SprintBacklogSearch represents the model behind the search form about `frontend\models\SprintBacklog`.
 */
class SprintBacklogSearch extends SprintBacklog
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_sprint'], 'integer'],
            [['velocidad'], 'number'],
            [['fh_inicio', 'fh_fin', 'fh_creacion', 'definicion_hecho', 'nota'], 'safe'],
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
        $query = SprintBacklog::find();

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
            'velocidad' => $this->velocidad,
            'fh_inicio' => $this->fh_inicio,
            'fh_fin' => $this->fh_fin,
            'fh_creacion' => $this->fh_creacion,
        ]);

        $query->andFilterWhere(['like', 'definicion_hecho', $this->definicion_hecho])
            ->andFilterWhere(['like', 'nota', $this->nota]);

        return $dataProvider;
    }
}
