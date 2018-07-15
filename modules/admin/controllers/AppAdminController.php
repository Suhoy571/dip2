<?php
/**
 * Created by PhpStorm.
 * User: Suhovienko
 * Date: 23.06.2018
 * Time: 19:47
 */

namespace app\modules\admin\controllers;

use yii\filters\AccessControl;
use yii\web\Controller;

class AppAdminController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'] //Все действия разрешены только для пользователей с ролью авторизованный пользователь
                    ]
                ]
            ]
        ];
    }
}