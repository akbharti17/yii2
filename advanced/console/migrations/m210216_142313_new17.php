<?php

use yii\db\Migration;

/**
 * Class m210216_142313_new17
 */
class m210216_142313_new17 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->renameColumn('products','updated_at','update_at');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // echo "m210216_142313_new17 cannot be reverted.\n";

        // return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210216_142313_new17 cannot be reverted.\n";

        return false;
    }
    */
}
