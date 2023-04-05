<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\ItensCompra $model */

$this->title = 'Create Itens Compra';
$this->params['breadcrumbs'][] = ['label' => 'Itens Compras', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="itens-compra-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
