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
use app\models\Novelc;
use app\models\Tv;
use app\models\Type;
use app\models\Years;
use yii\base\Controller;


class NovelcController extends Controller
{
    /**
     * @return string
     */
//    public $layout = 'common';
    public function actionIndex()
    {

        $id = \Yii::$app->request->get('id');


        //所有类型
        $typ = Type::find()->all();
        //所有作者
        $auth = Authors::find()->all();

        //相关作者小说
        $novel = Novel::find()->where(['author_id'=>$id])->all();

        //所有
        $data = Novel::find()->where(['id'=>$id])->all();

        //小说集
        $novelc = Novelc::find()->where(['novel_id'=>$id])->all();

        //作者
        $author = Authors::find()->where(['id'=>$data[0]->author_id])->one();
        //类型
        $type = Type::find()->where(['id'=>$data[0]->type_id])->one();

        //相关类型小说
        $novelt = Novel::find()->where(['type_id'=>$type->id])->all();

        //所有小说
        $nov = Novel::find()->all();

        if($data[0]->status == 2) {
            $data[0]->status ='完结';
        } else {
            $data[0]->status = '连载';
        }

        return $this->renderPartial('index',[
            'data'=>$data,
            'author'=>$author,
            'type'=>$type,
            'auth'=>$auth,
            'typ'=>$typ,
            'novel'=>$novel,
            'novelc'=>$novelc,
            'novelt'=>$novelt,
            'nov'=>$nov
            ]);
    }


    //小说正文
    public function actionNov() {


        $id = \Yii::$app->request->get('id');
        //小说正文
        $tent = Novelc::find()->where(['id'=>$id])->one();
//var_dump($tent);die;
        return $this->renderPartial('nov',[
            'tent'=>$tent
        ]);

    }

}