<?php

use yii\db\Migration;

/**
 * Class m210216_141449_new15
 */
class m210216_141449_new15 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('tbl','status');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // echo "m210216_141449_new15 cannot be reverted.\n";

        // return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210216_141449_new15 cannot be reverted.\n";

        return false;
    }
    */
}
