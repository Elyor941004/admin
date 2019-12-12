<?php

namespace app\models;
use Yii;
use yii\helpers\Url;
use yii\web\UploadedFile;
/**
 * This is the model class for table "web_sites_information".
 *
 * @property int $id
 * @property string $name
 * @property string $photo
 * @property string $information
 * @property string $page
 */
class SiteInfomation extends \yii\db\ActiveRecord
{
    public $imageFile;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'web_sites_information';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['imageFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'jpeg, png, jpg'],
            [['information'], 'string'],
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
            'name' => 'Name',
            'photo' => 'Photo',
            'information' => 'Information',
            'page' => 'Page',
        ];
    }
    public function upload()
    {
        if ($this->validate()) {
            $extension = $this->imageFile->getExtension();
            $baseName = md5($this->imageFile->baseName.date('Y-m-d h:i:s'));
            $fileName= $baseName.'.'.$extension;
            $this->imageFile->saveAs('uploads/siteinformation/' . $fileName);
            return $fileName;
        } else {
            return false;
        }
    }
    public static function getContents($page) {
        return self::find()->where(['page' => $page])->all();
    }

}
