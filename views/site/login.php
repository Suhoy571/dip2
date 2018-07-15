<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login container">
    <h1><?= Html::encode($this->title) ?></h1>
    <div class="account_grid">
        <div class=" login-right">
            <h3>REGISTERED CUSTOMERS</h3>
            <p>If you have an account with us, please log in.</p>
            <?php $form = ActiveForm::begin(); ?>
            <span>Username</span>
            <?= $form->field($model, 'username')->textInput(['autofocus' => true])->textInput(['class' => 'textbox'])->label(false) ?>
            <span>Password</span>
            <?= $form->field($model, 'password')->textInput(['class' => 'textbox'])->label(false)->passwordInput()?>

            <?= $form->field($model, 'rememberMe')->checkbox([
                'template' => "<div>{input} {label}</div>\n",
            ]) ?>

            <?= Html::submitButton('Login', ['class' => 'acount-btn', 'name' => 'login-button']) ?>

            <?php ActiveForm::end(); ?>
        </div>
        <div class=" login-left">
            <h3>NEW CUSTOMERS</h3>
            <p>By creating an account with our store, you will be able to move through the checkout process faster,
                store multiple shipping addresses, view and track your orders in your account and more.</p>
            <a class="acount-btn" href="register.html">Create an Account</a>
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="sub-cate">
        <div class=" top-nav rsidebar span_1_of_left">
            <h3 class="cate">CATEGORIES</h3>
            <ul class="menu">
                <ul class="menu">
                    <?= \app\components\MenuWidget::widget(['tpl' => 'menu']) ?>
                    <li class="kid-menu"><a href="<?= \yii\helpers\Url::to(['site/contact']) ?>">Contact us</a></li>
                </ul>
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
</div>
