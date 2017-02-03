<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\OrderProduct */

$this->title = "Добавление товара в заказ № $order_id";

$order_id = $model->order_id;
$this->params['breadcrumbs'][] = ['label' => 'Заказы', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => "Редактирование заказа №$order_id",
    'url' => ['update', 'id' => $order_id]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-product-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_product-form', [
        'model' => $model,
    ]) ?>

</div>
