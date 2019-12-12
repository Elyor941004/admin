<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%website_development_advantages}}`.
 */
class m190828_105439_create_website_development_advantages_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%website_development_advantages}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'advantages' => $this ->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%website_development_advantages}}');
    }
}
