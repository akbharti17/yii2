<?php

use yii\db\Migration;
use console\component\check;

/**
 * Class m210217_075636_newindexcheck
 */
class m210217_075636_newindexcheck extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        print_r(Check::indcheck('tbl','UK')['primaryKey']);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210217_075636_newindexcheck cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210217_075636_newindexcheck cannot be reverted.\n";

        return false;
    }
    */
}
