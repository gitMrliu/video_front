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
use app\models\Tv;
use app\models\User;
use app\models\Years;
use yii\base\Controller;

class CommentController extends Controller
{
    //电影
    public function actionIndex()
    {
        $id = \Yii::$app->request->get('id');
//数据处理
 //所有评论
//        var_dump($id);die   ;
        $data = Comment::find()->where(['film_id'=>$id])->all();


//评论的电影数据
        $film = Film::find()->where(['id'=>$data[0]->film_id])->one();


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

//评论用户

        $user = User::find()->where(['id'=>$data[0]->user_id])->one();

        $list = [];
        foreach ($data as $k => $v) {

            $list[] = User::find()->where(['id'=>$v['user_id']])->asArray()->one();
        }


        return $this->render('index',[
            'data'=>$data,
            'area'=>$area,
            'year'=>$years,
            'dir'=>$director,
            'actor'=>$str,
            'user'=>$user,
            'film'=>$film,
            'list'=>$list

        ]);
    }

    public function actionAdd() {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $book = new Comment();
        $book->content = \Yii::$app->request->post('content');
        $book->title = \Yii::$app->request->post('title');
        $book->user_id = \Yii::$app->request->post('user_id');
        $book->film_id = \Yii::$app->request->post('film_id');
        $book->repay_id = \Yii::$app->request->post('repay_id');
        $book->comment_type = 1;
        $book->created_at = date('Y-m-d H:i:s',time());
        $book->updated_at = date('Y-m-d H:i:s',time());
        $data =$book->save();
        return $data;
    }

        //电视
    public function actionTvcindex()
    {
        $id = \Yii::$app->request->get('id');
//数据处理
        //所有评论
//        var_dump($id);die   ;
        $data = Comment::find()->where(['film_id'=>$id,'comment_type'=>2])->all();


//评论的电影数据
        $tv = Tv::find()->where(['id'=>$data[0]->film_id])->one();


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

//评论用户

        $user = User::find()->where(['id'=>$data[0]->user_id])->one();

        $list = [];
        foreach ($data as $k => $v) {

            $list[] = User::find()->where(['id'=>$v['user_id']])->asArray()->one();
        }


        return $this->render('tvindex',[
            'data'=>$data,
            'area'=>$area,
            'year'=>$years,
            'dir'=>$director,
            'actor'=>$str,
            'user'=>$user,
            'tv'=>$tv,
            'list'=>$list

        ]);
    }

    public function actionTvadd() {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $book = new Comment();
        $book->content = \Yii::$app->request->post('content');
        $book->title = \Yii::$app->request->post('title');
        $book->user_id = \Yii::$app->request->post('user_id');
        $book->film_id = \Yii::$app->request->post('film_id');
        $book->repay_id = \Yii::$app->request->post('repay_id');
        $book->comment_type = 2;
        $book->created_at = date('Y-m-d H:i:s',time());
        $book->updated_at = date('Y-m-d H:i:s',time());
        $data =$book->save();
        return $data;
    }
}