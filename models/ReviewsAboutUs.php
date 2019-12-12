<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;
use yii\helpers\Url;

/**
 * This is the model class for table "web_reviews_about_us".
 *
 * @property int $id
 * @property string $photo
 * @property string $name
 * @property string $review
 * @property string $text
 * @property string $link_url
 */
class ReviewsAboutUs extends \yii\db\ActiveRecord
{
      public $imageFile;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'web_reviews_about_us';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['imageFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'jpeg, png, jpg'],
            [['review', 'text'], 'string'],
            [['name', 'link_url'], 'string', 'max' => 255],
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
            'review' => 'Review',
            'text' => 'Text',
            'link_url' => 'Link Url',
        ];
    }
    public function upload()
    {
        if ($this->validate()) {
            $extension = $this->imageFile->getExtension();
            $baseName = md5($this->imageFile->baseName.date('Y-m-d h:i:s'));
            $fileName= $baseName.'.'.$extension;
            $this->imageFile->saveAs('uploads/reviews/' . $fileName);
            return $fileName;
        } else {
            return false;
        }
    }
}
