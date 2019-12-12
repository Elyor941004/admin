<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%subservices}}`.
 */
class m190830_114717_create_subservices_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%subservices}}', [
           'id' => $this->primaryKey(),
            'text' => $this->string(),
            'services_id' => $this->integer(),
        ]);
        $this->createIndex(
            'idx-web_subservices-services_id',
            '{{%subservices}}',
            'services_id'
        );
        $this->addForeignKey(
            'fk-web_subservices-services_id',
            '{{%subservices}}',
            'services_id',
            '{{%services}}',
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
            'fk-web_subservices-services_id',
            '{{%subservices}}'
        );
        $this->dropIndex(
           'idx-web_subservices-services_id',
            '{{%subservices}}'
        );
        $this->dropTable('{{%subservices}}');

    }
}
