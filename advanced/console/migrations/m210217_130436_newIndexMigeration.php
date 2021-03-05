<?php

use yii\db\Migration;
use console\component\check;

/**
 * Class m210217_130436_newIndexMigeration
 */
class m210217_130436_newIndexMigeration extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        if(Check::indcheck('product_variant','UK')){
            echo "not exist";
        }else{
            echo "exist";
        }

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // echo "m210217_130436_newIndexMigeration cannot be reverted.\n";

        // return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210217_130436_newIndexMigeration cannot be reverted.\n";

        return false;
    }
    */
}
