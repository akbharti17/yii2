<?php

use console\component\check;
use yii\db\Migration;


/**
 * Class m210216_074434_new_migration
 */
class m210216_074434_new_migration extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        if(Check::check_tbl('tbl')){
           echo "success";
        }else{
            echo 'failed';
        }
        // $this->createTable('tbl', [
        //     'id' => $this->bigPrimaryKey(),
        //     'product_id' => $this->bigInteger()->notNull(),
        //     'name' => $this->string(255)->notNull(),
        //     'price' => $this->money(),
        //     'inventory' => $this->integer(),
        //     'created_at' => $this->dateTime(),
        //     'updated_at' => $this->timestamp(),
        //     'status' => $this->boolean(),
        // ]);
        // $this->$this->addForeignKey('product_variant_product_id', 'product_variant', 'product_id', 'products', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {

        $this->dropTable('product_variant');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210216_074434_new_migration cannot be reverted.\n";

        return false;
    }
    */
}
