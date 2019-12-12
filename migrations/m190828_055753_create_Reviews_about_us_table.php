<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%Rewievs_about_us}}`.
 */
class m190828_055753_create_Reviews_about_us_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%Reviews_about_us}}', [
            'id' => $this->primaryKey(),
            'photo' => $this->text(),
            'name' => $this->string(),
            'review' => $this->text(),
            'text' => $this->text(),
            'link_url' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%Reviews_about_us}}');
    }
}
