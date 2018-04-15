<?php
/**
 * Created by PhpStorm.
 * User: Admin Colt
 * Date: 15.04.2018
 * Time: 18:58
 */

namespace app\modules\coder\controllers;

//use Yii;
//use yii\filters\AccessControl;
use yii\web\Controller;

class ServiceController extends Controller
{
    public function actionCreate()
    {
        return $this->render('create');
    }

    public function actionShow()
    {
        return $this->render('show');
    }
}