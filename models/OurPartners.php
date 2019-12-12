<?php

namespace app\models;

use Yii;
use yii\helpers\Url;
/**
 * This is the model class for table "web_our_partners".
 *
 * @property int $id
 * @property string $photo
 * @property string $information
 */
class OurPartners extends \yii\db\ActiveRecord
{
     public $imageFile;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'web_our_partners';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['imageFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'jpeg, png, jpg'],
            [['information'], 'string'],
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
            'information' => 'Information',
        ];
    }
    public function upload()
    {
        if ($this->validate()) {
            $extension = $this->imageFile->getExtension();
            $baseName = md5($this->imageFile->baseName.date('Y-m-d h:i:s'));
            $fileName= $baseName.'.'.$extension;
            $this->imageFile->saveAs('uploads/ourpartners/' . $fileName);
            return $fileName;
        } else {
            return false;
        }
    }
}
