<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%phone_number}}`.
 */
class m190827_063219_create_phone_number_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%phone_number}}', [
            'id' => $this->primaryKey(),
            'phone_number' => $this->integer(),
            'page' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%phone_number}}');
    }
}
