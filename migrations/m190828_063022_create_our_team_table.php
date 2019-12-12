<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%our_team}}`.
 */
class m190828_063022_create_our_team_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%our_team}}', [
            'id' => $this->primaryKey(),
            'photo' => $this->text(),
            'name' => $this->string(),
            'profession' => $this->string(),

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%our_team}}');
    }
}
