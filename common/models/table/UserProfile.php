<?php

namespace common\models\table;

use Yii;

/**
 * This is the model class for table "{{%user_profile}}".
 *
 * @property string $id
 * @property string $user_id
 * @property string $nickname
 * @property string $email
 * @property integer $gender
 * @property integer $birthday
 * @property string $avatar
 * @property string $update_user
 * @property integer $update_time
 * @property string $update_ip
 */
class UserProfile extends \common\lib\base\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%user_profile}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'update_user', 'update_time'], 'required'],
            [['user_id', 'gender', 'birthday', 'update_user', 'update_time', 'update_ip'], 'integer'],
            [['nickname'], 'string', 'max' => 32],
            [['email', 'avatar'], 'string', 'max' => 255],
            [['user_id'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('models/UserProfile', 'ID'),
            'user_id' => Yii::t('models/UserProfile', 'User ID'),
            'nickname' => Yii::t('models/UserProfile', 'Nickname'),
            'email' => Yii::t('models/UserProfile', 'Email'),
            'gender' => Yii::t('models/UserProfile', 'Gender'),
            'birthday' => Yii::t('models/UserProfile', 'Birthday'),
            'avatar' => Yii::t('models/UserProfile', 'Avatar'),
            'update_user' => Yii::t('models/UserProfile', 'Update User'),
            'update_time' => Yii::t('models/UserProfile', 'Update Time'),
            'update_ip' => Yii::t('models/UserProfile', 'Update Ip'),
        ];
    }

    /**
     * @inheritdoc
     * @return \common\models\query\UserProfileQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\UserProfileQuery(get_called_class());
    }
}
