<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%site_promotion_capital}}`.
 */
class m190828_120020_create_site_promotion_capital_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%site_promotion_capital}}', [
            'id' => $this->primaryKey(),
            'url_adress' => $this->string(),
            'phone_number' => $this->integer(),
            'name' => $this->string(),
            'email' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%site_promotion_capital}}');
    }
}
