<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%general_content}}`.
 */
class m190828_090922_create_general_content_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%general_content}}', [
            'id' => $this->primaryKey(),
            'text' => $this->text(),
            'page' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%general_content}}');
    }
    public static function getContent($page) {
        return self::find()->where(['page' => $page])->one();
    }
}
