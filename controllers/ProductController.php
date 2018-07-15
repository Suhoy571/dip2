<?php
/**
 * Created by PhpStorm.
 * User: Suhovienko
 * Date: 03.06.2018
 * Time: 17:40
 */

namespace app\controllers;

use app\models\Category;
use app\models\Product;
use HttpException;
use Yii;

class ProductController extends AppController
{
    public function actionView($id)
    {
        //$id = Yii::$app->request->get('id');
        //Ленивая загрузка
        $product = Product::findOne($id);
        //Жадная загрузка
        //$product = Product::find()->with('category')->where(['id' => $id])->limit(1)->one();
        if(empty($product))
            throw new HttpException(404, 'Такой категории нет');

        //Рекомендуемые товары
        $hits = Product::find()->where(['hit' => '1'])->limit(6)->all();

        $this->setMeta('HOME SHOPPE | ' . $product->name, $product->keywords, $product->description);

        return $this->render('view', compact('product', 'hits'));
    }
}