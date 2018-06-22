<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/19 0019
 * Time: 下午 4:04
 */

namespace app\models;


use yii\db\ActiveRecord;

class Tv extends ActiveRecord
{

    /**
     * @desc 获取查询url
     * @param $params
     * @param string $exceptKey
     * @return string
     *
     */
    public static function getBaseUrl($params, $exceptKey='id')
    {
        $baseUrl = \Yii::$app->request->scriptUrl;

        if(isset($params[$exceptKey]))
            unset($params[$exceptKey]);

        return $baseUrl."?".http_build_query($params);

    }

}