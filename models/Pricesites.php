<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "web_pricesites".
 *
 * @property int $id
 * @property string $title
 * @property int $price
 * @property string $name
 * @property string $page
 */
class Pricesites extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'web_pricesites';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'name'], 'string'],
            [['price'], 'integer'],
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
            'title' => 'Title',
            'price' => 'Price',
            'name' => 'Name',
            'page' => 'Page',
        ];
    }
     public static function getContents($page) {
        return self::find()->where(['page' => $page])->all();
    }
}
