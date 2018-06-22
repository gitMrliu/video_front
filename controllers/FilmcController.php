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
use app\models\Comment;
use app\models\Director;
use app\models\Film;
use app\models\Reapy;
use app\models\Tv;
use app\models\Type;
use app\models\User;
use app\models\Years;
use yii\web\Controller;

class FilmcController extends Controller
{
    /**
     * @return string
     */
//    public $layout = 'common';
    public function actionIndex()
    {
        $id = \Yii::$app->request->get('id');
//数据处理
        //所有
        $data = Film::find()->where(['id'=>$id])->all();

        //类型
        $type = Type::find()->where(['id'=>$data[0]->type_id])->one();

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
        //所属类型的电影
        $list=  Film::find()->where(['type_id'=>$data[0]->type_id])->all();


//侧导航处理
        //所有类型
        $typ = Type::find()->all();

        //所有地区
        $are = Area::find()->all();
        //所有年代
        $yea = Years::find()->all();
        //所有电影
        $film = Film::find()->all();

//评论区处理
        //所有评论
        $com = Comment::find()->where(['film_id'=>$id])->all();
//评论用户

$user = [];
        foreach ($com as $k => $v) {

            $user[] = User::find()->where(['id'=>$v['user_id']])->asArray()->one();
        }

        return $this->renderPartial('index',[
            'data'=>$data,
            'area'=>$area,
            'year'=>$years,
            'dir'=>$director,
            'actor'=>$str,
            'type'=>$type,
            'list'=>$list,
            'typ'=>$typ,
            'are'=>$are,
            'yea'=>$yea,
            'film'=>$film,
            'com'=>$com,
            'user'=>$user
            ]);
    }


    public function actionAdd() {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $book = new Reapy();
        $book->content = \Yii::$app->request->post('content');
        $book->user_id = \Yii::$app->request->post('user_id');
        $book->com_id = \Yii::$app->request->post('com_id');
        $book->created_at = date('Y-m-d H:i:s',time());
        $book->updated_at = date('Y-m-d H:i:s',time());
        $data = $book->save();
        return $data;
    }

}