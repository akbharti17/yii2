<?php

use yii\db\Migration;

/**
 * Class m210216_132923_new8
 */
class m210216_132923_new8 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->dropPrimaryKey('PRIMARY','tbl');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // echo "m210216_132923_new8 cannot be reverted.\n";

        // return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210216_132923_new8 cannot be reverted.\n";

        return false;
    }
    */
}
