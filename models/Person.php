<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "people".
 *
 * @property int $id
 * @property string $name
 * @property string $city
 * @property string $state
 * @property string $email
 */
class Person extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'people';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'city', 'state', 'email'], 'required'],
            [['name', 'city', 'state', 'email'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'city' => 'City',
            'state' => 'State',
            'email' => 'Email',
        ];
    }
}
