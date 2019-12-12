<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "web_general_content".
 *
 * @property int $id
 * @property string $text
 * @property string $page
 */
class GeneralContent extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'web_general_content';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['text'], 'string'],
            [['page'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'text' => 'Text',
            'page' => 'Page',
        ];
    }
     public static function getContents($page) {
        return self::find()->where(['page' => $page])->all();
    }
     public static function getContent($page) {
        return self::find()->where(['page' => $page])->one();
    }
}
