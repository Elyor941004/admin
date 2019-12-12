<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%website_development_types}}`.
 */
class m190828_105454_create_website_development_types_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%website_development_types}}', [
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
        $this->dropTable('{{%website_development_types}}');
    }
}
