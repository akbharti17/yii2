<?php

use yii\db\Migration;
use frontend\modules\practice\component\Check;

/**
 * Class m210227_053858_addforiegnkey
 */
class m210227_053858_addforiegnkey extends Migration
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
        $this->dropForeignKey('fk-product-product_id','product');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210227_053858_addforiegnkey cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210227_053858_addforiegnkey cannot be reverted.\n";

        return false;
    }
    */
}
