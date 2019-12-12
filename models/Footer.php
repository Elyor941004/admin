<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "web_footer".
 *
 * @property int $id
 * @property string $about_phone_number
 * @property int $phone_number
 * @property string $adress
 * @property string $name
 * @property string $services
 */
class Footer extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'web_footer';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['phone_number'], 'integer'],
            [['about_phone_number', 'adress', 'name', 'services'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'about_phone_number' => 'About Phone Number',
            'phone_number' => 'Phone Number',
            'adress' => 'Adress',
            'name' => 'Name',
            'services' => 'Services',
        ];
    }
}
