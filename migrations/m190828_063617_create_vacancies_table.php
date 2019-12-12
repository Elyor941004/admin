<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%vacancies}}`.
 */
class m190828_063617_create_vacancies_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%vacancies}}', [
            'id' => $this->primaryKey(),
            'photo' => $this->text(),
            'profession' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%vacancies}}');
    }
}
