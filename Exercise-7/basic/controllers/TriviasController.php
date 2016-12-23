<?php

namespace app\controllers;

use app\models\Trivia;
use yii\db\Expression;

class TriviasController extends \yii\web\Controller
{
    public function actionIndex()
    {
      $query = Trivia::find()
        ->orderBy(new Expression('rand()'))
        ->limit(5)
        ->all();

          return $this->render('index', [
        'trivia' => $query,
          ]);
    }
}
