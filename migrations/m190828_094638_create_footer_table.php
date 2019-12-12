<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%footer}}`.
 */
class m190828_094638_create_footer_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%footer}}', [
            'id' => $this->primaryKey(),
            'about_phone_number' => $this->string(),
            'phone_number' => $this->integer(),
            'adress' => $this ->string(),
            'name' => $this ->string(),
            'services' => $this ->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%footer}}');
    }
}
