<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "web_order".
 *
 * @property int $id
 * @property string $site
 * @property string $name
 * @property int $phone
 * @property string $text
 * @property string $file
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'web_order';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['phone'], 'integer', 'max' => 11],
            [['text', 'file'], 'string'],
            [['site', 'name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'site' => 'Site',
            'name' => 'Name',
            'phone' => 'Phone',
            'text' => 'Text',
            'file' => 'File',
        ];
    }
}
