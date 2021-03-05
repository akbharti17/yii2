<?php

use yii\db\Migration;
use console\component\check;

/**
 * Class m210217_040747_new21
 */
class m210217_040747_new21 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        if(Check::check_col('lastname','tbl')){
            echo "Column not Exist";
        }else{       
            $this->alterColumn('tbl', 'lastname', $this->string(255));
        }


    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // echo "m210217_040747_new21 cannot be reverted.\n";

        // return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210217_040747_new21 cannot be reverted.\n";

        return false;
    }
    */
}
