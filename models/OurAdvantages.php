<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "web_our_advantages".
 *
 * @property int $id
 * @property string $name
 * @property string $text
 * @property string $page
 */
class OurAdvantages extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'web_our_advantages';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['text'], 'string'],
            [['name', 'page'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'text' => 'Text',
            'page' => 'Page',
        ];
    }
    public static function getContent($page) {
        return self::find()->where(['page' => $page])->one();
    }
    public static function getContents($page) {
        return self::find()->where(['page' => $page])->all();
    }
}
