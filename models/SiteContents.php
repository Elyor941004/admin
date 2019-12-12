<?php

namespace app\models;
use yii\helpers\Url;
use yii\web\UploadedFile;


use Yii;

/**
 * This is the model class for table "web_site_contents".
 *
 * @property int $id
 * @property string $poto
 * @property string $name
 * @property string $text
 * @property string $page
 */
class SiteContents extends \yii\db\ActiveRecord
{
     public $imageFile;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'web_site_contents';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['imageFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'jpeg, png, jpg'],
            [['text'], 'string'],
            [['name', 'page'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'poto' => 'Upload Photo',
            'name' => 'Name',
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
            $this->imageFile->saveAs('uploads/makingsites/' . $fileName);
            return $fileName;
        } else {
            return false;
        }
    }

    public static function getContents($page) {
        return self::find()->where(['page' => $page])->all();
    }
    public static function getContent($page) {
        return self::find()->where(['page' => $page])->all();
    }
}
