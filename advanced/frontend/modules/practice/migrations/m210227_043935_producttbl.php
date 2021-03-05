<?php

use yii\db\Migration;
use frontend\modules\practice\component\Check;

/**
 * Class m210227_043935_producttbl
 */
class m210227_043935_producttbl extends Migration
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

        if (Check::check_tbl('product')) {
            echo "success";
            $this->createTable('product', [
                'id' => $this->bigPrimaryKey(),
                'product_id' => $this->integer()->unique(),
                'title' => $this->string(255),
                'created_at' => $this->dateTime(),
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
        echo "m210227_043935_producttbl cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210227_043935_producttbl cannot be reverted.\n";

        return false;
    }
    */
}
