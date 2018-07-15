<?php

namespace app\controllers;

use Yii;

use yii\web\Controller;
use app\models\Contact;
use yii\web\Request;

/* Расширяем класс Controller */

class ContactController extends Controller
{
    /* Объявляем функцию */
    public function actionContact()
    {
        /* Для страницы контактов можно использовать свой слой */
        $this->layout = 'site/contact';

        /* Создаем экземпляр класса */
        $model = new Contact();
        /* получаем данные из формы и запускаем функцию отправки contact, если все хорошо, выводим сообщение об удачной отправке сообщения на почту */
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail']) && $model->save()) {
            Yii::$app->session->setFlash('contactFormSubmitted');
            return $this->refresh();
            /* иначе выводим форму обратной связи */
        } else {
            return $this->render('site/contact', [
                'model' => $model,
            ]);
        }
    }
}