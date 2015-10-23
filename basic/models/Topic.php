<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pre_topic".
 *
 * @property string $topic_id
 * @property string $blog_id
 * @property string $user_id
 * @property string $topic_type
 * @property string $topic_title
 * @property string $topic_tags
 * @property string $topic_date_add
 * @property string $topic_date_edit
 * @property string $topic_user_ip
 * @property integer $topic_publish
 * @property integer $topic_publish_draft
 * @property integer $topic_publish_index
 * @property double $topic_rating
 * @property string $topic_count_vote
 * @property integer $topic_count_vote_up
 * @property integer $topic_count_vote_down
 * @property integer $topic_count_vote_abstain
 * @property string $topic_count_read
 * @property string $topic_count_comment
 * @property string $topic_count_favourite
 * @property string $topic_cut_text
 * @property integer $topic_forbid_comment
 * @property string $topic_text_hash
 *
 * @property PreBlog $blog
 * @property PreUser $user
 * @property PreTopicContent $preTopicContent
 * @property PreTopicPhoto[] $preTopicPhotos
 * @property PreTopicQuestionVote[] $preTopicQuestionVotes
 * @property PreUser[] $userVoters
 * @property PreTopicRead[] $preTopicReads
 * @property PreUser[] $users
 * @property PreTopicTag[] $preTopicTags
 */
class Topic extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pre_topic';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['blog_id', 'user_id', 'topic_title', 'topic_tags', 'topic_date_add', 'topic_user_ip', 'topic_text_hash'], 'required'],
            [['blog_id', 'user_id', 'topic_publish', 'topic_publish_draft', 'topic_publish_index', 'topic_count_vote', 'topic_count_vote_up', 'topic_count_vote_down', 'topic_count_vote_abstain', 'topic_count_read', 'topic_count_comment', 'topic_count_favourite', 'topic_forbid_comment'], 'integer'],
            [['topic_type'], 'string'],
            [['topic_date_add', 'topic_date_edit'], 'safe'],
            [['topic_rating'], 'number'],
            [['topic_title'], 'string', 'max' => 200],
            [['topic_tags'], 'string', 'max' => 250],
            [['topic_user_ip'], 'string', 'max' => 20],
            [['topic_cut_text'], 'string', 'max' => 100],
            [['topic_text_hash'], 'string', 'max' => 32]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'topic_id' => Yii::t('app', 'Topic ID'),
            'blog_id' => Yii::t('app', 'Blog ID'),
            'user_id' => Yii::t('app', 'User ID'),
            'topic_type' => Yii::t('app', 'Topic Type'),
            'topic_title' => Yii::t('app', 'Topic Title'),
            'topic_tags' => Yii::t('app', 'Topic Tags'),
            'topic_date_add' => Yii::t('app', 'Topic Date Add'),
            'topic_date_edit' => Yii::t('app', 'Topic Date Edit'),
            'topic_user_ip' => Yii::t('app', 'Topic User Ip'),
            'topic_publish' => Yii::t('app', 'Topic Publish'),
            'topic_publish_draft' => Yii::t('app', 'Topic Publish Draft'),
            'topic_publish_index' => Yii::t('app', 'Topic Publish Index'),
            'topic_rating' => Yii::t('app', 'Topic Rating'),
            'topic_count_vote' => Yii::t('app', 'Topic Count Vote'),
            'topic_count_vote_up' => Yii::t('app', 'Topic Count Vote Up'),
            'topic_count_vote_down' => Yii::t('app', 'Topic Count Vote Down'),
            'topic_count_vote_abstain' => Yii::t('app', 'Topic Count Vote Abstain'),
            'topic_count_read' => Yii::t('app', 'Topic Count Read'),
            'topic_count_comment' => Yii::t('app', 'Topic Count Comment'),
            'topic_count_favourite' => Yii::t('app', 'Topic Count Favourite'),
            'topic_cut_text' => Yii::t('app', 'Topic Cut Text'),
            'topic_forbid_comment' => Yii::t('app', 'Topic Forbid Comment'),
            'topic_text_hash' => Yii::t('app', 'Topic Text Hash'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBlog()
    {
        return $this->hasOne(Blog::className(), ['blog_id' => 'blog_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['user_id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTopicContent()
    {
        return $this->hasOne(TopicContent::className(), ['topic_id' => 'topic_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPreTopicPhotos()
    {
        return $this->hasMany(PreTopicPhoto::className(), ['topic_id' => 'topic_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPreTopicQuestionVotes()
    {
        return $this->hasMany(PreTopicQuestionVote::className(), ['topic_id' => 'topic_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserVoters()
    {
        return $this->hasMany(PreUser::className(), ['user_id' => 'user_voter_id'])->viaTable('pre_topic_question_vote', ['topic_id' => 'topic_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPreTopicReads()
    {
        return $this->hasMany(PreTopicRead::className(), ['topic_id' => 'topic_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(User::className(), ['user_id' => 'user_id'])->viaTable('pre_topic_read', ['topic_id' => 'topic_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPreTopicTags()
    {
        return $this->hasMany(PreTopicTag::className(), ['topic_id' => 'topic_id']);
    }
	
	public function getComment()
    {
        return $this->hasMany(Comment::className(), ['target_id' => 'topic_id'])->where(['target_type'=>'topic']);
    }
	
	public function getCommentCount()
    {
        return $this->hasMany(Comment::className(), ['target_id' => 'topic_id'])->where(['target_type'=>'topic'])->count();
    }
}
