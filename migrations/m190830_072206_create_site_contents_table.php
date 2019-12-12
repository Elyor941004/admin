<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%site_contents}}`.
 */
class m190830_072206_create_site_contents_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%site_contents}}', [
            'id' => $this->primaryKey(),
            'poto' => $this->text(),
            'name' => $this->string(),
            'text' => $this->text(),
            'page' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%site_contents}}');
    }
}
