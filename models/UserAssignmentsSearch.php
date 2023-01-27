<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\UserAssignments;

/**
 * UserAssignmentsSearch represents the model behind the search form of `app\models\UserAssignments`.
 */
class UserAssignmentsSearch extends UserAssignments
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'type', 'feature_id', 'user_id', 'build_id', 'assigner_id', 'status'], 'integer'],
            [['deadline_ts', 'creation_ts'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = UserAssignments::find();

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
            'id' => $this->id,
            'type' => $this->type,
            'feature_id' => $this->feature_id,
            'user_id' => $this->user_id,
            'build_id' => $this->build_id,
            'deadline_ts' => $this->deadline_ts,
            'assigner_id' => $this->assigner_id,
            'creation_ts' => $this->creation_ts,
            'status' => $this->status,
        ]);

        return $dataProvider;
    }
}
