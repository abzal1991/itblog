<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Subscribe;

/**
 * SubscribeSearch represents the model behind the search form about `app\models\Subscribe`.
 */
class SubscribeSearch extends Subscribe
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'target_id', 'status'], 'integer'],
            [['target_type', 'mail', 'date_add', 'date_remove', 'ip', 'key'], 'safe'],
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
        $query = Subscribe::find();

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
            'id' => $this->id,
            'target_id' => $this->target_id,
            'date_add' => $this->date_add,
            'date_remove' => $this->date_remove,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'target_type', $this->target_type])
            ->andFilterWhere(['like', 'mail', $this->mail])
            ->andFilterWhere(['like', 'ip', $this->ip])
            ->andFilterWhere(['like', 'key', $this->key]);

        return $dataProvider;
    }
}
