<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%website_development_characters}}`.
 */
class m190828_105416_create_website_development_characters_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%website_development_characters}}', [
            'id' => $this->primaryKey(),
            'photo' => $this->text(),
            'name' => $this->string(),
            'text' => $this ->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%website_development_characters}}');
    }
}
