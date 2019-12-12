<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%about_studio_content}}`.
 */
class m190905_111612_create_about_studio_content_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%about_studio_content}}', [
            'id' => $this->primaryKey(),
            'photo' => $this->text(),
            'text' => $this ->text(),
            'page' =>$this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%about_studio_content}}');
    }
}
