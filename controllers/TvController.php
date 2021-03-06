<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/19 0019
 * Time: 上午 11:29
 */

namespace app\controllers;


use app\models\Area;
use app\models\Tv;
use app\models\Type;
use app\models\Years;
use yii\base\Controller;
use yii\data\Pagination;

class TvController extends Controller
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
        $tv = Tv::find()->with();


//123

        $data = $typeId = \Yii::$app->request->get();

        if(count($data)>1) {
            unset($data['r']);
            foreach ($data as $key=>$v) {
                $var[$key] =$v;
            }

            unset($var['page'],$var['per-page']);
            $tv = Tv::find()->where($var)->with();

        }else{
            $tv = Tv::find()->with();
        }




//分页
        $pagination = new Pagination([
            'defaultPageSize' => 3,
            'totalCount' => $tv->count(),
        ]);
        $data = $tv->offset($pagination->offset)->limit($pagination->limit)->all();


        return $this->render('index',[
            'type'=>$type,
            'area'=>$area,
            'year'=>$year,
            'tv'=>$data,
            'pagination'=>$pagination,
            'params' => \Yii::$app->request->get(),
        ]);
    }
}