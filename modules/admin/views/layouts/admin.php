<?php

/* @var $this \yii\web\View */

/* @var $content string */

use app\assets\ltAppAsset;
use app\widgets\Alert;
use yii\bootstrap\Modal;
use yii\helpers\Html;
use app\assets\AppAsset;

AppAsset::register($this);
ltAppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <?= Html::csrfMetaTags() ?>
    <title>Админка | <?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<!--header-->
<div class="header">
    <div class="top-header">
        <div class="container">
            <div class="top-header-left">
                <ul class="support">
                    <li><a href="#"><label> </label></a></li>
                    <li><a href="#">24x7 live<span class="live"> support</span></a></li>
                </ul>
                <ul class="support">
                    <li class="van"><a href="#"><label> </label></a></li>
                    <li><a href="#">Free shipping <span class="live">on order over $500</span></a></li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="top-header-right">
                <div class="down-top">
                    <select class="in-drop">
                        <option value="English" class="in-of">English</option>
                        <option value="Japanese" class="in-of">Japanese</option>
                        <option value="French" class="in-of">French</option>
                        <option value="German" class="in-of">German</option>
                    </select>
                </div>
                <div class="down-top top-down">
                    <select class="in-drop">

                        <option value="Dollar" class="in-of">Dollar</option>
                        <option value="Yen" class="in-of">Yen</option>
                        <option value="Euro" class="in-of">Euro</option>
                    </select>
                </div>
                <!---->
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="bottom-header">
        <div class="container">
            <div class="header-bottom-left">
                <div class="logo">
                    <a href="<?= \yii\helpers\Url::home() ?>">
                        <?= Html::img('@web/images/logo.png', ['alt' => 'Big Shope']) ?>
                    </a>
                </div>
                <div class="search">
                    <form action="<?= \yii\helpers\Url::to(['category/search']) ?>" method="get">
                        <input placeholder="Search" name="q" type="text" value="" onfocus="this.value = '';"
                               onblur="if (this.value == '') {this.value = '';}">
                        <input type="submit" value="SEARCH">
                    </form>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="header-bottom-right">
                <?php if (!Yii::$app->user->isGuest): ?>
                    <div class="account"><a
                                href="<?= \yii\helpers\Url::to(['/site/logout']) ?>"><span> </span><?= Yii::$app->user->identity['username'] ?>
                            (Exit)
                        </a></div>
                <?php endif; ?>
                <ul class="login">
                    <?php if (!Yii::$app->user->isGuest): ?>
                        <li><a href="<?= \yii\helpers\Url::to(['/admin']) ?>" class="active">To Admin panel</a></li>
                    <?php else: ?>
                        <li><a href="login.html"><span> </span>LOGIN</a></li>
                        |
                        <li><a href="register.html">SIGNUP</a></li>
                    <?php endif; ?>
                </ul>
                <div class="cart"><a href="#" onclick="return getCart()"><span> </span>CART</a></div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>

<div class="header">
    <div class="bottom-header">
        <div class="container">
            <ul class="nav navbar-nav collapse navbar-collapse">
                <li><a href="<?= \yii\helpers\Url::to(['/admin']) ?>" class="active">Home/Заказы</a></li>
                <li><a href="<?= \yii\helpers\Url::to(['/admin']) ?>" class="active">Home/Товары</a></li>
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                        aria-expanded="false">Категории</a>
                    <ul role="menu" class="dropdown-menu">
                        <li><a href="<?= \yii\helpers\Url::to(['category/index']) ?>">Список категорий</a></li>
                        <li><a href="<?= \yii\helpers\Url::to(['category/create']) ?>">Добавить категорию</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                        aria-expanded="false">Товары</a>
                    <ul role="menu" class="dropdown-menu">
                        <li><a href="<?= \yii\helpers\Url::to(['product/index']) ?>">Список товаров</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="container">
    <?= $content ?>
</div>

<div class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="latter">
                <h6>NEWS-LETTER</h6>
                <div class="sub-left-right">
                    <form>
                        <input type="text" value="Enter email here" onfocus="this.value = '';"
                               onblur="if (this.value == '') {this.value = 'Enter email here';}"/>
                        <input type="submit" value="SUBSCRIBE"/>
                    </form>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="latter-right">
                <p>FOLLOW US</p>
                <ul class="face-in-to">
                    <li><a href="#"><span> </span></a></li>
                    <li><a href="#"><span class="facebook-in"> </span></a></li>
                    <div class="clearfix"></div>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-bottom-cate">
                <h6>CATEGORIES</h6>
                <ul>
                    <li><a href="#">Curabitur sapien</a></li>
                    <li><a href="#">Dignissim purus</a></li>
                    <li><a href="#">Tempus pretium</a></li>
                    <li><a href="#">Dignissim neque</a></li>
                    <li><a href="#">Ornared id aliquet</a></li>
                    <li><a href="#">Ultrices id du</a></li>
                    <li><a href="#">Commodo sit</a></li>
                    <li><a href="#">Urna ac tortor sc</a></li>
                    <li><a href="#">Ornared id aliquet</a></li>
                    <li><a href="#">Urna ac tortor sc</a></li>
                    <li><a href="#">Eget nisi laoreet</a></li>
                    <li><a href="#">Faciisis ornare</a></li>
                </ul>
            </div>
            <div class="footer-bottom-cate bottom-grid-cat">
                <h6>FEATURE PROJECTS</h6>
                <ul>
                    <li><a href="#">Curabitur sapien</a></li>
                    <li><a href="#">Dignissim purus</a></li>
                    <li><a href="#">Tempus pretium</a></li>
                    <li><a href="#">Dignissim neque</a></li>
                    <li><a href="#">Ornared id aliquet</a></li>
                    <li><a href="#">Ultrices id du</a></li>
                    <li><a href="#">Commodo sit</a></li>
                </ul>
            </div>
            <div class="footer-bottom-cate">
                <h6>TOP BRANDS</h6>
                <ul>
                    <li><a href="#">Curabitur sapien</a></li>
                    <li><a href="#">Dignissim purus</a></li>
                    <li><a href="#">Tempus pretium</a></li>
                    <li><a href="#">Dignissim neque</a></li>
                    <li><a href="#">Ornared id aliquet</a></li>
                    <li><a href="#">Ultrices id du</a></li>
                    <li><a href="#">Commodo sit</a></li>
                    <li><a href="#">Urna ac tortor sc</a></li>
                    <li><a href="#">Ornared id aliquet</a></li>
                    <li><a href="#">Urna ac tortor sc</a></li>
                    <li><a href="#">Eget nisi laoreet</a></li>
                    <li><a href="#">Faciisis ornare</a></li>
                </ul>
            </div>
            <div class="footer-bottom-cate cate-bottom">
                <h6>OUR ADDERSS</h6>
                <ul>
                    <li>Aliquam metus dui.</li>
                    <li>orci, ornareidquet</li>
                    <li> ut,DUI.</li>
                    <li>nisi, dignissim</li>
                    <li>gravida at.</li>
                    <li class="phone">PH : 6985792466</li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
