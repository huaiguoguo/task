<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[NestedCategory]].
 *
 * @see NestedCategory
 */
class NestedCategoryQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return NestedCategory[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return NestedCategory|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
