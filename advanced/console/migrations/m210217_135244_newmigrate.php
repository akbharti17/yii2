<?php

use yii\db\Migration;
use console\component\check;

/**
 * Class m210217_135244_newmigrate
 */
class m210217_135244_newmigrate extends Migration
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
        echo "m210217_135244_newmigrate cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210217_135244_newmigrate cannot be reverted.\n";

        return false;
    }
    */
}
