<?php

use yii\db\Migration;

/**
 * Class m210217_052202_newcascadeondel
 */
class m210217_052202_newcascadeondel extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropForeignKey('fk-product_variant-product_id','product_variant');


    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // echo "m210217_052202_newcascadeondel cannot be reverted.\n";

        // return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210217_052202_newcascadeondel cannot be reverted.\n";

        return false;
    }
    */
}
