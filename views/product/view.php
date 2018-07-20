<?php

?>
<div class="container">
    <div class=" single_top">
        <div class="single_grid">
            <div class="grid images_3_of_2">
                <!--                <ul id="etalage" class="etalage" style="display: block; width: 302px; height: 535px;">-->
                <!--                    <li class="etalage_thumb thumb_1" style="display: none; background-image: none; opacity: 0;">-->
                <!--                        <a href="optionallink.html">-->
                <!--                            --><? //= \yii\helpers\Html::img("@web/images/{$product->img}", ['class' => 'etalage_thumb_image',
                //                                'style' => "display: inline; width: 300px; height: 400px; opacity: 1;"]) ?>
                <!--                        </a>-->
                <!--                    </li>-->
                <!--                </ul>-->
                <a href="optionallink.html">
                    <?= \yii\helpers\Html::img("@web/images/{$product->img}", ['class' => 'etalage_thumb_image',
                        'style' => "display: inline; width: 300px; height: 400px; opacity: 1;"]) ?>
                </a>
                <div class="clearfix"></div>
            </div>
            <div class="desc1 span_3_of_2">
                <h4><?= $product->name ?></h4>
                <div class="cart-b">
                    <div class="left-n">$<?= $product->price ?></div>
                    <div style="float: left;
    padding-left: 20px;
    padding-top: 5px;">
                        <label>Quantity:</label>
                        <input id="qty" class="" type="text" value="1">
                    </div>
                    <a class="now-get get-cart get-cart-in" data-id="<?= $product->id ?>"
                       href="<?= \yii\helpers\Url::to(['cart/add', 'id' => $product->id]) ?>">ADD TO CART</a>
                    <div class="clearfix"></div>
                </div>
                <h6>In stock</h6>
                <p><?= $product->content ?></p>
                <div class="share">
                    <h5>Share Product :</h5>
                    <ul class="share_nav">
                        <li><a href="#"><img src="/images/facebook.png" title="facebook"></a></li>
                        <li><a href="#"><img src="/images/twitter.png" title="Twiiter"></a></li>
                        <li><a href="#"><img src="/images/rss.png" title="Rss"></a></li>
                        <li><a href="#"><img src="/images/gpluse.png" title="Google+"></a></li>
                    </ul>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <ul id="flexiselDemo1">
            <? foreach ($hits as $hit): ?>
                <li>
                    <?= \yii\helpers\Html::img("@web/images/{$hit->img}") ?>
                    <div class="grid-flex">
                        <a href="<?= \yii\helpers\Url::to(['product/view', 'id' => $hit->id]) ?>">
                            <?= $hit->name ?>
                        </a>
                        <p>$<?= $hit->price ?></p>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
        <script type="text/javascript">
            $(window).load(function () {
                $("#flexiselDemo1").flexisel({
                    visibleItems: 5,
                    animationSpeed: 1000,
                    autoPlay: true,
                    autoPlaySpeed: 3000,
                    pauseOnHover: true,
                    enableResponsiveBreakpoints: true,
                    responsiveBreakpoints: {
                        portrait: {
                            changePoint: 480,
                            visibleItems: 1
                        },
                        landscape: {
                            changePoint: 640,
                            visibleItems: 2
                        },
                        tablet: {
                            changePoint: 768,
                            visibleItems: 3
                        }
                    }
                });

            });
        </script>
        <script type="text/javascript" src="/js/jquery.flexisel.js"></script>

        <div class="toogle">
            <h3 class="m_3">Product Details</h3>
            <p class="m_text"><?= $product->content ?></p>
        </div>
    </div>

    <!---->
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
