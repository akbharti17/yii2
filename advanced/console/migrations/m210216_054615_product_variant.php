<?php

use yii\db\Migration;

/**
 * Class m210216_054615_product_variant
 */
class m210216_054615_product_variant extends Migration
{
    /**
     * {@inheritdoc}
     */
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
        // $this->$this->addForeignKey('product_variant_product_id','product_variant','product_id','products','id', $delete=null, $update=null);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // echo "m210216_054615_product_variant cannot be reverted.\n";
        $this->dropTable('product_variant');

        // return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210216_054615_product_variant cannot be reverted.\n";

        return false;
    }
    */
}
