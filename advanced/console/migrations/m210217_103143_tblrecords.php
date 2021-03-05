<?php

use yii\db\Migration;
use console\component\check;

/**
 * Class m210217_103143_tblrecords
 */
class m210217_103143_tblrecords extends Migration
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
        echo "m210217_103143_tblrecords cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210217_103143_tblrecords cannot be reverted.\n";

        return false;
    }
    */
}
