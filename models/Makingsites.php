<?php

namespace app\models;

use Yii;
use yii\helpers\Url;
use yii\web\UploadedFile;
/**
 * This is the model class for table "web_makingsites".
 *
 * @property int $id
 * @property string $url1
 * @property string $photo
 * @property string $name1
 * @property string $name2
 * @property string $page
 */
class Makingsites extends \yii\db\ActiveRecord
{
     public $imageFile;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'web_makingsites';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['imageFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'jpeg, png, jpg'],
            ['string'],
            [['url1', 'url2', 'name1', 'name2', 'page'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'url1' => 'Url1',
            'url2' => 'Url2',
            'photo' => 'Photo',
            'name1' => 'Name1',
            'name2' => 'Name2',
            'page' => 'Page',
        ];
    }
    public function upload()
    {
        if ($this->validate()) {
            $extension = $this->imageFile->getExtension();
            $baseName = md5($this->imageFile->baseName.date('Y-m-d h:i:s'));
            $fileName= $baseName.'.'.$extension;
            $this->imageFile->saveAs('uploads/makingsite/' . $fileName);
            return $fileName;
        } else {
            return false;
        }
    }
    public static function getContents($page) {
        return self::find()->where(['page' => $page])->all();
    }
}
