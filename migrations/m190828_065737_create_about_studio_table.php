<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%about_studio}}`.
 */
class m190828_065737_create_about_studio_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%about_studio}}', [
            'id' => $this->primaryKey(),
            'type' => $this->string(),
            'photo' => $this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%about_studio}}');
    }
}
