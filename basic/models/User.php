<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pre_user".
 *
 * @property string $user_id
 * @property string $user_login
 * @property string $user_password
 * @property string $user_mail
 * @property double $user_skill
 * @property string $user_date_register
 * @property string $user_date_activate
 * @property string $user_date_comment_last
 * @property string $user_ip_register
 * @property double $user_rating
 * @property string $user_count_vote
 * @property integer $user_activate
 * @property string $user_activate_key
 * @property string $user_profile_name
 * @property string $user_profile_sex
 * @property string $user_profile_country
 * @property string $user_profile_region
 * @property string $user_profile_city
 * @property string $user_profile_birthday
 * @property string $user_profile_about
 * @property string $user_profile_date
 * @property string $user_profile_avatar
 * @property string $user_profile_foto
 * @property integer $user_settings_notice_new_topic
 * @property integer $user_settings_notice_new_comment
 * @property integer $user_settings_notice_new_talk
 * @property integer $user_settings_notice_reply_comment
 * @property integer $user_settings_notice_new_friend
 * @property string $user_settings_timezone
 *
 * @property PreBlog[] $preBlogs
 * @property PreBlogUser[] $preBlogUsers
 * @property PreBlog[] $blogs
 * @property PreComment[] $preComments
 * @property PreFavourite[] $preFavourites
 * @property PreFavouriteTag[] $preFavouriteTags
 * @property PreFriend[] $preFriends
 * @property PreFriend[] $preFriends0
 * @property PreInvite[] $preInvites
 * @property PreInvite[] $preInvites0
 * @property PreReminder $preReminder
 * @property PreSession $preSession
 * @property PreStreamEvent[] $preStreamEvents
 * @property PreStreamSubscribe[] $preStreamSubscribes
 * @property PreStreamUserType[] $preStreamUserTypes
 * @property PreTalk[] $preTalks
 * @property PreTalkBlacklist[] $preTalkBlacklists
 * @property PreTalkBlacklist[] $preTalkBlacklists0
 * @property PreTalkUser[] $preTalkUsers
 * @property PreTalk[] $talks
 * @property PreTopic[] $preTopics
 * @property PreTopicQuestionVote[] $preTopicQuestionVotes
 * @property PreTopic[] $topics
 * @property PreTopicRead[] $preTopicReads
 * @property PreTopic[] $topics0
 * @property PreTopicTag[] $preTopicTags
 * @property PreUserAdministrator $preUserAdministrator
 * @property PreUserChangemail[] $preUserChangemails
 * @property PreUserFieldValue[] $preUserFieldValues
 * @property PreUserNote[] $preUserNotes
 * @property PreUserNote[] $preUserNotes0
 * @property PreUserfeedSubscribe[] $preUserfeedSubscribes
 * @property PreVote[] $preVotes
 * @property PreWall[] $preWalls
 * @property PreWall[] $preWalls0
 */
class User extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pre_user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_login', 'user_password', 'user_mail', 'user_date_register', 'user_ip_register'], 'required'],
            [['user_skill', 'user_rating'], 'number'],
            [['user_date_register', 'user_date_activate', 'user_date_comment_last', 'user_profile_birthday', 'user_profile_date'], 'safe'],
            [['user_count_vote', 'user_activate', 'user_settings_notice_new_topic', 'user_settings_notice_new_comment', 'user_settings_notice_new_talk', 'user_settings_notice_reply_comment', 'user_settings_notice_new_friend'], 'integer'],
            [['user_profile_sex', 'user_profile_about'], 'string'],
            [['user_login', 'user_profile_country', 'user_profile_region', 'user_profile_city'], 'string', 'max' => 30],
            [['user_password', 'user_mail', 'user_profile_name'], 'string', 'max' => 50],
            [['user_ip_register'], 'string', 'max' => 20],
            [['user_activate_key'], 'string', 'max' => 32],
            [['user_profile_avatar', 'user_profile_foto'], 'string', 'max' => 250],
            [['user_settings_timezone'], 'string', 'max' => 6],
            [['user_login'], 'unique'],
            [['user_mail'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => Yii::t('app', 'User ID'),
            'user_login' => Yii::t('app', 'User Login'),
            'user_password' => Yii::t('app', 'User Password'),
            'user_mail' => Yii::t('app', 'User Mail'),
            'user_skill' => Yii::t('app', 'User Skill'),
            'user_date_register' => Yii::t('app', 'User Date Register'),
            'user_date_activate' => Yii::t('app', 'User Date Activate'),
            'user_date_comment_last' => Yii::t('app', 'User Date Comment Last'),
            'user_ip_register' => Yii::t('app', 'User Ip Register'),
            'user_rating' => Yii::t('app', 'User Rating'),
            'user_count_vote' => Yii::t('app', 'User Count Vote'),
            'user_activate' => Yii::t('app', 'User Activate'),
            'user_activate_key' => Yii::t('app', 'User Activate Key'),
            'user_profile_name' => Yii::t('app', 'User Profile Name'),
            'user_profile_sex' => Yii::t('app', 'User Profile Sex'),
            'user_profile_country' => Yii::t('app', 'User Profile Country'),
            'user_profile_region' => Yii::t('app', 'User Profile Region'),
            'user_profile_city' => Yii::t('app', 'User Profile City'),
            'user_profile_birthday' => Yii::t('app', 'User Profile Birthday'),
            'user_profile_about' => Yii::t('app', 'User Profile About'),
            'user_profile_date' => Yii::t('app', 'User Profile Date'),
            'user_profile_avatar' => Yii::t('app', 'User Profile Avatar'),
            'user_profile_foto' => Yii::t('app', 'User Profile Foto'),
            'user_settings_notice_new_topic' => Yii::t('app', 'User Settings Notice New Topic'),
            'user_settings_notice_new_comment' => Yii::t('app', 'User Settings Notice New Comment'),
            'user_settings_notice_new_talk' => Yii::t('app', 'User Settings Notice New Talk'),
            'user_settings_notice_reply_comment' => Yii::t('app', 'User Settings Notice Reply Comment'),
            'user_settings_notice_new_friend' => Yii::t('app', 'User Settings Notice New Friend'),
            'user_settings_timezone' => Yii::t('app', 'User Settings Timezone'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPreBlogs()
    {
        return $this->hasMany(PreBlog::className(), ['user_owner_id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPreBlogUsers()
    {
        return $this->hasMany(PreBlogUser::className(), ['user_id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBlogs()
    {
        return $this->hasMany(PreBlog::className(), ['blog_id' => 'blog_id'])->viaTable('pre_blog_user', ['user_id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPreComments()
    {
        return $this->hasMany(PreComment::className(), ['user_id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPreFavourites()
    {
        return $this->hasMany(PreFavourite::className(), ['user_id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPreFavouriteTags()
    {
        return $this->hasMany(PreFavouriteTag::className(), ['user_id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPreFriends()
    {
        return $this->hasMany(PreFriend::className(), ['user_from' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPreFriends0()
    {
        return $this->hasMany(PreFriend::className(), ['user_to' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPreInvites()
    {
        return $this->hasMany(PreInvite::className(), ['user_from_id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPreInvites0()
    {
        return $this->hasMany(PreInvite::className(), ['user_to_id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPreReminder()
    {
        return $this->hasOne(PreReminder::className(), ['user_id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPreSession()
    {
        return $this->hasOne(PreSession::className(), ['user_id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPreStreamEvents()
    {
        return $this->hasMany(PreStreamEvent::className(), ['user_id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPreStreamSubscribes()
    {
        return $this->hasMany(PreStreamSubscribe::className(), ['user_id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPreStreamUserTypes()
    {
        return $this->hasMany(PreStreamUserType::className(), ['user_id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPreTalks()
    {
        return $this->hasMany(PreTalk::className(), ['user_id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPreTalkBlacklists()
    {
        return $this->hasMany(PreTalkBlacklist::className(), ['user_target_id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPreTalkBlacklists0()
    {
        return $this->hasMany(PreTalkBlacklist::className(), ['user_id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPreTalkUsers()
    {
        return $this->hasMany(PreTalkUser::className(), ['user_id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTalks()
    {
        return $this->hasMany(PreTalk::className(), ['talk_id' => 'talk_id'])->viaTable('pre_talk_user', ['user_id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPreTopics()
    {
        return $this->hasMany(PreTopic::className(), ['user_id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPreTopicQuestionVotes()
    {
        return $this->hasMany(PreTopicQuestionVote::className(), ['user_voter_id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTopics()
    {
        return $this->hasMany(PreTopic::className(), ['topic_id' => 'topic_id'])->viaTable('pre_topic_question_vote', ['user_voter_id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPreTopicReads()
    {
        return $this->hasMany(PreTopicRead::className(), ['user_id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTopics0()
    {
        return $this->hasMany(PreTopic::className(), ['topic_id' => 'topic_id'])->viaTable('pre_topic_read', ['user_id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPreTopicTags()
    {
        return $this->hasMany(PreTopicTag::className(), ['user_id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPreUserAdministrator()
    {
        return $this->hasOne(PreUserAdministrator::className(), ['user_id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPreUserChangemails()
    {
        return $this->hasMany(PreUserChangemail::className(), ['user_id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPreUserFieldValues()
    {
        return $this->hasMany(PreUserFieldValue::className(), ['user_id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPreUserNotes()
    {
        return $this->hasMany(PreUserNote::className(), ['target_user_id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPreUserNotes0()
    {
        return $this->hasMany(PreUserNote::className(), ['user_id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPreUserfeedSubscribes()
    {
        return $this->hasMany(PreUserfeedSubscribe::className(), ['user_id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPreVotes()
    {
        return $this->hasMany(PreVote::className(), ['user_voter_id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPreWalls()
    {
        return $this->hasMany(PreWall::className(), ['wall_user_id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPreWalls0()
    {
        return $this->hasMany(PreWall::className(), ['user_id' => 'user_id']);
    }
    
    public static function findByUsername($username)
    {
        $user =User::findOne(['user_login'=>$username]);
        if($user!="")return $user;
        return null;
    }
    
    public function validatePassword($password)
    {
        $hash = Yii::$app->getSecurity()->generatePasswordHash($password);
        return Yii::$app->getSecurity()->validatePassword($password, $hash); 
    }
    
    /* IdentityInterface methods */
    public static function findIdentity($id)
    {
        echo "id=".$id;
        $user = User::findOne(['user_id'=>$id]);
        return isset($user) ? new static($user) : null;
    }
    
     public static function findIdentityByAccessToken($token, $type = null)
    {
        
        foreach (self::$users as $user) {
            if ($user['accessToken'] === $token) {
                return new static($user);
            }
        }

        return null;
    }
    
    public function getId()
    {
        return $this->user_id;
    }
    
    public function getAuthKey()
    {
        return "12345";
        //TODO we will use this authkey later to correctly using yii2 features 
        //return $this->authKey;
    }
    
    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }
    
}
