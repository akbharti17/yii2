<?php

use yii\db\Migration;
use console\component\check;

/**
 * Class m210216_135001_new11
 */
class m210216_135001_new11 extends Migration
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
        // echo "m210216_135001_new11 cannot be reverted.\n";

        // return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210216_135001_new11 cannot be reverted.\n";

        return false;
    }
    */
}
