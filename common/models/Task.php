<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%task}}".
 *
 * @property int $id
 * @property int $category_id
 * @property string $title
 * @property string $content
 * @property string $created_uid
 * @property int $status
 * @property string $created_at
 * @property string $updated_at
 */
class Task extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%task}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_id', 'created_uid', 'status', 'created_at', 'updated_at'], 'integer'],
            [['title', 'content', 'created_uid', 'created_at', 'updated_at'], 'required'],
            [['content'], 'string'],
            [['title'], 'string', 'max' => 60],
            [['title'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Category ID',
            'title' => 'Title',
            'content' => 'Content',
            'created_uid' => 'Created Uid',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }


    public function gettaskUser(){
        return $this->hasOne(User::className(), ['id'=>'created_uid']);
    }

    public function gettaskCategory(){
        return $this->hasOne(Category::className(), ['id'=>'category_id']);
    }


}
