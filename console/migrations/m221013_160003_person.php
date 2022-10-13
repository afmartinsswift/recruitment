<?php

use yii\db\Migration;

/**
 * Class m221013_160003_person
 */
class m221013_160003_person extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('person', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'email' => $this->string()->notNull()->unique(),
            'status' => $this->smallInteger()->notNull()->defaultValue(1),
        ]);

        
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m221013_160003_person cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m221013_160003_person cannot be reverted.\n";

        return false;
    }
    */
}
