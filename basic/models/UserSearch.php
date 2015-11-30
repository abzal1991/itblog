<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\User;

/**
 * UserSearch represents the model behind the search form about `app\models\User`.
 */
class UserSearch extends User
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'user_count_vote', 'user_activate', 'user_settings_notice_new_topic', 'user_settings_notice_new_comment', 'user_settings_notice_new_talk', 'user_settings_notice_reply_comment', 'user_settings_notice_new_friend'], 'integer'],
            [['user_login', 'user_password', 'user_mail', 'user_date_register', 'user_date_activate', 'user_date_comment_last', 'user_ip_register', 'user_activate_key', 'user_profile_name', 'user_profile_sex', 'user_profile_country', 'user_profile_region', 'user_profile_city', 'user_profile_birthday', 'user_profile_about', 'user_profile_date', 'user_profile_avatar', 'user_profile_foto', 'user_settings_timezone'], 'safe'],
            [['user_skill', 'user_rating'], 'number'],
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
        $query = User::find();

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
            'user_id' => $this->user_id,
            'user_skill' => $this->user_skill,
            'user_date_register' => $this->user_date_register,
            'user_date_activate' => $this->user_date_activate,
            'user_date_comment_last' => $this->user_date_comment_last,
            'user_rating' => $this->user_rating,
            'user_count_vote' => $this->user_count_vote,
            'user_activate' => $this->user_activate,
            'user_profile_birthday' => $this->user_profile_birthday,
            'user_profile_date' => $this->user_profile_date,
            'user_settings_notice_new_topic' => $this->user_settings_notice_new_topic,
            'user_settings_notice_new_comment' => $this->user_settings_notice_new_comment,
            'user_settings_notice_new_talk' => $this->user_settings_notice_new_talk,
            'user_settings_notice_reply_comment' => $this->user_settings_notice_reply_comment,
            'user_settings_notice_new_friend' => $this->user_settings_notice_new_friend,
        ]);

        $query->andFilterWhere(['like', 'user_login', $this->user_login])
            ->andFilterWhere(['like', 'user_password', $this->user_password])
            ->andFilterWhere(['like', 'user_mail', $this->user_mail])
            ->andFilterWhere(['like', 'user_ip_register', $this->user_ip_register])
            ->andFilterWhere(['like', 'user_activate_key', $this->user_activate_key])
            ->andFilterWhere(['like', 'user_profile_name', $this->user_profile_name])
            ->andFilterWhere(['like', 'user_profile_sex', $this->user_profile_sex])
            ->andFilterWhere(['like', 'user_profile_country', $this->user_profile_country])
            ->andFilterWhere(['like', 'user_profile_region', $this->user_profile_region])
            ->andFilterWhere(['like', 'user_profile_city', $this->user_profile_city])
            ->andFilterWhere(['like', 'user_profile_about', $this->user_profile_about])
            ->andFilterWhere(['like', 'user_profile_avatar', $this->user_profile_avatar])
            ->andFilterWhere(['like', 'user_profile_foto', $this->user_profile_foto])
            ->andFilterWhere(['like', 'user_settings_timezone', $this->user_settings_timezone]);

        return $dataProvider;
    }
}
