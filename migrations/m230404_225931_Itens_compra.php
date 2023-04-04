<?php

use yii\db\Migration;

/**
 * Class m230404_225931_Itens_compra
 */
class m230404_225931_Itens_compra extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this -> createTable('Itens_compra',[
            'id'=>$this->primaryKey(),
            'preco'=>$this->float(),
            'quantidade'=>$this->integer(),
            'produto_id'=>$this->integer(),
            'compra_id'=>$this->integer()

        ]);

        $this->addForeignKey('produto_fk','Itens_compra','produto_id','Produto','id','RESTRICT');
        $this->addForeignKey('compra_fk','Itens_compra','compra_id','Compra','id','RESTRICT');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('produto_fk','Itens_compra');
        $this->dropForeignKey('compra_fk','Itens_compra');
        $this->dropTable('Itens_compra');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230404_225931_Itens_compra cannot be reverted.\n";

        return false;
    }
    */
}
