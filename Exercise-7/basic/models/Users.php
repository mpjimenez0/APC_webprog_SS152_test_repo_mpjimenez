<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property integer $user_id
 * @property string $first_name
 * @property string $last_name
 * @property string $nickname
 * @property string $email
 * @property string $user_city
 * @property string $gender
 * @property string $mobile
 * @property string $comment
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name', 'email', 'user_city', 'gender', 'mobile'], 'required'],
            [['gender'], 'string'],
            [['first_name', 'last_name'], 'string', 'max' => 25],
            [['nickname', 'email'], 'string', 'max' => 40],
            [['user_city'], 'string', 'max' => 45],
            [['mobile'], 'string', 'max' => 11],
            [['comment'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'nickname' => 'Nickname',
            'email' => 'Email',
            'user_city' => 'User City',
            'gender' => 'Gender',
            'mobile' => 'Mobile',
            'comment' => 'Comment',
        ];
    }
}
