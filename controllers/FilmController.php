<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/19 0019
 * Time: 上午 11:29
 */

namespace app\controllers;


use app\models\Area;
use app\models\Film;
use app\models\Type;
use app\models\Years;
use yii\base\Controller;
use yii\data\Pagination;

class FilmController extends Controller
{

    public $layout = 'common';
    public function actionIndex() {
        //类型
        $type = Type::find()->all();
        //地区
        $area = Area::find()->all();
        //年代
        $year = Years::find()->all();
        //电影
        $film = Film::find()->with();

//分页
        $pagination = new Pagination([
            'pageSize' => 3,
            'totalCount' => $film->count(),
        ]);
        $data = $film->offset($pagination->offset)->limit($pagination->limit)->all();


        return $this->render('index',[
            'type'=>$type,
            'area'=>$area,
            'year'=>$year,
            'film'=>$data,
            'pagination'=>$pagination
        ]);
    }
}