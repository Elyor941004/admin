<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%pricesites}}`.
 */
class m190913_093451_create_pricesites_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%pricesites}}', [
            'id' => $this->primaryKey(),
            'title' => $this->text(),
            'price' => $this->integer(),
            'name' => $this->text(),
            'page' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%pricesites}}');
    }
}
