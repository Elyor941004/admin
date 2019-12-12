<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "web_subvacancies".
 *
 * @property int $id
 * @property string $requeriments
 * @property int $vacancies_id
 *
 * @property Vacancies $vacancies
 */
class Subvacancies extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'web_subvacancies';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['vacancies_id'], 'integer'],
            [['requeriments'], 'string', 'max' => 255],
            [['vacancies_id'], 'exist', 'skipOnError' => true, 'targetClass' => Vacancies::className(), 'targetAttribute' => ['vacancies_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'requeriments' => 'Requeriments',
            'vacancies_id' => 'Vacancies ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVacancies()
    {
        return $this->hasOne(Vacancies::className(), ['id' => 'vacancies_id']);
    }
}
