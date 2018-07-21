<?php

/* @var $this yii\web\View */

?>

<div class="container">
    <div class="shoes-grid">
        <a href="single.html">
            <div class="wrap-in">
                <div class="wmuSlider example1 slide-grid">
                    <div class="wmuSliderWrapper">
                        <?php if (!empty($sale)): ?>
                            <? foreach ($sale as $sales) : ?>
                                <article style="position: absolute; width: 100%; opacity: 0;">
                                    <div class="banner-matter">
                                        <div class="col-md-5 banner-bag">
                                            <a href="<?= \yii\helpers\Url::to(['product/view', 'id' => $sales->id]) ?>">
                                                <?= \yii\helpers\Html::img("@web/images/{$sales->img}",
                                                    ['class' => 'img-responsive']) ?>
                                            </a>
                                        </div>
                                        <div class="col-md-7 banner-off">
                                            <h2>FLAT <?= round($sales->price / 50) + 5 ?>% 0FF</h2>
                                            <label><?= $sales->name ?> <b>$<?= $sales->price ?></b></label>
                                            <p>All that you need</p>
                                            <span class="on-get">GET NOW</span>
                                        </div>

                                        <div class="clearfix"></div>
                                    </div>
                                </article>
                            <?php endforeach ?>
                        <?php endif; ?>
                    </div>
        </a>
        <ul class="wmuSliderPagination">
            <li><a href="#" class="">0</a></li>
            <li><a href="#" class="">1</a></li>
            <li><a href="#" class="">2</a></li>
        </ul>
        <script src="js/jquery.wmuSlider.js"></script>
        <script>
            $('.example1').wmuSlider();
        </script>
    </div>
</div>
</a>
<div class="shoes-grid-left">
    <a href="single.html">
        <div class="col-md-6 con-sed-grid">
            <div class=" elit-grid">
                <h4>Nike</h4>
                <label>$ 19.99</label>
                <p>Only is what you need</p>
                <span class="on-get">ADD TO CART</span>
            </div>
            <img class="img-responsive shoe-left" src="/images/sh.jpg" alt=" "/>

            <div class="clearfix"></div>

        </div>
    </a>
    <a href="single.html">
        <div class="col-md-6 con-sed-grid sed-left-top">
            <div class=" elit-grid">
                <h4>Rolex</h4>
                <label>$ 199.90</label>
                <p>Premium class watches</p>
                <span class="on-get">ADD TO CART</span>
            </div>
            <img class="img-responsive shoe-left" src="/images/wa.jpg" alt=" "/>

            <div class="clearfix"></div>
        </div>
    </a>
</div>
<div class="products">
    <h5 class="latest-product">HIT PRODUCTS</h5>
</div>
<div class="product-left">
    <?php if (!empty($hits)): ?>
    <?php $i = 0;
    foreach ($hits

    as $hit):
    $i++; ?>
    <?php if ($i % 3 == 0): ?>
    <div class="col-md-4 chain-grid grid-top-chain">
        <? else: ?>
        <div class="col-md-4 chain-grid">
            <?php endif; ?>
            <a href="<?= \yii\helpers\Url::to(['product/view', 'id' => $hit->id]) ?>">
                <?= \yii\helpers\Html::img("@web/images/{$hit->img}", ['class' => 'img-responsive chain']) ?>
            </a>
            <span class="star"> </span>
            <div class="grid-chain-bottom">
                <h6><a href="<?= \yii\helpers\Url::to(['product/view', 'id' => $hit->id]) ?>"><?= $hit->name ?></a></h6>
                <div class="star-price">
                    <div class="dolor-grid">
                        <span class="actual">$<?= $hit->price ?></span>
                    </div>
                    <a class="now-get get-cart" data-id="<?= $hit->id ?>"
                       href="<?= \yii\helpers\Url::to(['cart/add', 'id' => $hit->id]) ?>">ADD TO CART</a>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
        <?php endif; ?>
        <div class="clearfix"></div>
    </div>
    <div class="products">
        <h5 class="latest-product">LATEST PRODUCTS</h5>
    </div>
    <div class="product-left">
        <?php if (!empty($new)): ?>
        <?php $i = 0;
        foreach ($new

        as $newPr):
        $i++; ?>
        <?php if ($i % 3 == 0): ?>
        <div class="col-md-4 chain-grid grid-top-chain">
            <? else: ?>
            <div class="col-md-4 chain-grid">
                <?php endif; ?>
                <a href="<?= \yii\helpers\Url::to(['product/view', 'id' => $newPr->id]) ?>">
                    <?= \yii\helpers\Html::img("@web/images/{$newPr->img}", ['class' => 'img-responsive chain']) ?>
                </a>
                <span class="star"> </span>
                <div class="grid-chain-bottom">
                    <h6><a href="<?= \yii\helpers\Url::to(['product/view', 'id' => $newPr->id]) ?>"><a
                                    href="single.html"><?= $newPr->name ?></a></h6>
                    <div class="star-price">
                        <div class="dolor-grid">
                            <span class="actual">$<?= $newPr->price ?></span>
                        </div>
                        <a class="now-get get-cart" data-id="<?= $newPr->id ?>"
                           href="<?= \yii\helpers\Url::to(['cart/add', 'id' => $newPr->id]) ?>">ADD TO CART</a>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
            <?php endif; ?>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="sub-cate">
        <div class=" top-nav rsidebar span_1_of_left">
            <h3 class="cate">CATEGORIES</h3>
            <ul class="menu">
                <?= \app\components\MenuWidget::widget(['tpl' => 'menu']) ?>
                <li class="kid-menu">
                    <a href="<?= \yii\helpers\Url::to(['site/contact']) ?>">Contact us</a>
                </li>
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
            <a href="#"><img class="img-responsive chain" src="/images/wat.jpg" alt=" "/></a>
            <div class="grid-chain-bottom chain-watch">
                <span class="actual dolor-left-grid">300$</span>
                <span class="reducedfrom">500$</span>
                <h6><a href="single.html">Lorem ipsum dolor</a></h6>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</div>

<?php ?>
