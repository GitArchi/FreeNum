<?php

namespace app\modules\FreeNums\controllers;


use app\modules\Astrconf\models\Sipusers;
use DOMComment;
use yii\data\ArrayDataProvider;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;

class DefaultController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['webapp-admin'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
        $formModel = Sipusers::find()->all();
        $testArray = [];
        $resultArray = [];
        $finishArray = [];
        $fatalityArray = [];
        $k = 0;
        $l = 0;
        $o = 0;
        $m = 0;

        foreach ($formModel as $var) {
            if (in_array(substr($var['name'], 0, 1), [4])) {
                $testArray[$k] = [
                    'name' => $var['name'],
                ];
                $k++;
            }
        }
        array_multisort($testArray);
        foreach ($testArray as $var) {
            $resultArray[$l] = $var['name'];

            $l++;
        }

        for ($i=count($testArray);$i < 900; $i++ ){
           $resultArray[$i] = 0;
        }

        foreach (range(4100, 4999) as $number) {
            $finishArray[$o] = $number;
            $o++;
        }

        for ($i=0;$i < count($finishArray);$i++) {
            if (!in_array($finishArray[$i],$resultArray)) {
                $fatalityArray[$m]['name'] = $finishArray[$i];
                $m++;
            }
        }

        $provider = new ArrayDataProvider([
            'allModels' => $fatalityArray,

        ]);

        return $this->render('index', [
            'formodel' => $fatalityArray,
            'dataProvider' => $provider,
        ]);


    }
    public function actionSearch()
    {
        return $this->render('search');
    }
}