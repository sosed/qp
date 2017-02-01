<?php
/** @var $product app\models\Good\Good */

use yii\bootstrap\ActiveForm;
use app\models\Bookmark;
use app\components\Html;

$img = Html::img([ $product->getImgPath() ],
    ['height'=>204, 'width'=>270, 'class'=>'img-responsive', 'data-product-id'=>$product->id]);

$url = ['product/view', 'id' => $product->id];
?>
<div class='col-md-4 col-sm-6 col-xs-12'>
    <div class="product card">
        <?=Html::a($img, $url, ['class' => 'thumbnail'])?>
        <div class="caption">
            <div class="product-title">
                <?=Html::a($product->name, $url)?>
            </div>
        </div>
        <label class="product-price">
            <?=Html::price($product->price)?>
        </label>
        <div class="product-panel">
            <div class="btn-group">
                <?=Html::stepper($product->id)?>
                <button class="btn btn-icon btn-icon-left btn-success btn-compare"
                        data-product-id="<?= $product->id ?>"
                        data-product-count="1">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                </button>
                <?php
                $bookmark = $product->bookmark ? $product->bookmark : new Bookmark([
                    'user_id' => Yii::$app->user->getId(),
                    'product_id' => $product->getId(),
                ]);
                $form = ActiveForm::begin([
                    'id' => 'bookmark',
                    'action' => [ $bookmark->isNewRecord ?  'catalog/add-bookmark' : 'catalog/delete-bookmark' ],
                ]);

                echo $form->field($bookmark, 'user_id')->hiddenInput()->label(false);
                echo $form->field($bookmark, 'product_id')->hiddenInput()->label(false);
                echo Html::submitButton($bookmark->isNewRecord ?
                    '<i class="fa fa-heart-o" aria-hidden="true"></i>' :
                    '<i class="fa fa-heart" aria-hidden="true"></i>',
                    ['class'=>'btn btn-default']
                );
                ActiveForm::end();
                ?>
            </div>

        </div>
    </div>
</div>
