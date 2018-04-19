<?php
/**
 * Created by PhpStorm.
 * User: kuratovevgenij
 * Date: 15.04.2018
 * Time: 23:03
 */

namespace app\modules\coder\models;

use yii\db\ActiveRecord;

class Algorithm extends ActiveRecord
{
    public static function findById($id)
    {
        return self::find()->where(['=', 'id', $id])->one();
    }

    public static function findNextNum( $type = null )
    {
        return self::find()->select(['MAX(`number`) AS `max`'])->where(['=', 'type', $type])->asArray()->one()['max'] + 1;
    }
}