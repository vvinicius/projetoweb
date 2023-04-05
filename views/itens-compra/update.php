<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\ItensCompra $model */

$this->title = 'Update Itens Compra: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Itens Compras', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="itens-compra-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
