<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "web_to_order".
 *
 * @property int $id
 * @property string $services
 * @property string $name
 * @property int $phone_number
 * @property string $email
 * @property string $text
 * @property string $file
 */
class ToOrder extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'web_to_order';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['phone_number'], 'integer'],
            [['text', 'file'], 'string'],
            [['services', 'name', 'email'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'services' => 'Services',
            'name' => 'Name',
            'phone_number' => 'Phone Number',
            'email' => 'Email',
            'text' => 'Text',
            'file' => 'File',
        ];
    }
}
