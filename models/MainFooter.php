<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "web_main_footer".
 *
 * @property int $id
 * @property string $adress
 * @property int $our_phone_number
 * @property string $link
 * @property string $text
 * @property int $your_phone_number
 * @property string $email
 * @property string $text_about_you
 */
class MainFooter extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'web_main_footer';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['our_phone_number', 'your_phone_number'], 'integer'],
            [['adress', 'link', 'text', 'email', 'text_about_you'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'adress' => 'Adress',
            'our_phone_number' => 'Our Phone Number',
            'link' => 'Link',
            'text' => 'Text',
            'your_phone_number' => 'Your Phone Number',
            'email' => 'Email',
            'text_about_you' => 'Text About You',
        ];
    }
}
