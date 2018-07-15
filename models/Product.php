<?php
/**
 * Created by PhpStorm.
 * User: Suhovienko
 * Date: 09.06.2018
 * Time: 19:03
 */

namespace app\models;

use yii\db\ActiveRecord;

class Product extends ActiveRecord
{
    //Если модель называется как таблица, то данные из базы получаются сами
    public static function tableName()
    {
        return 'product';
    }

    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }
}