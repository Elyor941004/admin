<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%submenu}}`.
 */
class m190827_063216_create_submenu_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%submenu}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'url' => $this->string(),
            'menu_id' => $this->integer(),
        ]);
        $this->createIndex(
            'idx-web_submenu-menu_id',
            '{{%submenu}}',
            'menu_id'
        );
        $this->addForeignKey(
            'fk-web_submenu-menu_id',
            '{{%submenu}}',
            'menu_id',
            '{{%menu}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey(
            'fk-web_submenu-menu_id',
            '{{%submenu}}'
        );
        $this->dropIndex(
           'idx-web_submenu-menu_id',
            '{{%submenu}}'
        );
        $this->dropTable('{{%submenu}}');

    }
}
