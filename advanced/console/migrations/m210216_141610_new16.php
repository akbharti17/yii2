<?php

use yii\db\Migration;

/**
 * Class m210216_141610_new16
 */
class m210216_141610_new16 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('tbl','staus',$this->boolean());

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // echo "m210216_141610_new16 cannot be reverted.\n";

        // return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210216_141610_new16 cannot be reverted.\n";

        return false;
    }
    */
}
