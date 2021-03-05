<?php

use yii\db\Migration;
use frontend\modules\practice\component\Check;
/**
 * Class m210227_054701_addforiegnkey
 */
class m210227_054701_addforiegnkey extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function init(){
        $this->db="db1";
        parent::init();
    }
    public function safeUp()
    {
        if(Check::indcheck('variant','fk-product-product_id')){
            echo "Already exist";
        }else{
            $this->addForeignKey('fk-product-product_id','variant', 'product_id', 'product' , 'product_id','CASCADE');
        }

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210227_054701_addforiegnkey cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210227_054701_addforiegnkey cannot be reverted.\n";

        return false;
    }
    */
}
