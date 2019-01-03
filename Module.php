<?php
namespace kouosl\butce;

use Yii;
use yii\filters\auth\CompositeAuth;
use yii\filters\auth\HttpBasicAuth;
use yii\filters\auth\HttpBearerAuth;
use yii\filters\auth\QueryParamAuth;
use yii\web\HttpException;


/**
 * butce module definition class
 */
class Module extends \kouosl\base\Module
{
    public $controllerNamespace = '';

    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }
    public function behaviors()
    {
        $behaviors = parent::behaviors();
        switch ($this->namespace)
        {
            case 'backend':{

            };break;
            case 'frontend':{

            };break;
            case 'api':{

                $behaviors['authenticator'] = [
                    'class' => CompositeAuth::className(),
                    'authMethods' => [
                        HttpBasicAuth::className(),
                        HttpBearerAuth::className(),
                        QueryParamAuth::className(),
                    ],
                ];
            };break;
            case 'console':{

            };break;
            default:{
                throw new HttpException(500,'behaviors'.$this->namespace);
            };break;
        }

        return $behaviors;

    }

    public function registerTranslations()
    {
        Yii::$app->i18n->translations['site/*'] = [
            'class' => 'yii\i18n\PhpMessageSource',
            'sourceLanguage' => 'en-US',
            'basePath' => '@kouosl/butce/messages',
            'fileMap' => [
                'butce/butce' => 'butce.php',
            ],
        ];
    }

    public static function t($category, $message, $params = [], $language = null)
    {
        return Yii::t('butce/'. $category, $message, $params, $language);
    }

    public static function initRules(){

        return $rules = [
            [
                'class' => 'yii\rest\UrlRule',
                'controller' => [
                   'butce/butces',
                ],
                'tokens' => [
                    '{id}' => '<id:\\w+>'
                ],
                /*'patterns' => [
                    'GET new-action' => 'new-action'
                ]*/
            ],

        ] ;

    }
}
