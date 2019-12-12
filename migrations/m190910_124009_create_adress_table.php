<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%adress}}`.
 */
class m190910_124009_create_adress_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%adress}}', [
            'id' => $this->primaryKey(),
            'adress' => $this->string(),
            'link_adress' => $this->string(),
            'page' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%adress}}');
    }
}
