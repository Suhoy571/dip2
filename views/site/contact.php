<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
?>
<?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>
    <div class="container">
        <div class="alert alert-success">
            Thank you for contacting us. We will respond to you as soon as possible.
        </div>
    </div>
<? else: ?>
    <div class="container">
        <div class="main">
            <div class="reservation_top">
                <div class=" contact_right">
                    <h3>Contact Form</h3>
                    <div class="contact-form">
                        <?php $form = ActiveForm::begin(); ?>
                        <span><label>Name</label></span>
                        <?= $form->field($model, 'name')->textInput(['autofocus' => true, 'class' => 'textbox'])->label(false) ?>
                        <span><label>E-mail</label></span>
                        <?= $form->field($model, 'email')->textInput(['class' => 'textbox'])->label(false) ?>
                        <span><label>Subject</label></span>
                        <?= $form->field($model, 'subject')->textInput(['class' => 'textbox'])->label(false) ?>
                        <span><label>Message</label></span>
                        <?= $form->field($model, 'body')->textArea(['rows' => 6, 'class' => 'textbox'])->label(false) ?>
                        <span><label>Verification Code</label></span>
                        <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                            'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                        ])->label(false) ?>
                        <div class="form-group">
                            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                        </div>
                        <div class="clearfix"></div>
                        <?php ActiveForm::end(); ?>
                        <address class="address">
                            <p>9870 St Vincent Place, <br>Glasgow, DC 45 Fr 45.</p>
                            <dl>
                                <dt></dt>
                                <dd>Freephone:<span> +1 800 254 2478</span></dd>
                                <dd>Telephone:<span> +1 800 547 5478</span></dd>
                                <dd>FAX: <span>+1 800 658 5784</span></dd>
                                <dd>E-mail:&nbsp; <a href="mailto@vintage.com">info(at)bigshop.com</a></dd>
                            </dl>
                        </address>
                    </div>
                </div>
            </div>
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
<? endif; ?>