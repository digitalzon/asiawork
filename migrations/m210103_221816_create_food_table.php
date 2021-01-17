<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%food}}`.
 */
class m210103_221816_create_food_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%food}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'categories_id' => $this->integer()->defaultValue(1),
            'calorie' => $this->float()->notNull(),
            'protein' => $this->float()->notNull(),
            'fats' => $this->float()->notNull(),
            'carbon' => $this->float()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%food}}');
    }
}
