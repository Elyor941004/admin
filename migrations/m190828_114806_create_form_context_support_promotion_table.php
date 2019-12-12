<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%form_context_support_promotion}}`.
 */
class m190828_114806_create_form_context_support_promotion_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%form_context_support_promotion}}', [
            'id' => $this->primaryKey(),
            'photo' => $this->text(),
            'name' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%form_context_support_promotion}}');
    }
}
