<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trivia".
 *
 * @property integer $triv_num
 * @property string $triv_q
 * @property string $triv_ans
 */
class Trivias extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'trivia';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['triv_q', 'triv_ans'], 'required'],
            [['triv_q', 'triv_ans'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'triv_num' => 'Triv Num',
            'triv_q' => 'Triv Q',
            'triv_ans' => 'Triv Ans',
        ];
    }
}
