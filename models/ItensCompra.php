<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "itens_compra".
 *
 * @property int $id
 * @property float|null $preco
 * @property int|null $quantidade
 * @property int|null $produto_id
 * @property int|null $compra_id
 *
 * @property Compra $compra
 * @property Produto $produto
 */
class ItensCompra extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'itens_compra';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['preco'], 'number'],
            [['quantidade', 'produto_id', 'compra_id'], 'integer'],
            [['compra_id'], 'exist', 'skipOnError' => true, 'targetClass' => Compra::class, 'targetAttribute' => ['compra_id' => 'id']],
            [['produto_id'], 'exist', 'skipOnError' => true, 'targetClass' => Produto::class, 'targetAttribute' => ['produto_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'preco' => 'Preco',
            'quantidade' => 'Quantidade',
            'produto_id' => 'Produto ID',
            'compra_id' => 'Compra ID',
        ];
    }

    /**
     * Gets query for [[Compra]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCompra()
    {
        return $this->hasOne(Compra::class, ['id' => 'compra_id']);
    }

    /**
     * Gets query for [[Produto]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProduto()
    {
        return $this->hasOne(Produto::class, ['id' => 'produto_id']);
    }
}
