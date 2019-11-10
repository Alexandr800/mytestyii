<?php


namespace app\controllers;

use yii\web\Controller;

class MyController extends Controller {

    public function actionIndex () {
   $hi = 'Hello, world!';
      $names = ['Ivanov','Petrov','Sidorov'];

        return $this->render('index' ,  ['hello'=> $hi, 'names' => $names ]);

}



}