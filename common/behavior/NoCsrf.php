<?php
/**
 * Created by PhpStorm.
 * Author: 火柴
 * Email:49650007@qq.com
 * Date: 2017/5/11
 * Time: 16:38
 */

namespace common\behavior;

use yii;
use yii\base\ActionEvent;
use yii\base\Behavior;
use yii\web\Controller;

class NoCsrf extends Behavior
{
    public $controller;
    public $actions = [];

    public function events()
    {
        return [Controller::EVENT_BEFORE_ACTION => 'beforeAction'];
    }

    public function beforeAction($event)
    {
        $action = $event->action->id;
        if (in_array($action, $this->actions)) {
            $this->controller->enableCsrfValidation = false;
        }
    }

}