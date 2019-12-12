<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "web_adress".
 *
 * @property int $id
 * @property string $adress
 * @property string $link_adress
 * @property string $page
 */
class Adress extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'web_adress';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['adress', 'link_adress', 'page'], 'string', 'max' => 255],
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
            'link_adress' => 'Link Adress',
            'page' => 'Page',
        ];
    }
     public static function getContents($page) {
        return self::find()->where(['page' => $page])->one();
    }
}
