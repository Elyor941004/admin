<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%to_order}}`.
 */
class m190830_124123_create_to_order_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%to_order}}', [
           'id' => $this->primaryKey(),
            'services' => $this->string(),
            'name' => $this->string(),
            'phone_number' => $this ->integer(),
            'email' => $this ->string(),
            'text' => $this ->text(),
            'file' => $this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%to_order}}');
    }
}
