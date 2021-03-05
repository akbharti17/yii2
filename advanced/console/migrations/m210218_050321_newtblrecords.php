<?php

use yii\db\Migration;
use console\component\check;

/**
 * Class m210218_050321_newtblrecords
 */
class m210218_050321_newtblrecords extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        if (Check::check_tbl('records')) {
            // echo "success";
            $this->createTable('records', [
                'id' => $this->primaryKey(),
                'name' => $this->string(255)->notNull(),
                'mobile' => $this->bigInteger(),
                'email' => $this->string(255),
                'dob' => $this->dateTime(),
                'image' => $this->string(),
                'password' => $this->string(),
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
       $this->dropTable('records');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210218_050321_newtblrecords cannot be reverted.\n";

        return false;
    }
    */
}
