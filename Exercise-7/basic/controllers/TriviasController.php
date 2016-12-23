<?php

namespace app\controllers;

class TriviasController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
