<?php

use yii\db\Migration;
use console\component\check;

/**
 * Class m210217_040444_new20
 */
class m210217_040444_new20 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        if(Check::check_col('idss','tbl')){
            echo "Column not Exist";
        }else{       
            $this->alterColumn('tbl', 'idss', $this->integer());
        }

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210217_040444_new20 cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210217_040444_new20 cannot be reverted.\n";

        return false;
    }
    */
}
