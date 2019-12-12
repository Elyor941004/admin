<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "web_about_studio".
 *
 * @property int $id
 * @property string $type
 * @property string $photo
 */
class AboutStudio extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'web_about_studio';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['photo'], 'string'],
            [['type'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type' => 'Type',
            'photo' => 'Photo',
        ];
    }
}
