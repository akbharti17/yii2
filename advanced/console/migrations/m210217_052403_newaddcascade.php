<?php

use yii\db\Migration;

/**
 * Class m210217_052403_newaddcascade
 */
class m210217_052403_newaddcascade extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addForeignKey('fk-product_variant-product_id', 'product_variant', 'product_id', 'products', 'id','CASCADE');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // echo "m210217_052403_newaddcascade cannot be reverted.\n";

        // return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210217_052403_newaddcascade cannot be reverted.\n";

        return false;
    }
    */
}
