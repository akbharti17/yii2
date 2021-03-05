<?php

use yii\db\Migration;
use console\component\check;

/**
 * Class m210216_123721_new5
 */
class m210216_123721_new5 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        if(Check::check_col('idss','tbl')){
            $this->addColumn('tbl', 'lastname', $this->string(64));
        }else{
            echo "Column Already Exist";
        }
       

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // echo "m210216_123721_new5 cannot be reverted.\n";

        // return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210216_123721_new5 cannot be reverted.\n";

        return false;
    }
    */
}
