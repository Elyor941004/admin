<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%sub_vacancies}}`.
 */
class m190828_063618_create_subvacancies_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%subvacancies}}', [
            'id' => $this->primaryKey(),
            'requeriments' => $this->string(),
            'vacancies_id' => $this->integer(),
        ]);
        $this->createIndex(
            'idx-web_subvacancies-vacancies_id',
            '{{%subvacancies}}',
            'vacancies_id'
        );
        $this->addForeignKey(
            'fk-web_subvacancies-vacancies_id',
            '{{%subvacancies}}',
            'vacancies_id',
            '{{%vacancies}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */


    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey(
            'fk-web_subvacancies-vacancies_id',
            '{{%subvacancies}}'

        );
        $this->dropIndex(
            'idx-web_subvacancies-vacancies_id',
            '{{%subvacancies}}'

        );
        $this->dropTable('{{%subvacancies}}');
    }
}
