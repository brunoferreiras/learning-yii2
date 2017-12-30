<?php

namespace app\controllers;

use app\models\Person;
use app\models\RegisterModel;
use yii\data\Pagination;
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

    public function actionPeople()
    {
        $query = Person::find();

        $pagination = new Pagination([
            'defaultPageSize' => 3,
            'totalCount' => $query->count()
        ]);

        $people = $query->orderBy('name')
                        ->offset($pagination->offset)
                        ->limit($pagination->limit)
                        ->all();
        return $this->render('people', compact('people', 'pagination'));
    }
}