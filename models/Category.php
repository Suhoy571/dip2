<?php
/**
 * Created by PhpStorm.
 * User: Suhovienko
 * Date: 09.06.2018
 * Time: 18:59
 */

namespace app\models;

use yii\db\ActiveRecord;

class Category extends ActiveRecord
{
    //Если модель называется как таблица, то данные из базы получаются сами
    public static function tableName()
    {
        return 'category';
    }

    public function getProducts()
    {
        return $this->hasMany(Product::className(), ['category_id' => 'id']);
    }
}