<?php
/**
 * Created by PhpStorm.
 * User: Admin Colt
 * Date: 15.04.2018
 * Time: 18:58
 */

namespace app\modules\coder\controllers;

use app\modules\coder\models\Algorithm;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use app\modules\coder\models\CodeForm;

class ServiceController extends Controller
{
    public function actionCreate()
    {
        if (Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new CodeForm();
        if ($model->load(Yii::$app->request->post()) && $model->saveCode()) {
            $codes = Algorithm::find()->all();
            return $this->render('show', ['codes' => $codes]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);

    }

    public function actionShow()
    {
        $codes = Algorithm::find()->all();
        return $this->render('show', ['codes' => $codes]);
    }
}