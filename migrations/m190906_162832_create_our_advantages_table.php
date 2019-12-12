<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%our_advantages}}`.
 */
class m190906_162832_create_our_advantages_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%our_advantages}}', [
            'id' => $this->primaryKey(),
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
        $this->dropTable('{{%our_advantages}}');
    }
}
