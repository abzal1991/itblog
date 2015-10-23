<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Topic;

/**
 * TopicSearch represents the model behind the search form about `app\models\Topic`.
 */
class TopicSearch extends Topic
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['topic_id', 'blog_id', 'user_id', 'topic_publish', 'topic_publish_draft', 'topic_publish_index', 'topic_count_vote', 'topic_count_vote_up', 'topic_count_vote_down', 'topic_count_vote_abstain', 'topic_count_read', 'topic_count_comment', 'topic_count_favourite', 'topic_forbid_comment'], 'integer'],
            [['topic_type', 'topic_title', 'topic_tags', 'topic_date_add', 'topic_date_edit', 'topic_user_ip', 'topic_cut_text', 'topic_text_hash'], 'safe'],
            [['topic_rating'], 'number'],
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
        $query = Topic::find();

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
            'blog_id' => $this->blog_id,
            'user_id' => $this->user_id,
            'topic_date_add' => $this->topic_date_add,
            'topic_date_edit' => $this->topic_date_edit,
            'topic_publish' => $this->topic_publish,
            'topic_publish_draft' => $this->topic_publish_draft,
            'topic_publish_index' => $this->topic_publish_index,
            'topic_rating' => $this->topic_rating,
            'topic_count_vote' => $this->topic_count_vote,
            'topic_count_vote_up' => $this->topic_count_vote_up,
            'topic_count_vote_down' => $this->topic_count_vote_down,
            'topic_count_vote_abstain' => $this->topic_count_vote_abstain,
            'topic_count_read' => $this->topic_count_read,
            'topic_count_comment' => $this->topic_count_comment,
            'topic_count_favourite' => $this->topic_count_favourite,
            'topic_forbid_comment' => $this->topic_forbid_comment,
        ]);

        $query->andFilterWhere(['like', 'topic_type', $this->topic_type])
            ->andFilterWhere(['like', 'topic_title', $this->topic_title])
            ->andFilterWhere(['like', 'topic_tags', $this->topic_tags])
            ->andFilterWhere(['like', 'topic_user_ip', $this->topic_user_ip])
            ->andFilterWhere(['like', 'topic_cut_text', $this->topic_cut_text])
            ->andFilterWhere(['like', 'topic_text_hash', $this->topic_text_hash]);

        return $dataProvider;
    }
}
