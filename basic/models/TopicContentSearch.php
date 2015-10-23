<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TopicContent;

/**
 * TopicContentSearch represents the model behind the search form about `app\models\TopicContent`.
 */
class TopicContentSearch extends TopicContent
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['topic_id'], 'integer'],
            [['topic_text', 'topic_text_short', 'topic_text_source', 'topic_extra'], 'safe'],
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
        $query = TopicContent::find();

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
            'topic_id' => $this->topic_id,
        ]);

        $query->andFilterWhere(['like', 'topic_text', $this->topic_text])
            ->andFilterWhere(['like', 'topic_text_short', $this->topic_text_short])
            ->andFilterWhere(['like', 'topic_text_source', $this->topic_text_source])
            ->andFilterWhere(['like', 'topic_extra', $this->topic_extra]);

        return $dataProvider;
    }
}
