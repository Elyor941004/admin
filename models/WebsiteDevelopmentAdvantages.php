<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "web_website_development_advantages".
 *
 * @property int $id
 * @property string $name
 * @property string $advantages
 */
class WebsiteDevelopmentAdvantages extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'web_website_development_advantages';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['advantages'], 'string'],
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
            'name' => 'Name',
            'advantages' => 'Advantages',
        ];
    }
}
