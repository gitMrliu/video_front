<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/19 0019
 * Time: 上午 11:29
 */

namespace app\controllers;


use app\models\Area;
use app\models\Novel;
use app\models\Tv;
use app\models\Type;
use app\models\Years;
use yii\base\Controller;
use yii\data\Pagination;

class NovelController extends Controller
{
    public function actionIndex() {

        //类型
        $type = Type::find()->all();
        //地区
        $area = Area::find()->all();
        //年代
        $year = Years::find()->all();
        //电影
        $novel = Novel::find()->with();

//分页
        $pagination = new Pagination([
            'defaultPageSize' => 3,
            'totalCount' => $novel->count(),
        ]);
        $data = $novel->offset($pagination->offset)->limit($pagination->limit)->all();


        return $this->render('index',[
            'type'=>$type,
            'area'=>$area,
            'year'=>$year,
            'novel'=>$data,
            'pagination'=>$pagination
        ]);
    }
}