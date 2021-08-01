<?php

namespace app\modules\FreeNums\models;

use Yii;
use yii\db\ActiveRecord;
use yii\db\Expression;


/**
 * This is the model class for table "phones".
 *
 * @property integer $id
 * @property string $capaty
 *
 */
class NumberCapacity extends ActiveRecord
{
    public static function tableName()
    {
        return 'number_capacity';
    }
    public static function getDb()
    {
        return Yii::$app->get('dbspkhastr01');
    }

    public  static function getAll(){
        $capaty = NumberCapacity::find()->all();
        return $capaty;
    }
}