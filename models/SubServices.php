<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "web_subservices".
 *
 * @property int $id
 * @property string $text
 * @property int $services_id
 *
 * @property Services $services
 */
class SubServices extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'web_subservices';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['services_id'], 'integer'],
            [['text'], 'string', 'max' => 255],
            [['services_id'], 'exist', 'skipOnError' => true, 'targetClass' => Services::className(), 'targetAttribute' => ['services_id' => 'id']],
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
            'services_id' => 'Services ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getServices()
    {
        return $this->hasOne(Services::className(), ['id' => 'services_id']);
    }
}
