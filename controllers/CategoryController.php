<?php
/**
 * Created by PhpStorm.
 * User: Suhovienko
 * Date: 11.06.2018
 * Time: 11:53
 */

namespace app\controllers;

use app\models\Category;
use app\models\Product;
use Yii;
use yii\data\Pagination;
use yii\web\HttpException;

class CategoryController extends AppController
{
    //Действие по-умолчанию
    public function actionIndex()
    {
        //Разпродажа
        $sale = Product::find()->where(['sale' => '1'])->limit(4)->all();
        //Новые продукты
        $new = Product::find()->where(['new' => '1'])->limit(4)->all();
        //Избранные продукты
        $hits = Product::find()->where(['hit' => '1'])->limit(4)->all();
        $this->setMeta('BIG SHOPE');
        return $this->render('index', compact('hits', 'new', 'sale'));
    }

    public function actionView($id)
    {
        //$id = Yii::$app->request->get('id');
        $category = Category::findOne($id);
        if (empty($category)) {
            throw new HttpException(404, 'Такой категории нет');
        }
        $products = Product::find()->where(['category_id' => $id])->all();

        $this->setMeta('HOME SHOPPE | ' . $category->name, $category->keywords, $category->description);
        return $this->render('view', compact('products', 'category'));
    }

    public function actionSearch()
    {
        $q = trim(Yii::$app->request->get('q'));
        $this->setMeta('BIG SHOPE | Поиск: ' . $q);
        //Если пустой поисковой запрос
        if (!$q)
            return $this->render('search');
        $query = Product::find()->where(['like', 'name', $q]); //Используя Like который равняется name, берем из $q
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 3, 'forcePageParam' => false, 'pageSizeParam' => false]);
        //offset - с какой записи начинать выборку
        //limit - сколько записей взять
        //all - взять все записи
        $products = $query->offset($pages->offset)->limit($pages->limit)->all();
        return $this->render('search', compact('products', 'pages', 'q'));
    }
}