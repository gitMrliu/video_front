<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/20 0020
 * Time: 上午 7:57
 */

namespace app\controllers;


use app\models\Actor;
use app\models\Area;
use app\models\Director;
use app\models\Film;
use app\models\Tv;
use app\models\Type;
use app\models\Years;
use yii\base\Controller;

class HomeController extends Controller
{
    public function actionIndex() {

//所有的电影
        $film = Film::find()->all();

//所有类型
        $type = Type::find()->all();
        //所有地区
        $area = Area::find()->all();
        //所有年代
        $year= Years::find()->all();
        //所有电影
        $tv = Tv::find()->all();
        //所有导演
        $dir= Director::find()->all();
        //所有演员
        $act = Actor::find()->all();
        //所有电视

        return $this->renderPartial('index',[
            'film'=>$film,
            'type'=>$type,
            'area'=>$area,
            'year'=>$year,
            'tv'=>$tv,
            'dir'=>$dir,
            'act'=>$act
        ]);
    }
}