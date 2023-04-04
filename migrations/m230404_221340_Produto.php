<?php

use yii\db\Migration;

/**
 * Class m230404_221340_Produto
 */
class m230404_221340_Produto extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this -> createTable('Produto',[
            'id'=>$this->primaryKey(),
            'nome'=>$this->string()->notNull(),
            'preco'=>$this->float(),
            'quantidade'=>$this->integer(),
            'marca_id'=>$this->integer(),
            'categoria_id'=>$this->integer()

        ]);

        $this->addForeignKey('categoria_fk','Produto','categoria_id','Categoria','id','RESTRICT');
        $this->addForeignKey('marca_fk','Produto','marca_id','Marca','id','RESTRICT');


    }
    

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('categoria_fk','Produto');
        $this->dropForeignKey('marca_fk','Produto');
        $this->dropTable('Produto');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230404_221340_Produto cannot be reverted.\n";

        return false;
    }
    */
}
