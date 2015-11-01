<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pre_subscribe".
 *
 * @property integer $id
 * @property string $target_type
 * @property integer $target_id
 * @property string $mail
 * @property string $date_add
 * @property string $date_remove
 * @property string $ip
 * @property string $key
 * @property integer $status
 */
class Subscribe extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pre_subscribe';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['target_type', 'mail', 'date_add', 'ip'], 'required'],
            [['target_id', 'status'], 'integer'],
            [['date_add', 'date_remove'], 'safe'],
            [['target_type', 'ip'], 'string', 'max' => 20],
            [['mail'], 'string', 'max' => 50],
            [['key'], 'string', 'max' => 32]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'target_type' => Yii::t('app', 'Target Type'),
            'target_id' => Yii::t('app', 'Target ID'),
            'mail' => Yii::t('app', 'Mail'),
            'date_add' => Yii::t('app', 'Date Add'),
            'date_remove' => Yii::t('app', 'Date Remove'),
            'ip' => Yii::t('app', 'Ip'),
            'key' => Yii::t('app', 'Key'),
            'status' => Yii::t('app', 'Status'),
        ];
    }
}
