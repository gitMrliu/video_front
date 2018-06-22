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
use app\models\Tv;
use app\models\Tvc;
use app\models\Type;
use app\models\User;
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
//所有电视集
        $tvc = Tvc::find()->where(['tv_id'=>$id])->all();

        //所有类型
        $typ = Type::find()->all();

        //所有地区
        $are = Area::find()->all();
        //所有年代
        $yea = Years::find()->all();
        //所有电视剧
        $tv= Tv::find()->all();

        //所有
        $data = Tv::find()->where(['id'=>$id])->all();
        //地区
        $area = Area::find()->where(['id'=>$data[0]->area_id])->one();
        //类型

        $type = Type::find()->where(['id'=>$data[0]->type_id])->all();
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

//评论区处理
        //所有评论

        $com = Comment::find()->where(['film_id'=>$id,'comment_type'=>2])->all();
//评论用户

        $user = [];
        foreach ($com as $k => $v) {

            $user[] = User::find()->where(['id'=>$v['user_id']])->asArray()->one();
        }
//var_dump($tvc);die;
        return $this->render('index',[
            'data'=>$data,
            'area'=>$area,
            'year'=>$years,
            'dir'=>$director,
            'actor'=>$str,
            'com'=>$com,
            'user'=>$user,
            'tvc'=>$tvc,
            'typ'=>$typ,
            'are'=>$are,
            'yea'=>$yea,
            'tv'=>$tv,
            'type'=>$type
            ]);
    }
}