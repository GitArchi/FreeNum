<?php
namespace app\modules\FreeNums\models;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "phones".
 *
 * @property integer $id
 * @property string $capaty
 *
 */
class SearchCapModel extends ActiveRecord
{
    public static function tableName()
    {
        return 'number_capacity';
    }

    public  static function getAll(){
        $capaty = SearchCapModel::find()->all();
        return $capaty;
    }

}