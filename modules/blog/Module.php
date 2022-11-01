<?php


namespace app\modules\blog;
use Yii;
use yii\filters\AccessControl;

/**
 * admin module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $layout = '/blog';
    
    public $controllerNamespace = 'app\modules\blog\controllers';

    /**
     * @inheritdoc
     */

    public function behaviors()
    {
        return [
            'access'    =>  [
                'class' =>  AccessControl::className(),
                'denyCallback'  =>  function($rule, $action)
                {
                    throw new \yii\web\NotFoundHttpException();
                },
                'rules' =>  [
                    [
                        'allow' =>  true,
                        'matchCallback' =>  function($rule, $action)
                        {
                            
                            return Yii::$app->user->identity->isAdmin;
                        }
                    ]
                ]
            ]
        ];
    }

    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }
}
