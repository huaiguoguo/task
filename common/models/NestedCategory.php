<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%nested_category}}".
 *
 * @property int $category_id 自增ID
 * @property string $name 名称
 * @property int $lft
 * @property int $rgt
 */
class NestedCategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%nested_category}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['lft', 'rgt'], 'required'],
            [['lft', 'rgt'], 'integer'],
            [['name'], 'string', 'max' => 18],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'category_id' => '自增ID',
            'name' => '名称',
            'lft' => 'Lft',
            'rgt' => 'Rgt',
        ];
    }

    /**
     * @inheritdoc
     * @return NestedCategoryQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new NestedCategoryQuery(get_called_class());
    }
}
