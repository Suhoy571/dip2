<?php
/**
 * Created by PhpStorm.
 * User: Suhovienko
 * Date: 20.06.2018
 * Time: 19:09
 */
?>
<?php
/**
 * Created by PhpStorm.
 * User: Suhovienko
 * Date: 19.06.2018
 * Time: 3:29
 */
?>
<div class="container">
    <div class="women-product">
        <div class=" w_content">
            <div class="women">
                <a href="#"><h4><?= \yii\helpers\Html::encode($q) ?> - <span>Querry items</span></h4></a>
                <ul class="w_nav">
                    <li>Sort :</li>
                    <li><a class="active" href="#">popular</a></li>
                    |
                    <li><a href="#">new </a></li>
                    |
                    <li><a href="#">discount</a></li>
                    |
                    <li><a href="#">price: Low High </a></li>
                    <div class="clearfix"></div>
                </ul>
                <div class="clearfix"></div>
            </div>
        </div>
        <?php if (!empty($products)): ?>
        <?php foreach ($products

        as $product): ?>
        <div class=" product-grid">
            <div class="content_box"><a href="<?= \yii\helpers\Url::to(['product/view', 'id' => $product->id]) ?>">
                    <div class="left-grid-view grid-view-left">
                        <?= \yii\helpers\Html::img("@web/images/{$product->img}", ['class' => 'img-responsive watch-right']) ?>
                        <div class="mask">
                            <div class="info"></div>
                        </div>
                </a>
            </div>
            <h4><a href="#"> <?= $product->name ?></a></h4>
            <p>It is a long established fact that a reader</p>
            <h3>$<?= $product->price ?></h3>
        </div>
    </div>
    <?php endforeach; ?>
    <?php endif; ?>
    <div class="clearfix"></div>
</div>

<div class="sub-cate">
    <div class=" top-nav rsidebar span_1_of_left">
        <h3 class="cate">CATEGORIES</h3>
        <ul class="menu">
            <?= \app\components\MenuWidget::widget(['tpl' => 'menu']) ?>
            <li class="kid-menu"><a href="<?= \yii\helpers\Url::to(['site/contact']) ?>">Contact us</a></li>
        </ul>
    </div>
    <!--initiate accordion-->
    <script type="text/javascript">
        $(function () {
            var menu_ul = $('.menu > li > ul'),
                menu_a = $('.menu > li > a');
            menu_ul.hide();
            menu_a.click(function (e) {
                e.preventDefault();
                if (!$(this).hasClass('active')) {
                    menu_a.removeClass('active');
                    menu_ul.filter(':visible').slideUp('normal');
                    $(this).addClass('active').next().stop(true, true).slideDown('normal');
                } else {
                    $(this).removeClass('active');
                    $(this).next().stop(true, true).slideUp('normal');
                }
            });

        });
    </script>
    <div class=" chain-grid menu-chain">
        <a href="single.html"><img class="img-responsive chain" src="/images/wat.jpg" alt=" "/></a>
        <div class="grid-chain-bottom chain-watch">
            <span class="actual dolor-left-grid">300$</span>
            <span class="reducedfrom">500$</span>
            <h6>Lorem ipsum dolor</h6>
        </div>
    </div>
    <a class="view-all all-product" href="product.html">VIEW ALL PRODUCTS<span> </span></a>
</div>
<div class="clearfix"></div>
</div>
<!---->
