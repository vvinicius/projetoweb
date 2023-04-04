<?php

use yii\db\Migration;

/**
 * Class m230404_215723_Marca
 */
class m230404_215723_Marca extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this -> createTable('Marca',[
            'id'=>$this->primaryKey(),
            'nome'=>$this->string()->notNull()
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('Marca');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230404_215723_Marca cannot be reverted.\n";

        return false;
    }
    */
}
