<?php

namespace common\models;

use yii\behaviors\TimestampBehavior;

/**
 * Description of UserLogin
 *
 * @author     lyf <381296986@qq.com>
 * @date       2015-11-1
 */
class UserLogin extends \common\models\table\UserLogin{

    use ModelTrait;
        
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'attributes' =>  [
                    BaseActiveRecord::EVENT_BEFORE_INSERT => ['time'],
                ]
            ],
        ];
    }
    
}