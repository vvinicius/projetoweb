<?php

use yii\db\ForeignKeyConstraint;
use yii\db\Migration;

/**
 * Class m230404_200228_Compra
 */
class m230404_200228_Compra extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this -> createTable('Compra',[
            'id'=>$this->primaryKey(),
            'valortotal'=>$this->float(),
            'data'=>$this->date()->notNull(),
            'hora'=>$this->time(),
            'cliente_id'=>$this->integer()
        ]);
        $this->addForeignKey('cliente_fk','Compra','cliente_id','Cliente','id','RESTRICT');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('cliente_fk','Compra');
        $this->dropTable('Compra');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230404_200228_Compra cannot be reverted.\n";

        return false;
    }
    */
}
