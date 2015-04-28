<?php

namespace app\controllers;

use app\models\SignupForm;
use app\models\Test;
use Yii;
use yii\data\ActiveDataProvider;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use yii\widgets\ListView;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
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

    /**
     * @inheritdoc
     */
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

    public function actionButton()
    {
        return $this->render('button');
    }

    public function actionState()
    {
        return $this->render('state');
    }

    public function actionAvatar()
    {
        return $this->render('avatar');
    }

    public function actionBlankslate()
    {
        return $this->render('blankslate');
    }

    public function actionTooltip()
    {
        return $this->render('tooltip');
    }

    public function actionNav()
    {
        return $this->render('nav');
    }
}
