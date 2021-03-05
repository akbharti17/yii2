<?php

use yii\db\Migration;
use console\component\check;

/**
 * Class m210217_134920_newmigration
 */
class m210217_134920_newmigration extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        if (Check::indcheck('product_variant', 'UK')) {

            echo "exist";
        } else {
            echo "not exist";
        }
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // echo "m210217_134920_newmigration cannot be reverted.\n";

        // return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210217_134920_newmigration cannot be reverted.\n";

        return false;
    }
    */
}
