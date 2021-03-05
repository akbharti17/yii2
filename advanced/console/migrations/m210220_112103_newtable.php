<?php

use yii\db\Migration;

/**
 * Class m210220_112103_newtable
 */
class m210220_112103_newtable extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function init()
    {
        $this->db = 'db1';
        parent::init();
    }
    public function safeUp()
    {
        $this->createTable('product_variant', [
            'id' => $this->bigPrimaryKey(),
            'product_id' => $this->bigInteger()->notNull(),
            'name' => $this->string(255)->notNull(),
            'price' => $this->money(),
            'inventory' => $this->integer(),
            'created_at' => $this->dateTime(),
            'updated_at' => $this->timestamp(),
            'status' => $this->boolean(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210220_112103_newtable cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210220_112103_newtable cannot be reverted.\n";

        return false;
    }
    */
}
