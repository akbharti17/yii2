<?php

use yii\db\Migration;

/**
 * Class m210216_074813_new_migration1
 */
class m210216_074813_new_migration1 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addForeignKey('fk-product_variant-product_id', 'product_variant', 'product_id', 'products', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // echo "m210216_074813_new_migration1 cannot be reverted.\n";

        // return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210216_074813_new_migration1 cannot be reverted.\n";

        return false;
    }
    */
}
