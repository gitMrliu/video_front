<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/21 0021
 * Time: 上午 7:54
 */

namespace app\controllers;

use app\models\Actor;
use app\models\Area;
use app\models\Comment;
use app\models\Director;
use app\models\Film;
use app\models\Reapy;
use app\models\Tv;
use app\models\User;
use app\models\Years;
use yii\base\Controller;

class ReapyController extends Controller
{

    //电影评论
    public function actionIndex()
    {
        $id = \Yii::$app->request->get('id');
//数据处理
        //所有评论
        $data = Comment::find()->where(['id'=>$id])->all();
//     var_dump($data[0]->id);die;
        //评论的电影
        $film = Film::find()->where(['id'=>$data[0]->film_id])->one();
//var_dump($film);die;

//        //地区
        $area = Area::find()->where(['id'=>$film->area_id])->one();
//        //年代
        $years = Years::find()->where(['id'=>$film->year_id])->one();
//        //导演
        $director = Director::find()->where(['id'=>$film->director_id])->one();
//        //演员
        $acid=explode(',',$film->actor_id);
        $str = '';
        foreach ( $acid as $v) {
            $str.= Actor::find()->where(['id'=>$v])->one()['actor_name']." ";
        }
//评论回应
        $reapy = Reapy::find()->where(['com_id'=>$data[0]->id])->all();

//评论用户

        $user = User::find()->where(['id'=>$data[0]->user_id])->one();

        return $this->renderPartial('index',[
            'data'=>$data,
            'area'=>$area,
            'year'=>$years,
            'dir'=>$director,
            'actor'=>$str,
            'user'=>$user,
            'film'=>$film,
            'reapy'=>$reapy

        ]);
    }

//电视评论
    public function actionTvindex()
    {

        $id = \Yii::$app->request->get('id');

//数据处理
        //所有评论
        $data = Comment::find()->where(['id'=>$id])->all();

        //评论的 电视剧 id为2
        $tv = Tv::find()->where(['id'=>$data[0]->film_id])->one();
//var_dump($tv);die;
//        //地区
        $area = Area::find()->where(['id'=>$tv->area_id])->one();
//        //年代
        $years = Years::find()->where(['id'=>$tv->year_id])->one();
//        //导演
        $director = Director::find()->where(['id'=>$tv->director_id])->one();
//        //演员
        $acid=explode(',',$tv->actor_id);
        $str = '';
        foreach ( $acid as $v) {
            $str.= Actor::find()->where(['id'=>$v])->one()['actor_name']." ";
        }
//评论回应
        $reapy = Reapy::find()->where(['com_id'=>$data[0]->id])->all();

//评论用户

        $user = User::find()->where(['id'=>$data[0]->user_id])->one();


        return $this->renderPartial('tvindex',[
            'data'=>$data,
            'area'=>$area,
            'year'=>$years,
            'dir'=>$director,
            'actor'=>$str,
            'user'=>$user,
            'tv'=>$tv,
            'reapy'=>$reapy

        ]);
    }
}