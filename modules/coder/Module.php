<?php
/**
 * Created by PhpStorm.
 * User: kuratovevgenij
 * Date: 15.04.2018
 * Time: 22:22
 */

namespace app\modules\coder;

class Module extends \yii\base\Module
{
    public function init()
    {
        parent::init();
        $this->params['foo'] = 'bar';
    }
}