<?php

namespace app\modules\post;

/**
 * post module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * {@inheritdoc}
     */

    public $layout = '/post';
    public $controllerNamespace = 'app\modules\post\controllers';

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }
}
