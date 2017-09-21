<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Historia;

/**
 * AvanceSearch represents the model behind the search form about `frontend\models\Historia`.
 */
class AvanceSearch extends Historia
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_historia', 'id_proyecto', 'prioridad', 'dificultad'], 'integer'],
            [['nombre', 'descripcion', 'fh_creacion','fh_fin' ], 'safe'],
            [['avance'], 'number'],
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
        $query = Historia::find();

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
            'id_historia' => $this->id_historia,
            'id_proyecto' => $this->id_proyecto,
            'fh_creacion' => $this->fh_creacion,
            'prioridad' => $this->prioridad,
            'dificultad' => $this->dificultad,
            'avance' => $this->avance,
            'fh_fin' => $this->fh_fin,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'descripcion', $this->descripcion]);

        return $dataProvider;
    }
}
