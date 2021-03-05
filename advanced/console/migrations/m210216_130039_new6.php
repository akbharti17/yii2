<?php

use yii\db\Migration;
use console\component\check;

/**
 * Class m210216_130039_new6
 */
class m210216_130039_new6 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        if (Check::check_col('idss', 'tbl')) {
            echo "Column Already Exist";
        } else {
            $this->addColumn('tbl', 'lastname', $this->string(64));
        }
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // echo "m210216_130039_new6 cannot be reverted.\n";

        // return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210216_130039_new6 cannot be reverted.\n";

        return false;
    }
    */
}
