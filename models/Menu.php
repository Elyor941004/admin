<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "web_menu".
 *
 * @property int $id
 * @property string $name
 * @property int $created_at
 * @property int $user_id
 * @property string $url
 *
 * @property Submenu[] $submenus
 */
class Menu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'web_menu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at', 'user_id'], 'integer'],
            [['name', 'url'], 'string', 'max' => 255],
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
            'created_at' => 'Created At',
            'user_id' => 'User ID',
            'url' => 'Url',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubmenus()
    {
        return $this->hasMany(Submenu::className(), ['menu_id' => 'id']);
    }
}
