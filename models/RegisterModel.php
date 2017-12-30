<?php

namespace app\models;

use yii\base\Model;

class RegisterModel extends Model
{
    public $name;
    public $email;
    public $age;

    public function rules()
    {
        return [
            [['name', 'email', 'age'], 'required'],
            ['email', 'email'],
            ['age', 'number', 'integerOnly' => true]
        ];
    }

    public function attributeLabels()
    {
        return [
            'name' => 'Nome completo',
            'email' => 'E-mail',
            'age' => 'Idade',
        ];
    }
}