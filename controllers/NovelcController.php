<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/18 0018
 * Time: 下午 3:21
 */

namespace app\controllers;


use app\models\Actor;
use app\models\Area;
use app\models\Authors;
use app\models\Director;
use app\models\Film;
use app\models\Novel;
use app\models\Tv;
use app\models\Type;
use app\models\Years;
use yii\base\Controller;


class NovelcController extends Controller
{
    /**
     * @return string
     */
    public function actionIndex()
    {

        $id = \Yii::$app->request->get('id');

        //所有
        $data = Novel::find()->where(['id'=>$id])->all();
        //作者
        $author = Authors::find()->where(['id'=>$data[0]->author_id])->one();
        //类型
        $type = Type::find()->where(['id'=>$data[0]->type_id])->one();
        return $this->render('index',[
            'data'=>$data,
            'author'=>$author,
            'type'=>$type
            ]);
    }
}