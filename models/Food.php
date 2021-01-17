<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "food".
 *
 * @property int $id
 * @property string $name
 * @property int $categories_id
 * @property double $calorie
 * @property double $protein
 * @property double $fats
 * @property double $carbon
 */
class Food extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'food';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['categories_id'], 'integer'],
            [['calorie', 'protein', 'fats', 'carbon'], 'required'],
            [['calorie', 'protein', 'fats', 'carbon'], 'number'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'categories_id' => 'Categories ID',
            'calorie' => 'Calorie',
            'protein' => 'Protein',
            'fats' => 'Fats',
            'carbon' => 'Carbon',
        ];
    }

    /**
     * {@inheritdoc}
     * @return FoodQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new FoodQuery(get_called_class());
    }
}
