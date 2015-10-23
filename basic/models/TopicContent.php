<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pre_topic_content".
 *
 * @property string $topic_id
 * @property string $topic_text
 * @property string $topic_text_short
 * @property string $topic_text_source
 * @property string $topic_extra
 *
 * @property PreTopic $topic
 */
class TopicContent extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pre_topic_content';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['topic_id', 'topic_text', 'topic_text_short', 'topic_text_source', 'topic_extra'], 'required'],
            [['topic_id'], 'integer'],
            [['topic_text', 'topic_text_short', 'topic_text_source', 'topic_extra'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'topic_id' => Yii::t('app', 'Topic ID'),
            'topic_text' => Yii::t('app', 'Topic Text'),
            'topic_text_short' => Yii::t('app', 'Topic Text Short'),
            'topic_text_source' => Yii::t('app', 'Topic Text Source'),
            'topic_extra' => Yii::t('app', 'Topic Extra'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTopic()
    {
        return $this->hasOne(PreTopic::className(), ['topic_id' => 'topic_id']);
    }
}
