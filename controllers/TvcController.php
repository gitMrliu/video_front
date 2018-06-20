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
use app\models\Director;
use app\models\Film;
use app\models\Tv;
use app\models\Years;
use yii\base\Controller;


class TvcController extends Controller
{
    /**
     * @return string
     */
//    public $layout = 'common';
    public function actionIndex()
    {

        $id = \Yii::$app->request->get('id');

        //所有
        $data = Tv::find()->where(['id'=>$id])->all();
        //地区
        $area = Area::find()->where(['id'=>$data[0]->area_id])->one();

        //年代
        $years = Years::find()->where(['id'=>$data[0]->year_id])->one();
        //导演
        $director = Director::find()->where(['id'=>$data[0]->director_id])->one();
        //演员
        $acid=explode(',',$data[0]->actor_id);
        $str = '';
        foreach ( $acid as $v) {
           $str.= Actor::find()->where(['id'=>$v])->one()['actor_name']." ";
        }
        return $this->render('index',[
            'data'=>$data,
            'area'=>$area,
            'year'=>$years,
            'dir'=>$director,
            'actor'=>$str
            ]);
    }
}