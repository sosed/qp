<?php
use app\components\Html;
use app\models\Order;
use app\models\User;

/* @var $products array of sapp\models\OrderProduct*/
/* @var $order app\models\Order*/
/* @var $is_owner bool */
?>

<?php if(\Yii::$app->user->can('admin')) : ?>
    <?= Html::a('Просмотреть в панели администратора',
        ['backend/order/update', 'id' => $order->id], [
        ])
    ?>
<?php endif; ?>

<h3>Заказ № <?=$order->id?> </h3>
<div class="row">
    <div class="col-sm-6">
        <table class="table">
            <tr>
                <td class="key">Email заказчика</td>
                <td class="value"><?=User::cachedFindOne($order->user_id)->email?></td>
            </tr>
            <tr>
                <td class="key">Дата заказа</td>
                <td class="value"><?=date('d.m.Y', $order->created_at)?></td>
            </tr>
            <tr>
                <td class="key">Текущий статус</td>
                <td class="value"><?=$order->status_str?></td>
            </tr>
            <?php if($order->haveSecretKey() and $is_owner and $order->user_id == Yii::$app->user->identity->getId()) : ?>
                <tr>
                    <td class="key">Секретный ключ (не сообщайте его никому, кроме менеджера при выдаче заказа)</td>
                    <td class="value"><?=$order->password?></td>
                </tr>
            <?php endif; ?>
            <tr>
                <td class="key">Сумма заказа</td>
                <td class="value">
                    <?=$order->getTotalPriceHtml()?>
                </td>
            </tr>
            <tr>
            <tr>
                <td class="key">Сумма к оплате</td>
                <td class="value"><?=is_null($pr = $order->getConfirmedPriceHtml()) ? '-' : $pr ?>
                </td>
            </tr>
        </table>
    </div>
</div>

<h3>Состав заказа</h3>
<table class="table">
    <tr><th>Товар</th><th>Цена</th><th>Количество: Подтверждено/Заказано</th></tr>
    <?php
    foreach($products as $p) {
        $price = Html::price($p->old_price);
        echo "<tr><td>$p->product_name</td><td>$price</td><td>" .
            ($p->confirmed_count === null ? '-' : $p->confirmed_count) . "/ $p->products_count</td></tr>";
    }
    ?>
</table>

<?php if($order->canPaid() and $is_owner) : ?>
    <div>
        <?= Html::a('Оплатить', ['pay', 'id' => $order->id], [
            'class' => 'btn btn-success btn-lg ',
            'data' => [
                'method' => 'post',
            ],

        ]) ?>
    </div>
<?php endif; ?>
<?php if($order->canCanceled() and $is_owner) : ?>
    <div>
        <?= Html::a('Отменить заказ', ['cancel', 'id' => $order->id], [
            'class' => 'btn btn-warning btn-lg ',
            'data' => [
                'method' => 'post',
            ],

        ]) ?>
    </div>
<?php endif; ?>
<?php if($order->status == Order::STATUS_ORDERED and Yii::$app->user->can('manager')) : ?>
    <div>
        <?= Html::a('Готов к выдаче', ['order-ready', 'id' => $order->id], [
            'class' => 'btn btn-success btn-lg ',
            'data' => [
                'confirm' => 'Вы уверены?',
                'method' => 'post',
            ],

        ]) ?>
    </div>
<?php endif; ?>
