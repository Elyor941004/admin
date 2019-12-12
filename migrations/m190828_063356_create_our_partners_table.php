<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%our_partners}}`.
 */
class m190828_063356_create_our_partners_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%our_partners}}', [
            'id' => $this->primaryKey(),
            'photo' => $this->text(),
            'information' => $this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%our_partners}}');
    }
}
