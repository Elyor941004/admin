<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "web_site_promotion_capital".
 *
 * @property int $id
 * @property string $url_adress
 * @property int $phone_number
 * @property string $name
 * @property string $email
 */
class SitePromotionCapital extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'web_site_promotion_capital';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['phone_number'], 'integer'],
            [['url_adress', 'name', 'email'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'url_adress' => 'Url Adress',
            'phone_number' => 'Phone Number',
            'name' => 'Name',
            'email' => 'Email',
        ];
    }
}
