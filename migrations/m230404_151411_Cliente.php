<?php

use yii\db\Migration;

/**
 * Class m230404_151411_Cliente
 */
class m230404_151411_Cliente extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this -> createTable('Cliente',[
            'id'=>$this->primaryKey(),
            'nome'=>$this->string()->notNull(),
            'cpf'=>$this->string()->notNull(),
            'email'=>$this->string()->notNull(),
            'endereco'=>$this->text()->notNull(),
            'telefone'=>$this->string()
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('Cliente');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230404_151411_Cliente cannot be reverted.\n";

        return false;
    }
    */
}
