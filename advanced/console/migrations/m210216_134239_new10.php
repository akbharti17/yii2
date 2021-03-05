<?php

use yii\db\Migration;

/**
 * Class m210216_134239_new10
 */
class m210216_134239_new10 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createIndex('UK','tbl','name,inventory',$unique=true);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210216_134239_new10 cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210216_134239_new10 cannot be reverted.\n";

        return false;
    }
    */
}
