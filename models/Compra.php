<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "compra".
 *
 * @property int $id
 * @property float|null $valortotal
 * @property string $data
 * @property string|null $hora
 * @property int|null $cliente_id
 *
 * @property Cliente $cliente
 * @property ItensCompra[] $itensCompras
 */
class Compra extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'compra';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['valortotal'], 'number'],
            [['data'], 'required'],
            [['data', 'hora'], 'safe'],
            [['cliente_id'], 'integer'],
            [['cliente_id'], 'exist', 'skipOnError' => true, 'targetClass' => Cliente::class, 'targetAttribute' => ['cliente_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'valortotal' => 'Valortotal',
            'data' => 'Data',
            'hora' => 'Hora',
            'cliente_id' => 'Cliente ID',
        ];
    }

    /**
     * Gets query for [[Cliente]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCliente()
    {
        return $this->hasOne(Cliente::class, ['id' => 'cliente_id']);
    }

    /**
     * Gets query for [[ItensCompras]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItensCompras()
    {
        return $this->hasMany(ItensCompra::class, ['compra_id' => 'id']);
    }
}
