<?php

use yii\db\Migration;
use console\component\check;


/**
 * Class m210216_141348_new14
 */
class m210216_141348_new14 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        if (Check::check_tbl('tbl')) {
            echo "success";
            $this->createTable('tbl', [
                'id' => $this->bigPrimaryKey(),
                'product_id' => $this->bigInteger()->notNull(),
                'name' => $this->string(255)->notNull(),
                'price' => $this->money(),
                'inventory' => $this->integer(),
                'created_at' => $this->dateTime(),
                'updated_at' => $this->timestamp(),
                'status' => $this->boolean(),
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
        echo "m210216_141348_new14 cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210216_141348_new14 cannot be reverted.\n";

        return false;
    }
    */
}
