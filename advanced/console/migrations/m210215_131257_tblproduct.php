<?php

use yii\db\Migration;

/**
 * Class m210215_131257_tblproduct
 */
class m210215_131257_tblproduct extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('products', [
            'id' => $this->bigPrimaryKey(),
            'name' => $this->string(255)->notNull(),
            'product_handel' => $this->string(255)->unique(),
            'images' => $this->string(255),
            'price' => $this->money(),
            'inventory' => $this->integer(),
            'created_at' => $this->dateTime(),
            'updated_at' => $this->timestamp(),
            'status' => $this->boolean()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // echo "m210215_131257_tblproduct cannot be reverted.\n";
        $this->dropTable('products');
        // return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210215_131257_tblproduct cannot be reverted.\n";

        return false;
    }
    */
}
