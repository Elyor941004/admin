<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "web_services".
 *
 * @property int $id
 * @property string $name
 * @property string $types
 *
 * @property Subservices[] $subservices
 */
class Services extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'web_services';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'types'], 'string', 'max' => 255],
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
            'types' => 'Types',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubservices()
    {
        return $this->hasMany(Subservices::className(), ['services_id' => 'id']);
    }
}
