<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pre_comment".
 *
 * @property string $comment_id
 * @property string $comment_pid
 * @property integer $comment_left
 * @property integer $comment_right
 * @property integer $comment_level
 * @property string $target_id
 * @property string $target_type
 * @property integer $target_parent_id
 * @property string $user_id
 * @property string $comment_text
 * @property string $comment_text_hash
 * @property string $comment_date
 * @property string $comment_user_ip
 * @property double $comment_rating
 * @property string $comment_count_vote
 * @property string $comment_count_favourite
 * @property integer $comment_delete
 * @property integer $comment_publish
 *
 * @property Comment $commentP
 * @property Comment[] $comments
 * @property PreUser $user
 * @property PreCommentOnline[] $preCommentOnlines
 */
class Comment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pre_comment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['comment_pid', 'comment_left', 'comment_right', 'comment_level', 'target_id', 'target_parent_id', 'user_id', 'comment_count_vote', 'comment_count_favourite', 'comment_delete', 'comment_publish'], 'integer'],
            [['target_type', 'comment_text'], 'string'],
            [['user_id', 'comment_text', 'comment_text_hash', 'comment_date', 'comment_user_ip'], 'required'],
            [['comment_date'], 'safe'],
            [['comment_rating'], 'number'],
            [['comment_text_hash'], 'string', 'max' => 32],
            [['comment_user_ip'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'comment_id' => Yii::t('app', 'Comment ID'),
            'comment_pid' => Yii::t('app', 'Comment Pid'),
            'comment_left' => Yii::t('app', 'Comment Left'),
            'comment_right' => Yii::t('app', 'Comment Right'),
            'comment_level' => Yii::t('app', 'Comment Level'),
            'target_id' => Yii::t('app', 'Target ID'),
            'target_type' => Yii::t('app', 'Target Type'),
            'target_parent_id' => Yii::t('app', 'Target Parent ID'),
            'user_id' => Yii::t('app', 'User ID'),
            'comment_text' => Yii::t('app', 'Comment Text'),
            'comment_text_hash' => Yii::t('app', 'Comment Text Hash'),
            'comment_date' => Yii::t('app', 'Comment Date'),
            'comment_user_ip' => Yii::t('app', 'Comment User Ip'),
            'comment_rating' => Yii::t('app', 'Comment Rating'),
            'comment_count_vote' => Yii::t('app', 'Comment Count Vote'),
            'comment_count_favourite' => Yii::t('app', 'Comment Count Favourite'),
            'comment_delete' => Yii::t('app', 'Comment Delete'),
            'comment_publish' => Yii::t('app', 'Comment Publish'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCommentP()
    {
        return $this->hasOne(Comment::className(), ['comment_id' => 'comment_pid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComments()
    {
        return $this->hasMany(Comment::className(), ['comment_pid' => 'comment_id']);
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
    public function getPreCommentOnlines()
    {
        return $this->hasMany(PreCommentOnline::className(), ['comment_id' => 'comment_id']);
    }
}
