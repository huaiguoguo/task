<?php
/**
 * Created by PhpStorm.
 * Author: 火柴
 * Email:49650007@qq.com
 * Date: 2017/3/22
 * Time: 11:43
 */

namespace frontend\widgets;

use yii\base\Widget;

class FriendLinkWidget extends Widget
{

    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub
    }


    public function run()
    {
        $data = [];
        return $this->render("friendlink", $data);
    }

}