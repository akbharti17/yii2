<?php

use yii\db\Migration;
use console\component\check;

/**
 * Class m210217_042403_new22
 */
class m210217_042403_new22 extends Migration
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
        // echo "m210217_042403_new22 cannot be reverted.\n";

        // return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210217_042403_new22 cannot be reverted.\n";

        return false;
    }
    */
}
