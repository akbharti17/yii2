<?php

use yii\db\Migration;

/**
 * Class m210216_134031_new9
 */
class m210216_134031_new9 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addPrimaryKey('PK','tbl','id');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // echo "m210216_134031_new9 cannot be reverted.\n";

        // return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210216_134031_new9 cannot be reverted.\n";

        return false;
    }
    */
}
