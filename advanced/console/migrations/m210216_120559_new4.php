<?php
use console\component\check;
use yii\db\Migration;

/**
 * Class m210216_120559_new4
 */
class m210216_120559_new4 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        if(Check::check_tbl('tbl')){
           echo "success";
        }else{
           echo "tbl already exist";
        }

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
       
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210216_120559_new4 cannot be reverted.\n";

        return false;
    }
    */
}
