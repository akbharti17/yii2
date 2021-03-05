<?php

use yii\db\Migration;

/**
 * Class m210216_132513_new7
 */
class m210216_132513_new7 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('tbl','lastname');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // echo "m210216_132513_new7 cannot be reverted.\n";

        // return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210216_132513_new7 cannot be reverted.\n";

        return false;
    }
    */
}
