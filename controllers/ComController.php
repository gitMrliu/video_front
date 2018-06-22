<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/8 0008
 * Time: 下午 3:52
 */

namespace app\controllers;


use app\models\Com;
use yii\data\Pagination;
use yii\helpers\Url;
use yii\web\Controller;

class ComController extends Controller
{
    public function actionIndex() {

        $model = Com::find()->with();
        $pagination = new Pagination([
            'defaultPageSize' => 3,
            'totalCount' => $model->count(),
        ]);
        $data = $model->offset($pagination->offset)->limit($pagination->limit)->all();
        return $this->render('index',['data'=>$data,'pagination'=>$pagination]);
    }

    public function actionAdd() {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $book = new Com();
        $data = $book->content = \Yii::$app->request->post('content');
        $book->create_time = time();
        $book->save();
        return $data;
    }
    public function actionDelete()
    {
        $arr = \Yii::$app->request->get('id');
        \Yii::$app->db->createCommand()->delete('com','id='.$arr)->execute();
        $this->redirect(Url::to(['index']));

    }
}