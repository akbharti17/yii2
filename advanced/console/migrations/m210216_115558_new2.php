<?php

use yii\db\Migration;
use console\component\check;

/**
 * Class m210216_115558_new2
 */
class m210216_115558_new2 extends Migration
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
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210216_115558_new2 cannot be reverted.\n";

        return false;
    }
    */
}
