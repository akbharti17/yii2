<?php

use yii\db\Migration;
use console\component\check;

/**
 * Class m210217_040115_new19
 */
class m210217_040115_new19 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        if(Check::check_col('lastname','tbl')){
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
        echo "m210217_040115_new19 cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210217_040115_new19 cannot be reverted.\n";

        return false;
    }
    */
}
