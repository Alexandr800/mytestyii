<?php


namespace app\controllers;


class PostController extends AppController{

   public function actionTest(){

       $names = ['Ivanov','Petrov','Sidorov'];


          print_r($names);
          var_dump($names);

   return $this->render('test');


     }
}