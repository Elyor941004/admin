<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%main_footer}}`.
 */
class m190827_070925_create_main_footer_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%main_footer}}', [
            'id' => $this->primaryKey(),
            'adress' =>$this->string(),
            'our_phone_number' =>$this->integer(),
            'link' =>$this->string(),
            'text' =>$this->string(),
            'your_phone_number' =>$this->integer(),
            'email' =>$this->string(),
            'text_about_you' =>$this->string(),
            'text'=>$this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%main_footer}}');
    }
}
