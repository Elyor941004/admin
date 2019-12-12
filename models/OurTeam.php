<?php

namespace app\models;

use Yii;
use yii\helpers\Url;

/**
 * This is the model class for table "web_our_team".
 *
 * @property int $id
 * @property string $photo
 * @property string $name
 * @property string $profession
 */
class OurTeam extends \yii\db\ActiveRecord
{
    public $imageFile;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'web_our_team';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['imageFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'jpeg, png, jpg'],
            [['name', 'profession'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'photo' => 'Photo',
            'name' => 'Name',
            'profession' => 'Profession',
        ];
    }

            public function upload()
    {
        if ($this->validate()) {
            $extension = $this->imageFile->getExtension();
            $baseName = md5($this->imageFile->baseName.date('Y-m-d h:i:s'));
            $fileName= $baseName.'.'.$extension;
            $this->imageFile->saveAs('uploads/ourteam/' . $fileName);
            return $fileName;
        } else {
            return false;
        }
    }
}
