<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Comment;

/**
 * CommentSearch represents the model behind the search form about `app\models\Comment`.
 */
class CommentSearch extends Comment
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['comment_id', 'comment_pid', 'comment_left', 'comment_right', 'comment_level', 'target_id', 'target_parent_id', 'user_id', 'comment_count_vote', 'comment_count_favourite', 'comment_delete', 'comment_publish'], 'integer'],
            [['target_type', 'comment_text', 'comment_text_hash', 'comment_date', 'comment_user_ip'], 'safe'],
            [['comment_rating'], 'number'],
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
        $query = Comment::find();

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
            'comment_id' => $this->comment_id,
            'comment_pid' => $this->comment_pid,
            'comment_left' => $this->comment_left,
            'comment_right' => $this->comment_right,
            'comment_level' => $this->comment_level,
            'target_id' => $this->target_id,
            'target_parent_id' => $this->target_parent_id,
            'user_id' => $this->user_id,
            'comment_date' => $this->comment_date,
            'comment_rating' => $this->comment_rating,
            'comment_count_vote' => $this->comment_count_vote,
            'comment_count_favourite' => $this->comment_count_favourite,
            'comment_delete' => $this->comment_delete,
            'comment_publish' => $this->comment_publish,
        ]);

        $query->andFilterWhere(['like', 'target_type', $this->target_type])
            ->andFilterWhere(['like', 'comment_text', $this->comment_text])
            ->andFilterWhere(['like', 'comment_text_hash', $this->comment_text_hash])
            ->andFilterWhere(['like', 'comment_user_ip', $this->comment_user_ip]);

        return $dataProvider;
    }
}
