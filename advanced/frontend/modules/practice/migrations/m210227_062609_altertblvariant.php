<?php

use yii\db\Migration;
use frontend\modules\practice\component\Check;

/**
 * Class m210227_062609_altertblvariant
 */
class m210227_062609_altertblvariant extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function init()
    {
        $this->db="db1";
        parent::init();
    }
    public function safeUp()
    {
        if(Check::indcheck('variant','product_id')){
              $this->addIndex('product_id','variant');
           
        }else{
            echo "already exits";
        }
       

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210227_062609_altertblvariant cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210227_062609_altertblvariant cannot be reverted.\n";

        return false;
    }
    */
}
