<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%comment}}".
 *
 * @property int $id
 * @property string $pid
 * @property string $content
 * @property string $created_uid
 * @property string $created_at
 * @property string $updated_at
 */
class Comment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%comment}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pid', 'content', 'created_uid', 'created_at', 'updated_at'], 'required'],
            [['pid', 'created_uid', 'created_at', 'updated_at'], 'integer'],
            [['content'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'pid' => 'Pid',
            'content' => 'Content',
            'created_uid' => 'Created Uid',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
