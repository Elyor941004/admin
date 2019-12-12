<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;
/**
 * This is the model class for table "web_vacancies".
 *
 * @property int $id
 * @property string $photo
 * @property string $profession
 *
 * @property Subvacancies[] $subvacancies
 */
class Vacancies extends \yii\db\ActiveRecord
{
    public $imageFile;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'web_vacancies';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['imageFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'jpeg, png, jpg'],
            [['profession'], 'string', 'max' => 255],
            [['profession'], 'required'],
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
            'profession' => 'Profession',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubvacancies()
    {
        return $this->hasMany(Subvacancies::className(), ['vacancies_id' => 'id']);
    }

    public function upload()
    {
        if ($this->validate()) {
            $extension = $this->imageFile->getExtension();
            $baseName = md5($this->imageFile->baseName.date('Y-m-d h:i:s'));
            $fileName= $baseName.'.'.$extension;
            $this->imageFile->saveAs('uploads/vacancies/' . $fileName);
            return $fileName;
        } else {
            return false;
        }
    }
}
