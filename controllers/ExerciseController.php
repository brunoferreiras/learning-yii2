<?php

namespace app\controllers;

use app\models\RegisterModel;
use yii\web\Controller;

class ExerciseController extends Controller
{
    public function actionForm()
    {
        $registerModel = new RegisterModel;
        $post = \Yii::$app->request->post();

        if($registerModel->load($post) && $registerModel->validate()) {
            return $this->render('form-confirmation', compact('registerModel'));
        }

        return $this->render('form', compact('registerModel'));
    }
}