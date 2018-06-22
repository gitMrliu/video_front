<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/21 0021
 * Time: 下午 5:52
 */

namespace app\models;


use yii\db\ActiveRecord;

class Novelc extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'novel_chapter';
    }
}