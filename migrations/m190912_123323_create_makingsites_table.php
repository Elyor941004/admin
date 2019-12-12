<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%makingsites}}`.
 */
class m190912_123323_create_makingsites_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%makingsites}}', [
            'id' => $this->primaryKey(),
            'url1' => $this->string(),
            'url2' => $this->string(),
            'photo' => $this->text(),
            'name1' => $this->string(),
            'name2' => $this->string(),
            'page' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%makingsites}}');
    }
}
