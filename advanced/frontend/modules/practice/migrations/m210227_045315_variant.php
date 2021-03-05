<?php

use yii\db\Migration;
use frontend\modules\practice\component\Check;

/**
 * Class m210227_045315_variant
 */
class m210227_045315_variant extends Migration
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

        if (Check::check_tbl('variant')) {
            echo "success";
            $this->createTable('variant', [
                'id' => $this->bigPrimaryKey(),
                'product_id' => $this->integer()->unique(),
                'variant_id' => $this->integer(),
                'price' => $this->money(),
                'inventory'=>$this->string(255),
            ]);
        } else {
            echo 'failed';
        }

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // echo "m210227_045315_variant cannot be reverted.\n";

        // return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210227_045315_variant cannot be reverted.\n";

        return false;
    }
    */
}
