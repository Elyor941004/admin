<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%sites_information}}`.
 */
class m190830_110312_create_sites_information_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%sites_information}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'photo' => $this->text(),
            'information' => $this->text(),
            'page' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%sites_information}}');
    }
}
