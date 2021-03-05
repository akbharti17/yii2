<?php

use yii\db\Migration;

/**
 * Class m210225_090057_newmigrate
 */
class m210225_090057_newmigrate extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function init()
    {
        $this->db = 'db';
        parent::init();
    }
    public function safeUp()
    {
        $this->createTable('dommy', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255),
            'mobile' => $this->string(255),
          
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210225_090057_newmigrate cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210225_090057_newmigrate cannot be reverted.\n";

        return false;
    }
    */
}
