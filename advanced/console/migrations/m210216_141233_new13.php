<?php

use yii\db\Migration;

/**
 * Class m210216_141233_new13
 */
class m210216_141233_new13 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropTable('tbl');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // echo "m210216_141233_new13 cannot be reverted.\n";

        // return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210216_141233_new13 cannot be reverted.\n";

        return false;
    }
    */
}
