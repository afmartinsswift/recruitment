<?php

use yii\db\Migration;

/**
 * Class m221013_160452_contact
 */
class m221013_160452_contact extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('contact', [
            'id' => $this->primaryKey(),
            'personId' => $this->integer()->notNull(),
            'countryCode' => $this->string()->notNull(),
            'number' => $this->string(9)->notNull()->unique(),
            'status' => $this->smallInteger()->notNull()->defaultValue(1),

        ]);

        // creates index for column `author_id`
        $this->createIndex(
            'idx-contact-personId',
            'contact',
            'personId'
        );

        // add foreign key for table `user`
        $this->addForeignKey(
            'fk-contact-personId',
            'contact',
            'personId',
            'person',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m221013_160452_contact cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m221013_160452_contact cannot be reverted.\n";

        return false;
    }
    */
}
