<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;
use yii\helpers\Url;

/**
 * This is the model class for table "web_about_studio_content".
 *
 * @property int $id
 * @property string $photo
 * @property string $text
 * @property string $page
 */
class AboutStudioContent extends \yii\db\ActiveRecord
{
     public $imageFile;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'web_about_studio_content';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
           [['imageFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'jpeg, png, jpg'],
            [['text'], 'string'],
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
            'photo' => 'Upload Photo',
            'text' => 'Text',
            'page' => 'Page',
        ];
    }
    public function upload()
    {
        if ($this->validate()) {
            $extension = $this->imageFile->getExtension();
            $baseName = md5($this->imageFile->baseName.date('Y-m-d h:i:s'));
            $fileName= $baseName.'.'.$extension;
            $this->imageFile->saveAs('uploads/aboutstudio/' . $fileName);
            return $fileName;
        } else {
            return false;
        }
    }
    public static function getContent($page) {
        return self::find()->where(['page' => $page])->one();
    }
    public static function getContents($page) {
        return self::find()->where(['page' => $page])->all();
    }
}
