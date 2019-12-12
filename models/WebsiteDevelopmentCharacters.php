<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "web_website_development_characters".
 *
 * @property int $id
 * @property string $photo
 * @property string $name
 * @property string $text
 */
class WebsiteDevelopmentCharacters extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'web_website_development_characters';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['photo', 'text'], 'string'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'photo' => 'Photo',
            'name' => 'Name',
            'text' => 'Text',
        ];
    }
}
