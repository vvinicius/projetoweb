<?php

use yii\db\Migration;

/**
 * Class m230404_220346_Categoria
 */
class m230404_220346_Categoria extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this -> createTable('Categoria',[
            'id'=>$this->primaryKey(),
            'nome'=>$this->string()->notNull()
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('Categoria');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230404_220346_Categoria cannot be reverted.\n";

        return false;
    }
    */
}
