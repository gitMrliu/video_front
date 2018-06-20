<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/20 0020
 * Time: 上午 7:57
 */

namespace app\controllers;


use yii\base\Controller;

class HomeController extends Controller
{
    public function actionIndex() {
        return $this->render('index');
    }
}